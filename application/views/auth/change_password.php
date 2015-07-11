<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      
      <div class="card">
        <div class="card-header">

          <h1><?php echo lang('change_password_heading');?></h1>
        </div>
        
        <div class="card-body">
          <?php if(validation_errors()):?>
          <div class="alert alert-danger" role="alert"><?php echo $message;?></div>
          <?php endif;?>

          <?php if(!empty($message)):?>
          <div class="alert alert-info" role="alert"><?php echo $message;?></div>
          <?php endif;?>

          <?php echo form_open("auth/change_password");?>

          <div class="form-group <?php if(form_error('old')){echo 'has-error';}?>">
            <div class="form-control-wrapper">
              <?php echo form_input($old_password);?>
              <div class="floating-label">
                <?php echo lang('change_password_old_password_label', 'old_password',
                  'class="control-label"');?>
              </div>
            </div>
          </div>

          <div class="form-group <?php if(form_error('new')){echo 'has-error';}?>">
            <div class="form-control-wrapper">
              <?php echo form_input($new_password);?>
              <div class="floating-label">
                <?php echo sprintf(lang('change_password_new_password_label',
                'new_password', 'class="control-label"'), $min_password_length);?>
              </div>
            </div>
          </div>

          <div class="form-group <?php if(form_error('new_confirm')){echo 'has-error';}?>">
            <div class="form-control-wrapper">
              <?php echo form_input($new_password_confirm);?>
              <div class="floating-label">
                <?php echo lang('change_password_new_password_confirm_label',
                  'new_password_confirm', 'class="control-label"');?>
              </div>
            </div>
          </div>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'), 'class="btn btn-primary"');?></p>

<?php echo form_close();?>
