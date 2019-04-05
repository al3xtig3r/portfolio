<?php

namespace Al3xTig3r\Portfolio\Components;

use Cms\Classes\ComponentBase;

use Lang;
use Log;

use Al3xTig3r\Portfolio\Models\Work;

class Works extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Works Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    /**
     * Retrieve a collection of Works
     *
     * @param int $limit
     *
     * @return Collection|null
     */
    public function get($limit = 9999)
    {
        $works = Work::orderBy('release_date', 'DESC')
                    ->where('public', true)
                    ->limit($limit)
                    ->get();

        return $works;
    }
}
