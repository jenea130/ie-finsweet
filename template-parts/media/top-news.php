<?php
$top_news = get_field('top_news');
$label = $top_news['label'];
$title = $top_news['title'];
$text = $top_news['text'];
$button_text = $top_news['button_text'];
$items = $top_news['items'];
?>

<div class="top-news">
  <div class="container">
    <div class="top-news__wrap">
      <div class="top-news__content">
        <div class="top-news__label label"><?php echo $label; ?></div>
        <div class="top-news__body shift">
          <h1 class="top-news__title main-title"><?php echo $title; ?></h1>
          <div class="top-news__text text"><?php echo $text; ?></div>
          <a class="btn" href=""><?php echo $button_text; ?></a>
        </div>
      </div>
      <div class="top-news__flex">
        <?php foreach ($items as $item) : ?>
          <?php
          $image = $item['image'];
          $title = $item['title'];
          $text = $item['text'];
          ?>
          <div class="top-news__item">
            <div class="top-news__img">
              <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="top-news__right">
              <h4 class="top-news__subtitle"><?php echo $title; ?></h4>
              <div class="top-news__desc text"><?php echo $text; ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>