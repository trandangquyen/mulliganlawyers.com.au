<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );

$poster_thumbnail = wp_get_attachment_image_src( $poster, 'full' );
?>
<div class="thememove-video <?php echo esc_attr( $el_class ); ?>">
    <?php
    echo '<a href="' . esc_url( $url ) . '" data-poster="' . esc_url( $poster_thumbnail[0] ) . '">';
    echo wp_get_attachment_image( $poster, 'full' );
    echo '</a>';
    ?>
</div>
