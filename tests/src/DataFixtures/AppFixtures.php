<?php

namespace App\DataFixtures;

use App\Form\ArticleType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\User;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\ArticleLike;
use App\Repository\ArticleLikeRepository;



class AppFixtures extends Fixture
{
    /**
     * Encodeur de mot de passe
     *
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create('fr_FR');
        // $product = new Product();
        // $manager->persist($product);

        //Créer 3 catégories
        for ($i=0; $i <=3; $i++)
        {
            $category = new Category();
            $category->setTitle($faker->sentence())
                ->setContent($faker->paragraph());

            $manager->persist($category);

            for ($j =1; $j < mt_rand(4, 6); $j ++)
            {
                $content = '<p>'.join($faker->paragraphs(5),  '</p><p>'). '</p>';
                $article = new Article();
                $article->setTitle($faker->sentence())
                    ->setImage($faker->imageUrl())
                    ->setName($faker->name())
                    ->setContent($content)
                    ->setCreateAt($faker->dateTimeBetween('-6 months'))
                    ->setCategory($category);

                $manager->persist($article);
            }

            for ($k = 1; $k <= mt_rand(4, 10);$k ++)
            {
                $content = '<p>'.join($faker->paragraphs(2),  '</p><p>'). '</p>';
                $now = new \DateTime();
                $interval = $now->diff($article->getCreateAt());
                $days = $interval->days;
                $min = '-'. $days . 'days'; //-100 days
                $comment = new Comment();
                $comment->setAuthor($faker->name())
                    ->setContent($content)
                    ->setCreatedAt($faker->dateTimeBetween($min))
                    ->setStats(true)
                    ->setArticle($article);
                $manager->persist($comment);
            }

            $users = [];

            $user = new User();
            $user->setEmail('dzaidzai@hotmail.fr')
                ->setRole('admin')
                ->setAge('18')
                ->setUsername('Yms)')
                ->setPassword($this->encoder->encodePassword($user, 'password'));

            $manager->persist($user);
            $users[] = $user;
            $users[] = $user;
            for ($i=0;$i < 20; $i ++)
            {
                $user = new User();
                $user->setEmail($faker->email)
                    ->setRole('user')
                    ->setAge('18')
                    ->setUsername($faker->name())
                    ->setPassword($this->encoder->encodePassword($user, 'password'));
                $manager->persist($user);
                $users[] = $user;
            }

                for ($j=0; $j < mt_rand(0, 10); $j ++)
                {
                    $like = new ArticleLike();
                    $like->setArticleId($article)
                        ->setUserId($faker->randomElement($users))
                        ->setCreatedAt(new \DateTime());

                    $manager-> persist($like);

                }
        }
        $manager->flush();
    }
}
