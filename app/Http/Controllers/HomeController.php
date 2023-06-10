<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\doctor_table;
use App\Models\user;
class HomeController extends Controller
{
    public function index1()
    {
      return view('layout.index1');
    }
    public function login()
    {
        return view('login');
        }
        public function register()
        {
            return view('register');
        }
        public function adminhome()
        {
          $user=Auth::user();
          return view('adminhome',compact('user'));
        }
        public function staff()
        {
          return view('staffregi');
        }
        public function doctor()
        {
          return view('doctorreg');
        }
        public function view()
        {
          $data=doctor_table::all();
          return view('view',compact('data'));
        }
        public function stafflogin()
        {
          return view('stafflogin');
        }
        public function staffhome()
        {
          $user=Auth::user();
          return view('staffhome',compact('user'));
        }
        public function staffview()
        {
          $staff=user::where('type','staff')->get();
          return view('staffview',compact('staff'));
        }
      }
    
    
