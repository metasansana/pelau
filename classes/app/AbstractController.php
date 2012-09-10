<?php
namespace proof\app;
/**
 * timestamp Sep 9, 2012 9:52:08 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *
 */


abstract class AbstractController implements Controller
{

    /**
     * Internal EventBus of the application.
     * @var proof\app\EventBus
     * @access protected
     */
    protected $bus;

    /**
     * Internal Window.
     * @var proof\app\Window
     * @access protected
     */
    protected $w;


    public function __construct(Window $w, EventBus $bus)
    {

        $this->w = $w;
        $this->bus = $bus;


    }

}