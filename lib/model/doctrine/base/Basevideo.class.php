<?php

/**
 * Basevideo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property string $url
 * @property string $video_type
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $reports
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method integer             getUserId()      Returns the current record's "user_id" value
 * @method string              getUrl()         Returns the current record's "url" value
 * @method string              getVideoType()   Returns the current record's "video_type" value
 * @method sfGuardUser         getSfGuardUser() Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection getReports()     Returns the current record's "reports" collection
 * @method video               setId()          Sets the current record's "id" value
 * @method video               setUserId()      Sets the current record's "user_id" value
 * @method video               setUrl()         Sets the current record's "url" value
 * @method video               setVideoType()   Sets the current record's "video_type" value
 * @method video               setSfGuardUser() Sets the current record's "sfGuardUser" value
 * @method video               setReports()     Sets the current record's "reports" collection
 * 
 * @package    addakirine
 * @subpackage model
 * @author     Abderrahman JIHAL
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basevideo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('video');
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
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('video_type', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
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

        $this->hasMany('report as reports', array(
             'local' => 'id',
             'foreign' => 'video_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}