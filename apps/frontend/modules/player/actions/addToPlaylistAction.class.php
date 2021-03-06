<?php

/**
 * ajouter quran a la playlist
 *
 * @package    islam
 * @subpackage player
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class addToPlaylistAction extends sfAction
{

  /**
   *
   * @param sfWebRequest $request 
   */
  public function execute($request)
  {

    //sleep(100);
    $trackId = $request->getParameter('id');
    $sf_user = $this->getUser();
    $userId = $sf_user->getId();


    $this->forward404If(!$request->isXmlHttpRequest());

    if (!$sf_user->isAuthenticated())
    {
      $sf_user->setFlash('qu_notice_error', 'qu_add_item_user_need_to_be_logged');
    } 
    else
    {
      $oTrack = Doctrine_Core::getTable('track')->findOneById($trackId);

      $this->forward404If(!$oTrack);

      $oUserPlaylist = Doctrine_Core::getTable('userPlaylist')->findOneByUserIdAndTrackId($userId, $trackId);

      if (!$oUserPlaylist)
      {
        $oUserPlaylist = new userPlaylist();
        $oUserPlaylist->setUserId($userId);
        $oUserPlaylist->setTrackId($trackId);
        $oUserPlaylist->save();

        $sf_user->setFlash('qu_notice_success', 'qu_add_item_to_playlist_success');
      } else
      {
        $sf_user->setFlash('qu_notice_error', 'qu_add_item_all_ready_existe_on_your_playlist');
      }
    }
  }

}
