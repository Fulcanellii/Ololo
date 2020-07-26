<?php namespace Arr\MainContent\Models;

use Model;

/**
 * Model
 */
class Main extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'arr_maincontent_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'featured_images' => ['System\Models\File', 'order' => 'sort_order']
    ];
}
