<?php
namespace App\Http\Controllers;
use App\Models\doctor_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;
class DbController extends Controller
{
    public function edit($id)
    {
       $edit=doctor_table::find($id);
       return view('edit',compact('edit'));
    }
    public function update($id, Request $request)
    {
      $request->validate([
        'doctor_name'=>'required',
        'specialization'=>'required',
        'email_id'=>'required',
        'image'=>'mimes:jpeg,jpg,gif|max:2048',
      ]); 
       $data=doctor_table::find($id);
       $data->doctor_name=$request->input('doctor_name');
       $data->specialization=$request->input('specialization');
       $data->email_id=$request->input('email_id');
       if($request->hasFile('image'))
       {
        $path='asset/storage/images/'.$data->image;
        if(File::exists($path))
        {
          File::delete($path);
        }
        $fileName=time().$request->file('image')->getClientoriginalName();
        $path=$request->file('image')->storeAS('images',$fileName,'public');
        $datas["image"]='/storage/'.$path;
        $data->image=$fileName;
        $data->update();
      }
       $data->update();
       return redirect()->route('view')->with('success','updated');
       }
    
    public function delete($id)
    {
        doctor_table::find($id)->delete();
        return redirect()->route('view')->with('success','deleted successfully');
    }
    public function editstaff($id)
    {
      $editstaff=user::find($id);
      return view('editstaff',compact('editstaff'));
    }
    
    public function updatestaff($id)
    {
      $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'username'=>'required',
        'phone_no'=>'required|max:10',
        'image'=>'mimes:jpeg,jpg,gif|max:2048',
      ]);
       $data=user::find($id);
       $data->name->$request->input('name');
       $data->email->$request->input('email');
       $data->phone_no->$request->input('phone_no');
       $data->username->$request->input('username');
       if($request->hasFile('image'))
       {
        $path='asset/storage/images/'.$data->image;
        if(File::exists($path))
        {
          File::delete($path);
        }
        $fileName=time().$request->file('image')->getClientoriginalName();
        $path=$request->file('image')->storeAS('images',$fileName,'public');
        $datas["image"]='/storage/'.$path;
        $data->image=$fileName;
        $data->update();
       }
       $data->update();
       return redirect()->route('staffview')->with('success','updated');
       }

    }
  
