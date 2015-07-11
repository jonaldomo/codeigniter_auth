<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      
      <div class="card">
        <div class="card-header">
          <h1><?php echo lang('create_user_heading');?></h1>
          <p><?php echo lang('create_user_subheading');?></p>
        </div>
        
        <div class="card-body">
      
      <?php if(validation_errors()):?>
      <div class="alert alert-danger" role="alert"><?php echo $message;?></div>
      <?php endif;?>

      <?php echo form_open("auth/create_user");?>

      <div class="form-group <?php if(form_error('first_name')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($first_name);?>
          <div class="floating-label">
            <?php echo lang('create_user_fname_label', 'first_name',
              'class="control-label"');?>
          </div>
        </div>
      </div>

      <div class="form-group <?php if(form_error('last_name')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($last_name);?>
          <div class="floating-label">
            <?php echo lang('create_user_lname_label', 'last_name',
              'class="control-label"');?>
          </div>
        </div>
      </div>
      
      <div class="form-group <?php if(form_error('company')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($company);?>
          <div class="floating-label">
            <?php echo lang('create_user_company_label', 'company',
              'class="control-label"');?>
          </div>
        </div>
      </div>

      <div class="form-group <?php if(form_error('email')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($email);?>
          <div class="floating-label">
            <?php echo lang('create_user_email_label', 'email',
              'class="control-label"');?>
          </div>
        </div>
      </div>

      <div class="form-group <?php if(form_error('phone')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($phone);?>
          <div class="floating-label">
            <?php echo lang('create_user_phone_label', 'phone',
              'class="control-label"');?>
          </div>
        </div>
      </div>

      <div class="form-group <?php if(form_error('password')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($password);?>
          <div class="floating-label">
            <?php echo lang('create_user_password_label', 'password',
              'class="control-label"');?>
          </div>
        </div>
      </div>

      <div class="form-group <?php if(form_error('password_confirm')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($password_confirm);?>
          <div class="floating-label">
            <?php echo lang('create_user_password_confirm_label', 'password_confirm',
              'class="control-label"');?>
          </div>
        </div>
      </div>

      <p><?php echo form_submit('submit', lang('create_user_submit_btn'),
            'class="btn btn-primary btn-sm"');?></p>

      <?php echo form_close();?>
    </div>
    </div>
    </div>
  </div>
</div>