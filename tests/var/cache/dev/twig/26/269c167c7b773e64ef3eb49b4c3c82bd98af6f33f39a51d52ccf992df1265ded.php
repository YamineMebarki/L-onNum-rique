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

/* vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php */
class __TwigTemplate_8ea1380cfb359445030a3ece1a890408a1301e300f2539d6d5eea44f18f24425 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\CacheWarmer;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Generates the catalogues for translations.
 *
 * @author Xavier Leune <xavier.leune@gmail.com>
 */
class TranslationsCacheWarmer implements CacheWarmerInterface, ServiceSubscriberInterface
{
    private \$container;
    private \$translator;

    public function __construct(ContainerInterface \$container)
    {
        // As this cache warmer is optional, dependencies should be lazy-loaded, that's why a container should be injected.
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(\$cacheDir)
    {
        if (null === \$this->translator) {
            \$this->translator = \$this->container->get('translator');
        }

        if (\$this->translator instanceof WarmableInterface) {
            \$this->translator->warmUp(\$cacheDir);
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
            'translator' => TranslatorInterface::class,
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\CacheWarmer;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Generates the catalogues for translations.
 *
 * @author Xavier Leune <xavier.leune@gmail.com>
 */
class TranslationsCacheWarmer implements CacheWarmerInterface, ServiceSubscriberInterface
{
    private \$container;
    private \$translator;

    public function __construct(ContainerInterface \$container)
    {
        // As this cache warmer is optional, dependencies should be lazy-loaded, that's why a container should be injected.
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(\$cacheDir)
    {
        if (null === \$this->translator) {
            \$this->translator = \$this->container->get('translator');
        }

        if (\$this->translator instanceof WarmableInterface) {
            \$this->translator->warmUp(\$cacheDir);
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
            'translator' => TranslatorInterface::class,
        ];
    }
}
", "vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php");
    }
}
