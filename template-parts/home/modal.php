<?php 
$popup = get_field('popup');
$title = $popup['title'];
$text = $popup['text'];
$form = $popup['form'];
?>

<div class="modal">
  <div class="modal__inner">
    <h3 class="modal__title"><?php echo $title; ?></h3>
    <div class="modal__text"><?php echo $text; ?></div>
    <div class="modal__form form">
      <form action="">
        <div class="form__wrap">
          <div class="form__group">
            <label for="">First Name</label>
            <input type="text">
          </div>
          <div class="form__group">
            <label for="">Last Name</label>
            <input type="text">
          </div>
        </div>
        <div class="form__group">
          <label for="">Email Id</label>
          <input type="email">
        </div>
        <div class="form__group">
          <label for="">Message</label>
          <textarea placeholder="Type your Messege"></textarea>
        </div>
          <button class="btn" type="submit">Send message</button>
      </form>
    </div>
    <div class="modal__close">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 13L13 1M1 1L13 13" stroke="white" stroke-width="1.5" />
      </svg>
    </div>
  </div>
</div>