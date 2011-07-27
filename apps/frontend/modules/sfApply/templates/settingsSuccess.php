<?php /* @var $widget sfFormField */ ?>
<?php use_stylesheets_for_form($form) ?>
<?php slot('sf_apply_login') ?>
<?php end_slot() ?>

<div class="sf_apply sf_apply_apply parentAjaxFormSubmit">
  <form class="form " method="post" action="<?php echo url_for("sfApply/settings") ?>" name="sf_apply_settings_form" id="sf_apply_settings_form">
    <div class="grid-5-12 form-right">
      <?php foreach ($form as $widget): ?>
        <div class="grid-9-12 form-right">
          <?php if (!$widget->isHidden()): ?>
            <?php echo $widget->renderLabel(null, array('class' => 'form-lbl')); ?>
            <?php if ($widget->hasError()): ?>
              <span class="form-msg-error"><?php echo $widget->renderError(); ?></span>
            <?php endif; ?>
          <?php endif; ?>
          <?php echo $widget->render(array('class' => 'form-txt')); ?>
        </div>
      <?php endforeach; ?>
      <div class="grid-9-12 form-right">
        <input class="form-button" type="submit" value="<?php echo __("Save", array(), 'sfForkedApply') ?>" />
      </div>
    </div>
  </form>
</div>