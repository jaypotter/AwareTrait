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
        if (!property_exists($this, $id)) {
            return false;
        }
        if (!isset($this->$id)) {
            return false;
        }
        if (is_array($this->$id)) {
            return count($this->$id) > 0;
        }
        return true;
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