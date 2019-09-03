<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class followers extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function followers()
  {
    $imagenes = $request->input('image');
    $name = $request->input('name');
    $surname = $request->input('surname');
      return view('followers');
  }

}
