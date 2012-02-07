<?php

/**
 * ForestMain filter form base class.
 *
 * @package    forest
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseForestMainFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'type'         => new sfWidgetFormFilterInput(),
      'company'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'logo'         => new sfWidgetFormFilterInput(),
      'url'          => new sfWidgetFormFilterInput(),
      'position'     => new sfWidgetFormFilterInput(),
      'location'     => new sfWidgetFormFilterInput(),
      'description'  => new sfWidgetFormFilterInput(),
      'how_to_apply' => new sfWidgetFormFilterInput(),
      'token'        => new sfWidgetFormFilterInput(),
      'is_public'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_activated' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'email'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'type'         => new sfValidatorPass(array('required' => false)),
      'company'      => new sfValidatorPass(array('required' => false)),
      'logo'         => new sfValidatorPass(array('required' => false)),
      'url'          => new sfValidatorPass(array('required' => false)),
      'position'     => new sfValidatorPass(array('required' => false)),
      'location'     => new sfValidatorPass(array('required' => false)),
      'description'  => new sfValidatorPass(array('required' => false)),
      'how_to_apply' => new sfValidatorPass(array('required' => false)),
      'token'        => new sfValidatorPass(array('required' => false)),
      'is_public'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_activated' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'email'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('forest_main_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ForestMain';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'type'         => 'Text',
      'company'      => 'Text',
      'logo'         => 'Text',
      'url'          => 'Text',
      'position'     => 'Text',
      'location'     => 'Text',
      'description'  => 'Text',
      'how_to_apply' => 'Text',
      'token'        => 'Text',
      'is_public'    => 'Boolean',
      'is_activated' => 'Boolean',
      'email'        => 'Text',
    );
  }
}
