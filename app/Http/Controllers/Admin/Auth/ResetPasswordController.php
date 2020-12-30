<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Constants\PasswordResetType;
use App\Models\PasswordReset;
use App\Models\AdminUser;
use Inertia\Inertia;
use Validator;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showForm($token)
    {

        $password_reset = PasswordReset::where('token', $token)->where('type', PasswordResetType::ADMIN)->first();

        if(empty($password_reset))
        {
            return redirect()->route('admin.password.request')->with('error', 'Invalid request token, please try again.');
        }

        return Inertia::render('Admin/Auth/ResetPassword', [
            'account' => [
                'email' => $password_reset->email,
                'token' => $password_reset->token,
            ]
        ]);
    }

    public function reset(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        if($validator->fails())
        {
            return redirect()->route('admin.password.reset', $request->token)->withInput()->withErrors($validator);
        }

        $password_reset = PasswordReset::where('token', $request->token)->where('type', PasswordResetType::ADMIN)->first();

        if(empty($password_reset))
        {
            return redirect()->route('admin.password.reset', $request->token)->with('error', 'Invalid token.');
        }

        $account = AdminUser::where('email', $request->email)->first();

        if(empty($account))
        {
            return redirect()->route('admin.password.reset', $request->token)->with('error', 'Invalid account');
        }

        $account->password = Hash::make($request->input('password'));
        $account->save();

        $password_reset->delete();

        return redirect()->route('admin.login')->with('success', 'Password updated successfully.');
    }
}
