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

/* vendor/symfony/validator/Tests/DependencyInjection/AddAutoMappingConfigurationPassTest.php */
class __TwigTemplate_91c8a043b3d20850e656fcb1451ada420a1f32d46f0bb7897a9f11f54d92db1f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/DependencyInjection/AddAutoMappingConfigurationPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/DependencyInjection/AddAutoMappingConfigurationPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\Validator\\DependencyInjection\\AddAutoMappingConfigurationPass;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\PropertyInfoLoaderEntity;
use Symfony\\Component\\Validator\\ValidatorBuilder;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class AddAutoMappingConfigurationPassTest extends TestCase
{
    public function testNoConfigParameter()
    {
        \$container = new ContainerBuilder();
        (new AddAutoMappingConfigurationPass())->process(\$container);
        \$this->assertCount(1, \$container->getDefinitions());
    }

    public function testNoValidatorBuilder()
    {
        \$container = new ContainerBuilder();
        (new AddAutoMappingConfigurationPass())->process(\$container);
        \$this->assertCount(1, \$container->getDefinitions());
    }

    /**
     * @dataProvider mappingProvider
     */
    public function testProcess(string \$namespace, array \$services, string \$expectedRegexp)
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('validator.auto_mapping', [
            'App\\\\' => ['services' => []],
            \$namespace => ['services' => \$services],
        ]);

        \$container->register('validator.builder', ValidatorBuilder::class);
        foreach (\$services as \$service) {
            \$container->register(\$service)->addTag('validator.auto_mapper');
        }

        (new AddAutoMappingConfigurationPass())->process(\$container);

        foreach (\$services as \$service) {
            \$this->assertSame(\$expectedRegexp, \$container->getDefinition(\$service)->getArgument('\$classValidatorRegexp'));
        }
        \$this->assertCount(\\count(\$services), \$container->getDefinition('validator.builder')->getMethodCalls());
    }

    public function mappingProvider(): array
    {
        return [
            ['Foo\\\\', ['foo', 'baz'], '{^App\\\\\\\\|^Foo\\\\\\\\}'],
            [PropertyInfoLoaderEntity::class, ['class'], '{^App\\\\\\\\|^Symfony\\\\\\\\Component\\\\\\\\Validator\\\\\\\\Tests\\\\\\\\Fixtures\\\\\\\\PropertyInfoLoaderEntity\$}'],
            ['Symfony\\Component\\Validator\\Tests\\Fixtures\\\\', ['trailing_antislash'], '{^App\\\\\\\\|^Symfony\\\\\\\\Component\\\\\\\\Validator\\\\\\\\Tests\\\\\\\\Fixtures\\\\\\\\}'],
            ['Symfony\\Component\\Validator\\Tests\\Fixtures\\\\*', ['trailing_star'], '{^App\\\\\\\\|^Symfony\\\\\\\\Component\\\\\\\\Validator\\\\\\\\Tests\\\\\\\\Fixtures\\\\\\\\[^\\\\\\\\]*?\$}'],
            ['Symfony\\Component\\Validator\\Tests\\Fixtures\\\\**', ['trailing_double_star'], '{^App\\\\\\\\|^Symfony\\\\\\\\Component\\\\\\\\Validator\\\\\\\\Tests\\\\\\\\Fixtures\\\\\\\\.*?\$}'],
        ];
    }

    public function testDoNotMapAllClassesWhenConfigIsEmpty()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('validator.auto_mapping', []);

        \$container->register('validator.builder', ValidatorBuilder::class);
        \$container->register('loader')->addTag('validator.auto_mapper');

        (new AddAutoMappingConfigurationPass())->process(\$container);

        \$this->assertNull(\$container->getDefinition('loader')->getArgument('\$classValidatorRegexp'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/DependencyInjection/AddAutoMappingConfigurationPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\Validator\\DependencyInjection\\AddAutoMappingConfigurationPass;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\PropertyInfoLoaderEntity;
use Symfony\\Component\\Validator\\ValidatorBuilder;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class AddAutoMappingConfigurationPassTest extends TestCase
{
    public function testNoConfigParameter()
    {
        \$container = new ContainerBuilder();
        (new AddAutoMappingConfigurationPass())->process(\$container);
        \$this->assertCount(1, \$container->getDefinitions());
    }

    public function testNoValidatorBuilder()
    {
        \$container = new ContainerBuilder();
        (new AddAutoMappingConfigurationPass())->process(\$container);
        \$this->assertCount(1, \$container->getDefinitions());
    }

    /**
     * @dataProvider mappingProvider
     */
    public function testProcess(string \$namespace, array \$services, string \$expectedRegexp)
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('validator.auto_mapping', [
            'App\\\\' => ['services' => []],
            \$namespace => ['services' => \$services],
        ]);

        \$container->register('validator.builder', ValidatorBuilder::class);
        foreach (\$services as \$service) {
            \$container->register(\$service)->addTag('validator.auto_mapper');
        }

        (new AddAutoMappingConfigurationPass())->process(\$container);

        foreach (\$services as \$service) {
            \$this->assertSame(\$expectedRegexp, \$container->getDefinition(\$service)->getArgument('\$classValidatorRegexp'));
        }
        \$this->assertCount(\\count(\$services), \$container->getDefinition('validator.builder')->getMethodCalls());
    }

    public function mappingProvider(): array
    {
        return [
            ['Foo\\\\', ['foo', 'baz'], '{^App\\\\\\\\|^Foo\\\\\\\\}'],
            [PropertyInfoLoaderEntity::class, ['class'], '{^App\\\\\\\\|^Symfony\\\\\\\\Component\\\\\\\\Validator\\\\\\\\Tests\\\\\\\\Fixtures\\\\\\\\PropertyInfoLoaderEntity\$}'],
            ['Symfony\\Component\\Validator\\Tests\\Fixtures\\\\', ['trailing_antislash'], '{^App\\\\\\\\|^Symfony\\\\\\\\Component\\\\\\\\Validator\\\\\\\\Tests\\\\\\\\Fixtures\\\\\\\\}'],
            ['Symfony\\Component\\Validator\\Tests\\Fixtures\\\\*', ['trailing_star'], '{^App\\\\\\\\|^Symfony\\\\\\\\Component\\\\\\\\Validator\\\\\\\\Tests\\\\\\\\Fixtures\\\\\\\\[^\\\\\\\\]*?\$}'],
            ['Symfony\\Component\\Validator\\Tests\\Fixtures\\\\**', ['trailing_double_star'], '{^App\\\\\\\\|^Symfony\\\\\\\\Component\\\\\\\\Validator\\\\\\\\Tests\\\\\\\\Fixtures\\\\\\\\.*?\$}'],
        ];
    }

    public function testDoNotMapAllClassesWhenConfigIsEmpty()
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('validator.auto_mapping', []);

        \$container->register('validator.builder', ValidatorBuilder::class);
        \$container->register('loader')->addTag('validator.auto_mapper');

        (new AddAutoMappingConfigurationPass())->process(\$container);

        \$this->assertNull(\$container->getDefinition('loader')->getArgument('\$classValidatorRegexp'));
    }
}
", "vendor/symfony/validator/Tests/DependencyInjection/AddAutoMappingConfigurationPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/DependencyInjection/AddAutoMappingConfigurationPassTest.php");
    }
}
