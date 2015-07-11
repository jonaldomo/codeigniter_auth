<div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      
      <div class="card">
        <div class="card-header">
          <h1><?php echo lang('login_heading');?></h1>
          <p><?php echo lang('login_subheading');?></p>
        </div>
        
        <div class="card-body">
          <?php if(validation_errors()):?>
          <div class="alert alert-danger" role="alert"><?php echo $message;?></div>
          <?php endif;?>

          <?php if(!empty($message)):?>
          <div class="alert alert-info" role="alert"><?php echo $message;?></div>
          <?php endif;?>

          <?php echo form_open("auth/login");?>

          <div class="form-group <?php if(form_error('identity')){echo 'has-error';}?>">
            <div class="form-control-wrapper">
              <?php echo form_input($identity);?>
              <div class="floating-label">
                <?php echo lang('login_identity_label', 'identity',
                  'class="control-label"');?>
              </div>
            </div>
          </div>
          
          <div class="form-group <?php if(form_error('password')){echo 'has-error';}?>">
            <div class="form-control-wrapper">
              <?php echo form_input($password);?>
              <div class="floating-label">
                <?php echo lang('login_password_label', 'password',
                  'class="control-label"');?>
              </div>
            </div>
          </div>
          
          <div class="checkbox">
            <label>
              <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
              <span class="checkbox-material">
              </span> <?php echo lang('login_remember_label', 'remember');?>
            </label>
          </div>


          <p><?php echo form_submit(
            'submit',
            lang('login_submit_btn'),
            "class='btn btn-lg btn-primary btn-block'"
          );?></p>

        <?php echo form_close();?>

        <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
      </form>
    </div>
  </div>
</div>