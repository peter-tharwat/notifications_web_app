@extends('header.header')
@section('content')
     <div class="col-xs-12 effect-content"  >
            <div class="panel " >
                <section >
                    <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-8" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">عرض كافة الرسالة</span>  
                            <form method="POST" action="/message/destroy" style="display: inline-block;margin: 0px" id="removemessageform">
                              {{ csrf_field()}}
                              <input type="hidden" name="id" value="" id="removeid">
                              
                            <span class="hidden-sm" style="padding: 3px;display: inline-block; border:1px solid #13c4a5;background: #f2fffd;opacity: 0;" id="removealert">حذف ؟
                              <span  style="padding-right: 50px;">

                                 {{-- <span class="hidden-sm" style="padding: 1px 3px;display: inline-block; border:1px solid #13c4a5;margin: 0px 0px; ">
                                <span class="fa fa-times" style="width: 15px;padding: 0px 3px;color: #f93885"></span>
                                </span> --}} 
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
                       <div class="col-xs-12" style="padding: 0px;">
                           <table class="table" style="padding: 0px;">
                               <thead class="thead" style="background: #f2fffd;padding: 5px ">
                                   <tr>
                                       <td>كود</td>
                                       <td>اسم العميل</td>
                                       <td>البريد الاكتروني</td>
                                       <td>النوع</td>
                                       <td>حالة السيرفر</td>
                                       <td>المحتوي</td>
                                       <td>عميلة</td>
                                   </tr>
                               </thead>
                               <tbody>
                                @foreach($message as $mymessage)
                                  <tr>
                                    <td>{{ $mymessage->id}}</td>
                                     <td>

                                       

                                     {{\app\Http\Controllers\messageController::get_name_client_emp_by_id($mymessage->message_receiver_id,$mymessage->client_or_emp,'name')}}

                                     <?php if($mymessage->client_or_emp=='client') echo "[عميل]";  ?>
                                     <?php if($mymessage->client_or_emp=='emp') echo "[موظف]";  ?> 
 

 


                                    </td>


                                     <td>{{ $mymessage->message_num_or_email }}</td>
                                     <td>{{ $mymessage->message_type }}</td>
                                     <td>{{ substr($mymessage->message_status,0,25) }}</td>
                                     <td>{{ substr($mymessage->message_content, 0, 120)  }}</td>
 
                                  
                                   

                                     <td>
                                      
                                      <a href="/message/show/{{$mymessage->id}}">
                                        <span class="fa fa-edit" style="color: #13c4a5"></span>
                                      </a>
                                      
                                      <a href="#">
                                        <span class="fa fa-trash-alt" style="color: #f93885" onclick="$( '#removealert' ).animate({opacity:1}, 200, function() {});
                                        $('#removeid').val('{{$mymessage->id}}');"></span>
                                      </a>

                                     </td>


                                  </tr>          
                                @endforeach
                                        

                                    
  
                               </tbody>


                           </table>
                       </div>
                    </div>
                </section> 
            </div>
         
      
     </div>
@endsection