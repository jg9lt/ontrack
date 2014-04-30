<?php

namespace Ldcrypto\OntrackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Ldcrypto\OntrackBundle\Entity\MediaPreview;

class MediaController extends Controller
{

    /**
     * @param Request $request
     * @return Response
     */
    public function mediaAction(Request $request)
    {
        // preset a default value
        $media = $this->get('sonata.media.manager.media')->create();
        $media->setBinaryContent('http://www.youtube.com/watch?v=oHg5SJYRHA0');

        // create the target object
        $mediaPreview = new MediaPreview();
        $mediaPreview->setMedia($media);

        // create the form
        $builder = $this->createFormBuilder($mediaPreview);
        $builder->add('media', 'sonata_media_type', array(
            'provider' => 'sonata.media.provider.youtube',
            'context'  => 'default'
        ));

        $form = $builder->getForm();

        // bind and transform the media's binary content into real content
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            $this->getSeoPage()
                ->setTitle($media->getName())
                ->addMeta('property', 'og:description', $media->getDescription())
                ->addMeta('property', 'og:type', 'video')
            ;
        }

        return $this->render('SonataDemoBundle:Demo:media.html.twig', array(
            'form' => $form->createView(),
            'media' => $mediaPreview->getMedia()
        ));
    }
} 