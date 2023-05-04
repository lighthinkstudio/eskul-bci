<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Halaman Dashboard
    public function index()
    {
        $data = [
            'title' => 'Halaman Dashboard',
        ];
        return view('admin.dashboard.index', $data);
    }

}
