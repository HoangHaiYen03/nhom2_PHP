
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
                    <input name="name" class="form-control _ge_de_ol" type="text" placeholder="Nhập tên của bạn" required="" aria-required="true">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control _ge_de_ol" placeholder="Nhập Email" required="" aria-required="true">
                  </div>
  
                  <div class="form-group">
                    <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Nhập mật khẩu" required="" aria-required="true">
                  </div>
                  <div class="form-group">
                    <input type="password" name="cpassword" class="form-control _ge_de_ol" type="text" placeholder="Xác nhận mật khẩu" required="" aria-required="true">
                  </div>
  
                  <div class="checkbox form-group">
                    Đã có tài khoản<a href="/login">Đăng nhập ngay</a>
                  </div>
                  @csrf
                  <div class="form-group">
                    <button class="_btn_04" type = "submit">
                      Đăng ký
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