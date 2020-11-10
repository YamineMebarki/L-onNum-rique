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

/* vendor/symfony/validator/Tests/ValidatorBuilderTest.php */
class __TwigTemplate_88cd84d8a5b29fed82bada786a14fea68e699b8947e57a38ebbb78da40f6371b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/ValidatorBuilderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/ValidatorBuilderTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Util\\LegacyTranslatorProxy;
use Symfony\\Component\\Validator\\ValidatorBuilder;
use Symfony\\Component\\Validator\\ValidatorBuilderInterface;

class ValidatorBuilderTest extends TestCase
{
    /**
     * @var ValidatorBuilderInterface
     */
    protected \$builder;

    protected function setUp(): void
    {
        \$this->builder = new ValidatorBuilder();
    }

    protected function tearDown(): void
    {
        \$this->builder = null;
    }

    public function testAddObjectInitializer()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addObjectInitializer(
            \$this->getMockBuilder('Symfony\\Component\\Validator\\ObjectInitializerInterface')->getMock()
        ));
    }

    public function testAddObjectInitializers()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addObjectInitializers([]));
    }

    public function testAddXmlMapping()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addXmlMapping('mapping'));
    }

    public function testAddXmlMappings()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addXmlMappings([]));
    }

    public function testAddYamlMapping()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addYamlMapping('mapping'));
    }

    public function testAddYamlMappings()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addYamlMappings([]));
    }

    public function testAddMethodMapping()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addMethodMapping('mapping'));
    }

    public function testAddMethodMappings()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addMethodMappings([]));
    }

    public function testEnableAnnotationMapping()
    {
        \$this->assertSame(\$this->builder, \$this->builder->enableAnnotationMapping());
    }

    public function testDisableAnnotationMapping()
    {
        \$this->assertSame(\$this->builder, \$this->builder->disableAnnotationMapping());
    }

    public function testSetMetadataCache()
    {
        \$this->assertSame(\$this->builder, \$this->builder->setMetadataCache(
            \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface')->getMock())
        );
    }

    public function testSetConstraintValidatorFactory()
    {
        \$this->assertSame(\$this->builder, \$this->builder->setConstraintValidatorFactory(
            \$this->getMockBuilder('Symfony\\Component\\Validator\\ConstraintValidatorFactoryInterface')->getMock())
        );
    }

    public function testSetTranslator()
    {
        \$this->assertSame(\$this->builder, \$this->builder->setTranslator(
            \$this->getMockBuilder('Symfony\\Component\\Translation\\TranslatorInterface')->getMock())
        );
    }

    public function testLegacyTranslatorProxy()
    {
        \$proxy = \$this->getMockBuilder(LegacyTranslatorProxy::class)->disableOriginalConstructor()->getMock();
        \$proxy->expects(\$this->once())->method('getTranslator');

        \$this->builder->setTranslator(\$proxy);
    }

    public function testSetTranslationDomain()
    {
        \$this->assertSame(\$this->builder, \$this->builder->setTranslationDomain('TRANS_DOMAIN'));
    }

    public function testGetValidator()
    {
        \$this->assertInstanceOf('Symfony\\Component\\Validator\\Validator\\RecursiveValidator', \$this->builder->getValidator());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/ValidatorBuilderTest.php";
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

namespace Symfony\\Component\\Validator\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Util\\LegacyTranslatorProxy;
use Symfony\\Component\\Validator\\ValidatorBuilder;
use Symfony\\Component\\Validator\\ValidatorBuilderInterface;

class ValidatorBuilderTest extends TestCase
{
    /**
     * @var ValidatorBuilderInterface
     */
    protected \$builder;

    protected function setUp(): void
    {
        \$this->builder = new ValidatorBuilder();
    }

    protected function tearDown(): void
    {
        \$this->builder = null;
    }

    public function testAddObjectInitializer()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addObjectInitializer(
            \$this->getMockBuilder('Symfony\\Component\\Validator\\ObjectInitializerInterface')->getMock()
        ));
    }

    public function testAddObjectInitializers()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addObjectInitializers([]));
    }

    public function testAddXmlMapping()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addXmlMapping('mapping'));
    }

    public function testAddXmlMappings()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addXmlMappings([]));
    }

    public function testAddYamlMapping()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addYamlMapping('mapping'));
    }

    public function testAddYamlMappings()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addYamlMappings([]));
    }

    public function testAddMethodMapping()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addMethodMapping('mapping'));
    }

    public function testAddMethodMappings()
    {
        \$this->assertSame(\$this->builder, \$this->builder->addMethodMappings([]));
    }

    public function testEnableAnnotationMapping()
    {
        \$this->assertSame(\$this->builder, \$this->builder->enableAnnotationMapping());
    }

    public function testDisableAnnotationMapping()
    {
        \$this->assertSame(\$this->builder, \$this->builder->disableAnnotationMapping());
    }

    public function testSetMetadataCache()
    {
        \$this->assertSame(\$this->builder, \$this->builder->setMetadataCache(
            \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface')->getMock())
        );
    }

    public function testSetConstraintValidatorFactory()
    {
        \$this->assertSame(\$this->builder, \$this->builder->setConstraintValidatorFactory(
            \$this->getMockBuilder('Symfony\\Component\\Validator\\ConstraintValidatorFactoryInterface')->getMock())
        );
    }

    public function testSetTranslator()
    {
        \$this->assertSame(\$this->builder, \$this->builder->setTranslator(
            \$this->getMockBuilder('Symfony\\Component\\Translation\\TranslatorInterface')->getMock())
        );
    }

    public function testLegacyTranslatorProxy()
    {
        \$proxy = \$this->getMockBuilder(LegacyTranslatorProxy::class)->disableOriginalConstructor()->getMock();
        \$proxy->expects(\$this->once())->method('getTranslator');

        \$this->builder->setTranslator(\$proxy);
    }

    public function testSetTranslationDomain()
    {
        \$this->assertSame(\$this->builder, \$this->builder->setTranslationDomain('TRANS_DOMAIN'));
    }

    public function testGetValidator()
    {
        \$this->assertInstanceOf('Symfony\\Component\\Validator\\Validator\\RecursiveValidator', \$this->builder->getValidator());
    }
}
", "vendor/symfony/validator/Tests/ValidatorBuilderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/ValidatorBuilderTest.php");
    }
}
