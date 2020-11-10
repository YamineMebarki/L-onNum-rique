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

/* vendor/symfony/twig-bundle/TwigBundle.php */
class __TwigTemplate_1dbb95ade0d48cd36d8466a0c5fdda4b5e25762af4e77e051684a9005a83c86c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/TwigBundle.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/TwigBundle.php"));

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

namespace Symfony\\Bundle\\TwigBundle;

use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\ExceptionListenerPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\ExtensionPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\RuntimeLoaderPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\TwigEnvironmentPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\TwigLoaderPass;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * Bundle.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TwigBundle extends Bundle
{
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$container->addCompilerPass(new ExtensionPass());
        \$container->addCompilerPass(new TwigEnvironmentPass());
        \$container->addCompilerPass(new TwigLoaderPass());
        \$container->addCompilerPass(new ExceptionListenerPass());
        \$container->addCompilerPass(new RuntimeLoaderPass(), PassConfig::TYPE_BEFORE_REMOVING);
    }

    public function registerCommands(Application \$application)
    {
        // noop
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/TwigBundle.php";
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

namespace Symfony\\Bundle\\TwigBundle;

use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\ExceptionListenerPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\ExtensionPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\RuntimeLoaderPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\TwigEnvironmentPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\TwigLoaderPass;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * Bundle.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TwigBundle extends Bundle
{
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$container->addCompilerPass(new ExtensionPass());
        \$container->addCompilerPass(new TwigEnvironmentPass());
        \$container->addCompilerPass(new TwigLoaderPass());
        \$container->addCompilerPass(new ExceptionListenerPass());
        \$container->addCompilerPass(new RuntimeLoaderPass(), PassConfig::TYPE_BEFORE_REMOVING);
    }

    public function registerCommands(Application \$application)
    {
        // noop
    }
}
", "vendor/symfony/twig-bundle/TwigBundle.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/TwigBundle.php");
    }
}
