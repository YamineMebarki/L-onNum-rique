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

/* vendor/symfony/intl/ResourceBundle/LanguageBundleInterface.php */
class __TwigTemplate_1d5864b460190c5fb8d7804098152347e4956225f5255e6854dd39d9dc20ee81 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/ResourceBundle/LanguageBundleInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/ResourceBundle/LanguageBundleInterface.php"));

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

namespace Symfony\\Component\\Intl\\ResourceBundle;

/**
 * Gives access to language-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, to be removed in 5.0.
 */
interface LanguageBundleInterface extends ResourceBundleInterface
{
    /**
     * Returns the name of a language.
     *
     * @param string      \$language      A language code (e.g. \"en\")
     * @param string|null \$region        Optional. A region code (e.g. \"US\")
     * @param string      \$displayLocale Optional. The locale to return the name in
     *                                   Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string|null The name of the language or NULL if not found
     */
    public function getLanguageName(\$language, \$region = null, \$displayLocale = null);

    /**
     * Returns the names of all known languages.
     *
     * @param string \$displayLocale Optional. The locale to return the names in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string[] A list of language names indexed by language codes
     */
    public function getLanguageNames(\$displayLocale = null);

    /**
     * Returns the name of a script.
     *
     * @param string \$script        A script code (e.g. \"Hans\")
     * @param string \$language      Optional. A language code (e.g. \"zh\")
     * @param string \$displayLocale Optional. The locale to return the name in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string|null The name of the script or NULL if not found
     */
    public function getScriptName(\$script, \$language = null, \$displayLocale = null);

    /**
     * Returns the names of all known scripts.
     *
     * @param string \$displayLocale Optional. The locale to return the names in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string[] A list of script names indexed by script codes
     */
    public function getScriptNames(\$displayLocale = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/ResourceBundle/LanguageBundleInterface.php";
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

namespace Symfony\\Component\\Intl\\ResourceBundle;

/**
 * Gives access to language-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, to be removed in 5.0.
 */
interface LanguageBundleInterface extends ResourceBundleInterface
{
    /**
     * Returns the name of a language.
     *
     * @param string      \$language      A language code (e.g. \"en\")
     * @param string|null \$region        Optional. A region code (e.g. \"US\")
     * @param string      \$displayLocale Optional. The locale to return the name in
     *                                   Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string|null The name of the language or NULL if not found
     */
    public function getLanguageName(\$language, \$region = null, \$displayLocale = null);

    /**
     * Returns the names of all known languages.
     *
     * @param string \$displayLocale Optional. The locale to return the names in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string[] A list of language names indexed by language codes
     */
    public function getLanguageNames(\$displayLocale = null);

    /**
     * Returns the name of a script.
     *
     * @param string \$script        A script code (e.g. \"Hans\")
     * @param string \$language      Optional. A language code (e.g. \"zh\")
     * @param string \$displayLocale Optional. The locale to return the name in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string|null The name of the script or NULL if not found
     */
    public function getScriptName(\$script, \$language = null, \$displayLocale = null);

    /**
     * Returns the names of all known scripts.
     *
     * @param string \$displayLocale Optional. The locale to return the names in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string[] A list of script names indexed by script codes
     */
    public function getScriptNames(\$displayLocale = null);
}
", "vendor/symfony/intl/ResourceBundle/LanguageBundleInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/ResourceBundle/LanguageBundleInterface.php");
    }
}
