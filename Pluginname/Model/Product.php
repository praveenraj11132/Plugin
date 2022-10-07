<?php
namespace Praveen\Pluginname\Model;

class Product extends \Magento\Catalog\Model\Product
{
    public function getName()
    {
        $name=parent::getName();
        $name="Praveen ".$name;
        return $name;
    }
}