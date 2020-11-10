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

/* vendor/symfony/framework-bundle/DependencyInjection/Compiler/TestServiceContainerRealRefPass.php */
class __TwigTemplate_c16445eddf29097242ba3bd7cbb80d044211d12d7766f676fb710228c311f21b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/TestServiceContainerRealRefPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/TestServiceContainerRealRefPass.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TestServiceContainerRealRefPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('test.private_services_locator')) {
            return;
        }

        \$privateContainer = \$container->getDefinition('test.private_services_locator');
        \$definitions = \$container->getDefinitions();
        \$privateServices = \$privateContainer->getArgument(0);

        foreach (\$privateServices as \$id => \$argument) {
            if (isset(\$definitions[\$target = (string) \$argument->getValues()[0]])) {
                \$argument->setValues([new Reference(\$target)]);
            } else {
                unset(\$privateServices[\$id]);
            }
        }

        \$privateContainer->replaceArgument(0, \$privateServices);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/DependencyInjection/Compiler/TestServiceContainerRealRefPass.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TestServiceContainerRealRefPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('test.private_services_locator')) {
            return;
        }

        \$privateContainer = \$container->getDefinition('test.private_services_locator');
        \$definitions = \$container->getDefinitions();
        \$privateServices = \$privateContainer->getArgument(0);

        foreach (\$privateServices as \$id => \$argument) {
            if (isset(\$definitions[\$target = (string) \$argument->getValues()[0]])) {
                \$argument->setValues([new Reference(\$target)]);
            } else {
                unset(\$privateServices[\$id]);
            }
        }

        \$privateContainer->replaceArgument(0, \$privateServices);
    }
}
", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/TestServiceContainerRealRefPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/DependencyInjection/Compiler/TestServiceContainerRealRefPass.php");
    }
}
