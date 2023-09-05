<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\Member;
use App\DataTables\MemberDataTable;
use App\DataTables\MemberDataTableEditor;
use Illuminate\Support\Facades\Auth;
class MemberController extends Controller
{ 
    public function indexes()
    {
        $members = Member::with('post','role','location')->get(); 

        return view('list', compact('members')); 
    }

   
    public function index(MemberDataTable $dataTable)
      {
    return $dataTable->render('members.index');
      }
   
    function addData(Request $req){
        $req->validate([
        'name'=>'required | max:10',
        'email'=>'required | max:20',
        'address'=>'required |min:5',
        'pincode'=>'required | max:6',
        'mobile'=>'required | min:10',
        'gender'=>'required',
        'skills'=>'required',
        'course'=>'required',
        'password'=>'required'
        ]);
        $member= new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->pincode=$req->pincode;
        $member->mobile=$req->mobile;
        $member->gender=$req->gender;
        $member->skills=$req->skills;
        $member->course=$req->course;
        $member->password=$req->password;
        $member->save();
        return redirect('/');

    }


    function show(){
        $data =  Member::all();
         return view('tables',['members'=>$data]);
    }

    
  

    function delete($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('members');
    }

    function showData($id){
        $data = Member::find($id);
        return view('edit',['data'=>$data]);
    }

    function updates(Request $req){
        $data=Member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->pincode=$req->pincode;
        $data->mobile=$req->mobile;
        $data->gender=$req->gender;
        $data->skills=$req->skills;
        $data->course=$req->course;
        $data->password=$req->password;
        $data->save();
        return redirect('members');
    }
}

