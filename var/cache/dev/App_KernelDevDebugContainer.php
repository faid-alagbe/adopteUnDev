<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTt7JsVl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTt7JsVl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTt7JsVl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTt7JsVl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTt7JsVl\App_KernelDevDebugContainer([
    'container.build_hash' => 'Tt7JsVl',
    'container.build_id' => 'cfdf522a',
    'container.build_time' => 1736351510,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTt7JsVl');
