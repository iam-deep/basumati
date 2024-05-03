<?php

namespace App\Http\InputTypes;

use Deep\FormTool\Core\InputTypes\CheckboxType;
use Deep\FormTool\Core\InputTypes\Common\InputType;
use Deep\FormTool\Core\InputTypes\Common\ICustomType;

class YesNoCheckbox extends CheckboxType implements ICustomType
{
    public int $type = InputType::CUSTOM;

    public function getTableValue()
    {
        if ($this->value == $this->valueYes) {
            return '<span class="badge btn-success">'.$this->captionYes.'</span>';
        } else {
            return '<span class="badge btn-danger">'.$this->captionNo.'</span>';
        }
    }
}
