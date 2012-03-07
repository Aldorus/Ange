<?php

namespace Ange\AngeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UtilisateurCoursType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('present')
            ->add('prof')
            ->add('retard')
            ->add('idCours')
            ->add('idUtilisateur')
        ;
    }

    public function getName()
    {
        return 'ange_angebundle_utilisateurcourstype';
    }
}
