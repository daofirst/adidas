
<!DOCTYPE html>
<html lang="en">
<!-- view/codeLogin -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('style/css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('style/css/swipeslider.css')}}">
    <link rel="stylesheet" href="{{ asset('style/css/public.css')}}">
    <script src="{{ asset('style/js/vendor.js')}}"></script>
    <script src="{{ asset('style/js/reset.js')}}"></script>
    <title>首页</title>
</head>
<style>
    .fl {float: left;}
    .fr {float: right;}
    .m-ind {padding-bottom: 3rem;}
    .swipslider {    padding-top: 63%!important;overflow: visible;}
    .m-banner {padding-top: 0.7rem;}
    .sw-next-prev {display: none;}
    .sw-slide img {border-top-left-radius: 1.26667rem;border-top-right-radius: 1.26667rem;border-bottom-left-radius: 1.26667rem;border-bottom-right-radius: 1.26667rem;}
    .ind_border_cicle {border-top-left-radius: 50%;border-top-right-radius: 50%;border-bottom-left-radius: 50%;border-bottom-right-radius: 50%;}
    .ind_border_radius{border-top-left-radius: 0.5rem;border-top-right-radius: 0.5rem;border-bottom-left-radius: 0.5rem;border-bottom-right-radius: 0.5rem;}
    .sw-bullet {bottom: -10%;}
    .sw-bullet li {background: rgba(0,0,0,0.5);}
    .sw-bullet li.active {background: #4990e1;}
    .m-ind-ico {width: 90%;margin:3rem auto;margin-bottom: 2rem;}
    .m-ind-item {width: 33.33%;float: left;}
    .m-ind-icon {width: 3.5rem;padding:0.4rem 0;margin:0 auto;text-align: center;}
    .m-ind-icon1 {
        background: -webkit-linear-gradient(#00e0da, #00bfb3); /* Safari 5.1 - 6.0 */
        background: -o-linear-gradient(#00e0da, #00bfb3); /* Opera 11.1 - 12.0 */
        background: -moz-linear-gradient(#00e0da, #00bfb3); /* Firefox 3.6 - 15 */
        background: linear-gradient(#00e0da, #00bfb3); /* 标准的语法 */
    }
    .m-ind-icon2 {
        background: -webkit-linear-gradient(#4bd9fa, #24b1f1); /* Safari 5.1 - 6.0 */
        background: -o-linear-gradient(#4bd9fa, #24b1f1); /* Opera 11.1 - 12.0 */
        background: -moz-linear-gradient(#4bd9fa,#24b1f1); /* Firefox 3.6 - 15 */
        background: linear-gradient(#4bd9fa,#24b1f1); /* 标准的语法 */
    }
    .m-ind-icon3 {
        background: -webkit-linear-gradient(#fed100, #fea400); /* Safari 5.1 - 6.0 */
        background: -o-linear-gradient(#fed100, #fea400); /* Opera 11.1 - 12.0 */
        background: -moz-linear-gradient(#fed100, #fea400); /* Firefox 3.6 - 15 */
        background: linear-gradient(#fed100, #fea400); /* 标准的语法 */
    }

    .m-ind-icon img{width: 2.2rem;}
    .m-ind-list {position:relative;padding: 0.8rem 0.5rem ;padding-left:0;border-bottom: 1px solid #ddd;margin-left: 0.6rem;padding-bottom: 1.4rem;}
    .m-ind-list-pic {background: #000;text-align: center;width: 4rem;height: 4rem;}
    .m-ind-list-pic img {width: 78%;margin-top: 1.56rem;}
    .m-ind-list-cnt {padding-left: 0.7rem;width: 70%;}
    .m-ind-list-name {max-width: 100%;color:#000;font-size: 0.9rem;line-height: 1.5rem;}
    .m-ind-list-num {color:#e90704;font-size: 0.8rem;line-height: 1.2rem;}
    .m-ind-list-project {color:#8f8f92;font-size: 0.8rem;line-height: 1.2rem;}
    .m-ellipsis {overflow: hidden;
        text-overflow:ellipsis;
        white-space: nowrap;}
    .m-ind-link {display: block;}
    .m-ind-next {display: block;width: 2rem;height: 3rem;position: absolute;top:0rem;right: 0rem;background: url("../images/icon-next.png") no-repeat center center; }
</style>
<body>
<div class="m-ind">
    <div class="m-banner">
        <div id="content_slider" class="swipslider">
            <ul class="sw-slides clearfix">
                <li class="sw-slide">
                    <img src="../images/index_banner.jpg" alt="">
                </li>
                <li class="sw-slide">
                    <img src="../images/index_banner.jpg" alt="">
                </li>
                <li class="sw-slide">
                    <img src="../images/index_banner.jpg" alt="">
                </li>
            </ul>
        </div>
    </div>
    <div class="m-ind-ico clearfix">
        <div class="m-ind-item">
            <div class="m-ind-icon m-ind-icon1 ind_border_radius">
                <img src="../images/index_house.png" alt="">
            </div>
        </div>
        <div class="m-ind-item">
            <div class="m-ind-icon m-ind-icon2 ind_border_radius">
                <img src="../images/index_loading.png" alt="">
            </div>
        </div>
        <div class="m-ind-item">
            <div class="m-ind-icon m-ind-icon3 ind_border_radius">
                <img src="../images/index_tel.png" alt="">
            </div>
        </div>
    </div>
    <div class="m-ind-shop">
        <div class="m-ind-list clearfix">
            <a href="javascript:;" class="m-ind-link clearfix">
                <div class="m-ind-list-pic fl ind_border_cicle">
                    <img src="{{ asset('style/images/login_logo.png')}}" alt="">
                </div>
                <div class="m-ind-list-cnt fl">
                    <div class="m-ind-list-name m-ellipsis">阿迪达斯门店阿迪达斯门店阿迪达斯门店阿迪达斯门店</div>
                    <div class="m-ind-list-num m-ellipsis">门店编码：34324234</div>
                    <div class="m-ind-list-project">维修项目</div>
                </div>
                <span class="m-ind-next"></span>
            </a>
        </div>
        <div class="m-ind-list clearfix">
            <a href="javascript:;" class="m-ind-link clearfix">
                <div class="m-ind-list-pic fl ind_border_cicle">
                    <img src="{{ asset('style/images/login_logo.png')}}" alt="">
                </div>
                <div class="m-ind-list-cnt fl">
                    <div class="m-ind-list-name m-ellipsis">阿迪达斯门店阿迪达斯门店阿迪达斯门店阿迪达斯门店</div>
                    <div class="m-ind-list-num m-ellipsis">门店编码：34324234</div>
                    <div class="m-ind-list-project">维修项目</div>
                </div>
                <span class="m-ind-next"></span>
            </a>
        </div>
        <div class="m-ind-list clearfix">
            <a href="javascript:;" class="m-ind-link clearfix">
                <div class="m-ind-list-pic fl ind_border_cicle">
                    <img src="{{ asset('style/images/login_logo.png')}}" alt="">
                </div>
                <div class="m-ind-list-cnt fl">
                    <div class="m-ind-list-name m-ellipsis">阿迪达斯门店阿迪达斯门店阿迪达斯门店阿迪达斯门店</div>
                    <div class="m-ind-list-num m-ellipsis">门店编码：34324234</div>
                    <div class="m-ind-list-project">维修项目</div>
                </div>
                <span class="m-ind-next"></span>
            </a>
        </div>
        <div class="m-ind-list clearfix">
            <a href="javascript:;" class="m-ind-link clearfix">
                <div class="m-ind-list-pic fl ind_border_cicle">
                    <img src="{{ asset('style/images/login_logo.png')}}" alt="">
                </div>
                <div class="m-ind-list-cnt fl">
                    <div class="m-ind-list-name m-ellipsis">阿迪达斯门店阿迪达斯门店阿迪达斯门店阿迪达斯门店</div>
                    <div class="m-ind-list-num m-ellipsis">门店编码：34324234</div>
                    <div class="m-ind-list-project">维修项目</div>
                </div>
                <span class="m-ind-next"></span>
            </a>
        </div>
    </div>
</div>
<div class="m-foot">
    <div class="m-nav-module clearfix">
        <a href="#" class="m-nav-item m-nav-item--active">
            <img src="{{ asset('style/images/bottom01_hover.png')}}" alt="" class="m-nav-img">
            <div>首页</div>
        </a>
        <a href="#" class="m-nav-item">
            <img src="{{ asset('style/images/bottom02.png')}}" alt="" class="m-nav-img">
            <div>订单</div>
        </a>
        <a href="#" class="m-nav-item">
            <img src="{{ asset('style/images/bottom03.png')}}" alt="" class="m-nav-img">
            <div>我的</div>
        </a>
    </div>
</div>
<script type="text/javascript" src="{{ asset('style/js/swipeslider.min.js')}}"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#content_slider').swipeslider({
            transitionDuration: 600,
            autoPlayTimeout: 3000,
            sliderHeight: '300px'
        });

    });
</script>
</body>
</html>
