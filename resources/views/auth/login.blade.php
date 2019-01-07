<!DOCTYPE html>
<html>
<head>
 
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
 ></script>
 
 
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <style type="text/css">
      *{font-family: 'Cairo', sans-serif;
}
  </style>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" />
</head>
<body style="background: url(http://moodle.sanisidro.amgr.es/Plantilla/Documentation/assets/img/page_bg/page_bg_blur02.jpg);background-size: cover;background-repeat: no-repeat;padding-top: 190px;">
<div class="container-fluid" >


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">



        <div class="  col-xs-12 " style="padding: 15px;">
     
            <div style=" ; max-width: 100%; padding-top:50px!important;background-size: 100% 100%;padding-bottom: 60px;" class="padding0xs" >





                <form method="POST" action="/login" aria-label="{{ __('Login') }}">
                        @csrf

                     
                <div style="width: 600px ; max-width: 100%;background: rgba(250,250,250,.97); ;margin: 0px auto;padding: 40px 0px " class="row">


                    <div style="width: 500px; background: #fff;  margin:0px auto ;padding: 10px 0px;      max-width: 100%; " class="row">
             

                        <div class="col-xs-12">
                            <div class="col-xs-12 text-center" style="padding-top: 10px;">
                                <h4 style="color: #428bca; font-weight: bolder;margin: 0;">تسجيل دخول </h4>
                            </div>
                        </div>

                     



                            <div class="col-xs-12 " style="margin: 3px 0px;padding-top: 30px ">
                                 
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon3" style="border-right: 1px solid #ccc;    border-radius: 0;padding: 8px 11px 0px 24px"><span class="fa fa-user" style="color: #555555"></span> </span>
                                  <input type="" class="form-control"   placeholder="اسم المستخدم  " name="email" style="    border-radius: 0;">
                                </div>
                            </div>


                             
                            <div class="col-xs-12 " style="margin: 3px 0px ">
                                 
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon3" style="border-right: 1px solid #ccc;    border-radius: 0;padding: 8px 11px 0px 24px"><span class="fa fa-user-secret" style="color: #555555"></span> </span>
                                  <input type="password" class="form-control"   placeholder="كلمة السر    " name="password" style="    border-radius: 0;">
                                </div>
                            </div>
                         

                            <div class="col-xs-12" style="margin-top: 10px;">
                                <button style=" padding:10px 0px ; width: 100%;border-radius: 0;" class="btn btn-success ">
                                    <h4 style="font-weight: bolder;margin: 0;color: #fff;">تسجيل دخول </h4>
                                </button>
                            </div>
                         

                         
                            
                        </div>
                    </div>
                    
                </div>
            </form>

                <style type="text/css">
                 ::-webkit-input-placeholder {
                        font-weight: bolder;
                     
                    }
                </style>
                     
            </div>












        </div>


</div>
 
 
</body>



</html>