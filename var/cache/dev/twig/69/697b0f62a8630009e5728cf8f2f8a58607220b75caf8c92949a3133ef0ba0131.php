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

/* vendor/symfony/serializer/Tests/Mapping/Factory/CacheMetadataFactoryTest.php */
class __TwigTemplate_82057f80ce23bc914aff8d0d0364dac26b76bbf8793ba2b74d2720fe1c4e3f53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Mapping/Factory/CacheMetadataFactoryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Mapping/Factory/CacheMetadataFactoryTest.php"));

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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadata;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\CacheClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\Dummy;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CacheMetadataFactoryTest extends TestCase
{
    public function testGetMetadataFor()
    {
        \$metadata = new ClassMetadata(Dummy::class);

        \$decorated = \$this->getMockBuilder(ClassMetadataFactoryInterface::class)->getMock();
        \$decorated
            ->expects(\$this->once())
            ->method('getMetadataFor')
            ->willReturn(\$metadata)
        ;

        \$factory = new CacheClassMetadataFactory(\$decorated, new ArrayAdapter());

        \$this->assertEquals(\$metadata, \$factory->getMetadataFor(Dummy::class));
        // The second call should retrieve the value from the cache
        \$this->assertEquals(\$metadata, \$factory->getMetadataFor(Dummy::class));
    }

    public function testHasMetadataFor()
    {
        \$decorated = \$this->getMockBuilder(ClassMetadataFactoryInterface::class)->getMock();
        \$decorated
            ->expects(\$this->once())
            ->method('hasMetadataFor')
            ->willReturn(true)
        ;

        \$factory = new CacheClassMetadataFactory(\$decorated, new ArrayAdapter());

        \$this->assertTrue(\$factory->hasMetadataFor(Dummy::class));
    }

    public function testInvalidClassThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$decorated = \$this->getMockBuilder(ClassMetadataFactoryInterface::class)->getMock();
        \$factory = new CacheClassMetadataFactory(\$decorated, new ArrayAdapter());

        \$factory->getMetadataFor('Not\\Exist');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Mapping/Factory/CacheMetadataFactoryTest.php";
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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadata;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\CacheClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\Dummy;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CacheMetadataFactoryTest extends TestCase
{
    public function testGetMetadataFor()
    {
        \$metadata = new ClassMetadata(Dummy::class);

        \$decorated = \$this->getMockBuilder(ClassMetadataFactoryInterface::class)->getMock();
        \$decorated
            ->expects(\$this->once())
            ->method('getMetadataFor')
            ->willReturn(\$metadata)
        ;

        \$factory = new CacheClassMetadataFactory(\$decorated, new ArrayAdapter());

        \$this->assertEquals(\$metadata, \$factory->getMetadataFor(Dummy::class));
        // The second call should retrieve the value from the cache
        \$this->assertEquals(\$metadata, \$factory->getMetadataFor(Dummy::class));
    }

    public function testHasMetadataFor()
    {
        \$decorated = \$this->getMockBuilder(ClassMetadataFactoryInterface::class)->getMock();
        \$decorated
            ->expects(\$this->once())
            ->method('hasMetadataFor')
            ->willReturn(true)
        ;

        \$factory = new CacheClassMetadataFactory(\$decorated, new ArrayAdapter());

        \$this->assertTrue(\$factory->hasMetadataFor(Dummy::class));
    }

    public function testInvalidClassThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$decorated = \$this->getMockBuilder(ClassMetadataFactoryInterface::class)->getMock();
        \$factory = new CacheClassMetadataFactory(\$decorated, new ArrayAdapter());

        \$factory->getMetadataFor('Not\\Exist');
    }
}
", "vendor/symfony/serializer/Tests/Mapping/Factory/CacheMetadataFactoryTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Mapping/Factory/CacheMetadataFactoryTest.php");
    }
}
