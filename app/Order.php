<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $user_id
 * @property string $order_no
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $county
 * @property string $district
 * @property string $zipcode
 * @property string $address
 * @property int $price
 * @property string $pay_type
 * @property int $is_paid
 * @property string $shipping
 * @property int $shipping_fee
 * @property int $shipping_status_id
 * @property int $order_status_id
 * @property string $remark
 * @property string $created_at
 * @property string $updated_at
 */
class Order extends Model
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
    protected $fillable = ['user_id', 'order_no', 'name', 'phone', 'email', 'county', 'district', 'zipcode', 'address', 'price', 'pay_type', 'is_paid', 'shipping', 'shipping_fee', 'shipping_status_id', 'order_status_id', 'remark', 'created_at', 'updated_at'];

    public function details()
    {
        return $this->hasMany('App\OrderDetail','order_id','id');
    }
}
