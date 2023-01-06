<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function getFirstPic(){
        $pics = json_decode($this->pics,true);
        // return $pics[0];
        if(is_array($pics) && count($pics) > 0){
            return $pics[0];
        }else{
            return null;
        }
    }
    // public function getFirstPic()
    // {
    //     $havePics = strstr($this->pics, '[');
    //     if ($havePics) {

    //         $pics = json_decode($this->pics, true);
    //         if (is_array($pics) && count($pics) > 0) {
    //             return $pics[0];
    //         } else {
    //             return null;
    //         }
    //     } else {
    //         return $this->pics;

    //     }
    // }
    public function getPicsArrayAttribute(){
        $data = json_decode($this->pics,true);
        return $data;
    }
}
