<?php
namespace proof\app;

/**
 * timestamp Sep 15, 2012 11:58:38 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Parent class of classes that take control of an application's workflow.
 *
 */
abstract class Controller
{

    /**
     * The Page object this controller will use for output.
     * @var proof\app\Page $page A Page object.
     * @access protected
     */
    protected $page;

    /**
     * Constructs a new Controller object.
     * @param \proof\app\Page $page
     */
    public function __construct(Page $page)
    {

        $this->page = $page;

    }

}