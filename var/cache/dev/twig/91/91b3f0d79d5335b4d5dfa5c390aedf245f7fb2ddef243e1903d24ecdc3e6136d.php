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

/* vendor/symfony/framework-bundle/DependencyInjection/Compiler/DataCollectorTranslatorPass.php */
class __TwigTemplate_6292057fd7c11189ec1f246545ae7775cda5c770f2a231fdc44078a3c4ae3cdc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/DataCollectorTranslatorPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/DataCollectorTranslatorPass.php"));

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

/**
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 */
class DataCollectorTranslatorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->has('translator')) {
            return;
        }

        \$translatorClass = \$container->getParameterBag()->resolveValue(\$container->findDefinition('translator')->getClass());

        if (!is_subclass_of(\$translatorClass, 'Symfony\\Component\\Translation\\TranslatorBagInterface')) {
            \$container->removeDefinition('translator.data_collector');
            \$container->removeDefinition('data_collector.translation');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/DependencyInjection/Compiler/DataCollectorTranslatorPass.php";
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

/**
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 */
class DataCollectorTranslatorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->has('translator')) {
            return;
        }

        \$translatorClass = \$container->getParameterBag()->resolveValue(\$container->findDefinition('translator')->getClass());

        if (!is_subclass_of(\$translatorClass, 'Symfony\\Component\\Translation\\TranslatorBagInterface')) {
            \$container->removeDefinition('translator.data_collector');
            \$container->removeDefinition('data_collector.translation');
        }
    }
}
", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/DataCollectorTranslatorPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/DependencyInjection/Compiler/DataCollectorTranslatorPass.php");
    }
}
