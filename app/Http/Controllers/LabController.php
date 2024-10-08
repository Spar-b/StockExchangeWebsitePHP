<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        $data = ['name' => 'Ігор', 'role' => 'Student'];
        return view('welcome', $data);
    }

    public function about()
    {
        $data = ['name' => 'Ігор', 'role' => 'Student', 'description' => 'About description here.', 'age' => 18];
        return view('about', $data);
    }

    public function contact()
    {
        $data = ['email' => 'ihorhaiduk2@gmail.com', 'phone' => '+380672853733'];
        return view('contact', $data);
    }

    public function hobbies()
    {
        $data = ['name' => 'Ігор','hobbie1' => '1', 'hobbie2' => '2'];
        return view('hobbies', $data);
    }
}