<?php


add_action('get_footer_code', 'footer_code_callback');

function footer_code_callback()
{   
    $code = get_field( "footer_code", 'option' );

    /**
     * Match any shortcodes.
     */
    preg_match_all('/(\[.*\])/', $code, $matches);

    foreach ($matches[0] as $match)
    {
        $shortcode_result = do_shortcode($match);
        $code = str_replace($match, $shortcode_result, $code);
    }

    echo $code;

}   