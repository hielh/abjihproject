<?php

/**
 * report form base class.
 *
 * @method report getObject() Returns the current form's model object
 *
 * @package    islam
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasereportForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'comment_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('comment'), 'add_empty' => true)),
      'Track_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('track'), 'add_empty' => true)),
      'play_list_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('playList'), 'add_empty' => true)),
      'play_owner_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('playOwner'), 'add_empty' => true)),
      'article_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('article'), 'add_empty' => true)),
      'video_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('video'), 'add_empty' => true)),
      'report_user_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('reportUser'), 'add_empty' => true)),
      'category_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('category'), 'add_empty' => true)),
      'title'          => new sfWidgetFormInputText(),
      'message'        => new sfWidgetFormTextarea(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'comment_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('comment'), 'required' => false)),
      'Track_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('track'), 'required' => false)),
      'play_list_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('playList'), 'required' => false)),
      'play_owner_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('playOwner'), 'required' => false)),
      'article_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('article'), 'required' => false)),
      'video_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('video'), 'required' => false)),
      'report_user_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('reportUser'), 'required' => false)),
      'category_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('category'), 'required' => false)),
      'title'          => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'message'        => new sfValidatorString(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('report[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'report';
  }

}
