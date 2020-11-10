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

/* vendor/symfony/validator/Tests/ContainerConstraintValidatorFactoryTest.php */
class __TwigTemplate_70828ef9254c34e4a6197ee1122740e4da1298a87b5751f090ea923aef3b3454 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/ContainerConstraintValidatorFactoryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/ContainerConstraintValidatorFactoryTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\Blank as BlankConstraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\ContainerConstraintValidatorFactory;

class ContainerConstraintValidatorFactoryTest extends TestCase
{
    public function testGetInstanceCreatesValidator()
    {
        \$factory = new ContainerConstraintValidatorFactory(new Container());
        \$this->assertInstanceOf(DummyConstraintValidator::class, \$factory->getInstance(new DummyConstraint()));
    }

    public function testGetInstanceReturnsExistingValidator()
    {
        \$factory = new ContainerConstraintValidatorFactory(new Container());
        \$v1 = \$factory->getInstance(new BlankConstraint());
        \$v2 = \$factory->getInstance(new BlankConstraint());
        \$this->assertSame(\$v1, \$v2);
    }

    public function testGetInstanceReturnsService()
    {
        \$validator = new DummyConstraintValidator();
        \$container = new Container();
        \$container->set(DummyConstraintValidator::class, \$validator);

        \$factory = new ContainerConstraintValidatorFactory(\$container);

        \$this->assertSame(\$validator, \$factory->getInstance(new DummyConstraint()));
    }

    public function testGetInstanceInvalidValidatorClass()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ValidatorException');
        \$constraint = \$this->getMockBuilder(Constraint::class)->getMock();
        \$constraint
            ->expects(\$this->once())
            ->method('validatedBy')
            ->willReturn('Fully\\\\Qualified\\\\ConstraintValidator\\\\Class\\\\Name');

        \$factory = new ContainerConstraintValidatorFactory(new Container());
        \$factory->getInstance(\$constraint);
    }
}

class DummyConstraint extends Constraint
{
    public function validatedBy()
    {
        return DummyConstraintValidator::class;
    }
}

class DummyConstraintValidator extends ConstraintValidator
{
    public function validate(\$value, Constraint \$constraint)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/ContainerConstraintValidatorFactoryTest.php";
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
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\Blank as BlankConstraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\ContainerConstraintValidatorFactory;

class ContainerConstraintValidatorFactoryTest extends TestCase
{
    public function testGetInstanceCreatesValidator()
    {
        \$factory = new ContainerConstraintValidatorFactory(new Container());
        \$this->assertInstanceOf(DummyConstraintValidator::class, \$factory->getInstance(new DummyConstraint()));
    }

    public function testGetInstanceReturnsExistingValidator()
    {
        \$factory = new ContainerConstraintValidatorFactory(new Container());
        \$v1 = \$factory->getInstance(new BlankConstraint());
        \$v2 = \$factory->getInstance(new BlankConstraint());
        \$this->assertSame(\$v1, \$v2);
    }

    public function testGetInstanceReturnsService()
    {
        \$validator = new DummyConstraintValidator();
        \$container = new Container();
        \$container->set(DummyConstraintValidator::class, \$validator);

        \$factory = new ContainerConstraintValidatorFactory(\$container);

        \$this->assertSame(\$validator, \$factory->getInstance(new DummyConstraint()));
    }

    public function testGetInstanceInvalidValidatorClass()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ValidatorException');
        \$constraint = \$this->getMockBuilder(Constraint::class)->getMock();
        \$constraint
            ->expects(\$this->once())
            ->method('validatedBy')
            ->willReturn('Fully\\\\Qualified\\\\ConstraintValidator\\\\Class\\\\Name');

        \$factory = new ContainerConstraintValidatorFactory(new Container());
        \$factory->getInstance(\$constraint);
    }
}

class DummyConstraint extends Constraint
{
    public function validatedBy()
    {
        return DummyConstraintValidator::class;
    }
}

class DummyConstraintValidator extends ConstraintValidator
{
    public function validate(\$value, Constraint \$constraint)
    {
    }
}
", "vendor/symfony/validator/Tests/ContainerConstraintValidatorFactoryTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/ContainerConstraintValidatorFactoryTest.php");
    }
}
