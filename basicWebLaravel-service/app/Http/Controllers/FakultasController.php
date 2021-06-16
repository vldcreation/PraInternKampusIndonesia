<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fakultas;

class FakultasController extends Controller
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

    public function getFakultas(){
        return response()->json(Fakultas::all(),200);
    }

    public function getFakultasDetail($id){
        $Fakultas = Fakultas::find($id);
        if($Fakultas)
            return response()->json($Fakultas,200);
        return $this->getResponse(array('NF','Fakultas'));
    }

    public function addFakultas(Request $request){
         $Fakultas = Fakultas::create($request->all());
         if($Fakultas){
             return response()->json($Fakultas,201);
         }
         return $this->getResponse(array('FS'));
    }

    public function updateFakultas(Request $request,$id){
        $Fakultas = Fakultas::find($id);
        if($Fakultas){
            $Fakultas->update($request->all());
            return response()->json($Fakultas,201);
        }
        return $this->getResponse(array('NF','Fakultas'));
    }

    public function deleteFakultas($id){
        $Fakultas = Fakultas::find($id);
        if($Fakultas){
            $wasDelete = $Fakultas->delete();
            if($wasDelete)
                return $this->getResponse(array('SD'));
            return $this->getResponse(array('FD'));
        }
        return $this->getResponse(array('NF','Fakultas'));
    }
}
