<?php
namespace proof\app;
/**
 * timestamp Sep 16, 2012 10:04:47 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Class representing an application
 *
 */
abstract class Application
{

    /**
     * Configuration object
     * @var proof\app\Configuration
     * @access protected
     */
    protected $config;

    /**
     * Constructs a new application object.
     * @param \proof\app\HtmlDocument $ui    The ui for the application.
     * @param \proof\app\Configuration $config = NULL    Optional configs
     */
    public function __construct(Configuration $config)
    {

        $this->config = $config;

    }

    abstract public function run();

    public function getConfiguration()
    {
        return $this->config;

    }
}