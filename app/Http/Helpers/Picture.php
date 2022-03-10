<?php
if(! function_exists('getpicture')){
    function getpicture($val)
    {
        if ($val){
            $photo_path = $val->store('photos/profile', 'public');
        }
        return $photo_path;
    }
}