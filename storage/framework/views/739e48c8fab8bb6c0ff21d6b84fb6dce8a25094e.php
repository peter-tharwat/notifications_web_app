<?php $__env->startSection('content'); ?>
     <div class="col-xs-12 effect-content"  style=" overflow: hidden;">
 
            <div class="panel" >
        
              <form method="post" action="/client" id="createclientform">
                <?php echo e(csrf_field()); ?>

                <section >
                  <header class="panel-heading text-right"  style="padding: 5px 6px;">
                      
                      <div class="col-xs-5" style="padding: 0px;">
                          <span class="hidden-sm" style="padding: 3px;display: inline-block;">اضافة عميل جديد</span>
                      </div>
                      <div class="col-xs-7" style="padding: 0px;direction: ltr!important;">
                        


                          <a style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;background: transparent;border:none;box-shadow: none;" href="/client" class="btn ">
                              <span class="fa fa-times" style="background: #ff5f5f;color: #fff;border-radius: 0px;padding: 4px 6px ;cursor: pointer;" > </span>
                          </a>

                          <span style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;" >
                            <span style="background: #13c4a5;color: #fff;border-radius: 0px;padding:1px 7px; ;cursor: pointer;float: left;" class="btn btn-success" onclick="$('#createclientform').submit();" >
                              <span class="fa fa-check"  style=""   > </span> حفظ 

                            </span>
                              
                          </span>


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
                  عميل نشط
                </div>
                <div class="col-xs-9 ">
                  <input type="checkbox" name="active"   style="width: 25px;height: 25px;" class="js-switch">
                </div>

              </div>
              <div class="col-xs-12" style="padding: 6px;">
                <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                  إسم العميل
                </div>
                <div class="col-xs-9">
                  <input type="" name="name" class="form-control">
                </div>

              </div>
              <div class="col-xs-12" style="padding: 6px;">
                <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                   رقم التعريف الضريبي 
                </div>
                <div class="col-xs-9">
                  <input type="" name="taxid" class="form-control">
                </div>

              </div>




              <div class="col-xs-12" style="padding: 6px;">
                <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                   الرصيد الافتتاحي
                </div>
                <div class="col-xs-9">
                  <input type="" name="startbalance" class="form-control" style="max-width: 40%;">
                </div>

              </div> 
             
               

             <div class="col-xs-12"   style="padding: 10px 5px;">

              <div class="col-xs-3 text-left"  style="color: #333;font-size: 14px; padding: 8px 0px "  >
                ارسال اشعار
              </div> 
              <div class="col-xs-7" >


                <div class="form-group">
                  <!-- <input class="form-control" placeholder="إلي :"> -->
                   
                   <div style="position: relative;padding: 5px;">
                    <input type="checkbox" name="send_not" style="width: 60px;height: 30px; position: absolute;z-index: 10;opacity: 0"
                     onchange="
                     if($(this).is(':checked'))

                     {
                      $('.statusOfCkeck div').css('right','27px');
                      $('.statusOfCkeck').css('background','#28a745');

                      $('.addAgancy').slideDown('slow'); 

                    
                     }
                     else 
                     {
                      
                      $('.statusOfCkeck').css('background','#d63444');
                      $('.statusOfCkeck div').css('right','5px');
                      $('.addAgancy').slideUp('slow');
                     
                     }
 
                     " 
                   value="on" class="isagancy"
                     >
                     <div style="position: relative;display: inline-block;top:-19px;">
                        <div style="/* background: */;background: #d63444;position: absolute;width: 60px; height: 30px;z-index: 9;border-radius: 5px!important;padding: 2px;transition: all .4s ease-in-out; " class="statusOfCkeck">
                        <div style="display: inline-block;width: 25px;height: 26px;background: #fff;border-radius: 5px!important;transition: all .4s ease-in-out;position: relative;right: 5px" >   
                        </div>
                      </div>
                     </div>  
                   </div>
                </div>
              </div>
           </div>
           <div class="col-xs-12 addAgancy" style="padding: 0px;display: none;">
             <div class="col-xs-12 " style="padding: 10px 5px;"> 
              <div class="col-xs-12" style="padding: 10px 5px;">
                <div class="col-xs-3 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
                نوع الاشعار
                </div> 
                <div class="col-xs-7" style="height: 30px;">
                  
                  <span  style="position: absolute;right: 55px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;border:1px solid  #13c4a5;display: inline-block;background:  #13c4a5 " for="sms_tag" id="sms_tag">
                    <input type="checkbox" name="send_not_methods[]" value="sms" style="bottom: -2px;margin: 0px;position: relative;height: 20px;width: 20px; " id="sms_tag">
                    <span class="fa fa-mobile-alt" style="padding: 0px ;font-size: 23px;color: #fff" ></span>
                  </span>
                  <span  style="position: absolute;right: 120px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;border:1px solid  #13c4a5;display: inline-block;background:  #13c4a5" id="whatsapp_tag" >
                    <input type="checkbox" name="send_not_methods[]" value="whatsapp" style="bottom: -2px;margin: 0px;position: relative;height: 20px;width: 20px;">
                    <span class="fab fa-whatsapp" style="padding: 0px ;font-size: 23px;color: #fff"></span>
                  </span>
                  <span  style="position: absolute;right: 191px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;border:1px solid  #13c4a5;background:  #13c4a5" id="email_tag">
                    <input type="checkbox" name="send_not_methods[]" value="email" style="bottom: -2px;margin: 0px;position: relative;height: 20px;width: 20px;">
                    <span class="fa fa-envelope" style="padding: 0px;font-size: 23px;color: #fff "></span>
                  </span> 
                </div>
             </div>
             <div class="col-xs-12" style="padding: 10px 5px;">
                <div class="col-xs-3 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
                 كل
                </div> 
                <div class="col-xs-5">
                 <select class="form-control select2 dealstatus" style="width: 100%;" name="send_not_period">  
                  <option value="+ 1 days">يوم</option>
                  <option value="+ 2 days">يومين</option>
                  <option value="+ 3 days">3 ايام</option>
                  <option value="+ 7 days">اسبوع</option>
                  <option value="+ 14 days">اسبوعين</option>
                  <option value="+ 21 days">3 اسابيع</option>
                  <option value="+ 1 months">شهر</option>
                  <option value="+ 2 months">شهرين</option>
                  <option value="+ 3 months">3 اشهر</option>
                  </select>
                </div>
             </div>
 
             </div> 
           </div>
 
            </div>   
          </div>
          <div class="col-xs-12 col-sm-6  animated " style="min-height: 475px;">
            <h6 style="color: #444;"><span class="fa fa-file" style="padding: 0px 5px;color: #13c4a5"></span>  معلومات عن العميل</h6>
            <div style="height: 1px; background: #13c4a5;"></div>
            <div class="col-xs-10" style="padding: 20px 5px;">


              
              <div class="col-xs-12" style="padding: 6px;">
                <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                  جهة الاتصال
                </div>
                <div class="col-xs-9">
                  <input type="" name="contacttype" class="form-control">
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
                  <input type="" name="phone" class="form-control">
                </div>

              </div>

              <div class="col-xs-12" style="padding: 6px;">
                <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                البريد الالكتروني
                </div>
                <div class="col-xs-9">
                  <input type="" name="email" class="form-control">
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
                  <input type="" name="website" class="form-control">
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
                  <input type="" name="facebook" class="form-control">
                </div>

              </div>


              
              <div class="col-xs-12" style="padding: 6px;">
                <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                تويتر
                </div>
                <div class="col-xs-9">
                  <input type="" name="twitter" class="form-control">
                </div>

              </div>
              <div class="col-xs-12" style="padding: 6px;">
                <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
              جوجل بلس
                </div>
                <div class="col-xs-9">
                  <input type="" name="google" class="form-control">
                </div>

              </div>


              
              <div class="col-xs-12" style="padding: 6px;">
                <div class="col-xs-3 text-left"  style="padding: 5px 0px; font-size: 13px;">
                 لينكد ان
                </div>
                <div class="col-xs-9">
                  <input type="" name="linkedin" class="form-control">
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
                     <textarea style="box-shadow: none;border-radius: 0px;height: 200px;" class="form-control">
                         
                     </textarea>
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
            </div>
         
      
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>