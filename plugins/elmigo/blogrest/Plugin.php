<?php

namespace Elmigo\BlogREST;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * BlogREST Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'elmigo.blogrest::lang.plugin.name',
            'description' => 'elmigo.blogrest::lang.plugin.description',
            'author'      => 'Elmigo',
            'icon'        => 'icon-leaf'
        ];
    }

}
