<?php

namespace Ange\AngeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ContenuType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('idFonctionnel')
            ->add('texte')
        ;
    }

    public function getName()
    {
        return 'ange_angebundle_contenutype';
    }
}
