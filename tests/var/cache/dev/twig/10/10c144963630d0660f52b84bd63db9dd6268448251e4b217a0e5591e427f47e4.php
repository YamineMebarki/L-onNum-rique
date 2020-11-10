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

/* vendor/symfony/http-kernel/DependencyInjection/RegisterLocaleAwareServicesPass.php */
class __TwigTemplate_b29dcfbe1d8d0c3fcccdf165e79e549e2ef3b6708a4c92aa7b2047ab4207ddbb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DependencyInjection/RegisterLocaleAwareServicesPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DependencyInjection/RegisterLocaleAwareServicesPass.php"));

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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Register all services that have the \"kernel.locale_aware\" tag into the listener.
 *
 * @author Pierre Bobiet <pierrebobiet@gmail.com>
 */
class RegisterLocaleAwareServicesPass implements CompilerPassInterface
{
    private \$listenerServiceId;
    private \$localeAwareTag;

    public function __construct(string \$listenerServiceId = 'locale_aware_listener', string \$localeAwareTag = 'kernel.locale_aware')
    {
        \$this->listenerServiceId = \$listenerServiceId;
        \$this->localeAwareTag = \$localeAwareTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->listenerServiceId)) {
            return;
        }

        \$services = [];

        foreach (\$container->findTaggedServiceIds(\$this->localeAwareTag) as \$id => \$tags) {
            \$services[] = new Reference(\$id);
        }

        if (!\$services) {
            \$container->removeDefinition(\$this->listenerServiceId);

            return;
        }

        \$container
            ->getDefinition(\$this->listenerServiceId)
            ->setArgument(0, new IteratorArgument(\$services))
        ;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/DependencyInjection/RegisterLocaleAwareServicesPass.php";
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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Register all services that have the \"kernel.locale_aware\" tag into the listener.
 *
 * @author Pierre Bobiet <pierrebobiet@gmail.com>
 */
class RegisterLocaleAwareServicesPass implements CompilerPassInterface
{
    private \$listenerServiceId;
    private \$localeAwareTag;

    public function __construct(string \$listenerServiceId = 'locale_aware_listener', string \$localeAwareTag = 'kernel.locale_aware')
    {
        \$this->listenerServiceId = \$listenerServiceId;
        \$this->localeAwareTag = \$localeAwareTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->listenerServiceId)) {
            return;
        }

        \$services = [];

        foreach (\$container->findTaggedServiceIds(\$this->localeAwareTag) as \$id => \$tags) {
            \$services[] = new Reference(\$id);
        }

        if (!\$services) {
            \$container->removeDefinition(\$this->listenerServiceId);

            return;
        }

        \$container
            ->getDefinition(\$this->listenerServiceId)
            ->setArgument(0, new IteratorArgument(\$services))
        ;
    }
}
", "vendor/symfony/http-kernel/DependencyInjection/RegisterLocaleAwareServicesPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/DependencyInjection/RegisterLocaleAwareServicesPass.php");
    }
}
