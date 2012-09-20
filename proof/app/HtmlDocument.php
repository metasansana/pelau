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
use proof\php\Stringable;

class HtmlDocument
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

    public function addTemplate(Stringable $template)
    {
        $this->templates->add((string)$template);
        return $this;
    }

    public function clear()
    {
        $this->templates->clear();
        $this->components->clear();
    }

    public function put($name, Stringable $item)
    {
        $this->components->add($name, (string)$item);
    }

    public function show()
    {

       $page  = $this->components->toArray();

        foreach($this->templates as $value)
        {
            $flag = (include_once $value);
        }

    }

    public function render($name)
    {
        if($this->components->indexAt($name))
            return (string)$this->components->get ($name);

        return NULL;
    }
}