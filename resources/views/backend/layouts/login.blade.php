<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap -->
    <link href="{{url('/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('/css/font-awesome.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('/css/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{url('/css/animate.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('/css/custom.css')}}" rel="stylesheet">
</head>

<body style="background-color:rgb(24, 24, 24);" class="login">

    <div>



    <div class="center">

        @if(session()->has('message'))
        <div  class="row" style="padding: 50px;">
            <span class="alert alert-warning">{{session()->get('message')}}</span>
        </div>
        @endif

    </div>


        <div class="login-box">




                    <form action="{{route('login_user')}}" method="post">



                        @csrf






                            <p><h2>LOGIN</h2></p>











                        <div  class="form-group has-feedback">
                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="User Name" autocomplete="off">
                            <span  class="fa fa-user-circle-o form-control-feedback"></span>

                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password" autocomplete="off">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>



                        <div >

                            <div class="col-xs-4">

                            </div>
                            <!-- /.col -->
                            <div  class="col-xs-8">
                                <a><button class="button button2" style="background-color: #0c0c0c00" type="submit"> Sign In</button></a>
                                {{-- <button  type="submit" class="btn btn-primary btn-block btn-flat"> Sign In</button> --}}
                            </div>

                            <!-- /.col -->
                        </div>

                       





                        <a>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>

                            <p> If you forget your password, contact with admin.</p>
                        </a>

                    </form>






        </div>



        {{-- <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="{{route('login_user')}}" method="post">
        @csrf
        <h1>Log in your Account</h1>








        <div>

            @if(session()->has('message'))
            <div class="row" style="padding: 50px;">
                <span class="alert alert-warning">{{session()->get('message')}}</span>
            </div>
            @endif

        </div>

        <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" id="username" placeholder="User Name"
                autocomplete="off">
            <span class="fa fa-user-circle-o form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                autocomplete="off">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>



        <div class="row">
            <div class="col-xs-4">

            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
        </div>

        <p style="color:rgb(255, 0, 0);"> <br>If you forget your password, contact with admin.</p>
        <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>

            <p> If you forget your password, contact with admin.</p>
        </a>
        </form>
        </section>
    </div>


    </div> --}}


    </div>

</body>

</html>
<style>
    html {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: linear-gradient(#141e30, #243b55);
    }

    .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, .5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }

    .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }

    .login-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
    }

    .login-box a:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 100px #03e9f4;
    }

    .login-box a span {
        position: absolute;
        display: block;
    }

    .login-box a span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
    }

    @keyframes btn-anim1 {
        0% {
            left: -100%;
        }

        50%,
        100% {
            left: 100%;
        }
    }

    .login-box a span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
    }

    @keyframes btn-anim2 {
        0% {
            top: -100%;
        }

        50%,
        100% {
            top: 100%;
        }
    }

    .login-box a span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
    }

    @keyframes btn-anim3 {
        0% {
            right: -100%;
        }

        50%,
        100% {
            right: 100%;
        }
    }

    .login-box a span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
    }

    @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }

        50%,
        100% {
            bottom: 100%;
        }
    }

</style>
<style>
.center {
    text-align: center;

  }
</style>
<style>
    .button {
      border: none;
      color: white;
      padding: 0% 0%;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 0px 0px;
      transition-duration: 0.4s;
      cursor: pointer;
    }

    .button1 {
      background-color: white;
      color: black;
      border: 2px solid #4CAF50;
    }

    .button1:hover {
      background-color: #4CAF50;
      color: white;
    }

    .button2 {
      background-color: rgba(255, 255, 255, 0);
      color: rgb(16, 213, 231);
      border: 1px solid #008bba00;
    }

    .button2:hover {
      background-color: #008bba00;
      color: white;
    }

    </style>


