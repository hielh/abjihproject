<?php

/**
 * sfApply actions.
 *
 * @package    islam
 * @subpackage sfApply
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */

require_once sfConfig::get('sf_plugins_dir').'/sfForkedDoctrineApplyPlugin/modules/sfApply/actions/actions.class.php';
//require_once sfConfig::get('sf_plugins_dir').'/sfForkedDoctrineApplyPlugin/modules/sfApply/lib/BasesfApplyActions.class.php';
class sfApplysActions extends sfApplyActions //BasesfApplyActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeResetRequest(sfRequest $request)
  {
    parent::executeResetRequest($request);
  }
}