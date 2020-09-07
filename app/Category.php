<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App
 *
 * @property-read $id
 * @property-read $title
 * @property-read $description
 * @property-read Good[] $goods
 */
class Category extends Model
{
    public function goods()
    {
        return $this->hasMany(Good::class);
    }
}
