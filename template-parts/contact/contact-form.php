<?php
$contact_form = get_field('contact_form');
$form = $contact_form['form'];
?>

<div class="contact-form">
  <div class="form-contact">
    <?php echo do_shortcode($form); ?>
  </div>
</div>