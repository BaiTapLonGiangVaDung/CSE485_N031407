<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="shortcut icon" type="image/x-icon" href="image/icon/photo-camera.png">
</head>
<body >
	<div class="padding-login">
        <div class="container-fluid" align="center">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="padding-sly" style="padding-bottom: 15px;padding-top: 50px">
						<h1 class="site-title" style="font-size: 65px">
							<a href="index.php">Slytherin</a>
						</h1>
						<p class="site-tiny">Khám phá thế giới muôn màu</p>
					</div>
                    <b style="font-size:23px">Đăng nhập</b>
                    <p style="margin-bottom: 34px; font-size: 14px;">Mừng bạn quay trở lại.</p>
                    <a href="#" style="text-decoration:none">
                        <div class="fb-login">
                            <p id="fb_p"> Facebook </p>
                        </div>
                    </a>
                    <p>OR</p>
                    <div id="para">
                        <p align="left" style="margin-bottom: 0px">Tài khoản </p>
                        <input type="text" id="txtUsername" name="txtUsername" style="height: 40px;" /> <br/>
                        <p align="left" style="margin-bottom: 0px">Mật khẩu</p>
                        <input type="password" id="txtPassword" name="txtPassword" style="height: 40px;"/>
                    </div>
                    <div id="btnLogin">
                        <p id="login_p"> Đăng nhập </p>
                    </div>
                    <br>
                    <p>
                        Bạn chưa có tài khoản ?
                        <a href="signin.php">Đăng ký</a>
                    </p>
                    <div id="error"></div>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="JS/customs.js"></script>
    <script src="JS/checklogin.js"></script>
</body>
</html>