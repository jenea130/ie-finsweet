<?php
$talk = get_field('talk');
$label = $talk['label'];
$title = $talk['title'];
$text = $talk['text'];
$subtitle_1 = $talk['subtitle_1'];
$subtitle_2 = $talk['subtitle_2'];
$subtitle_3 = $talk['subtitle_3'];
$items = $talk['items'];
$footer = get_field('footer', 'option');
$email = $footer['email'];
$phone_number = $footer['phone_number'];
$branch_address = $footer['branch_address'];
$full_address = $footer['full_address'];
?>

<div class="talk">
  <div class="container">
    <div class="talk__wrap">
      <div class="talk__content">
        <div class="talk__label label"><?php echo $label; ?></div>
        <div class="talk__group shift">
          <h1 class="talk__title main-title"><?php echo $title; ?></h1>
          <div class="talk__text text"><?php echo $text; ?></div>
        </div>
      </div>
      <div class="talk__info">
        <div class="talk__body">
          <h4 class="talk__subtitle"><?php echo $subtitle_1; ?></h4>
          
          <a href="tel:<?php echo clear_phone($phone_number); ?>" class="talk__phone text" target="_blank"><?php echo $phone_number; ?></a>
          
          <a href="mailto:<?php echo $email; ?>" class="talk__email text" target="_blank"><?php echo $email; ?></a>
        </div>
        <div class="talk__body">
          <h4 class="talk__subtitle-small"><?php echo $subtitle_2; ?></h4>
          <span class="talk__address text"><?php echo $full_address; ?></span>
        </div>
        <div class="talk__body">
          <h4 class="talk__subtitle-small"><?php echo $subtitle_3; ?></h4>
          <span class="talk__address text"><?php echo $branch_address; ?></span>
        </div>
        <div class="talk__socials">
          <?php foreach ($items as $item) : ?>
            <?php
            $icon = $item['icon'];
            ?>
            <a href="" class="talk__icon"><?php echo $icon; ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>