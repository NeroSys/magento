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

//        if (Mage::helper('news')->isModuleOutputEnabled()){
//
//
//        }

        echo Mage::helper('news')->__('news');
//        if we need to use helper with arrays working we have to do

//        echo Mage::helper('news/arrays)->
//        через слэш указываем вызов хелпера не дефолтного.
    }

}