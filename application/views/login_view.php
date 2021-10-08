<section class="user-area ptb-54">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="user-form-content log-in-50 mr-15 container">
                    <h3>Log In</h3>
                    <div class="alert alert-success alert-dismissible fade show dislspalert" role="alert">
                        <strong>Hurray..! </strong> Welcome Back...
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show dislrpalert" role="alert">
                        <strong>Oops..! </strong> Invalid Login...
                    </div>
                    <form id="login" method="post" action="<?php site_url() ?>login/userlogincheck" class="user-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="login-action">
                                    <span class="log-rem">
                                        <input id="remember-2" type="checkbox" />
                                        <label>Keep me logged in</label>
                                    </span>
                                    <span class="forgot-login">
                                        <a href="forgot-password.html">Forgot your password?</a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12">
                                <button onclick="return" class="default-btn" type="submit">
                                    Log in
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="user-form-content ml-15 container">
                    <h3>Register</h3>
                    
                        <div class="alert alert-success alert-dismissible fade show disspalert" role="alert">
                          <strong>Hurray..! </strong> Register Success...
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show disrpalert" role="alert">
                          <strong>Oops..! </strong> Something went wrong please try again later...
                        </div>

                    <form id="register" method="post" action="<?php site_url() ?>login/registeruser" class="user-form">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" placeholde="Name" type="text" name="fname" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" placeholde="Name" type="text" name="lname" />
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group col-12">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" />
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="default-btn register" onclick="return" type="submit">
                                    Register now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

	$(document).ready(function(){
        $('.disspalert').hide();
        $('.disrpalert').hide();
        $('.dislspalert').hide();
        $('.dislrpalert').hide();
		$(document).on('submit', '#register', function (e) {
			e.preventDefault();

			var form = $(this);
			var url = form.attr('action');
			$.ajax({
				type: "POST",
				url: url,
				data: form.serialize(),
				beforeSend: function(){
					console.log("Loading...")
				},
				success: function(data){
                    if(data){
                        setTimeout(function() { 
                            $('.disspalert').hide();
                        }, 3000);
                        $('.disspalert').show();
                    }else{
                        setTimeout(function() { 
                            $('.disrpalert').hide();
                        }, 3000);
                        $('.disrpalert').show();
                    }
				}
			})
		});
		$(document).on('submit', '#login', function (e) {
			e.preventDefault();

			var form = $(this);
			var url = form.attr('action');
			$.ajax({
				type: "POST",
				url: url,
				data: form.serialize(),
				beforeSend: function(){
					console.log("Loading...")
				},
				success: function(data){
                    if(data){
                        setTimeout(function() { 
                            $('.disspalert').hide();
                        }, 3000);
                        $('.disspalert').show();
                    }else{
                        setTimeout(function() { 
                            $('.disrpalert').hide();
                        }, 3000);
                        $('.disrpalert').show();
                    }
				}
			})
		});
        
	});
</script>