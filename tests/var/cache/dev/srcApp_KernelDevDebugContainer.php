<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRWJYAMq\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRWJYAMq/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRWJYAMq.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRWJYAMq\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRWJYAMq\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'RWJYAMq',
    'container.build_id' => '5e95a93a',
    'container.build_time' => 1573854564,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRWJYAMq');
