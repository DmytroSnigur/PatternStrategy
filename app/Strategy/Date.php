<?php
declare(strict_types=1);

namespace App\Strategy;
abstract class Date {
public function dateFormat(): string
{
return date('Y-m-d');
}
}

