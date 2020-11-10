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

/* vendor/symfony/framework-bundle/CacheWarmer/TemplatePathsCacheWarmer.php */
class __TwigTemplate_bcbed7a16ba47c33e1c200d63bcbd66b91ecc896f3f99f55b77dc2256fe04c04 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/TemplatePathsCacheWarmer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/TemplatePathsCacheWarmer.php"));

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

@trigger_error('The '.TemplatePathsCacheWarmer::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmer;

/**
 * Computes the association between template names and their paths on the disk.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplatePathsCacheWarmer extends CacheWarmer
{
    protected \$finder;
    protected \$locator;

    public function __construct(TemplateFinderInterface \$finder, TemplateLocator \$locator)
    {
        \$this->finder = \$finder;
        \$this->locator = \$locator;
    }

    /**
     * Warms up the cache.
     *
     * @param string \$cacheDir The cache directory
     */
    public function warmUp(\$cacheDir)
    {
        \$filesystem = new Filesystem();
        \$templates = [];

        foreach (\$this->finder->findAllTemplates() as \$template) {
            \$templates[\$template->getLogicalName()] = rtrim(\$filesystem->makePathRelative(\$this->locator->locate(\$template), \$cacheDir), '/');
        }

        \$templates = str_replace(\"' => '\", \"' => __DIR__.'/\", var_export(\$templates, true));

        \$this->writeCacheFile(\$cacheDir.'/templates.php', sprintf(\"<?php return %s;\\n\", \$templates));
    }

    /**
     * Checks whether this warmer is optional or not.
     *
     * @return bool always true
     */
    public function isOptional()
    {
        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/CacheWarmer/TemplatePathsCacheWarmer.php";
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

@trigger_error('The '.TemplatePathsCacheWarmer::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmer;

/**
 * Computes the association between template names and their paths on the disk.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplatePathsCacheWarmer extends CacheWarmer
{
    protected \$finder;
    protected \$locator;

    public function __construct(TemplateFinderInterface \$finder, TemplateLocator \$locator)
    {
        \$this->finder = \$finder;
        \$this->locator = \$locator;
    }

    /**
     * Warms up the cache.
     *
     * @param string \$cacheDir The cache directory
     */
    public function warmUp(\$cacheDir)
    {
        \$filesystem = new Filesystem();
        \$templates = [];

        foreach (\$this->finder->findAllTemplates() as \$template) {
            \$templates[\$template->getLogicalName()] = rtrim(\$filesystem->makePathRelative(\$this->locator->locate(\$template), \$cacheDir), '/');
        }

        \$templates = str_replace(\"' => '\", \"' => __DIR__.'/\", var_export(\$templates, true));

        \$this->writeCacheFile(\$cacheDir.'/templates.php', sprintf(\"<?php return %s;\\n\", \$templates));
    }

    /**
     * Checks whether this warmer is optional or not.
     *
     * @return bool always true
     */
    public function isOptional()
    {
        return true;
    }
}
", "vendor/symfony/framework-bundle/CacheWarmer/TemplatePathsCacheWarmer.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/CacheWarmer/TemplatePathsCacheWarmer.php");
    }
}
