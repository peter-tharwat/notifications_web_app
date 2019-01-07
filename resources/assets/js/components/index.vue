<template>
     <div>
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading text-right">
                    <ul class="nav nav-tabs pull-left">
                        <li class="">
                            <a data-toggle="tab" href="#messages-2"><i class="fa fa-comments fa-lg text-default"></i></a>
                        </li>
                        <li class="active">
                            <a data-toggle="tab" href="#profile-2"><i class="fa fa-user fa-lg text-default"></i> الملف الشخصي</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-cog fa-lg text-default"></i> الاعدادات <b class="caret"></b></a>
                            <ul class="dropdown-menu text-left"  style="right: unset;left: 0px;">
                                <li>
                                    <a data-toggle="tab" href="#dropdown1">اعدادات العرض</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#dropdown2">اعدادات التصدير</a>
                                </li>
                            </ul>
                        </li>
                    </ul><span  >نافذة المستخدمين</span>
                </header>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="messages-2">
                            ارسال رسائل
                        </div>
                        <div class="tab-pane fade active in" id="profile-2">
                            الملف الشخصي
                        </div>
                        <div class="tab-pane fade" id="dropdown1">
                            اعدادات العرض
                        </div>
                        <div class="tab-pane fade" id="dropdown2">
                            اعدادات التصدير
                        </div>
                    </div>
                </div>
            </section>

            <div class="panel" >
                <section >
                    <header class="panel-heading text-right">
                         <span class="hidden-sm">نافذة المستخدمين</span>
                    </header>
                    <div class="panel-body" style="height: 200px;">
             
                    </div>
                </section> 
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <!-- easypiechart -->
              
 
                <div class="col-xs-6">
                    <section class="panel">
                        <header class="panel-heading bg-white">
                            <div class="text-center h5">
                                عدد عملائي <strong></strong>
                            </div>
                        </header>
                        <div class="panel-body pull-in text-center">
                            <div class="inline">
                                 <h1 style="color: #1abc9c;margin: 10px 0px ;font-size: 35px;">15</h1>
                            </div>
                            <div>
                                عميل
                            </div>
                            <div class="col-xs-12" style="padding: 0px;margin-top: 10px;"><hr style="margin: 0px;padding: 10px 0px 0px"></div>
                            <a href="#"><div class="col-xs-12" style="padding-top: 0px 0px 10px;color: #1abc9c"> أضف عميل جديد</div></a>
                        </div>
                    </section>
                </div> 
                <div class="col-xs-6">
                    <section class="panel">
                        <header class="panel-heading bg-white">
                            <div class="text-center h5">
                                عدد نمازجي <strong></strong>
                            </div>
                        </header>
                        <div class="panel-body pull-in text-center">
                            <div class="inline">
                                 <h1 style="color: #1abc9c;margin: 10px 0px;font-size: 35px;">74</h1>
                            </div>
                            <div>
                                نموزج
                            </div>
                            <div class="col-xs-12" style="padding: 0px;margin-top: 10px;"><hr style="margin: 0px;padding: 10px 0px 0px"></div>
                            <a href="#"><div class="col-xs-12" style="padding-top: 0px 0px 10px;color: #1abc9c"> أضف نموزج جديد</div></a>
                        </div>
                    </section>
                </div> 


            </div>
            <section class="panel">
                <div class="panel-body text-muted l-h-2x">
                    <span class="badge">3,3121</span> <span class="m-l-small">الطلبات</span> <span class="badge bg-success">25,129</span> <span class="m-l-small">النمازج المطبوعة</span> <span class="badge">59,973</span> <span class="m-l-small">العملاء</span> <span class="badge">3,141</span> اخري
                </div>
            </section>  
        </div>
     </div>
</template>
 
<script>
    export default {
        name:'main-app' 
        
    }
</script>
