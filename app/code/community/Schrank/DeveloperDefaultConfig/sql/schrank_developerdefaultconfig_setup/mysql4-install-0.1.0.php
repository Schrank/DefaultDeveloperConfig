<?php
/**
 * Install script disables all caches
 *
 * @author     Fabian Blechschmidt <blechschmidt@fabian-blechschmidt.de>
 * @category   Schrank
 * @package    Schrank_DeveloperDefaultConfig
 * @license    http://www.ikonoshirt.de/stuff/licenses/beerware-fabian.txt
 * @link       https://github.com/Schrank/DefaultDeveloperConfig
 * @since      File available since Release 0.1.0
 */

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

/* @var $model Mage_Core_Model_Cache */
$model = Mage::getModel('core/cache');
/* @var $options array */
$options = $model->canUse(null);

$newOptions = array();
foreach ($options as $option => $value) {
    $newOptions[$option] = 0;
}

$model->saveOptions($newOptions);