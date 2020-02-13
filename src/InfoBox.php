<?php

namespace MCDev\Components;

class InfoBox
{
    /**
     * Undocumented function
     *
     * @param string $title
     * @param string $value
     * @param string $icon
     * @param string $color
     * @param string $percent
     * @param string $description
     */
    public function getArray(string $title, string $value, string $icon = '', string $color = 'light',string $percent = null, string $description = null): array
    {
        return compact('title', 'value','icon', 'color', 'percent', 'description');
    }
}
