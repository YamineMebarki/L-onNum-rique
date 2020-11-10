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

/* vendor/symfony/dependency-injection/Tests/Compiler/ResolveHotPathPassTest.php */
class __TwigTemplate_c0a6dcb812d9a767a5ecad2205b407cef5d8bc16dd421300610753cf9170b97f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveHotPathPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveHotPathPassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveHotPathPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class ResolveHotPathPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo')
            ->addTag('container.hot_path')
            ->addArgument(new IteratorArgument([new Reference('lazy')]))
            ->addArgument(new Reference('service_container'))
            ->addArgument(new Definition('', [new Reference('bar')]))
            ->addArgument(new Reference('baz', ContainerBuilder::IGNORE_ON_UNINITIALIZED_REFERENCE))
            ->addArgument(new Reference('missing'))
        ;

        \$container->register('lazy');
        \$container->register('bar')
            ->addArgument(new Reference('buz'))
            ->addArgument(new Reference('deprec_ref_notag'));
        \$container->register('baz')
            ->addArgument(new Reference('lazy'))
            ->addArgument(new Reference('lazy'));
        \$container->register('buz');
        \$container->register('deprec_with_tag')->setDeprecated()->addTag('container.hot_path');
        \$container->register('deprec_ref_notag')->setDeprecated();

        (new ResolveHotPathPass())->process(\$container);

        \$this->assertFalse(\$container->getDefinition('lazy')->hasTag('container.hot_path'));
        \$this->assertTrue(\$container->getDefinition('bar')->hasTag('container.hot_path'));
        \$this->assertTrue(\$container->getDefinition('buz')->hasTag('container.hot_path'));
        \$this->assertFalse(\$container->getDefinition('baz')->hasTag('container.hot_path'));
        \$this->assertFalse(\$container->getDefinition('service_container')->hasTag('container.hot_path'));
        \$this->assertFalse(\$container->getDefinition('deprec_with_tag')->hasTag('container.hot_path'));
        \$this->assertFalse(\$container->getDefinition('deprec_ref_notag')->hasTag('container.hot_path'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/ResolveHotPathPassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolveHotPathPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

class ResolveHotPathPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo')
            ->addTag('container.hot_path')
            ->addArgument(new IteratorArgument([new Reference('lazy')]))
            ->addArgument(new Reference('service_container'))
            ->addArgument(new Definition('', [new Reference('bar')]))
            ->addArgument(new Reference('baz', ContainerBuilder::IGNORE_ON_UNINITIALIZED_REFERENCE))
            ->addArgument(new Reference('missing'))
        ;

        \$container->register('lazy');
        \$container->register('bar')
            ->addArgument(new Reference('buz'))
            ->addArgument(new Reference('deprec_ref_notag'));
        \$container->register('baz')
            ->addArgument(new Reference('lazy'))
            ->addArgument(new Reference('lazy'));
        \$container->register('buz');
        \$container->register('deprec_with_tag')->setDeprecated()->addTag('container.hot_path');
        \$container->register('deprec_ref_notag')->setDeprecated();

        (new ResolveHotPathPass())->process(\$container);

        \$this->assertFalse(\$container->getDefinition('lazy')->hasTag('container.hot_path'));
        \$this->assertTrue(\$container->getDefinition('bar')->hasTag('container.hot_path'));
        \$this->assertTrue(\$container->getDefinition('buz')->hasTag('container.hot_path'));
        \$this->assertFalse(\$container->getDefinition('baz')->hasTag('container.hot_path'));
        \$this->assertFalse(\$container->getDefinition('service_container')->hasTag('container.hot_path'));
        \$this->assertFalse(\$container->getDefinition('deprec_with_tag')->hasTag('container.hot_path'));
        \$this->assertFalse(\$container->getDefinition('deprec_ref_notag')->hasTag('container.hot_path'));
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/ResolveHotPathPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/ResolveHotPathPassTest.php");
    }
}
