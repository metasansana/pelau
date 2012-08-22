<?php
namespace proof\app;

/**
 * timestamp Aug 22, 2012 5:04:33 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *<p> Class used in implementing MVC like control.</p>
 *
 * <p>Extend this class and implement the required onPost() and onGet() methods with logic for your applications.</p>
 *
 */
abstract class Controller implements GetListener, PostListener
{

    /**
     * Implementor of the Window interface used as the 'view' for the application.
     * @var proof\app\Window
     * @access private
     */
    protected $view;

    /**
     * Constructs a new controller
     * @param \proof\app\Window $view    Implementor of the Window interface used as the 'view' for the application.
     */
    public function __construct(Window $view)
    {
        $this->view = $view;
    }

}