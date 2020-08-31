<?php

use Contao\DC_Table;

/**
 * Class DC_TableExtension.
 */
class DC_TableExtension extends DC_Table {

    /**
     * Implements the __call magic method.
     *
     * @param string $closure
     *   The closure.
     * @param array $args
     *   The arguments.
     *
     * @return mixed
     *   The function result, or FALSE on error.
     */
    public function __call(string $closure, array $args) {
        return call_user_func_array($this->{$closure}->bindTo($this), $args);
    }

}
