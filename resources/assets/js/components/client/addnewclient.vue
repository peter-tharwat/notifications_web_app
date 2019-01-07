<template>
     <div class="col-xs-12 effect-content"  style="display: none;overflow: hidden;">

 <!--      <div class="col-xs-12" style="padding: 0px; height:600px;position: absolute;width: 100%;z-index: 8520;margin:5px auto;background:#222">
        <img src="https://i2.wp.com/codemyui.com/wp-content/uploads/2017/09/rotate-pulsating-loading-animation.gif?fit=880%2C440&ssl=1" style="display: inline-block;height: 200px;width: 400px;">
      </div> -->

            <div class="panel" >
        

                <section >
                    <header class="panel-heading text-right"  style="padding: 5px 6px;">
                        
                        <div class="col-xs-5" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">اضافة عميل جديد</span>
                        </div>
                        <div class="col-xs-7" style="padding: 0px;direction: ltr!important;">
                            <router-link style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;" :to="{path:'/viewallclients'}">
                                <span class="fa fa-bars" style="background: #2381c6;color: #fff;border-radius: 0px;padding: 4px 5px ;cursor: pointer;"> </span>
                            </router-link>



                            <router-link style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;background: transparent;border:none;box-shadow: none;" :to="{path:'#'}" class="btn ">
                                <span class="fa fa-times" style="background: #ff5f5f;color: #fff;border-radius: 0px;padding: 4px 6px ;cursor: pointer;" > </span>
                            </router-link>

                            <router-link style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;" :to="{path:'#'}">
                              <span style="background: #13c4a5;color: #fff;border-radius: 0px;padding:1px 7px; ;cursor: pointer;float: left;" class="btn btn-success" v-on:click="submitForm()">
                                <span class="fa fa-check"  style=""   > </span> حفظ 

                              </span>
                                
                            </router-link>


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
            </div>   
          </div>
          <div class="col-xs-12 col-sm-6  animated ">
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
            </div>
         
      
     </div>
</template>
 



<script>
    export default {
        data:function(){
            return{
                name:'peter',
                _token:'',
            }
        },
        mounted(){
          $('.effect-content').fadeIn(1200);

          this.$http({method: 'GET', url: '/gettoken' })
              .then(response => {
                this._token= response ;
             }).catch((err) => { console.log(err)});

        },
        methods:{
          submitForm(){
            console.log('started');
/*
            var data = {
              '_token'  : this._token,
            };

            this.$http({method: 'POST', url: '/testapi' , data:data})
              .then(response => {
                console.log(response);
                 this.postResults = data;
                 this.ajaxRequest = false;
              }).catch((err) => {
                console.log(err)
              });
*/
           this.$route.router.go('/viewallclients');
         
          $('.fade-In').css('display','none');
            console.log('ended');
          }
        }
    }
</script>
