
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
    <p>Note:Tên tài khoản trùng tên mật khẩu trong CSDL.</p>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="height:500px;">
        <div class="container">
            <div class="example">
                <h2 style="text-align:center; color:blue; font-weight:bold; margin-bottom:40px;">Đăng Nhập</h2>
                <div class="text-center" style="color:#0FC;" id="username_error"><?php echo form_error('login')?></div>
                <form class="form-horizontal" method="POST">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Username:</label>
                    <div class="col-sm-8">
                      <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="username" value="<?php echo set_value('username') ?>">
                      <div class="error" id="username_error"><?php echo form_error('username')?></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
                    <div class="col-sm-8">
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="password">
                      <div class="error" id="username_error"><?php echo form_error('password')?></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="remember" value="1"> Remember me
                        </label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" name="login" class="btn btn-info" value="Sign in"/>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
   
