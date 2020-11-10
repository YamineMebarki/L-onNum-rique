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

/* vendor/symfony/translation/DependencyInjection/TranslationExtractorPass.php */
class __TwigTemplate_809ab6c925909792a6b83cff9381aad72e3f57424e6c0fd9a789da77e1d93de3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/DependencyInjection/TranslationExtractorPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/DependencyInjection/TranslationExtractorPass.php"));

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

namespace Symfony\\Component\\Translation\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Adds tagged translation.extractor services to translation extractor.
 */
class TranslationExtractorPass implements CompilerPassInterface
{
    private \$extractorServiceId;
    private \$extractorTag;

    public function __construct(string \$extractorServiceId = 'translation.extractor', string \$extractorTag = 'translation.extractor')
    {
        \$this->extractorServiceId = \$extractorServiceId;
        \$this->extractorTag = \$extractorTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->extractorServiceId)) {
            return;
        }

        \$definition = \$container->getDefinition(\$this->extractorServiceId);

        foreach (\$container->findTaggedServiceIds(\$this->extractorTag, true) as \$id => \$attributes) {
            if (!isset(\$attributes[0]['alias'])) {
                throw new RuntimeException(sprintf('The alias for the tag \"translation.extractor\" of service \"%s\" must be set.', \$id));
            }

            \$definition->addMethodCall('addExtractor', [\$attributes[0]['alias'], new Reference(\$id)]);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/DependencyInjection/TranslationExtractorPass.php";
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

namespace Symfony\\Component\\Translation\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Adds tagged translation.extractor services to translation extractor.
 */
class TranslationExtractorPass implements CompilerPassInterface
{
    private \$extractorServiceId;
    private \$extractorTag;

    public function __construct(string \$extractorServiceId = 'translation.extractor', string \$extractorTag = 'translation.extractor')
    {
        \$this->extractorServiceId = \$extractorServiceId;
        \$this->extractorTag = \$extractorTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->extractorServiceId)) {
            return;
        }

        \$definition = \$container->getDefinition(\$this->extractorServiceId);

        foreach (\$container->findTaggedServiceIds(\$this->extractorTag, true) as \$id => \$attributes) {
            if (!isset(\$attributes[0]['alias'])) {
                throw new RuntimeException(sprintf('The alias for the tag \"translation.extractor\" of service \"%s\" must be set.', \$id));
            }

            \$definition->addMethodCall('addExtractor', [\$attributes[0]['alias'], new Reference(\$id)]);
        }
    }
}
", "vendor/symfony/translation/DependencyInjection/TranslationExtractorPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/DependencyInjection/TranslationExtractorPass.php");
    }
}
