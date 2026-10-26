<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'email' => 'admin@example.com',
                'role' => 'Administrator'
            ],
            [
                'id' => 2,
                'username' => 'cashier01',
                'email' => 'cashier01@example.com',
                'role' => 'Cashier'
            ],
            [
                'id' => 3,
                'username' => 'cashier02',
                'email' => 'cashier02@example.com',
                'role' => 'Cashier'
            ],
            [
                'id' => 4,
                'username' => 'manager01',
                'email' => 'manager@example.com',
                'role' => 'Manager'
            ],
            [
                'id' => 5,
                'username' => 'staff01',
                'email' => 'staff@example.com',
                'role' => 'Staff'
            ],
        ];

        return view('users', compact('users'));
    }
}