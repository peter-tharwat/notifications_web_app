<?php $__env->startSection('content'); ?>
     <div class="col-xs-12 effect-content"  >
            <div class="panel " >
                <section >
                    <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-8" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">عرض محتوي رسالة</span>  
                            <form method="POST" action="/message/destroy" style="display: inline-block;margin: 0px" id="removemessageform">
                              <?php echo e(csrf_field()); ?>

                              <input type="hidden" name="id" value="" id="removeid">
                              
                            <span class="hidden-sm" style="padding: 3px;display: inline-block; border:1px solid #13c4a5;background: #f2fffd;opacity: 0;" id="removealert">حذف ؟
                              <span  style="padding-right: 50px;">

                                  
                                 <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5; color: #13c4a5 ;cursor:pointer" onclick="$('#removemessageform').submit();">
                                  <span class="fa fa-check" style="width: 15px;padding: 0px 1px" ></span>
                                 </span>

                                
                              </span>
                              </form>  
                            </span>   
                        </div>


                        <div style="padding: 0px" class="col-xs-2 ">
                          
                        </div>
 

                        <div class="col-xs-2" style="padding: 0px;direction: ltr!important;">


                     

                            <a style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;" href="/message/create">
                                <span class="fa fa-plus" style="background: #2381c6;color: #fff;border-radius: 50%;padding: 4px 5px ;cursor: pointer;"> </span>
                            </a>
                        </div>
                         
                    </header>
                    <div class="panel-body" style=" padding: 0px;">


                       <div class="col-xs-12" style="padding: 40px 10px;">
                            

                          <div class=" col-md-4">
                                <div class="col-xs-12">
                                  <div class="col-xs-3  text-left">
                                      رقم الرسالة
                                  </div>
                                  <div class="col-xs-7  text-right">
                                      <?php echo e($message->id); ?>

                                  </div>
                                </div>
                                <div class="col-xs-12">
                                  <div class="col-xs-3  text-left">
                                      اسم المستلم 
                                  </div>

                                  <div class="col-xs-7  text-right">
                                         <?php echo e(\app\Http\Controllers\messageController::get_name_client_emp_by_id($message->message_receiver_id,$message->client_or_emp,'name')); ?>


                                     <?php if($message->client_or_emp=='client') echo "[عميل]";  ?>
                                     <?php if($message->client_or_emp=='emp') echo "[موظف]";  ?> 
                                  </div>

                                </div>
                                <div class="col-xs-12">
                                  <div class="col-xs-3  text-left">
                                      نوع المستلم
                                  </div>

                                  <div class="col-xs-7  text-right">
                                         <?php echo e($message->client_or_emp); ?>

                                  </div>
                                  
                                </div>
                                <div class="col-xs-12">
                                  <div class="col-xs-3  text-left">
                                      كود المستلم
                                  </div>

                                  <div class="col-xs-7  text-right">
                                        <?php echo e($message->message_receiver_id); ?>

                                  </div>
                                  
                                </div>



                                <div class="col-xs-12">
                                  <div class="col-xs-3  text-left">
                                      رقم - ايميل
                                  </div>
                                  <div class="col-xs-7  text-right">
                                      <?php echo e($message->message_num_or_email); ?>

                                  </div>
                                </div>
                              </div>
                              <div class=" col-md-8">
                                <div class="col-xs-12">
                                  <div class="col-xs-3  text-left">
                                      نوع الرسالة
                                  </div>
                                  <div class="col-xs-7  text-right">
                                      <?php echo e($message->message_type); ?>

                                  </div>
                                </div>
                                <div class="col-xs-12">
                                  <div class="col-xs-3  text-left">
                                      حالة الارسال
                                  </div>
                                  <div class="col-xs-7  text-right">
                                      <?php echo e($message->message_status); ?>

                                  </div>
                                </div>
                                <div class="col-xs-12">
                                  <div class="col-xs-3  text-left">
                                      محتوي الرسالة
                                  </div>
                                  <div class="col-xs-9 text-right">
                                     <pre> <?php echo e($message->message_content); ?></pre>
                                  </div>
                                </div>
                            </div>  



                       </div>
 
                    </div>
                </section> 
            </div>
         
      
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>