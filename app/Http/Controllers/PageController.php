<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function investment()
    {
      return view('pages.ourinvestment');
    }

    public function login()
    {
      return view('auth.login');
    }

    public function forgot()
    {
      return view('pages.forgotpassword');
    }

    public function phonerecovery()
    {
      return view('auth.phonerecovery');
    }

    public function signup()
    {
      return view('auth.signup');
    }
  
    public function help()
    {
      return view('pages.help');
    }

    public function contact()
    {
      return view('pages.contact');
    }

    public function support()
    {
      return view('pages.support');
    }

    public function faq()
    {
      return view('pages.faq');
    }

    public function whoare()
    {
      return view('pages.who-are');
    }

    public function about()
    {
      return view('pages.about');
    }

    public function legal()
    {
      return view('pages.legal-disclaimer');
    }

    public function privacy()
    {
      return view('pages.privacy-policy');
    }

    public function investmentplan(){
      return view('pages.investment-plan');
    }

    public function moneymarket()
    {
      return view('pages.moneymarket');
    }

    public function goalbased()
    {
      return view('pages.goalbased');
    }

    public function umrah()
    {
      return view('pages.umrah');
    }

    public function profile()
    {
      return view('pages.profile');
    }

    public function alerts()
    {
      return view('pages.alerts');
    }

    public function wallet()
    {
      return view('pages.wallet');
    }

    public function loginhelp()
    {
      return view('pages.loginhelp');
    }

    public function dashboardwho()
    {
      return view('pages.dashboard-who');
    }

    public function myporfolio()
    {
      return view('pages.portfolio');
    }

    public function sukukfund()
    {
      return view('pages.sukukfund');
    }

    public function verifyemail()
    {
      return view('pages.verifyemail');
    }
}

