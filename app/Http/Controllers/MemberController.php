<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function addMember(Request $request) {
        $incomingFields = $request->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'middleName' => ['required'],
            'address' => ['required'],
            'email' => ['required'],
            'contactNum' => ['required']
        ]);

        // $incomingFields = strip_tags($incomingFields['firstName']);
        // $incomingFields = strip_tags($incomingFields['lastName']);
        // $incomingFields = strip_tags($incomingFields['middleName']);
        // $incomingFields = strip_tags($incomingFields['address']);
        // $incomingFields = strip_tags($incomingFields['email']);
        // $incomingFields = strip_tags($incomingFields['contactNum']);

        Member::create($incomingFields);

        return redirect('/');
    }
}
