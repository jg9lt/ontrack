<?php

namespace Ldcrypto\OntrackBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SalesRepAdmin extends Admin
{

    /**
     * Fields to be shown on create/edit forms
     *
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper){

        $formMapper
            ->add('sales_rep_email', 'text', array('label' => 'Sales Rep Email'))
            ->add('sales_rep_username', 'entity', array('class' => 'Ldcrypto\OntrackBundle\Entity\User'))
        ;

    }

    /**
     * Fields to be shown on filter forms
     *
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper){

        $datagridMapper
            ->add('sales_rep_email')
            ->add('sales_rep_username')
        ;

    }

    /**
     * Fields to be shown on lists
     *
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper){

        $listMapper
            ->addIdentifier('Sales Rep')
            ->add('sales_rep_email')
            ->add('sales_rep_username')
        ;

    }

} 