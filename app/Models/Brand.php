<?php

namespace App\Models;

class Brand extends Model
{
  protected $table = 'brands';

  protected $primaryKey = 'id';

  protected $casts = [
    'id' => 'integer',
    'name' => 'string',
    'economic_group_id' => 'integer',

    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'deleted_at' => 'datetime',
  ];

  protected $fillable = [
    'name',
    'economic_group_id',
  ];

  public function economicGroup()
  {
    return $this->belongsTo(EconomicGroup::class);
  }

  public function branches()
  {
    return $this->hasMany(Branch::class);
  }
}