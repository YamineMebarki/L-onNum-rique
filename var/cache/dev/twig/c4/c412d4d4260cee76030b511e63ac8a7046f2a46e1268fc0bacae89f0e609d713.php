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

/* vendor/symfony/framework-bundle/Tests/Command/CacheClearCommand/Fixture/TestAppKernel.php */
class __TwigTemplate_f05dacfaa81587d0ecc4393bb6972123efef407c0089dd338bec20e1b274f322 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/CacheClearCommand/Fixture/TestAppKernel.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/CacheClearCommand/Fixture/TestAppKernel.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Command\\CacheClearCommand\\Fixture;

use Psr\\Log\\NullLogger;
use Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Kernel;

class TestAppKernel extends Kernel
{
    public function registerBundles()
    {
        return [
            new FrameworkBundle(),
        ];
    }

    public function getProjectDir()
    {
        return __DIR__.'/test';
    }

    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(__DIR__.\\DIRECTORY_SEPARATOR.'config.yml');
    }

    public function setAnnotatedClassCache(array \$annotatedClasses)
    {
        \$annotatedClasses = array_diff(\$annotatedClasses, ['Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController', 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController']);

        parent::setAnnotatedClassCache(\$annotatedClasses);
    }

    protected function build(ContainerBuilder \$container)
    {
        \$container->register('logger', NullLogger::class);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Command/CacheClearCommand/Fixture/TestAppKernel.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Command\\CacheClearCommand\\Fixture;

use Psr\\Log\\NullLogger;
use Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Kernel;

class TestAppKernel extends Kernel
{
    public function registerBundles()
    {
        return [
            new FrameworkBundle(),
        ];
    }

    public function getProjectDir()
    {
        return __DIR__.'/test';
    }

    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(__DIR__.\\DIRECTORY_SEPARATOR.'config.yml');
    }

    public function setAnnotatedClassCache(array \$annotatedClasses)
    {
        \$annotatedClasses = array_diff(\$annotatedClasses, ['Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController', 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController']);

        parent::setAnnotatedClassCache(\$annotatedClasses);
    }

    protected function build(ContainerBuilder \$container)
    {
        \$container->register('logger', NullLogger::class);
    }
}
", "vendor/symfony/framework-bundle/Tests/Command/CacheClearCommand/Fixture/TestAppKernel.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Command/CacheClearCommand/Fixture/TestAppKernel.php");
    }
}
