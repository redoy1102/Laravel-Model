<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam_marksModel extends Model
{
    protected $table = 'exam_marks';
    protected $primaryKey = 'id';
    protected $incrementing = true;
    protected $keyType = 'int';
    protected $timestamps = false;
    
    use HasFactory;
}
