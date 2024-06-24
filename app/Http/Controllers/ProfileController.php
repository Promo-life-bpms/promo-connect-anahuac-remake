<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function show() {
        
        $user = auth()->user();

        return view('pages.user.profile', compact('user'));
    }


    public function update(Request $request) {

        $request->validate([
            'area' => 'required',
            'campus' => 'required',
        ]);

        $user = auth()->user();

        DB::table('users')->where('id',$user->id)->update([
            'area' => $request->area,
            'campus'=> $request->campus,
            'phone'=> $request->phone,
        ]);

        return redirect()->back()->with('message', 'Información actualizada correctamente.');

    }
}
