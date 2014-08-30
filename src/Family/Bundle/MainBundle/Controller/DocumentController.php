<?php

namespace Family\Bundle\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Family\Bundle\TreeBundle\Entity\Document;
use Family\Bundle\TreeBundle\Form\DocumentType;

class DocumentController extends Controller
{
    public function showDocAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $document = $em->getRepository('FamilyTreeBundle:Document')->find($id);

        if (!$document) {
            throw $this->createNotFoundException('Unable to find Document entity.');
        }

        return $this->render('FamilyMainBundle:Documents:showDoc.html.twig', array(
            'doc'   => $document
        ));
    }

    public function downloadDocAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $document = $em->getRepository('FamilyTreeBundle:Document')->find($id);

        if (!$document) {
            throw $this->createNotFoundException('Unable to find Document entity.');
        }
        $fichier = "nomFichier.pdf";
        $chemin = "bundles/nomBundle/.../"; // emplacement de votre fichier .pdf
             
        $response = new Response();
        $response->setContent(file_get_contents($document->getAbsolutePath()));
        $response->headers->set('Content-Type', 'application/force-download'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
        $response->headers->set('Content-disposition', 'filename='. $document->getPath());
             
        return $response;
    }

    public function editDocAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $document = $em->getRepository('FamilyTreeBundle:Document')->find($id);

        if (!$document) {
            throw $this->createNotFoundException('Unable to find Document entity.');
        }

        $form = $this->createFormBuilder($document)
            ->add('name', 'text', array('label' => 'Renommez votre document'))
            ->add('submit', 'submit', array('label' => 'Valider'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($document);
            $em->flush();

            return $this->redirect($this->generateUrl('family_main_document_show', array('id' => $document->getId())));
        }

        return $this->render('FamilyMainBundle:Documents:editDoc.html.twig', array(
            'document' => $document,
            'form'   => $form->createView(),
        ));
    }

    public function newDocAction(Request $request, $personId)
    {
        $document = new Document();

        $em = $this->getDoctrine()->getEntityManager();

        $person = $em->getRepository('FamilyTreeBundle:Person')->find($personId);

        if (!$person) {
            throw $this->createNotFoundException('Unable to find Person entity.');
        }

        $form = $this->createFormBuilder($document)
            ->add('name', 'text', array('label' => 'Donnez un nom à votre document'))
            ->add('file', 'file', array('label' => 'Sélectionnez un fichier'))
            ->add('submit', 'submit', array('label' => 'Valider'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($document);
            $person->addDocument($document);
            $em->flush();

            return $this->redirect($this->generateUrl('family_main_document_show', array('id' => $document->getId())));
        }

        return $this->render('FamilyMainBundle:Documents:newDoc.html.twig', array(
            'document' => $document,
            'form'     => $form->createView(),
            'person'   => $person
        ));
    }
}
