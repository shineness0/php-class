<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //properties and methods
    // Access modifiers = public, private, protected
    // public $name = 'Sunday';
    // private $school = 'SQI';
    // protected $student = 'Sunday Emmanue';

    public function index()
    {
        $name = 'Sunday';
        $school = 'SQI';

        // The with method
        // return view('index')->with('name', $name);

        // The compact method
        // return view('index', compact('name', 'school'))


        // The direct method
        return view('index', [
            'name' => $name,
            'school' => $school
        ]);
    }

    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);

        $savedUser = $user->save();

        if ($savedUser) {
            return view('index', [
                'status' => true,
                'message' => 'User saved successfully',
            ]);
        } else {
            return view('index', [
                'status' => false,
                'message' => 'Error occurred. Please try again',
            ]);
        }
    }
}
