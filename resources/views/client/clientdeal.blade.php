@extends('header.header')

@section('content')
     <div class="col-xs-12 effect-content"  style=" overflow: hidden;">
 
            <div class="panel" >
         
               
                <section >
     
                    <header class="panel-heading text-right"  style="padding: 5px 6px;">
                        
                        <div class="col-xs-5" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">صفحة تفاصيل العميل</span>
                        </div>
                        <div class="col-xs-7" style="direction: unset;text-align: left;padding: 3px 7px;">

                          <a href="/client/{{$client['id']}}/edit" style="padding: 3px 7px;">
                            <span class="fa fa-edit" style="color: #13c4a5"></span>
                          </a>

                          <a href="#">
                            <span class="fa fa-envelope" style="color: #13c4a5;"
                            onclick="
                            $('#message_id_form').val('{{$client['id']}}');
                            $('#message_type_form').val('client');
                            $('.message_panel').animate({opacity:1},300,function(){
                              $('.message_panel textarea').css('border','1px solid #13c4a5');
                            });"></span>
                          </a>

                          





                        </div>
           
                    </header>
                    <div class="panel-body" style="padding-top: 0px;">
                      <div class="col-xs-12 " style="background: #fff;padding: 10px 5px; ">
                         <div class="panel panel-primary " style="padding: 0px;    border: 1px solid transparent;">
                        
                          <div class="panel-footer  row  " style=" background: #fff;border:none!important;padding : 0px; ">
                          <div class="col-xs-12 col-md-7 col-lg-8  "> <h6 style="color: #444;font-family: 'Cairo';"><span class="fa fa-user" style="padding: 0px 5px;color: #13c4a5"></span>  معلومات العميل  </h6>
                              <div style="height: 1px; background: #13c4a5;"></div>
                              <div class="col-xs-10" style="padding: 20px 5px;">


                                <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                   الاسم
                                  </div>
                                  <div class="col-xs-9 " style="padding: 5px 10px;">
                                    {{ $client['name'] }}
                                  </div>
                                </div>
                                <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                   البريد الالكتروني
                                  </div>
                                  <div class="col-xs-9 " style="padding: 5px 10px;">
                                    {{ $client['email'] }}
                                  </div>
                                </div>
                                <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                  رقم الهاتف
                                  </div>
                                  <div class="col-xs-9 " style="padding: 5px 10px;">
                                   {{ $client['phone'] }}
                                  </div>
                                </div>
                                <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                  اشعار تنبية
                                  </div>
                                  <div class="col-xs-9 " style="padding: 5px 10px;">
                                    @if($client['send_not']=='on')
                                    <span class="fa fa-check" style="color: green"></span>
                                    @endif
                                    @if($client['send_not']!='on')
                                    <span class="fa fa-times" style="color: red"></span> 
                                    @endif

                                    
                                  </div>
                                </div>
                               <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                  عبر
                                  </div>
                                  <div class="col-xs-9 " style="padding: 5px 10px;">

                                    <?php if (strpos($client['send_not_methods'] , 'whatsapp') !== false) {echo '<span class="fab fa-whatsapp" style="color:#3fcf7f;font-size: 16px; "></span>';}?>

                                      <?php    if (strpos($client['send_not_methods'] , 'email') !== false) {echo '-<span class="far fa-envelope" style="color:#3fcf7f;font-size: 16px; "></span>';}?>

                                      <?php   if (strpos($client['send_not_methods'], 'sms') !== false) {echo '-<span class="fas fa-mobile-alt" style="color:#3fcf7f;font-size: 16px; "></span>';}?> 


                                  </div>
                                </div>  
                                <div class="col-xs-12" style="padding: 0px;">
                                  <div class="col-xs-3 text-left"  style="padding: 5px 0px;font-size: 13px; ">
                                  كل
                                  </div>
                                  <div class="col-xs-9 " style="padding: 5px 10px;">
                                    {{ $client['send_not_period'] }}
                                  </div>
                                </div>

     
                              </div>   
                            </div>



                            <?php $account= \App\Http\Controllers\MessageController::calc_account_deal($client['id']); ?>
                            <div class="col-xs-12 col-md-5 col-lg-4  ">
                              <h6 style="color: #444;"><span class="fas fa-info-circle" style="padding: 0px 5px;color: #13c4a5"></span>دفتر الحساب </h6>
                              <div style="height: 1px; background: #13c4a5;"></div>
                              <div class="col-xs-12" style="padding: 20px 5px 0px;">
                                <div class="col-xs-2" style="    padding-top: 24px;">
                                  <div   style="padding: 15px 0px 0px; background: rgb(51, 51, 51); height: 50px;border-radius: 10px;max-width: 29px;"><span style="transform: rotate(270deg); display: inline-block; padding: 0px;color: #fff;position: relative;left: -1px;">خصم</span></div>
                                </div>

                                <div class="col-xs-10">
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['RS_P'] }}</span>
                                      <br>
                                     ر-س
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['YER_P'] }}</span>
                                      <br>
                                     ر-ي
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['RO_P'] }}</span>
                                      <br>
                                     ر-ع
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['USD_P'] }}</span>
                                      <br>
                                     دولار
                                    </div>
                                  </div>

                                 

                                </div>

                                 <div class="col-xs-12">
                                    <hr>
                                  </div>


                              </div>

                              <div class="col-xs-12" style="padding: 0px 5px;">
                                <div class="col-xs-2" style="    padding-top: 24px;">
                                  <div   style="padding: 15px 0px 0px; background: rgb(51, 51, 51); height: 50px;border-radius: 10px;max-width: 29px;"><span style="transform: rotate(270deg); display: inline-block; padding: 0px;color: #fff;position: relative;left: -5px;">قيد</span></div>
                                </div>

                                <div class="col-xs-10">
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['RS_B'] }}</span>
                                      <br>
                                     ر-س
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['YER_B'] }}</span>
                                      <br>
                                     ر-ي
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['RO_B'] }}</span>
                                      <br>
                                     ر-ع
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px;border-radius: 8px;box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;">
                                      <span style="font-size: 25px;color: #14cc66">{{ $account['USD_B'] }}</span>
                                      <br>
                                     دولار
                                    </div>
                                  </div>

                                 

                                </div>

                                 <div class="col-xs-12">
                                    <hr>
                                  </div>


                              </div>













                              <div class="col-xs-12" style="padding: 0px 5px;">
                                <div class="col-xs-2" style="    padding-top: 24px;">
                                  <div   style="padding: 15px 0px 0px; background: rgb(51, 51, 51); height: 50px;border-radius: 10px;max-width: 29px;"><span style="transform: rotate(270deg); display: inline-block; padding: 0px;color: #fff;position: relative;left: -5px;">باق</span></div>
                                </div>

                                <div class="col-xs-10">
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px; box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden; 
                                    <?php if ($account['RS_B']-$account['RS_P']==0)echo "background: #505050";else echo "background: #2381c6"; ?>
                                    

                                     ;color: #fff">
                                      <span style="font-size: 25px;color: #fff">{{ $account['RS_B']-$account['RS_P'] }}</span>
                                      <br>
                                     ر-س
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px; box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;
                                    <?php if ($account['YER_B']-$account['YER_P']==0)echo "background: #505050";else echo "background: #2381c6"; ?>
                                    ;color: #fff">
                                      <span style="font-size: 25px;color: #fff">{{ $account['YER_B']-$account['YER_P'] }}</span>
                                      <br>
                                     ر-ي
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px; box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden;   <?php if ($account['RO_B']-$account['RO_P']==0)echo "background:#505050";else echo "background:#2381c6"; ?>;color: #fff">
                                      <span style="font-size: 25px;color: #fff">{{ $account['RO_B']-$account['RO_P'] }}</span>
                                      <br>
                                     ر-ع
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="col-xs-12 text-center" style="padding: 0px; box-shadow: 0px 0px 9px #bbb;padding: 20px 0px ;font-size: 13px;overflow: hidden; <?php if ($account['USD_B']-$account['USD_P']==0)echo "background:#505050";else echo "background:#2381c6"; ?>;color: #fff">
                                      <span style="font-size: 25px;color: #fff">{{ $account['USD_B']-$account['USD_P'] }}</span>
                                      <br>
                                     دولار
                                    </div>
                                  </div>

                                 

                                </div>

                                 <div class="col-xs-12">
                                    <hr>
                                  </div>


                              </div>






















 
                             </div>

 

                             <div class="col-xs-12  "> <h6 style="color: #444;font-family: 'Cairo';"><span class="fa fa-user" style="padding: 0px 5px;color: #13c4a5"></span>  تفاصيل الحساب </h6>
                              <div style="height: 1px; background: #13c4a5;"></div>
                              <div class="col-xs-12" style="padding: 0px 0px 20px;">

                                <table class="table" >
                                  
                                    <tr style="background: #f2f8fe ">
                                      <td>كود</td>
                                      <td>نوع المعاملة</td>
                                      <td>المبلغ</td>
                                      <td>العملة</td>
                                      <td>التاريخ</td>
                                      <td>اشعار الانشاء</td>
                                      <td>وذلك عن</td>

                                      <td>عملية</td>

                                    </tr>
                                    @foreach($deal as $mydeal)
                                    <tr>
                                      <td>{{ $mydeal->id }}</td>
                                      <td style="<?php if($mydeal->deal_borrow_payback=='borrow')echo "background:#5191d1"; else echo   "background:#3fcf7f";?>;color: #fff">
                                        <?php if($mydeal->deal_borrow_payback=='borrow')echo "قيد";else echo "خصم"; ?>
                                         

                                      </td>
                                      <td>{{ $mydeal->deal_mount }}</td>
                                      <td> 
                                         <?php if($mydeal->deal_currency=='RS')echo "ريال سعودي"; ?> 
                                         <?php if($mydeal->deal_currency=='RO')echo "ريال عماني"; ?> 
                                            <?php if($mydeal->deal_currency=='YER')echo "ريال يمني"; ?> 
                                              <?php if($mydeal->deal_currency=='USD')echo "دولار"; ?> 

                                      </td>
                                      <td>{{ $mydeal->created_at }}</td>
                                      <td>

                                        

                                        <?php if (strpos($mydeal->deal_init_send_not_methods , 'whatsapp') !== false) {echo '<span class="fab fa-whatsapp" style="color:#3fcf7f;font-size: 16px; "></span>';}?>

                                      <?php    if (strpos($mydeal->deal_init_send_not_methods , 'email') !== false) {echo '-<span class="far fa-envelope" style="color:#3fcf7f;font-size: 16px; "></span>';}?>

                                      <?php   if (strpos($mydeal->deal_init_send_not_methods , 'sms') !== false) {echo '-<span class="fas fa-mobile-alt" style="color:#3fcf7f;font-size: 16px; "></span>';}?>



                                      </td>
                                      <td>{{ $mydeal->for }}</td>

                                      <td>
                                        <a href="/deal/{{$mydeal->id}}/edit">
                                          <span class="fa fa-edit" style="color: #13c4a5"></span>
                                        </a>
                                      </td>


                                      
                                    </tr>
                                    @endforeach

                           
                                </table>
                              </div>   
                            </div>






















                        <div>
                      </div>
                    </div>
                   </div>
                  </div>          
                    </div>
                </section> 
            </div>
         
      
     </div>
@endsection