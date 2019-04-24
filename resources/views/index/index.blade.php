@extends('layout.app')
@section('content')

    <div class="page_style lanmupage page_l61">

        @include('layout._top')

        <div class="main_box main_box_style">
            <div class="main_box_inner">


                <!-- <div style="width:1100px;background:url(css/images/gg.jpg) no-repeat;height:30px;margin:0 auto;">
                <div style="margin-left:138px;background:#D6D6D6;padding-left:15px;"><div class="gonggao marquee" id="m_179_0"><a class="prev"></a><a class="next"></a>
                  <div class="inner">
                   <ul>

                <li class="zx"><a href="article/20120816/466.html" target="_self" title="栏目管理增加了批量设置和删除等便捷化功能...">栏目管理增加了批量设置和删除等便捷化功能...</a></li>

                <li class="zx"><a href="article/20111103/465.html" target="_self" title="机柜配电解决方案">机柜配电解决方案</a></li>

                <li class="zx"><a href="article/20111103/464.html" target="_self" title="机柜线缆管理解决方案">机柜线缆管理解决方案</a></li>

                <li class="zx"><a href="article/20111103/463.html" target="_self" title="机柜散热解决方案">机柜散热解决方案</a></li>

                <li class="zx"><a href="article/20111103/462.html" target="_self" title="增加字段参数设置、投稿限制和美化附件发布界面">增加字段参数设置、投稿限制和美化附件发布界面</a></li>

                   </ul>
                  </div>

                </div>
                <script type="text/javascript">
                marquee("m_179_0","up",1500);
                </script>
                </div>
                </div> -->


                <div class="tj_pro">
                    <div style="background:url(css/images/tjcp_1.jpg) repeat-x;display:block;width:400px;height:32px;float:left"></div>
                    <div class="cptj_1"><b>推 荐 产 品</b><span style="width:175px;display:block;font-size:12px;">RECOMMENDED PRODUCTS</span>
                    </div>
                    <div style="background:url(css/images/tjcp_1.jpg) repeat-x;display:block;width:400px;height:32px;float:left"></div>
                </div>
                <div class="tj_con">
                    <ul>
                        <li class="tj_con_1"><a href="{{ route('product', 7) }}">传感器产品</a></li>
                        <li class="tj_con_2"><a href="{{ route('product', 6) }}">恒温恒湿控制柜</a></li>
                        <li class="tj_con_3"><a href="{{ route('product', 2) }}">霍尼韦尔自控产品</a></li>
                        <li class="tj_con_4"><a href="{{ route('product', 4) }}">西门子自控产品</a></li>
                    </ul>
                </div>




                <div class="sy_con_1">
                    <div class="title">
                        <img src="css/images/sy_1.png"/><span>Solution</span>解决方案
                    </div>
                    <div class="mero">
                        <a href="{{ route('solution') }}">More+</a>
                    </div>
                </div>
                <div class="cp_con">
                    <ul class="product_pic">
                        @foreach ($solutions as $s)
                        <li style="width:185px;height:275px;">
                            <a href="{{ route('solution_detail', $s->id )}}" target="_self"><img src="upload/{{ $s->image }}"
                                                            border="0" style="width:200px;height:200px;"></a>
                            <span class="title">
<a href="{{ route('solution_detail', $s->id )}}" target="_self" title="HL-193">{{ $s->title}}</a></span>
                        </li>
                        @endforeach
                    </ul>

                </div>


                <div class="sy_con_1">
                    <div class="title">
                        <img src="css/images/sy_2.png"/><span>About us</span>关于我们
                    </div>
                    <div class="mero">
                        <a href="{{ route('about') }}">More+</a>
                    </div>
                </div>
                <div style="clear:both;overflow:hidden;width:1100px;margin:0 auto;margin-top:30px;">
                    <img src="css/images/ab.jpg" style="float:left;"/>
                    <div style="background:url(css/images/ab_2.png) no-repeat;float:right;width:700px;height:180px;padding:10px 10px 10px 10px;color:white;font-family:'Microsoft YaHei';text-align:left;">
                        &nbsp;&nbsp;&nbsp; <strong>{{ env('APP_NAME', 'Laravel') }}</strong>专业致力于中央空调(暖通净化空调）、区域供热系统自控、楼宇自控、热力工程、给排水及建筑智能化自动控制产品设备的开发、生产、销售及其工程配套。

                        <br/>&nbsp;&nbsp;&nbsp;公司是美国霍尼韦尔和德国西门子山东地区的授权代理商。公司在省内外皆有完成项目，因过硬的产品质量和完善的售后服务，而受到客户的一致好评。

                        <br/>&nbsp;&nbsp;&nbsp;产品涉及风机盘管温控器;电动二、三通阀;热交换器出水温度控制阀;温湿度控制器;PLC、DDC直接数字控制器;各种传感器;调节阀;水流开关;新风机组、空气处理机组、制冷站自控;热量表、温控阀;水力平衡阀;自动排气阀;压差表;变频器等;各种配电箱配电柜、强弱电控制柜、GGD国标控制柜、恒温恒湿......

                        <br/>
                    </div>
                </div>

                <div class="sy_con_2">
                    <div class="title">
                        <img src="css/images/sy_3.png"/><span>Quick links</span>快捷链接
                    </div>
                </div>
                <div class="kj">
                    <div class="kj_1">

                        <div class="kj_1_1"><a href="{{ route('about') }}">关于我们<span>About us</span></a></div>
                        <div class="kj_1_2"><a href="{{ route('download') }}">资料下载<span>Data download</span></a></div>
                        <div class="kj_1_3"><a href="{{ route('product') }}">产品中心<span>Product center</span></a></div>
                        <div class="kj_1_4"><a href="{{ route('contact') }}">联系我们<span>Contact us</span></a></div>

                    </div>
                    <div class="kj_2">
                        <script type="text/javascript" src="js/zdyform.js"></script>
                        <form action="aspx/post.aspx" method="post" enctype="multipart/form-data" name="feedback">
                            <div>
                                <ul>
                                    {{--<li class="ly_1">您的姓名</li>--}}
                                    {{--<li><input class="f_tb" id="pa_truename" maxlength="30" size="10" name="pa_truename"--}}
                                               {{--type="text"--}}
                                               {{--style="width:450px;height:30px;border:1px #C2D1D7 solid;border-radius:3px;"/>--}}
                                    {{--</li>--}}
                                    {{--<li class="ly_2">联系方式</li>--}}
                                    {{--<li><input class="f_tb" id="pa_tel" maxlength="30" size="12" name="pa_tel"--}}
                                               {{--type="text"--}}
                                               {{--style="width:450px;height:30px;border:1px #C2D1D7 solid;border-radius:3px;"/>--}}
                                    {{--</li>--}}


                                    <li class="ly_3">微信二维码</li>
                                    <li>
                                        <img style="height: 282px;" src="images/erweima.jpg" alt="">
                                    </li>
                                    <li style="margin-top:-32px;font-size: 20px;" class="ly_3">QQ: 352164624</li>
                                    <li style="font-size: 20px;" class="ly_3">手机: 137xxxxxxxx</li>

                                    {{--<li style="float: left; width: 80px; height: 25px;line-height:25px;color:#5A5A5A;font-weight:bold;font-size:14px;">--}}
                                        {{--验证码：--}}
                                    {{--</li>--}}
                                    {{--<li style="float: left"><input class="f_tb" id="vcode" maxlength="4" size="4"--}}
                                                                   {{--name="vcode" type="text"--}}
                                                                   {{--style="width:80px;border:1px #C2D1D7 solid;border-radius:3px;height:25px"/>--}}
                                    {{--</li>--}}
                                    {{--<li style="clear: both;font-size: 1px; line-height:0px; height:2px">&nbsp;</li>--}}
                                    {{--<li style="clear: both;padding:5px 0 5px 0px"><input class="ok" type="button"--}}
                                                                                         {{--onclick="return set_feedback()"--}}
                                                                                         {{--value=" 提交 "/>--}}
                                </ul>
                            </div>
                            <input type="hidden" name="title" value="0">
                            <input type="hidden" name="checked" value="0"><input type="hidden" name="showcode"
                                                                                 value="0"><input type="hidden"
                                                                                                  name="to"
                                                                                                  value=""><input
                                    type="hidden" name="mailto" value=""><input type="hidden" name="mailreply" value=""><input
                                    type="hidden" name="mailsubject" value=""><input type="hidden" name="mailbody"
                                                                                     value=""><input type="hidden"
                                                                                                     name="insertdatabase"
                                                                                                     value="1"><input
                                    type="hidden" name="siteid" value="1"><input type="hidden" name="formtable"
                                                                                 value="feedback"><input type="hidden"
                                                                                                         name="mustname"
                                                                                                         value="你的姓名,联系方式,所需产品型号及说明,"><input
                                    type="hidden" name="mustfield" value="pa_truename,pa_tel,content,"><input
                                    type="hidden" name="musttype" value="text,text,textarea,">
                        </form>
                        <script type="text/javascript">
                            function set_feedback() {
                                document.forms["feedback"].title.value = document.forms["feedback"].pa_truename.value + "的在线留言";
                                document.forms["feedback"].mailto.value = "";
                                document.forms["feedback"].mailreply.value = "";
                                document.forms["feedback"].mailsubject.value = "";
                                document.forms["feedback"].mailbody.value = "";
                                return Check_ZdyForm("feedback");
                            }

                            function feedback_zdycheck() {
                                return true;
                            }
                        </script>

                    </div>
                    <div class="kj_3">
                        <div class="kj_3_1"><img src="css/images/sy_lx.jpg"></div>
                        <div class="kj_3_2">
                            <ul>
                                <li class="a">{{ env('APP_NAME', 'Laravel') }}</li>
                                <li class="b">0531-87039611</li>
                                <li class="d">13969247033@163.com</li>
                                <li class="e">山东省济南市经四路万达广场B座1103室</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="clear main_box_inner_bottom"></div>
        </div>
    </div></body></html>
    </div>
@endsection
