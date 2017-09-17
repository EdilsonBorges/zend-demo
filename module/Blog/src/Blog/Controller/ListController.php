<?php

namespace Blog\Controller;

use Blog\Service\PostServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;

class ListController extends AbstractActionController
{
	protected $postService;

	public function __construct(PostServiceInterface $postService)
	{
		$this->postService = $postService;
	}
}