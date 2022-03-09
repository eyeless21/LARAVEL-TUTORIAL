<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function _invoke(Newsletter $newsletter) {
        request()->validate(['email' => 'required|email']);
        try{
            $newsletter->subscribe(request('email'));
        }catch(Exception $e){
            throw ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter list.'
            ]);
        }
        return redirect('/')->with('success', 'You are now signed up for our newsletter!');
    }
}
