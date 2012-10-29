<?php
/**
 * Set all admin notifications as read
 *
 * The notifications are updated after the login of an administrator,
 * because of this we have to trigger the observer method manually to
 * set the notifications afterwards as read.
 *
 * @author     Fabian Blechschmidt <blechschmidt@fabian-blechschmidt.de>
 * @category   Schrank
 * @package    Schrank_DeveloperDefaultConfig
 * @license    http://www.ikonoshirt.de/stuff/licenses/beerware-fabian.txt
 * @link       https://github.com/Schrank/DefaultDeveloperConfig
 * @since      File available since Release 0.1.3
 */
$observer = Mage::getModel('adminnotification/observer');
$observer->preDispatch(new Varien_Event_Observer());

$collection = Mage::getModel('adminnotification/inbox')->getCollection();
foreach ($collection as $notification) {
    /* @var $notification Mage_AdminNotification_Model_Inbox */
    if (!$notification->getIsRead()) {
        $notification->setIsRead(1)
            ->save();
    }
}