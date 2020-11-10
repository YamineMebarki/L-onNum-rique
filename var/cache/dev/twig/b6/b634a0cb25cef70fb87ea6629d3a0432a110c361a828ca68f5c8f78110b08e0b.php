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

/* vendor/symfony/validator/Tests/Constraints/ValidValidatorTest.php */
class __TwigTemplate_e643e0bf70d093a77b84114c47b43321cd8486d12e5396a79db672d8c446913e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/ValidValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/ValidValidatorTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Constraints\\ValidValidator;
use Symfony\\Component\\Validator\\ValidatorBuilder;

class ValidValidatorTest extends TestCase
{
    public function testPropertyPathsArePassedToNestedContexts()
    {
        \$validatorBuilder = new ValidatorBuilder();
        \$validator = \$validatorBuilder->enableAnnotationMapping()->getValidator();

        \$violations = \$validator->validate(new Foo(), null, ['nested']);

        \$this->assertCount(1, \$violations);
        \$this->assertSame('fooBar.fooBarBaz.foo', \$violations->get(0)->getPropertyPath());
    }

    public function testNullValues()
    {
        \$validatorBuilder = new ValidatorBuilder();
        \$validator = \$validatorBuilder->enableAnnotationMapping()->getValidator();

        \$foo = new Foo();
        \$foo->fooBar = null;
        \$violations = \$validator->validate(\$foo, null, ['nested']);

        \$this->assertCount(0, \$violations);
    }

    protected function createValidator()
    {
        return new ValidValidator();
    }
}

class Foo
{
    /**
     * @Assert\\Valid(groups={\"nested\"})
     */
    public \$fooBar;

    public function __construct()
    {
        \$this->fooBar = new FooBar();
    }
}

class FooBar
{
    /**
     * @Assert\\Valid(groups={\"nested\"})
     */
    public \$fooBarBaz;

    public function __construct()
    {
        \$this->fooBarBaz = new FooBarBaz();
    }
}

class FooBarBaz
{
    /**
     * @Assert\\NotBlank(groups={\"nested\"})
     */
    public \$foo;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/ValidValidatorTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Constraints\\ValidValidator;
use Symfony\\Component\\Validator\\ValidatorBuilder;

class ValidValidatorTest extends TestCase
{
    public function testPropertyPathsArePassedToNestedContexts()
    {
        \$validatorBuilder = new ValidatorBuilder();
        \$validator = \$validatorBuilder->enableAnnotationMapping()->getValidator();

        \$violations = \$validator->validate(new Foo(), null, ['nested']);

        \$this->assertCount(1, \$violations);
        \$this->assertSame('fooBar.fooBarBaz.foo', \$violations->get(0)->getPropertyPath());
    }

    public function testNullValues()
    {
        \$validatorBuilder = new ValidatorBuilder();
        \$validator = \$validatorBuilder->enableAnnotationMapping()->getValidator();

        \$foo = new Foo();
        \$foo->fooBar = null;
        \$violations = \$validator->validate(\$foo, null, ['nested']);

        \$this->assertCount(0, \$violations);
    }

    protected function createValidator()
    {
        return new ValidValidator();
    }
}

class Foo
{
    /**
     * @Assert\\Valid(groups={\"nested\"})
     */
    public \$fooBar;

    public function __construct()
    {
        \$this->fooBar = new FooBar();
    }
}

class FooBar
{
    /**
     * @Assert\\Valid(groups={\"nested\"})
     */
    public \$fooBarBaz;

    public function __construct()
    {
        \$this->fooBarBaz = new FooBarBaz();
    }
}

class FooBarBaz
{
    /**
     * @Assert\\NotBlank(groups={\"nested\"})
     */
    public \$foo;
}
", "vendor/symfony/validator/Tests/Constraints/ValidValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/ValidValidatorTest.php");
    }
}
