<?php
namespace proof\app;

/**
 * timestamp Sep 9, 2012 9:27:21 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *
 */
use proof\net\http\AbstractHttpListener;

abstract class WebController extends AbstractHttpListener implements Controller
{

    /**
     * The view for the web controller
     * @var proof\app\Window    $view
     * @access protected
     */
    protected $view;

    public function __construct(Window $w)
    {

        $this->view = $w;

    }

}