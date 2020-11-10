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

/* vendor/symfony/dependency-injection/Tests/Compiler/CheckDefinitionValidityPassTest.php */
class __TwigTemplate_08ed06c5f41eddc3197fd6b847146f7af081e30c601df361fd288231b3d4214d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/CheckDefinitionValidityPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/CheckDefinitionValidityPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Compiler\\CheckDefinitionValidityPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class CheckDefinitionValidityPassTest extends TestCase
{
    public function testProcessDetectsSyntheticNonPublicDefinitions()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$container = new ContainerBuilder();
        \$container->register('a')->setSynthetic(true)->setPublic(false);

        \$this->process(\$container);
    }

    public function testProcessDetectsNonSyntheticNonAbstractDefinitionWithoutClass()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$container = new ContainerBuilder();
        \$container->register('a')->setSynthetic(false)->setAbstract(false);

        \$this->process(\$container);
    }

    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container->register('a', 'class');
        \$container->register('b', 'class')->setSynthetic(true)->setPublic(true);
        \$container->register('c', 'class')->setAbstract(true);
        \$container->register('d', 'class')->setSynthetic(true);

        \$this->process(\$container);

        \$this->addToAssertionCount(1);
    }

    public function testValidTags()
    {
        \$container = new ContainerBuilder();
        \$container->register('a', 'class')->addTag('foo', ['bar' => 'baz']);
        \$container->register('b', 'class')->addTag('foo', ['bar' => null]);
        \$container->register('c', 'class')->addTag('foo', ['bar' => 1]);
        \$container->register('d', 'class')->addTag('foo', ['bar' => 1.1]);

        \$this->process(\$container);

        \$this->addToAssertionCount(1);
    }

    public function testInvalidTags()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$container = new ContainerBuilder();
        \$container->register('a', 'class')->addTag('foo', ['bar' => ['baz' => 'baz']]);

        \$this->process(\$container);
    }

    public function testDynamicPublicServiceName()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\EnvParameterException');
        \$container = new ContainerBuilder();
        \$env = \$container->getParameterBag()->get('env(BAR)');
        \$container->register(\"foo.\$env\", 'class')->setPublic(true);

        \$this->process(\$container);
    }

    public function testDynamicPublicAliasName()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\EnvParameterException');
        \$container = new ContainerBuilder();
        \$env = \$container->getParameterBag()->get('env(BAR)');
        \$container->setAlias(\"foo.\$env\", 'class')->setPublic(true);

        \$this->process(\$container);
    }

    public function testDynamicPrivateName()
    {
        \$container = new ContainerBuilder();
        \$env = \$container->getParameterBag()->get('env(BAR)');
        \$container->register(\"foo.\$env\", 'class');
        \$container->setAlias(\"bar.\$env\", 'class');

        \$this->process(\$container);

        \$this->addToAssertionCount(1);
    }

    protected function process(ContainerBuilder \$container)
    {
        \$pass = new CheckDefinitionValidityPass();
        \$pass->process(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/CheckDefinitionValidityPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Compiler\\CheckDefinitionValidityPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class CheckDefinitionValidityPassTest extends TestCase
{
    public function testProcessDetectsSyntheticNonPublicDefinitions()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$container = new ContainerBuilder();
        \$container->register('a')->setSynthetic(true)->setPublic(false);

        \$this->process(\$container);
    }

    public function testProcessDetectsNonSyntheticNonAbstractDefinitionWithoutClass()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$container = new ContainerBuilder();
        \$container->register('a')->setSynthetic(false)->setAbstract(false);

        \$this->process(\$container);
    }

    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container->register('a', 'class');
        \$container->register('b', 'class')->setSynthetic(true)->setPublic(true);
        \$container->register('c', 'class')->setAbstract(true);
        \$container->register('d', 'class')->setSynthetic(true);

        \$this->process(\$container);

        \$this->addToAssertionCount(1);
    }

    public function testValidTags()
    {
        \$container = new ContainerBuilder();
        \$container->register('a', 'class')->addTag('foo', ['bar' => 'baz']);
        \$container->register('b', 'class')->addTag('foo', ['bar' => null]);
        \$container->register('c', 'class')->addTag('foo', ['bar' => 1]);
        \$container->register('d', 'class')->addTag('foo', ['bar' => 1.1]);

        \$this->process(\$container);

        \$this->addToAssertionCount(1);
    }

    public function testInvalidTags()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$container = new ContainerBuilder();
        \$container->register('a', 'class')->addTag('foo', ['bar' => ['baz' => 'baz']]);

        \$this->process(\$container);
    }

    public function testDynamicPublicServiceName()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\EnvParameterException');
        \$container = new ContainerBuilder();
        \$env = \$container->getParameterBag()->get('env(BAR)');
        \$container->register(\"foo.\$env\", 'class')->setPublic(true);

        \$this->process(\$container);
    }

    public function testDynamicPublicAliasName()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\EnvParameterException');
        \$container = new ContainerBuilder();
        \$env = \$container->getParameterBag()->get('env(BAR)');
        \$container->setAlias(\"foo.\$env\", 'class')->setPublic(true);

        \$this->process(\$container);
    }

    public function testDynamicPrivateName()
    {
        \$container = new ContainerBuilder();
        \$env = \$container->getParameterBag()->get('env(BAR)');
        \$container->register(\"foo.\$env\", 'class');
        \$container->setAlias(\"bar.\$env\", 'class');

        \$this->process(\$container);

        \$this->addToAssertionCount(1);
    }

    protected function process(ContainerBuilder \$container)
    {
        \$pass = new CheckDefinitionValidityPass();
        \$pass->process(\$container);
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/CheckDefinitionValidityPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/CheckDefinitionValidityPassTest.php");
    }
}
