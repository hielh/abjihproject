<?php

/**
 * article filter form base class.
 *
 * @package    islam
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasearticleFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('user'), 'add_empty' => true)),
      'category_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('category'), 'add_empty' => true)),
      'title'        => new sfWidgetFormFilterInput(),
      'article_text' => new sfWidgetFormFilterInput(),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('user'), 'column' => 'id')),
      'category_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('category'), 'column' => 'id')),
      'title'        => new sfValidatorPass(array('required' => false)),
      'article_text' => new sfValidatorPass(array('required' => false)),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('article_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'article';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'user_id'      => 'ForeignKey',
      'category_id'  => 'ForeignKey',
      'title'        => 'Text',
      'article_text' => 'Text',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
