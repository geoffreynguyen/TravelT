<?php

namespace TT\TravelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dd','datetime')
            ->add('dr','datetime')
            ->add('villeDepart', 'entity', array(
                                                    'class' => 'TTTravelBundle:Ville',
                                                    'property' => 'nom',
                                                    'multiple'=> false,
                                                    'required'=>true))
                
            ->add('villeArrivee', 'entity', array(
                                                    'class' => 'TTTravelBundle:Ville',
                                                    'property' => 'nom',
                                                    'multiple'=> false,
                                                    'required'=>true))
                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TT\TravelBundle\Entity\Search'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tt_travelbundle_search';
    }
}
