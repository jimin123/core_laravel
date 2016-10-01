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
        <h1>Xin chào <span style="color:red;"><?php echo $this->session->username; ?></span></h1>
        <h2>Chúc mừng bạn đã đăng nhập thành công</h2>
        <p>Bạn đã là thành viên của nhóm và sẽ đươc nhận bài viết mới nhất của nhóm .</p>
        <div class="row">
                    <div class="col-md-7">
                        <a href="#">
                            <img class="img-responsive" src="<?php echo base_url() ?>public/img/700x302.jpg"/>
                        </a>
                    </div>
                    <div class="col-md-5">
                        <h3>Bài Học 1</h3>
                        <h4>Navigation trong Bootstrap 3</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                        <a href="#" class="btn btn-primary">Xem Bài <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
            </div>
      </div>
    </div>