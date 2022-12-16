<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'details';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['stock_id', 'loopkey', 'status', 'customer_id'];

    public function stock(){
        return $this->belongsTo(Stock::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
