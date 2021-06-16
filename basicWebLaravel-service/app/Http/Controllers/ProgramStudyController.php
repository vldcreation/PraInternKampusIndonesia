<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramStudy;
class ProgramStudyController extends Controller
{
    //
    public function getResponse(array $arr){
        if(count($arr)>1)
            $NTFOUND =$arr[1].' Not Found';
        else
            $NTFOUND = 'Object Not Found';
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

    public function getPS(){
        return response()->json(ProgramStudy::all(),200);
    }

    public function getPSDetail($id){
        $PS = ProgramStudy::find($id);
        if($PS)
            return response()->json($PS,200);
        return $this->getResponse(array('NF','ProgramStudy'));
    }

    public function addPS(Request $request){
         $PS = ProgramStudy::create($request->all());
         if($PS){
             return response()->json($PS,201);
         }
         return $this->getResponse(array('FS'));
    }

    public function updatePS(Request $request,$id){
        $PS = ProgramStudy::find($id);
        if($PS){
            $PS->update($request->all());
            return response()->json($PS,201);
        }
        return $this->getResponse(array('NF','ProgramStudy'));
    }

    public function deletePS($id){
        $PS = ProgramStudy::find($id);
        if($PS){
            $wasDelete = $PS->delete();
            if($wasDelete)
                return $this->getResponse(array('SD'));
            return $this->getResponse(array('FD'));
        }
        return $this->getResponse(array('NF','ProgramStudy'));
    }
}
