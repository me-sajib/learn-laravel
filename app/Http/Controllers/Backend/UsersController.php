<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        echo "showing all list of users";
    }

    /**
     * Show the profile for given user
     * @param  int  $id
     * @return Response
     */
    public function show($id, Request $request){
        // echo $request->ip();
        // echo $request->input("name");
        // var_dump($request->all());
        $page =  $request->input('page') ?? 1;
        $name = $request->name;
        echo "$name is show page $page";

        echo "<br/>showing of user id: $id";
    }

}
