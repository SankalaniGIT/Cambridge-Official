<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Contact\Contact;

use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    //
    public function index()
    {
        if(Auth::guest()){
            return redirect()->route('login');
        }else{
            return view('contact.contact',['success' => '','bgColor' => '']);
        }
    }

    public function updateContactDetails(Request $request)
    {


        $valid = $this->validate($request, [
            'address' => 'required',
            'email' => 'required|email',
            'telephone' => 'required'
        ]);

        if (!$valid) {

            $address = $request->input('address');

            $email = $request->input('email');

            $telephone = $request->input('telephone');

            $contact = Contact::find(1);

            $contact->address = $address;
            $contact->email = $email;
            $contact->telephone = $telephone;

            if ($contact->save()) {
                return view('contact.contact', ['success' => 'Succesfully Added','bgColor' => 'green']);
            } else {
                return view('contact.contact', ['success' => 'Error Occurred','bgColor' => 'red']);
            }

        }
    }

}
