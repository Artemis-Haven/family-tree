<?php

namespace Family\Bundle\TreeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Family\Bundle\TreeBundle\Entity\Relation;
use Family\Bundle\TreeBundle\Form\RelationType;

/**
 * Relation controller.
 *
 */
class RelationController extends Controller
{

    /**
     * Lists all Relation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FamilyTreeBundle:Relation')->findAll();

        return $this->render('FamilyTreeBundle:Relation:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Relation entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Relation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('crud_relation_show', array('id' => $entity->getId())));
        }

        return $this->render('FamilyTreeBundle:Relation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Relation entity.
    *
    * @param Relation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Relation $entity)
    {
        $form = $this->createForm(new RelationType(), $entity, array(
            'action' => $this->generateUrl('crud_relation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Relation entity.
     *
     */
    public function newAction()
    {
        $entity = new Relation();
        $form   = $this->createCreateForm($entity);

        return $this->render('FamilyTreeBundle:Relation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Relation entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FamilyTreeBundle:Relation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Relation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FamilyTreeBundle:Relation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Relation entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FamilyTreeBundle:Relation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Relation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FamilyTreeBundle:Relation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Relation entity.
    *
    * @param Relation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Relation $entity)
    {
        $form = $this->createForm(new RelationType(), $entity, array(
            'action' => $this->generateUrl('crud_relation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Relation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FamilyTreeBundle:Relation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Relation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('crud_relation_edit', array('id' => $id)));
        }

        return $this->render('FamilyTreeBundle:Relation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Relation entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FamilyTreeBundle:Relation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Relation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('crud_relation'));
    }

    /**
     * Creates a form to delete a Relation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('crud_relation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
