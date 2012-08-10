<?php
namespace proof\util;
/**
 * timestamp Jul 29, 2012 10:00:47 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 *  Class for dispatching events.
 *
 *
 */
abstract class AbstractDispatcher implements Dispatcher
{

    /**
     * List of subscribers
     * @var proof\util\Vector $subscribers
     * @access protected
     */
    protected $subscribers;

    public function __construct()
    {
        $this->subscribers = new Vector;
    }


    /**
     *  Clears and returns the subscribers of this class.
     * @todo clearing the list seems to return null, see unit test
     * @return proof\util\Vector   The previous list of subscribers.
     */
    public function detachListener()
    {

        $subscribers = $this->subscribers;

        $this->subscribers->clear();

        return $subscribers;

    }

    /**
     *  Returns the subscribers of this class
     * @return proof\util\Vector
     */
    public function getSubscribers()
    {
        return $this->subscribers;
    }


}