<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Category.
 *
 * @package namespace CodeDelivery\Models;
 */
class Category extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name'
    ];


    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
