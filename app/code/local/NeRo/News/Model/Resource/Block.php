<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/9/18
 * Time: 12:50 PM
 */

class NeRo_News_Model_Resource_Block extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('news/block', 'block_id');
    }
}