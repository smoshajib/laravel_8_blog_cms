<?php

namespace App\Cms\Services;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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

    public function manageMedia(Post $post, UploadedFile $file){
//        $media = $post->getMedia();
//        $r = $media[0]->getPath();
//        echo $media[0]->getPath('thumb');
//        echo $media[0]->file_name;
//        $media[0]->save();
//        exit();
        if($post->hasMedia()){
            $media = $post->getMedia('as-web');
            $media[0]->delete();
        }
        $post->addMedia($file)->toMediaCollection('as-web');

    }
}
