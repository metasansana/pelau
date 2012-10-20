<?php
namespace proof\app\web;
/**
 * timestamp Oct 20, 2012 4:46:09 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app\web
 *
 *  Container for filtered webapp content. Use this class to automatically escape unsafe output.
 *
 */
use proof\app\InputFilter;
use proof\php\Object;

class FilteredContent extends Object implements ContentContainer
{

    /**
     * A container that this container wraps around.
     * @var proof\app\web\ContentContainer
     * @access private
     */
    private $c;

    /**
     * The filter to be used.
     * @var proof\app\InputFilter
     * @access private
     */
    private $f;


    /**
     * Constructs a new FilteredContent.
     * @param \proof\app\web\ContentContainer $c    A container that this container wraps around.
     * @param \proof\app\web\InputFilter $f    The filter to be used.
     */
    public function __construct(ContentContainer $c, InputFilter $f)
    {
        $this->c = $c;
        $this->f = $f;
    }

    public function addContent($key, $content)
    {
        $this->c->addContent($key, $this->f->filter($content));
    }

    public function render(\IteratorAggregate $list)
    {
        $this->c->render($list);
    }



}