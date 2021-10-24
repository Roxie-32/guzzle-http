<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function createUser(Request $request){
        $theUrl     = config('app.guzzle_test_url').'/api/users/create';
        $response= Http::post($theUrl, [
            'name'=>$request->name,
            'email'=>$request->email

        ]);

        return $response;
    }
    public function getUsers(){
        $theUrl     = config('app.guzzle_test_url').'/api/users/';
        $users   = Http ::get($theUrl);

        return $users;
    }


    public function deleteUser($id){
        $theUrl     = config('app.guzzle_test_url').'/api/users/delete/'.$id;
         $delete   = Http ::delete($theUrl);

        return $delete;
    }
   
}
