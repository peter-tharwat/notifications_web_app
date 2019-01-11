<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>وكالة اوكي للسفريات </title>
 
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
 

	<meta content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui" name="description">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	{{-- <link href="/css/font.css" rel="stylesheet"> --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" /> 

	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" >
 
</head>
<body style="background:linear-gradient(141deg, #dadada 0%, #aef7ff 51%, #a1e5ff 75%);padding: 30px 2% 40px;background-size: 100% 100%;">
	<style type="text/css">
		* {
			font-family: 'Cairo' , 'arial';
		}
	</style>

	<div class="col-xs-12 content  " style="background: #ffffffcc;padding: 0px;position: relative;" >
		 
		 <div class="col-xs-12 text-center" style="font-size: 26px;background: #444;color: #fff;padding: 6px 0px;margin: 0px">
		 	-- وكالة اوكي للسفريات --
		 </div>
		 <div class="container">
		 	
		 	
		 <div class="col-xs-12" style="padding: 50px 0px ">

		 	<div class="col-xs-12" style="padding: 10px 0px 50px  0px">
		 		<div class="col-xs-12" style="padding-bottom: 7px;">
		 			 <div class="col-xs-2 col-sm-1 text-left" >
			 			السيد 
			 		</div>
			 		<div class="col-xs-10 col-sm-11 text-right" >
			 			{{ $name }}
			 		</div>
		 		</div>
		 		<div class="col-xs-12" style="padding-bottom: 7px;">
		 			 <div class="col-xs-2 col-sm-1 text-left" >
			 			الهاتف
			 		</div>
			 		<div class="col-xs-10 col-sm-11 text-right" >
			 			{{ $phone }}
			 		</div>
		 		</div>
		 		<div class="col-xs-12" style="padding-bottom: 7px;">
		 			 <div class="col-xs-2 col-sm-1 text-left" >
			 			البريد
			 		</div>
			 		<div class="col-xs-10 col-sm-11 text-right" >
			 			{{ $email }}
			 		</div>
		 		</div>

		 		
		 	</div> 

		 	<div class="col-xs-12 col-sm-12 col-md-4">
		 		<div class="col-xs-12 text-center" style="color: #333;font-size: 18px;padding: 5px 0px 25px">
		 			دفتر حسابك
		 		</div>
		 		<div class="col-xs-12" style="padding: 0px ;overflow: hidden;border-radius: 6px;">
		 			<div class="col-xs-6 text-center" style="height: 120px;background: #f1f1f1">
		 				<span style="padding: 30px 0px 0px;display: inline-block;font-size: 30px;color: #1abc9c" class="text-center">{{ $total_borrow_payback['RS'] }}</span>
		 				<h5>ريال سعودي</h5> 
		 				
		 			</div>
		 			<div class="col-xs-6 text-center" style="height: 120px;background: #fff">
		 				<span style="padding: 30px 0px 0px;display: inline-block;font-size: 30px;color: #1abc9c" class="text-center">{{ $total_borrow_payback['RO'] }}</span>
		 				<h5>ريال عماني</h5> 
		 			</div>
		 			
		 			
		 			<div class="col-xs-6 text-center" style="height: 120px;background: #fff">
		 				<span style="padding: 30px 0px 0px;display: inline-block;font-size: 30px;color: #1abc9c" class="text-center">{{ $total_borrow_payback['YER'] }}</span>
		 				<h5>ريال يمني</h5> 
		 			</div>
		 			<div class="col-xs-6 text-center" style="height: 120px;background: #f1f1f1">
		 				<span style="padding: 30px 0px 0px;display: inline-block;font-size: 30px;color: #1abc9c" class="text-center">{{ $total_borrow_payback['USD'] }}</span>
		 				<h5>دولار</h5> 
		 			</div>
		 		</div>
		 		
			 </div>
			 <div class="col-xs-12 col-sm-12 col-md-8" style="padding: 20px 0px">

			 	@foreach($deal as $mydeal)
				 	<div class="col-xs-12" style="border:1px solid #2381c6;padding: 5px;margin-bottom: 10px;position: relative;">
				 		<div style="position: absolute;height: 40px;width: 120px;background: #2381c6;left: 0px;top: 0px;color: #fff;padding: 6px 0px " class="text-center">
				 			<?php if($mydeal->deal_borrow_payback=='payback')echo "قيد";else echo "صرف"; ?>
				 		</div>
				 		<div class="col-xs-3 text-center" style="padding: 0px;background: #2381c6;border-radius: 5px; ">
				 			<span style="padding: 0px 0px 0px;display: inline-block;font-size: 30px;color: #fff;" class="text-center">{{ $mydeal->deal_mount }}</span>
				 			<span style="padding-bottom: 5px;display: inline-block;color: #eee;position: relative;top: -7px">
				 		<?php if($mydeal->deal_currency=='RS')
				 				echo "ريال سعودي";
				 		else if ($mydeal->deal_currency=='RO')
				 				 echo "ريال عماني";
				 		else if ($mydeal->deal_currency=='YER')
				 				 echo "ريال يمني";
				 		else if ($mydeal->deal_currency=='USD')
				 				 echo "دولار";
				 				  ?>
				 			 
				 		</span>
				 		</div>
				 		<div class="col-xs-9 text-right">
				 			<h6>الوقت : {{ $mydeal->created_at }} </h6>
				 			<h6>وذلك عن : {{ $mydeal->for }} </h6>	
				 		</div>
				 	</div>
			 	@endforeach
			 </div>
			 
		 </div>


		 </div>
		 


		 <div class="col-xs-12 text-center" style="position: absolute;bottom: 0px;padding: 15px 0px ;background: #fff" >
			 	لاي استفسار بخصوص حسابكم يرجى التواصل مع المحاسب على رقم 00967701041476
او ارقامنا الاخرى
فرع المكلا 00967770060117
فرع صلالة 0096894225255
			 </div>



		 

	</div>
	
	 <script type="text/javascript">
	 	//alert($(window).height());
	 	$('.content').css('height',$(window).height()-60+'px')
	 </script>
</body>
</html>