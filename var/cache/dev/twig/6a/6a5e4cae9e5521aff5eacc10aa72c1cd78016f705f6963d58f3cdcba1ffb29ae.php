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

/* vendor/symfony/dependency-injection/Tests/Compiler/RegisterEnvVarProcessorsPassTest.php */
class __TwigTemplate_524cbceace8c1dfe4f177f1bf41aeaa7759ec4c4d190674d6553141469e5ce2b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/RegisterEnvVarProcessorsPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/RegisterEnvVarProcessorsPassTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\RegisterEnvVarProcessorsPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\EnvVarProcessorInterface;

class RegisterEnvVarProcessorsPassTest extends TestCase
{
    public function testSimpleProcessor()
    {
        \$container = new ContainerBuilder();
        \$container->register('foo', SimpleProcessor::class)->addTag('container.env_var_processor');

        (new RegisterEnvVarProcessorsPass())->process(\$container);

        \$this->assertTrue(\$container->has('container.env_var_processors_locator'));
        \$this->assertInstanceOf(SimpleProcessor::class, \$container->get('container.env_var_processors_locator')->get('foo'));

        \$expected = [
            'foo' => ['string'],
            'base64' => ['string'],
            'bool' => ['bool'],
            'const' => ['bool', 'int', 'float', 'string', 'array'],
            'csv' => ['array'],
            'file' => ['string'],
            'float' => ['float'],
            'int' => ['int'],
            'json' => ['array'],
            'key' => ['bool', 'int', 'float', 'string', 'array'],
            'url' => ['array'],
            'query_string' => ['array'],
            'resolve' => ['string'],
            'default' => ['bool', 'int', 'float', 'string', 'array'],
            'string' => ['string'],
            'trim' => ['string'],
            'require' => ['bool', 'int', 'float', 'string', 'array'],
        ];

        \$this->assertSame(\$expected, \$container->getParameterBag()->getProvidedTypes());
    }

    public function testNoProcessor()
    {
        \$container = new ContainerBuilder();

        (new RegisterEnvVarProcessorsPass())->process(\$container);

        \$this->assertFalse(\$container->has('container.env_var_processors_locator'));
    }

    public function testBadProcessor()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid type \"foo\" returned by \"Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\BadProcessor::getProvidedTypes()\", expected one of \"array\", \"bool\", \"float\", \"int\", \"string\".');
        \$container = new ContainerBuilder();
        \$container->register('foo', BadProcessor::class)->addTag('container.env_var_processor');

        (new RegisterEnvVarProcessorsPass())->process(\$container);
    }
}

class SimpleProcessor implements EnvVarProcessorInterface
{
    public function getEnv(\$prefix, \$name, \\Closure \$getEnv)
    {
        return \$getEnv(\$name);
    }

    public static function getProvidedTypes()
    {
        return ['foo' => 'string'];
    }
}

class BadProcessor extends SimpleProcessor
{
    public static function getProvidedTypes()
    {
        return ['foo' => 'string|foo'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/RegisterEnvVarProcessorsPassTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\RegisterEnvVarProcessorsPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\EnvVarProcessorInterface;

class RegisterEnvVarProcessorsPassTest extends TestCase
{
    public function testSimpleProcessor()
    {
        \$container = new ContainerBuilder();
        \$container->register('foo', SimpleProcessor::class)->addTag('container.env_var_processor');

        (new RegisterEnvVarProcessorsPass())->process(\$container);

        \$this->assertTrue(\$container->has('container.env_var_processors_locator'));
        \$this->assertInstanceOf(SimpleProcessor::class, \$container->get('container.env_var_processors_locator')->get('foo'));

        \$expected = [
            'foo' => ['string'],
            'base64' => ['string'],
            'bool' => ['bool'],
            'const' => ['bool', 'int', 'float', 'string', 'array'],
            'csv' => ['array'],
            'file' => ['string'],
            'float' => ['float'],
            'int' => ['int'],
            'json' => ['array'],
            'key' => ['bool', 'int', 'float', 'string', 'array'],
            'url' => ['array'],
            'query_string' => ['array'],
            'resolve' => ['string'],
            'default' => ['bool', 'int', 'float', 'string', 'array'],
            'string' => ['string'],
            'trim' => ['string'],
            'require' => ['bool', 'int', 'float', 'string', 'array'],
        ];

        \$this->assertSame(\$expected, \$container->getParameterBag()->getProvidedTypes());
    }

    public function testNoProcessor()
    {
        \$container = new ContainerBuilder();

        (new RegisterEnvVarProcessorsPass())->process(\$container);

        \$this->assertFalse(\$container->has('container.env_var_processors_locator'));
    }

    public function testBadProcessor()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid type \"foo\" returned by \"Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\BadProcessor::getProvidedTypes()\", expected one of \"array\", \"bool\", \"float\", \"int\", \"string\".');
        \$container = new ContainerBuilder();
        \$container->register('foo', BadProcessor::class)->addTag('container.env_var_processor');

        (new RegisterEnvVarProcessorsPass())->process(\$container);
    }
}

class SimpleProcessor implements EnvVarProcessorInterface
{
    public function getEnv(\$prefix, \$name, \\Closure \$getEnv)
    {
        return \$getEnv(\$name);
    }

    public static function getProvidedTypes()
    {
        return ['foo' => 'string'];
    }
}

class BadProcessor extends SimpleProcessor
{
    public static function getProvidedTypes()
    {
        return ['foo' => 'string|foo'];
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/RegisterEnvVarProcessorsPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/RegisterEnvVarProcessorsPassTest.php");
    }
}
