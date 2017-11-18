<?php
extract( shortcode_atts( array(
    'name'  => '1',
    'value' => '',
    'bg'    => '#DDDDDD',
    'bar'   => '#FF9326',
    'class' => '',
), $atts ) );
$class = $this->getExtraClass( $class );
?>
<div <?php echo 'class="skill ' . $class . '"'; ?> >
    <div class="progress" style="background-color: <?php echo esc_attr( $bg ); ?>">
        <div class="bar"
             style="background-color: <?php echo esc_attr( $bar ); ?>; width: <?php echo esc_attr( $value ); ?>%; position: absolute; top: 0; left: -<?php echo esc_attr( $value ); ?>%"></div>
    </div>
    <div class="text">
        <?php echo esc_html( $name ); ?> <span
            class="value"><?php echo esc_html( $value ); ?>%</span>
    </div>
</div>
<script>
    (
        function( $, win ) {
            $.fn.inViewport = function( cb ) {
                return this.each( function( i, el ) {
                    function visPx() {
                        var H = $( this ).height(),
                            r = el.getBoundingClientRect(), t = r.top, b = r.bottom;
                        return cb.call( el, Math.max( 0, t > 0 ? H - t : (
                            b < H ? b : H
                        ) ) );
                    }

                    visPx();
                    $( win ).on( "resize scroll", visPx );
                } );
            };
        }( jQuery, window )
    );
    jQuery( ".skill" ).inViewport( function( px ) {
        if ( px ) {
            jQuery( this ).addClass( "skill_fly" );
        }
    } );
</script>