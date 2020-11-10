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

/* vendor/symfony/dependency-injection/Tests/Compiler/DefinitionErrorExceptionPassTest.php */
class __TwigTemplate_213ad02d69094aaa9bbe58d585bfecb7d691d17121355a0a4b8f50d3c2bd5974 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/DefinitionErrorExceptionPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/DefinitionErrorExceptionPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Compiler\\DefinitionErrorExceptionPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;

class DefinitionErrorExceptionPassTest extends TestCase
{
    public function testThrowsException()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Things went wrong!');
        \$container = new ContainerBuilder();
        \$def = new Definition();
        \$def->addError('Things went wrong!');
        \$def->addError('Now something else!');
        \$container->register('foo_service_id')
            ->setArguments([
                \$def,
            ]);

        \$pass = new DefinitionErrorExceptionPass();
        \$pass->process(\$container);
    }

    public function testNoExceptionThrown()
    {
        \$container = new ContainerBuilder();
        \$def = new Definition();
        \$container->register('foo_service_id')
            ->setArguments([
                \$def,
            ]);

        \$pass = new DefinitionErrorExceptionPass();
        \$pass->process(\$container);
        \$this->assertSame(\$def, \$container->getDefinition('foo_service_id')->getArgument(0));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/DefinitionErrorExceptionPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Compiler\\DefinitionErrorExceptionPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;

class DefinitionErrorExceptionPassTest extends TestCase
{
    public function testThrowsException()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('Things went wrong!');
        \$container = new ContainerBuilder();
        \$def = new Definition();
        \$def->addError('Things went wrong!');
        \$def->addError('Now something else!');
        \$container->register('foo_service_id')
            ->setArguments([
                \$def,
            ]);

        \$pass = new DefinitionErrorExceptionPass();
        \$pass->process(\$container);
    }

    public function testNoExceptionThrown()
    {
        \$container = new ContainerBuilder();
        \$def = new Definition();
        \$container->register('foo_service_id')
            ->setArguments([
                \$def,
            ]);

        \$pass = new DefinitionErrorExceptionPass();
        \$pass->process(\$container);
        \$this->assertSame(\$def, \$container->getDefinition('foo_service_id')->getArgument(0));
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/DefinitionErrorExceptionPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/DefinitionErrorExceptionPassTest.php");
    }
}
