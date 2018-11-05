<?php
	
	namespace App\Controller;
	
	
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Component\HttpFoundation\Response;
	
	class ArticleController
	{
		/**
		 * @Route("/")
		 */
		
		public function homepage()
		{
			return new Response('First Page');
		}
		
		/**
		 * @Route("/news/{slug}")
		 */
		public function show($slug)
		{
			return new Response(sprintf(
				"Future Page to show one space article: %s",
				$slug
				)
			);
		}
	}