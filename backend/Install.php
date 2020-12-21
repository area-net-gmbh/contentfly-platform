<?php
namespace Contentfly;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Install{
    public static function init(Event $event)
    {
        $vendorDir = $event->getComposer()->getConfig()->get('vendor-dir');
        //require $vendorDir . '/autoload.php';

        mkdir($vendorDir.'/../test');
        mkdir('test-2');
    }
}