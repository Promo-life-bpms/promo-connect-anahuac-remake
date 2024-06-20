<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function registerUser() {

        return view('auth.register');
    }

    public function storeUser(Request $request)
    {
        
        if (strpos(strtolower($request->email), '@anahuac') === false) {
            return redirect()->back()->withErrors(['email' => 'El correo electrónico debe ser institucional de la Universidad Anáhuac.'])->withInput();
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'area' => 'required',
            'campus' => 'required',
        ]);


       /*  $password = 'Portal4nahuac' . substr(uniqid(), 0, 6); */
        $password = 'Portal4nahuac';
        $create_user = new User();
        $create_user->name = $request->name;
        $create_user->email = $request->email;
        $create_user->password = Hash::make($password);
        $create_user->area = $request->area;
        $create_user->campus = $request->campus;
        $create_user->save();

        DB::table('role_user')->where('user_id', $create_user->id)->delete();

        $create_role_user = new RoleUser();
        $create_role_user->role_id = 4;
        $create_role_user->user_id = $create_user->id; 
        $create_role_user->user_type = 'App\Models\User';
        $create_role_user->save();

        return redirect('login')->with('email', 'Usuario creado exitosamente, te enviamos tu contraseña temporal en el correo registrado');
    }
}
