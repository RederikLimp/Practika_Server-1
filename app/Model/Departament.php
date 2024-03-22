<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Department extends Model
{
   protected $fillable = [
      'departament_name'
  ];
   use HasFactory;
   public $timestamps = false;
   protected $table = 'departaments';
}