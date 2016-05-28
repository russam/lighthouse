<?php

namespace Nuwave\Lighthouse\Support\Definition\Fields;

use Closure;
use Illuminate\Support\Fluent;

class ConnectionField extends Fluent
{
    /**
     * Set resolve function on field.
     *
     * @param  Closure $resolve
     * @return self
     */
    public function resolve(Closure $resolve)
    {
        $this->__set('resolve', $resolve);

        return $this;
    }

    /**
     * Add agruments to field.
     *
     * @param  array  $args
     * @param  boolean $append
     * @return self
     */
    public function args(array $args, $append = true)
    {
        $arguments = $append ? array_merge($this->get('args'), $args) : $args;

        $this->__set('args', $arguments);

        return $this;
    }

    /**
     * Convert to GraphQL field.
     *
     * @return array
     */
    public function field()
    {
        return $this->toArray();
    }
}