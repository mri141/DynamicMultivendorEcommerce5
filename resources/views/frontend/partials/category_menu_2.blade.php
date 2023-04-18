<div class="aiz-category-menu bg-white cat-hover rounded @if(Route::currentRouteName() == 'home') shadow-sm" @else shadow-lg id="category-sidebar" @endif>
    <div class="pr-3 pl-3 pt-3 pb-0 d-none d-lg-block rounded-top all-category position-relative text-left">
        <a href="{{ route('categories.all') }}" class="text-reset">
        <span class="fw-700 fs-21 mr-3 cat-font-size-sm" style="font-family: 'Roboto', sans-serif;">{{ translate('All Category') }}</span>
       
            <!--<span class="d-none d-lg-inline-block">{{ translate('All Categories') }} ></span>-->
        </a>
    </div>
    <ul class="list-unstyled categories no-scrollbar pt-3 pb-2 mb-0 text-left">
        
        <style>
            .aiz-category-menu .category-nav-element:hover > a{
            position: relative;
            z-index: 10;
            background: #eceff1;
            color: #EE3567;
            box-shadow: -2px 3px 5px rgb(0 0 0 / 0.1);
        }
            
            .cat-hova:hover{
                color: #EE3567;
               
            }
            .cat-menu-style{
                line-height: 34px;
                font-size: 17px; 
                font-family: 'Roboto', sans-serif;
            }
            
            
             @media only screen and (min-width:1024px) and (max-width:1440px){
                .cat-font-size-sm {
                    font-size: 20px !important;
                }
                
                .cat-menu-style{
                    font-size: 14px; 
                    line-height: 27px;
                }
            }
            
             @media only screen and (min-width:768px) and (max-width:1024px){
                .cat-font-size-sm {
                    font-size: 20px !important;
                }
                
                .cat-menu-style{
                    font-size: 14px; 
                    line-height: 27px;
                }
            }
            
            
        </style>
        
        
        
        <style>
            .aiz-category-menu .sub-cat-menu2{
             display: none;
            position: absolute;
            width: calc(100% - 17%);
            left: calc(19% - 32px);
            height: calc(98% + 0px);
            overflow: hidden;
            top: 0;
            z-index: 9;
            background-color: #fff;
            overflow-y: auto;
        }
        
        </style>
        
        @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'asc')->get()->take(15) as $key => $category)
            <li class="category-nav-element" data-id="{{ $category->id }}">
                <a href="{{ route('products.category', $category->slug) }}" class="text-truncate text-reset py-1 px-3 d-block" >
                    <span class="cat-name cat-hova cat-menu-style" style="">{{ $category->getTranslation('name') }}</span>
                </a>
                <!--@if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)-->
                    <div class="sub-cat-menu2 c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                <!--@endif-->
            </li>
            
        @endforeach
    </ul>
</div>
