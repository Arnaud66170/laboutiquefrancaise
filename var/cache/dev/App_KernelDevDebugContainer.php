<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQe0sqye\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQe0sqye/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQe0sqye.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQe0sqye\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQe0sqye\App_KernelDevDebugContainer([
    'container.build_hash' => 'Qe0sqye',
    'container.build_id' => '9359a70a',
    'container.build_time' => 1652968687,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQe0sqye');
