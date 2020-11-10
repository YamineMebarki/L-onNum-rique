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

/* vendor/symfony/translation/Reader/TranslationReader.php */
class __TwigTemplate_d5dec15cb704d226b5b326dbad21cc428b2e16c89f78858aab85cdd9260a23c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Reader/TranslationReader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Reader/TranslationReader.php"));

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

namespace Symfony\\Component\\Translation\\Reader;

use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\Translation\\Loader\\LoaderInterface;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * TranslationReader reads translation messages from translation files.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
class TranslationReader implements TranslationReaderInterface
{
    /**
     * Loaders used for import.
     *
     * @var array
     */
    private \$loaders = [];

    /**
     * Adds a loader to the translation extractor.
     *
     * @param string \$format The format of the loader
     */
    public function addLoader(\$format, LoaderInterface \$loader)
    {
        \$this->loaders[\$format] = \$loader;
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$directory, MessageCatalogue \$catalogue)
    {
        if (!is_dir(\$directory)) {
            return;
        }

        foreach (\$this->loaders as \$format => \$loader) {
            // load any existing translation files
            \$finder = new Finder();
            \$extension = \$catalogue->getLocale().'.'.\$format;
            \$files = \$finder->files()->name('*.'.\$extension)->in(\$directory);
            foreach (\$files as \$file) {
                \$domain = substr(\$file->getFilename(), 0, -1 * \\strlen(\$extension) - 1);
                \$catalogue->addCatalogue(\$loader->load(\$file->getPathname(), \$catalogue->getLocale(), \$domain));
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
        return "vendor/symfony/translation/Reader/TranslationReader.php";
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

namespace Symfony\\Component\\Translation\\Reader;

use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\Translation\\Loader\\LoaderInterface;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * TranslationReader reads translation messages from translation files.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
class TranslationReader implements TranslationReaderInterface
{
    /**
     * Loaders used for import.
     *
     * @var array
     */
    private \$loaders = [];

    /**
     * Adds a loader to the translation extractor.
     *
     * @param string \$format The format of the loader
     */
    public function addLoader(\$format, LoaderInterface \$loader)
    {
        \$this->loaders[\$format] = \$loader;
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$directory, MessageCatalogue \$catalogue)
    {
        if (!is_dir(\$directory)) {
            return;
        }

        foreach (\$this->loaders as \$format => \$loader) {
            // load any existing translation files
            \$finder = new Finder();
            \$extension = \$catalogue->getLocale().'.'.\$format;
            \$files = \$finder->files()->name('*.'.\$extension)->in(\$directory);
            foreach (\$files as \$file) {
                \$domain = substr(\$file->getFilename(), 0, -1 * \\strlen(\$extension) - 1);
                \$catalogue->addCatalogue(\$loader->load(\$file->getPathname(), \$catalogue->getLocale(), \$domain));
            }
        }
    }
}
", "vendor/symfony/translation/Reader/TranslationReader.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Reader/TranslationReader.php");
    }
}
