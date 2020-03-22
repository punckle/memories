<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.default_connection' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
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

$a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php', true],
]));

$b = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();
$c = ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService());
$d = ($this->services['vich_uploader.upload_handler'] ?? $this->load('getVichUploader_UploadHandlerService.php'));
$e = new \Gedmo\Timestampable\TimestampableListener();
$e->setAnnotationReader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

$a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('book_pictures', $b, $c, $d));
$a->addEventSubscriber(($this->privates['stof_doctrine_extensions.listener.loggable'] ?? $this->getStofDoctrineExtensions_Listener_LoggableService()));
$a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('book_pictures', $b, $c, $d));
$a->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('book_pictures', $b, $c, $d));
$a->addEventSubscriber($e);
$a->addEventSubscriber(($this->privates['stof_doctrine_extensions.listener.blameable'] ?? $this->getStofDoctrineExtensions_Listener_BlameableService()));
$a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'serverVersion' => '5.7', 'defaultTableOptions' => ['charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci']], new \Doctrine\DBAL\Configuration(), $a, []);