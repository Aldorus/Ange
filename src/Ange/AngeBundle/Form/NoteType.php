<?php

namespace Ange\AngeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class NoteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('valeur')
            ->add('idUtilisateur')
            ->add('idDevoir')
        ;
    }

    public function getName()
    {
        return 'ange_angebundle_notetype';
    }
}
