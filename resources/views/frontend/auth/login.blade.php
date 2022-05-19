<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Đăng Nhập</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-top-fixed/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->

    <style>
        @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css);
@import url(http://fonts.googleapis.com/css?family=Titillium+Web&subset=latin,latin-ext);
    body {
        min-height: 75rem;

    }

    .login,
    .image {
        min-height: 100vh;
    }
     .kpx_btn-facebook {background: #3b5998; -webkit-transition: all 0.5s ease-in-out;
     -moz-transition: all 0.5s ease-in-out;
       -o-transition: all 0.5s ease-in-out;
          transition: all 0.5s ease-in-out;}
 .kpx_btn-facebook:hover {background: #172d5e}
.kpx_btn-facebook:focus {background: #fff; color:#3b5998; border-color: #3b5998;}
    

.kpx_btn-google-plus {background: #c32f10; -webkit-transition: all 0.5s ease-in-out;
     -moz-transition: all 0.5s ease-in-out;
       -o-transition: all 0.5s ease-in-out;
          transition: all 0.5s ease-in-out;}
.kpx_socialButtons .kpx_btn-google-plus:hover {background: #6b1301}
 .kpx_socialButtons .kpx_btn-google-plus:focus {background: #fff; color: #c32f10; border-color: #c32f10}

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
          
            <!-- The content half -->
            <div class="col-md-12 bg-light center">
                <div class="login d-flex align-items-center py-5">
                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-xl-5 mx-auto">
                                <h3 class="display-4">Thành viên đăng nhập!</h3>
                                <p class="text-muted mb-4">Điền đầy đủ thông tin đăng nhập hệ thống</p>
                                <form method="post" action="">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <input id="inputEmail11" type="email" placeholder="Email address" required=""
                                            autofocus="" name="email"
                                            class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword2" type="password" name="password" placeholder="Password"
                                            required=""
                                            class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Nhớ mật khẩu</label>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Đăng Nhập</button>

                                    <a style="text-alin:right"  href="{{route('get.email_reset_password')}}">Quên mật khẩu</a>
<p style="text-align:center">Hoặc</p>
                                    <a href="{{route('get.login.social',['social'=>'facebook'])}}" class="btn btn-lg btn-block kpx_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                                        <i class="fa fa-facebook fa-2x"></i>
                                        <span class="hidden-xs"></span>
                                      </a>
                                      <a href="{{route('get.login.social',['social'=>'google'])}}" class="btn btn-lg btn-block kpx_btn-google-plus" data-toggle="tooltip" data-placement="top" title="Google Plus">
                                        <i class="fa fa-google-plus fa-2x"></i>
                                        <span class="hidden-xs"></span>
                                      </a>
                                    <div class="text-center d-flex justify-content-between mt-4">
                                        <p>Bạn chưa có tài khoản vui lòng đăng kí<a href="{{route('get.register')}}"
                                                class="font-italic text-muted">
                                                <u>Tại đây</u></a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
            <!-- End -->
        </div>
    </div>
    <!-- Bootstrap core JavaScript
         ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write(
        '<script src="../../assets/js/vendor/bootstrap/js/bootstrap.bundle.min.js"><\/script>')
    </script>

    <script>
         $(function () {
         $('[data-toggle="tooltip"]').tooltip()
    })

    


 


    </script>
</body>

</html>
