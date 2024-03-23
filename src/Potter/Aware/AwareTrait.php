<?php

declare(strict_types=1);

namespace Potter\Aware;

trait AwareTrait 
{
    final public function get(string $id): mixed
    {
        return $this->$id;
    }
    
    final public function has(string $id): bool
    {
        return property_exists($this, $id) && isset($this->$id);
    }
    
    final protected function set(string $id, mixed $entry): void
    {
        $this->$id = $entry;
    }
    
    final protected function unset(string $id): void
    {
        unset($this->$id);
    }
}