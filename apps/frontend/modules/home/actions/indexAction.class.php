<?php

class indexAction extends sfAction
{
  function execute($request)
  {
      $this->setLayout('layoutWithoutMenu');
  }
}