<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Good
 * @package App
 *
 * @property-read $id
 * @property-read $title
 * @property-read $description
 * @property-read $price
 * @property-read Category $category
 */
class Good extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImageId()
    {
        return $this->id % 9 + 1;
    }
}
