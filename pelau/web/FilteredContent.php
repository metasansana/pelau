<?php
namespace pelau\app\web;
/**
 * timestamp Oct 20, 2012 4:46:09 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\app\web
 *
 *  Container for filtered webapp content. Use this class to automatically escape unsafe output.
 *
 */
use pelau\app\InputFilter;
use pelau\php\Object;

class FilteredContainer extends Object implements Container
{

    /**
     * A container that this container wraps around.
     * @var pelau\app\web\ContentContainer
     * @access private
     */
    private $c;

    /**
     * The filter to be used.
     * @var pelau\app\InputFilter
     * @access private
     */
    private $f;


    /**
     * Constructs a new FilteredContent.
     * @param \pelau\app\web\ContentContainer $c    A container that this container wraps around.
     * @param \pelau\app\web\InputFilter $f    The filter to be used.
     */
    public function __construct(ContentContainer $c, InputFilter $f)
    {
        $this->c = $c;
        $this->f = $f;
    }

    public function add($key, $content)
    {
        $this->c->addContent($key, $this->f->filter($content));
    }

    public function show()
    {
        $this->c->show();
    }



}