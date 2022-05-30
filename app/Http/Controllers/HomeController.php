<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Account;
use App\Models\Teacher;
use App\Models\Principal;
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

    public function account_login (){
        $account = Account::all();
        $input =  request()->all();

        foreach ($account as $db){
            if ($db['email'] == $input['email']
            && $db['password'] == $input['pass']
            && $db ['status'] == 'Active'
            && $db ['type'] == $input ['type']){
               
                $num = $db['id'];
               $person =  User::find($num);
               dd($person);
               return redirect ('/dashboard')->with('person', $person);
                Alert::success('success', 'Login Successfully!');  
            }else{
                 Alert::Error('Error', ' Email and Password does not match ! ');
                return back();
            }
        }

    }

}
