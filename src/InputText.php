<?php
namespace MCDev\Components;


class InputText{

    /**
     * Array associativo com todos elementos do componente
     *
     * @param string $inputName
     * @param string $title
     * @param string $id
     * @param string $classes
     * @param string $placeholder
     * @param boolean $required
     * @return array
     */
    public function getArray(string $inputName, string $title,  string $id=null,string $classes=null,string $placeholder=null, bool $required=false): array
    {
        return \compact('inputName', 'title', 'id', 'classes', 'placeholder', 'required');
    }
}
