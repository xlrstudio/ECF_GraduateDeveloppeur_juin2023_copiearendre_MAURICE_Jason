<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerK0q7Nzs\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerK0q7Nzs/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerK0q7Nzs.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerK0q7Nzs\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerK0q7Nzs\App_KernelProdContainer([
    'container.build_hash' => 'K0q7Nzs',
    'container.build_id' => '17e078a2',
    'container.build_time' => 1676814468,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerK0q7Nzs');