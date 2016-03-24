<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace MteGrid\Grid\View\Helper\JqGrid\Column;

use Zend\View\Helper\AbstractHelper;
use MteGrid\Grid\Column\ColumnInterface;
use Zend\View\Renderer\PhpRenderer;

/**
 * Class Column
 * @package MteGrid\Grid\View\Helper
 */
class Text extends AbstractHelper
{
    /**
     * @param ColumnInterface $column
     * @return string
     */
    public function __invoke(ColumnInterface $column)
    {
        /** @var  $escaper */
        $config = $this->getColumnConfig($column);
        $config = array_merge($config, $column->getAttributes());
        return (object)$config;
    }

    /**
     * Возвращает конфигурацию колонки
     * @param ColumnInterface $column
     * @return array
     */
    protected function getColumnConfig(ColumnInterface $column)
    {
        /** @var PhpRenderer $view */
        $view = $this->getView();
        /** @var \Zend\View\Helper\EscapeHtml $escape */
        $escape = $view->plugin('escapeHtml');
        $name = $escape($column->getName());
        $header = $column->getHeader();
        $config = [
            'label' => $header ? $escape($header->getTitle()) : null,
            'index' => strtolower($name),
            'name' => strtolower($name),
            'align' => 'center'
        ];
        return $config;
    }

    protected function getAttrValue($key, $attributes, $default = null)
    {
        return array_key_exists($key, $attributes) ? $attributes[$key] : $default;
    }
}