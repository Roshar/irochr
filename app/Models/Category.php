<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;

    //Разрешить массово заполнять title
    protected $fillable = ['title','type_id','parent_id'];

    public function post()
    {
        //Получаем все посты | связь - один ко многим
        return $this->hasMany(Post::class);
    }

    /**
     * @return array
     */

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
