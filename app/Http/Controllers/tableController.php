<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
class tableController extends Controller
{
    public function disp(){
        $data = User::all();
        return view('table',compact('data'));
    }
    public function adduser(Request $request){
        User::create($request->all());
        return response()->json([
            'status'=>200,
            'message'=>'user added succesfully'
        ]);

    }
    public function del($id){
        $data = User::findOrFail($id);
        $data->delete();
        return response()->json([
            'status'=>200,
            'message'=>'deleted succesfully'
        ]);

    }
    public function getuser($id){
        $data = User::findOrFail($id);
        return response()->json([
            'status'=>200,
            'data'=>[
                'id'=>$data->id,
                'name'=>$data->name,
                'dept'=>$data->dept,

            ]
        ]);
    }
    public function save(Request $request,$id){
        $data = User::findOrFail($id);
        $data ->update($request->all());
        return response()->json([
            'status'=>200,
            'message'=>'updated succesfully'
        ]);
    }

    
}
