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

/* vendor/symfony/intl/Data/Provider/LocaleDataProvider.php */
class __TwigTemplate_0902df12798a2e51d2ee01fb0d3676f2e07ee7eba313dce53a5739b41b0b4f4f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Provider/LocaleDataProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Provider/LocaleDataProvider.php"));

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

namespace Symfony\\Component\\Intl\\Data\\Provider;

use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;

/**
 * Data provider for locale-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal to be removed in 5.0.
 */
class LocaleDataProvider
{
    private \$path;
    private \$reader;

    /**
     * Creates a data provider that reads locale-related data from .res files.
     *
     * @param string                     \$path   The path to the directory containing the .res files
     * @param BundleEntryReaderInterface \$reader The reader for reading the .res files
     */
    public function __construct(string \$path, BundleEntryReaderInterface \$reader)
    {
        \$this->path = \$path;
        \$this->reader = \$reader;
    }

    public function getLocales()
    {
        return \$this->reader->readEntry(\$this->path, 'meta', ['Locales']);
    }

    public function getAliases()
    {
        \$aliases = \$this->reader->readEntry(\$this->path, 'meta', ['Aliases']);

        if (\$aliases instanceof \\Traversable) {
            \$aliases = iterator_to_array(\$aliases);
        }

        return \$aliases;
    }

    public function getName(\$locale, \$displayLocale = null)
    {
        if (null === \$displayLocale) {
            \$displayLocale = \\Locale::getDefault();
        }

        return \$this->reader->readEntry(\$this->path, \$displayLocale, ['Names', \$locale]);
    }

    public function getNames(\$displayLocale = null)
    {
        if (null === \$displayLocale) {
            \$displayLocale = \\Locale::getDefault();
        }

        \$names = \$this->reader->readEntry(\$this->path, \$displayLocale, ['Names']);

        if (\$names instanceof \\Traversable) {
            \$names = iterator_to_array(\$names);
        }

        \$collator = new \\Collator(\$displayLocale);
        \$collator->asort(\$names);

        return \$names;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Provider/LocaleDataProvider.php";
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

namespace Symfony\\Component\\Intl\\Data\\Provider;

use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;

/**
 * Data provider for locale-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal to be removed in 5.0.
 */
class LocaleDataProvider
{
    private \$path;
    private \$reader;

    /**
     * Creates a data provider that reads locale-related data from .res files.
     *
     * @param string                     \$path   The path to the directory containing the .res files
     * @param BundleEntryReaderInterface \$reader The reader for reading the .res files
     */
    public function __construct(string \$path, BundleEntryReaderInterface \$reader)
    {
        \$this->path = \$path;
        \$this->reader = \$reader;
    }

    public function getLocales()
    {
        return \$this->reader->readEntry(\$this->path, 'meta', ['Locales']);
    }

    public function getAliases()
    {
        \$aliases = \$this->reader->readEntry(\$this->path, 'meta', ['Aliases']);

        if (\$aliases instanceof \\Traversable) {
            \$aliases = iterator_to_array(\$aliases);
        }

        return \$aliases;
    }

    public function getName(\$locale, \$displayLocale = null)
    {
        if (null === \$displayLocale) {
            \$displayLocale = \\Locale::getDefault();
        }

        return \$this->reader->readEntry(\$this->path, \$displayLocale, ['Names', \$locale]);
    }

    public function getNames(\$displayLocale = null)
    {
        if (null === \$displayLocale) {
            \$displayLocale = \\Locale::getDefault();
        }

        \$names = \$this->reader->readEntry(\$this->path, \$displayLocale, ['Names']);

        if (\$names instanceof \\Traversable) {
            \$names = iterator_to_array(\$names);
        }

        \$collator = new \\Collator(\$displayLocale);
        \$collator->asort(\$names);

        return \$names;
    }
}
", "vendor/symfony/intl/Data/Provider/LocaleDataProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Provider/LocaleDataProvider.php");
    }
}
