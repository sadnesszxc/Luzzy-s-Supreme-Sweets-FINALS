<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {

      if(Auth::user()->hasRole('user')){
          return view('userdash');
      }elseif(Auth::user()->hasRole('admin')){
         return view('dashboard');
         
      }
      
    
    }

    public function sampledata()
    {
        $users = User::all();
        return view('users.sampledata')->with('users',$users);
    }
     function delete()
    {
    $users= User::find($id);
    $users->delete();
    return redirect('sampledata');

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    } 
    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }
    public function destroy()
    {

    }


}               