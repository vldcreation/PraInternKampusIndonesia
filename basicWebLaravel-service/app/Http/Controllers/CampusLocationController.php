<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CampusLocation;

class CampusLocationController extends Controller
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

    public function getCL(){
        return response()->json(CampusLocation::all()->take(8),200);
    }

    public function getCLDetail($id){
        $cl = CampusLocation::find($id);
        if($cl)
            return response()->json($cl,200);
        return $this->getResponse(array('NF','CampusLocation'));
    }

    public function addCL(Request $request){
         $cl = CampusLocation::create($request->all());
         if($cl){
             return response()->json($cl,201);
         }
         return $this->getResponse(array('FS'));
    }

    public function updateCL(Request $request,$id){
        $cl = CampusLocation::find($id);
        if($cl){
            $cl->update($request->all());
            return response()->json($cl,201);
        }
        return $this->getResponse(array('NF','CampusLocation'));
    }

    public function deleteCL($id){
        $cl = CampusLocation::find($id);
        if($cl){
            $wasDelete = $cl->delete();
            if($wasDelete)
                return $this->getResponse(array('SD'));
            return $this->getResponse(array('FD'));
        }
        return $this->getResponse(array('NF','CampusLocation'));
    }
}
