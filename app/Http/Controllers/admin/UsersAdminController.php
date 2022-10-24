<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersAdminController extends Controller
{
    //

    public function index()
    {
        $users = User::all();
        $title = 'Users | Diagnosa Penyakit';
        return view('pages.admin.users', compact('users', 'title'));
    }
}
