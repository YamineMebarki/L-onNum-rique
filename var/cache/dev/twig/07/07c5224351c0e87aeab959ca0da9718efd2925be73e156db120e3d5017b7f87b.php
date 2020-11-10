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

/* vendor/symfony/validator/Tests/Constraints/TimezoneTest.php */
class __TwigTemplate_51b1178558ccb6bc6affcdc5324ecdddc05cdac42adc86d61ae232173ebf44eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/TimezoneTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/TimezoneTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints\\Timezone;

/**
 * @author Javier Spagnoletti <phansys@gmail.com>
 */
class TimezoneTest extends TestCase
{
    public function testValidTimezoneConstraints()
    {
        new Timezone();
        new Timezone(['zone' => \\DateTimeZone::ALL]);
        new Timezone(\\DateTimeZone::ALL_WITH_BC);
        new Timezone([
            'zone' => \\DateTimeZone::PER_COUNTRY,
            'countryCode' => 'AR',
        ]);

        \$this->addToAssertionCount(1);
    }

    public function testExceptionForGroupedTimezonesByCountryWithWrongZone()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Timezone([
            'zone' => \\DateTimeZone::ALL,
            'countryCode' => 'AR',
        ]);
    }

    public function testExceptionForGroupedTimezonesByCountryWithoutZone()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Timezone(['countryCode' => 'AR']);
    }

    /**
     * @dataProvider provideInvalidZones
     */
    public function testExceptionForInvalidGroupedTimezones(int \$zone)
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Timezone(['zone' => \$zone]);
    }

    public function provideInvalidZones(): iterable
    {
        yield [-1];
        yield [0];
        yield [\\DateTimeZone::ALL_WITH_BC + 1];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/TimezoneTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints\\Timezone;

/**
 * @author Javier Spagnoletti <phansys@gmail.com>
 */
class TimezoneTest extends TestCase
{
    public function testValidTimezoneConstraints()
    {
        new Timezone();
        new Timezone(['zone' => \\DateTimeZone::ALL]);
        new Timezone(\\DateTimeZone::ALL_WITH_BC);
        new Timezone([
            'zone' => \\DateTimeZone::PER_COUNTRY,
            'countryCode' => 'AR',
        ]);

        \$this->addToAssertionCount(1);
    }

    public function testExceptionForGroupedTimezonesByCountryWithWrongZone()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Timezone([
            'zone' => \\DateTimeZone::ALL,
            'countryCode' => 'AR',
        ]);
    }

    public function testExceptionForGroupedTimezonesByCountryWithoutZone()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Timezone(['countryCode' => 'AR']);
    }

    /**
     * @dataProvider provideInvalidZones
     */
    public function testExceptionForInvalidGroupedTimezones(int \$zone)
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Timezone(['zone' => \$zone]);
    }

    public function provideInvalidZones(): iterable
    {
        yield [-1];
        yield [0];
        yield [\\DateTimeZone::ALL_WITH_BC + 1];
    }
}
", "vendor/symfony/validator/Tests/Constraints/TimezoneTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/TimezoneTest.php");
    }
}
