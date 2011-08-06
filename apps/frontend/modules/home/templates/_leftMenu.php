<div class="grid_6">
  <div class="left_container_parent">
    <div class="left_container user_space">
      <?php if (has_component_slot('user_col')): ?>
        <?php include_component_slot('user_col'); ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="left_container_parent">
    <div class="left_container">
	<?php if (has_component_slot('left_friend_site')): ?>
        <?php include_component_slot('left_friend_site'); ?>
      <?php endif; ?>
      
    </div>
  </div>
  <div class="left_container_parent">
    <div class="left_container">
      <h3 class="ahadith">friend site</h3>
      <div class="left_subcontainer">
                          test
      </div>
    </div>
  </div>
</div>