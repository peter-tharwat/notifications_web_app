<?php $__env->startSection('content'); ?>
     <div class="col-xs-12 effect-content"  style=" overflow: hidden;">
 
            <div class="panel" >
          <?php $__currentLoopData = $emp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myemp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form method="POST" action="/emp/update/<?php echo e($myemp->id); ?>"  id="empupdateform">
                <section >
                  <?php echo e(csrf_field()); ?>

                    <header class="panel-heading text-right"  style="padding: 5px 6px;">
                        
                        <div class="col-xs-5" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">تعديل موظف </span>
                        </div>
                        <div class="col-xs-7" style="padding: 0px;direction: ltr!important;">
                       



                            <a style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;background: transparent;border:none;box-shadow: none;"  href="/emp" class="btn ">
                                <span class="fa fa-times" style="background: #ff5f5f;color: #fff;border-radius: 0px;padding: 4px 6px ;cursor: pointer;" > </span>
                            </a>
                            <a style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;" >
                              <span style="background: #13c4a5;color: #fff;border-radius: 0px;padding:1px 7px; ;cursor: pointer;float: left;" class="btn btn-success" onclick="$('#empupdateform').submit();"   >
                                <span class="fa fa-check"  style=""   > </span> حفظ 
                              </span>    
                            </a>
                        </div>
                    </header>
                    <div class="panel-body" style="padding-top: 0px;">
                  <div class="col-xs-12 " style="background: #fff;padding: 10px 5px; ">
                     <div class="panel panel-primary " style="padding: 0px;    border: 1px solid transparent;">
                    
                      <div class="panel-footer  row  " style=" background: #fff;border:none!important;padding : 0px; ">
                        <div class="col-xs-12 col-sm-6  animated "> <h6 style="color: #444;font-family: 'Cairo';"><span class="fa fa-user" style="padding: 0px 5px;color: #13c4a5"></span>  معلومات الاتصال الاساسية</h6>
                          <div style="height: 1px; background: #13c4a5;"></div>
                          <div class="col-xs-10" style="padding: 20px 5px;">


                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                موظف نشط
                              </div>
                              <div class="col-xs-9 ">
                                <input type="checkbox" name="active"   style="width: 25px;height: 25px;" class="js-switch">
                              </div>

                            </div>
                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;" >
                                إسم الموظف
                              </div>
                              <div class="col-xs-9">
                                <input type="" name="name" class="form-control" value="<?php echo e($myemp->name); ?>">
                              </div>

                            </div>
                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                                 رقم التعريف الضريبي 
                              </div>
                              <div class="col-xs-9">
                                <input type="" name="taxid" class="form-control" value="<?php echo e($myemp->taxid); ?>">
                              </div>

                            </div>

                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                                 الرصيد الافتتاحي
                              </div>
                              <div class="col-xs-9">
                                <input type="" name="startbalance" class="form-control" style="max-width: 40%;" value="<?php echo e($myemp->startbalance); ?>">
                              </div>

                            </div>
                          </div>   
                        </div>
                        <div class="col-xs-12 col-sm-6  animated ">
                          <h6 style="color: #444;"><span class="fa fa-file" style="padding: 0px 5px;color: #13c4a5"></span>  معلومات عن الموظف</h6>
                          <div style="height: 1px; background: #13c4a5;"></div>
                          <div class="col-xs-10" style="padding: 20px 5px;">


                            
                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                                جهة الاتصال
                              </div>
                              <div class="col-xs-9">
                                <input type="" name="contacttype" class="form-control" value="<?php echo e($myemp->contacttype); ?>">
                              </div>

                            </div>
                            <div class="col-xs-12">
                              <hr>
                            </div>
                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                                رقم الهاتف
                              </div>
                              <div class="col-xs-9">
                                <input type="" name="phone" class="form-control" value="<?php echo e($myemp->phone); ?>">
                              </div>

                            </div>

                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              البريد الالكتروني
                              </div>
                              <div class="col-xs-9">
                                <input type="" name="email" class="form-control" value="<?php echo e($myemp->email); ?>">
                              </div>

                            </div>
                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                             كلمة المرور
                              </div>
                              <div class="col-xs-9">
                                <input type="" name="password" class="form-control" value="<?php echo e($myemp->password); ?>">
                              </div>

                            </div>


                              <div class="col-xs-12">
                              <hr>
                            </div>

                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                               الموقع الاكتروني
                              </div>
                              <div class="col-xs-9">
                                <input type="" name="website" class="form-control" value="<?php echo e($myemp->website); ?>">
                              </div>

                            </div>






                          </div>

                          
                        
                          
                        </div>

                        <div class="col-xs-12 col-sm-6  animated ">
                          <h6 style="color: #444;"><span class="fas fa-mouse-pointer" style="padding: 0px 5px;color: #13c4a5"></span>  الشبكات الاجتماعية</h6>
                          <div style="height: 1px; background: #13c4a5;"></div>
                          <div class="col-xs-10" style="padding: 20px 5px;">


                            
                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              فيس بوك
                              </div>
                              <div class="col-xs-9">
                                <input type="" name="facebook" class="form-control" value="<?php echo e($myemp->facebook); ?>">
                              </div>

                            </div>


                            
                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                              تويتر
                              </div>
                              <div class="col-xs-9">
                                <input type="" name="twitter" class="form-control" value="<?php echo e($myemp->twitter); ?>">
                              </div>

                            </div>
                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                            جوجل بلس
                              </div>
                              <div class="col-xs-9">
                                <input type="" name="google" class="form-control" value="<?php echo e($myemp->google); ?>">
                              </div>

                            </div>


                            
                            <div class="col-xs-12" style="padding: 6px;">
                              <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                               لينكد ان
                              </div>
                              <div class="col-xs-9">
                                <input type="" name="linkedin" class="form-control" value="<?php echo e($myemp->linkedin); ?>">
                              </div>

                            </div>

 
                          </div>
                         </div>



                  <div class="col-xs-12 col-sm-6  ">
                    <h6 style="color: #444;"><span class="fas fa-info-circle" style="padding: 0px 5px;color: #13c4a5"></span> إضافة تفاصيل </h6>
                    <div style="height: 1px; background: #13c4a5;"></div>
                    <div class="col-xs-12" style="padding: 20px 5px;">



                  <section class="content">
                    <div class="row" style="padding: 5px 4%">
                       <textarea style="box-shadow: none;border-radius: 0px;height: 200px;" class="form-control" name="details"><?php echo e($myemp->name); ?></textarea>
                    </div>
                  </section>

                  </div>
               </div>
              <div>
            </div>
          </div>
         </div>
        </div>

 


             
                    </div>
                </section> 


              </form>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




            </div>
         
      
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>