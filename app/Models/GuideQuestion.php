<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuideQuestion extends Model
{
    protected $fillable = [
        'question', 'question_en', 'answer', 'answer_en', 'slug', 'topic_id'
    ];
}
