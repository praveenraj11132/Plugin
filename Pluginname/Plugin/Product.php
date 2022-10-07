<?php

namespace Praveen\Pluginname\Plugin;

class Product
{

    public function beforesetName($product,$url,$name=null)
    {
        $name="Praveen";
        $product="Arjun";
        return [$name,$product,$url];
    }

    public function afterGetName(\Magento\Catalog\Model\Product $product, $name)
    {
    
        return $name." Praveen";
    }

    public function aroundAddProduct(\Magento\Catalog\Model\Product $product,\Closure $proceed,$productInfo,$requestInfo = null) 
    {
        $requestInfo['qty'] = 5; 
        $result = $proceed($productInfo, $requestInfo);
        return $result;
    }
}

  


