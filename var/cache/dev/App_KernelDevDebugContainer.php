<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLg4tJOv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLg4tJOv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLg4tJOv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLg4tJOv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLg4tJOv\App_KernelDevDebugContainer([
    'container.build_hash' => 'Lg4tJOv',
    'container.build_id' => 'e1677c65',
    'container.build_time' => 1735948947,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLg4tJOv');
