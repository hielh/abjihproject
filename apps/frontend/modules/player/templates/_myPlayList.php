<?php if ($myPlayLists instanceof sfOutputEscaperIteratorDecorator) $myPlayLists = $myPlayLists->getRawValue(); ?>

<?php $jsPlaylist = ""; ?>

<?php foreach ($myPlayLists as $myPlayList): ?>
  <?php
  $jsPlaylist .= '
    {
      name:"' . $myPlayList->getPlayIt()->getName() . '",
      mp3:"' . $myPlayList->getPlayIt()->getUrl() . '",
    },';
  ?>
<?php endforeach; ?>
<script>
  privateListener = [<?php echo $jsPlaylist; ?>]; 
</script>