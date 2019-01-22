<?php $__env->startSection('content'); ?>
 <style type="text/css">
 	 #myChart1 * {
	 	font-family: 'Cairo', sans-serif!important;
	 }
 </style>

 <div class="col-xs-12 ">
	<div class="col-xs-12 col-sm-12 col-md-5"  >

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">إحصائيات الصرف</h3>
		  </div>
		  <div class="panel-body">
		    	<canvas id="myChart1"    style="height: 100px;" ></canvas>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">إحصائيات السداد</h3>
		  </div>
		  <div class="panel-body">
		    	<canvas id="myBarChart"    style="height:100px;" ></canvas>
		  </div>
		</div>



		 
		
	</div>

	<div class="col-xs-12 col-sm-12 col-md-7"   style="padding: 0px">

		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">سجل</h3>
		  </div>
		  <div class="panel-body" style="height: 600px;padding: 0px;">
			<?php $deal=\App\Http\Controllers\MessageController::get_deals_home(); ?>
		  	<div class="col-xs-12" style="padding: 0px">
		  		<div class="col-xs-12 text-center" style="background: #5191d1;color: #fff;padding: 2px 0px ">
		  			آخر المعاملات
		  		</div>

			  	<div class="cl-xs-12" style="border:1px solid #5191d1;min-height: 250px;overflow: auto;">
			  		 <table class="table" style="padding: 0px;min-width: 700px;">
                               <thead class="thead" style="background: #f2fffd;padding: 5px ">
                                   <tr>
                                       <td>كود</td>
                                       <td>اسم العميل</td>
                                       <td>البريد الاكتروني</td>
                                       <td>الجوال</td>
                                       <td>المبلغ</td>
                                       <td>النوع</td>
                                       <td>اشعار انشاء</td>
                                       <td>عميلة</td>
                                   </tr>
                               </thead>
                               <tbody>
                                <?php $__currentLoopData = $deal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mydeal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                    <td><?php echo e($mydeal->id); ?></td>
                                     <td>

                                      <?php if(\App\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'send_not')=='on') echo '[<span class="fa fa-check" style="color: #3fcf7f;font-size: 15px;"></span>] '; else echo '[<span class="fa fa-times" style="color: #ea4949;font-size: 15px;"></span>]'; ?>

                                       
                                      <?php echo e(\App\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'name')); ?>


                                      <?php if (strpos(\App\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'send_not_methods'), 'whatsApp') !== false) {echo '<span class="fab fa-whatsApp" style="color:#3fcf7f;font-size: 16px; "></span>';}?>

                                      <?php if  (strpos(\App\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'send_not_methods'), 'email') !== false) {echo '-<span class="far fa-envelope" style="color:#3fcf7f;font-size: 16px; "></span>';}?>

                                      <?php if (strpos(\App\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'send_not_methods'), 'sms') !== false) {echo '-<span class="fas fa-mobile-alt" style="color:#3fcf7f;font-size: 16px; "></span>';}?>


                                    </td>
                                     <td><?php echo e(\App\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'email')); ?></td>
                                     <td><?php echo e(\App\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'phone')); ?></td>
                                     <td><?php echo e($mydeal->deal_mount); ?></td>
                                     <td>

                                      <span style="background: <?php if($mydeal->deal_borrow_payback=='borrow')echo'#5191d1';else echo '#3fcf7f'; ?>
                                      ;padding: 1px 4px;color: #fff;border-radius: 2px;"> <?php if($mydeal->deal_borrow_payback=='borrow')echo'قيد';else echo 'سداد'; ?></span>
                                      
                                      
                                    </td>
                                     
                                     <td>

                                      <?php if (strpos($mydeal->deal_init_send_not_methods, 'whatsApp') !== false) {echo '<span class="fab fa-whatsApp" style="color:#3fcf7f;font-size: 16px; "></span>';}?>
                                      <?php if (strpos($mydeal->deal_init_send_not_methods, 'email') !== false) {echo '-<span class="far fa-envelope" style="color:#3fcf7f;font-size: 16px; "></span>';}?>
                                      <?php if (strpos($mydeal->deal_init_send_not_methods, 'sms') !== false) {echo '-<span class="fas fa-mobile-alt" style="color:#3fcf7f;font-size: 16px; "></span>';}?>

                                      
                                     </td>
                                   

                                     <td>
                                      
                                      <a href="/deal/<?php echo e($mydeal->id); ?>/edit">
                                        <span class="fa fa-edit" style="color: #13c4a5"></span>
                                      </a>
                                      
                                      <a href="#">
                                        <span class="fa fa-envelope" style="color: #13c4a5;"
                                        onclick="
                                        $('#message_id_form').val('<?php echo e($mydeal->client_id); ?>');
                                        $('#message_type_form').val('client');
                                        $('.message_panel').animate({opacity:1},300,function(){
                                          $('.message_panel textarea').css('border','1px solid #13c4a5');
                                        });"></span>
                                      </a>

                                
                                     </td>
                                  </tr>          
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        

                                    
  
                               </tbody>


                           </table>

			  	</div>
		  	</div>
		   
		  	<div class="col-xs-12" style="padding: 0px;margin-top: 15px;">
		  		<div class="col-xs-12 text-center" style="background: #3fcf7f;color: #fff;padding: 2px 0px ">
		  			آخر الرسائل
		  		</div>
 
		  		<div class="cl-xs-12" style="padding: 0px;border:1px solid #3fcf7f;min-height: 250px;overflow: auto;">
		  			<?php $message=\App\Http\Controllers\MessageController::get_messages_home(); ?>
			  		<table class="table" style="padding: 0px;min-width: 400px;">
                               <thead class="thead" style="background: #f2fffd;padding: 5px ">
                                   <tr>
                                       <td>كود</td>
                                       <td>اسم العميل</td>
                                       <td>البريد الاكتروني</td>
                                       <td>النوع</td>
                                       <td>حالة السيرفر</td>
                                       
                                       <td>عميلة</td>
                                   </tr>
                               </thead>
                               <tbody>
                                <?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mymessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                    <td><?php echo e($mymessage->id); ?></td>
                                     <td>

                                       

                                     <?php echo e(\App\Http\Controllers\MessageController::get_name_client_emp_by_id($mymessage->message_receiver_id,$mymessage->client_or_emp,'name')); ?>


                                     <?php if($mymessage->client_or_emp=='client') echo "[عميل]";  ?>
                                     <?php if($mymessage->client_or_emp=='emp') echo "[موظف]";  ?> 
 

 


                                    </td>


                                     <td><?php echo e($mymessage->message_num_or_email); ?></td>
                                     <td><?php echo e($mymessage->message_type); ?></td>
                                     <td><?php echo e(substr($mymessage->message_status,0,25)); ?></td>
                                     
 
                                  
                                   

                                     <td>
                                      
                                      <a href="/message/show/<?php echo e($mymessage->id); ?>">
                                        <span class="fa fa-search" style="color: #13c4a5"></span>
                                      </a>
                                      
                                

                                     </td>


                                  </tr>          
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        

                                    
  
                               </tbody>


                           </table>
		  			 
			  	</div>

		  	</div>
		    
		  </div>
		</div>


	 
		
	</div>

 </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>