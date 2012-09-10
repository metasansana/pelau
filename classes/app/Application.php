<?php
namespace proof\app;
/**
 * timestamp Sep 9, 2012 8:40:20 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 * Class that enscapulates an entire program.
 *
 */
use proof\util\Stack;

abstract class Application extends AbstractController
{

    /**
     * Internal user agent.
     * @var proof\app\UserAgent
     * @access protected
     */
    protected $agent;

    /**
     * Internal stack
     * @var proof\util\Stack
     * @access protected
     */
    protected $stack;




    public function __construct(Window $w, EventBus $bus)
    {

         $this->agent = new UserAgent();
         $this->stack = new Stack();
         parent::__construct($w, $bus);

    }

    abstract protected function start();

    abstract protected function stop();

     protected function push(Controller $c)
     {

          $this->stack->push($c);

     }

     public function onEvent(Event $e)
     {

          if($e instanceof ControlPushEvent)
              $this->push($e->getController);
     }


    public function main()
    {

        $this->bus->addHandler($this);

        $this->start();

        while(!$this->stack->isEmpty())
        {

            $this->stack->pop()->main();

        }

        $this->stop();


     }
}