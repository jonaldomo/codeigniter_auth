<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      
      <div class="card">
        <div class="card-header">
          <h1><?php echo lang('deactivate_heading');?></h1>
        </div>

        <div class="card-body">
          <?php echo form_open("auth/deactivate/".$user->id);?>
          <legend>
            <?php echo sprintf(lang('deactivate_subheading'), $user->username);?>
          </legend>

          <div class="radio radio-info">
            <label>
              <input type="radio" name="confirm" value="yes" checked="checked" />
              <span class="circle"></span>
              <span class="check"></span>
              <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
            </label>
          </div>
          
          <div class="radio radio-info">
            <label>
              <input type="radio" name="confirm" value="no" />
              <span class="circle"></span>
              <span class="check"></span>
              <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
            </label>
          </div>

          <?php echo form_hidden($csrf); ?>
          <?php echo form_hidden(array('id'=>$user->id)); ?>

          <p><?php echo form_submit('submit', lang('deactivate_submit_btn'), "class='btn btn-primary'");?></p>

        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>