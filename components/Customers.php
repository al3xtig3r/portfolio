<?php

namespace Al3xTig3r\Portfolio\Components;

use Cms\Classes\ComponentBase;

use Lang;
use Log;

use Al3xTig3r\Portfolio\Models\Customer;

class Customers extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Customers Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    /**
     * Retrieve a collection of Customers
     *
     * @param int $limit
     *
     * @return Collection|null
     */
    public function get($limit = 9999)
    {
        $customers = Customer::where('public', true)
                    ->limit($limit)
                    ->get();

        return $customers;
    }
}
