<?php

namespace Ange\AngeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('login')
            ->add('password')
            ->add('adresse')
            ->add('cp')
            ->add('ville')
            ->add('telephone')
            ->add('mail')
            ->add('dateInscription')
            ->add('idGroupeDevoir')
            ->add('idPromotion')
            ->add('idGroupe')
        ;
    }

    public function getName()
    {
        return 'ange_angebundle_utilisateurtype';
    }
}
