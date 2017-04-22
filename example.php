<?php
use McNeely\Prepocess;
use Yay\Engine;

require 'vendor/autoload.php';

$test = new Prepocess(new Engine(), __FILE__);
/*
 * All code below __halt_compiler() is executed at this point
 * Code between will be execute after however no variables will propagate.
 */
$test->initialize();

//This is required for things to work all Macro code should be below this line.
__halt_compiler();
echo "
<pre>";
macro {
    unless (···expression) { ···body }
} >> {
    if (! (···expression)) {
        ···body
    }
}

macro {
    __swap ( T_VARIABLE·A , T_VARIABLE·B ) // swap values between two variables
} >> {
    (list(T_VARIABLE·A, T_VARIABLE·B) = [T_VARIABLE·B, T_VARIABLE·A])
}

$x=0;
unless ($x === 1) {
    echo "\$x is not 1";
}

$foo = "foo";
$bar = "bar";
__swap($foo, $bar);

echo "\r\nFoo: $foo";
echo "\r\nBar: $bar";
echo "</pre>";