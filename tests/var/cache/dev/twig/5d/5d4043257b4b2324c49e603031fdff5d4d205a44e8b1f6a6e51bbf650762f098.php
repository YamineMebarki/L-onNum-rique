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

/* vendor/symfony/maker-bundle/src/DependencyInjection/MakerExtension.php */
class __TwigTemplate_55934cd49e600455ca01c95c3e4db5dbcc09de07b4042591c73be24889da42e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/DependencyInjection/MakerExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/DependencyInjection/MakerExtension.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\DependencyInjection;

use Symfony\\Bundle\\MakerBundle\\DependencyInjection\\CompilerPass\\MakeCommandRegistrationPass;
use Symfony\\Bundle\\MakerBundle\\MakerInterface;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @see http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class MakerExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$loader = new Loader\\XmlFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));
        \$loader->load('services.xml');
        \$loader->load('makers.xml');

        \$configuration = \$this->getConfiguration(\$configs, \$container);
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        \$rootNamespace = trim(\$config['root_namespace'], '\\\\');

        \$autoloaderFinderDefinition = \$container->getDefinition('maker.autoloader_finder');
        \$autoloaderFinderDefinition->replaceArgument(0, \$rootNamespace);

        \$makeCommandDefinition = \$container->getDefinition('maker.generator');
        \$makeCommandDefinition->replaceArgument(1, \$rootNamespace);

        \$doctrineHelperDefinition = \$container->getDefinition('maker.doctrine_helper');
        \$doctrineHelperDefinition->replaceArgument(0, \$rootNamespace.'\\\\Entity');

        \$container->registerForAutoconfiguration(MakerInterface::class)
            ->addTag(MakeCommandRegistrationPass::MAKER_TAG);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/DependencyInjection/MakerExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\DependencyInjection;

use Symfony\\Bundle\\MakerBundle\\DependencyInjection\\CompilerPass\\MakeCommandRegistrationPass;
use Symfony\\Bundle\\MakerBundle\\MakerInterface;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @see http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class MakerExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$loader = new Loader\\XmlFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));
        \$loader->load('services.xml');
        \$loader->load('makers.xml');

        \$configuration = \$this->getConfiguration(\$configs, \$container);
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        \$rootNamespace = trim(\$config['root_namespace'], '\\\\');

        \$autoloaderFinderDefinition = \$container->getDefinition('maker.autoloader_finder');
        \$autoloaderFinderDefinition->replaceArgument(0, \$rootNamespace);

        \$makeCommandDefinition = \$container->getDefinition('maker.generator');
        \$makeCommandDefinition->replaceArgument(1, \$rootNamespace);

        \$doctrineHelperDefinition = \$container->getDefinition('maker.doctrine_helper');
        \$doctrineHelperDefinition->replaceArgument(0, \$rootNamespace.'\\\\Entity');

        \$container->registerForAutoconfiguration(MakerInterface::class)
            ->addTag(MakeCommandRegistrationPass::MAKER_TAG);
    }
}
", "vendor/symfony/maker-bundle/src/DependencyInjection/MakerExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/DependencyInjection/MakerExtension.php");
    }
}
