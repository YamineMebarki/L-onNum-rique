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

/* vendor/symfony/framework-bundle/Templating/Loader/TemplateLocator.php */
class __TwigTemplate_c44bb503c538ea40754ffaa0295f6dbb898367cde4a29e9349964e506a59a883 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Loader/TemplateLocator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Loader/TemplateLocator.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader;

@trigger_error('The '.TemplateLocator::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Config\\FileLocatorInterface;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;

/**
 * TemplateLocator locates templates in bundles.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplateLocator implements FileLocatorInterface
{
    protected \$locator;
    protected \$cache;

    private \$cacheHits = [];

    /**
     * @param FileLocatorInterface \$locator  A FileLocatorInterface instance
     * @param string               \$cacheDir The cache path
     */
    public function __construct(FileLocatorInterface \$locator, string \$cacheDir = null)
    {
        if (null !== \$cacheDir && file_exists(\$cache = \$cacheDir.'/templates.php')) {
            \$this->cache = require \$cache;
        }

        \$this->locator = \$locator;
    }

    /**
     * Returns a full path for a given file.
     *
     * @return string The full path for the file
     */
    protected function getCacheKey(\$template)
    {
        return \$template->getLogicalName();
    }

    /**
     * Returns a full path for a given file.
     *
     * @param TemplateReferenceInterface \$template    A template
     * @param string                     \$currentPath Unused
     * @param bool                       \$first       Unused
     *
     * @return string The full path for the file
     *
     * @throws \\InvalidArgumentException When the template is not an instance of TemplateReferenceInterface
     * @throws \\InvalidArgumentException When the template file can not be found
     */
    public function locate(\$template, \$currentPath = null, \$first = true)
    {
        if (!\$template instanceof TemplateReferenceInterface) {
            throw new \\InvalidArgumentException('The template must be an instance of TemplateReferenceInterface.');
        }

        \$key = \$this->getCacheKey(\$template);

        if (isset(\$this->cacheHits[\$key])) {
            return \$this->cacheHits[\$key];
        }
        if (isset(\$this->cache[\$key])) {
            return \$this->cacheHits[\$key] = realpath(\$this->cache[\$key]) ?: \$this->cache[\$key];
        }

        try {
            return \$this->cacheHits[\$key] = \$this->locator->locate(\$template->getPath(), \$currentPath);
        } catch (\\InvalidArgumentException \$e) {
            throw new \\InvalidArgumentException(sprintf('Unable to find template \"%s\" : \"%s\".', \$template, \$e->getMessage()), 0, \$e);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/Loader/TemplateLocator.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader;

@trigger_error('The '.TemplateLocator::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Config\\FileLocatorInterface;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;

/**
 * TemplateLocator locates templates in bundles.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplateLocator implements FileLocatorInterface
{
    protected \$locator;
    protected \$cache;

    private \$cacheHits = [];

    /**
     * @param FileLocatorInterface \$locator  A FileLocatorInterface instance
     * @param string               \$cacheDir The cache path
     */
    public function __construct(FileLocatorInterface \$locator, string \$cacheDir = null)
    {
        if (null !== \$cacheDir && file_exists(\$cache = \$cacheDir.'/templates.php')) {
            \$this->cache = require \$cache;
        }

        \$this->locator = \$locator;
    }

    /**
     * Returns a full path for a given file.
     *
     * @return string The full path for the file
     */
    protected function getCacheKey(\$template)
    {
        return \$template->getLogicalName();
    }

    /**
     * Returns a full path for a given file.
     *
     * @param TemplateReferenceInterface \$template    A template
     * @param string                     \$currentPath Unused
     * @param bool                       \$first       Unused
     *
     * @return string The full path for the file
     *
     * @throws \\InvalidArgumentException When the template is not an instance of TemplateReferenceInterface
     * @throws \\InvalidArgumentException When the template file can not be found
     */
    public function locate(\$template, \$currentPath = null, \$first = true)
    {
        if (!\$template instanceof TemplateReferenceInterface) {
            throw new \\InvalidArgumentException('The template must be an instance of TemplateReferenceInterface.');
        }

        \$key = \$this->getCacheKey(\$template);

        if (isset(\$this->cacheHits[\$key])) {
            return \$this->cacheHits[\$key];
        }
        if (isset(\$this->cache[\$key])) {
            return \$this->cacheHits[\$key] = realpath(\$this->cache[\$key]) ?: \$this->cache[\$key];
        }

        try {
            return \$this->cacheHits[\$key] = \$this->locator->locate(\$template->getPath(), \$currentPath);
        } catch (\\InvalidArgumentException \$e) {
            throw new \\InvalidArgumentException(sprintf('Unable to find template \"%s\" : \"%s\".', \$template, \$e->getMessage()), 0, \$e);
        }
    }
}
", "vendor/symfony/framework-bundle/Templating/Loader/TemplateLocator.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/Loader/TemplateLocator.php");
    }
}
