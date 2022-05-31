<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Account;
use App\Models\Teacher;
use App\Models\Principal;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    
    public function account_register ()
    {
        $request = request()->all();  
        $account = new Account();
        $user = new User();
        
        if($request ['pass'] == $request['pass_2']){
            $account['type'] = $request['type'];
            $account ['email']= $request['email'];
            $account['password'] = $request['pass'];
            $account['status'] = 'Pending';
            $account->save();

            $user ['fname'] = $request['fname'];
            $user ['lname'] = $request ['lname'];
            $user ['mname'] = $request ['mname'];
            $user ['gender'] = $request ['gender'];
            $user ['birthdate'] = $request ['birthdate'];
            $user ['position'] = $request ['position'];
            $user ['contactNo'] = $request ['contactNo'];
            $user ['accounts_id'] = $account['id'];
            $user->save();
            Alert::success('Success', 'Account Successfully Registered');
            return back();
        }else{
            Alert::error('error', 'Registered Failed');
            return back() ;
        }
    }

    public function account_login (Request $request){
    
        $credentials = $request->validate([
        'type' => ['required', 'max:9'],
        'email' => ['required', 'email'],
        'password' => ['required', 'max:50']
        ]);
        $accounts = Account::all();
        foreach($accounts as $account){
         if($credentials['type'] == $account['type']
         && $credentials ['email'] == $account['email']
         && $credentials ['password'] == $account['password']
        && $account['status'] == 'Active'){
             Alert::success('success', 'Login Successfully!'); 
             $acc = Account::find($account['id']);
             dd ($acc);             
             return view ('principal.dashboard')->with('acc', $acc);
        }else{  
            Alert::error('Error', 'Account Not Found!');
            return back();
        }
        }
            
        }
        // $account = Account::
        // where('email', $request->email)
        //     ->where('password',$request->password)
        //     ->where('type',$request->type)
        //     ->where('status','Active');

        // if($account->count() > 0)
        // {
        //     return redirect('/dashboard')
        //     ->withSuccess('Successfully Log in!'); 

        // }else{
        //     return back()->with('error', 'BOBO KA NILINGAWAN MO PASSWORD MO!');
        // }

        // foreach ($account as $db){
        //     if ($db['email'] == $request->email
        //     && $db['password'] == $request->password
        //     && $db ['status'] == 'Active'
        //     && $db ['type'] == $request->type){
        
        //         $num = $db['id'];
        //         $user = User::find($num);
        //        return redirect ('/dashboard');
        //        ->with('user',$user);
        //         Alert::success('success', 'Login Successfully!');  
        //     }else{
        //          Alert::Error('Error', ' Email and Password does not match ! ');
        //         return back();
        //     }
        // }

    }

