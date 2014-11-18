<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 18.11.14
 * Time: 11:47
 */

namespace Iphpsand\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Iphpsand\PhotoBundle\Entity\Photo;
use Symfony\Component\HttpFoundation\Request;

class PhotoController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $photo = new Photo();
        $uploadForm = $this->createFormBuilder($photo)
            ->add('title')
            ->add('date','date')

            //Using standart field type
            ->add ('photo','file')
            ->getForm();


        if ($request->isMethod('POST')) {
            $uploadForm->bind($request);

            if ($uploadForm->isValid()) {
                $em->persist($photo);
                $em->flush();
                return $this->redirect($this->generateUrl('iphpsand_photo'));
            }
        }

        return $this->render('IphpsandPhotoBundle:Photo:index.html.twig', array(
            'uploadForm' => $uploadForm->createView(),
            'photos' => $em->getRepository ('IphpsandPhotoBundle:Photo')->findAll()
        ));
    }
}

