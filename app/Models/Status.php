<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'desc',
        'sdate',
        'stime',
        'report_id'    
     ];  
     public function report(): BelongsTo
     {
         return $this->belongsTo(Report::class);
     }     
}