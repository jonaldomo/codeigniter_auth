<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">

          <div class="pull-right">
            <?php echo anchor('auth/create_user', "&nbsp", "class='btn btn-primary btn-fab mdi-social-person-add'")?>
          <?php echo anchor('auth/create_group', "&nbsp", "class='btn btn-primary btn-fab mdi-social-group-add'")?>
          </div>

          <h1><?php echo lang('index_heading');?></h1>
          <p><?php echo lang('index_subheading');?></p>

          <?php if(!empty($message)):?>
            <div class="alert alert-info"><?php echo $message;?></div>
          <?php endif;?>
        </div>

          <table class="table table-condensed table-responsive card-body">
            <tr>
              <th><?php echo lang('index_fname_th');?></th>
              <th><?php echo lang('index_lname_th');?></th>
              <th><?php echo lang('index_email_th');?></th>
              <th><?php echo lang('index_groups_th');?></th>
              <th><?php echo lang('index_status_th');?></th>
              <th><?php echo lang('index_action_th');?></th>
            </tr>
            <?php foreach ($users as $user):?>
              <tr>
                <td><?php echo htmlspecialchars($user->first_name,
                  ENT_QUOTES, 'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->last_name,
                  ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->email,
                  ENT_QUOTES,'UTF-8');?></td>
                <td>
                  <?php foreach ($user->groups as $group):?>
                    <?php echo anchor("auth/edit_group/".$group->id,
                      htmlspecialchars($group->name,
                      ENT_QUOTES,'UTF-8'), "class='btn btn-primary btn-xs'") ;?>
                    <?php endforeach?>
                </td>
                <td><?php echo ($user->active) ?
                  anchor("auth/deactivate/".$user->id, "&nbsp", "class='btn btn-primary btn-fab btn-fab-mini mdi-toggle-check-box'") :
                  anchor("auth/activate/". $user->id, "&nbsp", "class='btn btn-primary btn-fab btn-fab-mini mdi-toggle-check-box-outline-blank'");?></td>
                <td><?php echo anchor("auth/edit_user/".$user->id, '&nbsp', "class='btn btn-primary btn-xs btn-fab btn-fab-mini mdi-content-create'") ;?></td>
              </tr>
            <?php endforeach;?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
