<?php
namespace proof\sql;
/**
 * timestamp Oct 13, 2012 10:59:02 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 * Interface for PDOSocket pool management.
 *
 */
interface PDOPool extends SQLSocketPool
{

    /**
     * Attempts to store a PDOSocket based on the definition given.
     * @param \proof\sql\PDODefinition $def
     * @return boolean    TRUE on success, FALSE on failure
     */
    public function create(PDODefinition $def);

}