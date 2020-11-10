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

/* vendor/symfony/serializer/Tests/Extractor/ObjectPropertyListExtractorTest.php */
class __TwigTemplate_41ae377c8c05937666e168888c0d31da5f639fec3b1c3b5d9975bf30e80a54a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Extractor/ObjectPropertyListExtractorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Extractor/ObjectPropertyListExtractorTest.php"));

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

namespace Symfony\\Component\\Serializer\\Tests\\Extractor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface;
use Symfony\\Component\\Serializer\\Extractor\\ObjectPropertyListExtractor;

class ObjectPropertyListExtractorTest extends TestCase
{
    public function testGetPropertiesWithoutObjectClassResolver(): void
    {
        \$object = new \\stdClass();
        \$context = ['bar' => true];
        \$properties = ['prop1', 'prop2'];

        \$propertyListExtractor = \$this->createMock(PropertyListExtractorInterface::class);
        \$propertyListExtractor->expects(\$this->once())
            ->method('getProperties')
            ->with(\\get_class(\$object), \$context)
            ->willReturn(\$properties);

        \$this->assertSame(
            \$properties,
            (new ObjectPropertyListExtractor(\$propertyListExtractor))->getProperties(\$object, \$context)
        );
    }

    public function testGetPropertiesWithObjectClassResolver(): void
    {
        \$object = new \\stdClass();
        \$classResolver = function (\$objectArg) use (\$object): string {
            \$this->assertSame(\$object, \$objectArg);

            return 'foo';
        };

        \$context = ['bar' => true];
        \$properties = ['prop1', 'prop2'];

        \$propertyListExtractor = \$this->createMock(PropertyListExtractorInterface::class);
        \$propertyListExtractor->expects(\$this->once())
            ->method('getProperties')
            ->with('foo', \$context)
            ->willReturn(\$properties);

        \$this->assertSame(
            \$properties,
            (new ObjectPropertyListExtractor(\$propertyListExtractor, \$classResolver))->getProperties(\$object, \$context)
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Extractor/ObjectPropertyListExtractorTest.php";
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

namespace Symfony\\Component\\Serializer\\Tests\\Extractor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface;
use Symfony\\Component\\Serializer\\Extractor\\ObjectPropertyListExtractor;

class ObjectPropertyListExtractorTest extends TestCase
{
    public function testGetPropertiesWithoutObjectClassResolver(): void
    {
        \$object = new \\stdClass();
        \$context = ['bar' => true];
        \$properties = ['prop1', 'prop2'];

        \$propertyListExtractor = \$this->createMock(PropertyListExtractorInterface::class);
        \$propertyListExtractor->expects(\$this->once())
            ->method('getProperties')
            ->with(\\get_class(\$object), \$context)
            ->willReturn(\$properties);

        \$this->assertSame(
            \$properties,
            (new ObjectPropertyListExtractor(\$propertyListExtractor))->getProperties(\$object, \$context)
        );
    }

    public function testGetPropertiesWithObjectClassResolver(): void
    {
        \$object = new \\stdClass();
        \$classResolver = function (\$objectArg) use (\$object): string {
            \$this->assertSame(\$object, \$objectArg);

            return 'foo';
        };

        \$context = ['bar' => true];
        \$properties = ['prop1', 'prop2'];

        \$propertyListExtractor = \$this->createMock(PropertyListExtractorInterface::class);
        \$propertyListExtractor->expects(\$this->once())
            ->method('getProperties')
            ->with('foo', \$context)
            ->willReturn(\$properties);

        \$this->assertSame(
            \$properties,
            (new ObjectPropertyListExtractor(\$propertyListExtractor, \$classResolver))->getProperties(\$object, \$context)
        );
    }
}
", "vendor/symfony/serializer/Tests/Extractor/ObjectPropertyListExtractorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Extractor/ObjectPropertyListExtractorTest.php");
    }
}
