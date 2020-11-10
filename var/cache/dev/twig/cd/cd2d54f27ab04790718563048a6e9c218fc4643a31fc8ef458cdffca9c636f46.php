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

/* vendor/symfony/validator/Tests/Mapping/PropertyMetadataTest.php */
class __TwigTemplate_f766532d2568601cb1dfb4d16b5ac21ec51bec8afc0a8b8f91b2b7be0770af38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/PropertyMetadataTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/PropertyMetadataTest.php"));

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
use Symfony\\Component\\Validator\\Mapping\\PropertyMetadata;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity;

class PropertyMetadataTest extends TestCase
{
    const CLASSNAME = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity';
    const PARENTCLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent';

    public function testInvalidPropertyName()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ValidatorException');

        new PropertyMetadata(self::CLASSNAME, 'foobar');
    }

    public function testGetPropertyValueFromPrivateProperty()
    {
        \$entity = new Entity('foobar');
        \$metadata = new PropertyMetadata(self::CLASSNAME, 'internal');

        \$this->assertEquals('foobar', \$metadata->getPropertyValue(\$entity));
    }

    public function testGetPropertyValueFromOverriddenPrivateProperty()
    {
        \$entity = new Entity('foobar');
        \$metadata = new PropertyMetadata(self::PARENTCLASS, 'data');

        \$this->assertTrue(\$metadata->isPublic(\$entity));
        \$this->assertEquals('Overridden data', \$metadata->getPropertyValue(\$entity));
    }

    public function testGetPropertyValueFromRemovedProperty()
    {
        \$entity = new Entity('foobar');
        \$metadata = new PropertyMetadata(self::CLASSNAME, 'internal');
        \$metadata->name = 'test';

        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ValidatorException');
        \$metadata->getPropertyValue(\$entity);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/PropertyMetadataTest.php";
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
use Symfony\\Component\\Validator\\Mapping\\PropertyMetadata;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity;

class PropertyMetadataTest extends TestCase
{
    const CLASSNAME = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity';
    const PARENTCLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent';

    public function testInvalidPropertyName()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ValidatorException');

        new PropertyMetadata(self::CLASSNAME, 'foobar');
    }

    public function testGetPropertyValueFromPrivateProperty()
    {
        \$entity = new Entity('foobar');
        \$metadata = new PropertyMetadata(self::CLASSNAME, 'internal');

        \$this->assertEquals('foobar', \$metadata->getPropertyValue(\$entity));
    }

    public function testGetPropertyValueFromOverriddenPrivateProperty()
    {
        \$entity = new Entity('foobar');
        \$metadata = new PropertyMetadata(self::PARENTCLASS, 'data');

        \$this->assertTrue(\$metadata->isPublic(\$entity));
        \$this->assertEquals('Overridden data', \$metadata->getPropertyValue(\$entity));
    }

    public function testGetPropertyValueFromRemovedProperty()
    {
        \$entity = new Entity('foobar');
        \$metadata = new PropertyMetadata(self::CLASSNAME, 'internal');
        \$metadata->name = 'test';

        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ValidatorException');
        \$metadata->getPropertyValue(\$entity);
    }
}
", "vendor/symfony/validator/Tests/Mapping/PropertyMetadataTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/PropertyMetadataTest.php");
    }
}
