<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function registerUser(Request $request){
        $incomingFields = $request->validate([
            'name' => ['required', Rule::unique('users','name')],
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => ['required','min:10'],
            'role' => ['required'],
            'state' => ['required']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginName' => ['required', Rule::unique('users','name')],
            'loginPassword' => ['required','min:10'],
        ]);

        if(auth()->attempt(['name' => $incomingFields['loginName'], 'password'=>$incomingFields['loginPassword']])){
            $request->session()->regenerate();
        }
        return redirect('/');

    }

}
