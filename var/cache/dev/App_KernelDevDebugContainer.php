<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRabdlot\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRabdlot/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRabdlot.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRabdlot\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRabdlot\App_KernelDevDebugContainer([
    'container.build_hash' => 'Rabdlot',
    'container.build_id' => '181db46c',
    'container.build_time' => 1668109371,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRabdlot');