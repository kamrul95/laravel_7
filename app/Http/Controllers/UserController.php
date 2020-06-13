<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['kamrul', 'kamrul@gmail.com', 'password']);
        DB::update('update users set name = ? where id = 1', ['Antor']);
        DB::delete('delete from users where id = 1');
        $users = DB::select('select * from users');
        return $users;
    }
}
