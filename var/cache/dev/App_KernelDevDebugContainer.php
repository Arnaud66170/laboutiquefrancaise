<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerID9a7KA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerID9a7KA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerID9a7KA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerID9a7KA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerID9a7KA\App_KernelDevDebugContainer([
    'container.build_hash' => 'ID9a7KA',
    'container.build_id' => '764e1207',
    'container.build_time' => 1653321998,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerID9a7KA');
