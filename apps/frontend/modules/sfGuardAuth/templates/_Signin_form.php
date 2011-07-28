<?php /* @var $form sfFormField */ ?>
<div class="parentAjaxFormSubmit">

  <form class="form ajaxFormSubmit" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    <div class="grid-12-12 form-right">

          <div class="grid-12-12 form-right">
            <?php if (!$form['username']->isHidden()): ?>
              <?php echo $form['username']->renderLabel(null, array('class' => 'form-lbl')); ?>
              <?php if ($form['username']->hasError()): ?>
                <span class="form-msg-error"><?php echo $form['username']->renderError(); ?></span>
              <?php endif; ?>
            <?php endif; ?>
            <?php echo $form['username']->render(array('class' => 'form-txt')); ?>
          </div>

          <div class="grid-12-12 form-right">
            <?php if (!$form['password']->isHidden()): ?>
              <?php echo $form['password']->renderLabel(null, array('class' => 'form-lbl')); ?>
              <?php if ($form['password']->hasError()): ?>
                <span class="form-msg-error"><?php echo $form['password']->renderError(); ?></span>
              <?php endif; ?>
            <?php endif; ?>
            <?php echo $form['password']->render(array('class' => 'form-txt')); ?>
          </div>

          <div class="grid-12-12 form-right form-list-chk">
            <?php if (!$form['remember']->isHidden()): ?>
              <?php echo $form['remember']->renderLabel(null, array('class' => 'form-lbl')); ?>
              <?php if ($form['remember']->hasError()): ?>
                <span class="form-msg-error"><?php echo $form['remember']->renderError(); ?></span>
              <?php endif; ?>
            <?php endif; ?>
            <?php echo $form['remember']->render(array()); ?>
          </div>
          
          <?php echo $form->renderHiddenFields() ?>
        <div class="grid-12-12 form-right">
          <input class="form-button" type="submit" value="<?php echo __("login") ?>" />
        </div>
        <div class="grid-12-12 form-right form-list-chk">
          <ul>
            <li>
              <a href="#"><?php echo __('forget_password'); ?></a>
            </li>
            <li>
              <a href="#"><?php echo __('register'); ?></a>
            </li>
          </ul>
        </div>
      </div>
  </form>
 
</div>