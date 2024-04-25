<?php 
$columns = get_field('columns');
$title = $columns['title'];
$text = $columns['text'];
?>
<div class="columns">
  <h2 class="title"><?php echo $title; ?></h2>
  <?php echo $text; ?>
</div>