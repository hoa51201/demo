<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Xác thực email</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-top-fixed/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->

    <style>
    body {
        min-height: 75rem;

    }

    .login,
    .image {
        min-height: 100vh;
    }

    .bg-image {
        background-image: url('https://res.cloudinary.com/mhmd/image/upload/v1555917661/art-colorful-contemporary-2047905_dxtao7.jpg');
        background-size: cover;
        background-position: center center;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>
            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                
                                <p class="text-muted mb-4">Để tiếp tục bạn hãy nhấn vào xác thực email để chúng tôi đảm bảo rằng email này có thật</p>
                                <form method="post" action="">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <input id="inputEmail11" type="email" placeholder="Email address" required=""
                                            autofocus="" name="email_reset"
                                            class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    
                                    
                                    <button type="submit"
                                        class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Gửi email xác thực</button>
                                   
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
</body>

</html>
