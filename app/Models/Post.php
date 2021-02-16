<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;

class Post extends Model
{
    use Sluggable;

    protected $fillable = ['title','description','content','category_id','thumbnail'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
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

    /**
     * Загрузка изображений для статьи
     * передача image необходимо при обновлении статьи (для удаления изображения)
     * @param Request $request
     * @param null $image
     * @return |null
     *
     */
    static function imageUpload(Request $request, $image = null)
    {
        if($request->hasFile('thumbnail')){
            if($image){
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('thumbnail')->store("images/{$folder}");
        }
        return null;
    }

    /**
     * вывод изображения в постах
     * @return string
     */
    public function getImage()
    {
        if(!$this->thumbnail){
            return asset('no-image.png');
        }
        return asset('uploads/'.$this->thumbnail);
    }

}
