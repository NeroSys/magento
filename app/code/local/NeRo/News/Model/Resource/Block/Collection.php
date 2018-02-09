<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/9/18
 * Time: 12:55 PM
 */

class NeRo_News_Model_Resource_Block_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    public function _construct()
    {
        parent::_construct();

        $this->_init('news/block');
    }
}