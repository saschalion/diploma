<?php

/**
 * main module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage main
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMainGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'forest_main' : 'forest_main_'.$action;
  }
}
