<?php
	
	namespace App\Controller;
	
	
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Response;
	
	class ArticleController extends AbstractController
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
			
			$comments = [
				'Comment 1',
				'HHH Comment',
				'WLT Comment',
				'Mom Comment',
				'Dad comment'
			];
			
			return $this->render('article/show.html.twig', [
				'title' => ucwords(str_replace('-',' ',$slug)),
				'comments' =>$comments
			]);
		}
	}