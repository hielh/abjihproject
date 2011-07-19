<?php

/**
 * ajouter quran a la playlist
 *
 * @package    islam
 * @subpackage player
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class addToPlaylistAction extends sfAction {

  /**
   *
   * @param sfWebRequest $request 
   */
  public function execute($request) {

    $playItId = $request->getParameter('id');
    $userId = 1; // a modifier
    $sf_user = $this->getUser();
    
    $this->forward404If(!$request->isXmlHttpRequest());
    
    $oPlayIt = Doctrine_Core::getTable('playIt')->findOneById($playItId);

    $this->forward404If(!$oPlayIt);

    $oUserPlaylist = Doctrine_Core::getTable('userPlaylist')->findOneByUserIdAndPlayitId($userId, $playItId);

    if (!$oUserPlaylist) 
    {
      $oUserPlaylist = new userPlaylist();
      $oUserPlaylist->setUserId($userId);
      $oUserPlaylist->setPlayitId($playItId);
      $oUserPlaylist->save();
      
      $sf_user->setFlash('qu_notice_success', 'qu_add_item_to_playlist_success');
    }
    else
    {
      $sf_user->setFlash('qu_notice_error', 'qu_add_item_all_ready_existe_on_your_playlist');
    }
    
  }

}
