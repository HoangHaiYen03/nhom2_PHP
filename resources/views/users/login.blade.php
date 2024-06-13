
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/css/style.css" rel="stylesheet">

    <title>{{ $title}}</title>
  </head>
  <body>
    <section class="form-02-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                  <img src="/template/images/user.png">
                </div>
                <form method = "POST">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
                  </div>
  
                  <div class="form-group">
                    <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                  </div>
  
                  <div class="checkbox form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="check" name="rememberme">
                      <label class="form-check-label" for="rememberme" id="check">Remember me</label>
                    </div>
                    <a href="#">Forgot Password</a>
                  </div>
                  Đã có tài khoản<a href="/register" style=" padding-left: 10px;color: #2b3990;">Đăng ký</a>
                  @csrf
                  <div class="form-group">
                    <button class="_btn_04" type = "submit">
                      Login
                    </button>
                  </div>
                  </div>
                </form>
              </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>