<?php
namespace Blog\Service;

use Blog\Mapper\PostMapperInterface;

class PostService implements PostServiceInterface
{
	protected $postMapper;

	public function __construct(PostMapperInterface $postMapper)
	{
	 $this->postMapper = $postMapper;
	}

	public function findAllPosts()
	{
	}
	public function findPost($id)
	{
	}
}