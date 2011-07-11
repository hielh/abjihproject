<?php

/**
 * Basecomment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property clob $comment
 * @property user $user
 * @property Doctrine_Collection $reports
 * 
 * @method integer             getId()      Returns the current record's "id" value
 * @method integer             getUserId()  Returns the current record's "user_id" value
 * @method clob                getComment() Returns the current record's "comment" value
 * @method user                getUser()    Returns the current record's "user" value
 * @method Doctrine_Collection getReports() Returns the current record's "reports" collection
 * @method comment             setId()      Sets the current record's "id" value
 * @method comment             setUserId()  Sets the current record's "user_id" value
 * @method comment             setComment() Sets the current record's "comment" value
 * @method comment             setUser()    Sets the current record's "user" value
 * @method comment             setReports() Sets the current record's "reports" collection
 * 
 * @package    islam
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basecomment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comment');
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
        $this->hasColumn('comment', 'clob', 65535, array(
             'type' => 'clob',
             'length' => 65535,
             ));


        $this->index('fk_comment_user', array(
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

        $this->hasMany('report as reports', array(
             'local' => 'id',
             'foreign' => 'comment_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}