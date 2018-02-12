<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/12/18
 * Time: 11:22 PM
 */

class NeRo_News_NewsController extends Mage_Core_Controller_Front_Action
{
    public function myAction(){

        var_dump($this->getRequest()->getParams());

        die('test');
    }

}