<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpController extends Controller
{
 
    public function index()
    {
       $emp= \App\Employee::paginate(50);
       $arrayName=array('emp'=>$emp);
       return view('emp.viewallemps',$arrayName); 
    }   


 
    public function create()
    {
      return view('emp.addnewemp');   
    }

 
    public function store(Request $request)
    {
        $request->validate(
            ['name'=>'required']
        );

        $emp= new \App\Employee;
        //$emp->adder = $request->email;
        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->phone =$request->phone;
        $emp->google =$request->google;
        $emp->address = $request->address;
        $emp->facebook = $request->facebook;
        $emp->twitter = $request->twitter;
        $emp->linkedin = $request->linkedin;
        $emp->instagram = $request->instagram;
        
        $emp->details = $request->details;
        $emp->save();

        return redirect('/emp')->with('data', ['alert'=>'تم اضافة الموظف بنجاح','alert-type'=>'success']);
    }
 
    public function show($id)
    {
        $emp= \App\Employee::where('id',$id)->get();
        return $emp;
    }

    public function search(Request $request)
    {
        $emp = \App\Employee::where('email',$request->search)
         ->orWhere('name', 'like', '%' .$request->search. '%')->paginate(20);


        $arrayName = array('emp' => $emp  );
        return view('emp.viewallemps',$arrayName  );
    }

 
    public function edit($id)
    {

         $emp= \App\Employee::where('id',$id)->get();
         $arrayName=array('emp'=> $emp);
         return view('emp.editemp',$arrayName);
        
    }

 
    public function update(Request $request, $id)
    {
        $request->validate(
            ['name'=>'required']
        );

        $emp =   \App\Employee::where('id',$id)
        ->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'google' => $request->google,
                'address' => $request->address,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'details' => $request->details 
            ]
        );

        return redirect('/emp')->with('data', ['alert'=>'تم تحديث بيانات الموظف '.$emp['name'] ,'alert-type'=>'success']);


         
    }

 
    public function destroy(Request $request)
    {  
        $emp =  \App\Employee::where('id',$request->id)->delete(); 
        return redirect('/emp')->with('data', ['alert'=>'تم حذف الموظف بنجاح','alert-type'=>'success']);
    }
}
