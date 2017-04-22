<?php
use McNeely\Prepocess;
use Yay\Engine;

require 'vendor/autoload.php';

$test = new Prepocess(new Engine(), __FILE__);
$test->initialize();

__halt_compiler();
macro {
unless (···expression) { ···body }
} >> {
if (! (···expression)) {
···body
}
}

$x=0;
unless ($x === 1) {
echo "\$x is not 1";
}