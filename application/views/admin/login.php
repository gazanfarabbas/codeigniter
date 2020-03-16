<style>
    .form_error{font-size: 13px;font-family:Arial;color:red;font-style:italic}
    </style>
<section class="login-wrap mtb-40">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-6">
				
                    <div class="login-box">
                        <h1>Administrator Login</h1>
						<div class="form_error">
					<?php echo validation_errors(); ?>
				</div>
						<?php echo form_open('admin/adminlogin', array('id' => 'adminForm')) ?>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username'); ?>">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>">
                            </div>
                            <div class="form-group">
								<button type="submit" class="btn btn-primary">Log in</button>

                            </div>
                        </form>
                    </div>         
                </div>
    		</div>
    	</div>
    </section>