@extends('header.header')
@section('content')




 

  <form method="POST" action="/message" id="send_msg_form">
    {{ csrf_field() }}
          <div class="col-xs-12 effect-content"  >
            <div class="panel " >
         
                      <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-8" style="padding: 0px;">
                          <span class="hidden-sm" style="padding: 3px;display: inline-block;">ارسال رسالة جديدة</span> 
                        </div>
                          <div style="padding: 0px" class="col-xs-2 "></div>
                          <div class="col-xs-2" style="padding: 0px;direction: ltr!important;">
                            <a style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;" onclick="$('#send_msg_form').submit();"  >
                              <span class="fa fa-plus" style="background: #2381c6;color: #fff;border-radius: 5px;padding: 4px 5px ;cursor: pointer;"></span>
                            </a>
                          </div>
                      </header>
                      <div class="panel-body" style=" padding: 0px;">
                        <div class="col-xs-12" style="padding: 40px 10px;">
                            <div class=" col-md-8" style="padding: 0px">
                                  <div class="col-xs-12" style="padding: 5px 0px ">      
                                    <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                     النوع
                                    </div>
                                    <div class="col-xs-7 ">
                                      <select class="form-control"   style="height: 35px;"  id="type" onchange="change_type($(this).val());" name="type">
                                        <option ></option>
                                        <option value="client">عميل</option>
                                        <option value="emp">موظف</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-xs-12" style="padding: 5px 0px ">
                                    <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                        اختيار  
                                    </div>
                                    <div class="col-xs-7 ">
                                       <select class="form-control select2 selectReceiverName" multiple="multiple" data-placeholder="" style="height: 33px;" name="id[]" id="id0">
                                      </select>
                                    </div>
                                    <div class="col-xs-2">
                                      <div     style="padding: 2px 8px 0px;display: inline-block; background: #2381c6;border-radius: 4px!important">
                                        <div   style="padding: 0px;display: inline-block;">
                                          <input type="checkbox" name="forall" style="width: 25px;height: 25px; top: 5px;left: 12px;" value="on"  id="forall" onchange="forall_func()">
                                          </div>
                                          <div   style="color: #fff;font-size: 14px;  display: inline-block;position: relative;top: -8px"  >
                                               الكل
                                              </div>
                                        </div>
                                      </div>
                                  </div> 
                            </div>
                            <div class=" col-md-8" style="padding: 0px;">
                              <div class="col-xs-12" style="padding: 0px;">

                                <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px;  ">
                                  محتوي الرسالة
                                    <br>
                                      <span class=" text-center " style="border-radius: 5px!important;display: inline-block;padding: 5px 0px;background: #2381c6;color: #fff;width: 50px;height: 25px;">
                                        <span class="counter"></span> - 68
                                    
                                  
                                      </span>
                                    </div>
                                    <div class="col-xs-9 " >
                                      <textarea class="form-control " id="msg" style="height: 400px;border-radius: 0px;box-shadow: none;border:1px solid #13c4a5"  name="content" onkeyup="
                                   var x = $('#msg').val();
                                    $('.counter').html(x.length);
                                   "></textarea>
                                    </div>
                                  </div>




                                <div class="col-xs-12" style="padding: 10px 5px;">
                                    <div class="col-xs-3 text-left"  style="color: #333;font-size: 14px; padding: 4px 0px " >
                                    نوع الرسالة
                                    </div> 
                                    <div class="col-xs-7" style="height: 30px;">
                                      
                                      <span  style="position: absolute;right: 55px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: none;border:1px solid  #13c4a5;display: inline-block;background:  #13c4a5 "    >
                                        <input type="checkbox" name="method[]" value="sms" style="bottom: -2px;margin: 0px;position: relative;height: 20px;width: 20px; " id="sms_tag">
                                        <span class="fa fa-mobile-alt" style="padding: 0px ;font-size: 23px;color: #fff" ></span>
                                      </span>
                                      <span  style="position: absolute;right: 120px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: none;border:1px solid  #13c4a5;display: inline-block;background:  #13c4a5" id="whatsapp_tag" >
                                        <input type="checkbox" name="method[]" value="whatsapp" style="bottom: -2px;margin: 0px;position: relative;height: 20px;width: 20px;">
                                        <span class="fab fa-whatsapp" style="padding: 0px ;font-size: 23px;color: #fff"></span>
                                      </span>
                                      <span  style="position: absolute;right: 191px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: none;border:1px solid  #13c4a5;background:  #13c4a5" id="email_tag">
                                        <input type="checkbox" name="method[]" value="email" style="bottom: -2px;margin: 0px;position: relative;height: 20px;width: 20px;">
                                        <span class="fa fa-envelope" style="padding: 0px;font-size: 23px;color: #fff "></span>
                                      </span> 
                                    </div>
                                 </div>                                         
                              </div>
                            </div>
                         </div>
                      </div>
 
            </div>
          </div>
 
 </form>  






<script >
  function forall_func(argument) {
      if(!$('#id').hasClass('disabled'))
    {
      $('#id').attr('disabled','disabled');
      $('#id').addClass('disabled');
    } 
    else
    {
      $('#id').removeAttr('disabled','disabled');
      $('#id').removeClass('disabled');
    }
  } 
</script>


 
           <script  >
 
           
        function change_type(argument) {
           if(argument=='client')getClients();
           else if (argument=='emp')getEmps();
           else $('.selectReceiverName').empty();
        }


        function getEmps(argument) {
          $.ajax({
            method: "POST",
            url: "/getEmpsMsgs",
            data: {  _token: "<?php echo csrf_token(); ?>" }
          })
            .done(function( msg ) {
             
            $('.selectReceiverName').empty();
              //clients response var
           
              for(var i =0 ; i< msg.item.length ; i++)
               $('.selectReceiverName').append($("<option></option>").attr("value",msg.item[i].id).text(msg.item[i].name)); 

            });
        }


        function getClients(argument) {
          $.ajax({
            method: "POST",
            url: "/getClientsMsgs",
            data: {  _token: " <?php echo csrf_token(); ?>" }
          })
            .done(function( msg ) {
           
            $('.selectReceiverName').empty();
              //clients response var
               
              for(var i =0 ; i< msg.item.length ; i++)
               $('.selectReceiverName').append($(" <option></option>").attr("value",msg.item[i].id).text(msg.item[i].name)); 

            });
          }
      
          </script>






@endsection