<template>
     <div class="col-xs-12 effect-content"  style="display: none;">

            <div class="panel " >
                <section >
                    <header class="panel-heading text-right" style="padding: 5px 6px;">
                        <div class="col-xs-10" style="padding: 0px;">
                            <span class="hidden-sm" style="padding: 3px;display: inline-block;">عرض كافة العملاء</span>
                        </div>
                        <div class="col-xs-2" style="padding: 0px;direction: ltr!important;">
                            <router-link style="padding: 2px 5px; direction: ltr!important;display: inline-block;float: left;" :to="{path:'/addnewclient'}">
                                <span class="fa fa-plus" style="background: #2381c6;color: #fff;border-radius: 50%;padding: 4px 5px ;cursor: pointer;"> </span>
                            </router-link>
                        </div>
                         
                    </header>
                    <div class="panel-body" style=" padding: 0px;">
                       <div class="col-xs-12" style="padding: 0px;">
                           <table class="table" style="padding: 0px;">
                               <thead class="thead" style="background: #f2fffd;padding: 5px ">
                                   <tr>
                                       <td>كود</td>
                                       <td>الاسم</td>
                                       <td>البريد الاكتروني</td>
                                       <td>الهاتف</td>
                                       <td>عملية</td>
                                   </tr>
                               </thead>
                               <tbody>

                                    <template v-for="client in clients">
                                        <tr>
                                           <td>كود</td>
                                           <td>{{ client.title }}</td>
                                           <td>البريد الاكتروني</td>
                                           <td>الهاتف</td>
                                           <td>عملية</td>
                                        </tr>
                                    </template>
                                    


 
                                   
                               </tbody>


                           </table>
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
                clients:[
                ],
            }

        } ,
        mounted(){
             $('.effect-content').fadeIn(1200);

              for (var x = 0 ; x <20; x++ )
                {
                    this.$http.get('https://newsapi.org/v2/everything?q=bitcoin&from=2018-11-13&sortBy=publishedAt&apiKey=12360df6e53648ed901bc9af0b4254ac').then(response => {   
                            this.clients.push(response.body.articles);
                      },response =>{}); 
                } 

        }


    }
</script>
