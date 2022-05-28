<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\each;

class AccountController extends Controller
{
  
    // para ma retrive yung data
    public function index()
    {
        $accounts = Account::all();
        return view ('account.index')->with('accounts', $accounts);
    }

    // Paduman sa create form
    public function create()
    {
        return view('account.create');
    }

   // Pag save sa database function after nang create functionality
    public function store(Request $request)
    {
        $input = $request->all();
        Account::create($input);
        return redirect('account')->with('flash_message', 'Account Added!'); 
    }

    // Pag show ning sarong item lang sa database (Pa saro -saro) pero dae pa updated
    public function show($id)
    {
        $accounts = Account::find($id);
        return view('account.show')->with('accounts', $accounts);
    }

   // Update sa database or edit pag show lang kang edit form pero di pa nakaka update sa laag
    public function edit($id)
    {
        $accounts = Account::find($id);
        return view('account.edit')->with('accounts', $accounts);
    }

 // Igdi sa function na ne nag u-update palaog sa database is information
    public function update(Request $request, $id)
    {
        $accounts = Account::find($id);
        $input = $request->all();
        $accounts->update($input);
        return redirect('account')->with('flash_message', 'Account Updated!');  
    }

  // digdi diretso delete sa db
    public function destroy($id)
    {
        Account::destroy($id);
        return redirect('account')->with('flash_message', 'Account deleted!');  
    }
}
