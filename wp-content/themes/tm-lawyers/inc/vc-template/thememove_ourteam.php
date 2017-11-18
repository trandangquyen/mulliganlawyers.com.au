<?php
extract( shortcode_atts( array(
    'type'    => '1',
    'photo'   => '',
    'name'    => '',
    'byline'  => '',
    'desc'    => '',
    'profile' => '',
    'class'   => '',
), $atts ) );
$class = $this->getExtraClass( $class );
if ( $type == 1 ) {
    ?>
    <div <?php echo 'class="ourteam ' . $class . ' ourteam_type' . esc_attr( $type ) . '"'; ?> >
        <div class="ourteam_photo effect-apollo">
            <?php
            if ( $profile != '' ) {
                echo '<a href="' . esc_attr( $profile ) . '">';
                echo wp_get_attachment_image( $photo, 'full' );
                echo '</a>';
            } else {
                echo wp_get_attachment_image( $photo, 'full' );
            }
            ?>
        </div>
        <div class="ourteam_name">
            <?php echo esc_html( $name ); ?>
        </div>
        <div class="ourteam_byline"><?php echo esc_html( $byline ); ?></div>
        <div class="ourteam_desc"><?php echo esc_html( $desc ); ?></div>
        <?php
        if ( $profile != '' ) {
            echo '<div class="ourteam_more"><a href="' . esc_attr( $profile ) . '">';
            esc_html_e( 'Read Profile', 'tm-lawyers' );
            echo '</a></div>';
        }
        ?>
    </div>
<?php } elseif ( $type == 2 ) {
    ?>

    <?php
} else {

}
?>