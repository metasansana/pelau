<?php
namespace proof\app;
/**
 * timestamp Sep 11, 2012 4:28:19 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Abstract implementor of the Controller interface.
 *
 */
abstract class AbstractController implements Controller
{

    /**
     * The view for this controller.
     * @var proof\app\Window
     * @access protected
     */
    protected $w;

    public function __construct(Window $w)
    {

        $this->w = $w;

    }

}