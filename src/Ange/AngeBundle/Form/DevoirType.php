<?php

namespace Ange\AngeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DevoirType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('label')
            ->add('descritpion')
            ->add('idMatiere')
        ;
    }

    public function getName()
    {
        return 'ange_angebundle_devoirtype';
    }
}
