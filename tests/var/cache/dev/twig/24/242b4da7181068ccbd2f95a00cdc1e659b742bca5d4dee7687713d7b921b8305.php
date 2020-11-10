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

/* vendor/symfony/property-info/Tests/AbstractPropertyInfoExtractorTest.php */
class __TwigTemplate_f118ffaf9b74cb8656ff93b6f3d6beaa6bca480b1438fc8a6bfa95d5bc461dc6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/AbstractPropertyInfoExtractorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/AbstractPropertyInfoExtractorTest.php"));

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

namespace Symfony\\Component\\PropertyInfo\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyInfo\\PropertyInfoExtractor;
use Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface;
use Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\DummyExtractor;
use Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\NullExtractor;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class AbstractPropertyInfoExtractorTest extends TestCase
{
    /**
     * @var PropertyInfoExtractor
     */
    protected \$propertyInfo;

    protected function setUp(): void
    {
        \$extractors = [new NullExtractor(), new DummyExtractor()];
        \$this->propertyInfo = new PropertyInfoExtractor(\$extractors, \$extractors, \$extractors, \$extractors, \$extractors);
    }

    public function testInstanceOf()
    {
        \$this->assertInstanceOf('Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface', \$this->propertyInfo);
        \$this->assertInstanceOf('Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface', \$this->propertyInfo);
        \$this->assertInstanceOf('Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface', \$this->propertyInfo);
        \$this->assertInstanceOf('Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface', \$this->propertyInfo);
        \$this->assertInstanceOf(PropertyInitializableExtractorInterface::class, \$this->propertyInfo);
    }

    public function testGetShortDescription()
    {
        \$this->assertSame('short', \$this->propertyInfo->getShortDescription('Foo', 'bar', []));
    }

    public function testGetLongDescription()
    {
        \$this->assertSame('long', \$this->propertyInfo->getLongDescription('Foo', 'bar', []));
    }

    public function testGetTypes()
    {
        \$this->assertEquals([new Type(Type::BUILTIN_TYPE_INT)], \$this->propertyInfo->getTypes('Foo', 'bar', []));
    }

    public function testIsReadable()
    {
        \$this->assertTrue(\$this->propertyInfo->isReadable('Foo', 'bar', []));
    }

    public function testIsWritable()
    {
        \$this->assertTrue(\$this->propertyInfo->isWritable('Foo', 'bar', []));
    }

    public function testGetProperties()
    {
        \$this->assertEquals(['a', 'b'], \$this->propertyInfo->getProperties('Foo'));
    }

    public function testIsInitializable()
    {
        \$this->assertTrue(\$this->propertyInfo->isInitializable('Foo', 'bar', []));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Tests/AbstractPropertyInfoExtractorTest.php";
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

namespace Symfony\\Component\\PropertyInfo\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyInfo\\PropertyInfoExtractor;
use Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface;
use Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\DummyExtractor;
use Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\NullExtractor;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class AbstractPropertyInfoExtractorTest extends TestCase
{
    /**
     * @var PropertyInfoExtractor
     */
    protected \$propertyInfo;

    protected function setUp(): void
    {
        \$extractors = [new NullExtractor(), new DummyExtractor()];
        \$this->propertyInfo = new PropertyInfoExtractor(\$extractors, \$extractors, \$extractors, \$extractors, \$extractors);
    }

    public function testInstanceOf()
    {
        \$this->assertInstanceOf('Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface', \$this->propertyInfo);
        \$this->assertInstanceOf('Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface', \$this->propertyInfo);
        \$this->assertInstanceOf('Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface', \$this->propertyInfo);
        \$this->assertInstanceOf('Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface', \$this->propertyInfo);
        \$this->assertInstanceOf(PropertyInitializableExtractorInterface::class, \$this->propertyInfo);
    }

    public function testGetShortDescription()
    {
        \$this->assertSame('short', \$this->propertyInfo->getShortDescription('Foo', 'bar', []));
    }

    public function testGetLongDescription()
    {
        \$this->assertSame('long', \$this->propertyInfo->getLongDescription('Foo', 'bar', []));
    }

    public function testGetTypes()
    {
        \$this->assertEquals([new Type(Type::BUILTIN_TYPE_INT)], \$this->propertyInfo->getTypes('Foo', 'bar', []));
    }

    public function testIsReadable()
    {
        \$this->assertTrue(\$this->propertyInfo->isReadable('Foo', 'bar', []));
    }

    public function testIsWritable()
    {
        \$this->assertTrue(\$this->propertyInfo->isWritable('Foo', 'bar', []));
    }

    public function testGetProperties()
    {
        \$this->assertEquals(['a', 'b'], \$this->propertyInfo->getProperties('Foo'));
    }

    public function testIsInitializable()
    {
        \$this->assertTrue(\$this->propertyInfo->isInitializable('Foo', 'bar', []));
    }
}
", "vendor/symfony/property-info/Tests/AbstractPropertyInfoExtractorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Tests/AbstractPropertyInfoExtractorTest.php");
    }
}
