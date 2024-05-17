<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
class last_news_main extends Model
{
    use HasFactory,Sluggable,HasSEO;
 
    public function sluggable():array
    {
        return[
            'slug'=>[
                'source' => 'title'
            ]
            ];

    }
    protected $table = 'news';
    
}
