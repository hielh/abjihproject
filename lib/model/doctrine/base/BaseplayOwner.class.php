<?php

/**
 * BaseplayOwner
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $picture
 * @property string $site_web
 * @property clob $description
 * @property user $user
 * @property Doctrine_Collection $play_lists
 * @property Doctrine_Collection $reports
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method integer             getUserId()      Returns the current record's "user_id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getPicture()     Returns the current record's "picture" value
 * @method string              getSiteWeb()     Returns the current record's "site_web" value
 * @method clob                getDescription() Returns the current record's "description" value
 * @method user                getUser()        Returns the current record's "user" value
 * @method Doctrine_Collection getPlayLists()   Returns the current record's "play_lists" collection
 * @method Doctrine_Collection getReports()     Returns the current record's "reports" collection
 * @method playOwner           setId()          Sets the current record's "id" value
 * @method playOwner           setUserId()      Sets the current record's "user_id" value
 * @method playOwner           setName()        Sets the current record's "name" value
 * @method playOwner           setPicture()     Sets the current record's "picture" value
 * @method playOwner           setSiteWeb()     Sets the current record's "site_web" value
 * @method playOwner           setDescription() Sets the current record's "description" value
 * @method playOwner           setUser()        Sets the current record's "user" value
 * @method playOwner           setPlayLists()   Sets the current record's "play_lists" collection
 * @method playOwner           setReports()     Sets the current record's "reports" collection
 * 
 * @package    islam
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseplayOwner extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('play_owner');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('picture', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('site_web', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('description', 'clob', 65535, array(
             'type' => 'clob',
             'length' => 65535,
             ));


        $this->index('fk_play_owner_user1', array(
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
        $this->hasOne('user', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasMany('playList as play_lists', array(
             'local' => 'id',
             'foreign' => 'play_owner_id'));

        $this->hasMany('report as reports', array(
             'local' => 'id',
             'foreign' => 'play_owner_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}