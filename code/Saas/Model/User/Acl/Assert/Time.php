<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Cm
 * @package     Cm_Saas
 * TODO_COPYRIGHT
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Assert time for admin acl
 * 
 * @category   Mage
 * @package    Mage_Admin
 */
class Cm_Saas_Model_User_Acl_Assert_Time implements Zend_Acl_Assert_Interface
{
    /**
     * Assert time
     *
     * @param Zend_Acl $acl
     * @param Zend_Acl_Role_Interface $role
     * @param Zend_Acl_Resource_Interface $resource
     * @param string $privilege
     * @return boolean
     */
    public function assert(Cm_Saas_Model_User_Acl $acl, Cm_Saas_Model_User_Acl_Role $role = null,
                           Cm_Saas_Model_User_Acl_Resource $resource = null, $privilege = null)
    {
        return $this->_isCleanTime(time());
    }

    protected function _isCleanTime($time)
    {
        // ...
    }
}
