<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    
    //just helper method
    public function getResponse(array $arr){
        $NTFOUND ='Not '.$arr[1].' Found';
        $FAILED_SAVE = 'Failed to save record';
        $FAILED_DELETE = 'Failed to delete record';
        $SUCCESS_DELETE = 'Record was deleted';
        $dataJson = [];
        if($arr[0]=='NF'){
            $dataJson = [
                'message' => $NTFOUND
            ];
        }
        else{
            if($arr[0]=='FS')
            $dataJson = [
                'message' => $FAILED_SAVE
            ];
            else if($arr[0]=='FD')
            $dataJson = [
                'message' => $FAILED_DELETE
            ];
            else if($arr[0]=='SD')
            $dataJson = [
                'message' => $SUCCESS_DELETE
            ];
        }
        return $dataJson;
    }
    
    public function GetUsers(){
        return response()->json(User::all(),200);
    }

    public function getUsersDetail($id){
        $one = User::find($id);
        if($one){
            return response()->json($one,200);
        }
        $arr = array('NF','User');
        return $this->getResponse($arr);
    }

    public function getUsersByEmail($email){
        $one = User::where('email',$email)->first();
        if($one){
            return response()->json($one,200);
        }else{
            return response()->json([
                'message' => 'Not user found!'
            ],404);
        }
    }

    public function addUser(Request $request){
        $one = User::create(array_merge($request->all(),['password' => \Hash::make(strval(123456))]));
        if($one){
            return response()->json([$one
            ],201);
        }
        return response()->json([
            'message'=>'Failed to save record'
        ],404);
    }

    public function updateUser(Request $request,$id){
        $one = User::find($id);
        if($one){
            $one->update($request->all());
            return response()->json($one,201);
        }
        $arr = array('NF','User');
        return $this->getResponse($arr);
    }

    public function deleteUser($id){
        $one = User::find($id);
        if($one){
            $wasDelete = $one->delete();
            if($wasDelete){
                return response()->json([
                    'message' => 'Record was deleted'
                ],201);
            }
            $arr = array('FD');
            return $this->getResponse($arr);
        }
        $arr = array('NF','User');
        return $this->getResponse($arr);

    }
}
