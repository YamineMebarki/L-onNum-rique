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

/* vendor/symfony/twig-bundle/Tests/Functional/EmptyAppTest.php */
class __TwigTemplate_b5136dbe5c570abc67a1a25f5de0d7105005d43b4d35605dce483f8f1f08b7eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/Functional/EmptyAppTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/Functional/EmptyAppTest.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\Functional;

use Symfony\\Bundle\\TwigBundle\\Tests\\TestCase;
use Symfony\\Bundle\\TwigBundle\\TwigBundle;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\HttpKernel\\Kernel;

class EmptyAppTest extends TestCase
{
    public function testBootEmptyApp()
    {
        \$kernel = new EmptyAppKernel('test', true);
        \$kernel->boot();

        \$this->assertTrue(\$kernel->getContainer()->hasParameter('twig.default_path'));
        \$this->assertNotEmpty(\$kernel->getContainer()->getParameter('twig.default_path'));
    }
}

class EmptyAppKernel extends Kernel
{
    public function registerBundles()
    {
        return [new TwigBundle()];
    }

    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(function (\$container) {
            \$container
                ->loadFromExtension('twig', [ // to be removed in 5.0 relying on default
                    'strict_variables' => false,
                ])
            ;
        });
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir().'/'.Kernel::VERSION.'/EmptyAppKernel/cache/'.\$this->environment;
    }

    public function getLogDir()
    {
        return sys_get_temp_dir().'/'.Kernel::VERSION.'/EmptyAppKernel/log';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/Functional/EmptyAppTest.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Tests\\Functional;

use Symfony\\Bundle\\TwigBundle\\Tests\\TestCase;
use Symfony\\Bundle\\TwigBundle\\TwigBundle;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\HttpKernel\\Kernel;

class EmptyAppTest extends TestCase
{
    public function testBootEmptyApp()
    {
        \$kernel = new EmptyAppKernel('test', true);
        \$kernel->boot();

        \$this->assertTrue(\$kernel->getContainer()->hasParameter('twig.default_path'));
        \$this->assertNotEmpty(\$kernel->getContainer()->getParameter('twig.default_path'));
    }
}

class EmptyAppKernel extends Kernel
{
    public function registerBundles()
    {
        return [new TwigBundle()];
    }

    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(function (\$container) {
            \$container
                ->loadFromExtension('twig', [ // to be removed in 5.0 relying on default
                    'strict_variables' => false,
                ])
            ;
        });
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir().'/'.Kernel::VERSION.'/EmptyAppKernel/cache/'.\$this->environment;
    }

    public function getLogDir()
    {
        return sys_get_temp_dir().'/'.Kernel::VERSION.'/EmptyAppKernel/log';
    }
}
", "vendor/symfony/twig-bundle/Tests/Functional/EmptyAppTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/Functional/EmptyAppTest.php");
    }
}
