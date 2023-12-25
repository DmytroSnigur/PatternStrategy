<?php
declare(strict_types=1);

namespace App\Strategy;

class SecondStrategy extends Date implements Contract
{
    public function dateFormat(): string
    {
        return date('Y-m-d');
    }
    public function format(object $object): array
    {
        $formattedData = [];
        foreach ($object as $key => $val) {
            $propertyName = implode(' ', preg_split('/(?=[A-Z])/', $key, -1, PREG_SPLIT_NO_EMPTY));
            $propertyName = strtolower($propertyName);
            $formattedData[] = "|$propertyName|$val";
        }
        $formattedData[] = '_______';
    return array(
        'name' => 'SecondFormatter_' . $this->dateFormat() . ".txt",
        'text' => implode("\r", $formattedData),
    );
    }
}


