<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Agent extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = ['name','position','excerpt','description','email','contact_no'];

    const COLUMN_CAPTION = [
        'id' => 'ID',
        'name' => 'Agent Name',
        'position' => 'Position',
        'excerpt' => 'Excerpt',
        'description' => 'Description',
        'email' => 'Email Address',
        'contact_no' => 'Contact No'
    ];

    public function scopeActive($query)
    {
        return $query->where('status','ACTIVE');
    }
}
