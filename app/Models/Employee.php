<?php

namespace App\Models;

use App\ValueObjects\Cpf;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $table = 'employees';

  protected $primaryKey = 'id';

  protected $cast = [
    'id' => 'integer',
    'branch_id' => 'integer',
    'name' => 'string',

    'cpf' => Cpf::class,

    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'deleted_at' => 'datetime',
  ];

  protected $fillable = [
    'name',
    'branch_id',
    'cpf',
  ];

  public function branch() {
    return $this->belongsTo(Branch::class);
  }
}