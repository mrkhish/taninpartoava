<?php

namespace App\Models;

//use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
class products extends Model
{
    use HasFactory,HasSEO;
    /*,Sluggable;
    public function sluggable():array
    {
        return[
            'slug'=>[
                'source' => 'name'
            ]
            ];

    }*/
    protected $table = 'products';
}
