<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .f-icon-text{
        text-align:center; 
        font-size:18px;
        color:#fff;
    }
       .f-icon{
       font-size:22px;
       color:#d40000;
       }
   
   .footer-img{
       height: 90px;
        width: 210px;
    }
    .f-address{
        font-size:16px;
        color:#000;
    }
   
   .text-font{
       font-family: 'Roboto', sans-serif;
   }
   
   .download-text{
       font-size:21px;
       color:#fff;
       font-family: 'Roboto', sans-serif;
       font-weight: 700;
       margin-top: 30px;
       
   }
   .footer-text-info{
       font-size: 25px; 
       margin-top: 10px;
   }
   
   
    @media only screen and (min-width:1024px) and (max-width:1440px){
        .h-md-70h {
            height: 70px !important;
        }
    }
    
    @media only screen and (min-width:1025px) and (max-width:1199px){
        .h-md-60h {
            height: 60px !important;
        }
                        
    }
    
     @media only screen and (min-width:768px) and (max-width:1024px){
        .h-md-60h {
            height: 60px !important;
        }
         .download-text{
           margin-top: 20px;
       }
        .footer-text-info{
           font-size: 22px; 
           margin-top: 0px;
       }
    }
    
    @media only screen and (min-width: 769px) and (max-width: 991px){
        .h-md-45h {
            height: 45px !important;
        }
        .h-md-55px {
            height: 33px !important;
        }
        .download-text {
            font-size: 14px;
        }
        
    }   
    
      
    
      @media only screen and (min-width:425px) and (max-width:768px){
        .download-text-sm{
            font-size: 15px;
            margin-top: 0px !important;
            display: flex;
            align-items: center;
        }
        .h-md-45h {
            height: 45px !important;
        }
        .h-md-55px {
            height: 33px !important;
        }
        .footer-text-info{
           font-size: 14px; 
           margin-top: 0px;
       }
       .f-icon{
           font-size:16px;
        }
        .ml-sm-0{
            margin-left: 0px !important;
        }
        
      }
      
       @media only screen and (min-width:576px) and (max-width:767px){
       .h-md-45h {
            height: 35px !important;
        }
        .menu-text-style {
            font-size: 9px;
        }
        
    }
      
       @media only screen and (min-width:425px) and (max-width:575px){
        .mt-xs-0{
            margin-top: 0px !important;
        }
        .mb-xs-0{
            margin-bottom: 0px !important;
        }
        .footer-text-info {
            font-size: 13px;
        }
        
    }
    
    @media only screen and (min-width:375px) and (max-width:425px){
        .download-text-sm{
            font-size: 15px;
            margin-top: 0px !important;
            display: flex;
            align-items: center;
        }
        .h-md-45h {
            height: 50px !important;
        }
        .h-md-55px {
            height: 28px !important;
        }
        .footer-text-info{
           font-size: 11px; 
           margin-top: 0px;
       }
       .f-icon{
           font-size:15px;
        }
        .f-icon-text{
            font-size:14px;
        }
        .ml-sm-0{
            margin-left: 0px !important;
        }
        .mt-xs-0{
            margin-top: 0px !important;
        }
        .mb-xs-0{
            margin-bottom: 0px !important;
        }
        .footer-text-info {
            font-size: 11px;
        }
        .footer-img{
            width: 170px;
        }
         .f-address{
            font-size:14px;
        }
        .half-outside-arrow .slick-next {
            right: 0px;
        }
                
      }
      
      @media only screen and (min-width:320px) and (max-width:375px){
        .download-text-sm{
            font-size: 15px;
            margin-top: 0px !important;
            display: flex;
            align-items: center;
        }
        .h-md-45h {
            height: 45px !important;
        }
        .h-md-55px {
            height: 24px !important;
        }
        .footer-text-info{
           font-size: 11px; 
           margin-top: 0px;
       }
       .f-icon{
           font-size:15px;
        }
        .f-icon-text{
            font-size:14px;
        }
        .ml-sm-0{
            margin-left: 0px !important;
        }
        .mt-xs-0{
            margin-top: 0px !important;
        }
        .mb-xs-0{
            margin-bottom: 0px !important;
        }
        .footer-text-info {
            font-size: 11px;
        }
        .footer-img{
            width: 170px;
        }
         .f-address{
            font-size:14px;
        }
        .half-outside-arrow .slick-next {
            right: 0px;
        }
                
      }
  
</style> 
 @php
                            if(Session::has('locale')){
                                $locale = Session::get('locale', Config::get('app.locale'));
                            }
                            else{
                                $locale = 'en';
                            }
                        @endphp
<section class="border-top mt-auto" style="background-color: #572c84 !important">
   <div class="container" >
      <div class="row no-gutters">
         <div class="col-lg-3 col-sm-6">
            <div class="my-4">
                 <p class="f-icon-text"><span class="f-icon"><i class="fa-solid fa-sack-dollar fa-2x text-white" style="margin-bottom: 10px;"></i></span><br/>  {{ $locale == 'en' ? 'Cash On Delivery' : ' প্রদানোত্তর পরিশোধ ' }} </p>
            </div>
         </div>
         
           <div class="col-lg-3 col-sm-6">
            <div class="my-4">
                     <p class="f-icon-text"><span class="f-icon"><i class="fa-solid fa-money-bill-transfer fa-2x text-white" style="margin-bottom: 10px;"></i></span><br/> {{ $locale == 'en' ? 'Safe & Reliable Payment' : 'নিরাপদ এবং নির্ভরযোগ্য পেমেন্ট' }} </p>
                </div>            
            </div>
             <div class="col-lg-3 col-sm-6">
            <div class="my-4">
                    <p class="f-icon-text"><span class="f-icon"><i class="fa-solid fa-money-bill-trend-up fa-2x text-white" style="margin-bottom: 10px;"></i></span><br/> {{ $locale == 'en' ? 'Money back Guarantee' : 'টাকা ফেরত গ্যারান্টি'}} </p>
                </div>
            </div>
             <div class="col-lg-3 col-sm-6">
            <div class="my-4">
                    <p class="f-icon-text"><span class="f-icon"><i class="fa-solid fa-headset fa-2x text-white" style="margin-bottom: 10px;"></i></span><br/> {{ $locale == 'en' ? '24/7 Customer Service' : '24/7 গ্রাহক পরিষেবা' }} </p>
                </div>
            </div>
         </div>
       
         <!--<div class="col-lg-3 col-md-3">-->
         <!--     <ul class="list-unstyled text-center ">-->
         <!--         <li>-->
         <!--             <button data-toggle="modal" data-target="#exampleModal"   style="color:#fff;background-color:#F16722 !important;border:0px;border-radius:20px;" type="button" class="btn btn-warning btn-rounded  mt-2">Subscribe</button>-->
         <!--         </li>-->
         <!--     </ul>-->
         <!--</div>-->
         <div class="col-lg-3">
          {{--  <div class="text-center text-md-left">
              <ul class="list-inline mb-2 mt-2">
                  @if ( get_setting('payment_method_images') !=  null )
                  @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
                  <li class="list-inline-item">
                     <span style="color:#fff">Pay with: </span> <img src="{{ uploaded_asset($value) }}" height="40" style="max-height: 30px">
                  </li>
                  @endforeach
                  @endif
                  
               
               </ul> 
               
            </div> --}}
            
            
           
                   
            <!--    <div class="w-300px mw-100 mx-auto mx-md-0 mt-2 mb-2">-->
             
              
                    
                  
            <!--   @if(get_setting('play_store_link') != null)-->
            <!--   <a href="{{ get_setting('play_store_link') }}" target="_blank" class="d-inline-block mr-3 ml-1">-->
            <!--   <img src="{{ static_asset('assets/img/play.png') }}" class="mx-100 h-40px">-->
            <!--   </a>-->
            <!--   @endif-->
            <!--   @if(get_setting('app_store_link') != null)-->
            <!--   <a href="{{ get_setting('app_store_link') }}" target="_blank" class="d-inline-block">-->
            <!--   <img src="{{ static_asset('assets/img/app.png') }}" class="mx-100 h-40px">-->
            <!--   </a>-->
            <!--   @endif-->
            <!--</div>-->
           
           
            
            
            
         </div>
      </div>
</section>
<section class="border-top mt-auto" style="background-color:#e2e2e2 !important;">
   <div class="container">
      <div class="row no-gutters">
          <div class="col-lg-4 col-sm-6">
            
                <div class="calloremail mt-3 float-lg-end ml-3">
                   <ul class="list-unstyled">
                       
                      <li class="mb-4">
                          <a href="{{ route('home') }}" class="d-block mt-2">
                            <img class="lazyload custom_logo footer-img" src="" data-src="{{ static_asset('assets/img/logo.svg') }}" alt=""  height="90">
                        </a>
                      </li>
                      <li class="mb-2">
                         <!--<span><strong  style="color:#000;" class="d-block float-lg-end text-center ">+8809678800843</strong></span>-->
                         <p class="f-address"><span class="w-400" style="background: #1c1c1c;color: #fff;border-radius: 50%;padding: 2px 5px;font-family: 'Roboto', sans-serif;"><i class="fa-solid fa-phone"></i></span> +8809678800843 </p>
                      </li>
                      <li class="mb-2">
                         <p class="f-address"><span class="" style="background: #1c1c1c;color: #fff;border-radius: 50%;padding: 2px 5px;font-family: 'Roboto', sans-serif;"><i class="fa-regular fa-envelope"></i></span> info@sobkisubazar.com </p>
                      </li>
                      <li class="mb-2">
                         <p class="f-address"><span class="" style="background: #1c1c1c;color: #fff;border-radius: 50%;padding: 2px 5px;font-family: 'Roboto', sans-serif;"><i class="fa-solid fa-house-chimney"></i></span> 65, Rasul View, Suite-8/A, Mymensingh Lane, Banglamotor, Dhaka-1000. </p>
                      </li>
                       
                   </ul>
            </div>
          </div>
   
    
    <style>
        .footer-text-hover:hover{
            color: #EE3567!important;
        }
    </style>
    
   <div class="col-lg-2 col-sm-6">
       <div class="my-4">
                 <h5 style="color:#000; font-size: 18px; font-weight: 500;" class="text-font">{{ $locale == 'en' ? 'Cash On Delivery' : ' সবকিছু বাজার' }} </h5> 
                  <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/aboutus">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;"> {{ $locale == 'en' ? 'About Us' : ' আমাদের সম্পর্কে' }} </h4>
                </a>
                    </li>
                 <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/resource">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;"> {{ $locale == 'en' ? 'Resources' : ' সম্পদ' }} </h4>

                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/ourservices">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;"> {{ $locale == 'en' ? 'Our Services' : ' আমাদের সেবাসমূহ' }} </h4>

                </a>
                </li>
                  <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/buyerPartner">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;"> {{ $locale == 'en' ? 'Buyer Partner' : ' ক্রেতা অংশীদার' }} </h4>

                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/supplierPartner">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;"> {{ $locale == 'en' ? 'Supplier Partner' : ' সরবরাহকারী অংশীদার' }} </h4>

                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="#">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;"> {{ $locale == 'en' ? 'Affiliate' : ' অ্যাফিলিয়েট' }} </h4>

                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/sitemap">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;"> {{ $locale == 'en' ? 'Sitemap' : ' সাইটম্যাপ' }} </h4>

                </a>
                </li>
               
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/sobkisubazarBlog">
                <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;"> {{ $locale == 'en' ? 'Sobkisu Bazar Blog' : ' সবকিছু বাজার ব্লগ' }} </h4>

                </a>
                </li>
                  <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/faq">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;"> {{ $locale == 'en' ? 'FAQ' : ' জিজ্ঞাসিত প্রশ্নাবলী' }} </h4>

                </a>
                </li>
               </div>
               
        </div>       
      
    <div class="col-lg-3 col-sm-6">
       <div class="my-4">
                 <h5 class="text-font" style="color:#000; font-size: 18px; font-weight: 500;">Customer Services</h5>
                
                  <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/helpcenter">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Help center</h4>
                </a>
                         </li>
                 <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/privacypolicy">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Privacy policy</h4>
                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/terms">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">{{translate('Terms & Condition')}}</h4>
                </a>
                </li>
                  <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/ad-policy">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Ads Policy</h4>
                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/sellerpolicy">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Seller Policy</h4>
                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/customerpolicy">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Customer Policy</h4>
                </a>
                </li>
                <!--<li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/cancellationPolicy">-->
                <!--    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Cancellation Policy</h4>-->
                <!--</a>-->
                <!--</li>-->
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/returnrefundpolicy">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Return Refund Policy</h4>
                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/exchangepolicy">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Exchange Policy</h4>
                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/supportPolicy">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Support Policy</h4>
                </a>
                </li>
                  <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/partnershipManagement">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Partnership Management</h4>
                </a>
                </li>
               </div>
               
        </div>  
     <div class="col-lg-3 col-sm-6">
       <div class="my-4">
                 <h5 class="text-font" style="color:#000; font-size: 18px; font-weight: 500;">Trade Services</h5>
                
                  <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/tradeassurance">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Trade Assurance</h4>
                </a>
                         </li>
                 <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/businessIdentity">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Business Identity</h4>
                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/sourcing">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">Sourcing</h4>
                </a>
                </li>
                  <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/allSuppliers">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">All Suppliers</h4>
                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/allBuyers">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">All Buyers</h4>
                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/allseller">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">All Seller</h4>
                </a>
                </li>
                <li style="list-style:none;"><a class="text-reset d-block" href="https://sobkisubazar.com/allManufacturer">
                    <h4 class="h6 text-left text-dark text-font footer-text-hover" style="font-size:14px;">All Manufacturer</h4>
                </a>
                </li>
               </div>
               
        </div> 
    <div class="col-lg-1"></div>

        
      </div>
   </div>
</section>

<section class="border-top mt-auto" style="background-color: #ec5223 !important">
   <div class="container" >
      <div class="row no-gutters">
         <div class="col-lg-3 col-sm-3">
           
         </div>
            <div class="col-lg-3 col-sm-3">
                <div class="my-4">
                    <p class="download-text download-text-sm" style=""><span class="f-icon mr-3"><i class="fa-solid fa-download fa-2x text-white"></i></span>Download Apps</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="mt-4 mb-4 ml-3 ml-sm-0 mt-xs-0 mb-xs-0">
                    <a href="https://sobkisubazar.com/" target="_blank" class="d-inline-block">
                        <img src="{{ static_asset('assets/img/app.png') }}" class="mx-100 h-80px h-md-70h h-md-60h h-md-45h">
                    </a>                
                </div>
            </div>
             <div class="col-lg-3 col-sm-3">
                <div class="my-4 ml-5 ml-sm-0">
                    <a href="https://sobkisubazar.com/" target="_blank" class="d-inline-block">
                        <img src="{{ static_asset('assets/img/play.png') }}" class="mx-100 h-80px h-md-70h h-md-60h h-md-45h">
                    </a>                
                </div>
            </div>
         </div>
       
         <!--<div class="col-lg-3 col-md-3">-->
         <!--     <ul class="list-unstyled text-center">-->
         <!--         <li>-->
         <!--             <button data-toggle="modal" data-target="#exampleModal"   style="color:#fff;background-color:#F16722 !important;border:0px;border-radius:20px;" type="button" class="btn btn-warning btn-rounded  mt-2">Subscribe</button>-->
         <!--         </li>-->
         <!--     </ul>-->
         <!--</div>-->
         <div class="col-lg-3">
          {{--  <div class="text-center text-md-left">
              <ul class="list-inline mb-2 mt-2">
                  @if ( get_setting('payment_method_images') !=  null )
                  @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
                  <li class="list-inline-item">
                     <span style="color:#fff">Pay with: </span> <img src="{{ uploaded_asset($value) }}" height="40" style="max-height: 30px">
                  </li>
                  @endforeach
                  @endif
                  
               
               </ul> 
               
            </div> --}}
            
            
           
                   
            <!--    <div class="w-300px mw-100 mx-auto mx-md-0 mt-2 mb-2">-->
             
              
                    
                  
            <!--   @if(get_setting('play_store_link') != null)-->
            <!--   <a href="{{ get_setting('play_store_link') }}" target="_blank" class="d-inline-block mr-3 ml-1">-->
            <!--   <img src="{{ static_asset('assets/img/play.png') }}" class="mx-100 h-40px">-->
            <!--   </a>-->
            <!--   @endif-->
            <!--   @if(get_setting('app_store_link') != null)-->
            <!--   <a href="{{ get_setting('app_store_link') }}" target="_blank" class="d-inline-block">-->
            <!--   <img src="{{ static_asset('assets/img/app.png') }}" class="mx-100 h-40px">-->
            <!--   </a>-->
            <!--   @endif-->
            <!--</div>-->
           
           
            
            
            
         </div>
      </div>
   </div>
</section>

<footer class="pt-3 pb-3 bg-white text-light" style="background-color:#e2e2e2 !important">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                 <img
                    class="img-fit lazyload mx-auto h-140px h-md-60px h-md-55px"
                    src="{{ static_asset('assets/img/Footer-Logo.png') }}"
                        data-src="" alt="" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/.png') }}';">
            </div>
        </div>
    </div>
   
</footer>

<footer class="pt-2 pb-7 pb-xl-3 bg-white text-light" style="background-color:#572c84 !important;">
    <div class="container">
        <div class="row">
             <div class="col-lg-9 mx-auto">
                 <h4 class="h4 text-left text-font text-white text-center footer-text-info">Copyright © 2022 • Sobkisu Bazar • Developed by <a href="#">Enrich IT Solution</a> </h4>
             </div>
        </div>
    </div>
   
</footer>


 </div>

<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
   <div class="row align-items-center gutters-5">
      <div class="col">
         <a href="{{ route('home') }}" class="text-reset d-block text-center pb-2 pt-3">
         <i class="las la-home fs-20 opacity-60 {{ areActiveRoutes(['home'],'opacity-100 text-primary')}}"></i>
         <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['home'],'opacity-100 fw-600')}}">{{ translate('Home') }}</span>
         </a>
      </div>
      <div class="col">
         <a href="{{ route('categories.all') }}" class="text-reset d-block text-center pb-2 pt-3">
         <i class="las la-list-ul fs-20 opacity-60 {{ areActiveRoutes(['categories.all'],'opacity-100 text-primary')}}"></i>
         <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['categories.all'],'opacity-100 fw-600')}}">{{ translate('Categories') }}</span>
         </a>
      </div>
      @php
      if(auth()->user() != null) {
      $user_id = Auth::user()->id;
      $cart = \App\Models\Cart::where('user_id', $user_id)->get();
      } else {
      $temp_user_id = Session()->get('temp_user_id');
      if($temp_user_id) {
      $cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get();
      }
      }
      @endphp
      <div class="col-auto">
         <a href="{{ route('cart') }}" class="text-reset d-block text-center pb-2 pt-3" id="cart_items">
         <span class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px" style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
         <i class="las la-shopping-bag la-2x text-white"></i>
         </span>
         <span class="d-block mt-1 fs-10 fw-600 opacity-60 {{ areActiveRoutes(['cart'],'opacity-100 fw-600')}}" >
         {{ translate('Cart') }}
         @php
         $count = (isset($cart) && count($cart)) ? count($cart) : 0;
         @endphp
         (<span class="cart-count">{{$count}}</span>)
         </span>
         </a>
      </div>
      <div class="col">
         <a href="{{ route('all-notifications') }}" class="text-reset d-block text-center pb-2 pt-3">
         <span class="d-inline-block position-relative px-2">
         <i class="las la-bell fs-20 opacity-60 {{ areActiveRoutes(['all-notifications'],'opacity-100 text-primary')}}"></i>
         @if(Auth::check() && count(Auth::user()->unreadNotifications) > 0)
         <span class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right" style="right: 7px;top: -2px;"></span>
         @endif
         </span>
         <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['all-notifications'],'opacity-100 fw-600')}}">{{ translate('Notifications') }}</span>
         </a>
      </div>
      <div class="col">
         @if (Auth::check())
         @if(isAdmin())
         <a href="{{ route('admin.dashboard') }}" class="text-reset d-block text-center pb-2 pt-3">
         <span class="d-block mx-auto">
         @if(Auth::user()->photo != null)
         <img src="{{ custom_asset(Auth::user()->avatar_original)}}" class="rounded-circle size-20px">
         @else
         <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
         @endif
         </span>
         <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
         </a>
         @else
         <a href="javascript:void(0)" class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb" data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav">
         <span class="d-block mx-auto">
         @if(Auth::user()->photo != null)
         <img src="{{ custom_asset(Auth::user()->avatar_original)}}" class="rounded-circle size-20px">
         @else
         <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
         @endif
         </span>
         <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
         </a>
         @endif
         @else
         <a href="{{ route('user.login') }}" class="text-reset d-block text-center pb-2 pt-3">
         <span class="d-block mx-auto">
         <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
         </span>
         <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
         </a>
         @endif
      </div>
   </div>
</div>
@if (Auth::check() && !isAdmin())
<div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
   <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
   <div class="collapse-sidebar bg-white">
      @include('frontend.inc.user_side_nav')
   </div>
</div>
@endif