<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{



    public function NotificationController(){

    	$client= \App\Client::where('send_not','on')->get();
    	if(is_object($client)&&count($client)>0)
    	{

    		for($i=0;$i<count($client);$i++)
    		{
    			 

    			 $mount=MessageController::is_calc_account($client[$i]->id);
    			 if($mount)
	    			 {
	    			 	 
	    			 	if( strtotime( date('Y-m-d H:i:s') )> strtotime($client[$i]->next_send) )
	 	    			 {	
	 	    			 	
	 	    			  	MessageController::send_notification($client[$i]->id,$client[$i]->send_not_methods);
	 
	 					    	 
	          		            $date = date("Y-m-d H:i:s");  
	 					        $mod_date = strtotime($date.$client[$i]->send_not_period);
	 					        $mod_date= date("Y-m-d H:i:s",$mod_date);
	 
	 
	 				            $client1 =   \App\Client::where('id',$client[$i]->id)
	 				        	->update(
	 				            [
	 				            	'next_send'=>$mod_date,
	 				            	'last_send'=>date("Y-m-d H:i:s")
	 				            ]);
	   		 			 
	 
	 	    			 }
	    			}



	    		else{ 

	    			$client2 =   \App\Client::where('id',$client[$i]->id)
		        	->update(
		            [
		            	'send_not'=>'off'
		             
		            ]);			 
	    		}
    		}
    	}   	
    }




    public function send_pending_whatsapp(){

    	$message = \App\Message::where('message_status','wait')->get();
    	if(is_object($message)&&count($message)>0)
    	{ 
    		for($i=0;$i<count($message);$i++ )
    		{
    			$status='OK';
        		try {
         			MessageController::send_whatsapp_msg($message[$i]->message_num_or_email,$message[$i]->message_content);
			    		$message0 =   \App\Message::where('id',$message[$i]->id)
				        ->update(
				            [
				            	'message_status'=>$status
				            ]);
			    } catch (\Exception $e) {

			    	if(strpos($e->getMessage(),"is not connected with waboxapp right now"))
			    	{
				    	$status='wait';
						return 0;
					}
			    	else { 
			    	 
			    		$status.=$e->getMessage();
			    		$message0 =   \App\Message::where('id',$message[$i]->id)
				        ->update(
				            [
				            	'message_status'=>$status
				            ]);
			    	}
			    }
    		}
    	}

		return 'this file has been changed successfully';
    }
    public function schadual_run_command()
    {
    	NotificationController::NotificationController();
    	NotificationController::send_pending_whatsapp();
    	return 0;
    }







}
