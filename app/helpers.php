<?php
    if(!function_exists('pages_title'))
    {
        function pages_title($title)
        {
            $base_title ='Laracarte - List of Artisan';
            if($title=='')
            {
                return $base_title;
            }
            else
            {
                return $title. '|' .$base_title;
            }
        }
        
    }
    if(!function_exists('set_active_route'))
    {
        function set_active_route($route)
        {
            return Route::is($route)?'active':'';
        }
        
    }