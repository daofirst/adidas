<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('style/css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('style/css/public.css')}}">
    <script src="{{ asset('style/js/vendor.js')}}"></script>
    <script src="{{ asset('style/js/reset.js')}}"></script>
    <script type="text/javascript" src="{{ asset('style/js/layer.js')}}"></script>
    <title>登录</title>
</head>
<body>
<div class="m-login">
    <form action="" class="login-form">
        <div class="form-item text-c">
            <img src="{{ asset('style/images/login_logo.png')}}" alt="" class="login-icon">
        </div>
        <div class="form-item">
            <input type="text" placeholder="账号" name="user_name" class="form-input login-radus " id="Login_name">
        </div>
        <div class="form-item">
            <input type="password" placeholder="密码" name="password" class="form-input login-radus " id="Login_pwd">
        </div>
        <div class="form-item">
            <div class="login-btn login-radus" id="Submit_btn">登 录</div>
        </div>
    </form>
</div>
</body>
<script>
    $("#Submit_btn").click(function(){
        if($("#Login_name").val()==""){
            layer.open({
                content: '账号不能为空！'
                ,btn: 'OK'
            });
            return false;
        }else if($("#Login_pwd").val()==""){
            layer.open({
                content: '密码不能为空！'
                ,btn: 'OK'
            });
            return false;
        }else {
            $.ajax({
                type: 'post',
                url: "",
                data: $(".login-form").serializeArray(),
                dataType: "json",
                success: function(data){
                    if(data.code=="0"){
                        window.location=data.href;
                    }else {
                        layer.open({
                            content: data.message
                            ,btn: 'OK'
                        });
                    }
                },error:function(data){
                    layer.open({
                        content: data.message
                        ,btn: 'OK'
                    });
                }
            });
        }
    })
</script>
</html>