@extends('layout.app')
@section('content')

    <div class="page_style sublanmupage page_l64_sl538">

        @include('layout._top')

        <div class="main_box main_box_style1">
            <div class="main_box_inner">
                <div class="main_box_inner_left">
                    <div id="nav_106" class="nav_box nav_box_menu">

                        <div class="nav_title"><span class="nav_sign">资料下载</span><span class="nav_more"></span></div>
                        <div class="en_sign">download</div>
                        <div id="nav_menu_106" class="nav_menu">
                            <ul id="rootul_106">
                                @foreach ($class as $k => $c)
                                <li id="sl538"><a href="{{ route('download', $k) }}" class="sla538">{{ $c }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        shut_allsubnav("rootul_106");
                        expand_subnav("sl538", "0");
                    </script>

                    @include('layout._contact')

                </div>
                <div class="main_box_inner_right">
                    <div class="current_location current_location_538">
                        <ul>
                            <li class="current_location_1">当前位置：<a href=/>首页</a> &gt; <a href="#" class="cl_1">资料下载</a>
                                </li>
                        </ul>
                    </div>
                    <div class="sublanmu_box sublanmu_box_538">
                        <div class="sublanmu_content sublanmu_content_download">
                            <ul class="sublanmu_dl download">

                                @foreach ($downloads as $download)
                                <li><span class="title"><a href="{{ $download->url }}" target="_blank" title="{{ $download->title }}">{{ $download->title }}</a></span>
                                    <span class="date">{{ $download->created_at }}</span>
                                    <span class="clear"></span>
                                </li>
                                @endforeach

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="clear main_box_inner_bottom"></div>
        </div>

    </div>
@endsection