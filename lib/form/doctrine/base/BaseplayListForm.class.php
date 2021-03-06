<?php

/**
 * playList form base class.
 *
 * @method playList getObject() Returns the current form's model object
 *
 * @package    addakirine
 * @subpackage form
 * @author     Abderrahman JIHAL
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseplayListForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'user_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'play_owner_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('playOwner'), 'add_empty' => true)),
      'object_type'   => new sfWidgetFormInputText(),
      'title'         => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormTextarea(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'play_owner_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('playOwner'), 'required' => false)),
      'object_type'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'title'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'description'   => new sfValidatorString(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('play_list[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'playList';
  }

}
