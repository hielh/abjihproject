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
	
	$this->player = Doctrine_Core::gettable('playOwner')->getPlayer($playerId);
	
	
    }

}
