@php
    $featured_products = Cache::remember('featured_products', 3600, function (){ 
       return filter_products(\App\Models\Product::where('published', 1)->where('featured', '1'))->limit(12)->get();
        
     
    });
@endphp

@if (count($featured_products) > 0)
    <section class="mb-4">
        <div class="container">
               <div class="py-md-3 rounded">
                <div class="d-flex mb-3 align-items-baseline">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-width-2 pb-3 d-inline-block fs-sm-16-title" style="font-family: 'Roboto', sans-serif;">New Arrivals</span>
                    </h3>
                </div>

                <div style="background: #fff;padding: 8px 10px 18px 10px" class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='true' data-autoplay="true" autoplaySpped="2000">
                    @foreach ($featured_products as $key => $product)
                    <div class="carousel-box">
                        @include('frontend.partials.product_box_1',['product' => $product])
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </section>   
    
    @endif
    
  
    
    
    
