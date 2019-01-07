<?php $__env->startSection('content'); ?>


     <div class="col-xs-12 effect-content"  style=" overflow: hidden;">
  <?php $__currentLoopData = $deal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mydeal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="/deal/update/<?php echo e($mydeal->id); ?> " method="POST"  >
    <?php echo e(csrf_field()); ?>



     <div class="col-xs-12">
       <div class="col-xs-12" style="padding: 10px 5px ">
         <div style="padding: 10px 0px ;">

          <div class="panel panel-default  " style="background: #f7f8f9;border:1px solid #f5f5f5;background: #fff;border-radius: 0px;border:1px solid #13c4a5">

  <div class="panel-heading row" style="background: #f7f8f9;border-bottom: 1px solid #f2f2f2;padding: 5px 12px 4px 12px ;margin: 0px;border-bottom: 1px solid #13c4a5">
    <div class="col-xs-6" style="padding: 4px">
            تعديل معاملة

          </div>
          <div class="col-xs-4 text-left" style="padding: 0px;height: 28px;">

 
            <span  style="position: absolute;left: 55px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;border:1px solid  #13c4a5;display: inline-block;background:  #13c4a5 " for="sms_tag" id="sms_tag">
                <input type="checkbox" name="deal_init_send_not_methods[]" value="sms" style="bottom: -2px;margin: 0px;position: relative;height: 20px;width: 20px; " id="sms_tag" <?php if (strpos($mydeal->deal_init_send_not_methods, 'sms') !== false) {echo 'checked';}?>>
                <span class="fa fa-mobile-alt" style="padding: 0px ;font-size: 23px;color: #fff" ></span>
              </span>
              <span  style="position: absolute;left: 120px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;border:1px solid  #13c4a5;display: inline-block;background:  #13c4a5" id="whatsapp_tag" >
                <input type="checkbox" name="deal_init_send_not_methods[]" value="whatsapp" style="bottom: -2px;margin: 0px;position: relative;height: 20px;width: 20px;" <?php if (strpos($mydeal->deal_init_send_not_methods, 'whatsapp') !== false) {echo 'checked';}?> >
                <span class="fab fa-whatsapp" style="padding: 0px ;font-size: 23px;color: #fff"></span>
              </span>
              <span  style="position: absolute;left: 191px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;border:1px solid  #13c4a5;background:  #13c4a5" id="email_tag">
                <input type="checkbox" name="deal_init_send_not_methods[]" value="email" style="bottom: -2px;margin: 0px;position: relative;height: 20px;width: 20px;" <?php if (strpos($mydeal->deal_init_send_not_methods, 'email') !== false) {echo 'checked';}?> >
                <span class="fa fa-envelope" style="padding: 0px;font-size: 23px;color: #fff "></span>
              </span>

           


 



          </div>
          <div class="col-xs-2 text-left" style="padding: 0px;" >
            <a href="/deal">
              <span class="btn btn-danger  " style="padding: 3px 10px ;border-radius: 0px ;background:  #ff0b6c;border:1px solid red;margin: 0px 3px;">   <span class="fa fa-times"></span></span>
            </a>
               <button class="btn btn-success  " style="padding: 3px 8px ;border-radius: 0px;background: transparent;border:1px solid #366798;margin: 0px 2px;color: #333">حفظ <span class="fa fa-check"></span></button>

          </div>
</div>
  <div class="panel-body text-right" style="padding: 50px 0px 40px ">
        <div class="col-xs-6">
            
 
            
           <div class="col-xs-12">
             <hr>
           </div>
           <div class="col-xs-12" style="padding: 10px 5px;">
              <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
               نوع المعاملة
              </div> 
              <div class="col-xs-7">
               <select class="form-control select2 dealstatus" style="width: 100%;" name="deal_borrow_payback">  
                <option value="borrow" <?php if($mydeal->deal_borrow_payback=='borrow')echo "selected"; ?>>قيد</option>
                <option value="payback" <?php if($mydeal->deal_borrow_payback=='payback')echo "selected"; ?>>خصم</option>
                </select>
              </div>
           </div>


           <div class="col-xs-12" style="padding: 10px 5px;">
              <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
              المبلغ
              </div> 
              <div class="col-xs-3">
                
                <input type="" name="mount" class="form-control" style="width: 100%;" value="<?php echo e($mydeal->mount); ?>">
              </div>

              <div class="col-xs-4">
               <select class="form-control select2 dealtype" style="width: 100%;padding: 0px;" name="currency"   > 
                <option value="RS" <?php if($mydeal->currency=='RS')echo "selected"; ?>>ريال سعودي</option>
                <option value="RO" <?php if($mydeal->currency=='RO')echo "selected"; ?>>ريال عماني</option>
                <option value="YER" <?php if($mydeal->currency=='YER')echo "selected"; ?>>ريال يمني</option>
                <option value="USD" <?php if($mydeal->currency=='USD')echo "selected"; ?>>دولار</option>
              </select>
              </div>
           </div>

           <div class="col-xs-12" style="padding: 10px 5px;">
              <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
              مقابل
              </div> 
              <div class="col-xs-7">
                <input type="" name="for" class="form-control" style="width: 100%;"  value="<?php echo e($mydeal->for); ?>">
              </div>
            </div>

           

           <div class="col-xs-12">
             <hr>
           </div>




           




          
         </div>



         <div class="col-xs-6" style="padding: 10px 10px;">


        
           

  
           <div class="col-xs-12" style="padding: 10px 5px;">
              <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 15px 0px " >
                ملاحظة للعميل
              </div> 
              <div class="col-xs-7" style="padding: 7px 12px 0px 14px;">
                <div class="col-xs-12" style="margin-top: 10px;padding: 0px;">
                  <textarea style="border:1px solid #ced4da;border-radius: 0px;min-height: 210px;" class="form-control" placeholder="للعميل" id="note" name="detailsforclient"><?php echo e($mydeal->deal_details_for_client); ?></textarea>
                </div> 
              </div>
            </div>


            <div class="col-xs-12" style="padding: 10px 5px;">
              <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 15px 0px " >
                ملاحظة للموظف
              </div> 
              <div class="col-xs-7" style="padding: 7px 12px 0px 14px;">
                <div class="col-xs-12" style="margin-top: 10px;padding: 0px;">
                  <textarea style="border:1px solid #ced4da;border-radius: 0px;min-height: 210px;" class="form-control" placeholder="للموظف" id="note" name="detailsforemp"><?php echo e($mydeal->deal_details_for_emp); ?></textarea>
                </div> 
              </div>
            </div>




         </div>
        </div>
       </div>
     </div>
    </div>
  </div>
</div>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>