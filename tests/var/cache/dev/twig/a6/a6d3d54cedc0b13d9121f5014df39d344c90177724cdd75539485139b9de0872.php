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

/* vendor/symfony/framework-bundle/Translation/Translator.php */
class __TwigTemplate_ca51d38f364bc3c8ac09cf1d8d0d332b575fa7d89e2f7a8f4c0ab1aae231d7d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Translation/Translator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Translation/Translator.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Translation;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Config\\Resource\\DirectoryResource;
use Symfony\\Component\\Config\\Resource\\FileExistenceResource;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface;
use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\Formatter\\MessageFormatterInterface;
use Symfony\\Component\\Translation\\Translator as BaseTranslator;

/**
 * Translator.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Translator extends BaseTranslator implements WarmableInterface
{
    protected \$container;
    protected \$loaderIds;

    protected \$options = [
        'cache_dir' => null,
        'debug' => false,
        'resource_files' => [],
        'scanned_directories' => [],
    ];

    /**
     * @var array
     */
    private \$resourceLocales;

    /**
     * Holds parameters from addResource() calls so we can defer the actual
     * parent::addResource() calls until initialize() is executed.
     *
     * @var array
     */
    private \$resources = [];

    private \$resourceFiles;

    /**
     * @var string[]
     */
    private \$scannedDirectories;

    /**
     * Constructor.
     *
     * Available options:
     *
     *   * cache_dir: The cache directory (or null to disable caching)
     *   * debug:     Whether to enable debugging or not (false by default)
     *   * resource_files: List of translation resources available grouped by locale.
     *
     * @throws InvalidArgumentException
     */
    public function __construct(ContainerInterface \$container, MessageFormatterInterface \$formatter, string \$defaultLocale, array \$loaderIds = [], array \$options = [])
    {
        \$this->container = \$container;
        \$this->loaderIds = \$loaderIds;

        // check option names
        if (\$diff = array_diff(array_keys(\$options), array_keys(\$this->options))) {
            throw new InvalidArgumentException(sprintf('The Translator does not support the following options: \\'%s\\'.', implode('\\', \\'', \$diff)));
        }

        \$this->options = array_merge(\$this->options, \$options);
        \$this->resourceLocales = array_keys(\$this->options['resource_files']);
        \$this->resourceFiles = \$this->options['resource_files'];
        \$this->scannedDirectories = \$this->options['scanned_directories'];

        parent::__construct(\$defaultLocale, \$formatter, \$this->options['cache_dir'], \$this->options['debug']);
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(\$cacheDir)
    {
        // skip warmUp when translator doesn't use cache
        if (null === \$this->options['cache_dir']) {
            return;
        }

        \$locales = array_merge(\$this->getFallbackLocales(), [\$this->getLocale()], \$this->resourceLocales);
        foreach (array_unique(\$locales) as \$locale) {
            // reset catalogue in case it's already loaded during the dump of the other locales.
            if (isset(\$this->catalogues[\$locale])) {
                unset(\$this->catalogues[\$locale]);
            }

            \$this->loadCatalogue(\$locale);
        }
    }

    public function addResource(\$format, \$resource, \$locale, \$domain = null)
    {
        if (\$this->resourceFiles) {
            \$this->addResourceFiles();
        }
        \$this->resources[] = [\$format, \$resource, \$locale, \$domain];
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeCatalogue(\$locale)
    {
        \$this->initialize();
        parent::initializeCatalogue(\$locale);
    }

    /**
     * @internal
     */
    protected function doLoadCatalogue(\$locale): void
    {
        parent::doLoadCatalogue(\$locale);

        foreach (\$this->scannedDirectories as \$directory) {
            \$resourceClass = file_exists(\$directory) ? DirectoryResource::class : FileExistenceResource::class;
            \$this->catalogues[\$locale]->addResource(new \$resourceClass(\$directory));
        }
    }

    protected function initialize()
    {
        if (\$this->resourceFiles) {
            \$this->addResourceFiles();
        }
        foreach (\$this->resources as \$key => \$params) {
            list(\$format, \$resource, \$locale, \$domain) = \$params;
            parent::addResource(\$format, \$resource, \$locale, \$domain);
        }
        \$this->resources = [];

        foreach (\$this->loaderIds as \$id => \$aliases) {
            foreach (\$aliases as \$alias) {
                \$this->addLoader(\$alias, \$this->container->get(\$id));
            }
        }
    }

    private function addResourceFiles()
    {
        \$filesByLocale = \$this->resourceFiles;
        \$this->resourceFiles = [];

        foreach (\$filesByLocale as \$locale => \$files) {
            foreach (\$files as \$key => \$file) {
                // filename is domain.locale.format
                list(\$domain, \$locale, \$format) = explode('.', basename(\$file), 3);
                \$this->addResource(\$format, \$file, \$locale, \$domain);
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
        return "vendor/symfony/framework-bundle/Translation/Translator.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Translation;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Config\\Resource\\DirectoryResource;
use Symfony\\Component\\Config\\Resource\\FileExistenceResource;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface;
use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\Formatter\\MessageFormatterInterface;
use Symfony\\Component\\Translation\\Translator as BaseTranslator;

/**
 * Translator.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Translator extends BaseTranslator implements WarmableInterface
{
    protected \$container;
    protected \$loaderIds;

    protected \$options = [
        'cache_dir' => null,
        'debug' => false,
        'resource_files' => [],
        'scanned_directories' => [],
    ];

    /**
     * @var array
     */
    private \$resourceLocales;

    /**
     * Holds parameters from addResource() calls so we can defer the actual
     * parent::addResource() calls until initialize() is executed.
     *
     * @var array
     */
    private \$resources = [];

    private \$resourceFiles;

    /**
     * @var string[]
     */
    private \$scannedDirectories;

    /**
     * Constructor.
     *
     * Available options:
     *
     *   * cache_dir: The cache directory (or null to disable caching)
     *   * debug:     Whether to enable debugging or not (false by default)
     *   * resource_files: List of translation resources available grouped by locale.
     *
     * @throws InvalidArgumentException
     */
    public function __construct(ContainerInterface \$container, MessageFormatterInterface \$formatter, string \$defaultLocale, array \$loaderIds = [], array \$options = [])
    {
        \$this->container = \$container;
        \$this->loaderIds = \$loaderIds;

        // check option names
        if (\$diff = array_diff(array_keys(\$options), array_keys(\$this->options))) {
            throw new InvalidArgumentException(sprintf('The Translator does not support the following options: \\'%s\\'.', implode('\\', \\'', \$diff)));
        }

        \$this->options = array_merge(\$this->options, \$options);
        \$this->resourceLocales = array_keys(\$this->options['resource_files']);
        \$this->resourceFiles = \$this->options['resource_files'];
        \$this->scannedDirectories = \$this->options['scanned_directories'];

        parent::__construct(\$defaultLocale, \$formatter, \$this->options['cache_dir'], \$this->options['debug']);
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(\$cacheDir)
    {
        // skip warmUp when translator doesn't use cache
        if (null === \$this->options['cache_dir']) {
            return;
        }

        \$locales = array_merge(\$this->getFallbackLocales(), [\$this->getLocale()], \$this->resourceLocales);
        foreach (array_unique(\$locales) as \$locale) {
            // reset catalogue in case it's already loaded during the dump of the other locales.
            if (isset(\$this->catalogues[\$locale])) {
                unset(\$this->catalogues[\$locale]);
            }

            \$this->loadCatalogue(\$locale);
        }
    }

    public function addResource(\$format, \$resource, \$locale, \$domain = null)
    {
        if (\$this->resourceFiles) {
            \$this->addResourceFiles();
        }
        \$this->resources[] = [\$format, \$resource, \$locale, \$domain];
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeCatalogue(\$locale)
    {
        \$this->initialize();
        parent::initializeCatalogue(\$locale);
    }

    /**
     * @internal
     */
    protected function doLoadCatalogue(\$locale): void
    {
        parent::doLoadCatalogue(\$locale);

        foreach (\$this->scannedDirectories as \$directory) {
            \$resourceClass = file_exists(\$directory) ? DirectoryResource::class : FileExistenceResource::class;
            \$this->catalogues[\$locale]->addResource(new \$resourceClass(\$directory));
        }
    }

    protected function initialize()
    {
        if (\$this->resourceFiles) {
            \$this->addResourceFiles();
        }
        foreach (\$this->resources as \$key => \$params) {
            list(\$format, \$resource, \$locale, \$domain) = \$params;
            parent::addResource(\$format, \$resource, \$locale, \$domain);
        }
        \$this->resources = [];

        foreach (\$this->loaderIds as \$id => \$aliases) {
            foreach (\$aliases as \$alias) {
                \$this->addLoader(\$alias, \$this->container->get(\$id));
            }
        }
    }

    private function addResourceFiles()
    {
        \$filesByLocale = \$this->resourceFiles;
        \$this->resourceFiles = [];

        foreach (\$filesByLocale as \$locale => \$files) {
            foreach (\$files as \$key => \$file) {
                // filename is domain.locale.format
                list(\$domain, \$locale, \$format) = explode('.', basename(\$file), 3);
                \$this->addResource(\$format, \$file, \$locale, \$domain);
            }
        }
    }
}
", "vendor/symfony/framework-bundle/Translation/Translator.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Translation/Translator.php");
    }
}
