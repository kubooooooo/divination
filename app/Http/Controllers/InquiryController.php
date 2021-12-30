<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InquiryRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Contact;

class InquiryController extends Controller
{
    private const FORM_DATA_KEY = 'inquiry.form';

    public function show()
    {
        return view('inquiry.index');
    }

    public function confirm(InquiryRequest $request)
    {
        $form_data = $request->validated();
        $request->session()->put(self::FORM_DATA_KEY, $form_data);

        return view('inquiry.confirm', $form_data);
    }

    public function finish(Request $request)
    {
        if (!$request->session()->has(self::FORM_DATA_KEY)) {
            return redirect()->route('inquiry');
        }

        $form_data = $request->session()->pull(self::FORM_DATA_KEY);

        // ここでMailtrapへ送信処理
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        Mail::to('test@contact.com')
            ->send(new TestMail($contact));

        return view('inquiry.finish');
    }
}
