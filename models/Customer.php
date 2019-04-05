<?php

namespace Al3xTig3r\Portfolio\Models;

use Model;

/**
 * Customer Model
 */
class Customer extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'al3xtig3r_portfolio_customers';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'works' => 'Al3xTig3r\Portfolio\Models\Work'
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'logo' => 'System\Models\File'
    ];
    public $attachMany = [];
}
