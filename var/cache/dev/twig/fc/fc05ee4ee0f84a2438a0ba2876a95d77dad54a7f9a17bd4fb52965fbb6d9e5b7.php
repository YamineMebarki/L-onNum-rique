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

/* vendor/symfony/twig-bundle/TemplateIterator.php */
class __TwigTemplate_4ac2a03ff5523b192b9d642d0c00740db868d6752d02d6032e94ce6626fc08a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/TemplateIterator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/TemplateIterator.php"));

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

namespace Symfony\\Bundle\\TwigBundle;

use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * Iterator for all templates in bundles and in the application Resources directory.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplateIterator implements \\IteratorAggregate
{
    private \$kernel;
    private \$rootDir;
    private \$templates;
    private \$paths;
    private \$defaultPath;

    /**
     * @param KernelInterface \$kernel      A KernelInterface instance
     * @param string          \$rootDir     The directory where global templates can be stored
     * @param array           \$paths       Additional Twig paths to warm
     * @param string          \$defaultPath The directory where global templates can be stored
     */
    public function __construct(KernelInterface \$kernel, string \$rootDir, array \$paths = [], string \$defaultPath = null)
    {
        \$this->kernel = \$kernel;
        \$this->rootDir = \$rootDir;
        \$this->paths = \$paths;
        \$this->defaultPath = \$defaultPath;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        if (null !== \$this->templates) {
            return \$this->templates;
        }

        \$this->templates = array_merge(
            \$this->findTemplatesInDirectory(\$this->rootDir.'/Resources/views'),
            \$this->findTemplatesInDirectory(\$this->defaultPath, null, ['bundles'])
        );
        foreach (\$this->kernel->getBundles() as \$bundle) {
            \$name = \$bundle->getName();
            if ('Bundle' === substr(\$name, -6)) {
                \$name = substr(\$name, 0, -6);
            }

            \$this->templates = array_merge(
                \$this->templates,
                \$this->findTemplatesInDirectory(\$bundle->getPath().'/Resources/views', \$name),
                \$this->findTemplatesInDirectory(\$this->rootDir.'/Resources/'.\$bundle->getName().'/views', \$name),
                \$this->findTemplatesInDirectory(\$this->defaultPath.'/bundles/'.\$bundle->getName(), \$name)
            );
        }

        foreach (\$this->paths as \$dir => \$namespace) {
            \$this->templates = array_merge(\$this->templates, \$this->findTemplatesInDirectory(\$dir, \$namespace));
        }

        return \$this->templates = new \\ArrayIterator(array_unique(\$this->templates));
    }

    /**
     * Find templates in the given directory.
     *
     * @param string      \$dir       The directory where to look for templates
     * @param string|null \$namespace The template namespace
     *
     * @return array
     */
    private function findTemplatesInDirectory(\$dir, \$namespace = null, array \$excludeDirs = [])
    {
        if (!is_dir(\$dir)) {
            return [];
        }

        \$templates = [];
        foreach (Finder::create()->files()->followLinks()->in(\$dir)->exclude(\$excludeDirs) as \$file) {
            \$templates[] = (null !== \$namespace ? '@'.\$namespace.'/' : '').str_replace('\\\\', '/', \$file->getRelativePathname());
        }

        return \$templates;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/TemplateIterator.php";
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

namespace Symfony\\Bundle\\TwigBundle;

use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * Iterator for all templates in bundles and in the application Resources directory.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplateIterator implements \\IteratorAggregate
{
    private \$kernel;
    private \$rootDir;
    private \$templates;
    private \$paths;
    private \$defaultPath;

    /**
     * @param KernelInterface \$kernel      A KernelInterface instance
     * @param string          \$rootDir     The directory where global templates can be stored
     * @param array           \$paths       Additional Twig paths to warm
     * @param string          \$defaultPath The directory where global templates can be stored
     */
    public function __construct(KernelInterface \$kernel, string \$rootDir, array \$paths = [], string \$defaultPath = null)
    {
        \$this->kernel = \$kernel;
        \$this->rootDir = \$rootDir;
        \$this->paths = \$paths;
        \$this->defaultPath = \$defaultPath;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        if (null !== \$this->templates) {
            return \$this->templates;
        }

        \$this->templates = array_merge(
            \$this->findTemplatesInDirectory(\$this->rootDir.'/Resources/views'),
            \$this->findTemplatesInDirectory(\$this->defaultPath, null, ['bundles'])
        );
        foreach (\$this->kernel->getBundles() as \$bundle) {
            \$name = \$bundle->getName();
            if ('Bundle' === substr(\$name, -6)) {
                \$name = substr(\$name, 0, -6);
            }

            \$this->templates = array_merge(
                \$this->templates,
                \$this->findTemplatesInDirectory(\$bundle->getPath().'/Resources/views', \$name),
                \$this->findTemplatesInDirectory(\$this->rootDir.'/Resources/'.\$bundle->getName().'/views', \$name),
                \$this->findTemplatesInDirectory(\$this->defaultPath.'/bundles/'.\$bundle->getName(), \$name)
            );
        }

        foreach (\$this->paths as \$dir => \$namespace) {
            \$this->templates = array_merge(\$this->templates, \$this->findTemplatesInDirectory(\$dir, \$namespace));
        }

        return \$this->templates = new \\ArrayIterator(array_unique(\$this->templates));
    }

    /**
     * Find templates in the given directory.
     *
     * @param string      \$dir       The directory where to look for templates
     * @param string|null \$namespace The template namespace
     *
     * @return array
     */
    private function findTemplatesInDirectory(\$dir, \$namespace = null, array \$excludeDirs = [])
    {
        if (!is_dir(\$dir)) {
            return [];
        }

        \$templates = [];
        foreach (Finder::create()->files()->followLinks()->in(\$dir)->exclude(\$excludeDirs) as \$file) {
            \$templates[] = (null !== \$namespace ? '@'.\$namespace.'/' : '').str_replace('\\\\', '/', \$file->getRelativePathname());
        }

        return \$templates;
    }
}
", "vendor/symfony/twig-bundle/TemplateIterator.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/TemplateIterator.php");
    }
}
