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

/* vendor/symfony/http-kernel/Tests/DependencyInjection/MergeExtensionConfigurationPassTest.php */
class __TwigTemplate_5047ba45c69636a867a869185e11233c9ca1d4c8058dadf9217bfbae4154564d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/MergeExtensionConfigurationPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/MergeExtensionConfigurationPassTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass;

class MergeExtensionConfigurationPassTest extends TestCase
{
    public function testAutoloadMainExtension()
    {
        \$container = new ContainerBuilder();
        \$container->registerExtension(new LoadedExtension());
        \$container->registerExtension(new NotLoadedExtension());
        \$container->loadFromExtension('loaded', []);

        \$configPass = new MergeExtensionConfigurationPass(['loaded', 'not_loaded']);
        \$configPass->process(\$container);

        \$this->assertTrue(\$container->hasDefinition('loaded.foo'));
        \$this->assertTrue(\$container->hasDefinition('not_loaded.bar'));
    }
}

class LoadedExtension extends Extension
{
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$container->register('loaded.foo');
    }
}

class NotLoadedExtension extends Extension
{
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$container->register('not_loaded.bar');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DependencyInjection/MergeExtensionConfigurationPassTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass;

class MergeExtensionConfigurationPassTest extends TestCase
{
    public function testAutoloadMainExtension()
    {
        \$container = new ContainerBuilder();
        \$container->registerExtension(new LoadedExtension());
        \$container->registerExtension(new NotLoadedExtension());
        \$container->loadFromExtension('loaded', []);

        \$configPass = new MergeExtensionConfigurationPass(['loaded', 'not_loaded']);
        \$configPass->process(\$container);

        \$this->assertTrue(\$container->hasDefinition('loaded.foo'));
        \$this->assertTrue(\$container->hasDefinition('not_loaded.bar'));
    }
}

class LoadedExtension extends Extension
{
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$container->register('loaded.foo');
    }
}

class NotLoadedExtension extends Extension
{
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$container->register('not_loaded.bar');
    }
}
", "vendor/symfony/http-kernel/Tests/DependencyInjection/MergeExtensionConfigurationPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DependencyInjection/MergeExtensionConfigurationPassTest.php");
    }
}
