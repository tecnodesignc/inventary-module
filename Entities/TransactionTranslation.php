<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;

class TransactionTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['description'];
    protected $table = 'inventory__transaction_translations';
}
