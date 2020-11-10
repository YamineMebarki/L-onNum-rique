<?php

namespace App\Form;
use App\Entity\Article;
use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content')
            /*->add('article',  EntityType::class, [
            'class' => Article::class,
            'choice_label' => 'id'
        ])*/;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
/*<form action="" method="post">
    <div class="form-group">
        <label for="author">Auteur :</label>
        <input type="text" name="author" class="form-control" id="author" />
    </div>
    <div class="form-group">
        <label for="content">Commentaire :</label>
        <textarea name="content" class="form-control" id="content" ></textarea>
    </div>
    <div class="form-group">
        <label for="article"></label>
        <input type="hidden" name="article" class="form-control" id="article" value="{{ article.id }}" />
    </div>
    <div class="form-group">
        <label for=""></label>
        <button type="submit" class="btn btn-primary"  >Enregistrer</button>
    </div>
</form>*/