<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      
      <div class="card">
        <div class="card-header">
          <h1><?php echo lang('edit_user_heading');?></h1>
          <p><?php echo lang('edit_user_subheading');?></p>
        </div>
        
        <div class="card-body">
      
      <?php if(validation_errors()):?>
      <div class="alert alert-danger" role="alert"><?php echo $message;?></div>
      <?php endif;?>

      <?php echo form_open(uri_string());?>

      <div class="form-group <?php if(form_error('first_name')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($first_name);?>
          <div class="floating-label">
            <?php echo lang('edit_user_fname_label', 'first_name',
              'class="control-label"');?>
          </div>
        </div>
      </div>

      <div class="form-group <?php if(form_error('last_name')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($last_name);?>
          <div class="floating-label">
            <?php echo lang('edit_user_lname_label', 'last_name',
              'class="control-label"');?>
          </div>
        </div>
      </div>
      
      <div class="form-group <?php if(form_error('company')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($company);?>
          <div class="floating-label">
            <?php echo lang('edit_user_company_label', 'company',
              'class="control-label"');?>
          </div>
        </div>
      </div>

      <div class="form-group <?php if(form_error('phone')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($phone);?>
          <div class="floating-label">
            <?php echo lang('edit_user_phone_label', 'phone',
              'class="control-label"');?>
          </div>
        </div>
      </div>

      <div class="form-group <?php if(form_error('password')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($password);?>
          <div class="floating-label">
            <?php echo lang('edit_user_password_label', 'password',
              'class="control-label"');?>
          </div>
        </div>
      </div>

      <div class="form-group <?php if(form_error('password_confirm')){echo 'has-error';}?>">
        <div class="form-control-wrapper">
          <?php echo form_input($password_confirm);?>
          <div class="floating-label">
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm',
              'class="control-label"');?>
          </div>
        </div>
      </div>

      <?php if ($this->ion_auth->is_admin()): ?>

          <h3><?php echo lang('edit_user_groups_heading');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <p><?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class="btn btn-primary"');?></p>

<?php echo form_close();?>
