<?php

require_once dirname(__FILE__).'/../lib/mainGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/mainGeneratorHelper.class.php';

/**
* job actions.
*
* @package jobeet
* @subpackage job
* @author Your name here
* @version SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
*/
class mainActions extends autoMainActions
{
    public function preExecute()
        {
            parent::preExecute();
        }

          public function executeShow(sfWebRequest $request)
  {
    $this->forest_main = Doctrine_Core::getTable('ForestMain')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->forest_main);
    $this->setLayout('layout_not');
    $this->getResponse()->addStylesheet('print.css', 'last', array('media' => 'print'));
    $this->getResponse()->addStylesheet('show.css', 'last');
  }
  
            public function executeChart(sfWebRequest $request)
  {
    $this->forest_main = Doctrine_Core::getTable('ForestMain')->find(array($request->getParameter('id')));
    $this->setLayout('layout_not');
    $this->getResponse()->addStylesheet('print.css', 'last', array('media' => 'print'));
    $this->getResponse()->addStylesheet('show.css', 'last');    
    $this->getResponse()->addJavascript('/js/jquery-1.2.6.js', 'first');
    $this->getResponse()->addJavascript('https://www.google.com/jsapi', 'last');
  }  
}