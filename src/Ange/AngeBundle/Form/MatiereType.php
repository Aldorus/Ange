<?php

namespace Ange\AngeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MatiereType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('label')
        ;
    }

    public function getName()
    {
        return 'ange_angebundle_matieretype';
    }
}
