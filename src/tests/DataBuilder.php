<?php

/*
 * Source code downloaded from
 * https://gist.github.com/jakzal/d601b419187e1d0db9af
 */

namespace tests;


abstract class DataBuilder
{
    /**
     * @var array
     */
    protected $defaults = [];

    protected $data = [];

    abstract function getDataClass(): string;

    /**
     * @return object
     */
    public function build()
    {
        $data = array_merge($this->defaults, $this->data);
        $entity = $this->instantiate();
        foreach ($data as $field => $value) {
            $this->setObjectProperty($entity, $field, $value);
        }
        return $entity;
    }
    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return $this
     *
     * @throws \BadMethodCallException in case method is not supported
     */
    public function __call($name, $arguments)
    {
        if (0 === strpos($name, 'with') && 1 === count($arguments)) {
            $name = lcfirst(str_replace('with', '', $name));

            return $this->withProperty($name, $arguments[0]);
        }
        throw new \BadMethodCallException(sprintf('Call to undefined method %s::%s', static::class, $name));
    }
    /**
     * @param array $data
     *
     * @return $this
     */
    public function with(array $data)
    {
        foreach ($data as $property => $value) {
            $this->data[$property] = $value;
        }
        return $this;
    }
    /**
     * @param string $name
     * @param mixed  $value
     *
     * @return $this
     */
    protected function withProperty($name, $value)
    {
        $this->data[$name] = $value;
        return $this;
    }
    /**
     * @param object $object
     * @param string $name
     * @param mixed  $value
     */
    protected function setObjectProperty($object, $name, $value)
    {
        $property = new \ReflectionProperty($this->getDataClass(), $name);
        $property->setAccessible(true);
        $property->setValue($object, $value);
    }
    /**
     * @return object
     *
     */
    protected function instantiate()
    {
        $class = $this->getDataClass();
        return new $class();
    }
}