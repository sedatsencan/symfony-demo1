<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCcqcayi\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCcqcayi/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerCcqcayi.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerCcqcayi\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerCcqcayi\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Ccqcayi',
    'container.build_id' => 'e4756c3c',
    'container.build_time' => 1531394849,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerCcqcayi');
