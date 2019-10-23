<?php

$theme = \Cake\Core\Configure::read('Theme.themesGuideStyle');

$this->Html->css([
    '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
    '//cdnjs.cloudflare.com/ajax/libs/ionicons/3.0.0/css/ionicons.css',
    "$theme/theme.min.css",
    "$theme/template3.css",
    "custom.css",
], [
    'block' => 'css',
]);
