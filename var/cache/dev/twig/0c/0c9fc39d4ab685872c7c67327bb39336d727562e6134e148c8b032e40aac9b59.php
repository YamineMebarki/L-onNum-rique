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

/* vendor/symfony/serializer/Tests/Mapping/Factory/ClassMetadataFactoryTest.php */
class __TwigTemplate_41284ede96dc1fe38fb1bc21f29c1b0f36cd4f08e9d4ed560c525c95e1407e3a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Mapping/Factory/ClassMetadataFactoryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Mapping/Factory/ClassMetadataFactoryTest.php"));

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

namespace Symfony\\Component\\Serializer\\Tests\\Mapping\\Factory;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\AnnotationLoader;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderChain;
use Symfony\\Component\\Serializer\\Tests\\Mapping\\TestClassMetadataFactory;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ClassMetadataFactoryTest extends TestCase
{
    public function testInterface()
    {
        \$classMetadata = new ClassMetadataFactory(new LoaderChain([]));
        \$this->assertInstanceOf('Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface', \$classMetadata);
    }

    public function testGetMetadataFor()
    {
        \$factory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        \$classMetadata = \$factory->getMetadataFor('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy');

        \$this->assertEquals(TestClassMetadataFactory::createClassMetadata(true, true), \$classMetadata);
    }

    public function testHasMetadataFor()
    {
        \$factory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        \$this->assertTrue(\$factory->hasMetadataFor('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy'));
        \$this->assertTrue(\$factory->hasMetadataFor('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummyParent'));
        \$this->assertTrue(\$factory->hasMetadataFor('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummyInterface'));
        \$this->assertFalse(\$factory->hasMetadataFor('Dunglas\\Entity'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Mapping/Factory/ClassMetadataFactoryTest.php";
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

namespace Symfony\\Component\\Serializer\\Tests\\Mapping\\Factory;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\AnnotationLoader;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderChain;
use Symfony\\Component\\Serializer\\Tests\\Mapping\\TestClassMetadataFactory;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ClassMetadataFactoryTest extends TestCase
{
    public function testInterface()
    {
        \$classMetadata = new ClassMetadataFactory(new LoaderChain([]));
        \$this->assertInstanceOf('Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface', \$classMetadata);
    }

    public function testGetMetadataFor()
    {
        \$factory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        \$classMetadata = \$factory->getMetadataFor('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy');

        \$this->assertEquals(TestClassMetadataFactory::createClassMetadata(true, true), \$classMetadata);
    }

    public function testHasMetadataFor()
    {
        \$factory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        \$this->assertTrue(\$factory->hasMetadataFor('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy'));
        \$this->assertTrue(\$factory->hasMetadataFor('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummyParent'));
        \$this->assertTrue(\$factory->hasMetadataFor('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummyInterface'));
        \$this->assertFalse(\$factory->hasMetadataFor('Dunglas\\Entity'));
    }
}
", "vendor/symfony/serializer/Tests/Mapping/Factory/ClassMetadataFactoryTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Mapping/Factory/ClassMetadataFactoryTest.php");
    }
}
