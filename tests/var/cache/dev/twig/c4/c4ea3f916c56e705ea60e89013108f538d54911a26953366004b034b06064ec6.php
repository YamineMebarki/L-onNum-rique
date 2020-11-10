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

/* vendor/symfony/intl/ResourceBundle.php */
class __TwigTemplate_165264c09e150c13cb6dd9121e2ae778f81e9cc47d9cae9530b3800b4849a23a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/ResourceBundle.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/ResourceBundle.php"));

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

namespace Symfony\\Component\\Intl;

use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BufferedBundleReader;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReader;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\JsonBundleReader;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 *
 * @internal
 */
abstract class ResourceBundle
{
    private static \$entryReader;

    abstract protected static function getPath(): string;

    /**
     * Reads an entry from a resource bundle.
     *
     * @see BundleEntryReaderInterface::readEntry()
     *
     * @param string[] \$indices  The indices to read from the bundle
     * @param string   \$locale   The locale to read
     * @param bool     \$fallback Whether to merge the value with the value from
     *                           the fallback locale (e.g. \"en\" for \"en_GB\").
     *                           Only applicable if the result is multivalued
     *                           (i.e. array or \\ArrayAccess) or cannot be found
     *                           in the requested locale.
     *
     * @return mixed returns an array or {@link \\ArrayAccess} instance for
     *               complex data and a scalar value for simple data
     */
    final protected static function readEntry(array \$indices, string \$locale = null, bool \$fallback = true)
    {
        if (null === self::\$entryReader) {
            self::\$entryReader = new BundleEntryReader(new BufferedBundleReader(
                new JsonBundleReader(),
                Intl::BUFFER_SIZE
            ));

            \$localeAliases = self::\$entryReader->readEntry(Intl::getDataDirectory().'/'.Intl::LOCALE_DIR, 'meta', ['Aliases']);
            self::\$entryReader->setLocaleAliases(\$localeAliases instanceof \\Traversable ? iterator_to_array(\$localeAliases) : \$localeAliases);
        }

        return self::\$entryReader->readEntry(static::getPath(), \$locale ?? \\Locale::getDefault(), \$indices, \$fallback);
    }

    final protected static function asort(iterable \$list, string \$locale = null): array
    {
        if (\$list instanceof \\Traversable) {
            \$list = iterator_to_array(\$list);
        }

        \$collator = new \\Collator(\$locale ?? \\Locale::getDefault());
        \$collator->asort(\$list);

        return \$list;
    }

    private function __construct()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/ResourceBundle.php";
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

namespace Symfony\\Component\\Intl;

use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BufferedBundleReader;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReader;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\JsonBundleReader;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 *
 * @internal
 */
abstract class ResourceBundle
{
    private static \$entryReader;

    abstract protected static function getPath(): string;

    /**
     * Reads an entry from a resource bundle.
     *
     * @see BundleEntryReaderInterface::readEntry()
     *
     * @param string[] \$indices  The indices to read from the bundle
     * @param string   \$locale   The locale to read
     * @param bool     \$fallback Whether to merge the value with the value from
     *                           the fallback locale (e.g. \"en\" for \"en_GB\").
     *                           Only applicable if the result is multivalued
     *                           (i.e. array or \\ArrayAccess) or cannot be found
     *                           in the requested locale.
     *
     * @return mixed returns an array or {@link \\ArrayAccess} instance for
     *               complex data and a scalar value for simple data
     */
    final protected static function readEntry(array \$indices, string \$locale = null, bool \$fallback = true)
    {
        if (null === self::\$entryReader) {
            self::\$entryReader = new BundleEntryReader(new BufferedBundleReader(
                new JsonBundleReader(),
                Intl::BUFFER_SIZE
            ));

            \$localeAliases = self::\$entryReader->readEntry(Intl::getDataDirectory().'/'.Intl::LOCALE_DIR, 'meta', ['Aliases']);
            self::\$entryReader->setLocaleAliases(\$localeAliases instanceof \\Traversable ? iterator_to_array(\$localeAliases) : \$localeAliases);
        }

        return self::\$entryReader->readEntry(static::getPath(), \$locale ?? \\Locale::getDefault(), \$indices, \$fallback);
    }

    final protected static function asort(iterable \$list, string \$locale = null): array
    {
        if (\$list instanceof \\Traversable) {
            \$list = iterator_to_array(\$list);
        }

        \$collator = new \\Collator(\$locale ?? \\Locale::getDefault());
        \$collator->asort(\$list);

        return \$list;
    }

    private function __construct()
    {
    }
}
", "vendor/symfony/intl/ResourceBundle.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/ResourceBundle.php");
    }
}
