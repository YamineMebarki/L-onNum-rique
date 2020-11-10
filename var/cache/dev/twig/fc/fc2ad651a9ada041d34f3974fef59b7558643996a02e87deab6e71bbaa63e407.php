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

/* vendor/symfony/intl/Data/Bundle/Reader/BundleEntryReaderInterface.php */
class __TwigTemplate_81c377e58e96347671d8dc8e0dc6af2fe1fc9c3b694216953c83e2c64e848a1f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Bundle/Reader/BundleEntryReaderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Bundle/Reader/BundleEntryReaderInterface.php"));

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

namespace Symfony\\Component\\Intl\\Data\\Bundle\\Reader;

use Symfony\\Component\\Intl\\Exception\\MissingResourceException;

/**
 * Reads individual entries of a resource file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
interface BundleEntryReaderInterface extends BundleReaderInterface
{
    /**
     * Reads an entry from a resource bundle.
     *
     * An entry can be selected from the resource bundle by passing the path
     * to that entry in the bundle. For example, if the bundle is structured
     * like this:
     *
     *     TopLevel
     *         NestedLevel
     *             Entry: Value
     *
     * Then the value can be read by calling:
     *
     *     \$reader->readEntry('...', 'en', ['TopLevel', 'NestedLevel', 'Entry']);
     *
     * @param string   \$path     The path to the resource bundle
     * @param string   \$locale   The locale to read
     * @param string[] \$indices  The indices to read from the bundle
     * @param bool     \$fallback Whether to merge the value with the value from
     *                           the fallback locale (e.g. \"en\" for \"en_GB\").
     *                           Only applicable if the result is multivalued
     *                           (i.e. array or \\ArrayAccess) or cannot be found
     *                           in the requested locale.
     *
     * @return mixed returns an array or {@link \\ArrayAccess} instance for
     *               complex data and a scalar value for simple data
     *
     * @throws MissingResourceException If the indices cannot be accessed
     */
    public function readEntry(\$path, \$locale, array \$indices, \$fallback = true);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Bundle/Reader/BundleEntryReaderInterface.php";
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

namespace Symfony\\Component\\Intl\\Data\\Bundle\\Reader;

use Symfony\\Component\\Intl\\Exception\\MissingResourceException;

/**
 * Reads individual entries of a resource file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
interface BundleEntryReaderInterface extends BundleReaderInterface
{
    /**
     * Reads an entry from a resource bundle.
     *
     * An entry can be selected from the resource bundle by passing the path
     * to that entry in the bundle. For example, if the bundle is structured
     * like this:
     *
     *     TopLevel
     *         NestedLevel
     *             Entry: Value
     *
     * Then the value can be read by calling:
     *
     *     \$reader->readEntry('...', 'en', ['TopLevel', 'NestedLevel', 'Entry']);
     *
     * @param string   \$path     The path to the resource bundle
     * @param string   \$locale   The locale to read
     * @param string[] \$indices  The indices to read from the bundle
     * @param bool     \$fallback Whether to merge the value with the value from
     *                           the fallback locale (e.g. \"en\" for \"en_GB\").
     *                           Only applicable if the result is multivalued
     *                           (i.e. array or \\ArrayAccess) or cannot be found
     *                           in the requested locale.
     *
     * @return mixed returns an array or {@link \\ArrayAccess} instance for
     *               complex data and a scalar value for simple data
     *
     * @throws MissingResourceException If the indices cannot be accessed
     */
    public function readEntry(\$path, \$locale, array \$indices, \$fallback = true);
}
", "vendor/symfony/intl/Data/Bundle/Reader/BundleEntryReaderInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Bundle/Reader/BundleEntryReaderInterface.php");
    }
}
