<?php
namespace croom\controllers;
/**
 * timestamp Sep 10, 2012 9:41:51 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package croom\controllers
 *
 *
 */
use proof\app\WebController;
use proof\net\http\GetEvent;
use proof\app\Html;

class InfoDump extends WebController
{


    public function onGet(GetEvent $e)
    {


        $this->view->add(new Html("name", "ChatRoom"));
        $this->view->add(new Html("version", "Less than 0.1"));

    }

    public function main()
    {

        $this->view->render();

    }
}