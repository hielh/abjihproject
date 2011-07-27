<?php

/**
 * player actions.
 *
 * @package    islam
 * @subpackage player
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class showPlayerAction extends sfAction
{

  /**
   *
   * @param sfWebRequest $request 
   */
  public function execute($request)
  {
    $playerId = $request->getParameter('owner_id');

//    $query = 'كمال';
//    
//    $hits = trackTable::getLuceneIndex()->find('play_owner_id:12');
//
//    $paginators = Zend_Paginator::factory($hits);
//    $paginators->setCurrentPageNumber($request->getParameter('page'));
//    $paginators->setItemCountPerPage(10);
//
//    foreach ($paginators as $paginator)
//    {
//
//      //var_dump($paginator->id, $paginator->score);
//      var_dump($paginator->getDocument());
//    }
//    var_dump('end');
//    die;
    
    $this->forward404Unless($this->player = Doctrine_Core::gettable('playOwner')->getPlayer($playerId), 'User not found');
  }

}
