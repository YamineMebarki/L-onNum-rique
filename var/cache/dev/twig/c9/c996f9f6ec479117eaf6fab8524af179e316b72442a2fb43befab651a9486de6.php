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

/* vendor/symfony/framework-bundle/DependencyInjection/Compiler/LoggingTranslatorPass.php */
class __TwigTemplate_4c64c3289e70138b20e8c2e8a1fe99416ffbf6121d0ebd394e886cfe601a0c6d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/LoggingTranslatorPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/LoggingTranslatorPass.php"));

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
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\TranslatorBagInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class LoggingTranslatorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasAlias('logger') || !\$container->hasAlias('translator')) {
            return;
        }

        if (\$container->hasParameter('translator.logging') && \$container->getParameter('translator.logging')) {
            \$translatorAlias = \$container->getAlias('translator');
            \$definition = \$container->getDefinition((string) \$translatorAlias);
            \$class = \$container->getParameterBag()->resolveValue(\$definition->getClass());

            if (!\$r = \$container->getReflectionClass(\$class)) {
                throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$translatorAlias));
            }
            if (\$r->isSubclassOf(TranslatorInterface::class) && \$r->isSubclassOf(TranslatorBagInterface::class)) {
                \$container->getDefinition('translator.logging')->setDecoratedService('translator');
                \$warmer = \$container->getDefinition('translation.warmer');
                \$subscriberAttributes = \$warmer->getTag('container.service_subscriber');
                \$warmer->clearTag('container.service_subscriber');

                foreach (\$subscriberAttributes as \$k => \$v) {
                    if ((!isset(\$v['id']) || 'translator' !== \$v['id']) && (!isset(\$v['key']) || 'translator' !== \$v['key'])) {
                        \$warmer->addTag('container.service_subscriber', \$v);
                    }
                }
                \$warmer->addTag('container.service_subscriber', ['key' => 'translator', 'id' => 'translator.logging.inner']);
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/DependencyInjection/Compiler/LoggingTranslatorPass.php";
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
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\TranslatorBagInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class LoggingTranslatorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasAlias('logger') || !\$container->hasAlias('translator')) {
            return;
        }

        if (\$container->hasParameter('translator.logging') && \$container->getParameter('translator.logging')) {
            \$translatorAlias = \$container->getAlias('translator');
            \$definition = \$container->getDefinition((string) \$translatorAlias);
            \$class = \$container->getParameterBag()->resolveValue(\$definition->getClass());

            if (!\$r = \$container->getReflectionClass(\$class)) {
                throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$translatorAlias));
            }
            if (\$r->isSubclassOf(TranslatorInterface::class) && \$r->isSubclassOf(TranslatorBagInterface::class)) {
                \$container->getDefinition('translator.logging')->setDecoratedService('translator');
                \$warmer = \$container->getDefinition('translation.warmer');
                \$subscriberAttributes = \$warmer->getTag('container.service_subscriber');
                \$warmer->clearTag('container.service_subscriber');

                foreach (\$subscriberAttributes as \$k => \$v) {
                    if ((!isset(\$v['id']) || 'translator' !== \$v['id']) && (!isset(\$v['key']) || 'translator' !== \$v['key'])) {
                        \$warmer->addTag('container.service_subscriber', \$v);
                    }
                }
                \$warmer->addTag('container.service_subscriber', ['key' => 'translator', 'id' => 'translator.logging.inner']);
            }
        }
    }
}
", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/LoggingTranslatorPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/DependencyInjection/Compiler/LoggingTranslatorPass.php");
    }
}
