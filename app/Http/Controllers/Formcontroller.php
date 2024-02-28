<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use Illuminate\Http\Request;

class Formcontroller extends Controller
{
    public function list(){
        $list = Ajax::all();
        $data = [];
        foreach ($list as $value) {
            if ($value->status == '0') {
            $temp['firstname'] = $value->firstname;
            $temp['lastname'] = $value->lastname; 
            $temp['gender'] = $value->gender;
            $temp['status'] = $value->status;
            $temp['cities'] = $value->cities;
            $temp['age'] = $value->age;
            $temp['textarea'] = $value->textarea;
            $temp['color'] = $value->color;
            $temp['action'] = "<button class='btn btn-success' id='edit' data-id=". $value->id .">Edit</button><button class='btn btn-warning' id='delete' data-id=" . $value->id . ">Delete</button>";
            array_push($data, $temp);
        }
        }
        return response()->json(['data' => $data]);
    }

    public function add(Request $request){
        $hid = $request->all()['hid'];
       

        if($hid > 1){
            $requestedData = $request->all();
           $data = Ajax::where('id' , $hid);
          
            $data->update([
                "firstname" => $requestedData['firstname'],
                "lastname" => $requestedData['lastname'],
                "gender"   => $requestedData['gender'],
                "status"   => $requestedData['status'],
                "cities"   => $requestedData['cities'],
                "age"   => $requestedData['age'],
                "textarea"   => $requestedData['textarea'],
                "color"   => $requestedData['color'],
            ]);
            
        } else {
          
            $ajax = new Ajax();

            $ajax->firstname = $request->firstname;
            $ajax->lastname = $request->lastname;
            $ajax->gender = $request->gender;
            $ajax->status = $request->status;   
            $ajax->cities = $request->cities;
            $ajax->age = $request->age;
            $ajax->textarea = $request->textarea;
            $ajax->color = $request->color;
            $ajax->save();
        }
    }

    public function edit(Request $request)
    {
      $data = $request->all();
      $id = $data['id'];
   
      $tableData = Ajax::find($id)->toArray();
      return response()->json($tableData);
    }

    public function delete(Request $request)
   {
    $hid = $request->all()['id'];
   
    if(Ajax::where("id",$hid)->delete()){
        echo '<pre>';
        print_r(" i am done");
        die;
    }else{
        echo '<pre>';
        print_r(" i am not done ");
        die;
    }
      }
}
