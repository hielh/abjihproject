<?php

/**
 * playOwner form base class.
 *
 * @method playOwner getObject() Returns the current form's model object
 *
 * @package    addakirine
 * @subpackage form
 * @author     Abderrahman JIHAL
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseplayOwnerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'name'        => new sfWidgetFormInputText(),
      'name_fr'     => new sfWidgetFormInputText(),
      'picture'     => new sfWidgetFormInputText(),
      'site_web'    => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'slug'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'name'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'name_fr'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'picture'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'site_web'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'description' => new sfValidatorString(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'slug'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'playOwner', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('play_owner[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'playOwner';
  }

}
