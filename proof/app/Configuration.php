<?php

namespace proof\app;

/**
 * timestamp Sep 16, 2012 10:15:11 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Class that represents the configuration settings of an application.
 * <i>Note: This class deals with php.ini style config files only!</i>
 *
 */
use proof\php\String;
use proof\util\Map;

class Configuration implements \IteratorAggregate
{

    /**
     * Settings retrieved from a ini file.
     * @var proof\util\Map
     * @access private
     */
    private $config;

    public function __construct(String $file)
    {
        //@todo Configuration::__construct() will take a File object in the future and will throw an exception on failure.

        $this->config = new Map(parse_ini_file((string) $file));

    }

    public function getIterator()
    {

        return $this->config->getIterator();

    }

    public function get($option)
    {
        if ($this->config->indexAt($option))
        {
            $option = $this->config->get($option);
            if (is_array($option))
                return new Map($option);    //@todo In future, this may a nested Map class.

            return $option;
        }

    }

}