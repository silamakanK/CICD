<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXfl3F0O\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXfl3F0O/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXfl3F0O.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXfl3F0O\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXfl3F0O\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xfl3F0O',
    'container.build_id' => '2d650ea1',
    'container.build_time' => 1733907336,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXfl3F0O');