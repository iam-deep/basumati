<?php

namespace App\Http\InputTypes;

use Deep\FormTool\Core\InputTypes\SelectType;
use Deep\FormTool\Core\InputTypes\Common\InputType;
use Deep\FormTool\Core\InputTypes\Common\ICustomType;

class StatusType extends SelectType implements ICustomType
{
    public int $type = InputType::CUSTOM;

    public function __construct()
    {
        parent::__construct();
        
        $this->noFirst()->options([
            1 => 'Active',
            0 => 'Inactive'
        ]);
    }

    public function getTableValue()
    {
        $this->createOptions();

        if (isset($this->options->{$this->value})) {
            $val = $this->options->{$this->value};
            if ($this->value == 1) {
                return '<span class="badge btn-success">'.$val.'</span>';
            } else {
                return '<span class="badge btn-danger">'.$val.'</span>';
            }
        }

        return null;
    }
}
