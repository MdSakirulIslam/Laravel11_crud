<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index');
    }
    public function store(Request $request)
    {
        Registration::newRegistration($request);
        return back()->with('message','Registration has done successfully');
    }
    public function manageList()
    {
        return view('registration.manageList',['lists'=>Registration::all()]);
    }
    public function edit($id)
    {
        return view('registration.edit',['list'=> Registration::find($id)]);
    }
    public function update(Request $request,$id)
    {
        Registration::updateList($request,$id);
        return redirect('/manage/info')->with('message','Registration info has updated Successfully');
    }
    public  static function delete($id)
    {
        Registration::deleteList($id);
        return redirect('/manage/info')->with('message','Registration info has deleted Successfully');

    }
}
