<?php namespace Al3xTig3r\Portfolio\Models;

use Model;

/**
 * Service Model
 */
class Service extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'al3xtig3r_portfolio_services';

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
        'name'
    ];

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
    public $attachOne = [];
    public $attachMany = [];
}
