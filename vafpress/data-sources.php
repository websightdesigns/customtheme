<?php

/**
 * Data Source Definitions
 */

VP_Security::instance()->whitelist_function('vp_bind_color_accent');
function vp_bind_color_accent($color_preset)
{
    switch ($color_preset) {
        case 'red':
            return '#ff0000';
        case 'green':
            return '#00ff00';
        case 'blue':
            return '#0000ff';
        default:
            return '#000000';
    }
}

VP_Security::instance()->whitelist_function('vp_bind_color_subtle');
function vp_bind_color_subtle($color_preset)
{
    switch ($color_preset) {
        case 'red':
            return '#ff0000';
        case 'green':
            return '#00ff00';
        case 'blue':
            return '#0000ff';
        default:
            return '#000000';
    }
}

VP_Security::instance()->whitelist_function('vp_bind_color_background');
function vp_bind_color_background($color_preset)
{
    switch ($color_preset) {
        case 'red':
            return '#ff0000';
        case 'green':
            return '#00ff00';
        case 'blue':
            return '#0000ff';
        default:
            return '#000000';
    }
}
