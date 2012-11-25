<?php
namespace croom\controllers;

/**
 * timestamp Sep 10, 2012 8:54:44 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package croom\controllers
 *
 *
 */
use proof\app\App;
use proof\php\String;
use croom\core\Templates;


class ChatServer extends App
{


    private function _printInfo()
    {

        $this->w->addTemplate(new String(Templates::PRINT_INFO));
        $this->push(new InfoDump($this->w));

    }


    protected function begin()
    {

        //@todo parse url

        $this->_printInfo();



    }

    protected function finish()
    {

    }









}