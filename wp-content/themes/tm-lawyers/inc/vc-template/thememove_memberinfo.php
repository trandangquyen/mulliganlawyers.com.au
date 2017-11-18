<?php
extract( shortcode_atts( array(
    'name'      => '',
    'byline'    => '',
    'desc'      => '',
    'facebook'  => '',
    'twitter'   => '',
    'instagram' => '',
    'youtube'   => '',
    'vimeo'     => '',
    'phone'     => '',
    'email'     => '',
    'class'     => '',
), $atts ) );
$class = $this->getExtraClass( $class );
?>
<div <?php echo 'class="memberinfo ' . $class . '"'; ?> >
    <div class="memberinfo_name"><?php echo esc_html( $name ); ?></div>
    <div class="memberinfo_byline"><?php echo esc_html( $byline ); ?></div>
    <div class="memberinfo_desc"><?php echo esc_html( $desc ); ?></div>
    <div class="memberinfo_social">
        <?php
        if ( $facebook != '' ) {
            echo '<a href="' . esc_attr( $facebook ) . '" target="_blank"><i class="fa fa-facebook"></i></a>';
        }
        if ( $twitter != '' ) {
            echo '<a href="' . esc_attr( $twitter ) . '" target="_blank"><i class="fa fa-twitter"></i></a>';
        }
        if ( $instagram != '' ) {
            echo '<a href="' . esc_attr( $instagram ) . '" target="_blank"><i class="fa fa-instagram"></i></a>';
        }
        if ( $youtube != '' ) {
            echo '<a href="' . esc_attr( $youtube ) . '" target="_blank"><i class="fa fa-youtube"></i></a>';
        }
        if ( $vimeo != '' ) {
            echo '<a href="' . esc_attr( $vimeo ) . '" target="_blank"><i class="fa fa-vimeo-square"></i></a>';
        }
        ?>
    </div>
    <?php if ( ( $phone != '' ) || ( $email != '' ) ) { ?>
        <div class="memberinfo_contact">
            <div class="memberinfo_contact_title heading_left"><?php esc_html_e( 'Contact Me', 'tm-lawyers' ); ?></div>
            <?php
            if ( $phone != '' ) {
                echo '<div class="memberinfo_contact_icon"><i class="fa fa-phone"></i> ' . $phone . '</div>';
            }
            if ( $email != '' ) {
                echo '<div class="memberinfo_contact_icon"><i class="fa fa-envelope-o"></i> ' . $email . '</div>';
            }
            ?>
        </div>
    <?php } ?>
</div>