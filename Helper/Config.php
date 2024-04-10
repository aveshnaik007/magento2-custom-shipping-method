<?php

/**
 *
 * @category  Custom Development
 * @email     contactus@learningmagento.com
 * @author    Learning Magento
 * @website   learningmagento.com
 * @Date      10-04-2024
 */

namespace Learningmagento\CustomShipping\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Config extends AbstractHelper
{

    public function getConfiguration($field, $storeId = null)
    {
        return $this->getConfigValue('customization/order_address_fields/'.$field, $storeId);
    }

    private function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }
}
