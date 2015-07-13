<?php

namespace App\Http\Controllers
{
    class DashboardController extends Controller
    {
        public function index()
        {
            $data = [
                'title' => 'Dashboard',
            ];
            
            return view('dashboard', $data);
        }
    }
    
}
