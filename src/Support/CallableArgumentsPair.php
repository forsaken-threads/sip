<?php namespace ForsakenThreads\Diplomatic\Support;

class CallableArgumentsPair {

    /** @var callable */
    protected $callable;

    /** @var array */
    protected $arguments;

    /**
     *
     * Accepts an array of arguments, normally the result of `func_get_args()`
     *
     * @param $func_args
     */
    public function __construct($func_args)
    {
        $callable = array_shift($func_args);
        $this->callable = $callable;
        $this->arguments = $func_args;
    }

    /**
     *
     * Get the arguments for the callable
     *
     * @return array
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     *
     * Get the callable
     *
     * @return callable
     */
    public function getCallable()
    {
        return $this->callable;
    }

}