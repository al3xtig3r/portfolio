<?php

namespace Al3xTig3r\Portfolio;

use Backend;
use System\Classes\PluginBase;

use Lang;

/**
 * Portfolio Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => Lang::get('al3xtig3r.portfolio::lang.name'),
            'description' => Lang::get('al3xtig3r.portfolio::lang.description'),
            'author'      => 'Al3xTig3r',
            'icon'        => 'icon-suitcase'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Al3xTig3r\Portfolio\Components\Services' => 'services',
            'Al3xTig3r\Portfolio\Components\Customers' => 'customers',
            'Al3xTig3r\Portfolio\Components\Works' => 'works',
            'Al3xTig3r\Portfolio\Components\Showcase' => 'portfolioShowcase'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'portfolio' => [
                'label'       => Lang::get('al3xtig3r.portfolio::lang.name'),
                'url'         => Backend::url('al3xtig3r/portfolio/works'),
                'icon'        => 'icon-suitcase',
                'permissions' => ['al3xtig3r.portfolio.*'],
                'order'       => 500,
                'sideMenu' => [
                    'services' => [
                        'label' => Lang::get('al3xtig3r.portfolio::lang.services.multiple'),
                        'icon'  => 'icon-cogs',
                        'url'   => Backend::url('al3xtig3r/portfolio/services'),
                        'permissions' => ['al3xtig3r.portfolio.*']
                    ],
                    'customers' => [
                        'label' => Lang::get('al3xtig3r.portfolio::lang.customers.multiple'),
                        'icon'  => 'icon-users',
                        'url'   => Backend::url('al3xtig3r/portfolio/customers'),
                        'permissions' => ['al3xtig3r.portfolio.*']
                    ],
                    'works' => [
                        'label' => Lang::get('al3xtig3r.portfolio::lang.works.multiple'),
                        'icon'  => 'icon-money',
                        'url'   => Backend::url('al3xtig3r/portfolio/works'),
                        'permissions' => ['al3xtig3r.portfolio.*']
                    ]
                ]
            ],
        ];
    }
}
