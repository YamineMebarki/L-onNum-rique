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

/* vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php */
class __TwigTemplate_72a39598cd4cee2b4dddd2e9a5a8639fe053dff51db29f78fbb49a437c3813b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\CacheWarmer;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;
use Twig\\Environment;
use Twig\\Error\\Error;

/**
 * Generates the Twig cache for all templates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplateCacheWarmer implements CacheWarmerInterface, ServiceSubscriberInterface
{
    private \$container;
    private \$twig;
    private \$iterator;

    public function __construct(ContainerInterface \$container, \\Traversable \$iterator)
    {
        // As this cache warmer is optional, dependencies should be lazy-loaded, that's why a container should be injected.
        \$this->container = \$container;
        \$this->iterator = \$iterator;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(\$cacheDir)
    {
        if (null === \$this->twig) {
            \$this->twig = \$this->container->get('twig');
        }

        foreach (\$this->iterator as \$template) {
            try {
                \$this->twig->loadTemplate(\$template);
            } catch (Error \$e) {
                // problem during compilation, give up
                // might be a syntax error or a non-Twig template
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOptional()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedServices()
    {
        return [
            'twig' => Environment::class,
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php";
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

namespace Symfony\\Bundle\\TwigBundle\\CacheWarmer;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;
use Twig\\Environment;
use Twig\\Error\\Error;

/**
 * Generates the Twig cache for all templates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplateCacheWarmer implements CacheWarmerInterface, ServiceSubscriberInterface
{
    private \$container;
    private \$twig;
    private \$iterator;

    public function __construct(ContainerInterface \$container, \\Traversable \$iterator)
    {
        // As this cache warmer is optional, dependencies should be lazy-loaded, that's why a container should be injected.
        \$this->container = \$container;
        \$this->iterator = \$iterator;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(\$cacheDir)
    {
        if (null === \$this->twig) {
            \$this->twig = \$this->container->get('twig');
        }

        foreach (\$this->iterator as \$template) {
            try {
                \$this->twig->loadTemplate(\$template);
            } catch (Error \$e) {
                // problem during compilation, give up
                // might be a syntax error or a non-Twig template
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOptional()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedServices()
    {
        return [
            'twig' => Environment::class,
        ];
    }
}
", "vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php");
    }
}
