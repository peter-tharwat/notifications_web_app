@extends('header.header')

@section('content')


     <div class="col-xs-12 effect-content"  style=" overflow: hidden;">
 
            <form action="/deal" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

     <div class="col-xs-12">
       <div class="col-xs-12" style="padding: 10px 5px ">
         <div style="padding: 10px 0px ;">

          <div class="panel panel-default  " style="background: #f7f8f9;border:1px solid #f5f5f5;background: #fff;border-radius: 0px;border:1px solid #13c4a5">

  <div class="panel-heading row" style="background: #f7f8f9;border-bottom: 1px solid #f2f2f2;padding: 5px 12px 4px 12px ;margin: 0px;border-bottom: 1px solid #13c4a5">
    <div class="col-xs-6" style="padding: 4px">
             إضافة معاملة  جديدة 

          </div>
          <div class="col-xs-4 text-left" style="padding: 0px;height: 28px;">

 
            <span  style="position: absolute;left: 55px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;border:1px solid  #13c4a5;display: inline-block;background:  #13c4a5 " for="sms_tag" id="sms_tag">
                <input type="checkbox" name="deal_init_send_not_methods[]" value="sms" style="bottom: -2px;margin: 0px;position: relative;height: 20px;width: 20px; " id="sms_tag">
                <span class="fa fa-mobile-alt" style="padding: 0px ;font-size: 23px;color: #fff" ></span>
              </span>
              <span  style="position: absolute;left: 120px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;border:1px solid  #13c4a5;display: inline-block;background:  #13c4a5" id="whatsapp_tag" >
                <input type="checkbox" name="deal_init_send_not_methods[]" value="whatsapp" style="bottom: -2px;margin: 0px;position: relative;height: 20px;width: 20px;">
                <span class="fab fa-whatsapp" style="padding: 0px ;font-size: 23px;color: #fff"></span>
              </span>
              <span  style="position: absolute;left: 191px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;border:1px solid  #13c4a5;background:  #13c4a5" id="email_tag">
                <input type="checkbox" name="deal_init_send_not_methods[]" value="email" style="bottom: -2px;margin: 0px;position: relative;height: 20px;width: 20px;">
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
           <div class="col-xs-12" style="padding: 10px 5px;">
              <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
                 العميل
              </div> 
              <div class="col-xs-7">
                  <select class="form-control select2 selectClientName" style="width: 100%;" name="client_id" style="border-radius: 0px!important;">
                    @foreach($client as $myclient)
                      <option value="{{ $myclient->id }}">{{ $myclient->name }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="col-xs-1 " style="padding: 2px;transition: all .5s ease-in-out">
                <span style="padding: 2px 8px;color:#fff;background: #2381c6;cursor: pointer; display: inline-block;transition: all .5s ease-in-out" onclick="
                if(!$('.addclient').hasClass('open'))
                 {
                    $('.addclient').slideDown('slow');$(this).find('span').css('transform','rotate(-45deg)');$(this).css('background','#c00') ;
                    $('.addclient').addClass('open');
                    $('.selectClientName').attr('disabled','on');

                 }

              else
                 {
                  $('.addclient').slideUp('slow');
                  $(this).find('span').css('transform','rotate(0deg)');$(this).css('background','#2381c6') ;
                    $('.addclient').removeClass('open');
                    $('.selectClientName').removeAttr('disabled');

                 }
                
                  ">
                  <span class="fa fa-plus "   style="width: 100%;height: 100%;transition: all .5s ease-in-out;padding: 7px 2px "></span>
                </span>
                
              </div>
           </div>

           <div class="col-xs-12 addclient" style="display: none;">
            <div class="col-xs-12" style="padding: 10px 5px;">
                <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
                  إسم العميل
                </div> 
                <div class="col-xs-5">
                  <input type="" name="newclientname" class="form-control" style="border-radius: 0px ;" >
                </div>
             </div>

             <div class="col-xs-12" style="padding: 10px 5px;">
                <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
                  البريد
                </div> 
                <div class="col-xs-5">
                  <input type="" name="newclientemail" class="form-control" style="border-radius: 0px ;">
                </div>
             </div>

             <div class="col-xs-12" style="padding: 10px 5px;">
                <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
                 رقم الجوال
                </div> 
                <div class="col-xs-5">
                  <input type="" name="newclientphone" class="form-control" style="border-radius: 0px ;" >
                </div>
             </div>

             <div class="col-xs-12"   style="padding: 10px 5px;">

              <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 8px 0px "  >
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
                <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
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
                <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
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
           
            
           <div class="col-xs-12">
             <hr>
           </div>
           <div class="col-xs-12" style="padding: 10px 5px;">
              <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
               نوع المعاملة
              </div> 
              <div class="col-xs-7">
               <select class="form-control select2 dealstatus" style="width: 100%;" name="deal_borrow_payback">  
                <option value="borrow">قيد</option>
                <option value="payback">خصم</option>
                </select>
              </div>
           </div>


           <div class="col-xs-12" style="padding: 10px 5px;">
              <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
              المبلغ
              </div> 
              <div class="col-xs-3">
                
                <input type="" name="mount" class="form-control" style="width: 100%;">
              </div>

              <div class="col-xs-4">
               <select class="form-control select2 dealtype" style="width: 100%;padding: 0px;" name="currency"   > 
                <option value="RS">ريال سعودي</option>
                <option value="RO">ريال عماني</option>
                <option value="YER">ريال يمني</option>
                <option value="USD">دولار</option>
              </select>
              </div>
           </div>

           <div class="col-xs-12" style="padding: 10px 5px;">
              <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
              مقابل
              </div> 
              <div class="col-xs-7">
                <input type="" name="for" class="form-control" style="width: 100%;">
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
                  <textarea style="border:1px solid #ced4da;border-radius: 0px;min-height: 210px;" class="form-control" placeholder="للعميل" id="note" name="detailsforclient"></textarea>
                </div> 
              </div>
            </div>


            <div class="col-xs-12" style="padding: 10px 5px;">
              <div class="col-xs-2 text-left"  style="color: #333;font-size: 14px; padding: 15px 0px " >
                ملاحظة للموظف
              </div> 
              <div class="col-xs-7" style="padding: 7px 12px 0px 14px;">
                <div class="col-xs-12" style="margin-top: 10px;padding: 0px;">
                  <textarea style="border:1px solid #ced4da;border-radius: 0px;min-height: 210px;" class="form-control" placeholder="للموظف" id="note" name="detailsforemp"></textarea>
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
</div>
 
@endsection