<?php
function security_theme_sanitize_text( $input ) {
    return sanitize_text_field( $input );
}

