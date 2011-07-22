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
    $playerId = $request->getParameter('id');

//    $query = 'كمال';
//    $hits = trackTable::getLuceneIndex()->find($query);
//    
//
//    foreach ($hits as $hit)
//    {
//      var_dump($hit->getDocument());
//      //var_dump($hit->track_name);
//    }
//    var_dump('endddddddd');
//    die;
//    die;
    $this->forward404Unless($this->player = Doctrine_Core::gettable('playOwner')->getPlayer($playerId), 'User not found');

  }

}
