<?php

declare(strict_types=1);

namespace App\Strategy;

class Context
{
private $objects = [];
private $strategy;

public function __construct(array $stdClass)
{
foreach ($stdClass as $value) {
$this->objects[] = (object) $value;
}
}

public function setStrategy(Contract $strategy)
{
$this->strategy = $strategy;
return $this;
}

public function execute(): array
{
$result = [];

foreach ($this->objects as $object) {
$result[] = $this->strategy->format($object);
}

return $result;
}
}
