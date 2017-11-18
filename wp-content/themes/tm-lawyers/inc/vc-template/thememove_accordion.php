<?php
if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$accordions = (array) vc_param_group_parse_atts( $accordions );

if ( count( $accordions ) > 0 ) {
    ?>
    <div class="thememove-accordion <?php echo esc_attr( $el_class ); ?>">
        <?php
        $i = 1;
        foreach ( $accordions as $accordion ) { ?>
            <div class="item <?php echo( $i == 1 ? 'active' : '' ); ?>">
                <div class="title"><?php echo esc_html( $accordion['title'] ); ?></div>
                <div class="content"><?php echo esc_html( $accordion['content'] ); ?></div>
            </div>
            <?php
            $i ++;
        }
        ?>
    </div>
<?php } ?>
