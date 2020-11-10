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

/* vendor/symfony/translation/TranslatorInterface.php */
class __TwigTemplate_c1078c189baf0a413bab6c64166d8afd1dcefc0c9f3d3d00bcb2c956bd3297be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/TranslatorInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/TranslatorInterface.php"));

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

namespace Symfony\\Component\\Translation;

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;

/**
 * TranslatorInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.2, use Symfony\\Contracts\\Translation\\TranslatorInterface instead
 */
interface TranslatorInterface extends LocaleAwareInterface
{
    /**
     * Translates the given message.
     *
     * @param string      \$id         The message id (may also be an object that can be cast to string)
     * @param array       \$parameters An array of parameters for the message
     * @param string|null \$domain     The domain for the message or null to use the default
     * @param string|null \$locale     The locale or null to use the default
     *
     * @return string The translated string
     *
     * @throws InvalidArgumentException If the locale contains invalid characters
     */
    public function trans(\$id, array \$parameters = [], \$domain = null, \$locale = null);

    /**
     * Translates the given choice message by choosing a translation according to a number.
     *
     * @param string      \$id         The message id (may also be an object that can be cast to string)
     * @param int         \$number     The number to use to find the index of the message
     * @param array       \$parameters An array of parameters for the message
     * @param string|null \$domain     The domain for the message or null to use the default
     * @param string|null \$locale     The locale or null to use the default
     *
     * @return string The translated string
     *
     * @throws InvalidArgumentException If the locale contains invalid characters
     */
    public function transChoice(\$id, \$number, array \$parameters = [], \$domain = null, \$locale = null);

    /**
     * Sets the current locale.
     *
     * @param string \$locale The locale
     *
     * @throws InvalidArgumentException If the locale contains invalid characters
     */
    public function setLocale(\$locale);

    /**
     * Returns the current locale.
     *
     * @return string The locale
     */
    public function getLocale();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/TranslatorInterface.php";
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

namespace Symfony\\Component\\Translation;

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;

/**
 * TranslatorInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.2, use Symfony\\Contracts\\Translation\\TranslatorInterface instead
 */
interface TranslatorInterface extends LocaleAwareInterface
{
    /**
     * Translates the given message.
     *
     * @param string      \$id         The message id (may also be an object that can be cast to string)
     * @param array       \$parameters An array of parameters for the message
     * @param string|null \$domain     The domain for the message or null to use the default
     * @param string|null \$locale     The locale or null to use the default
     *
     * @return string The translated string
     *
     * @throws InvalidArgumentException If the locale contains invalid characters
     */
    public function trans(\$id, array \$parameters = [], \$domain = null, \$locale = null);

    /**
     * Translates the given choice message by choosing a translation according to a number.
     *
     * @param string      \$id         The message id (may also be an object that can be cast to string)
     * @param int         \$number     The number to use to find the index of the message
     * @param array       \$parameters An array of parameters for the message
     * @param string|null \$domain     The domain for the message or null to use the default
     * @param string|null \$locale     The locale or null to use the default
     *
     * @return string The translated string
     *
     * @throws InvalidArgumentException If the locale contains invalid characters
     */
    public function transChoice(\$id, \$number, array \$parameters = [], \$domain = null, \$locale = null);

    /**
     * Sets the current locale.
     *
     * @param string \$locale The locale
     *
     * @throws InvalidArgumentException If the locale contains invalid characters
     */
    public function setLocale(\$locale);

    /**
     * Returns the current locale.
     *
     * @return string The locale
     */
    public function getLocale();
}
", "vendor/symfony/translation/TranslatorInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/TranslatorInterface.php");
    }
}
