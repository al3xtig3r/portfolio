<?php

namespace Al3xTig3r\Portfolio\Components;

use Cms\Classes\ComponentBase;

use Lang;
use Log;

use Al3xTig3r\Portfolio\Models\Service;

class Services extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Services Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    /**
     * Retrieve a collection of Services
     *
     * @param int $limit
     *
     * @return Collection|null
     */
    public function get($limit = 9999)
    {
        $services = Service::limit($limit)
                    ->get();

        return $services;
    }
}
