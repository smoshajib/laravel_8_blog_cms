<?php

namespace App\Cms\Services;

use Illuminate\Support\Facades\Storage;

class LeuraCms
{
    public function templates(){
        $files = Storage::disk('views')->files('web/pages');
        $x = array_map(function ($f){
            $st1 = str_replace('web/pages/', '', $f);
            $st2 = str_replace('.blade.php', '', $st1);
            return $st2;
        }, $files);
        return $x;
    }
}
