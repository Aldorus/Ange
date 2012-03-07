<?php

namespace Ange\AngeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SalleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('numero')
            ->add('batiment')
            ->add('label')
        ;
    }

    public function getName()
    {
        return 'ange_angebundle_salletype';
    }
}
