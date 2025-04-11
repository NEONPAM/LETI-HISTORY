<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Data_fake;
class DataFakeController extends Controller
{
    public function store (Request $request)
    {
        $request->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|email',
        ]);

        $token = Str::random(64);

        try {
            // Create new user record
            $data = Data_fake::create([
                'name' => $request->name,
                'email' => $request->email,
                'email_verification_token' => $token,
            ]);
    
            // Send email
            Mail::send('emails.verify', ['token' => $token], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Подтвердить электронную почту');
            });
    
            // If email sent successfully
            session()->flash('success', 'Регистрация прошла успешно! Пожалуйста, проверьте электронную почту для подтверждения аккаунта.');
            return redirect()->route('home');
    
        } catch (\Exception $e) {
            // If there was an error in sending email, show error
            session()->flash('error', 'Ошибка: Не удалось отправить подтверждающее письмо. Пожалуйста, проверьте адрес электронной почты.');
            return redirect()->back(); // Redirect lại trang đăng ký
        }


    }

    public function verifyEmail($token)
    {
        $user = Data_fake::where('email_verification_token', $token)->first();

        if (!$user) {
            return redirect()->route('home')->with('error', 'Срок действия сессии истёк. Пожалуйста, перезагрузите страницу для повторного входа.');
        }

        $user->email_verified_at = now();
        $user->email_verification_token = null;
        $user->save();

        session(['user_name' => $user->name]);
        return redirect()->route('home');
    }

    public function logout()
    {
    // Xóa session 'user_name'
    session()->forget('user_name');
    
    // Chuyển hướng về trang chủ hoặc trang đăng nhập
    return redirect()->route('home'); // Hoặc trang login
    }
}
