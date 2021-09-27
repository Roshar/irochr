<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;

class Post extends Model
{
    use Sluggable;

    protected $fillable = ['title','description','content','category_id','type_id','department_relation','thumbnail','created_at'];

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
            return asset('uploads/no-image.jpg');
        }
        return asset('uploads/'.$this->thumbnail);
    }

    public function getPostDate()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s',
        $this->created_at)->format('d.m.Y');
    }





}
