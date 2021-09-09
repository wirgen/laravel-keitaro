<?php

use Wirgen\Keitaro\Keitaro;

if (!function_exists('keitaro')) {
    function keitaro()
    {
        return app(Keitaro::class);
    }
}
