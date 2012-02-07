<?php

/**
 * main module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage main
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMainGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%type%% - %%company%% - %%logo%% - %%url%% - %%position%% - %%location%% - %%description%% - %%how_to_apply%% - %%token%% - %%is_public%% - %%is_activated%% - %%email%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Main List';
  }

  public function getEditTitle()
  {
    return 'Edit Main';
  }

  public function getNewTitle()
  {
    return 'New Main';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'type',  2 => 'company',  3 => 'logo',  4 => 'url',  5 => 'position',  6 => 'location',  7 => 'description',  8 => 'how_to_apply',  9 => 'token',  10 => 'is_public',  11 => 'is_activated',  12 => 'email',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'company' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'logo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'url' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'position' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'location' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'how_to_apply' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'token' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'is_public' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'is_activated' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'type' => array(),
      'company' => array(),
      'logo' => array(),
      'url' => array(),
      'position' => array(),
      'location' => array(),
      'description' => array(),
      'how_to_apply' => array(),
      'token' => array(),
      'is_public' => array(),
      'is_activated' => array(),
      'email' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'type' => array(),
      'company' => array(),
      'logo' => array(),
      'url' => array(),
      'position' => array(),
      'location' => array(),
      'description' => array(),
      'how_to_apply' => array(),
      'token' => array(),
      'is_public' => array(),
      'is_activated' => array(),
      'email' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'type' => array(),
      'company' => array(),
      'logo' => array(),
      'url' => array(),
      'position' => array(),
      'location' => array(),
      'description' => array(),
      'how_to_apply' => array(),
      'token' => array(),
      'is_public' => array(),
      'is_activated' => array(),
      'email' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'type' => array(),
      'company' => array(),
      'logo' => array(),
      'url' => array(),
      'position' => array(),
      'location' => array(),
      'description' => array(),
      'how_to_apply' => array(),
      'token' => array(),
      'is_public' => array(),
      'is_activated' => array(),
      'email' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'type' => array(),
      'company' => array(),
      'logo' => array(),
      'url' => array(),
      'position' => array(),
      'location' => array(),
      'description' => array(),
      'how_to_apply' => array(),
      'token' => array(),
      'is_public' => array(),
      'is_activated' => array(),
      'email' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'ForestMainForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'ForestMainFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
