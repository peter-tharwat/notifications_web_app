<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>نظام ارصدة العملاء | وكالة اوكي للسفريات </title>
		{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" /> --}}
		<meta name="csrf-token" content="{{ csrf_token() }}">


	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
 

	<meta content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui" name="description">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	{{-- <link href="/css/font.css" rel="stylesheet"> --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">  
	<link href="{{ env('PUBLIC_PATH') }}/css/app.v2.css" rel="stylesheet" type="text/css">
	
{{-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	 --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


	<style type="text/css" href="https://daneden.github.io/animate.css/animate.min.css"></style>


	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" /> 
 

	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" >

{{-- 	  <script src="/js/app.v2.js">
	</script> --}}  
</head>

<style type="text/css">
 	table{
 		min-width: 700px;
 	}
  input{
    border-radius: 0px!important;
    box-shadow: none!important;
    border:1px solid #13c4a5;
    padding-top: 0px;
   
  }
  select
  {
     border-radius: 0px!important;
     box-shadow: none!important;
      outline: 0;
       border:1px solid #13c4a5;
       padding-top: 0px!important
  }

	@media (min-width: 768px)
	{
		#nav.nav-vertical+#content {
		    padding-left: 0px!important;
		}
		#nav.nav-vertical+#content {
		    padding-right: 90px!important;
		}
		#nav+#content {
    padding-right: 150px;
    padding-left: 0px;
}	

	}
	.dropdown-submenu:hover>.dropdown-menu
	{
		right:89px;
	}
	@media (max-width: 768px)
	{
		.dropdown-submenu:hover>.dropdown-menu
		{
			right:0px;
		}

	
	}
	.navbar-brand
	{
		padding:10px 5px!important;
	}
	  * 

	{
		font-family: 'Cairo', sans-serif;
	 


	}
	.h1,.h2,.h3,.h4,.h5,.h6
	{
		font-family: 'Cairo', sans-serif!important;
	}
	.navbar-brand
	{
		font-style: normal;
	}
	#content
	{

    min-height: -webkit-fill-available;
	}
	.panel 
	{
		transition: all .5s ease-in-out;
	}
	.nav-primary .a-exact-active  
	{
		color: #fff!important;
		background: #233445!important;
	}
	input , button
	{
		border-radius: 0px!important;

	}
	input{
		box-shadow: none!important;
	}
	input:focus
	{
		background: #f2fffd;
	}
	h1,h2,h3,h4,h5,h6
	{
		font-family: 'Cairo', sans-serif!important;
	}
	.real-content *
	{
		font-size: 14px;
	}
	
	 
</style>

<body >
	<div id="app"> 
	<header class="navbar" id="header">
		<ul class="nav navbar-nav navbar-avatar pull-right hidden-xs" style="float: left!important;">

		 


			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding: 15px;"><span class="hidden-xs-only"> {{ \Auth::user()->name }}</span>  <b class="caret hidden-xs-only"></b></a>
				<ul class="dropdown-menu pull-right">
					{{-- <li>
						<a href="#">الاعدادات</a>
					</li>
					<li>
						<a href="#">الصفحة الشخصية</a>
					</li>
					<li>
						<a href="#"><span class="badge bg-danger pull-right">3</span> الاشعارات</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#">مساعدة</a>
					</li> --}}
					<li>
						 
			                  <a class="dropdown-item" href="{{ route('logout') }}"
			                     onclick="event.preventDefault();
			                                   document.getElementById('logout-form').submit();">
			                      تسجيل خروج


			                  </a>

			                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                      @csrf
			                  </form>
			               					
			         </li>
				</ul>
			</li>
		</ul><a class="navbar-brand" href="#" style="  font-family: 'Cairo', sans-serif;font-weight: bolder">
			<h4 style="padding: 0px; margin: 0px;font-weight: bolder" class="h3">وكالة اوكي للسفريات</h4></a> 
			<button class="btn btn-link pull-left nav-toggle visible-xs" data-target="body" data-toggle="class:slide-nav slide-nav-left" type="button" onclick="
				 $('body').toggleClass('slide-nav');
				 $('body').toggleClass('slide-nav-left');
				 
				"  ><i class="fa fa-bars fa-lg text-default"
				
				></i></button>
		 
		<ul class="nav navbar-nav hidden-xs">
			 
			@if(session()->has('data'))		 
				<li >
					<div class="col-xs-12 animated slideInDown " style="padding: 4px 5px 0px; position: relative;overflow: hidden;padding-right: 20px; ">
						 <div class="alert alert-info  " style="margin :0px;height: 40px;padding: 9px 12px;width: 200px;border-radius: 0px;border:1px solid #2381c6;position: relative; font-size: 12px;color: #333">
						 	{{  session('data')['alert'] }}
						 </div>
					</div>
				</li>
			@endif

			@foreach ($errors->all() as $message)  
			<li >
				<div class="col-xs-12 animated slideInDown " style="padding: 4px 5px 0px; position: relative;overflow: hidden;padding-right: 20px; ">
					 <div class="alert alert-danger  " style="margin :0px;height: 40px;padding: 9px 12px;width: 200px;border-radius: 0px;border:1px solid #2381c6;position: relative; font-size: 12px;color: #333">
					 	{{ $message }}
					 </div>
				</div>
			</li>

			
			@endforeach

			<li class="">
				<div style=" background: #5191d1;height: 50px;width: 300px;color: #fff;padding: 0px;">
					 <div class="col-xs-1" style="padding:15px 0px 0px ;background: #333;height: 50px;">
					 	<span style="transform: rotate(270deg);display: inline-block;padding: 0px;"  >صرف</span>
					 </div>
					 <div class="col-xs-11" style="padding:  0px">
					 	<div style="padding: 2px 0px;height: 25px; " class="col-xs-6 text-center">
							<span id="borrow_RS"></span>
							ريال سعودي
						</div>
						<div style="padding: 2px 0px;height: 25px; " class="col-xs-6 text-center">
							<span id="borrow_RO"></span> ريال عماني
						</div>
						<div style="padding: 2px 0px ;height: 25px;" class="col-xs-6 text-center">
							<span id="borrow_YER"></span> ريال يمني
						</div>
						<div style="padding: 2px 0px ;height: 25px;" class="col-xs-6 text-center">
							<span id="borrow_USD"></span> دولار
						</div>
						
					 </div>
					

				</div>
				
			</li>
			<li>
				<div style="width: 25px;background: #3fcf7f;height: 50px;width: 300px;color: #fff;padding: 0px;"  >

					<div class="col-xs-1" style="padding:15px 5px 0px 0px; ;background: #333;height: 50px;">
					 	<span style="transform: rotate(270deg);display: inline-block;padding: 0px;"  >قيد</span>
					 </div>
					 <div class="col-xs-11" style="padding:  0px">
					 	<div style="padding: 2px 0px ;height: 25px;" class="col-xs-6 text-center">
							<span id="payback_RS"></span>
							ريال سعودي
						</div>
						<div style="padding: 2px 0px;height: 25px; " class="col-xs-6 text-center">
							<span id="payback_RO"></span> ريال عماني
						</div>
						<div style="padding: 2px 0px;height: 25px; " class="col-xs-6 text-center">
							<span id="payback_YER"></span> ريال يمني
						</div>
						<div style="padding: 2px 0px ;height: 25px;" class="col-xs-6 text-center">
							<span id="payback_USD"></span> دولار
						</div>
						
					 </div>
				</div>
			</li>

			<li>
				<div style="width: 25px;background: #00bfff;height: 50px;width: 300px;color: #fff;padding: 0px;"  >

					<div class="col-xs-1" style="padding:15px 5px 0px 0px; ;background: #333;height: 50px;">
					 	<span style="transform: rotate(270deg);display: inline-block;padding: 0px;"  >باق</span>
					 </div>
					 <div class="col-xs-11" style="padding:  0px">
					 	<div style="padding: 2px 0px ;height: 25px;" class="col-xs-6 text-center">
							<span id="charge_RS"></span>
							ريال سعودي
						</div>
						<div style="padding: 2px 0px;height: 25px; " class="col-xs-6 text-center">
							<span id="charge_RO"></span> ريال عماني
						</div>
						<div style="padding: 2px 0px;height: 25px; " class="col-xs-6 text-center">
							<span id="charge_YER"></span> ريال يمني
						</div>
						<div style="padding: 2px 0px ;height: 25px;" class="col-xs-6 text-center">
							<span id="charge_USD"></span> دولار
						</div>
						
					 </div>
				</div>
			</li>




	 	<li>

	 		 
	 	</li>
		</ul>
		{{-- <form action="" class="navbar-form pull-left shift" data-target=".nav-primary" data-toggle="shift:appendTo">
			<i class="fa fa-search text-muted"></i> <input class="input-sm form-control" placeholder="إجراء سريع ( قريبا )" type="text" style="border:1px solid #13c4a5!important;background: #f2fffd">
		</form> --}}
	</header><!-- / header --><!-- nav -->
	<nav class="nav-primary hidden-xs nav-vertical" id="nav" style="right:0px;"   >
		<ul class="nav" data-offset-top="50" data-spy="affix" >
			<li >
			 

				<a href="/"><i class="fas fa-tachometer-alt fa-lg"></i> <span>لوحة التحكم</span></a>
			</li>
			<li class="dropdown-submenu">
				<a href="#">
					<i class="fa fa fa-user fa-lg"></i> <span>العملاء</span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="/client/create">اضافة عميل</a>
					</li>
					<li>
						<a href="/client">قائمة العملاء</a>
					</li>
 
				</ul>
			</li>
			<li class="dropdown-submenu">
				<a href="#">
					<i class="fa fa fa fa-group fa-lg"></i> <span>المستخدمين</span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="/emp/create">اضافة مسخدم</a>
					</li>
					<li>
						<a href="/emp"><!-- <b class="badge pull-right">302</b --> قائمة المستخدمين</a>
					</li>
 
				</ul>
			</li>
			<li class="dropdown-submenu">
				<a href="#">
					<i class="fas fa-hands-helping fa-lg"></i> <span>المعاملات</span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="/deal/create">اضافة معاملة</a>
					</li>
					<li>
						<a href="/deal">قائمة المعاملات</a>
					</li>
 
				</ul>
			</li>
 
			<li class="dropdown-submenu">
				<a href="#">
					<i class="fas fa-envelope fa-lg"></i> <span>صندوق البريد</span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="/message/create">ارسال رسالة جدية</a>
					</li>
					<li>
						<a href="/message">قائمة الرسائل</a>
					</li>
 
				</ul>
			</li>
 

			<li class="dropdown-submenu">
				<a href="#"><i class="far fa-life-ring fa-lg"></i> <span>طلب مساعدة</span></a>
				<ul class="dropdown-menu">
					<li>
						<a href="#">كيف يعمل النظام</a>
					</li>
					<li>
						<a href="#">راسل صاحب النظام</a>
					</li>
					<li>
						<a href="#">الدعم الفني</a>
					</li>
					<li>
						<a href="#">طلب نموزج من المبرمج</a>
					</li>
				</ul>
			</li>

			<li class="dropdown-submenu">
				<a href="#"><i class="fas fa-cogs fa-lg"></i> <span>الاعدادات</span></a>
				<ul class="dropdown-menu">
					<li>
						<a href="#">اعدادات عامة</a>
					</li>
					<li>
						<a href="#">اعدادات النظام</a>
					</li>
					
				</ul>
			</li>
 
		</ul>
	</nav><!-- / nav -->
	<section id="content">
		<section class="main padder">
			<div class="row">
				<div class="col-lg-12">
					

					<section class="toolbar clearfix m-t-large m-b col-lg-4" style="padding: 0px;">
						<a class="btn btn-white btn-circle" href="/message"><i class="far fa-envelope"></i> الرسائل{{--  <b class="badge bg-white">5</b> --}}</a> <a class="btn btn-primary btn-circle active" href="/client"><i class="fa fa-user"></i> العملاء</a> <a class="btn btn-success btn-circle" href="/emp"><i class="fa fa-group"></i> الموظفين</a> <a class="btn btn-info btn-circle active" href="/deal"><i class="fas fa-hands-helping "></i> المعاملات{{-- <b class="badge bg-info"><i class="fa fa-plus"></i></b></a> <a class="btn btn-inverse btn-circle" href="#"><i class="fa fa-bar-chart-o"></i> الحالات</a> <a class="btn btn-warning btn-circle" href="/calendar.html"><i class="fa fa-calendar-o"></i> التقويم</a> <a class="btn btn-danger btn-circle" href="#"><i class="fa fa-group"></i> المستخدمين</a> --}} <a class="btn btn-circle" href="#"><i class="fa fa-plus"></i> اكثر ( قريبا ) </a>
					</section>
					 
					<section class="toolbar clearfix m-t-large m-b col-lg-8 message_panel "   style="background: red;height: 80px;padding: 0px;position: relative;opacity: 0">

						<form method="POST" action="/sendmessage"> 
							{{ csrf_field() }}
							<input type="hidden" name="id[]" id="message_id_form" >
							<input type="hidden" name="type" id="message_type_form">


							<button class="btn btn-info" style="position: absolute;left: 0px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;background: #13c4a5;">ارسال</button>
							<span  style="position: absolute;left: 55px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;border:1px solid  #13c4a5;" for="sms_tag">
								<input type="checkbox" name="method[]" value="sms" style="bottom: -2px;margin: 0px;position: relative; " id="sms_tag">
								<span class="fa fa-mobile-alt" style="padding: 0px " ></span>
							</span>
							<span  style="position: absolute;left: 120px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;border:1px solid  #13c4a5;">
								<input type="checkbox" name="method[]" value="whatsapp" style="bottom: -2px;margin: 0px;position: relative;">
								<span class="fab fa-whatsapp" style="padding: 0px "></span>
							</span>
							<span  style="position: absolute;left: 185px; bottom: 0px; border-radius: 0px;padding: 2px 10px;font-size: 12px;font-weight: normal;outline: none;box-shadow: 0px;border:1px solid  #13c4a5;">
								<input type="checkbox" name="method[]" value="email" style="bottom: -2px;margin: 0px;position: relative;">
								<span class="fa fa-envelope" style="padding: 0px "></span>
							</span>


							<textarea style="box-shadow: none;border-radius: 0px;height: 80px;max-height: 80px;	max-width: 100%;min-width: 100%; " class="form-control" placeholder="محتوي الرسالة" name="content"></textarea>
						</form>


					</section>
 
				</div>



				<div class="col-xs-12 real-content" style="padding: 0px;">
					@yield('content')	
				</div>
 	
			</div>
		</section>
	</section><!-- .modal -->


 
  



	<div class="modal fade" id="modal">
		<form class="m-b-none">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" type="button"><i class="fa fa-times"></i></button>
						<h4 class="modal-title" id="myModalLabel">Post your first idea</h4>
					</div>
					<div class="modal-body">
						<div class="block">
							<label class="control-label">Title</label> <input class="form-control" placeholder="Post title" type="text">
						</div>
						<div class="block">
							<label class="control-label">Content</label> 
							<textarea class="form-control" placeholder="Content" rows="5"></textarea>
						</div>
						<div class="checkbox">
							<label><input type="checkbox"> Share with all memebers of first</label>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-sm btn-default" data-dismiss="modal" type="button">Save</button> <button class="btn btn-sm btn-primary" data-loading-text="Publishing..." type="button">Publish</button>
					</div>
				</div><!-- /.modal-content -->
			</div>
		</form>
	</div><!-- / .modal --><!-- footer -->


	{{-- <footer id="footer">
		<div class="text-center padder clearfix">
			<p><small>&copy; نظام الطباعة المتجاوب 2019 &copy; جميع الحقوق محفوظة</small><br>
			<br>
			<a class="btn btn-xs btn-circle btn-twitter" href="#"><i class="fab fa-twitter"></i></a>
			<a class="btn btn-xs btn-circle btn-facebook" href="#"><i class="fab fa-facebook"></i></a>
			<a class="btn btn-xs btn-circle btn-gplus" href="#"><i class="fab fa-google-plus-g"></i></a></p>
		</div>
	</footer> --}}
	<a class="hide slide-nav-block" data-target="body" data-toggle="class:slide-nav slide-nav-left" href="#" onclick="
	$('body').toggleClass('slide-nav');
	$('body').toggleClass('slide-nav-left');
	 
	"></a> 
	</div>
	
	
	 <script type="text/javascript" src="{{ env(' PUBLIC_PATH') }}/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script type="text/javascript">
    	(function(){
    		$('.select2').select2();
    	})();
    </script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<script>
 var total_borrow_payback;

$.ajax({
method: "POST",
url: "/total_borrow_payback",
data: {  _token: "<?php echo csrf_token(); ?>" }
})
.done(function( msg ) {
    
   total_borrow_payback=msg;

   $('#borrow_USD').text(msg['total_borrow']['USD']);
   $('#borrow_RO').text(msg['total_borrow']['RO']);
   $('#borrow_RS').text(msg['total_borrow']['RS']);
   $('#borrow_YER').text(msg['total_borrow']['YER']);


   $('#payback_USD').text(msg['total_payback']['USD']);
   $('#payback_RO').text(msg['total_payback']['RO']);
   $('#payback_RS').text(msg['total_payback']['RS']);
   $('#payback_YER').text(msg['total_payback']['YER']);
 
   $('#charge_USD').text(msg['total_borrow']['USD'] - msg['total_payback']['USD']);
   $('#charge_RO').text( msg['total_borrow']['RO']  - msg['total_payback']['RO']);
   $('#charge_RS').text( msg['total_borrow']['RS']  - msg['total_payback']['RS']);
   $('#charge_YER').text(msg['total_borrow']['YER'] - msg['total_payback']['YER']);
 
    
     




var ctx = document.getElementById("myChart1").getContext('2d');
ctx.font  = "'Cairo', sans-serif";
var myChart1 = new Chart(ctx, {
    type: 'doughnut',
 
 
    data: {

        labels: ["ريال سعودي", "ريال يمني", "ريال عماني", "دولار"],
        datasets: [{
          
            data: [ msg['total_borrow']['RS'], msg['total_borrow']['YER'], msg['total_borrow']['RO'], msg['total_borrow']['USD']],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 206, 86)',
                'rgb(75, 192, 192)'
              
            ],
          
           
            
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
            
        },
        legend:{
    		 labels: {
    		 	defaultFontFamily :"'Cairo', sans-serif",
    		 	 
    		  }
	        }

    }
});


var myBarChart1 = document.getElementById("myBarChart").getContext('2d');

var myBarChart0 = new Chart(myBarChart1, {
 
    type: 'horizontalBar',
    data: {
        labels: ["ريال سعودي", "ريال يمني", "ريال عماني", "دولار"],
        datasets: [{
            label: 'إحصائيات السداد',
            data: [msg['total_payback']['RS'], msg['total_payback']['YER'], msg['total_payback']['RO'], msg['total_payback']['USD']],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 206, 86)',
                'rgb(75, 192, 192)'    
            ],   
        }]
    },
    options: {
        scales: {
            xAxes: [{
                stacked: true,
            }],
            yAxes: [{
                stacked: true
            }]
        },
         
    },
   
});


 
   
});






</script>
 
</body>
</html>