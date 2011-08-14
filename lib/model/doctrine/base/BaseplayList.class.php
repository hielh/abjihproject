<?php

/**
 * BaseplayList
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property integer $play_owner_id
 * @property string $object_type
 * @property string $title
 * @property clob $description
 * @property sfGuardUser $sfGuardUser
 * @property playOwner $playOwner
 * @property Doctrine_Collection $Tracks
 * @property Doctrine_Collection $reports
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method integer             getUserId()        Returns the current record's "user_id" value
 * @method integer             getPlayOwnerId()   Returns the current record's "play_owner_id" value
 * @method string              getObjectType()    Returns the current record's "object_type" value
 * @method string              getTitle()         Returns the current record's "title" value
 * @method clob                getDescription()   Returns the current record's "description" value
 * @method sfGuardUser         getSfGuardUser()   Returns the current record's "sfGuardUser" value
 * @method playOwner           getPlayOwner()     Returns the current record's "playOwner" value
 * @method Doctrine_Collection getTracks()        Returns the current record's "Tracks" collection
 * @method Doctrine_Collection getReports()       Returns the current record's "reports" collection
 * @method playList            setId()            Sets the current record's "id" value
 * @method playList            setUserId()        Sets the current record's "user_id" value
 * @method playList            setPlayOwnerId()   Sets the current record's "play_owner_id" value
 * @method playList            setObjectType()    Sets the current record's "object_type" value
 * @method playList            setTitle()         Sets the current record's "title" value
 * @method playList            setDescription()   Sets the current record's "description" value
 * @method playList            setSfGuardUser()   Sets the current record's "sfGuardUser" value
 * @method playList            setPlayOwner()     Sets the current record's "playOwner" value
 * @method playList            setTracks()        Sets the current record's "Tracks" collection
 * @method playList            setReports()       Sets the current record's "reports" collection
 * 
 * @package    addakirine
 * @subpackage model
 * @author     Abderrahman JIHAL
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseplayList extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('play_list');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('play_owner_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('object_type', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('title', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('description', 'clob', 65535, array(
             'type' => 'clob',
             'length' => 65535,
             ));


        $this->index('fk_play_list_user1', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('playOwner', array(
             'local' => 'play_owner_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasMany('track as Tracks', array(
             'local' => 'id',
             'foreign' => 'play_list_id'));

        $this->hasMany('report as reports', array(
             'local' => 'id',
             'foreign' => 'play_list_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}