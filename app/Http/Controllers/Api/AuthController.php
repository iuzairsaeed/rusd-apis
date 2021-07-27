<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Auth\RegisterController;
use App\Notifications\ForgotPasswordNotification;
use App\Http\Requests\Auth\ChangePasswordRequest;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;
use Hash;
use Validator;
use Session;
use Password;

class AuthController extends Controller
{
    protected function response($user, $statusCode, $message)
    {
        // Revoke previous tokens...
        $user->tokens()->delete();

        $token = $user->createToken('app-user')->plainTextToken;
        $data = [
            'message' => $message,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'username' => $user->username,
                'email' => $user->email,
                'country' => $user->country,
                'dob' => $user->dob,
                'gender' => $user->gender,
                'address' => $user->address,
                'street' => $user->street,
                'city' => $user->city,
                'zipcode' => $user->zipcode,
                'status' => $user->status,
            ],
            'token' => $token,
            'expiration_minutes' => (int)config('sanctum.expiration')
        ];

        return response($data, $statusCode);
    }

    function login(Request $request)
    {
        $user = User::where('username', $request->username)->orWhere('email', $request->username)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'These credentials do not match our records.'
            ], 400);
        }
        if(!$user->is_active){
            return response([
                'message' => 'Your account has been disabled. Please contact support.'
            ], 400);
        }

        $user->update();
        return $this->response($user, 200, 'You have successfully logged in.');
    }

    function user()
    {
        return $this->response(auth()->user(), 200, 'Success');
    }

    function logout()
    {
        auth()->user()->tokens()->delete();
        Session::flush();
        return response([
            'message' => 'You have logged out successfully.'
        ], 200);
    }

    function register(RegisterRequest $request, RegisterController $register)
    {
        $user = $register->create($request->all());
        
        // Assigning Role ( Normal ) to user
        $role = Role::where('name', 'normal')->first();
        $user->assignRole([$role->id]);

        $user->setStatus(Pending());

        return $this->response($user, 201, 'You have registered successfully');
    }

    public function forgot_password(Request $request) {

        $user = User::where('email', $request->email)->first();

        if(!$user){
            return response([
                'message' => 'No user exists with provided email.'
            ], 404);
        }
        if (!$user->is_active){
            return response([
                'message' => 'Your account has been disabled. Please contact support.'
            ], 404);
        }

        $code = rand ( 10000 , 99999 );
        $user->remember_token = $code;
        $user->update();

        $user->notify(new ForgotPasswordNotification($code));

        return response([
            'message' => 'An email has been sent to your account with new password. (If you cannot find Check in Spam/Junk)'
        ], 200);
    }

    public function checkResetCode(Request $request) {
		$user = User::where('email', $request->email)->first();

        if(!$user){
            return response([
                'message' => 'No user exists with provided email.'
            ], 404);
        }
        if (!$user->is_active){
            return response([
                'message' => 'Your account has been disabled. Please contact support.'
            ], 404);
        }
        if ($user->remember_token == $request->code){
            return response([
                'message' => 'Code has been verified.'
            ], 200);
        }

        return response([
            'message' => 'OTP Code is not valid.'
        ], 404);

	}

    public function resetPassword(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->remember_token = null;
        $user->save();

        return $this->response($user, 200, 'Password has been updated successfully.');
    }

    function forgotPassword(ForgotPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if(!$user){
            return response([
                'message' => 'No user exists with provided email.'
            ], 404);
        }
        if (!$user->is_active){
            return response([
                'message' => 'Your account has been disabled. Please contact support.'
            ], 404);
        }

        $newPassword = substr(md5(microtime()),rand(0,26),8);
        $user->password = Hash::make($newPassword);
        $user->update();

        $user->notify(new ForgotPasswordNotification($newPassword));

        return response([
            'message' => 'An email has been sent to your account with new password. (If you cannot find Check in Spam/Junk)'
        ], 200);
    }

    function changePassword(ChangePasswordRequest $request) {
        $user = auth()->user();
        $user->password = Hash::make($request->password);
        $user->save();

        return $this->response($user, 200, 'Password has been updated successfully.');
    }
}
