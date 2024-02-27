<?php

namespace App\Form;

use App\Entity\ExcelData;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExcelDataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('compteAffaire')
            ->add('compteEvenement')
            ->add('compteDernierEvenement')
            ->add('numeroFiche')
            ->add('libelleCivilite')
            ->add('proprietaireVehicule')
            ->add('nom')
            ->add('prenom')
            ->add('numeroNomVoie')
            ->add('complementAdresse1')
            ->add('codePostal')
            ->add('ville')
            ->add('telephoneDomicile')
            ->add('telephonePortable')
            ->add('telephoneJob')
            ->add('email')
            ->add('dateMiseCirculation')
            ->add('dateAchat')
            ->add('dateDernierEvenement')
            ->add('libelleMarque')
            ->add('libelleModele')
            ->add('version')
            ->add('vin')
            ->add('immatriculation')
            ->add('typeProspect')
            ->add('kilometrage')
            ->add('libelleEnergie')
            ->add('vendeurVN')
            ->add('vendeurVO')
            ->add('commentaireFacturation')
            ->add('typeVNVO')
            ->add('numeroDossierVNVO')
            ->add('intermediaireVenteVN')
            ->add('dateEvenement')
            ->add('origineEvenement')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ExcelData::class,
        ]);
    }
}
