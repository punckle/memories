<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Vich\UploaderBundle\Naming\UniqidNamer.book_pictures' shared service.

include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/NamerInterface.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/Polyfill/FileExtensionTrait.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Naming/UniqidNamer.php';

return $this->services['Vich\\UploaderBundle\\Naming\\UniqidNamer.book_pictures'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
