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

/* vendor/symfony/serializer/Tests/DeserializeNestedArrayOfObjectsTest.php */
class __TwigTemplate_85f383c117f1d0ee0fdf42e8591e632837756a2ce9335751d6f24d01f3288e3e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/DeserializeNestedArrayOfObjectsTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/DeserializeNestedArrayOfObjectsTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Serializer\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyInfo\\Extractor\\PhpDocExtractor;
use Symfony\\Component\\Serializer\\Encoder\\JsonEncoder;
use Symfony\\Component\\Serializer\\Normalizer\\ArrayDenormalizer;
use Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer;
use Symfony\\Component\\Serializer\\Serializer;

class DeserializeNestedArrayOfObjectsTest extends TestCase
{
    public function provider()
    {
        return [
            //from property PhpDoc
            [Zoo::class],
            //from argument constructor PhpDoc
            [ZooImmutable::class],
        ];
    }

    /**
     * @dataProvider provider
     */
    public function testPropertyPhpDoc(\$class)
    {
        //GIVEN
        \$json = <<<EOF
{
    \"animals\": [
        {\"name\": \"Bug\"}
    ]
}
EOF;
        \$serializer = new Serializer([
            new ObjectNormalizer(null, null, null, new PhpDocExtractor()),
            new ArrayDenormalizer(),
        ], ['json' => new JsonEncoder()]);
        //WHEN
        /** @var Zoo \$zoo */
        \$zoo = \$serializer->deserialize(\$json, \$class, 'json');
        //THEN
        self::assertCount(1, \$zoo->getAnimals());
        self::assertInstanceOf(Animal::class, \$zoo->getAnimals()[0]);
    }
}

class Zoo
{
    /** @var Animal[] */
    private \$animals = [];

    /**
     * @return Animal[]
     */
    public function getAnimals()
    {
        return \$this->animals;
    }

    /**
     * @param Animal[] \$animals
     */
    public function setAnimals(array \$animals)
    {
        \$this->animals = \$animals;
    }
}

class ZooImmutable
{
    /** @var Animal[] */
    private \$animals = [];

    /**
     * @param Animal[] \$animals
     */
    public function __construct(array \$animals = [])
    {
        \$this->animals = \$animals;
    }

    /**
     * @return Animal[]
     */
    public function getAnimals()
    {
        return \$this->animals;
    }
}

class Animal
{
    /** @var string */
    private \$name;

    public function __construct()
    {
        echo '';
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * @param string|null \$name
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/DeserializeNestedArrayOfObjectsTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Serializer\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyInfo\\Extractor\\PhpDocExtractor;
use Symfony\\Component\\Serializer\\Encoder\\JsonEncoder;
use Symfony\\Component\\Serializer\\Normalizer\\ArrayDenormalizer;
use Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer;
use Symfony\\Component\\Serializer\\Serializer;

class DeserializeNestedArrayOfObjectsTest extends TestCase
{
    public function provider()
    {
        return [
            //from property PhpDoc
            [Zoo::class],
            //from argument constructor PhpDoc
            [ZooImmutable::class],
        ];
    }

    /**
     * @dataProvider provider
     */
    public function testPropertyPhpDoc(\$class)
    {
        //GIVEN
        \$json = <<<EOF
{
    \"animals\": [
        {\"name\": \"Bug\"}
    ]
}
EOF;
        \$serializer = new Serializer([
            new ObjectNormalizer(null, null, null, new PhpDocExtractor()),
            new ArrayDenormalizer(),
        ], ['json' => new JsonEncoder()]);
        //WHEN
        /** @var Zoo \$zoo */
        \$zoo = \$serializer->deserialize(\$json, \$class, 'json');
        //THEN
        self::assertCount(1, \$zoo->getAnimals());
        self::assertInstanceOf(Animal::class, \$zoo->getAnimals()[0]);
    }
}

class Zoo
{
    /** @var Animal[] */
    private \$animals = [];

    /**
     * @return Animal[]
     */
    public function getAnimals()
    {
        return \$this->animals;
    }

    /**
     * @param Animal[] \$animals
     */
    public function setAnimals(array \$animals)
    {
        \$this->animals = \$animals;
    }
}

class ZooImmutable
{
    /** @var Animal[] */
    private \$animals = [];

    /**
     * @param Animal[] \$animals
     */
    public function __construct(array \$animals = [])
    {
        \$this->animals = \$animals;
    }

    /**
     * @return Animal[]
     */
    public function getAnimals()
    {
        return \$this->animals;
    }
}

class Animal
{
    /** @var string */
    private \$name;

    public function __construct()
    {
        echo '';
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * @param string|null \$name
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
    }
}
", "vendor/symfony/serializer/Tests/DeserializeNestedArrayOfObjectsTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/DeserializeNestedArrayOfObjectsTest.php");
    }
}
