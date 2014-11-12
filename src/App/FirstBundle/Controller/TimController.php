<?php

namespace App\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\FirstBundle\Models\Barcelona;
use App\FirstBundle\Models\RealMadrid;


class TimController extends Controller
{
//    /** @var \Twig_Environment */
//    protected $twig;
//    public function __construct(\Twig_Environment $twig)
//    {
//        $this->twig = $twig;
//    }
    /**
     * @return Response
     */
    public function TimsAction()
    {
        return $this->render('AppFirstBundle:Default:tims.html.twig');
    }

    public function getErrorAction()
    {
        return $this->render('AppFirstBundle:Default:error404.html.twig');
    }

    /**
     * @param  string $id
     * @return Response
     */
    public function TimAction($name)
    {
        switch ($name) {
            case 'barsa':
                $Barcelona = new Barcelona('Luis Enrique', 'Camp Nou', 'Xavier ');
                echo $Barcelona->show();
                break;
            case 'real':
                $RealMadrid = new RealMadrid('Carlo Ancelotti', 'Santiago Bernabeu', 'Casillas');
                echo $RealMadrid->show();

                echo ' Champions League - ' . $RealMadrid->LC();
                break;
            default:
                return new Response(sprintf('<h1 style="color: red">Error:</h1><p style="color: red">Method not found for tim <b>"%s"</b></p>', $timId));
        }

        return $this->render('AppFirstBundle:Default:tim.html.twig', array('name' => $name));
    }
}
//    /**
//     * @param  string   $id
//     * @return Response
//     */
//    public function putArticleAction($id)
//    {
//        return new Response($this->twig->render('article.html.twig', ['method' => 'Put', 'articleId' => $id]));
//    }
//    /**
//     * @param  string   $id
//     * @return Response
//     */
//    public function postArticleAction($id)
//    {
//        return new Response($this->twig->render('article.html.twig', ['method' => 'Post', 'articleId' => $id]));
//    }
//    /**
//     * @param  string   $id
//     * @return Response
//     */
//    public function deleteArticleAction($id)
//    {
//        return new Response($this->twig->render('article.html.twig', ['method' => 'Delete', 'articleId' => $id]));
//    }
//}
