<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        // dd($admin);
        if (!empty($admin->role) && $admin->role > 0) {
            return redirect()->route('admin.login');
        } else {
            return view('pages.dashboard.home.index');
        }
    }
}
