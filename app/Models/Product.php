<?php

namespace CodeDelivery\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Product.
 *
 * @package namespace CodeDelivery\Models;
 */
class Product extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name',
        'description',
        'price',

        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
