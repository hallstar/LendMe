<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Constants\PasswordResetType;
use App\Mail\SendPasswordLink;
use App\Models\PasswordReset;
use App\Models\AdminUser;
use Inertia\Inertia;
use Validator;
use Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showForm()
    {
        return Inertia::render('Admin/Auth/ForgotPassword');
    }

    public function forgot(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'  => 'required|email|exists:admin_users,email',
        ]);

        if($validator->fails())
        {
            return redirect()->route('admin.password.request')->withInput()->withErrors($validator);
        }

        $account = AdminUser::where("email", $request->email)->first();

        // send email
        PasswordReset::where('email', $request->email)->where('type', PasswordResetType::ADMIN)->delete();

        $password_reset = new PasswordReset;
        $password_reset->token = Str::random(64);
        $password_reset->email = $request->email;
        $password_reset->type = PasswordResetType::ADMIN;
        $password_reset->save();

        Mail::to($request->get("email"))->queue(new SendPasswordLink($account, $password_reset));
    
        return redirect()->route('admin.password.request')->with('success', 'Please Check Your Email.');

    }
}
