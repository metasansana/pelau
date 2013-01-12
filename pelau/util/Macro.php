<?php
namespace pelau\util;
/**
 * timestamp Oct 14, 2012 4:15:08 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\util
 *
 *  Composite class for Commands.
 *
 */
class Macro implements Command
{

    /**
     * Internal list of commands.
     * @var pelau\util\ArrayList $cmds
     * @access private
     */
    private $cmds;

    public function __construct()
    {

        $this->cmds = new ArrayList;

    }

    public function add(Command $cmd)
    {

        $this->cmds->add($cmd);
        return $this;

    }

    public function execute()
    {
        foreach($this->cmds as $cmd)
            $cmd->execute();
    }

}