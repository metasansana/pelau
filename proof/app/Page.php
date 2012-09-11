<?php
namespace proof\app;
/**
 * timestamp Sep 10, 2012 4:41:25 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Abstract implementor of the Window interface.
 *
 */
use proof\util\Map;
use proof\util\ArrayList;
use proof\php\String;

class Page implements Window
{

    /**
     * A Map containing the components added to the window.
     * @var proof\util\Map
     * @access protected
     */
    protected $components;

    /**
     * A list of templates to be imported.
     * @var proof\util\ArrayList
     * @access protected
     */
    protected $templates;

    public function __construct()
    {
        $this->components = new Map;
        $this->templates = new ArrayList;

    }
    public function add(Component $c)
    {
        $this->components->add($c->getName(), $c->getContent());
        return $this;
    }

    public function addTemplate(String $template)
    {
        $this->templates->add((string)$template);
        return $this;
    }

    public function flushComponents()
    {

        $comps = $this->components;
        $this->components->clear();
        return $comps;

    }

    public function flushTemplates()
    {

        $temps = $this->templates;
        $this->templates->clear();
        return $temps;

    }


    public function render()
    {

       $page  = $this->components->toArray();

        foreach($this->templates as $value)
        {
            $flag = (include_once $value);
        }

    }
}