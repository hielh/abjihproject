<?php

/**
 * la liste des mp3 personnalisé par l utilisateur
 *
 * @package    islam
 * @subpackage player
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class myPlayListComponent extends sfComponent
{

    /**
     *
     * @param sfWebRequest $request 
     */
    public function execute($request)
    {
        $userId = 1;
        
        $this->myPlayLists = Doctrine_Core::getTable('userPlaylist')->loadUserPlaylist($userId);

    }

}
