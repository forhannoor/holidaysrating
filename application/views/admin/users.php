<h3>Users</h3>
<?php echo form_open('admin/users', array('method' => 'GET')) ?>
<?php echo form_input('ip', $this->input->get('ip'), 'placeholder = \'filter users by ip address\'') ?>
<br />
<?php echo form_submit('submit', 'Filter', 'class = "btn btn-mini btn-primary"') ?>
&nbsp;&nbsp;
<?php echo anchor('admin/users', 'Clear', 'class = "btn btn-mini btn-primary"') ?>
<?php echo form_close() ?>
<table class="users_table tablesorter">
    <thead>
        <tr>
            <th style="width:54px">Avatar</th>
            <th style="width:100px">Username</th>
            <th style="width:100px">First Name</th>
            <th style="width:100px">Last Name</th>
            <th>IP</th>
            <th>Email</th>
            <th style="width:50px">Role</th>
            <th style="width:50px">Start</th>
            <th style="width:50px">Last Login</th>
            <th style="width:70px">Actions</th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
            <?php if(isset($user->avatar) && strlen($user->avatar) > 0): ?>
            <td><?php echo img('./uploads/'.$user->avatar) ?></td>
            <?php else: ?>
            <td><?php echo img('assets/assets/avatar.jpg') ?></td>
            <?php endif ?>
            <td><?php echo $user->username ?></td>
            <td><?php echo $user->first_name ?></td>
            <td><?php echo $user->last_name ?></td>
            <td>
                <?php echo $user->ip_address ?>
            </td>
            <td><?php echo $user->email ?></td>
            <td>
                <?php if($user->group_id == 1): ?>
                <?php echo 'Administrator' ?>
                <?php elseif($user->group_id == 2): ?>
                <?php echo 'Member' ?>
                <?php elseif($user->group_id == 3): ?>
                <?php echo 'Editor' ?>
                <?php endif ?>
            </td>
            <td><?php echo date('d/m/y', $user->created_on) ?></td>
            <td><?php echo date('d/m/Y H:i', $user->last_login) ?></td>
            <td style="text-align: left;">
                <?php if(! $this->ion_auth->is_admin($user->id)): ?>
                <?php echo anchor('admin/pm/' . $user->id, '<i class = \'icon-envelope\'></i>', 'title = \'send message\'') ?>
                
                &nbsp;
                
                <?php if($user->group_id != 3): ?>
                <?php echo anchor('admin/assign_editor/' . $user->id, '<i class = \'icon-pencil\'></i>', array('title' => 'assign as editor', 'onclick' => "return confirm('You are about to assign this user to Editor position. Do you want to proceed?')")) ?>
                <?php else: ?>
                <?php echo anchor('admin/dissociate_editor/' . $user->id, '<i class = \'icon-share\'></i>', array('title' => 'remove from editor', 'onclick' => "return confirm('You are about to remove this user from Editor position. Do you want to proceed?')")) ?>
                <?php endif ?>
                
                &nbsp;
                
                <?php if(! $this->ion_auth->is_admin($user->id)): ?>
                <?php echo anchor('admin/assign_admin/' . $user->id, '<i class = \'icon-star\'></i>', array('title' => 'assign as admin', 'onclick' => "return confirm('You are about to assign this user as an Admin. Do you want to proceed?')")) ?>
                <?php endif ?>
                
                &nbsp;
                
                <?php echo anchor('admin/avatar_delete/' . $user->id, '<i class = \'icon-picture\'></i>', array('title' => 'delete avatar', 'onclick' => "return confirm('You are about to delete the avatar of this user. This cannot be undone. Are you sure?')")) ?>
                
                &nbsp;
                
                <?php if($user->active == 1): ?>
                <?php echo anchor('admin/deactivate_user/' . $user->id, '<i class = \'icon-ban-circle\'></i>', array('title' => 'deactivate user', 'onclick' => "return confirm('You are about to ban this user. Are you sure?')")) ?>
                <?php elseif($user->active == 0): ?>
                <?php echo anchor('admin/activate_user/' . $user->id, '<i class = \'icon-ok\'></i>', array('title' => 'activate user')) ?>
                <?php endif ?>
                
                &nbsp;
                
                <?php echo btn_delete('admin/user_delete/' . $user->id, array('title' => 'delete user')) ?>
                
                <?php else: ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo anchor('admin/remove_admin/' . $user->id, '<i class = \'icon-star-empty\'></i>', array('title' => 'remove from admin', 'onclick' => "return confirm('You are about to remove this user from Admin position. Do you want to proceed?')")) ?>
                &nbsp;
                <?php echo anchor('admin/avatar_delete/' . $user->id, '<i class = \'icon-picture\'></i>', array('title' => 'delete avatar', 'onclick' => "return confirm('You are about to delete the avatar of this user. This cannot be undone. Are you sure?')")) ?>
                <?php endif ?>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<br />
<?php echo anchor('admin/pm', 'Send PM to all') ?>
<br />
<?php echo anchor('admin/index', 'Back') ?>
<script>
$(document).ready(function() {
	$(".users_table").tablesorter();
});
</script>