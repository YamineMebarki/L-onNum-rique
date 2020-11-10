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

/* vendor/symfony/framework-bundle/CacheWarmer/TemplateFinder.php */
class __TwigTemplate_4a1f79bf134dccddbb5a1df445dfc6bff9cde8c0983fe5feee4a0aa927c958c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/TemplateFinder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/TemplateFinder.php"));

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

@trigger_error('The '.TemplateFinder::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\Templating\\TemplateNameParserInterface;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;

/**
 * Finds all the templates.
 *
 * @author Victor Berchet <victor@suumit.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplateFinder implements TemplateFinderInterface
{
    private \$kernel;
    private \$parser;
    private \$rootDir;
    private \$templates;

    /**
     * @param KernelInterface             \$kernel  A KernelInterface instance
     * @param TemplateNameParserInterface \$parser  A TemplateNameParserInterface instance
     * @param string                      \$rootDir The directory where global templates can be stored
     */
    public function __construct(KernelInterface \$kernel, TemplateNameParserInterface \$parser, string \$rootDir)
    {
        \$this->kernel = \$kernel;
        \$this->parser = \$parser;
        \$this->rootDir = \$rootDir;
    }

    /**
     * Find all the templates in the bundle and in the kernel Resources folder.
     *
     * @return TemplateReferenceInterface[]
     */
    public function findAllTemplates()
    {
        if (null !== \$this->templates) {
            return \$this->templates;
        }

        \$templates = [];

        foreach (\$this->kernel->getBundles() as \$bundle) {
            \$templates = array_merge(\$templates, \$this->findTemplatesInBundle(\$bundle));
        }

        \$templates = array_merge(\$templates, \$this->findTemplatesInFolder(\$this->rootDir.'/views'));

        return \$this->templates = \$templates;
    }

    /**
     * Find templates in the given directory.
     *
     * @param string \$dir The folder where to look for templates
     *
     * @return TemplateReferenceInterface[]
     */
    private function findTemplatesInFolder(\$dir)
    {
        \$templates = [];

        if (is_dir(\$dir)) {
            \$finder = new Finder();
            foreach (\$finder->files()->followLinks()->in(\$dir) as \$file) {
                \$template = \$this->parser->parse(\$file->getRelativePathname());
                if (false !== \$template) {
                    \$templates[] = \$template;
                }
            }
        }

        return \$templates;
    }

    /**
     * Find templates in the given bundle.
     *
     * @param BundleInterface \$bundle The bundle where to look for templates
     *
     * @return TemplateReferenceInterface[]
     */
    private function findTemplatesInBundle(BundleInterface \$bundle)
    {
        \$name = \$bundle->getName();
        \$templates = array_unique(array_merge(
            \$this->findTemplatesInFolder(\$bundle->getPath().'/Resources/views'),
            \$this->findTemplatesInFolder(\$this->rootDir.'/'.\$name.'/views')
        ));

        foreach (\$templates as \$i => \$template) {
            \$templates[\$i] = \$template->set('bundle', \$name);
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
        return "vendor/symfony/framework-bundle/CacheWarmer/TemplateFinder.php";
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

@trigger_error('The '.TemplateFinder::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\Templating\\TemplateNameParserInterface;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;

/**
 * Finds all the templates.
 *
 * @author Victor Berchet <victor@suumit.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplateFinder implements TemplateFinderInterface
{
    private \$kernel;
    private \$parser;
    private \$rootDir;
    private \$templates;

    /**
     * @param KernelInterface             \$kernel  A KernelInterface instance
     * @param TemplateNameParserInterface \$parser  A TemplateNameParserInterface instance
     * @param string                      \$rootDir The directory where global templates can be stored
     */
    public function __construct(KernelInterface \$kernel, TemplateNameParserInterface \$parser, string \$rootDir)
    {
        \$this->kernel = \$kernel;
        \$this->parser = \$parser;
        \$this->rootDir = \$rootDir;
    }

    /**
     * Find all the templates in the bundle and in the kernel Resources folder.
     *
     * @return TemplateReferenceInterface[]
     */
    public function findAllTemplates()
    {
        if (null !== \$this->templates) {
            return \$this->templates;
        }

        \$templates = [];

        foreach (\$this->kernel->getBundles() as \$bundle) {
            \$templates = array_merge(\$templates, \$this->findTemplatesInBundle(\$bundle));
        }

        \$templates = array_merge(\$templates, \$this->findTemplatesInFolder(\$this->rootDir.'/views'));

        return \$this->templates = \$templates;
    }

    /**
     * Find templates in the given directory.
     *
     * @param string \$dir The folder where to look for templates
     *
     * @return TemplateReferenceInterface[]
     */
    private function findTemplatesInFolder(\$dir)
    {
        \$templates = [];

        if (is_dir(\$dir)) {
            \$finder = new Finder();
            foreach (\$finder->files()->followLinks()->in(\$dir) as \$file) {
                \$template = \$this->parser->parse(\$file->getRelativePathname());
                if (false !== \$template) {
                    \$templates[] = \$template;
                }
            }
        }

        return \$templates;
    }

    /**
     * Find templates in the given bundle.
     *
     * @param BundleInterface \$bundle The bundle where to look for templates
     *
     * @return TemplateReferenceInterface[]
     */
    private function findTemplatesInBundle(BundleInterface \$bundle)
    {
        \$name = \$bundle->getName();
        \$templates = array_unique(array_merge(
            \$this->findTemplatesInFolder(\$bundle->getPath().'/Resources/views'),
            \$this->findTemplatesInFolder(\$this->rootDir.'/'.\$name.'/views')
        ));

        foreach (\$templates as \$i => \$template) {
            \$templates[\$i] = \$template->set('bundle', \$name);
        }

        return \$templates;
    }
}
", "vendor/symfony/framework-bundle/CacheWarmer/TemplateFinder.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/CacheWarmer/TemplateFinder.php");
    }
}
