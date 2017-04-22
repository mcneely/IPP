<?php

namespace McNeely;

class Prepocess
{

    /**
     * Prepocess constructor.
     * @param \Yay\Engine $preprocessor
     * @param string      $file
     */
    public function __construct($preprocessor, $file)
    {
        $this->preprocessor = $preprocessor;
        $this->file         = $file;
    }

    public function initialize()
    {
        $contents      = file_get_contents($this->file);
        $pattern       = "__halt_compiler();"; //__COMPILER_HALT_OFFSET__ didn't work correctly.
        $parsecontents = substr($contents, strpos($contents, $pattern) + strlen($pattern));
        gc_disable();
        $expansion = $this->preprocessor->expand($parsecontents);
        gc_enable();
        eval($expansion);
    }
}