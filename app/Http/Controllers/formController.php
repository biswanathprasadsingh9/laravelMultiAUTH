<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form;
use Validator,Redirect,Response;

class formController extends Controller
{
    public function insert(Request $request){
        $data = $request->all();
        $check = form::insert($data);

        $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);
        if($check){
        $arr = array('msg' => 'Successfully submit form using ajax', 'status' => true);
        }

        return Response()->json($arr);
}
