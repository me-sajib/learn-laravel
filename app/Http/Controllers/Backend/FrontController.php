<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function index(){
    return view('welcome');
  }

  public function user($id, $name = ""){
    echo "id = $id and name $name";
  }

  public function usersPost($name){
    echo "$name";
  }
  public function contact(){
    return view("contact");
  }
}
