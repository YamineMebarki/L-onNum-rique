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

/* vendor/symfony/property-access/Tests/PropertyAccessorArrayAccessTest.php */
class __TwigTemplate_31f0636e4c79a1de6c9a00ca9fd0579cdf5569550426fb409802f7f40aa8748b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/PropertyAccessorArrayAccessTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/PropertyAccessorArrayAccessTest.php"));

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

namespace Symfony\\Component\\PropertyAccess\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessor;

abstract class PropertyAccessorArrayAccessTest extends TestCase
{
    /**
     * @var PropertyAccessor
     */
    protected \$propertyAccessor;

    protected function setUp(): void
    {
        \$this->propertyAccessor = new PropertyAccessor();
    }

    abstract protected function getContainer(array \$array);

    public function getValidPropertyPaths()
    {
        return [
            [\$this->getContainer(['firstName' => 'Bernhard']), '[firstName]', 'Bernhard'],
            [\$this->getContainer(['person' => \$this->getContainer(['firstName' => 'Bernhard'])]), '[person][firstName]', 'Bernhard'],
        ];
    }

    /**
     * @dataProvider getValidPropertyPaths
     */
    public function testGetValue(\$collection, \$path, \$value)
    {
        \$this->assertSame(\$value, \$this->propertyAccessor->getValue(\$collection, \$path));
    }

    public function testGetValueFailsIfNoSuchIndex()
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\NoSuchIndexException');
        \$this->propertyAccessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        \$object = \$this->getContainer(['firstName' => 'Bernhard']);

        \$this->propertyAccessor->getValue(\$object, '[lastName]');
    }

    /**
     * @dataProvider getValidPropertyPaths
     */
    public function testSetValue(\$collection, \$path)
    {
        \$this->propertyAccessor->setValue(\$collection, \$path, 'Updated');

        \$this->assertSame('Updated', \$this->propertyAccessor->getValue(\$collection, \$path));
    }

    /**
     * @dataProvider getValidPropertyPaths
     */
    public function testIsReadable(\$collection, \$path)
    {
        \$this->assertTrue(\$this->propertyAccessor->isReadable(\$collection, \$path));
    }

    /**
     * @dataProvider getValidPropertyPaths
     */
    public function testIsWritable(\$collection, \$path)
    {
        \$this->assertTrue(\$this->propertyAccessor->isWritable(\$collection, \$path));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/Tests/PropertyAccessorArrayAccessTest.php";
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

namespace Symfony\\Component\\PropertyAccess\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\PropertyAccess\\PropertyAccessor;

abstract class PropertyAccessorArrayAccessTest extends TestCase
{
    /**
     * @var PropertyAccessor
     */
    protected \$propertyAccessor;

    protected function setUp(): void
    {
        \$this->propertyAccessor = new PropertyAccessor();
    }

    abstract protected function getContainer(array \$array);

    public function getValidPropertyPaths()
    {
        return [
            [\$this->getContainer(['firstName' => 'Bernhard']), '[firstName]', 'Bernhard'],
            [\$this->getContainer(['person' => \$this->getContainer(['firstName' => 'Bernhard'])]), '[person][firstName]', 'Bernhard'],
        ];
    }

    /**
     * @dataProvider getValidPropertyPaths
     */
    public function testGetValue(\$collection, \$path, \$value)
    {
        \$this->assertSame(\$value, \$this->propertyAccessor->getValue(\$collection, \$path));
    }

    public function testGetValueFailsIfNoSuchIndex()
    {
        \$this->expectException('Symfony\\Component\\PropertyAccess\\Exception\\NoSuchIndexException');
        \$this->propertyAccessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        \$object = \$this->getContainer(['firstName' => 'Bernhard']);

        \$this->propertyAccessor->getValue(\$object, '[lastName]');
    }

    /**
     * @dataProvider getValidPropertyPaths
     */
    public function testSetValue(\$collection, \$path)
    {
        \$this->propertyAccessor->setValue(\$collection, \$path, 'Updated');

        \$this->assertSame('Updated', \$this->propertyAccessor->getValue(\$collection, \$path));
    }

    /**
     * @dataProvider getValidPropertyPaths
     */
    public function testIsReadable(\$collection, \$path)
    {
        \$this->assertTrue(\$this->propertyAccessor->isReadable(\$collection, \$path));
    }

    /**
     * @dataProvider getValidPropertyPaths
     */
    public function testIsWritable(\$collection, \$path)
    {
        \$this->assertTrue(\$this->propertyAccessor->isWritable(\$collection, \$path));
    }
}
", "vendor/symfony/property-access/Tests/PropertyAccessorArrayAccessTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/Tests/PropertyAccessorArrayAccessTest.php");
    }
}
