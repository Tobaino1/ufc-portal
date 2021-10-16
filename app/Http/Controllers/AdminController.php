<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin; // model 


class AdminController extends Controller
{
    public function ufc_admin_add_pg() //view 4 adding admin
    {
        return view ('ufc_admin_add_pg');
    }

    public function admin_login()
    {
        return view ('admin_login');
    }

    public function requestAdmins()
      { 
        $admins = Admin::all();
        return view ('admins_request', ['admins' => $admins]); 
      }

      public function save(Request $request)
      {
          $this->validate($request, [
              'name'   => 'required|string',
              'admin_id' => 'required|string',
          ]);
          $admins = new Admin;
          $admins-> name = $request->input('name');
          $admins-> admin_id = $request->input('admin_id');

          $admins->save();
          return redirect ('/ufc_admin_add_pg')->with('success', 'Dear Unification Fc Admin, another user (Admin) was successfully added') ;
  
      }
}
