<?php

namespace Ange\AngeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('label')
            ->add('idMatiere')
            ->add('idSalle')
            ->add('date')
        ;
    }

    public function getName()
    {
        return 'ange_angebundle_courstype';
    }
}
