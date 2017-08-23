<?php

namespace alexchizhovcom\tinymce;

use yii\helpers\Html;
use yii\widgets\InputWidget;

class TinyMCE extends InputWidget
{

    public function run()
    {
        return $this->renderInput();
    }

    protected function renderInput()
    {
        return Html::textarea($this->name, $this->value, $this->options);
    }

}