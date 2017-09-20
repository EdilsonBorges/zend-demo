<?php

namespace Blog\Mapper;

use Blog\Model\PostInterface;

interface PostMapperInterface
{
   public function find($id);

   public function findAll();
}