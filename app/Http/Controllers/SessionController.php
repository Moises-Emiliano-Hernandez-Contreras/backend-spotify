<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use \stdClass;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function register(Request $request){
         $validator=Validator::make($request->all(),[            
            'email'=>"required|string|email|max:255|unique:users,email",
            'password'=>'required|string|min:3'            
        ]);               
/*        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),            
        ]);
        $token=$user->createToken('auth_token')->plainTextToken;
        return response()->json(['data'=>$user,'access_token'=>$token,'token_type'=>'Bearer']);          */
        return $validator;
    }
    public function login(Request $request){
        $credentials=$request->only("email","password");
/*         if(!Auth::attempt($request->only("email","password"))){
            return response()->json(["message"=>"unauthorized"],401);
        }else{

            $user=User::where("email",$request["email"])->firstOrFail(); 
            $token=$user->createToken("auth_token")->plainTextToken;
            return response()->json([
                "message"=>$user->name,
                "accessToken"=>$token,
                'token_type'=>'Bearer',
                "user"=>$user
            ],200);        
        } */
        return $credentials;
    }
    public function logout(){
        auth()->user()->tokens()->delete();
        return response()->json(["message"=>"Logout complete"]);
    }
}
