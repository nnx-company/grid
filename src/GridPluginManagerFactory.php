<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace MteGrid\Grid;

use Zend\Mvc\Service\AbstractPluginManagerFactory;

/**
 * Class GridPluginManagerFactory 
 * @package MteGrid\Grid
 */
class GridPluginManagerFactory extends AbstractPluginManagerFactory
{
    const PLUGIN_MANAGER_CLASS = GridPluginManager::class;
}
