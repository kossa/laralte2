<?php 

namespace App\Helpers;

use Image;

class Helpers  
{
    
    /*
    |------------------------------------------------------------------------------------
    | Move Image
    |------------------------------------------------------------------------------------
    */
    public static function MoveImg($file, $type='products.slide', $withWatermark = false)
    {
        // Grab all variables
        $path = explode('.', $type)[0];      
        $destinationPath = config('variables.'.$path.'.folder');
        $width           = config('variables.' . $type . '.width');
        $height          = config('variables.' . $type . '.height');
        $full_name       = str_random(16) . '.' . $file->getClientOriginalExtension();
        
        // Create the Image
        $image           = Image::make($file->getRealPath());

        if ($width == null || $height == null) {
            $image->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
        }else{
            $image->fit($width, $height);
        }

        if ($withWatermark) {
            $watermark = Image::make(public_path() . '/img/watermark.png')->resize($width * 0.5, null);

            $image->insert($watermark, 'center');
        }

        return $image->save($destinationPath . '/' . $full_name);
    }
    
}