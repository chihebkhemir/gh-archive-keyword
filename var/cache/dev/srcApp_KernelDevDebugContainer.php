<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLxtxGyG\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLxtxGyG/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLxtxGyG.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLxtxGyG\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerLxtxGyG\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'LxtxGyG',
    'container.build_id' => '5e273651',
    'container.build_time' => 1617798748,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLxtxGyG');
