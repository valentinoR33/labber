<?php

/**
 * SIPrefixTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SIPrefixTable extends PluginSIPrefixTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object SIPrefixTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('SIPrefix');
    }
}