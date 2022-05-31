<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
 
    public function index()
    {
        $accounts = Account::all();
        return view ('principal.dashboard')->with('accounts', $accounts);

    }
   public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }
 public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
