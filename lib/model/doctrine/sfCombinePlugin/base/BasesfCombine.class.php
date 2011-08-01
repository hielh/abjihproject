<?php

/**
 * BasesfCombine
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $asset_key
 * @property clob $files
 * 
 * @method string    getAssetKey()  Returns the current record's "asset_key" value
 * @method clob      getFiles()     Returns the current record's "files" value
 * @method sfCombine setAssetKey()  Sets the current record's "asset_key" value
 * @method sfCombine setFiles()     Sets the current record's "files" value
 * 
 * @package    islam
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfCombine extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_combine');
        $this->hasColumn('asset_key', 'string', 40, array(
             'type' => 'string',
             'primary' => true,
             'length' => 40,
             ));
        $this->hasColumn('files', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}