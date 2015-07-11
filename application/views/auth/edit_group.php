<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      
      <div class="card">
        <div class="card-header">
          <h1><?php echo lang('edit_group_heading');?></h1>
          <p><?php echo lang('edit_group_subheading');?></p>
        </div>
        
        <div class="card-body">
      
      <?php if(validation_errors()):?>
      <div class="alert alert-danger" role="alert"><?php echo $message;?></div>
      <?php endif;?>

      <?php echo form_open(current_url());?>

        <div class="form-group <?php if(form_error('group_name')){echo 'has-error';}?>">
          <div class="form-control-wrapper">
            <?php echo form_input($group_name);?>
            <div class="floating-label">
              <?php echo lang('edit_group_name_label', 'group_name',
                'class="control-label"');?>
            </div>
          </div>
        </div>

        <div class="form-group <?php if(form_error('description')){echo 'has-error';}?>">
          <div class="form-control-wrapper">
            <?php echo form_textarea($group_description);?>
            <div class="floating-label">
              <?php echo lang('edit_group_desc_label', 'description',
                'class="control-label"');?>
            </div>
          </div>
        </div>

        <p><?php echo form_submit(
          'submit',
          lang('edit_group_submit_btn'),
          'class="btn btn-primary"'
        );?></p>

      <?php echo form_close();?>
    </div>
  </div>
</div>