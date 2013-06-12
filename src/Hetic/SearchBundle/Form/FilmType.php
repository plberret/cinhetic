<?php

namespace Hetic\SearchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('title')
			->add('category', 'entity', array(
			  'class'    => 'HeticSearchBundle:Categorie',
			  'property' => 'title',
			  'multiple' => false)
			)
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hetic\SearchBundle\Entity\Film'
        ));
    }

    public function getName()
    {
        return 'hetic_searchbundle_filmtype';
    }
}
