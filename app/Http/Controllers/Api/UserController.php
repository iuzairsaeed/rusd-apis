<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\ProfileUpdateRequest;
use App\Http\Requests\Auth\AvatarUpdateRequest;
use App\Http\Requests\Auth\PinUpdateRequest;
use App\Http\Requests\Auth\BiometricUpdateRequest;
use App\Repositories\Repository;
use App\Models\User;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = new Repository($model);
    }

    function updateProfile(ProfileUpdateRequest $request)
    {
        $user = auth()->user();
        $user->update($request->all());

        $user['status'] = $user->status == Pending() ? $user->setStatus(Completed()) : $user->status;

        return response([
            'message' => 'Profile has been updated.',
            'user' => $user
        ], 200);
    }

    function updateBiometric(BiometricUpdateRequest $request){
        try {
            $user = auth()->user();
            $user->biometric = $request->biometric;
            $user->update();
            return response([
                'message' => 'Biometric has been added.',
            ], 200);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    function updatePin(PinUpdateRequest $request){
        try {
            $user = auth()->user();
            $user->pin = $request->pin;
            $user->update();
            return response([
                'message' => 'Pin has been added.',
            ], 200);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    function updateAvatar(AvatarUpdateRequest $request)
    {
        $user = auth()->user();
        $data = $request->all();

        if($request->hasFile('avatar')){
            $deleteFile = $user->getAttributes()['avatar'] != 'no-image.png' ? $user->avatar : null;
            $file_name = uploadFile($request->avatar, avatarsPath(), $deleteFile);
            $user->avatar = $file_name;
        }
        $user->update();

        return response([
            'message' => 'Avatar has been updated.',
            'avatar' => avatarsPath().$file_name
        ], 200);
    }

    public function getAllUsers() {
        $data = User::where('is_dummy', true)->get(['name','username']);
        collect($data)->map(function ($item) {
            $item['pass'] = 'secret';
        });
        return response($data, 200);
    }
}
