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

/* vendor/symfony/intl/ResourceBundle/LanguageBundle.php */
class __TwigTemplate_677b4131eb618bdb7bccfcf1f594d0e5be7244df36ecac6002183a0a12c6243b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/ResourceBundle/LanguageBundle.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/ResourceBundle/LanguageBundle.php"));

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

use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Data\\Provider\\LanguageDataProvider;
use Symfony\\Component\\Intl\\Data\\Provider\\LocaleDataProvider;
use Symfony\\Component\\Intl\\Data\\Provider\\ScriptDataProvider;
use Symfony\\Component\\Intl\\Exception\\MissingResourceException;

/**
 * Default implementation of {@link LanguageBundleInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal to be removed in 5.0.
 */
class LanguageBundle extends LanguageDataProvider implements LanguageBundleInterface
{
    private \$localeProvider;
    private \$scriptProvider;

    public function __construct(string \$path, BundleEntryReaderInterface \$reader, LocaleDataProvider \$localeProvider, ScriptDataProvider \$scriptProvider)
    {
        parent::__construct(\$path, \$reader);

        \$this->localeProvider = \$localeProvider;
        \$this->scriptProvider = \$scriptProvider;
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguageName(\$language, \$region = null, \$displayLocale = null)
    {
        // Some languages are translated together with their region,
        // i.e. \"en_GB\" is translated as \"British English\"
        if (null !== \$region) {
            try {
                return \$this->getName(\$language.'_'.\$region, \$displayLocale);
            } catch (MissingResourceException \$e) {
            }
        }

        try {
            return \$this->getName(\$language, \$displayLocale);
        } catch (MissingResourceException \$e) {
            return null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguageNames(\$displayLocale = null)
    {
        try {
            return \$this->getNames(\$displayLocale);
        } catch (MissingResourceException \$e) {
            return [];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getScriptName(\$script, \$language = null, \$displayLocale = null)
    {
        try {
            return \$this->scriptProvider->getName(\$script, \$displayLocale);
        } catch (MissingResourceException \$e) {
            return null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getScriptNames(\$displayLocale = null)
    {
        try {
            return \$this->scriptProvider->getNames(\$displayLocale);
        } catch (MissingResourceException \$e) {
            return [];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLocales()
    {
        try {
            return \$this->localeProvider->getLocales();
        } catch (MissingResourceException \$e) {
            return [];
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/ResourceBundle/LanguageBundle.php";
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

use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Data\\Provider\\LanguageDataProvider;
use Symfony\\Component\\Intl\\Data\\Provider\\LocaleDataProvider;
use Symfony\\Component\\Intl\\Data\\Provider\\ScriptDataProvider;
use Symfony\\Component\\Intl\\Exception\\MissingResourceException;

/**
 * Default implementation of {@link LanguageBundleInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal to be removed in 5.0.
 */
class LanguageBundle extends LanguageDataProvider implements LanguageBundleInterface
{
    private \$localeProvider;
    private \$scriptProvider;

    public function __construct(string \$path, BundleEntryReaderInterface \$reader, LocaleDataProvider \$localeProvider, ScriptDataProvider \$scriptProvider)
    {
        parent::__construct(\$path, \$reader);

        \$this->localeProvider = \$localeProvider;
        \$this->scriptProvider = \$scriptProvider;
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguageName(\$language, \$region = null, \$displayLocale = null)
    {
        // Some languages are translated together with their region,
        // i.e. \"en_GB\" is translated as \"British English\"
        if (null !== \$region) {
            try {
                return \$this->getName(\$language.'_'.\$region, \$displayLocale);
            } catch (MissingResourceException \$e) {
            }
        }

        try {
            return \$this->getName(\$language, \$displayLocale);
        } catch (MissingResourceException \$e) {
            return null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguageNames(\$displayLocale = null)
    {
        try {
            return \$this->getNames(\$displayLocale);
        } catch (MissingResourceException \$e) {
            return [];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getScriptName(\$script, \$language = null, \$displayLocale = null)
    {
        try {
            return \$this->scriptProvider->getName(\$script, \$displayLocale);
        } catch (MissingResourceException \$e) {
            return null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getScriptNames(\$displayLocale = null)
    {
        try {
            return \$this->scriptProvider->getNames(\$displayLocale);
        } catch (MissingResourceException \$e) {
            return [];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLocales()
    {
        try {
            return \$this->localeProvider->getLocales();
        } catch (MissingResourceException \$e) {
            return [];
        }
    }
}
", "vendor/symfony/intl/ResourceBundle/LanguageBundle.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/ResourceBundle/LanguageBundle.php");
    }
}
