<?php
/**
 * NOTICE OF LICENSE
 * This source file is subject to the Lokey Coding, LLC - SOFTWARE LICENSE (v1.0)
 * that is bundled with this package in the file Lokey_LICENSE.txt.
 *
 * @category   Mage
 * @package    Lokey_PerGroupShipping
 * @copyright  Copyright (c) 2009 Lokey Coding, LLC <ip@lokeycoding.com>
 * @license    Lokey Coding, LLC - SOFTWARE LICENSE (v1.0)
 * @author     Lee Saferite <lee.saferite@lokeycoding.com>
 */

class Lokey_PerGroupShipping_Model_Mysql4_Group_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    protected function _construct()
    {
        $this->_init('Lokey_PerGroupShipping/Group');
    }
}