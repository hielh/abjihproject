<?php

/**
 * playIt form base class.
 *
 * @method playIt getObject() Returns the current form's model object
 *
 * @package    islam
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseplayItForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'user_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('user'), 'add_empty' => false)),
      'play_list_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('playList'), 'add_empty' => true)),
      'name'         => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('user'))),
      'play_list_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('playList'), 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'description'  => new sfValidatorString(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('play_it[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'playIt';
  }

}
