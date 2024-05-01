<?php
$popup = get_field('popup', 2);
$title = $popup['title'];
$text = $popup['text'];
$form = $popup['form'];
?>

<div class="modal">
  <div class="modal__inner">
    <h3 class="modal__title"><?php echo $title; ?></h3>
    <div class="modal__text"><?php echo $text; ?></div>
    <div class="modal__form">
      <div class="form-contact">
        <?php echo do_shortcode($form); ?>
      </div>
    </div>
    <div class="modal__close">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 13L13 1M1 1L13 13" stroke="white" stroke-width="1.5" />
      </svg>
    </div>
  </div>
</div>