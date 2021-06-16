<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CampusDetail;

class CampusDetailController extends Controller
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

    public function getCampus(){
        return response()->json(CampusDetail::all(),200);
    }

    public function getCampusDetail($id){
        $campus = CampusDetail::find($id);
        if($campus)
            return response()->json($campus,200);
        return $this->getResponse(array('NF','Campus'));
    }

    public function addCampus(Request $request){
         $campus = CampusDetail::create($request->all());
         if($campus){
             return response()->json($campus,201);
         }
         return $this->getResponse(array('FS'));
    }

    public function updateCampus(Request $request,$id){
        $campus = CampusDetail::find($id);
        if($campus){
            $campus->update($request->all());
            return response()->json($campus,201);
        }
        return $this->getResponse(array('NF','Campus'));
    }

    public function deleteCampus($id){
        $campus = CampusDetail::find($id);
        if($campus){
            $wasDelete = $campus->delete();
            if($wasDelete)
                return $this->getResponse(array('SD'));
            return $this->getResponse(array('FD'));
        }
        return $this->getResponse(array('NF','Campus'));
    }
}
