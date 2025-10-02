<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastPaper extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'exam_type', 'exam_board', 'subject', 
        'year', 'ques_link', 'ans_link', 'is_active', 'is_deleted'
    ];
}
