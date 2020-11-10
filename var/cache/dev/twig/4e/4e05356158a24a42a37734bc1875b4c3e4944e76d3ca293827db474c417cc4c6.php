<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* src/DataFixtures/AppFixtures.php */
class __TwigTemplate_e17ce9875edcadabe7ce03ad937ecbaea011126d7ba3da41ccc3e653fcbf6abe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/DataFixtures/AppFixtures.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/DataFixtures/AppFixtures.php"));

        // line 1
        echo "<?php

namespace App\\DataFixtures;

use App\\Form\\ArticleType;
use Doctrine\\Bundle\\FixturesBundle\\Fixture;
use Doctrine\\Common\\Persistence\\ObjectManager;
use App\\Entity\\Article;
use App\\Entity\\Category;
use App\\Entity\\Comment;
use App\\Entity\\User;
use Faker\\Factory;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface;
use App\\Entity\\ArticleLike;
use App\\Repository\\ArticleLikeRepository;



class AppFixtures extends Fixture
{
    /**
     * Encodeur de mot de passe
     *
     * @var UserPasswordEncoderInterface
     */
    private \$encoder;

    public function __construct(UserPasswordEncoderInterface \$encoder)
    {
        \$this->encoder = \$encoder;
    }

    public function load(ObjectManager \$manager)
    {

        \$faker = \\Faker\\Factory::create('fr_FR');
        // \$product = new Product();
        // \$manager->persist(\$product);

        //Créer 3 catégories
        for (\$i=0; \$i <=3; \$i++)
        {
            \$category = new Category();
            \$category->setTitle(\$faker->sentence())
                ->setContent(\$faker->paragraph());

            \$manager->persist(\$category);

            for (\$j =1; \$j < mt_rand(4, 6); \$j ++)
            {
                \$content = '<p>'.join(\$faker->paragraphs(5),  '</p><p>'). '</p>';
                \$article = new Article();
                \$article->setTitle(\$faker->sentence())
                    ->setImage(\$faker->imageUrl())
                    ->setName(\$faker->name())
                    ->setContent(\$content)
                    ->setCreateAt(\$faker->dateTimeBetween('-6 months'))
                    ->setCategory(\$category);

                \$manager->persist(\$article);
            }

            for (\$k = 1; \$k <= mt_rand(4, 10);\$k ++)
            {
                \$content = '<p>'.join(\$faker->paragraphs(2),  '</p><p>'). '</p>';
                \$now = new \\DateTime();
                \$interval = \$now->diff(\$article->getCreateAt());
                \$days = \$interval->days;
                \$min = '-'. \$days . 'days'; //-100 days
                \$comment = new Comment();
                \$comment->setAuthor(\$faker->name())
                    ->setContent(\$content)
                    ->setCreatedAt(\$faker->dateTimeBetween(\$min))
                    ->setStats(true)
                    ->setArticle(\$article);
                \$manager->persist(\$comment);
            }

            \$users = [];

            \$user = new User();
            \$user->setEmail('dzaidzai@hotmail.fr')
                ->setRole('admin')
                ->setAge('18')
                ->setUsername('Yms)')
                ->setPassword(\$this->encoder->encodePassword(\$user, 'password'));

            \$manager->persist(\$user);
            \$users[] = \$user;
            \$users[] = \$user;
            for (\$i=0;\$i < 20; \$i ++)
            {
                \$user = new User();
                \$user->setEmail(\$faker->email)
                    ->setRole('user')
                    ->setAge('18')
                    ->setUsername(\$faker->name())
                    ->setPassword(\$this->encoder->encodePassword(\$user, 'password'));
                \$manager->persist(\$user);
                \$users[] = \$user;
            }

                for (\$j=0; \$j < mt_rand(0, 10); \$j ++)
                {
                    \$like = new ArticleLike();
                    \$like->setArticleId(\$article)
                        ->setUserId(\$faker->randomElement(\$users))
                        ->setCreatedAt(new \\DateTime());

                    \$manager-> persist(\$like);

                }
        }
        \$manager->flush();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "src/DataFixtures/AppFixtures.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\DataFixtures;

use App\\Form\\ArticleType;
use Doctrine\\Bundle\\FixturesBundle\\Fixture;
use Doctrine\\Common\\Persistence\\ObjectManager;
use App\\Entity\\Article;
use App\\Entity\\Category;
use App\\Entity\\Comment;
use App\\Entity\\User;
use Faker\\Factory;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface;
use App\\Entity\\ArticleLike;
use App\\Repository\\ArticleLikeRepository;



class AppFixtures extends Fixture
{
    /**
     * Encodeur de mot de passe
     *
     * @var UserPasswordEncoderInterface
     */
    private \$encoder;

    public function __construct(UserPasswordEncoderInterface \$encoder)
    {
        \$this->encoder = \$encoder;
    }

    public function load(ObjectManager \$manager)
    {

        \$faker = \\Faker\\Factory::create('fr_FR');
        // \$product = new Product();
        // \$manager->persist(\$product);

        //Créer 3 catégories
        for (\$i=0; \$i <=3; \$i++)
        {
            \$category = new Category();
            \$category->setTitle(\$faker->sentence())
                ->setContent(\$faker->paragraph());

            \$manager->persist(\$category);

            for (\$j =1; \$j < mt_rand(4, 6); \$j ++)
            {
                \$content = '<p>'.join(\$faker->paragraphs(5),  '</p><p>'). '</p>';
                \$article = new Article();
                \$article->setTitle(\$faker->sentence())
                    ->setImage(\$faker->imageUrl())
                    ->setName(\$faker->name())
                    ->setContent(\$content)
                    ->setCreateAt(\$faker->dateTimeBetween('-6 months'))
                    ->setCategory(\$category);

                \$manager->persist(\$article);
            }

            for (\$k = 1; \$k <= mt_rand(4, 10);\$k ++)
            {
                \$content = '<p>'.join(\$faker->paragraphs(2),  '</p><p>'). '</p>';
                \$now = new \\DateTime();
                \$interval = \$now->diff(\$article->getCreateAt());
                \$days = \$interval->days;
                \$min = '-'. \$days . 'days'; //-100 days
                \$comment = new Comment();
                \$comment->setAuthor(\$faker->name())
                    ->setContent(\$content)
                    ->setCreatedAt(\$faker->dateTimeBetween(\$min))
                    ->setStats(true)
                    ->setArticle(\$article);
                \$manager->persist(\$comment);
            }

            \$users = [];

            \$user = new User();
            \$user->setEmail('dzaidzai@hotmail.fr')
                ->setRole('admin')
                ->setAge('18')
                ->setUsername('Yms)')
                ->setPassword(\$this->encoder->encodePassword(\$user, 'password'));

            \$manager->persist(\$user);
            \$users[] = \$user;
            \$users[] = \$user;
            for (\$i=0;\$i < 20; \$i ++)
            {
                \$user = new User();
                \$user->setEmail(\$faker->email)
                    ->setRole('user')
                    ->setAge('18')
                    ->setUsername(\$faker->name())
                    ->setPassword(\$this->encoder->encodePassword(\$user, 'password'));
                \$manager->persist(\$user);
                \$users[] = \$user;
            }

                for (\$j=0; \$j < mt_rand(0, 10); \$j ++)
                {
                    \$like = new ArticleLike();
                    \$like->setArticleId(\$article)
                        ->setUserId(\$faker->randomElement(\$users))
                        ->setCreatedAt(new \\DateTime());

                    \$manager-> persist(\$like);

                }
        }
        \$manager->flush();
    }
}
", "src/DataFixtures/AppFixtures.php", "/var/www/public/DevLaon/templates/src/DataFixtures/AppFixtures.php");
    }
}
