<?php
namespace Code\ProdutoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProdutoType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
	        ->add('name','text',['label'=>'Produto','required'=>true,'attr'=>['class'=>'form-control']])
	        ->add('description','textarea',['label'=>'Descrição','attr'=>['class'=>'form-control']]);
    }

    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Code\ProdutoBundle\Entity\Produto',
        ));
    }

    
    public function getName()
    {
        return 'code_produtobundle_produtotype';
    }
}