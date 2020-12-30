@extends('mail.layouts.master')

@section('title', 'Reset your Password')

@section('header')
    A request to reset password was received from your {{env("APP_NAME")}} Account
@endsection

@php
    $url = env('APP_URL');
        
    if(strtolower($password_reset->type) === 'admin')
    {
        $url = env('ADMIN_URL');
    }

    if(strtolower($password_reset->type) === 'company')
    {
        $url = env('PORTAL_URL');
    }
@endphp

@section('content')
    <p style="font-weight: 600; font-size: 18px; margin-bottom: 0;">Hey</p>

    <p style="font-weight: 700; font-size: 20px; margin-top: 0; --text-opacity: 1; color: #ff5850;">
        {{$account->first_name}} {{$account->last_name}}!
    </p>

    <p style="margin: 0 0 24px;">
        A request to reset password was received from your
        <span style="font-weight: 600;">{{env('APP_NAME')}}</span> Account.
    </p>

    <p style="margin: 0 0 24px;">Use this link to reset your password and login.</p>

    <a href="{{$url}}/reset-password/{{$password_reset->token}}" style="display: block; font-size: 14px; line-height: 100%; margin-bottom: 24px; --text-opacity: 1; color: #3AD29F; text-decoration: none;">
        {{$url}}/reset-password/{{$password_reset->token}}
    </a>
    
    <table style="font-family: 'Montserrat',Arial,sans-serif;" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
        <td style="mso-padding-alt: 16px 24px; --bg-opacity: 1; background-color: #3AD29F; border-radius: 4px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif;">
            <a href="{{$url}}/reset-password/{{$password_reset->token}}" style="display: block; font-weight: 600; font-size: 14px; line-height: 100%; padding: 16px 24px; --text-opacity: 1; color: #ffffff; text-decoration: none;">Reset Password &rarr;</a>
        </td>
        </tr>
    </table>

    <p style="margin: 24px 0;">
        <span style="font-weight: 600;">Note:</span> This link is valid for 24 hours from the time it was
        sent to you and can be used to change your password only once.
    </p>

    <p style="margin: 0;">
        If you did not intend to deactivate your account or need our help keeping the account, please
        contact us at
        <a href="mailto:support@example.com" class="hover-underline" style="--text-opacity: 1; color: #3AD29F; text-decoration: none;">support@example.com</a>
    </p>
@endsection