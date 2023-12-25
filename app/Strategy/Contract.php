<?php
declare(strict_types=1);

namespace App\Strategy;
interface Contract
{
    public function format(object $object) :array;
}
