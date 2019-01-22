<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Controllers\MessageController;

class DealController extends Controller
{
 
    public function index()
    {
       $deal= \App\Deal::orderBy('id', 'DESC')->paginate(50);
       $arrayName=array('deal'=>$deal);
       return view('deal.viewalldeals',$arrayName); 
    }
 
    public function create()
    {

      // return  MessageController::send_notification('1',$array); 

        $client = \App\Client::get();
        $arrayName=array('client'=>$client);
        return view('deal.addnewdeal',$arrayName); 
    }
 
    public function store(Request $request)
    {

            
     
  
        //return $request;
         
         
        
     
        $c_id='1';

        $deal= new \App\Deal;
        // deal_init_send_not_methods
        if(isset($request->client_id))
        {
            $deal->client_id=$request->client_id;
            $c_id=$request->client_id;
        }
        else
        {
            $request->validate([
                'newclientname'=>'required'
            ]);
            $send_not='';
            if(isset($request->send_not)&&$request->send_not=='on')
                $send_not='on';
            else
                $send_not='off';

            $client= new \App\Client;
            $client->name= $request->newclientname;
            $client->phone= $request->newclientphone;
            $client->email= $request->newclientemail;
            $client->send_not= $send_not;
            $send_not_methods='';

            if(isset($request->send_not_methods)&&count($request->send_not_methods)>0)
            {
                for($i=0 ; $i<count($request->send_not_methods);$i++)
                    $send_not_methods.=','.$request->send_not_methods[$i];


                $date = date("Y-m-d H:i:s");
                $mod_date;
                $mod_date = strtotime($date.$request->send_not_period);
                $mod_date= date("Y-m-d H:i:s",$mod_date);
                $client->next_send=$mod_date;


            }
            $client->rand_num=rand('10000000','1000000000').date('YmdHis');
            $client->last_send=date('Y-m-d H:i:s');
            $client->send_not_methods= $send_not_methods;
            $client->send_not_period=$request->send_not_period;
            $client->save();




            $deal->client_id=$client->id;    
            $c_id=$client->id;   
        }




        $deal->deal_mount=$request->mount;
        $deal->not_setter_id='123';
        $deal->deal_details_for_emp=$request->deal_details_for_emps;
        $deal->deal_details_for_client=$request->deal_details_for_emps;
        $deal->deal_currency=$request->currency;
        $deal->for=$request->for;
        $deal->deal_borrow_payback=$request->deal_borrow_payback;


        
        $deal_init_send_not_methods="";
        if(isset($request->deal_init_send_not_methods)&&count($request->deal_init_send_not_methods)>0)
        {
            for($i=0 ; $i<count($request->deal_init_send_not_methods);$i++)
                $deal_init_send_not_methods.= ','.$request->deal_init_send_not_methods[$i];

        }
        $deal->deal_init_send_not_methods=$deal_init_send_not_methods;

     
        
        

        
        $deal->save();

        MessageController::send_init_notification($c_id,$request->deal_borrow_payback,$request->mount,$request->currency,$request->for,$deal_init_send_not_methods);

        return redirect('/deal')->with('data', ['alert'=>'تم اضافة المعاملة بنجاح','alert-type'=>'success']);



    }

  
    public function show($id)
    {
        $deal= \App\Deal::where('id',$id)->get();
        return $deal;   
    }
 
    public function edit($id)
    {
         $deal= \App\Deal::where('id',$id)->get();
         $arrayName=array('deal'=> $deal);
         return view('deal.editdeal',$arrayName);
    }

 
    public function update(Request $request, $id)
    {
 
       
        $deal_init_send_not_methods="";
        if(isset($request->deal_init_send_not_methods)&&count($request->deal_init_send_not_methods)>0)
        {
            for($i=0 ; $i<count($request->deal_init_send_not_methods);$i++)
                $deal_init_send_not_methods.= ','.$request->deal_init_send_not_methods[$i];

        }

        $deal =   \App\Deal::where('id',$id)
        ->update(
            [
              
                'deal_init_send_not_methods' => $deal_init_send_not_methods,
                'deal_borrow_payback' => $request->deal_borrow_payback,
                'deal_mount' => $request->mount,
                'deal_currency' => $request->currency,
                'for' => $request->for,
                'deal_details_for_client' => $request->detailsforclient,
                'deal_details_for_emp' => $request->detailsforemp
            ]
        );


        return redirect('/deal')->with('data', ['alert'=>'تم تحديث بيانات المعاملة  ','alert-type'=>'success']);

    }

     public function search(Request $request)
    {
        $deal = \App\Deal::where('client_id',$request->search)
         ->orWhere('deal_mount', 'like', '%' .$request->search. '%')->paginate(20);


        $arrayName = array('deal' => $deal  );
        return view('deal.viewalldeals',$arrayName  );
    }


    public static function get_client_by_id($id,$attr)
    {
        $client = \App\Client::where('id',$id)->get()->first();

       return $client[$attr];
    }

    



  
    public function destroy(Request $request)
    {
        $deal =  \App\Deal::where('id',$request->id)->delete(); 
        return redirect('/deal')->with('data', ['alert'=>'تم حذف المعاملة بنجاح','alert-type'=>'success']);
    }

}
