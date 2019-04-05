<?php

namespace Al3xTig3r\Portfolio\Models;

use Model;

/**
 * Work Model
 */
class Work extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'al3xtig3r_portfolio_works';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Implement fields
     */
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array Translatable fields
     */
    public $translatable = [
        'name',
        'description',
        'comment'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'customer' => 'Al3xTig3r\Portfolio\Models\Customer',
        'service' => 'Al3xTig3r\Portfolio\Models\Service'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'main_image' => 'System\Models\File'
    ];
    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];
}
