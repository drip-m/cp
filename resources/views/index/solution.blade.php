@extends('layout.app')
@section('content')

    <div class="page_style sublanmupage page_l67_sl650">

        @include('layout._top')

        <div class="main_box main_box_style1">
            <div class="main_box_inner">
                <div class="main_box_inner_left">
                    <div id="nav_109" class="nav_box nav_box_menu">

                        <div class="nav_title"><span class="nav_sign">解决方案</span><span class="nav_more"></span></div>
                        <div class="en_sign">product</div>
                        <div id="nav_menu_109" class="nav_menu">
                            <ul id="rootul_109">
                                @foreach ($class as $k => $c)
                                    <li id="sl650"><a href="{{ route('solution', $k) }}" class="sla650">{{ $c }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        shut_allsubnav("rootul_109");
                        expand_subnav("sl650", "0");
                    </script>

                    @include('layout._contact')

                </div>
                <div class="main_box_inner_right">
                    <div class="current_location current_location_650">
                        <ul>
                            <li class="current_location_1">当前位置：<a href=/>首页</a> &gt; <a href="../product/"
                                                                                         class="cl_1">解决方案</a></li>
                        </ul>
                    </div>
                    <div class="sublanmu_box sublanmu_box_650">
                        <div class="sublanmu_content sublanmu_content_product">
                            <ul class="product_pic">

                                @foreach ($solutions as $solution)
                                <li>
                                    <a href="#" target="_self"><img
                                                src="{{ URL::asset('upload/' . $solution->image) }}"
                                                border="0"></a>
                                    <span class="title">
<a href="#" target="_self" title="HL-193">{{ $solution->title }}</a></span>
                                </li>
                                @endforeach
                            </ul>
                            <div class="clear"></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="clear main_box_inner_bottom"></div>
        </div>

    </div>

@endsection