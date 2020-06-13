<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['kamrul', 'kamrul@gmail.com', 'password']);
        // DB::update('update users set name = ? where id = 1', ['Antor']);
        // DB::delete('delete from users where id = 1');


        // $users = DB::select('select * from users');
        // $user = new User();
        // $user->name = 'Gultu';
        // $user->email = 'gultua@gmail.com';
        // $user->password = 'password';
        // $user->save();

        User::where(['id' => 2])->delete();
        User::where('id', 3)->update(['name' => 'Gultu Sona']);

        $data = [
            'name' => 'yousuf',
            'email' => 'Yousuf@gmail.com',
            'password' => bcrypt('password'),
        ];

        User::create($data);

        $users = User::all();
        return $users;
    }
}
