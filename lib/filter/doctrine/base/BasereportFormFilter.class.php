<?php

/**
 * report filter form base class.
 *
 * @package    islam
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasereportFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'comment_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('comment'), 'add_empty' => true)),
      'Track_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('track'), 'add_empty' => true)),
      'play_list_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('playList'), 'add_empty' => true)),
      'play_owner_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('playOwner'), 'add_empty' => true)),
      'article_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('article'), 'add_empty' => true)),
      'video_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('video'), 'add_empty' => true)),
      'report_user_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('reportUser'), 'add_empty' => true)),
      'category_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('category'), 'add_empty' => true)),
      'title'          => new sfWidgetFormFilterInput(),
      'message'        => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'comment_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('comment'), 'column' => 'id')),
      'Track_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('track'), 'column' => 'id')),
      'play_list_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('playList'), 'column' => 'id')),
      'play_owner_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('playOwner'), 'column' => 'id')),
      'article_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('article'), 'column' => 'id')),
      'video_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('video'), 'column' => 'id')),
      'report_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('reportUser'), 'column' => 'id')),
      'category_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('category'), 'column' => 'id')),
      'title'          => new sfValidatorPass(array('required' => false)),
      'message'        => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('report_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'report';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'user_id'        => 'ForeignKey',
      'comment_id'     => 'ForeignKey',
      'Track_id'       => 'ForeignKey',
      'play_list_id'   => 'ForeignKey',
      'play_owner_id'  => 'ForeignKey',
      'article_id'     => 'ForeignKey',
      'video_id'       => 'ForeignKey',
      'report_user_id' => 'ForeignKey',
      'category_id'    => 'ForeignKey',
      'title'          => 'Text',
      'message'        => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
