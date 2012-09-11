<?php
namespace proof\app;
/**
 * timestamp Sep 11, 2012 4:33:59 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Class representing HTML output.
 *
 */
class Html implements Component
{

    /**
     * The name that will be used to retrieve this html.
     * @var string $name
     * @access protected
     */
    protected $name;

    /**
     * Actual HTML content.
     * @var string $content
     * @access protected
     */
    protected $content;

    /**
     * Constructs a new Html object.
     * @param string $name
     * @param string $content
     */
    public function __construct($name, $content)
    {

        $this->name = $name;
        $this->content = $content;

    }

    public function getName()
    {
        return $this->name;

    }

    public function getContent()
    {
        return $this->content;

    }

    public function __toString()
    {
        return $this->getContent();

    }

}