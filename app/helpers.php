<?php
if (!function_exists('activeSegment')) {
    function activeSegment($name, $segment = 1, $class = 'active')
    {
     
        return request()->segment($segment) == $name ? $class : '';
    }
}
