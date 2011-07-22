<?php

/**
 * playOwnerTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class playOwnerTable extends Doctrine_Table
{

  /**
   * Returns an instance of this class.
   *
   * @return object playOwnerTable
   */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('playOwner');
  }

  public function getPlayer($id)
  {
    $q = Doctrine_Query::create()
            ->from('playOwner')
            ->addWhere('id= ?', $id)
            ->fetchOne();
    return $q;
  }

  static public function getLuceneIndex()
  {
    ProjectConfiguration::registerZend();

    if (file_exists($index = self::getLuceneIndexFile()))
    {
      return Zend_Search_Lucene::open($index);
    } else
    {
      return Zend_Search_Lucene::create($index);
    }
  }

  static public function getLuceneIndexFile()
  {
    return sfConfig::get('sf_data_dir') . '/searchIndex/playOwnerTable.index';
  }

}