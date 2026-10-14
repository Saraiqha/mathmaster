<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuickRevision extends Model
{
    protected $fillable = [
        'topic_id',
        'objectives',
        'objectives_bm',
        'key_formulas',
        'key_formulas_bm',
        'solving_tips',
        'solving_tips_bm',
        'worked_example',
        'worked_example_bm'
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}