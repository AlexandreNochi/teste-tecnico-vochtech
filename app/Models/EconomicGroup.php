<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EconomicGroup extends Model
{
  protected $table = 'economic_groups';

  protected $primaryKey = 'id';

  protected $casts = [
    'id' => 'integer',
    'name' => 'string',

    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'deleted_at' => 'datetime',
  ];

  protected $fillable = [
    'name',
  ];

  public function brands()
  {
    return $this->hasMany(Brand::class);
  }
}