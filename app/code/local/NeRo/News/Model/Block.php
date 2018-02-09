<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/9/18
 * Time: 12:43 PM
 */

class NeRo_News_Model_Block extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();

        $this->_init('news/block');
    }

}