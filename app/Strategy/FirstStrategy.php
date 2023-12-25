<?php
declare(strict_types=1);

namespace App\Strategy;

class FirstStrategy extends Date implements Contract
{
   public function dateFormat(): string
{
    return date('Y-m-d');
}
    public function format(object $object): array
    {
        $formattedData = [];
        foreach ($object as $key => $val) {
            $formattedData[] = $key . ' - ' . $val;
        }
        $formattedData[] = '_______';
        return array(
            'name' => 'FirstStrategy_' . $this->dateFormat() . '.txt',
            'text' => implode("\n" , $formattedData),
    );
}
}
