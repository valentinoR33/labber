<?php

/**
 * MatrixSampleTypeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MatrixSampleTypeTable extends PluginMatrixSampleTypeTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object MatrixSampleTypeTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MatrixSampleType');
    }
}