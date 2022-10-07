<?php

namespace Praveen\Pluginname\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class ProductEvent implements ObserverInterface
{

   public function execute(Observer $observer)
   {
       $product = $observer->getProduct();
       $originalName = $product->getName();
       $modifiedName = $originalName . ' Praveen';
       $product->setName($modifiedName);
   }

}