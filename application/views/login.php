<body class="login__background">
	<div >
		<!--header-->
		<div class="agileheader">
			<h1>Young Indian Foundation</h1>
		</div>
		<!--//header-->
		<!--main-->
		<section class="login">
        <span><?php if($adminLoginSuccess){
                     echo "adminLoginSuccess successfully" ;
                    } if($adminLoginFailed){
                        echo "adminLoginFailed failed";
                    } ?></span>
			<div class="login__main">
				<h2>Admin Login</h2>
				<div class="w3ls-form">
					<form action="./login" method="POST">
						<div class="email-w3ls">
							<input type="email" name="user_name" placeholder="E-mail" required="required">
							<span class="icon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
						</div>
						<div class="w3ls-password">
							<input type="password" name="password" placeholder="Password" required="required">
							<span class="icon3"><i class="fa fa-lock" aria-hidden="true"></i></span>
						</div>
						<!-- <span><input type="checkbox" />Remember Me</span>
					<h6><a href="#">Forgot Password?</a></h6> -->
						<div class="clear"></div>
						<input type="submit" value="login" name="login-submit">
					</form>
				</div>
			</div>
		</section>
		<!--//main-->
	</div>

</body>
