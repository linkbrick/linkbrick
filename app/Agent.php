<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Agent extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = ['name','position','excerpt','description','email','contact_no','type','sequence','facebook_url','instagram_url'];

    const COLUMN_CAPTION = [
        'id' => 'ID',
        'name' => 'Agent Name',
        'position' => 'Position',
        'excerpt' => 'Excerpt',
        'description' => 'Description',
        'email' => 'Email Address',
        'contact_no' => 'Contact No',
        'type' => 'Agent Type',
        'sequence' => 'Sequence',
        'facebook_url' => 'Facebook Page Url',
        'instagram_url' => 'Instagram Page Url'
    ];

    public function scopeActive($query)
    {
        return $query->where('status','ACTIVE');
    }
}
