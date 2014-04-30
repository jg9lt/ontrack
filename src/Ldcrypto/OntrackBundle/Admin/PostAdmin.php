<?php

namespace Ldcrypto\OntrackBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends Admin
{

    /**
     * Fields to be shown on create/edit forms
     *
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper){

        $formMapper
            ->add('title', 'text', array('label' => 'Post Title'))
            ->add('author', 'entity', array('class' => 'Ldcrypto\OntrackBundle\Entity\User'))
            ->add('body')
        ;

    }

    /**
     * Fields to be shown on filter forms
     *
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper){

        $datagridMapper
            ->add('title')
            ->add('author')
        ;

    }

    /**
     * Fields to be shown on lists
     *
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper){

        $listMapper
            ->addIdentifier('title')
            ->add('slug')
            ->add('author')
        ;

    }

} 