<?php

namespace Core;

class KernelContainer
{
    protected array $bindings = [];
    protected array $instances = [];

    public function bind(string $abstract, $concrete): void
    {
        $this->bindings[$abstract] = $concrete;
    }

    public function make(string $abstract)
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }

        if (isset($this->bindings[$abstract])) {
            $concrete = $this->bindings[$abstract];

            if (is_callable($concrete)) {
                return $this->instances[$abstract] = $concrete($this);
            }

            if (is_object($concrete) || is_array($concrete)) {
                return $this->instances[$abstract] = $concrete;
            }
        }
        if (class_exists($abstract)) {
            return $this->instances[$abstract] = new $abstract($this);
        }

        throw new \Exception("Cannot resolve [$abstract] from container.");
    }
}