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
          <a href="tel:" class="talk__phone text">+1 23 456 789</a>
          <a href="mailto:hello@finsweet.com" class="talk__email text">hello@finsweet.com</a>
        </div>
        <div class="talk__body">
          <h4 class="talk__subtitle-small"><?php echo $subtitle_2; ?></h4>
          <span class="talk__address text">8 Brewery Drive, Hudson, NH 03051</span>
          <span>USA</span>
        </div>
        <div class="talk__body">
          <h4 class="talk__subtitle-small"><?php echo $subtitle_3; ?></h4>
          <span class="talk__address text">178 Marconi St., Venice, 34293</span>
          <span>Italy</span>
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