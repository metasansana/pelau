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
     * The ui for the application.
     * @var proof\app\HtmlDocument
     * @access protected
     */
    protected $ui;

    /**
     * Constructs a new application object.
     * @param \proof\app\HtmlDocument $ui    The ui for the application.
     * @param \proof\app\Configuration $config = NULL    Optional configs
     */
    public function __construct(HtmlDocument $ui, Configuration $config = NULL)
    {

        $this->ui = $ui;
        $this->config = $config;

    }

    abstract public function run();

    public function getConfiguration()
    {
        return $this->config;

    }

    public function getUI()
    {
        return $this->ui;

    }

    static public function kill($status)
    {

        exit($status);

    }

}