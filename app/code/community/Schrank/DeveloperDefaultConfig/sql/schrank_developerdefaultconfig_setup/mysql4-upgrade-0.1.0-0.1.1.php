<?php
/**
 * Install script disables all caches
 *
 * @author     Fabian Blechschmidt <blechschmidt@fabian-blechschmidt.de>
 * @category   Schrank
 * @package    Schrank_DeveloperDefaultConfig
 * @license    http://www.ikonoshirt.de/stuff/licenses/beerware-fabian.txt
 * @link       https://github.com/Schrank/DefaultDeveloperConfig
 * @since      File available since Release 0.1.1
 */
$processCollection = Mage::getModel('index/process')->getCollection();

foreach ($processCollection as $process) {
    /* @var $process Mage_Index_Model_Process */
    $process->reindexAll();
}

