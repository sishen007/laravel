<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ShowProfile extends Controller
{
    public function __invoke($id)
    {
        $user = User::findOrFail($id);
        return view('user.profile', compact('user'));
    }
}
