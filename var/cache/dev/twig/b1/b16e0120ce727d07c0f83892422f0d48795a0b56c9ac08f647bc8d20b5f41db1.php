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

/* vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddAnnotationsCachedReaderPass.php */
class __TwigTemplate_e90318d1a9abb6c2f03acc374726bc62572b322281b0f709c6ae62d1f846492f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddAnnotationsCachedReaderPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddAnnotationsCachedReaderPass.php"));

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
 * @internal
 */
class AddAnnotationsCachedReaderPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        // \"annotations.cached_reader\" is wired late so that any passes using
        // \"annotation_reader\" at build time don't get any cache
        foreach (\$container->findTaggedServiceIds('annotations.cached_reader') as \$id => \$tags) {
            \$reader = \$container->getDefinition(\$id);
            \$properties = \$reader->getProperties();

            if (isset(\$properties['cacheProviderBackup'])) {
                \$provider = \$properties['cacheProviderBackup']->getValues()[0];
                unset(\$properties['cacheProviderBackup']);
                \$reader->setProperties(\$properties);
                \$container->set(\$id, null);
                \$container->setDefinition(\$id, \$reader->replaceArgument(1, \$provider));
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
        return "vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddAnnotationsCachedReaderPass.php";
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
 * @internal
 */
class AddAnnotationsCachedReaderPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        // \"annotations.cached_reader\" is wired late so that any passes using
        // \"annotation_reader\" at build time don't get any cache
        foreach (\$container->findTaggedServiceIds('annotations.cached_reader') as \$id => \$tags) {
            \$reader = \$container->getDefinition(\$id);
            \$properties = \$reader->getProperties();

            if (isset(\$properties['cacheProviderBackup'])) {
                \$provider = \$properties['cacheProviderBackup']->getValues()[0];
                unset(\$properties['cacheProviderBackup']);
                \$reader->setProperties(\$properties);
                \$container->set(\$id, null);
                \$container->setDefinition(\$id, \$reader->replaceArgument(1, \$provider));
            }
        }
    }
}
", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddAnnotationsCachedReaderPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddAnnotationsCachedReaderPass.php");
    }
}
