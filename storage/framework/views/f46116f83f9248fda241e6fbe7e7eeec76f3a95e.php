<?php $__env->startSection('content'); ?>
     <div class="col-xs-12 effect-content"  >

            <div class="panel " >
                <section >
                    <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-8" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">عرض كافة الموظف</span>  
                            <form method="POST" action="/emp/destroy" style="display: inline-block;margin: 0px" id="removeempform">
                              <?php echo e(csrf_field()); ?>

                              <input type="hidden" name="id" value="" id="removeid">
                              
                            <span class="hidden-sm" style="padding: 3px;display: inline-block; border:1px solid #13c4a5;background: #f2fffd;opacity: 0;" id="removealert">حذف ؟
                              <span  style="padding-right: 50px;">

                                  
                                 <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5; color: #13c4a5 ;cursor:pointer" onclick="$('#removeempform').submit();">
                                  <span class="fa fa-check" style="width: 15px;padding: 0px 1px" ></span>
                                 </span>

                                
                              </span>
                              </form>
                              

                            </span>   
                            

                        </div>
                        <div style="padding: 0px" class="col-xs-2 ">
                          <form method="get" action="/emp/search">
                            
                         
                          <div class=" navbar-form pull-left shift" style="padding: 0px;margin: 0px;">
                            <i class="fa fa-search text-muted"></i> <input class="input-sm form-control" placeholder="بحث" type="text" style="border:1px solid #13c4a5!important;background: #f2fffd" name="search">
                          </div>
                           </form>
                          
                        </div>

                        <div class="col-xs-2" style="padding: 0px;direction: ltr!important;">
                            <a style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;" href="/emp/create">
                                <span class="fa fa-plus" style="background: #2381c6;color: #fff;border-radius: 50%;padding: 4px 5px ;cursor: pointer;"> </span>
                            </a>
                        </div>
                         
                    </header>
                    <div class="panel-body" style=" padding: 0px;">
                       <div class="col-xs-12" style="padding: 0px;overflow: auto;">
                           <table class="table" style="padding: 0px;">
                               <thead class="thead" style="background: #f2fffd;padding: 5px ">
                                   <tr>
                                       <td>كود</td>
                                       <td>الاسم</td>
                                       <td>البريد الاكتروني</td>
                                       <td>الهاتف</td>
                                       <td>عملية</td>
                                   </tr>
                               </thead>
                               <tbody>
                                <?php $__currentLoopData = $emp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myemp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                     <td><?php echo e($myemp->id); ?></td>
                                     <td><?php echo e($myemp->name); ?></td>
                                     <td><?php echo e($myemp->email); ?></td>
                                     <td><?php echo e($myemp->phone); ?></td>
                                     <td>
                                      
                                      <a href="/emp/<?php echo e($myemp->id); ?>/edit">
                                        <span class="fa fa-edit" style="color: #13c4a5"></span>
                                      </a>
                                      
                                      <a href="#">
                                        <span class="fa fa-envelope" style="color: #13c4a5;"
                                        onclick="
                                        $('#message_id_form').val('<?php echo e($myemp->id); ?>');
                                        $('#message_type_form').val('emp');
                                        $('.message_panel').animate({opacity:1},300,function(){
                                          $('.message_panel textarea').css('border','1px solid #13c4a5');
                                        });"></span>
                                      </a>

                                      <a href="#">
                                        <span class="fa fa-trash-alt" style="color: #f93885" onclick="$( '#removealert' ).animate({opacity:1}, 200, function() {});
                                        $('#removeid').val('<?php echo e($myemp->id); ?>');"></span>
                                      </a>

                                     </td>
                                  </tr>          
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        

                                    
  
                               </tbody>


                           </table>
                           <?php echo e($emp->links()); ?>

                       </div>
                    </div>
                </section> 
            </div>
         
      
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>