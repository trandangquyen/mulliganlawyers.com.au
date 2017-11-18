<?php
extract( shortcode_atts( array(
    'date' => '',
    'text' => ''
), $atts ) );
?>
<div class="history">
    <div class="date">
        <i class="fa fa-calendar-check-o"></i> <?php echo esc_html( $date ); ?>
    </div>
    <div class="text">
        <?php echo esc_html( $text ); ?>
    </div>
</div>