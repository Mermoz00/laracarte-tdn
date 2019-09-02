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