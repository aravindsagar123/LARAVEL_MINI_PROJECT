<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\User;
use App\Models\doctor_table;
class LoginController extends Controller
{
    public function log(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials))
         {
            return redirect()->route('adminhome');
        }
        
        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);    
    }   
   public function staffregi(Request $request)
    {
        $credentials=$request->validate([
          'email'=>'required|email',
          'username'=>'required',
          'password'=>'required',
          'phone_no'=>'required|max:10',
          'image'=>'mimes:jpeg,jpg,png,gif|max:2048',
          'type'=>'required',
        ]);
        $data= $request->all();
        $path='asset/storage/images/'.$data['image'];
        $fileName=time().$request->file('image')->getclientoriginalName();
        $PATH=$request->file('image')->storeAs('images',$fileName,'public');
        $datas['image']='/storage'.$path;
        $data["image"]=$fileName;
        $data["password"]=bcrypt($data["password"]);
        User::create($data);
        return redirect()->route('staff')->with('success','registered');
    }
    public function doctor_reg(Request $request)
    {
        $credentials=$request->validate([
            'doctor_name'=>'required',
            'specialization'=>'required',
             'email_id'=>'required|email',
             'phone_no'=>'required|max:10',
             'image'=>'mimes:jpeg,jpg,png,gif|max:2048',
        ]);
        $data= $request->all();
        $path='storage/images/';
        $fileName=time().$request->file('image')->getClientOriginalName();
        $PATH=$request->file('image')->storeAs('public/images',$fileName);
        $datas['image']=$path.$fileName;
        $data["image"]=$fileName;
         doctor_table::create($data);
        return redirect()->route('doctor')->with('success','registered');
        }
        public function stafflog(request $request)
        {
            $credentials=$request->validate([
                'email'=>'required',
                'password'=>'required',
            ]);
            if(auth::attempt($credentials))
            {
                return redirect()->route('staffhome');
            }
        }
        public function logout()
        {
            Auth::logout();
            return redirect()->route('login');
        }
} 
