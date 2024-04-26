<?php
$event_intro = get_field('event_intro');
$icon_location = $event_intro['icon_location'];
$icon_calendar = $event_intro['icon_calendar'];
$single_event = get_field('single_event');
$date = $single_event['date'];
$address = $single_event['address'];
$title = get_the_title();
$our_date = new DateTimeImmutable($date);
$event_day = $our_date->format('F d, Y H:i A');
?>

<div class="event-intro">
  <div class="container--small">
    <h1 class="event-intro__title main-title"><?php echo $title; ?></h1>
    <div class="event-intro__wrap">
      <div class="event-intro__item">
        <div class="event-intro__icon">
          <?php echo $icon_location; ?>
        </div>
        <div class="event-intro__info">
          <?php echo $address; ?>
        </div>
      </div>
      <div class="event-intro__item">
        <div class="event-intro__icon">
          <?php echo $icon_calendar; ?>
        </div>
        <div class="event-intro__info">
          <?php echo $event_day; ?>
        </div>
      </div>
    </div>
  </div>
</div>