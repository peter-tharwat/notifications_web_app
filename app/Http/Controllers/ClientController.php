<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
 
    public function index()
    {
       $client= \App\Client::orderBy('id', 'DESC')->paginate(50);
       $arrayName=array('client'=>$client);
       return view('client.viewallclients',$arrayName); 
    }   


 
    public function create()
    {
      return view('client.addnewclient');   
    }

 
    public function store(Request $request)
    {
        $request->validate(
            ['name'=>'required']
        );

        $client= new \App\Client;
        //$client->adder = $request->email;


        //new
        $send_not='';
        if(isset($request->send_not)&&$request->send_not=='on')
            $send_not='on';
        else
            $send_not='off';

        $client->send_not= $send_not;
        $send_not_methods='';


        if(isset($request->send_not_methods)&& is_array($request->send_not_methods) &&  count($request->send_not_methods)>0)
        {
            for($i=0 ; $i<count($request->send_not_methods);$i++)
                $send_not_methods.=','.$request->send_not_methods[$i];


             
            $date = date("Y-m-d H:i:s");
            $mod_date = strtotime($date.$request->send_not_period);
            $mod_date= date("Y-m-d H:i:s",$mod_date);


            $client->next_send=$mod_date;

             


        }
        $client->send_not_methods= $send_not_methods;
        $client->send_not_period=$request->send_not_period;




        


                  //  echo date("Y-m-d",$mod_date) . "\n";



        



        $client->last_send=date('Y-m-d H:i:s');
        //old
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone =$request->phone;
        $client->google =$request->google;
        $client->address = $request->address;
        $client->facebook = $request->facebook;
        $client->twitter = $request->twitter;
        $client->linkedin = $request->linkedin;
        $client->instagram = $request->instagram;
        $client->rand_num=rand('10000000','1000000000').date('YmdHis');
        $client->details = $request->details;
        $client->save();

        
        return redirect('/client')->with('data', ['alert'=>'تم اضافة العميل بنجاح','alert-type'=>'success']);
    }
 
    public function show($id)
    {
        $client= \App\Client::where('id',$id)->get();
        return $client;
    }

    public function search(Request $request)
    {
        $client = \App\Client::where('email',$request->search)
         ->orWhere('name', 'like', '%' .$request->search. '%')->paginate(20);


        $arrayName = array('client' => $client  );
        return view('client.viewallclients',$arrayName  );
    }

 
    public function edit($id)
    {

         $client= \App\Client::where('id',$id)->get();
         $arrayName=array('client'=> $client);
         return view('client.editclient',$arrayName);
        
    }

 
    public function update(Request $request, $id)
    {
        $request->validate(
            ['name'=>'required']
        );


        $send_not='';
        if(isset($request->send_not)&&$request->send_not=='on')
            $send_not='on';
        else
            $send_not='off';

    

        $send_not_methods='';

        if(isset($request->send_not_methods)&&count($request->send_not_methods)>0)
        {
            for($i=0 ; $i<count($request->send_not_methods);$i++)
                $send_not_methods.=','.$request->send_not_methods[$i];

        }


        $date = date("Y-m-d H:i:s");
        $mod_date;
        $mod_date = strtotime($date.$request->send_not_period);
        $mod_date= date("Y-m-d H:i:s",$mod_date);


        


        $client =   \App\Client::where('id',$id)
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
                'details' => $request->details,
                'send_not_methods'=>$send_not_methods,
                'send_not'=>$send_not,
                'send_not_period'=>$request->send_not_period,
                
                

            ]
        );

        $client0= \App\Client::where('id',$id)->get()->first();

        if($request->send_not_period!= $client0['send_not_period'])
        {
           $client2 =   \App\Client::where('id',$id)
        ->update(
            [
                'next_send'=>$mod_date
            ]); 
        }


        return redirect('/client')->with('data', ['alert'=>'تم تحديث بيانات العميل '.$client['name'] ,'alert-type'=>'success']);


         
    }

 
    public function destroy(Request $request)
    {     
        $client =  \App\Client::where('id',$request->id)->delete(); 
        return redirect('/client')->with('data', ['alert'=>'تم حذف العميل بنجاح','alert-type'=>'success']);
    }


    public function track($id)
    {
        $client= \App\Client::where('rand_num',$id)->get()->first();
        $deal = \App\Deal::where('client_id',$client['id'])->get();
        if(is_object($deal)&& count($deal)>0)
        {


            $total_borrow_payback = array(
                'RS' =>0 ,
                'RO' =>0 ,
                'YER' =>0 ,
                'USD' =>0 ,
                 ); 

            $name=$client['name'];
            $phone=$client['phone'];
            $email=$client['email'];

            for($i=0;$i<count($deal);$i++)
            {
                if($deal[$i]->deal_borrow_payback=='borrow')
                {
                    if($deal[$i]->deal_currency=='RS')
                        $total_borrow_payback['RS']+=$deal[$i]->deal_mount;
                    else if($deal[$i]->deal_currency=='RO')
                        $total_borrow_payback['RO']+=$deal[$i]->deal_mount;
                    else if($deal[$i]->deal_currency=='YER')
                        $total_borrow_payback['YER']+=$deal[$i]->deal_mount;
                    else if($deal[$i]->deal_currency=='USD')
                        $total_borrow_payback['USD']+=$deal[$i]->deal_mount;


                }
                else
                {
                    if($deal[$i]->deal_currency=='RS')
                        $total_borrow_payback['RS']-=$deal[$i]->deal_mount;
                    else if($deal[$i]->deal_currency=='RO')
                        $total_borrow_payback['RO']-=$deal[$i]->deal_mount;
                    else if($deal[$i]->deal_currency=='YER')
                        $total_borrow_payback['YER']-=$deal[$i]->deal_mount;
                    else if($deal[$i]->deal_currency=='USD')
                        $total_borrow_payback['USD']-=$deal[$i]->deal_mount;
                }

            }

            $arrayName = array('deal' =>  $deal,'total_borrow_payback'=>$total_borrow_payback,'name'=>$name,'phone'=>$phone,'email'=>$email);
            return view('client.frontendclient',$arrayName) ;
        }
        else
        {
            return 'لم يتم العثور علي معاملات';
        }
    }

     public function details($id)
    {
        $client=\App\Client::where('id',$id)->get()->first();
        $deal= \App\Deal::orderBy('id', 'DESC')->where('client_id',$id)->get();
        $arrayName=array('client'=>$client,'deal'=>$deal);
       return view('client.clientdeal',$arrayName);
    }

}
