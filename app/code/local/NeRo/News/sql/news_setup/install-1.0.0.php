<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/9/18
 * Time: 2:47 PM
 * @var Mage_Core_Model_Resource_Setup $installer
 */

$installer = $this;

$installer->startSetup();

$installer->run("
    CREATE TABLE `{$this->getTable('news/block')}` (
  `block_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `block_status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");


// second variant for create table. it seems like yii2 -migration. ьез привязки к sql серверу

//$table = $installer->getConnection()->newTable($this->getTable('news/block'))
//    ->addColumn('block_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
//        'identity' => true,
//        'unsigned' => true,
//        'nullable' => false,
//        'primary'  => true
//    ))
//    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
//        'nullable' => false,
//    ))
//    ->addColumn('content', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
//        'nullable' => false,
//    ))
//    ->addColumn('image', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
//        'nullable' => false,
//    ))
//    ->addColumn('block_status', Varien_Db_Ddl_Table::TYPE_TINYINT, null, array(
//        'nullable' => false,
//    ))
//    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
//        'nullable' => false,
//    ));

$installer->endSetup();