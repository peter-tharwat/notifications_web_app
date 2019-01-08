<?php $__env->startSection('content'); ?>
     <div class="col-xs-12 effect-content"  >
            <div class="panel " >
                <section >
                    <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-8" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">عرض كافة المعاملة</span>  
                            <form method="POST" action="/deal/destroy" style="display: inline-block;margin: 0px" id="removedealform">
                              <?php echo e(csrf_field()); ?>

                              <input type="hidden" name="id" value="" id="removeid">
                              
                            <span class="hidden-sm" style="padding: 3px;display: inline-block; border:1px solid #13c4a5;background: #f2fffd;opacity: 0;" id="removealert">حذف ؟
                              <span  style="padding-right: 50px;">

                                  
                                 <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5; color: #13c4a5 ;cursor:pointer" onclick="$('#removedealform').submit();">
                                  <span class="fa fa-check" style="width: 15px;padding: 0px 1px" ></span>
                                 </span>

                                
                              </span>
                              </form>  
                            </span>   
                        </div>
                        <div style="padding: 0px" class="col-xs-2 ">
                          <form method="get" action="/deal/search">
                            
                         
                          <div class=" navbar-form pull-left shift" style="padding: 0px;margin: 0px;">
                            <i class="fa fa-search text-muted"></i> <input class="input-sm form-control" placeholder="البحث الذكي" type="text" style="border:1px solid #13c4a5!important;background: #f2fffd" name="search">
                          </div>
                           </form>
                          
                        </div>

                        <div class="col-xs-2" style="padding: 0px;direction: ltr!important;">
                            <a style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;" href="/deal/create">
                                <span class="fa fa-plus" style="background: #2381c6;color: #fff;border-radius: 50%;padding: 4px 5px ;cursor: pointer;"> </span>
                            </a>
                        </div>
                         
                    </header>
                    <div class="panel-body" style=" padding: 0px;">
                       <div class="col-xs-12" style="padding: 0px;">
                           <table class="table" style="padding: 0px;">
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

                                      <?php if(\app\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'send_not')=='on') echo '[<span class="fa fa-check" style="color: #3fcf7f;font-size: 15px;"></span>] '; else echo '[<span class="fa fa-times" style="color: #ea4949;font-size: 15px;"></span>]'; ?>

                                       
                                      <?php echo e(\app\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'name')); ?>


                                      <?php if (strpos(\app\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'send_not_methods'), 'whatsapp') !== false) {echo '<span class="fab fa-whatsapp" style="color:#3fcf7f;font-size: 16px; "></span>';}?>

                                      <?php if  (strpos(\app\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'send_not_methods'), 'email') !== false) {echo '-<span class="far fa-envelope" style="color:#3fcf7f;font-size: 16px; "></span>';}?>

                                      <?php if (strpos(\app\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'send_not_methods'), 'sms') !== false) {echo '-<span class="fas fa-mobile-alt" style="color:#3fcf7f;font-size: 16px; "></span>';}?>


                                    </td>
                                     <td><?php echo e(\app\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'email')); ?></td>
                                     <td><?php echo e(\app\Http\Controllers\DealController::get_client_by_id($mydeal->client_id,'phone')); ?></td>
                                     <td><?php echo e($mydeal->deal_mount); ?></td>
                                     <td>

                                      <span style="background: <?php if($mydeal->deal_borrow_payback=='borrow')echo'#5191d1';else echo '#3fcf7f'; ?>
                                      ;padding: 1px 4px;color: #fff;border-radius: 2px;"> <?php if($mydeal->deal_borrow_payback=='borrow')echo'قيد';else echo 'سداد'; ?></span>
                                      
                                      
                                    </td>
                                     
                                     <td>

                                      <?php if (strpos($mydeal->deal_init_send_not_methods, 'whatsapp') !== false) {echo '<span class="fab fa-whatsapp" style="color:#3fcf7f;font-size: 16px; "></span>';}?>
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

                                      <a href="#">
                                        <span class="fa fa-trash-alt" style="color: #f93885" onclick="$( '#removealert' ).animate({opacity:1}, 200, function() {});
                                        $('#removeid').val('<?php echo e($mydeal->id); ?>');"></span>
                                      </a>

                                     </td>
                                  </tr>          
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        

                                    
  
                               </tbody>


                           </table>
                           <?php echo e($deal->links()); ?>

                       </div>
                    </div>
                </section> 
            </div>
         
      
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>