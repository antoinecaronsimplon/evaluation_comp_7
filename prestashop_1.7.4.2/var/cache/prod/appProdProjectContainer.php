<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4xuz8xb\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4xuz8xb/appProdProjectContainer.php') {
    touch(__DIR__.'/Container4xuz8xb.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container4xuz8xb\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container4xuz8xb\appProdProjectContainer(array(
    'container.build_hash' => '4xuz8xb',
    'container.build_id' => '2630fe92',
    'container.build_time' => 1536831270,
), __DIR__.\DIRECTORY_SEPARATOR.'Container4xuz8xb');
