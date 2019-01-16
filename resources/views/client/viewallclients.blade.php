@extends('header.header')
@section('content')

 
     <div class="col-xs-12 effect-content"  >

            <div class="panel " >
                <section >
                    <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-12 col-sm-12 col-md-4" style="padding: 0px;">
                            <span   style="padding: 3px;display: inline-block;">عرض كافة العملاء</span>  
                            <form method="POST" action="/client/destroy" style="display: inline-block;margin: 0px" id="removeclientform">
                              {{ csrf_field()}}
                              <input type="hidden" name="id" value="" id="removeid">
                              
                            <span class="hidden-sm" style="padding: 3px;display: inline-block; border:1px solid #13c4a5;background: #ff7373;opacity: 0;color: #fff" id="removealert">حذف ؟
                              <span  style="padding-right: 50px;">

                                 {{-- <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5;margin: 0px 0px; ">
                                <span class="fa fa-times" style="width: 15px;padding: 0px 3px;color: #f93885"></span>
                                </span> --}} 
                                 <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5; color: #13c4a5 ;cursor:pointer" onclick="$('#removeclientform').submit();">
                                  <span class="fa fa-check" style="width: 15px;padding: 0px 1px" ></span>
                                 </span>

                                
                              </span>
                              </form>
                              

                            </span>   
                            

                        </div>


                        <div style="padding: 0px;direction: unset;text-align: center;" class="col-xs-12 col-sm-12 col-md-2">
                         <span class="btn btn-info btn-xs"
                         onclick="
                         $('.has_no_mount').fadeIn('show');
                         $('.has_mount').fadeIn('show');
                         " 
                         >الكل</span>


                         <span class="btn btn-success btn-xs"
                         onclick="
                         $('.has_no_mount').fadeOut(0);
                         $('.has_mount').fadeIn(0);
                         " 
                         > لهم رصيد</span>

                         <span class="btn btn-primary btn-xs"
                         onclick="
                          
                         $('.has_mount').fadeOut(0);
                         $('.has_no_mount').fadeIn(0);
                         " 

                         > ليس لهم رصيد</span>
                        </div>




                        <div style="padding: 0px;direction: unset;text-align: center;" class="col-xs-12 col-sm-12 col-md-2">
                         <span class="btn btn-info btn-xs"
                         onclick="
                         $('.send_not').fadeIn('show');
                         $('.dont_send_not').fadeIn('show');
                         " 
                         >الكل</span>


                         <span class="btn btn-success btn-xs"
                         onclick="
                         
                          $('.dont_send_not').fadeOut(0);
                         $('.send_not').fadeIn(0);
                         " 
                         >يتم ارسال اشعار</span>

                         <span class="btn btn-primary btn-xs"
                         onclick="
                          $('.send_not').fadeOut(0);
                         $('.dont_send_not').fadeIn(0);
                        
                         " 

                         >لا يرسل اشعار</span>
                        </div>



                        <div style="padding: 0px;direction: unset;text-align: center;" class="col-xs-12 col-sm-12 col-md-2 ">
                          <form method="get" action="/client/search">
                          <div class=" navbar-form pull-left shift" style="padding: 0px;margin: 0px;">
                            <i class="fa fa-search text-muted"></i> <input class="input-sm form-control" placeholder="بحث" type="text" style="border:1px solid #13c4a5!important;background: #f2fffd" name="search">
                          </div>
                           </form>
                          
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-2" style="padding: 0px;direction: ltr!important;">
                            <a style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;" href="/client/create">
                                <span class="fa fa-plus" style="background: #2381c6;color: #fff;border-radius: 50%;padding: 4px 5px ;cursor: pointer;"> </span>
                            </a>
                        </div>
                       
                    </header>
                    <div class="panel-body" style=" padding: 0px;">
                       <div class="col-xs-12" style="padding: 0px;overflow: auto;">
                           <table class="table" style="padding: 0px;min-width: 943px">
                               <thead class="thead" style="background: #f2fffd;padding: 5px ">
                                   <tr>
                                       <td>كود</td>
                                       <td>الاسم</td>
                                       <td>البريد الاكتروني</td>
                                       <td>الهاتف</td>


                                       <td style="width: 70px;background: #ffffb9;display: inline-block;text-align: center;">سعودي</td>
                                       <td style="width: 50px;background: #ffffb9;display: inline-block;text-align: center;padding:6px 0px;">يمني</td>
                                       <td style="width: 50px;background: #ffffb9;display: inline-block;text-align: center;padding:6px 0px;">عماني</td>
                                       <td style="width: 50px;background: #ffffb9;display: inline-block;text-align: center;padding:6px 0px;">دولار</td>
                                       <td style="width: 50px;background: #cbffb9;display: inline-block;text-align: center;padding:6px 0px;">اشعار</td>
                                       <td style="width: 70px;background: #51c1d1;display: inline-block;text-align: center;padding:6px 0px;color: #fff">عبر</td>


                                       
                                       <td>عملية</td>
                                   </tr>
                               </thead>
                               <tbody>
                                @foreach($client as $myclient)
                                
                                  <tr class="<?php  if(App\Http\Controllers\MessageController::is_calc_account($myclient->id))echo 'has_mount ';else echo 'has_no_mount '; 

                                    if($myclient->send_not=='on')echo 'send_not '; else echo 'dont_send_not ';

                                  ?>">
                                     <td>{{  $myclient->id }}</td>
                                     <td>
                                      <a href="/client/details/{{ $myclient->id }}">
                                      {{  $myclient->name }}
                                      </a>
                                    </td>
                                     <td>{{  $myclient->email }}</td>
                                     <td>{{  $myclient->phone }}</td>

                                     <?php $account=\app\Http\Controllers\MessageController::calc_account_client($myclient->id) ?>
                                       <td style="width: 70px;background: #ffffb9;display: inline-block;text-align: center;padding:6px 0px;">{{ $account['RS'] }}</td>
                                       <td style="width: 50px;background: #ffffb9;display: inline-block;text-align: center;padding:6px 0px;">{{ $account['YER'] }}</td>
                                       <td style="width: 50px;background: #ffffb9;display: inline-block;text-align: center;padding:6px 0px;">{{ $account['RO'] }}</td>
                                       <td style="width: 50px;background: #ffffb9;display: inline-block;text-align: center;padding:6px 0px;">{{ $account['USD'] }}</td>
                                        <td style="width: 50px;background: #cbffb9;display: inline-block;text-align: center;padding:6px 0px;">

                                          @if($myclient->send_not=='on')
                                          <span class="fa fa-check" style="color: green"></span>
                                          @endif
                                          @if($myclient->send_not!='on')
                                          <span class="fa fa-times" style="color: red"></span> 
                                          @endif

                                        </td>


                                        <td style="width: 70px;background: #51c1d1;display: inline-block;text-align: center;padding:6px 0px;height: 33px;color: #fff">

                                         <?php if (strpos($myclient->send_not_methods , 'whatsapp') !== false) {echo '<span class="fab fa-whatsapp" style="color:#fff;font-size: 16px; "></span>';}?>

                                      <?php    if (strpos($myclient->send_not_methods , 'email') !== false) {echo '-<span class="far fa-envelope" style="color:#fff;font-size: 16px; "></span>';}?>

                                      <?php   if (strpos($myclient->send_not_methods, 'sms') !== false) {echo '-<span class="fas fa-mobile-alt" style="color:#fff;font-size: 16px; "></span>';}?> 


                                        </td>






                                     <td>
                                      
                                      <a href="/client/{{$myclient->id}}/edit">
                                        <span class="fa fa-edit" style="color: #13c4a5"></span>
                                      </a>
                                      <a href="/client/details/{{ $myclient->id }}">
                                        <span class="fa fa-file-invoice" style="color: #13c4a5;"></span>
                                      </a>

                                      <a href="#">
                                        <span class="fa fa-envelope" style="color: #13c4a5;"
                                        onclick="
                                        $('#message_id_form').val('{{$myclient->id}}');
                                        $('#message_type_form').val('client');
                                        $('.message_panel').animate({opacity:1},300,function(){
                                          $('.message_panel textarea').css('border','1px solid #13c4a5');
                                        });"></span>
                                      </a>

                                      


                                      <a href="#">
                                        <span class="fa fa-trash-alt" style="color: #f93885" onclick="$( '#removealert' ).animate({opacity:1}, 200, function() {});
                                        $('#removeid').val('{{$myclient->id}}');"></span>
                                      </a>
 
                                     </td>
                                  </tr>  
                                    
                                @endforeach
                                        

                                    
  
                               </tbody>


                           </table>
                           {{ $client->links() }}
                       </div>
                    </div>
                </section> 
            </div>
         
      
     </div>
@endsection