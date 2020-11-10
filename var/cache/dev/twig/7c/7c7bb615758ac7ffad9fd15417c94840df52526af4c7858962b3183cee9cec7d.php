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

/* vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/DependencyInjection/TestExtension.php */
class __TwigTemplate_fd964d285f0988df53b17e620c1cf3b0984b24cdc800ba75e658abb1f82690bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/DependencyInjection/TestExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/DependencyInjection/TestExtension.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;
use Symfony\\Component\\DependencyInjection\\Extension\\PrependExtensionInterface;

class TestExtension extends Extension implements PrependExtensionInterface
{
    private \$customConfig;

    /**
     * {@inheritdoc}
     */
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$configuration = \$this->getConfiguration(\$configs, \$container);
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        \$container->setAlias('test.annotation_reader', new Alias('annotation_reader', true));
    }

    /**
     * {@inheritdoc}
     */
    public function prepend(ContainerBuilder \$container)
    {
        \$container->prependExtensionConfig('test', ['custom' => 'foo']);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration(array \$config, ContainerBuilder \$container)
    {
        return new Configuration(\$this->customConfig);
    }

    public function setCustomConfig(\$customConfig)
    {
        \$this->customConfig = \$customConfig;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/DependencyInjection/TestExtension.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;
use Symfony\\Component\\DependencyInjection\\Extension\\PrependExtensionInterface;

class TestExtension extends Extension implements PrependExtensionInterface
{
    private \$customConfig;

    /**
     * {@inheritdoc}
     */
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$configuration = \$this->getConfiguration(\$configs, \$container);
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        \$container->setAlias('test.annotation_reader', new Alias('annotation_reader', true));
    }

    /**
     * {@inheritdoc}
     */
    public function prepend(ContainerBuilder \$container)
    {
        \$container->prependExtensionConfig('test', ['custom' => 'foo']);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration(array \$config, ContainerBuilder \$container)
    {
        return new Configuration(\$this->customConfig);
    }

    public function setCustomConfig(\$customConfig)
    {
        \$this->customConfig = \$customConfig;
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/DependencyInjection/TestExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/DependencyInjection/TestExtension.php");
    }
}
