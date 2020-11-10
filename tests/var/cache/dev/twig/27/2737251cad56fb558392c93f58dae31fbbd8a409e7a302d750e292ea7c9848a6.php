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

/* vendor/swiftmailer/swiftmailer/tests/SwiftMailerTestCase.php */
class __TwigTemplate_24372741b0e402b5422f2c001caffa3810329209dbdb2edd34d9377020108640 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/SwiftMailerTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/SwiftMailerTestCase.php"));

        // line 1
        echo "<?php

use Mockery\\Adapter\\Phpunit\\MockeryPHPUnitIntegration;

/**
 * A base test case with some custom expectations.
 *
 * @author Rouven Weßling
 */
class SwiftMailerTestCase extends \\PHPUnit\\Framework\\TestCase
{
    use MockeryPHPUnitIntegration;

    public static function regExp(\$pattern)
    {
        if (!is_string(\$pattern)) {
            throw PHPUnit_Util_InvalidArgumentHelper::factory(1, 'string');
        }

        return new \\PHPUnit\\Framework\\Constraint\\RegularExpression(\$pattern);
    }

    public function assertIdenticalBinary(\$expected, \$actual, \$message = '')
    {
        \$constraint = new IdenticalBinaryConstraint(\$expected);
        self::assertThat(\$actual, \$constraint, \$message);
    }

    protected function tearDown()
    {
        \\Mockery::close();
    }

    protected function getMockery(\$class)
    {
        return \\Mockery::mock(\$class);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/SwiftMailerTestCase.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Mockery\\Adapter\\Phpunit\\MockeryPHPUnitIntegration;

/**
 * A base test case with some custom expectations.
 *
 * @author Rouven Weßling
 */
class SwiftMailerTestCase extends \\PHPUnit\\Framework\\TestCase
{
    use MockeryPHPUnitIntegration;

    public static function regExp(\$pattern)
    {
        if (!is_string(\$pattern)) {
            throw PHPUnit_Util_InvalidArgumentHelper::factory(1, 'string');
        }

        return new \\PHPUnit\\Framework\\Constraint\\RegularExpression(\$pattern);
    }

    public function assertIdenticalBinary(\$expected, \$actual, \$message = '')
    {
        \$constraint = new IdenticalBinaryConstraint(\$expected);
        self::assertThat(\$actual, \$constraint, \$message);
    }

    protected function tearDown()
    {
        \\Mockery::close();
    }

    protected function getMockery(\$class)
    {
        return \\Mockery::mock(\$class);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/SwiftMailerTestCase.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/SwiftMailerTestCase.php");
    }
}
