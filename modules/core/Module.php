<?php

namespace native\modules\core;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        $this->params['foo'] = 'bar';
        // ... остальной инициализирующий код ...
    }
}