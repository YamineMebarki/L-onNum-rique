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

/* vendor/symfony/validator/Tests/DependencyInjection/AddConstraintValidatorsPassTest.php */
class __TwigTemplate_3edf986620c10add14ad9f8f5986e5bf1e1824723cfe3df4147b7c79cdafb25b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/DependencyInjection/AddConstraintValidatorsPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/DependencyInjection/AddConstraintValidatorsPassTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\Validator\\DependencyInjection\\AddConstraintValidatorsPass;

class AddConstraintValidatorsPassTest extends TestCase
{
    public function testThatConstraintValidatorServicesAreProcessed()
    {
        \$container = new ContainerBuilder();
        \$validatorFactory = \$container->register('validator.validator_factory')
            ->addArgument([]);

        \$container->register('my_constraint_validator_service1', Validator1::class)
            ->addTag('validator.constraint_validator', ['alias' => 'my_constraint_validator_alias1']);
        \$container->register('my_constraint_validator_service2', Validator2::class)
            ->addTag('validator.constraint_validator');

        \$addConstraintValidatorsPass = new AddConstraintValidatorsPass();
        \$addConstraintValidatorsPass->process(\$container);

        \$expected = (new Definition(ServiceLocator::class, [[
            Validator1::class => new ServiceClosureArgument(new Reference('my_constraint_validator_service1')),
            'my_constraint_validator_alias1' => new ServiceClosureArgument(new Reference('my_constraint_validator_service1')),
            Validator2::class => new ServiceClosureArgument(new Reference('my_constraint_validator_service2')),
        ]]))->addTag('container.service_locator')->setPublic(false);
        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$validatorFactory->getArgument(0)));
    }

    public function testAbstractConstraintValidator()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The service \"my_abstract_constraint_validator\" tagged \"validator.constraint_validator\" must not be abstract.');
        \$container = new ContainerBuilder();
        \$container->register('validator.validator_factory')
            ->addArgument([]);

        \$container->register('my_abstract_constraint_validator')
            ->setAbstract(true)
            ->addTag('validator.constraint_validator');

        \$addConstraintValidatorsPass = new AddConstraintValidatorsPass();
        \$addConstraintValidatorsPass->process(\$container);
    }

    public function testThatCompilerPassIsIgnoredIfThereIsNoConstraintValidatorFactoryDefinition()
    {
        \$container = new ContainerBuilder();

        \$definitionsBefore = \\count(\$container->getDefinitions());
        \$aliasesBefore = \\count(\$container->getAliases());

        \$addConstraintValidatorsPass = new AddConstraintValidatorsPass();
        \$addConstraintValidatorsPass->process(\$container);

        // the container is untouched (i.e. no new definitions or aliases)
        \$this->assertCount(\$definitionsBefore, \$container->getDefinitions());
        \$this->assertCount(\$aliasesBefore, \$container->getAliases());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/DependencyInjection/AddConstraintValidatorsPassTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\Validator\\DependencyInjection\\AddConstraintValidatorsPass;

class AddConstraintValidatorsPassTest extends TestCase
{
    public function testThatConstraintValidatorServicesAreProcessed()
    {
        \$container = new ContainerBuilder();
        \$validatorFactory = \$container->register('validator.validator_factory')
            ->addArgument([]);

        \$container->register('my_constraint_validator_service1', Validator1::class)
            ->addTag('validator.constraint_validator', ['alias' => 'my_constraint_validator_alias1']);
        \$container->register('my_constraint_validator_service2', Validator2::class)
            ->addTag('validator.constraint_validator');

        \$addConstraintValidatorsPass = new AddConstraintValidatorsPass();
        \$addConstraintValidatorsPass->process(\$container);

        \$expected = (new Definition(ServiceLocator::class, [[
            Validator1::class => new ServiceClosureArgument(new Reference('my_constraint_validator_service1')),
            'my_constraint_validator_alias1' => new ServiceClosureArgument(new Reference('my_constraint_validator_service1')),
            Validator2::class => new ServiceClosureArgument(new Reference('my_constraint_validator_service2')),
        ]]))->addTag('container.service_locator')->setPublic(false);
        \$this->assertEquals(\$expected, \$container->getDefinition((string) \$validatorFactory->getArgument(0)));
    }

    public function testAbstractConstraintValidator()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The service \"my_abstract_constraint_validator\" tagged \"validator.constraint_validator\" must not be abstract.');
        \$container = new ContainerBuilder();
        \$container->register('validator.validator_factory')
            ->addArgument([]);

        \$container->register('my_abstract_constraint_validator')
            ->setAbstract(true)
            ->addTag('validator.constraint_validator');

        \$addConstraintValidatorsPass = new AddConstraintValidatorsPass();
        \$addConstraintValidatorsPass->process(\$container);
    }

    public function testThatCompilerPassIsIgnoredIfThereIsNoConstraintValidatorFactoryDefinition()
    {
        \$container = new ContainerBuilder();

        \$definitionsBefore = \\count(\$container->getDefinitions());
        \$aliasesBefore = \\count(\$container->getAliases());

        \$addConstraintValidatorsPass = new AddConstraintValidatorsPass();
        \$addConstraintValidatorsPass->process(\$container);

        // the container is untouched (i.e. no new definitions or aliases)
        \$this->assertCount(\$definitionsBefore, \$container->getDefinitions());
        \$this->assertCount(\$aliasesBefore, \$container->getAliases());
    }
}
", "vendor/symfony/validator/Tests/DependencyInjection/AddConstraintValidatorsPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/DependencyInjection/AddConstraintValidatorsPassTest.php");
    }
}
