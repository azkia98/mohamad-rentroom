<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminPanelController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }


    public function search(Request $request)
    {
        $search = $request->search;
        $teachers = User::whereTeacher(true)
            ->Where('name', 'LIKE', "%{$search}%")
            ->orWhere('familyname', 'LIKE', "%{$search}%")
            ->orWhere('national_code', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->get();


        return view('admin.search',compact('teachers','search'));
    }
}
