    <nav class="navbar navbar-default navbar-fixed-top minh-web" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name_Minh</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="home"><span class="sr-only">(current)</span>Home</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="" data-toggle="dropdown">Account</a>
                    <ul class="dropdown-menu">
                        <li><a href="login">Sign in</a></li>
                        <li><a href="register">Register</a></li>
                        <div class="divider"></div>
                        <li><a href="logout">Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <div class="example" style="border-top:5px solid #4486CF;">
                <p style="color:#00A0B5;font-weight:bold;">TẠO TÀI KHOẢN MỚI</p>
                <P>Đăng ký để tham gia và nhận phần thưởng từ việc ủng hộ</P>
                <form class="form-horizontal" action="" method="POST" enctype="#">
                    <div class="form-group">
                        <div class="col-sm-12">
                          <input type="text" name="username" class="form-control" id="inputUsername3" placeholder="Tên tài khoản" value="<?php echo set_value('username') ?>">
                        </div>
                    </div>
                    <div class="error" id="username_error"><?php echo form_error('username')?></div>
                    <div class="form-group">
                        <div class="col-sm-12">
                          <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <div class="error" id="password_error"><?php echo form_error('password')?></div>
                    <div class="form-group">
                        <div class="col-sm-12">
                          <input type="password" name="re_password" class="form-control" id="inputre_Password3" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>
                    <div class="error" id="re_password_error"><?php echo form_error('re_password')?></div>
                    <div class="form-group">
                        <div class="col-sm-12">
                          <input type="submit" name="submit" class="form-control btn btn-info" value="Đăng Ký">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
