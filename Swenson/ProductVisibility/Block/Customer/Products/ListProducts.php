<?php

namespace Swenson\ProductVisibility\Block\Customer\Products;

class ListProducts extends \Magento\Downloadable\Block\Customer\Products\ListProducts
{
    /**
     * Return download link visibility status
     *
     * @param integer $productId
     * @return int
     */

    public function getProductVisibility($productId)
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $product = $objectManager->create('Magento\Catalog\Model\Product')->load($productId);
        $isVisible = $product->getData('is_download_visible');
        return $isVisible;
    }


}
