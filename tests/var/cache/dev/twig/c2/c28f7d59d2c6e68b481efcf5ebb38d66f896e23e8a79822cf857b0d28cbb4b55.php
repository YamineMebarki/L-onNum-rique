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

/* vendor/symfony/validator/Tests/Mapping/GetterMetadataTest.php */
class __TwigTemplate_5467ca9900f816c927818c9b81dfb5c2dde1f413bd2e6afb4dd434c8717bf751 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/GetterMetadataTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/GetterMetadataTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Mapping;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Mapping\\GetterMetadata;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity;

class GetterMetadataTest extends TestCase
{
    const CLASSNAME = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity';

    public function testInvalidPropertyName()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ValidatorException');

        new GetterMetadata(self::CLASSNAME, 'foobar');
    }

    public function testGetPropertyValueFromPublicGetter()
    {
        // private getters don't work yet because ReflectionMethod::setAccessible()
        // does not exist yet in a stable PHP release

        \$entity = new Entity('foobar');
        \$metadata = new GetterMetadata(self::CLASSNAME, 'internal');

        \$this->assertEquals('foobar from getter', \$metadata->getPropertyValue(\$entity));
    }

    public function testGetPropertyValueFromOverriddenPublicGetter()
    {
        \$entity = new Entity();
        \$metadata = new GetterMetadata(self::CLASSNAME, 'data');

        \$this->assertEquals('Overridden data', \$metadata->getPropertyValue(\$entity));
    }

    public function testGetPropertyValueFromIsser()
    {
        \$entity = new Entity();
        \$metadata = new GetterMetadata(self::CLASSNAME, 'valid', 'isValid');

        \$this->assertEquals('valid', \$metadata->getPropertyValue(\$entity));
    }

    public function testGetPropertyValueFromHasser()
    {
        \$entity = new Entity();
        \$metadata = new GetterMetadata(self::CLASSNAME, 'permissions');

        \$this->assertEquals('permissions', \$metadata->getPropertyValue(\$entity));
    }

    public function testUndefinedMethodNameThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ValidatorException');
        \$this->expectExceptionMessage('The hasLastName() method does not exist in class Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity.');
        new GetterMetadata(self::CLASSNAME, 'lastName', 'hasLastName');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/GetterMetadataTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Mapping;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Mapping\\GetterMetadata;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity;

class GetterMetadataTest extends TestCase
{
    const CLASSNAME = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity';

    public function testInvalidPropertyName()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ValidatorException');

        new GetterMetadata(self::CLASSNAME, 'foobar');
    }

    public function testGetPropertyValueFromPublicGetter()
    {
        // private getters don't work yet because ReflectionMethod::setAccessible()
        // does not exist yet in a stable PHP release

        \$entity = new Entity('foobar');
        \$metadata = new GetterMetadata(self::CLASSNAME, 'internal');

        \$this->assertEquals('foobar from getter', \$metadata->getPropertyValue(\$entity));
    }

    public function testGetPropertyValueFromOverriddenPublicGetter()
    {
        \$entity = new Entity();
        \$metadata = new GetterMetadata(self::CLASSNAME, 'data');

        \$this->assertEquals('Overridden data', \$metadata->getPropertyValue(\$entity));
    }

    public function testGetPropertyValueFromIsser()
    {
        \$entity = new Entity();
        \$metadata = new GetterMetadata(self::CLASSNAME, 'valid', 'isValid');

        \$this->assertEquals('valid', \$metadata->getPropertyValue(\$entity));
    }

    public function testGetPropertyValueFromHasser()
    {
        \$entity = new Entity();
        \$metadata = new GetterMetadata(self::CLASSNAME, 'permissions');

        \$this->assertEquals('permissions', \$metadata->getPropertyValue(\$entity));
    }

    public function testUndefinedMethodNameThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ValidatorException');
        \$this->expectExceptionMessage('The hasLastName() method does not exist in class Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity.');
        new GetterMetadata(self::CLASSNAME, 'lastName', 'hasLastName');
    }
}
", "vendor/symfony/validator/Tests/Mapping/GetterMetadataTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/GetterMetadataTest.php");
    }
}
