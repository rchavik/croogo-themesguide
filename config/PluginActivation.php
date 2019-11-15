<?php

namespace ThemesGuide\Config;

use Cake\ORM\TableRegistry;
use Cake\Cache\Cache;

class PluginActivation
{
    public function beforeActivation($controller)
    {
        return true;
    }

    public function onActivation($controller)
    {
        TableRegistry::get('Croogo/Settings.Settings')
            ->write('Theme.themesGuideStyle', 'greyson', [
                'editable' => true,
                'input_type' => 'radio',
                'params' => 'options=' . json_encode([
                    'greyson' => 'Greyson',
                    'monotony' => 'Monotony',
                ]),
            ]);
    }

}
