<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Mail;

class MessageController extends Controller
{

 

	
/*
	public function test()
    {
        $date = date("Y-m-d");
		//increment 2 days
		$mod_date = strtotime($date."+ 2 days");
		echo date("Y-m-d ",$mod_date) . "\n";

		//decrement 2 days
		$mod_date = strtotime($date."- 2 days");
		echo date("Y-m-d",$mod_date) . "\n";

		//increment 1 month
		$mod_date = strtotime($date."+ 1 months");
		echo date("Y-m-d",$mod_date) . "\n";

		//increment 1 year
		$mod_date = strtotime($date."+ 1 years");
		echo date("Y-m-d",$mod_date) . "\n";
    }
*/



	
	public function create()
    {
    	return view('message.addnewmsg');
    }

    public function getEmpsMsgs(Request $request)
    {
    	$item=\App\Employee::get(['name','id']); 
    	$arrayName = array('item' => $item);
    	return $arrayName;
    	
    }


    public static function get_messages_home()
    {
    	$item=\App\Message::orderBy('id', 'DESC')->paginate(5); 
    	 return $item;	
    }
    public static  function get_deals_home()
    {
    	$item=\App\Deal::orderBy('id', 'DESC')->paginate(5); 
    	 return $item;	
    }


    public static function total_borrow_payback(Request $request)
    {
    	 
    	$deal  =\App\Deal::get();
 

    	$total=array(
    		'total_borrow'=>array(
    			'RS'=>0,
    			'YER'=>0,
    			'RO'=>0,
    			'USD'=>0
    		),
    		'total_payback'=>array(
    			'RS'=>0,
    			'YER'=>0,
    			'RO'=>0,
    			'USD'=>0
    		) 

    	);


    	if(is_object($deal)&&count($deal)>0)
    	{
    		for($i=0;$i<count($deal);$i++)
    		{
    			if($deal[$i]->deal_currency=='RS'&&$deal[$i]->deal_borrow_payback=='borrow')
    				$total['total_borrow']['RS']+=$deal[$i]->deal_mount;
    			else if($deal[$i]->deal_currency=='RO'&&$deal[$i]->deal_borrow_payback=='borrow')
    				$total['total_borrow']['RO']+=$deal[$i]->deal_mount;
    			else if($deal[$i]->deal_currency=='YER'&&$deal[$i]->deal_borrow_payback=='borrow')
    				$total['total_borrow']['YER']+=$deal[$i]->deal_mount;
    			else if($deal[$i]->deal_currency=='USD'&&$deal[$i]->deal_borrow_payback=='borrow')
    				$total['total_borrow']['USD']+=$deal[$i]->deal_mount;

    			else if($deal[$i]->deal_currency=='RS'&&$deal[$i]->deal_borrow_payback=='payback')
    				$total['total_payback']['RS']+=$deal[$i]->deal_mount;
    			else if($deal[$i]->deal_currency=='RO'&&$deal[$i]->deal_borrow_payback=='payback')
    				$total['total_payback']['RO']+=$deal[$i]->deal_mount;
    			else if($deal[$i]->deal_currency=='YER'&&$deal[$i]->deal_borrow_payback=='payback')
    				$total['total_payback']['YER']+=$deal[$i]->deal_mount;
    			else if($deal[$i]->deal_currency=='USD'&&$deal[$i]->deal_borrow_payback=='payback')
    				$total['total_payback']['USD']+=$deal[$i]->deal_mount;

    		}
    	}

    	return $total;

    	 
    }




    public function getClientsMsgs(Request $request)
    {
    	$item=\App\Client::get(['name','id']); 
    	$arrayName = array('item' => $item);
    	return $arrayName;
    }


	public function index()
    {
       $message= \App\Message::orderBy('id', 'DESC')->paginate(50);
       $arrayName=array('message'=>$message);
       return view('message.viewallmsgs',$arrayName); 
    }

    public function show($id)
    {
       $message= \App\Message::where('id',$id)->get()->first();
       
       	if(is_object($message)&& isset($message['id']))
       	{
       		$arrayName=array('message'=>$message);

       		return view('message.viewmsg',$arrayName);
       	}
       
       
        return    redirect('/message')->with('data', ['alert'=>'لم يتم العثور علي الرسالة المطلوبة','alert-type'=>'success']);
    }

	public function send_message(Request $request){


		$type= $request->type;
		$ids= $request->id;
		$methods= $request->method;
		$content=$request->content;


		if(isset($request->forall)&&$request->forall=='on')
		{
			$ids=array();  
			if($type=='client')
			{	
				$temp= \App\Client::get();
				foreach ($temp as $mytemp)array_push($ids, $mytemp->id);      			 
			}
			else if ($type=='emp')
			{
				$temp= \App\Employee::get();
				foreach ($temp as $mytemp)array_push($ids, $mytemp->id);   
			}
		}
		 



		$methods="";
        if(isset($methods)&&count($request->method)>0)
        {
            for($i=0 ; $i<count($request->method);$i++)
                $methods.= ','.$request->method[$i];

        }
        //return $methods;


        if ((strpos($methods, 'whatsapp') !== false) ) 
        {





        	for($i = 0;  $i < count($ids) ;$i++)
        	{
        		$phone='201282381045';

        		if($type=='client')
        		{
        			$temp= \App\Client::where('id',$ids[$i])->get()->first();
        			$phone=$temp['phone'];
        		}
        		else if($type=='emp')
        		{
        			$temp= \App\Employee::where('id',$ids[$i])->get()->first();
        			$phone=$temp['phone'];
        		}
        		//Needs EXCEPTION

        		$status='OK';
        		try {
         			MessageController::send_whatsapp_msg($phone,$content);
			    } catch (\Exception $e) {

			    	if(strpos($e->getMessage(),"is not connected with waboxapp right now"))
			    	$status='wait';
			    	else $status.=$e->getMessage();
			    }

        		

        		MessageController::save_message_to_db($ids[$i],$phone,$content,'whatsapp' ,$status,$type);

        	 
        	}




        }

        if (strpos($methods, 'email') !== false)
        {
        	for($i = 0;  $i < count($ids) ;$i++)
        	{
        		$email='ptharwat@gmail.com';

        		if($type=='client')
        		{
        			$temp= \App\Client::where('id',$ids[$i])->get()->first();
        			$email=$temp['email'];
        		}
        		else if($type=='emp')
        		{
        			$temp= \App\Employee::where('id',$ids[$i])->get()->first();
        			$email=$temp['email'];
        		}
        		

        		$status='OK';
        		try {
         			MessageController::send_email_msg($email,$content);
			    } catch (\Exception $e) {
			    	$status='Error '.$e->getMessage();
			    }



        		MessageController::save_message_to_db($ids[$i],$email,$content,'email' ,$status,$type);
        	}

        }

        if (strpos($methods, 'sms') !== false)
        {

 
        	for($i = 0;  $i < count($ids) ;$i++)
        	{
        		$phone='201282381045';

        		if($type=='client')
        		{
        			$temp= \App\Client::where('id',$ids[$i])->get()->first();
        			$phone=$temp['phone'];
        		}
        		else if($type=='emp')
        		{
        			$temp= \App\Employee::where('id',$ids[$i])->get()->first();
        			$phone=$temp['phone'];
        		}


        		$status='OK';
        		try {
         			MessageController::send_sms_msg($phone,$content);
			    } catch (\Exception $e) {

			    $status='Error '.$e->getStatusCode().$e->getMessage();
			    }

        		

        		MessageController::save_message_to_db($ids[$i],$phone,$content,'sms' ,$status,$type);
        	}



        }



        return redirect()->back()->with('data', ['alert'=>'تم الارسال بنجاح','alert-type'=>'success']);
	}

	
 	public static function  send_whatsapp_msg($phone="201282381045",$content="رسالة")
 	{

 		$token= env('WHATSAPP_TOKEN');
 		$whatapp_phone=env('WHATSAPP_PHONE');
 		$phone = $phone;
 		$randnum='msg-'.date('Y-m-d H:i:s').rand(10000,20000);


 		$postdata = http_build_query(
            array(
               'token' =>  $token,
                'uid' => $whatapp_phone,
                'to' => $phone,
                'custom_uid' => $randnum,
                'text' => $content
            )
        );

        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );

        $context  = stream_context_create($opts);
       	$result = file_get_contents('https://www.waboxapp.com/api/send/chat', false, $context);
 	}

 	public static function  send_sms_msg($phone,$content)
 	{
		$sid = env('SMS_SIDNUM');
        $token =  env('SMS_TOKEN');
        $client = new Client($sid, $token);

        $client->messages->create(
            '+'.$phone,
            array(
              'from' => env('SMS_NEW_PHONE'),
              'body' =>$content
            )
        );                
 	}

 	public static function  send_email_msg($email,$content)
 	{
 		 Mail::send('emails.mail', ['content' => $content], function ($m) use ($email) {
            $m->from(env('MAIL_USERNAME'), 'وكالة اوكي للسفريات');
            $m->to($email, 'عميلنا العزيز')->subject('لديك رسالة جديدة');
       	 });
 	}

 	public static function  save_message_to_db($id='NULL',$to='NULL',$content="NULL",$method="NULL" ,$status="NULL",$client_or_emp="NULL")
 	{	       
 		$message = new \App\Message; 
 		$message->message_content=$content;
 		$message->client_or_emp=$client_or_emp;
 		$message->message_type=$method;
 		$message->message_num_or_email=$to;
 		$message->message_receiver_id=$id;
 		$message->sender_id='1';
 		$message->message_status=$status;
 		$message->save();	
 	}








     public static function  send_notification($id,$methods){
     	 $content = MessageController::prepare_send_notification($id);

     	 if ((strpos($methods, 'email') !== false) ) 
        {
        	$temp= \App\Client::where('id',$id)->get()->first();
        	$email=$temp['email'];

        	$status='OK';
    		try {
     			MessageController::send_email_msg($email,$content);
		    } catch (\Exception $e) {
		    	$status='Error '.$e->getMessage();
		    }

    		MessageController::save_message_to_db($id,$email,$content,'email' ,$status,'client');
        }

        if ((strpos($methods, 'whatsapp') !== false) ) 
        {
        	$temp= \App\Client::where('id',$id)->get()->first();
        	$phone=$temp['phone'];

        	$status='OK';
    		try {
     			MessageController::send_whatsapp_msg($phone,$content);
		    } catch (\Exception $e) {
		    	if(strpos($e->getMessage(),"is not connected with waboxapp right now"))
			    	$status='wait';
			    	else $status.=$e->getMessage();
		    }

    		MessageController::save_message_to_db($id,$phone,$content,'whatsapp' ,$status,'client');
        }

        if ((strpos($methods, 'sms') !== false) ) 
        {
        	$temp= \App\Client::where('id',$id)->get()->first();
        	$phone=$temp['phone'];

        	$status='OK';
    		try {
     			MessageController::send_sms_msg($phone,$content);
		    } catch (\Exception $e) {
		    	$status='Error '.$e->getMessage();
		    }

    		MessageController::save_message_to_db($id,$phone,$content,'sms' ,$status,'client');
        }





     }

     public static function  send_init_notification($id,$borrow_payback,$mount,$curreny,$for,$methods){

      
     	$content = MessageController::prepare_send_init_notification($id,$borrow_payback,$mount,$curreny,$for);

     	
        if ((strpos($methods, 'email') !== false) ) 
        {
        	$temp= \App\Client::where('id',$id)->get()->first();
        	$email=$temp['email'];

        	$status='OK';
    		try {
     			MessageController::send_email_msg($email,$content);
		    } catch (\Exception $e) {
		    	$status='Error '.$e->getMessage();
		    }

    		MessageController::save_message_to_db($id,$email,$content,'email' ,$status,'client');
        }

        if ((strpos($methods, 'whatsapp') !== false) ) 
        {
        	$temp= \App\Client::where('id',$id)->get()->first();
        	$phone=$temp['phone'];

        	$status='OK';
    		try {
     			MessageController::send_whatsapp_msg($phone,$content);
		    } catch (\Exception $e) {
		    	if(strpos($e->getMessage(),"is not connected with waboxapp right now"))
			    	$status='wait';
			    	else $status.=$e->getMessage();
		    }

    		MessageController::save_message_to_db($id,$phone,$content,'whatsapp' ,$status,'client');
        }

        if ((strpos($methods, 'sms') !== false) ) 
        {
        	$temp= \App\Client::where('id',$id)->get()->first();
        	$phone=$temp['phone'];

        	$status='OK';
    		try {
     			MessageController::send_sms_msg($phone,$content);
		    } catch (\Exception $e) {
		    	$status='Error '.$e->getMessage();
		    }

    		MessageController::save_message_to_db($id,$phone,$content,'sms' ,$status,'client');
        }


        return redirect('/deal')->with('data', ['alert'=>'تم اضافة معاملة جديدة','alert-type'=>'success']);
 
     }
 

	 public static function prepare_send_init_notification($id,$borrow_payback,$mount,$currency,$for){
	 	$client = \App\Client::where('id',$id)->get()->first();
 
	 	$currency_translated='';
	 	if($currency=='RS') $currency_translated='ريال سعودي';
	 	else if($currency=='RO') $currency_translated='ريال عماني';
	 	else if($currency=='YER') $currency_translated='ريال يمني';
	 	else if($currency=='USD') $currency_translated='دولار';

	 	$borrow_payback_final='';
	 	$from_or_to='';
	 	if($borrow_payback=='borrow') {$borrow_payback_final='قيد';$from_or_to='إلي';}
	 	else if($borrow_payback=='payback') {$borrow_payback_final='خصم';$from_or_to='من';}
	 	 $account= MessageController::calc_account($id);

 $content='اشعار '.$borrow_payback_final.'
رسالة اليه من نظام الحسابات التابع لوكالة اوكي للسفريات

الاخ '.$client['name'].'
تم '.$borrow_payback_final.' مبلغ '.$mount. ' '.$currency_translated.' '.$from_or_to.' حسابكم لدينا وذلك مقابل '.$for.'
اجمالي الرصيد عليكم 
مبلغ '.$account['RO'].' ريال عماني 
مبلغ '.$account['RS'].' ريال سعودي
مبلغ '.$account['YER'].' ريال يمني 
مبلغ '.$account['USD'].' دولار

لمشاهدة كشف حسابكم يرجى الضغط على الرابط التالى '.route('track').'/'.$client->rand_num.'

لاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476
او ارقامنا الاخرى
فرع المكلا 00967770060117
فرع صلالة 0096894225255';

	 	return $content;	 
	 }









	 public static function get_name_client_emp_by_id($id,$type,$prop)
	 {
	 	if($type=='client')
	 	{
	 		$client= \App\Client::where('id',$id)->get()->first();
	 		return $client[$prop];
	 	}
	 	else if ($type=='emp')
	 	{
	 		$emp= \App\Employee::where('id',$id)->get()->first();
	 		return $emp[$prop];
	 	}
	 	return 'NOT_FOUND';
	 }








	 public static function prepare_send_notification($id){

	 	$client = \App\Client::where('id',$id)->get()->first();

		$account=MessageController::calc_account($id);

$content='رسالة اشعار
رسالة اليه من نظام الحسابات التابع لوكالة اوكي للسفريات
الاخ '.$client['name'].'
نشعركم بأن حسابكم لدينا مدين بالمبالغ التالية :-
مبلغ '.$account['RO'].' ريال عماني 
مبلغ '.$account['RS'] .' ريال سعودي
مبلغ '.$account['YER'].' ريال يمني 
مبلغ '.$account['USD'].' دولار

يرجى سرعة تسوية حسابكم مع شكرنا وتقديرنا

لمشاهدة كشف حسابكم يرجى الضغط على الرابط التالى '.route('track').'/'.$client->rand_num.'

لاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476
او ارقامنا الاخرى
فرع المكلا 00967770060117
فرع صلالة 0096894225255';

	 		return $content;	 
	 }












	 public static function calc_account($id){

	 	$client = \App\Client::where('id',$id)->get()->first();
		$deal = \App\Deal::where('client_id',$id)->get();

		$USD    = 0;
		$RO   	= 0;
		$RS  	= 0;
		$YER	= 0;

		for ($i = 0 ;$i <count($deal);$i++ )
		{
			//return $deal[$i];
			if($deal[$i]->deal_currency=='USD')
			{
				if($deal[$i]->deal_borrow_payback=='borrow')
					$USD+=$deal[$i]->deal_mount;
				else if ($deal[$i]->deal_borrow_payback=='payback')
					$USD-=$deal[$i]->deal_mount;
			}
			else if($deal[$i]->deal_currency=='RO')
			{

				if($deal[$i]->deal_borrow_payback=='borrow')
					$RO+=$deal[$i]->deal_mount;
				else if ($deal[$i]->deal_borrow_payback=='payback')
					$RO-=$deal[$i]->deal_mount;

			}
			else if($deal[$i]->deal_currency=='RS')
			{
				//return 0;
				if($deal[$i]->deal_borrow_payback=='borrow') 
					$RS+=$deal[$i]->deal_mount;
				else if ($deal[$i]->deal_borrow_payback=='payback')
					$RS-=$deal[$i]->deal_mount;
			}
			else if($deal[$i]->deal_currency=='YER')
			{
				if($deal[$i]->deal_borrow_payback=='borrow')
					$YER+=$deal[$i]->deal_mount;
				else if ($deal[$i]->deal_borrow_payback=='payback')
					$YER-=$deal[$i]->deal_mount;
			}

		}

		$account=array(
			'USD'=>$USD,
			'RO' =>$RO,
			'RS' =>$RS,
			'YER'=>$YER

		);

		return $account;
	 }


	 public static function is_calc_account($id){

	 	$client = \App\Client::where('id',$id)->get()->first();
		$deal = \App\Deal::where('client_id',$id)->get();

		$USD    = 0;
		$RO   	= 0;
		$RS  	= 0;
		$YER	= 0;

		for ($i = 0 ;$i <count($deal);$i++ )
		{
			//return $deal[$i];
			if($deal[$i]->deal_currency=='USD')
			{
				if($deal[$i]->deal_borrow_payback=='borrow')
					$USD+=$deal[$i]->deal_mount;
				else if ($deal[$i]->deal_borrow_payback=='payback')
					$USD-=$deal[$i]->deal_mount;
			}
			else if($deal[$i]->deal_currency=='RO')
			{

				if($deal[$i]->deal_borrow_payback=='borrow')
					$RO+=$deal[$i]->deal_mount;
				else if ($deal[$i]->deal_borrow_payback=='payback')
					$RO-=$deal[$i]->deal_mount;

			}
			else if($deal[$i]->deal_currency=='RS')
			{
				//return 0;
				if($deal[$i]->deal_borrow_payback=='borrow') 
					$RS+=$deal[$i]->deal_mount;
				else if ($deal[$i]->deal_borrow_payback=='payback')
					$RS-=$deal[$i]->deal_mount;
			}
			else if($deal[$i]->deal_currency=='YER')
			{
				if($deal[$i]->deal_borrow_payback=='borrow')
					$YER+=$deal[$i]->deal_mount;
				else if ($deal[$i]->deal_borrow_payback=='payback')
					$YER-=$deal[$i]->deal_mount;
			}

		}

 		if($USD>0||$YER>0||$RO>0||$RS>0)
 			return 1;
		return 0;
	 }






	 public function destroy(Request $request)
    {
        $message =  \App\Message::where('id',$request->id)->delete(); 
        return redirect('/message')->with('data', ['alert'=>'تم حذف الرسالة بنجاح','alert-type'=>'success']);
    }







}
