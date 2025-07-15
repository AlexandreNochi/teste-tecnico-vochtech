<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ValueObjects\Cnpj;

class Branch extends Model
{
  protected $table = 'branches';

  protected $casts = [
    'id' => 'integer',
    'brand_id' => 'integer',
    'trade_name' => 'string',
    'legal_name' => 'string',
    
    'cnpj' => Cnpj::class,

    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'deleted_at' => 'datetime',
  ];

  protected $fillable = [
    'brand_id',
    'trade_name',
    'legal_name',
    'cnpj',
  ];

  public function brand()
  {
    return $this->belongsTo(Brand::class);
  }

  public function employees()
  {
    return $this->hasMany(Employee::class);
  }
}