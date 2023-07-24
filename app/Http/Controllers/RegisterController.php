<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Register;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|ends_with:gmail.com,yahoo.com',
            'phone_number' => 'required|digits:11'
        ]);

        $email_info = [
            'title' => 'Confirmation Mail',
            'body' => 'this is to confirm your registeration'
        ];

        $register = new Register;
        $register->name = $request->input('name');
        $register->email = $request->input('email');
        $register->phone_number = $request->input('phone_number');

        $register->save();
        Mail::to($request->input('email'))->send(new SendMail($email_info));
    }

    public function myApi(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
            'mobile_network' => 'required|in:mtn,airtel,9mobile,glo',
            'ref_code' => 'required|unique',
            'message' => 'required'

        ]);
        $reponse = [
            'phone_number' => '08182281634',
            'mobile_network' => 'mtn',
            'status' => 'success',
            'message' => 'Registration successful'
        ];
        return response()->json($reponse);
    }

    public function encryption()
    {
        $text = 'Welcome to Lagos';
        $key = 'novajii123';
        $iv = openssl_random_pseudo_bytes(16);

        $encrypt = openssl_encrypt($text, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
        $encrypted_msg = bin2hex($encrypt);

        $decrypt = openssl_decrypt(hex2bin($encrypted_msg), 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);

        return view('myencryption', [

            'encrypted_msg' => $encrypted_msg,
            'decrypted_msg' => $decrypt

        ]);
    }
}
