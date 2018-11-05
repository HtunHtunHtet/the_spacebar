<?php
	
	namespace App\Controller;
	
	
	use Psr\Log\LoggerInterface;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\JsonResponse;
	use Symfony\Component\HttpFoundation\Response;
	use Twig\Environment;
	
	class ArticleController extends AbstractController
	{
		/**
		 * @Route("/", name="app_homepage")
		 */
		
		public function homepage()
		{
			return $this->render('article/homepage.html.twig');
		}
		
		/**
		 * @Route("/news/{slug}", name="article_show")
		 */
		public function show($slug, Environment $twigEnvironment)
		{
			
			$comments = [
				'Comment 1',
				'HHH Comment',
				'WLT Comment',
				'Mom Comment',
				'Dad comment'
			];
			
			//dump($slug,$this);
			
			$html = $twigEnvironment->render('article/show.html.twig', [
				'title' => ucwords(str_replace('-',' ',$slug)),
				'comments' =>$comments,
				'slug'  =>$slug
			]);
			
			return new Response($html);
			
			
		}
		
		/**
		 * @Route("/news/{slug}/heart", name="article_toggle_heart" ,methods={"POST"})
		 */
		public function toggleArticleHeart($slug, LoggerInterface $logger)
		{
			
			$logger->info('Hearted');
			return new JsonResponse(['hearts'=>rand(5,100)]);
		}
	}