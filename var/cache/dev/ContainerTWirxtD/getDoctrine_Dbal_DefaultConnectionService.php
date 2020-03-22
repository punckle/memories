<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.default_connection' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php';
include_once $this->targetDirs[3].'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/EventListener/Doctrine/BaseListener.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/EventListener/Doctrine/CleanListener.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Adapter/AdapterInterface.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Adapter/ORM/DoctrineORMAdapter.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/EventListener/Doctrine/RemoveListener.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/EventListener/Doctrine/UploadListener.php';
include_once $this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Timestampable/TimestampableListener.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';

$a = new \Doctrine\DBAL\Configuration();

$b = new \Doctrine\DBAL\Logging\LoggerChain();

$c = new \Symfony\Bridge\Monolog\Logger('doctrine');
$c->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
$c->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

$b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($c, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
$b->addLogger(($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

$a->setSQLLogger($b);
$d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php', true],
]));

$e = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();
$f = ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService());
$g = ($this->services['vich_uploader.upload_handler'] ?? $this->load('getVichUploader_UploadHandlerService.php'));
$h = new \Gedmo\Timestampable\TimestampableListener();
$h->setAnnotationReader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

$d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('book_pictures', $e, $f, $g));
$d->addEventSubscriber(($this->privates['stof_doctrine_extensions.listener.loggable'] ?? $this->getStofDoctrineExtensions_Listener_LoggableService()));
$d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('book_pictures', $e, $f, $g));
$d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('book_pictures', $e, $f, $g));
$d->addEventSubscriber($h);
$d->addEventSubscriber(($this->privates['stof_doctrine_extensions.listener.blameable'] ?? $this->getStofDoctrineExtensions_Listener_BlameableService()));
$d->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'serverVersion' => '5.7', 'defaultTableOptions' => ['charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci']], $a, $d, []);