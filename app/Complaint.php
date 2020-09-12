<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    public function complaint_type()
    {
        return $this->belongsTo(Complaint_type::class);
    }

    protected $fillable = [
        'name', 'email', 'complaint_type_id', 'content'
    ];

    protected $hidden = [
        'complaint_type_id', 'updated_at'
    ];
}
