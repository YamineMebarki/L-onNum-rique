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

/* vendor/symfony/twig-bundle/Loader/FilesystemLoader.php */
class __TwigTemplate_6d1e603ad24317f4d678bee2963da09e218267f771676354fb5d820d0759f628 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Loader/FilesystemLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Loader/FilesystemLoader.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Loader;

@trigger_error('The '.FilesystemLoader::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig notation for templates instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Config\\FileLocatorInterface;
use Symfony\\Component\\Templating\\TemplateNameParserInterface;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;
use Twig\\Error\\LoaderError;
use Twig\\Loader\\FilesystemLoader as BaseFilesystemLoader;

/**
 * FilesystemLoader extends the default Twig filesystem loader
 * to work with the Symfony paths and template references.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig notation for templates instead.
 */
class FilesystemLoader extends BaseFilesystemLoader
{
    protected \$locator;
    protected \$parser;

    /**
     * @param string|null \$rootPath The root path common to all relative paths (null for getcwd())
     */
    public function __construct(FileLocatorInterface \$locator, TemplateNameParserInterface \$parser, string \$rootPath = null)
    {
        parent::__construct([], \$rootPath);

        \$this->locator = \$locator;
        \$this->parser = \$parser;
    }

    /**
     * {@inheritdoc}
     *
     * The name parameter might also be a TemplateReferenceInterface.
     */
    public function exists(\$name)
    {
        return parent::exists((string) \$name);
    }

    /**
     * Returns the path to the template file.
     *
     * The file locator is used to locate the template when the naming convention
     * is the symfony one (i.e. the name can be parsed).
     * Otherwise the template is located using the locator from the twig library.
     *
     * @param string|TemplateReferenceInterface \$template The template
     * @param bool                              \$throw    When true, a LoaderError exception will be thrown if a template could not be found
     *
     * @return string The path to the template file
     *
     * @throws LoaderError if the template could not be found
     */
    protected function findTemplate(\$template, \$throw = true)
    {
        \$logicalName = (string) \$template;

        if (isset(\$this->cache[\$logicalName])) {
            return \$this->cache[\$logicalName];
        }

        \$file = null;
        try {
            \$file = parent::findTemplate(\$logicalName);
        } catch (LoaderError \$e) {
            \$twigLoaderException = \$e;

            // for BC
            try {
                \$template = \$this->parser->parse(\$template);
                \$file = \$this->locator->locate(\$template);
            } catch (\\Exception \$e) {
            }
        }

        if (false === \$file || null === \$file) {
            if (\$throw) {
                throw \$twigLoaderException;
            }

            return false;
        }

        return \$this->cache[\$logicalName] = \$file;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Loader/FilesystemLoader.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Loader;

@trigger_error('The '.FilesystemLoader::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig notation for templates instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Config\\FileLocatorInterface;
use Symfony\\Component\\Templating\\TemplateNameParserInterface;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;
use Twig\\Error\\LoaderError;
use Twig\\Loader\\FilesystemLoader as BaseFilesystemLoader;

/**
 * FilesystemLoader extends the default Twig filesystem loader
 * to work with the Symfony paths and template references.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig notation for templates instead.
 */
class FilesystemLoader extends BaseFilesystemLoader
{
    protected \$locator;
    protected \$parser;

    /**
     * @param string|null \$rootPath The root path common to all relative paths (null for getcwd())
     */
    public function __construct(FileLocatorInterface \$locator, TemplateNameParserInterface \$parser, string \$rootPath = null)
    {
        parent::__construct([], \$rootPath);

        \$this->locator = \$locator;
        \$this->parser = \$parser;
    }

    /**
     * {@inheritdoc}
     *
     * The name parameter might also be a TemplateReferenceInterface.
     */
    public function exists(\$name)
    {
        return parent::exists((string) \$name);
    }

    /**
     * Returns the path to the template file.
     *
     * The file locator is used to locate the template when the naming convention
     * is the symfony one (i.e. the name can be parsed).
     * Otherwise the template is located using the locator from the twig library.
     *
     * @param string|TemplateReferenceInterface \$template The template
     * @param bool                              \$throw    When true, a LoaderError exception will be thrown if a template could not be found
     *
     * @return string The path to the template file
     *
     * @throws LoaderError if the template could not be found
     */
    protected function findTemplate(\$template, \$throw = true)
    {
        \$logicalName = (string) \$template;

        if (isset(\$this->cache[\$logicalName])) {
            return \$this->cache[\$logicalName];
        }

        \$file = null;
        try {
            \$file = parent::findTemplate(\$logicalName);
        } catch (LoaderError \$e) {
            \$twigLoaderException = \$e;

            // for BC
            try {
                \$template = \$this->parser->parse(\$template);
                \$file = \$this->locator->locate(\$template);
            } catch (\\Exception \$e) {
            }
        }

        if (false === \$file || null === \$file) {
            if (\$throw) {
                throw \$twigLoaderException;
            }

            return false;
        }

        return \$this->cache[\$logicalName] = \$file;
    }
}
", "vendor/symfony/twig-bundle/Loader/FilesystemLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Loader/FilesystemLoader.php");
    }
}
