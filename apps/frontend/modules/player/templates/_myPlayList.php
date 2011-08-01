<?php if ($myPlayLists instanceof sfOutputEscaperIteratorDecorator) $myPlayLists = $myPlayLists->getRawValue(); ?>

<?php $jsPlaylist = ""; ?>

<?php foreach ($myPlayLists as $myPlayList): ?>
    <?php
    $jsPlaylist .= '
    {
      name:"<span class=\'text-blue\'>' . $myPlayList->getTrack()->getName() . '</span> - ' . $myPlayList->getTrack()->getPlayList()->getPlayOwner()->getName() . ' ",
      mp3:"' . $myPlayList->getTrack()->getUrl() . '",
    },';
    ?>
<?php endforeach; ?>
<?php
$noticeTitle = "";
$noticeType = "";
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

<?php if (isset($reloadPlaylist) && (!$reloadPlaylist)): ?>
    <script>
<?php endif; ?>
    
privateListener = [<?php echo $jsPlaylist; ?>]; 
  
<?php if (isset($reloadPlaylist) && ($reloadPlaylist)): ?>
    audioPlaylist.setPlaylist(privateListener);
    audioPlaylist.displayPlaylist();
    <?php if (isset($noticeType) && isset($noticeTitle)): ?>
	    qu.common.displayNotice("<?php echo $noticeTitle; ?>", "<?php echo $noticeType; ?>");
    <?php endif; ?>
<?php endif; ?>

<?php if (isset($reloadPlaylist) && (!$reloadPlaylist)): ?>
    </script>
<?php endif; ?>