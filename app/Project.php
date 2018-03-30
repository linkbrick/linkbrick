<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Project extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = ['launched_date','completion_date','tenure','unit_per_floor','title',
        'property_size','price_range','price_per_sqft','value_for_money','potential_capital_gain',
        'value_for_rental_yield','family_investment','suitability_for_expatriates','students',
        'mixed_development','security_level','density','down_payment', 'location',
        'maintenance_fee','booking_fee','number_of_floor','number_of_unit', 'number_of_block',
        'land_area','name','project_tag_line','status','excerpt'];

    const COLUMN_CAPTION = [
        'id' => 'ID',
        'name' => 'Project Name',
        'project_tag_line' => 'Project Tag Line',
        'launched_date' => 'Launched Date',
        'completion_date' => 'Completion Date',
        'tenure' => 'Tenure',
        'unit_per_floor' => 'Unit Per Floor',
        'title' => 'Title',
        'property_size' => 'Property Size',
        'price_range' => 'Price Range',
        'price_per_sqft' => 'Price per Square Feet',
        'mixed_development' => 'Mixed Development',
        'security_level' => 'Security Level',
        'density' => 'Density',
        'down_payment' => 'Down Payment',
        'location' => 'Location',
        'maintenance_fee' => 'Maintenance Fee',
        'booking_fee' => 'Booking Fee',
        'number_of_floor' => 'Number of Floor',
        'number_of_unit' => 'Number of Unit',
        'number_of_block' => 'Number of Block',
        'land_area' => 'Land Area',
        'status' => 'Status',
        'value_for_money' => 'Value for Money',
        'potential_capital_gain' => 'Potential Capital Gain',
        'value_for_rental_yield' => 'Value for Rental Yield',
        'family_investment' => 'Family Investment',
        'suitability_for_expatriates' => 'Suitable for Expatriates',
        'students' => 'Students',
        'excerpt' => 'Excerpt',
    ];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function developer()
    {
        return $this->belongsToMany(Developer::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status','ACTIVE');
    }



}
