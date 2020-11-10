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

/* vendor/symfony/intl/Data/Generator/AbstractDataGenerator.php */
class __TwigTemplate_fc16876d612981b0e4d177ffe951b044c4b20be81ca1c835d1fab299f62dc4c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Generator/AbstractDataGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Generator/AbstractDataGenerator.php"));

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

namespace Symfony\\Component\\Intl\\Data\\Generator;

use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Intl\\Data\\Bundle\\Compiler\\BundleCompilerInterface;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReader;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\IntlBundleReader;
use Symfony\\Component\\Intl\\Data\\Util\\LocaleScanner;

/**
 * The rule for compiling the currency bundle.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
abstract class AbstractDataGenerator
{
    private \$compiler;
    private \$dirName;

    public function __construct(BundleCompilerInterface \$compiler, string \$dirName)
    {
        \$this->compiler = \$compiler;
        \$this->dirName = \$dirName;
    }

    public function generateData(GeneratorConfig \$config)
    {
        \$filesystem = new Filesystem();
        \$localeScanner = new LocaleScanner();
        \$reader = new BundleEntryReader(new IntlBundleReader());

        \$writers = \$config->getBundleWriters();
        \$tempDir = sys_get_temp_dir().'/icu-data-'.\$this->dirName;

        // Prepare filesystem directories
        foreach (\$writers as \$targetDir => \$writer) {
            \$filesystem->remove(\$targetDir.'/'.\$this->dirName);
            \$filesystem->mkdir(\$targetDir.'/'.\$this->dirName);
        }

        \$filesystem->remove(\$tempDir);
        \$filesystem->mkdir(\$tempDir);

        \$locales = \$this->scanLocales(\$localeScanner, \$config->getSourceDir());

        \$this->compileTemporaryBundles(\$this->compiler, \$config->getSourceDir(), \$tempDir);

        \$this->preGenerate();

        foreach (\$locales as \$locale) {
            \$localeData = \$this->generateDataForLocale(\$reader, \$tempDir, \$locale);

            if (null !== \$localeData) {
                foreach (\$writers as \$targetDir => \$writer) {
                    \$writer->write(\$targetDir.'/'.\$this->dirName, \$locale, \$localeData);
                }
            }
        }

        \$rootData = \$this->generateDataForRoot(\$reader, \$tempDir);

        if (null !== \$rootData) {
            foreach (\$writers as \$targetDir => \$writer) {
                \$writer->write(\$targetDir.'/'.\$this->dirName, 'root', \$rootData);
            }
        }

        \$metaData = \$this->generateDataForMeta(\$reader, \$tempDir);

        if (null !== \$metaData) {
            foreach (\$writers as \$targetDir => \$writer) {
                \$writer->write(\$targetDir.'/'.\$this->dirName, 'meta', \$metaData);
            }
        }

        // Clean up
        \$filesystem->remove(\$tempDir);
    }

    /**
     * @param string \$sourceDir
     *
     * @return string[]
     */
    abstract protected function scanLocales(LocaleScanner \$scanner, \$sourceDir);

    /**
     * @param string \$sourceDir
     * @param string \$tempDir
     */
    abstract protected function compileTemporaryBundles(BundleCompilerInterface \$compiler, \$sourceDir, \$tempDir);

    abstract protected function preGenerate();

    /**
     * @param string \$tempDir
     * @param string \$displayLocale
     *
     * @return array|null
     */
    abstract protected function generateDataForLocale(BundleEntryReaderInterface \$reader, \$tempDir, \$displayLocale);

    /**
     * @param string \$tempDir
     *
     * @return array|null
     */
    abstract protected function generateDataForRoot(BundleEntryReaderInterface \$reader, \$tempDir);

    /**
     * @param string \$tempDir
     *
     * @return array|null
     */
    abstract protected function generateDataForMeta(BundleEntryReaderInterface \$reader, \$tempDir);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Generator/AbstractDataGenerator.php";
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

namespace Symfony\\Component\\Intl\\Data\\Generator;

use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Intl\\Data\\Bundle\\Compiler\\BundleCompilerInterface;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReader;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\IntlBundleReader;
use Symfony\\Component\\Intl\\Data\\Util\\LocaleScanner;

/**
 * The rule for compiling the currency bundle.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
abstract class AbstractDataGenerator
{
    private \$compiler;
    private \$dirName;

    public function __construct(BundleCompilerInterface \$compiler, string \$dirName)
    {
        \$this->compiler = \$compiler;
        \$this->dirName = \$dirName;
    }

    public function generateData(GeneratorConfig \$config)
    {
        \$filesystem = new Filesystem();
        \$localeScanner = new LocaleScanner();
        \$reader = new BundleEntryReader(new IntlBundleReader());

        \$writers = \$config->getBundleWriters();
        \$tempDir = sys_get_temp_dir().'/icu-data-'.\$this->dirName;

        // Prepare filesystem directories
        foreach (\$writers as \$targetDir => \$writer) {
            \$filesystem->remove(\$targetDir.'/'.\$this->dirName);
            \$filesystem->mkdir(\$targetDir.'/'.\$this->dirName);
        }

        \$filesystem->remove(\$tempDir);
        \$filesystem->mkdir(\$tempDir);

        \$locales = \$this->scanLocales(\$localeScanner, \$config->getSourceDir());

        \$this->compileTemporaryBundles(\$this->compiler, \$config->getSourceDir(), \$tempDir);

        \$this->preGenerate();

        foreach (\$locales as \$locale) {
            \$localeData = \$this->generateDataForLocale(\$reader, \$tempDir, \$locale);

            if (null !== \$localeData) {
                foreach (\$writers as \$targetDir => \$writer) {
                    \$writer->write(\$targetDir.'/'.\$this->dirName, \$locale, \$localeData);
                }
            }
        }

        \$rootData = \$this->generateDataForRoot(\$reader, \$tempDir);

        if (null !== \$rootData) {
            foreach (\$writers as \$targetDir => \$writer) {
                \$writer->write(\$targetDir.'/'.\$this->dirName, 'root', \$rootData);
            }
        }

        \$metaData = \$this->generateDataForMeta(\$reader, \$tempDir);

        if (null !== \$metaData) {
            foreach (\$writers as \$targetDir => \$writer) {
                \$writer->write(\$targetDir.'/'.\$this->dirName, 'meta', \$metaData);
            }
        }

        // Clean up
        \$filesystem->remove(\$tempDir);
    }

    /**
     * @param string \$sourceDir
     *
     * @return string[]
     */
    abstract protected function scanLocales(LocaleScanner \$scanner, \$sourceDir);

    /**
     * @param string \$sourceDir
     * @param string \$tempDir
     */
    abstract protected function compileTemporaryBundles(BundleCompilerInterface \$compiler, \$sourceDir, \$tempDir);

    abstract protected function preGenerate();

    /**
     * @param string \$tempDir
     * @param string \$displayLocale
     *
     * @return array|null
     */
    abstract protected function generateDataForLocale(BundleEntryReaderInterface \$reader, \$tempDir, \$displayLocale);

    /**
     * @param string \$tempDir
     *
     * @return array|null
     */
    abstract protected function generateDataForRoot(BundleEntryReaderInterface \$reader, \$tempDir);

    /**
     * @param string \$tempDir
     *
     * @return array|null
     */
    abstract protected function generateDataForMeta(BundleEntryReaderInterface \$reader, \$tempDir);
}
", "vendor/symfony/intl/Data/Generator/AbstractDataGenerator.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Generator/AbstractDataGenerator.php");
    }
}
