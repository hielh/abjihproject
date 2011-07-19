
<?php
if ($sf_user->hasFlash('qu_notice_success')) 
{
  $noticeType = 'success';
  $noticeTitle = $sf_user->getFlash('qu_notice_success');
}
elseif ($sf_user->hasFlash('qu_notice_error')) 
{
  $noticeType = 'error';
  $noticeTitle = $sf_user->getFlash('qu_notice_error');
}
elseif ($sf_user->hasFlash('qu_notice_warning')) 
{
  $noticeType = 'warning';
  $noticeTitle = $sf_user->getFlash('qu_notice_warning');
}
elseif ($sf_user->hasFlash('qu_notice_question')) 
{
  $noticeType = 'question';
  $noticeTitle = $sf_user->getFlash('qu_notice_question');
}
elseif ($sf_user->hasFlash('qu_notice_information')) 
{
  $noticeType = 'information';
  $noticeTitle = $sf_user->getFlash('qu_notice_information');
}
?>

<?php if (isset($noticeType) && isset($noticeTitle)): ?>
  <div class="show-notice <?php echo $noticeType; ?>" style="display:none">
    <div class="notice-title"><?php echo $noticeTitle; ?></div>
  </div>
<?php endif; ?>