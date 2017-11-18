<?php
extract( shortcode_atts( array(
    'small_title' => '',
    'big_title'   => '',
    'show_decor'  => true,
    'el_class'    => '',
), $atts ) );
$class    = 'thememove-title';
$el_class = $this->getExtraClass( $el_class );
if ( $el_class != '' ) {
    $class .= ' ' . $el_class;
}
?>
<div class="<?php echo esc_attr( $class ); ?>">
    <?php
    if ( $small_title != '' ) {
        echo '<div class="thememove-title--small-title">' . esc_html( $small_title ) . '</div>';
    }
    if ( $big_title != '' ) {
        echo '<div class="thememove-title--big-title">' . esc_html( $big_title ) . '</div>';
    }
    if ( $show_decor ) {
        echo '<div class="thememove-title--decor"></div>';
    }
    ?>
</div>