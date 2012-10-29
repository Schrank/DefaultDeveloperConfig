<?php
/**
 * Install script to set all admin notifications as read
 *
 * @author     Fabian Blechschmidt <blechschmidt@fabian-blechschmidt.de>
 * @category   Schrank
 * @package    Schrank_DeveloperDefaultConfig
 * @license    http://www.ikonoshirt.de/stuff/licenses/beerware-fabian.txt
 * @link       https://github.com/Schrank/DefaultDeveloperConfig
 * @since      File available since Release 0.1.1
 */
$collection = Mage::getModel('adminnotification/inbox')->getCollection();
foreach ($collection as $notification) {
    /* @var $notification Mage_AdminNotification_Model_Inbox */
    if (!$notification->getIsRead()) {
        $notification->setIsRead(1)
            ->save();
    }
}