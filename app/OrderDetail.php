<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $order_id
 * @property int $product_id
 * @property int $qty
 * @property string $old
 * @property string $created_at
 * @property string $updated_at
 */
class OrderDetail extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['order_id', 'product_id', 'qty', 'old', 'created_at', 'updated_at'];

}
