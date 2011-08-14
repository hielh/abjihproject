<?php

/**
 * Basereport
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property integer $comment_id
 * @property integer $Track_id
 * @property integer $play_list_id
 * @property integer $play_owner_id
 * @property integer $article_id
 * @property integer $video_id
 * @property integer $report_user_id
 * @property integer $category_id
 * @property string $title
 * @property clob $message
 * @property sfGuardUser $sfGuardUser
 * @property comment $comment
 * @property track $track
 * @property playList $playList
 * @property playOwner $playOwner
 * @property article $article
 * @property video $video
 * @property sfGuardUser $reportUser
 * @property category $category
 * 
 * @method integer     getId()             Returns the current record's "id" value
 * @method integer     getUserId()         Returns the current record's "user_id" value
 * @method integer     getCommentId()      Returns the current record's "comment_id" value
 * @method integer     getTrackId()        Returns the current record's "Track_id" value
 * @method integer     getPlayListId()     Returns the current record's "play_list_id" value
 * @method integer     getPlayOwnerId()    Returns the current record's "play_owner_id" value
 * @method integer     getArticleId()      Returns the current record's "article_id" value
 * @method integer     getVideoId()        Returns the current record's "video_id" value
 * @method integer     getReportUserId()   Returns the current record's "report_user_id" value
 * @method integer     getCategoryId()     Returns the current record's "category_id" value
 * @method string      getTitle()          Returns the current record's "title" value
 * @method clob        getMessage()        Returns the current record's "message" value
 * @method sfGuardUser getSfGuardUser()    Returns the current record's "sfGuardUser" value
 * @method comment     getComment()        Returns the current record's "comment" value
 * @method track       getTrack()          Returns the current record's "track" value
 * @method playList    getPlayList()       Returns the current record's "playList" value
 * @method playOwner   getPlayOwner()      Returns the current record's "playOwner" value
 * @method article     getArticle()        Returns the current record's "article" value
 * @method video       getVideo()          Returns the current record's "video" value
 * @method sfGuardUser getReportUser()     Returns the current record's "reportUser" value
 * @method category    getCategory()       Returns the current record's "category" value
 * @method report      setId()             Sets the current record's "id" value
 * @method report      setUserId()         Sets the current record's "user_id" value
 * @method report      setCommentId()      Sets the current record's "comment_id" value
 * @method report      setTrackId()        Sets the current record's "Track_id" value
 * @method report      setPlayListId()     Sets the current record's "play_list_id" value
 * @method report      setPlayOwnerId()    Sets the current record's "play_owner_id" value
 * @method report      setArticleId()      Sets the current record's "article_id" value
 * @method report      setVideoId()        Sets the current record's "video_id" value
 * @method report      setReportUserId()   Sets the current record's "report_user_id" value
 * @method report      setCategoryId()     Sets the current record's "category_id" value
 * @method report      setTitle()          Sets the current record's "title" value
 * @method report      setMessage()        Sets the current record's "message" value
 * @method report      setSfGuardUser()    Sets the current record's "sfGuardUser" value
 * @method report      setComment()        Sets the current record's "comment" value
 * @method report      setTrack()          Sets the current record's "track" value
 * @method report      setPlayList()       Sets the current record's "playList" value
 * @method report      setPlayOwner()      Sets the current record's "playOwner" value
 * @method report      setArticle()        Sets the current record's "article" value
 * @method report      setVideo()          Sets the current record's "video" value
 * @method report      setReportUser()     Sets the current record's "reportUser" value
 * @method report      setCategory()       Sets the current record's "category" value
 * 
 * @package    addakirine
 * @subpackage model
 * @author     Abderrahman JIHAL
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basereport extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('report');
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
        $this->hasColumn('comment_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('Track_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('play_list_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('play_owner_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('article_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('video_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('report_user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('category_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('message', 'clob', 65535, array(
             'type' => 'clob',
             'length' => 65535,
             ));


        $this->index('fk_report_user1', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
        $this->index('fk_report_comment1', array(
             'fields' => 
             array(
              0 => 'comment_id',
             ),
             ));
        $this->index('fk_report_Track1', array(
             'fields' => 
             array(
              0 => 'Track_id',
             ),
             ));
        $this->index('fk_report_play_list1', array(
             'fields' => 
             array(
              0 => 'play_list_id',
             ),
             ));
        $this->index('fk_report_play_owner1', array(
             'fields' => 
             array(
              0 => 'play_owner_id',
             ),
             ));
        $this->index('fk_report_article1', array(
             'fields' => 
             array(
              0 => 'article_id',
             ),
             ));
        $this->index('fk_report_video1', array(
             'fields' => 
             array(
              0 => 'video_id',
             ),
             ));
        $this->index('fk_report_user2', array(
             'fields' => 
             array(
              0 => 'report_user_id',
             ),
             ));
        $this->index('fk_report_category1', array(
             'fields' => 
             array(
              0 => 'category_id',
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

        $this->hasOne('comment', array(
             'local' => 'comment_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('track', array(
             'local' => 'Track_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('playList', array(
             'local' => 'play_list_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('playOwner', array(
             'local' => 'play_owner_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('article', array(
             'local' => 'article_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('video', array(
             'local' => 'video_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('sfGuardUser as reportUser', array(
             'local' => 'report_user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}