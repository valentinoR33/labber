<?php

/**
 * FieldTypeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class FieldTypeTable extends PluginFieldTypeTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object FieldTypeTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('FieldType');
    }
}