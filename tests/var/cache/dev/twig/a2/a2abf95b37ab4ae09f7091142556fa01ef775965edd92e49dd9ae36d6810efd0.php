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

/* vendor/symfony/serializer/Tests/NameConverter/CamelCaseToSnakeCaseNameConverterTest.php */
class __TwigTemplate_dbd1ad647783b2cde7986b9fe0f870d639c2fecd72f2e46a63b58c95747cce79 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/NameConverter/CamelCaseToSnakeCaseNameConverterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/NameConverter/CamelCaseToSnakeCaseNameConverterTest.php"));

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

namespace Symfony\\Component\\Serializer\\Tests\\NameConverter;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CamelCaseToSnakeCaseNameConverterTest extends TestCase
{
    public function testInterface()
    {
        \$attributeMetadata = new CamelCaseToSnakeCaseNameConverter();
        \$this->assertInstanceOf('Symfony\\Component\\Serializer\\NameConverter\\NameConverterInterface', \$attributeMetadata);
    }

    /**
     * @dataProvider attributeProvider
     */
    public function testNormalize(\$underscored, \$camelCased, \$useLowerCamelCase)
    {
        \$nameConverter = new CamelCaseToSnakeCaseNameConverter(null, \$useLowerCamelCase);
        \$this->assertEquals(\$nameConverter->normalize(\$camelCased), \$underscored);
    }

    /**
     * @dataProvider attributeProvider
     */
    public function testDenormalize(\$underscored, \$camelCased, \$useLowerCamelCase)
    {
        \$nameConverter = new CamelCaseToSnakeCaseNameConverter(null, \$useLowerCamelCase);
        \$this->assertEquals(\$nameConverter->denormalize(\$underscored), \$camelCased);
    }

    public function attributeProvider()
    {
        return [
            ['coop_tilleuls', 'coopTilleuls', true],
            ['_kevin_dunglas', '_kevinDunglas', true],
            ['this_is_a_test', 'thisIsATest', true],
            ['coop_tilleuls', 'CoopTilleuls', false],
            ['_kevin_dunglas', '_kevinDunglas', false],
            ['this_is_a_test', 'ThisIsATest', false],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/NameConverter/CamelCaseToSnakeCaseNameConverterTest.php";
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

namespace Symfony\\Component\\Serializer\\Tests\\NameConverter;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CamelCaseToSnakeCaseNameConverterTest extends TestCase
{
    public function testInterface()
    {
        \$attributeMetadata = new CamelCaseToSnakeCaseNameConverter();
        \$this->assertInstanceOf('Symfony\\Component\\Serializer\\NameConverter\\NameConverterInterface', \$attributeMetadata);
    }

    /**
     * @dataProvider attributeProvider
     */
    public function testNormalize(\$underscored, \$camelCased, \$useLowerCamelCase)
    {
        \$nameConverter = new CamelCaseToSnakeCaseNameConverter(null, \$useLowerCamelCase);
        \$this->assertEquals(\$nameConverter->normalize(\$camelCased), \$underscored);
    }

    /**
     * @dataProvider attributeProvider
     */
    public function testDenormalize(\$underscored, \$camelCased, \$useLowerCamelCase)
    {
        \$nameConverter = new CamelCaseToSnakeCaseNameConverter(null, \$useLowerCamelCase);
        \$this->assertEquals(\$nameConverter->denormalize(\$underscored), \$camelCased);
    }

    public function attributeProvider()
    {
        return [
            ['coop_tilleuls', 'coopTilleuls', true],
            ['_kevin_dunglas', '_kevinDunglas', true],
            ['this_is_a_test', 'thisIsATest', true],
            ['coop_tilleuls', 'CoopTilleuls', false],
            ['_kevin_dunglas', '_kevinDunglas', false],
            ['this_is_a_test', 'ThisIsATest', false],
        ];
    }
}
", "vendor/symfony/serializer/Tests/NameConverter/CamelCaseToSnakeCaseNameConverterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/NameConverter/CamelCaseToSnakeCaseNameConverterTest.php");
    }
}
