@if(get_setting('home_categories') != null) 
    @php $home_categories = json_decode(get_setting('home_categories')); @endphp
    @foreach ($home_categories as $key => $value)
        @php $category = \App\Models\Category::find($value); @endphp
        <section class="mb-3">
            <div class="container">
                <div class="rounded" style="background-color: transparent;">
                <div class="d-flex mb-3 align-items-baseline">
                        <h3 class="h5 fw-700 mb-0 home-product-title">
                            <span class="border-width-2 pb-3 d-inline-block" style="font-family: 'Roboto', sans-serif;">{{ $category->getTranslation('name') }}</span>

                        </h3>
                        <a href="{{ route('products.category', $category->slug) }}" class="ml-auto mr-0 btn btn-sm shadow-md w-500 view-btn mt-2">{{ translate('View More') }}</a>
                    </div>
                <div class="row">
                    
                    
                    <style>
                    .view-btn{
                        background-color: #572c84;
                        border-color: #572c84; 
                        color: #fff; 
                        font-size: 18px;
                    }
                    .view-btn:hover{
                        background-color: transparent;
                         border-color: #572c84; 
                        color: #572c84; 
                    }
                    
                    
                     @media only screen and (min-width:768px) and (max-width:1024px){
                         .view-btn{
                            font-size: 15px;
                        }
                    }
                     @media only screen and (min-width:768px) and (max-width:991px){
                        .d-none-cat {
                            display: none !important;
                        }
                    }
                    @media only screen and (min-width:575px) and (max-width:768px){
                        .d-none-cat {
                            display: none !important;
                        }
                        .view-btn{
                            font-size: 15px;
                        }
                    }
                     @media only screen and (min-width:425px) and (max-width:575px){
                        .d-none-cat {
                            display: none !important;
                        }
                        .view-btn{
                            font-size: 15px;
                        }
                    }
                    
                    @media only screen and (min-width:375px) and (max-width:425px){
                        .d-none-cat {
                            display: none !important;
                        }
                        .view-btn{
                            font-size: 12px;
                        }
                        .sm-p-device{
                            padding: 5px;
                        }
                        .home-product-title{
                            font-size: 16px;
                        }
                    }
                    
                     @media only screen and (min-width:320px) and (max-width:375px){
                        .d-none-cat {
                            display: none !important;
                        }
                        .view-btn{
                            font-size: 12px;
                        }
                        .sm-p-device{
                            padding: 5px;
                        }
                        .home-product-title{
                            font-size: 16px;
                        }
                    }
                        

                    </style>
                    
                    
                        <div class="col-xl-4 col-lg-5 d-none-cat">
                           
                             @foreach (get_cached_products($category->id) as $key => $product)
                              <div class="" style="background: #fff; padding: 15px;">
                                    <a href="" class="d-block d-none-cat">
                                        <img class="img-fit lazyload mx-auto h-140px h-md-330px"
                                            src="{{ static_asset('assets/img/m5.jpg') }}" data-src="{{ uploaded_asset($product->thumbnail_img) }}" alt=""
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/m5.jpg') }}';"> 
                                    </a>
                                    </div>
                                    @if ($key == 0)
                                        @break;
                                    @endif
                                @endforeach
                                
                        </div>
                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div style="background: #fff;" class="aiz-carousel gutters-10 half-outside-arrow sm-p-device" data-items="4" data-xl-items="3" data-lg-items="2" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='true' data-autoplay="true"  autoplaySpped="2000">
                        <!--<div class="aiz-carousel gutters-10 half-outside-arrow" data-items="4" data-xl-items="3" data-lg-items="2" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='true' data-autoplay="true" autoplaySpped="2000">-->
                        @foreach (get_cached_products($category->id) as $key => $product)
                            <div class="carousel-box">
                                @include('frontend.partials.product_box_1',['product' => $product])
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endif

