<?php

/**
 * MethodFieldTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MethodFieldTable extends PluginMethodFieldTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object MethodFieldTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MethodField');
    }
}