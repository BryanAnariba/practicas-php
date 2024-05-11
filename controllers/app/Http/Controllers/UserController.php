<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Busca por id
        // $user = User::find(1);

        // Usuarios cuya edad sea igual a 18
        // $users = User::where('age', '==', 18)->get();

        // Usuarios cuya edad sea igual a 18 y zipCode = 504
        // $users = User::where('age', '==', 18)->where('zipCode', 504)->get();

        // Usuarios cuya edad sea igual a 18 o zipCode = 504 ordeando por edad de mayor a menor, OJO AL ORDEN DE ->
        $users = User
            ::where('age', '>', 25)
            ->orWhere('zipCode', 504)
            ->limit(2,10) // El primero es el offset o cuantos saltara y el segundo es el limite
            ->orderBy('age', 'desc')
            ->get();

        // Consulta pura
        // $users = DB::select("SELECT * FROM Users WHERE age > ? OR zipCode = ? ORDER BY age DESC", [25, 504]);
        return view('user.index', compact('users'));
    }

    public function create () 
    {
        // Forma uno
        $user = new User();
        $user->name ='testThree';
        $user->email = 'testThree@gmail.com';
        $user->password = Hash::make('asd.456');
        $user->age = 30;
        $user->zipCode = 504;
        $user->address = "HN";
        $user->save();

        // Forma dos
        User::create([
            "name" => "testFour",
            "email" => "testFour@gmail.com",
            "password" => Hash::make("asd.456"),
            "age" => 30,
            "zipCode" => 504,
            "address" => "SAL"
        ]);

        // DB::insert(DB::raw("INSERT INTO Users()"));

        return redirect()->route('users.index');
    }
}
