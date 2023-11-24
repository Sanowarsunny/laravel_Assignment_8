<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    //
    public function index(Request $request, int $id = null){
        
        $name = "Donal Trump";
        $age = "75";

        
        $data = [
            "id" => $id,
            "name"=> $name,
            "age"=> $age
        ];

        //Log::info($data);

        $name = "access_token";

        $value = "123-XYZ";

        $minutes = 60;

        $path = "/";

        $domain = $_SERVER['SERVER_NAME'];

        $secure = false;

        $httpOnly = true;

        return response($data,200)->cookie(
            $name, $value, $minutes, $path, $domain, $secure, $httpOnly
        );

    }
    public function createPerson(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $image = $request->file('image');

        $imageName = time() .'-'.$image->getClientOriginalName() ;

        $image->move(public_path("images"), $imageName);

        // return response("Person {$name} with email {$email} ",200);
        // return view('newperson', compact('name','email'));
        return view('newperson', ['name'=> $name,'email'=> $email,'image'=> $imageName]);
        
    }

    public function code(){
        

        function str_sort($num,$str){
            $arr = [];

            print_r(sizeof($str[1]));
            
            
            array_push($arr,"sjkd");

            print_r($arr);
        }

        $num = 3;
        $str = ["akjs","askjkj","sa"];

        str_sort($num,$str);

    }

    public function personForm(){
        return view("person");
    }
}
