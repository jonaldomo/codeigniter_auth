<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      
      <div class="card">
        <div class="card-header">

          <h1><?php echo lang('forgot_password_heading');?></h1>
          <p><?php echo sprintf(lang('forgot_password_subheading'),
            $identity_label);?></p>
        </div>
        
        <div class="card-body">
          <?php if(validation_errors()):?>
          <div class="alert alert-danger" role="alert"><?php echo $message;?></div>
          <?php endif;?>

          <?php echo form_open("auth/forgot_password");?>

                
          <div class="form-group <?php if(form_error('email')){echo 'has-error';}?>">
            <div class="form-control-wrapper">
              <?php echo form_input($email);?>
              <div class="floating-label">
                <?php echo sprintf(lang('forgot_password_email_label'), $identity_label
                  ,'class="control-label"');?>
              </div>
            </div>
          </div>

                <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'), "class='btn btn-primary'");?></p>

          <?php echo form_close();?>