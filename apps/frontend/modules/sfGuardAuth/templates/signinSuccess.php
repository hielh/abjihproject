<?php if (!$sf_user->isAuthenticated()): ?>

<div class="left_subcontainer">
 <?php include_component('sfGuardAuth', 'Signin_form'); ?>
</div>
<?php else: ?>
  hello user
  <a href="<?php echo url_for('sf_guard_signout'); ?>" class="ajaxUrl selfAjaxUrl"><?php echo __('logout'); ?></a>
<?php endif; ?>