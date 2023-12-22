<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
      $users = DB::table('studeans')->get();


      return view('show', ['data' => $users]);

    }

}
