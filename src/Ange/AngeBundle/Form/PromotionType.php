<?php

namespace Ange\AngeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PromotionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('label')
            ->add('idFonctionnel')
            ->add('annee')
            ->add('idUtilisateur')
        ;
    }

    public function getName()
    {
        return 'ange_angebundle_promotiontype';
    }
}
