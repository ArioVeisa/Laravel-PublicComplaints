<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportStatus extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'report_id',
        'image',
        'status',
        'description',
    ];
    public function report(){
        // satu report memiliki banyak report status
        return $this->belongsTo(Report::class);
    }
}
