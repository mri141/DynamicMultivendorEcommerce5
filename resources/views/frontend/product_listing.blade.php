@extends('frontend.layouts.app')

<style>
     .header-top-bg {
        background-color: #e6e2e2 !important;
    }

    .under-header-bg {
        background-color: #eaeaea;
    }
    .ad-type-first{
        height: 330px; 
    }
    .ad-type-second{
       height: 320px;
    }
    .ad-type-third{
       height: 330px;
    }
    
    @media only screen and (min-width:1024px) and (max-width:1440px){
         .ad-type-first{
        height: 325px; 
    }
    .ad-type-second{
       height: 330px;
    }
    .ad-type-third{
       height: 320px;
    }
                
    }
    @media only screen and (min-width:425px) and (max-width:768px){
         .ad-type-first{
        height: 370px; 
    }
    .mt-sm-details{
        margin-top: 40px!important;

    }
    .ad-type-second{
       height: 330px;
    }
    .ad-type-third{
       height: 320px;
    }
                
    }
    @media only screen and (min-width: 375px) and (max-width: 425px){
        .d-none-mobile{
            display: none;
        }
    }
    @media only screen and (min-width: 320px) and (max-width: 375px){
        .d-none-mobile{
            display: none;
        }
    }
</style>

@if (isset($category_id))
    @php
        $meta_title = \App\Models\Category::find($category_id)->meta_title;
        $meta_description = \App\Models\Category::find($category_id)->meta_description;
    @endphp
@elseif (isset($brand_id))
    @php
        $meta_title = \App\Models\Brand::find($brand_id)->meta_title;
        $meta_description = \App\Models\Brand::find($brand_id)->meta_description;
    @endphp
@else
    @php
        $meta_title         = get_setting('meta_title');
        $meta_description   = get_setting('meta_description');
    @endphp
@endif

@section('meta_title'){{ $meta_title }}@stop
@section('meta_description'){{ $meta_description }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $meta_title }}">
    <meta itemprop="description" content="{{ $meta_description }}">

    <!-- Twitter Card data -->
    <meta name="twitter:title" content="{{ $meta_title }}">
    <meta name="twitter:description" content="{{ $meta_description }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $meta_title }}" />
    <meta property="og:description" content="{{ $meta_description }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('content')

    <section class="mb-4 pt-3">
        <div class="container sm-px-0">
            <form class="" id="search-form" action="" method="GET">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl sidebar-right z-1035">
                            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                            <div class="collapse-sidebar c-scrollbar-light text-left">
                                <div class="d-flex d-xl-none justify-content-between align-items-center pl-3 border-bottom">
                                    <h3 class="h6 mb-0 fw-600">{{ translate('Filters') }}</h3>
                                    <button type="button" class="btn btn-sm p-2 filter-sidebar-thumb" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" >
                                        <i class="las la-times la-2x"></i>
                                    </button>
                                </div>
                                <div class="bg-white shadow-sm rounded mb-3">
                                    <div class="fs-15 fw-600 p-3 border-bottom">
                                        {{ translate('Categories')}}
                                    </div>
                                    <div class="p-3">
                                        <ul class="list-unstyled">
                                            @if (!isset($category_id))
                                                @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level','asc')->get() as $category)
                                                    <li class="mb-2 ml-2">
                                                        <a class="text-reset fs-14" href="{{ route('products.category', $category->slug) }}">{{ $category->getTranslation('name') }}</a>
                                                    </li>
                                                @endforeach
                                            @else
                                                <li class="mb-2">
                                                    <a class="text-reset fs-14 fw-600" href="{{ route('search') }}">
                                                        <i class="las la-angle-left"></i>
                                                        {{ translate('All Categories')}}
                                                    </a>
                                                </li>
                                                @if (\App\Models\Category::find($category_id)->parent_id != 0)
                                                    <li class="mb-2">
                                                        <a class="text-reset fs-14 fw-600" href="{{ route('products.category', \App\Models\Category::find(\App\Models\Category::find($category_id)->parent_id)->slug) }}">
                                                            <i class="las la-angle-left"></i>
                                                            {{ \App\Models\Category::find(\App\Models\Category::find($category_id)->parent_id)->getTranslation('name') }}
                                                        </a>
                                                    </li>
                                                @endif
                                                <li class="mb-2">
                                                    <a class="text-reset fs-14 fw-600" href="{{ route('products.category', \App\Models\Category::find($category_id)->slug) }}">
                                                        <i class="las la-angle-left"></i>
                                                        {{ \App\Models\Category::find($category_id)->getTranslation('name') }}
                                                    </a>
                                                </li>
                                                @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($category_id) as $key => $id)
                                                    <li class="ml-4 mb-2">
                                                        <a class="text-reset fs-14" href="{{ route('products.category', \App\Models\Category::find($id)->slug) }}">{{ \App\Models\Category::find($id)->getTranslation('name') }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="bg-white shadow-sm rounded mb-3">
                                    <div class="fs-15 fw-600 p-3 border-bottom">
                                        {{ translate('Price range')}}
                                    </div>
                                    <div class="p-3">
                                        <div class="aiz-range-slider">
                                            <div
                                                id="input-slider-range"
                                                data-range-value-min="@if(\App\Models\Product::count() < 1) 0 @else {{ \App\Models\Product::min('unit_price') }} @endif"
                                                data-range-value-max="@if(\App\Models\Product::count() < 1) 0 @else {{ \App\Models\Product::max('unit_price') }} @endif"
                                            ></div>

                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    <span class="range-slider-value value-low fs-14 fw-600 opacity-70"
                                                        @if (isset($min_price))
                                                            data-range-value-low="{{ $min_price }}"
                                                        @elseif($products->min('unit_price') > 0)
                                                            data-range-value-low="{{ $products->min('unit_price') }}"
                                                        @else
                                                            data-range-value-low="0"
                                                        @endif
                                                        id="input-slider-range-value-low"
                                                    ></span>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <span class="range-slider-value value-high fs-14 fw-600 opacity-70"
                                                        @if (isset($max_price))
                                                            data-range-value-high="{{ $max_price }}"
                                                        @elseif($products->max('unit_price') > 0)
                                                            data-range-value-high="{{ $products->max('unit_price') }}"
                                                        @else
                                                            data-range-value-high="0"
                                                        @endif
                                                        id="input-slider-range-value-high"
                                                    ></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @foreach ($attributes as $attribute)
                                    <div class="bg-white shadow-sm rounded mb-3">
                                        <div class="fs-15 fw-600 p-3 border-bottom">
                                            {{ translate('Filter by') }} {{ $attribute->getTranslation('name') }}
                                        </div>
                                        <div class="p-3">
                                            <div class="aiz-checkbox-list">
                                                @foreach ($attribute->attribute_values as $attribute_value)
                                                    <label class="aiz-checkbox">
                                                        <input
                                                            type="checkbox"
                                                            name="selected_attribute_values[]"
                                                            value="{{ $attribute_value->value }}" @if (in_array($attribute_value->value, $selected_attribute_values)) checked @endif
                                                            onchange="filter()"
                                                        >
                                                        <span class="aiz-square-check"></span>
                                                        <span>{{ $attribute_value->value }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                @if (get_setting('color_filter_activation'))
                                    <div class="bg-white shadow-sm rounded mb-3">
                                        <div class="fs-15 fw-600 p-3 border-bottom">
                                            {{ translate('Filter by color')}}
                                        </div>
                                        <div class="p-3">
                                            <div class="aiz-radio-inline">
                                                @foreach ($colors as $key => $color)
                                                <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="{{ $color->name }}">
                                                    <input
                                                        type="radio"
                                                        name="color"
                                                        value="{{ $color->code }}"
                                                        onchange="filter()"
                                                        @if(isset($selected_color) && $selected_color == $color->code) checked @endif
                                                    >
                                                    <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                        <span class="size-30px d-inline-block rounded" style="background: {{ $color->code }};"></span>
                                                    </span>
                                                </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                {{-- <button type="submit" class="btn btn-styled btn-block btn-base-4">Apply filter</button> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-9 col-md-9">
                        <ul class="breadcrumb bg-transparent p-0">
                            <li class="breadcrumb-item opacity-50">
                                <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                            </li>
                            @if(!isset($category_id))
                                <li class="breadcrumb-item fw-600  text-dark">
                                    <a class="text-reset" href="{{ route('search') }}">"{{ translate('All Categories')}}"</a>
                                </li>
                            @else
                                <li class="breadcrumb-item opacity-50">
                                    <a class="text-reset" href="{{ route('search') }}">{{ translate('All Categories')}}</a>
                                </li>
                            @endif
                            @if(isset($category_id))
                                <li class="text-dark fw-600 breadcrumb-item">
                                    <a class="text-reset" href="{{ route('products.category', \App\Models\Category::find($category_id)->slug) }}">"{{ \App\Models\Category::find($category_id)->getTranslation('name') }}"</a>
                                </li>
                            @endif
                        </ul>

                        <div class="text-left">
                            <div class="row gutters-5 flex-wrap align-items-center">
                                <div class="col-lg col-10">
                                    <h1 class="h6 fw-600 text-body">
                                        @if(isset($category_id))
                                            {{ \App\Models\Category::find($category_id)->getTranslation('name') }}
                                        @elseif(isset($query))
                                            {{ translate('Search result for ') }}"{{ $query }}"
                                        @else
                                            {{ translate('All Products') }}
                                        @endif
                                    </h1>
                                    <input type="hidden" name="keyword" value="{{ $query }}">
                                </div>
                                <div class="col-2 col-lg-auto d-xl-none mb-lg-3 text-right">
                                    <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                        <i class="la la-filter la-2x"></i>
                                    </button>
                                </div>
                                <div class="col-6 col-lg-auto mb-3 w-lg-200px">
                                    @if (Route::currentRouteName() != 'products.brand')
                                        <label class="mb-0 opacity-50">{{ translate('Brands')}}</label>
                                        <select class="form-control form-control-sm aiz-selectpicker" data-live-search="true" name="brand" onchange="filter()">
                                            <option value="">{{ translate('All Brands')}}</option>
                                            @foreach (\App\Models\Brand::all() as $brand)
                                                <option value="{{ $brand->slug }}" @isset($brand_id) @if ($brand_id == $brand->id) selected @endif @endisset>{{ $brand->getTranslation('name') }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>
                                <div class="col-6 col-lg-auto mb-3 w-lg-200px">
                                    <label class="mb-0 opacity-50">{{ translate('Sort by')}}</label>
                                    <select class="form-control form-control-sm aiz-selectpicker" name="sort_by" onchange="filter()">
                                        <option value="newest" @isset($sort_by) @if ($sort_by == 'newest') selected @endif @endisset>{{ translate('Newest')}}</option>
                                        <option value="oldest" @isset($sort_by) @if ($sort_by == 'oldest') selected @endif @endisset>{{ translate('Oldest')}}</option>
                                        <option value="price-asc" @isset($sort_by) @if ($sort_by == 'price-asc') selected @endif @endisset>{{ translate('Price low to high')}}</option>
                                        <option value="price-desc" @isset($sort_by) @if ($sort_by == 'price-desc') selected @endif @endisset>{{ translate('Price high to low')}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="min_price" value="">
                        <input type="hidden" name="max_price" value="">
                        <div class="row gutters-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-2">
                            @foreach ($products as $key => $product)
                                <div class="col">
                                    @include('frontend.partials.product_box_1',['product' => $product])
                                </div>
                            @endforeach
                        </div>
                        <div class="aiz-pagination aiz-pagination-center mt-4">
                            {{ $products->appends(request()->input())->links() }}
                        </div>
                    </div>
                     <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 gutters-5 d-none-mobile">
                         <div class="mt-5 pt-5 gutters-5">
                           <div class="under-hero-slider mt-4 ad-type-first">
                                    
                                         <a
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-320px ls-is-cached lazyloaded mt-sm-details" src="{{ static_asset('assets/img/Todaydeal.jpg') }}" data-src="" alt="" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                           
                                         <a href=""
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-320px ls-is-cached lazyloaded mt-sm-details" src="{{ static_asset('assets/img/Voucher-offer.jpg') }}" data-src="" alt="" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                             <a href=""
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-320px ls-is-cached lazyloaded mt-sm-details" src="{{ static_asset('assets/img/Buy-more-&-save-more.jpg') }}" data-src="" alt="ads3" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                             <a href=""
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-320px ls-is-cached lazyloaded mt-sm-details" src="{{ static_asset('assets/img/buy1-get1.jpg') }}" data-src="" alt="" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                           
                                             <a href=""
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-320px ls-is-cached lazyloaded mt-sm-details" src="{{ static_asset('assets/img/up-to-50-off.jpg') }}" data-src="" alt="" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                            
                               
                            </div>
                            </div>
                            
                             <div class="gutters-5">
                           <div class="under-hero-slider mt-2 ad-type-second">
                                         <a
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-340px ls-is-cached lazyloaded" src="{{ static_asset('assets/img/up-to-50-off.jpg') }}" data-src="" alt="" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                           
                                         <a href=""
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-340px ls-is-cached lazyloaded" src="{{ static_asset('assets/img/Buy-more-&-save-more.jpg') }}" data-src="" alt="" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                             <a href=""
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-340px ls-is-cached lazyloaded" src="{{ static_asset('assets/img/buy1-get1.jpg') }}" data-src="" alt="ads3" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                             <a href=""
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-340px ls-is-cached lazyloaded" src="{{ static_asset('assets/img/Voucher-offer.jpg') }}" data-src="" alt="" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                           
                                             <a href=""
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-340px ls-is-cached lazyloaded" src="{{ static_asset('assets/img/Todaydeal.jpg') }}" data-src="" alt="" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                               
                            </div>
                            </div>
                            

                           <div class="gutters-5">
                           <div class="under-hero-slider mt-4 ad-type-third">
                                         <a
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-330px ls-is-cached lazyloaded" src="{{ static_asset('assets/img/Buy-more-&-save-more.jpg') }}" data-src="" alt="" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                           
                                         <a href=""
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-330px ls-is-cached lazyloaded" src="{{ static_asset('assets/img/buy1-get1.jpg') }}" data-src="" alt="" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                             <a href=""
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-330px ls-is-cached lazyloaded" src="{{ static_asset('assets/img/Todaydeal.jpg') }}" data-src="" alt="ads3" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                             <a href=""
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-330px ls-is-cached lazyloaded" src="{{ static_asset('assets/img/Voucher-offer.jpg') }}" data-src="" alt="" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                                           
                                             <a href=""
                                              class="d-block">
                                                    <img class="img-fluid mx-auto h-225px h-md-330px ls-is-cached lazyloaded"  src="{{ static_asset('assets/img/up-to-50-off.jpg') }}" data-src="" alt="" onerror="this.onerror=null;this.src='https://sobkisubazar.com/public/assets/img/placeholder.jpg';">
                                            </a>
                               
                            </div>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection

@section('script')

<!--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>-->
<!--    <script type="text/javascript">-->
<!--        function filter(){-->
<!--            $('#search-form').submit();-->
<!--        }-->
<!--        function rangefilter(arg){-->
<!--            $('input[name=min_price]').val(arg[0]);-->
<!--            $('input[name=max_price]').val(arg[1]);-->
<!--            filter();-->
<!--        }-->
<!--    </script>-->

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        function filter(){
            $('#search-form').submit();
        }
        function rangefilter(arg){
            $('input[name=min_price]').val(arg[0]);
            $('input[name=max_price]').val(arg[1]);
            filter();
        }
    </script>
    
    <script> 
    $('.under-hero-slider').slick({
    slidesToShow: 1,
    autoplay: true,
    autoplaySpped: 1500,
    arrows: false,
    dots: false,
    fade: true,
    pauseOnHover: false,
    });
</script>

@endsection
