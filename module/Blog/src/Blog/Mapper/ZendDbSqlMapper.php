<?php

namespace Blog\Mapper;

use Blog\Model\PostInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\Adapter\Driver\ResultInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Sql;
use Zend\Stdlib\Hydrator\HydratorInterface;

class ZendDbSqlMapper implements PostMapperInterface
{
   /**
    * @var \Zend\Db\Adapter\AdapterInterface
    */
   protected $dbAdapter;
   protected $hydrator;
   protected $postPrototype;

   /**
    * @param AdapterInterface  $dbAdapter
    */
     public function __construct(
         AdapterInterface $dbAdapter,
         HydratorInterface $hydrator,
         PostInterface $postPrototype
     ) {
         $this->dbAdapter      = $dbAdapter;
         $this->hydrator       = $hydrator;
         $this->postPrototype  = $postPrototype;
     }

   /**
    * @param int|string $id
    *
    * @return PostInterface
    * @throws \InvalidArgumentException
    */
   public function find($id)
   {
   }

   /**
    * @return array|PostInterface[]
    */
   public function findAll()
   {
      $sql    = new Sql($this->dbAdapter);
      $select = $sql->select('posts');

      $stmt   = $sql->prepareStatementForSqlObject($select);
      $result = $stmt->execute();

      if ($result instanceof ResultInterface && $result->isQueryResult()) {
         $resultSet = new ResultSet();

         return $resultSet->initialize($result);
      }

      return array();
   }
}