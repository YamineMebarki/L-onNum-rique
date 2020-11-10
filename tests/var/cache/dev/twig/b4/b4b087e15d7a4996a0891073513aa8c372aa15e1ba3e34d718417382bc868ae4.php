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

/* vendor/fzaninotto/faker/src/Faker/Factory.php */
class __TwigTemplate_35a11a7c26dafb8dc3378f27511e825cf749bddc4bf8a08977df1499b206d8ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Factory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Factory.php"));

        // line 1
        echo "<?php

namespace Faker;

class Factory
{
    const DEFAULT_LOCALE = 'en_US';

    protected static \$defaultProviders = array('Address', 'Barcode', 'Biased', 'Color', 'Company', 'DateTime', 'File', 'HtmlLorem', 'Image', 'Internet', 'Lorem', 'Miscellaneous', 'Payment', 'Person', 'PhoneNumber', 'Text', 'UserAgent', 'Uuid');

    /**
     * Create a new generator
     *
     * @param string \$locale
     * @return Generator
     */
    public static function create(\$locale = self::DEFAULT_LOCALE)
    {
        \$generator = new Generator();
        foreach (static::\$defaultProviders as \$provider) {
            \$providerClassName = self::getProviderClassname(\$provider, \$locale);
            \$generator->addProvider(new \$providerClassName(\$generator));
        }

        return \$generator;
    }

    /**
     * @param string \$provider
     * @param string \$locale
     * @return string
     */
    protected static function getProviderClassname(\$provider, \$locale = '')
    {
        if (\$providerClass = self::findProviderClassname(\$provider, \$locale)) {
            return \$providerClass;
        }
        // fallback to default locale
        if (\$providerClass = self::findProviderClassname(\$provider, static::DEFAULT_LOCALE)) {
            return \$providerClass;
        }
        // fallback to no locale
        if (\$providerClass = self::findProviderClassname(\$provider)) {
            return \$providerClass;
        }
        throw new \\InvalidArgumentException(sprintf('Unable to find provider \"%s\" with locale \"%s\"', \$provider, \$locale));
    }

    /**
     * @param string \$provider
     * @param string \$locale
     * @return string
     */
    protected static function findProviderClassname(\$provider, \$locale = '')
    {
        \$providerClass = 'Faker\\\\' . (\$locale ? sprintf('Provider\\%s\\%s', \$locale, \$provider) : sprintf('Provider\\%s', \$provider));
        if (class_exists(\$providerClass, true)) {
            return \$providerClass;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Factory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker;

class Factory
{
    const DEFAULT_LOCALE = 'en_US';

    protected static \$defaultProviders = array('Address', 'Barcode', 'Biased', 'Color', 'Company', 'DateTime', 'File', 'HtmlLorem', 'Image', 'Internet', 'Lorem', 'Miscellaneous', 'Payment', 'Person', 'PhoneNumber', 'Text', 'UserAgent', 'Uuid');

    /**
     * Create a new generator
     *
     * @param string \$locale
     * @return Generator
     */
    public static function create(\$locale = self::DEFAULT_LOCALE)
    {
        \$generator = new Generator();
        foreach (static::\$defaultProviders as \$provider) {
            \$providerClassName = self::getProviderClassname(\$provider, \$locale);
            \$generator->addProvider(new \$providerClassName(\$generator));
        }

        return \$generator;
    }

    /**
     * @param string \$provider
     * @param string \$locale
     * @return string
     */
    protected static function getProviderClassname(\$provider, \$locale = '')
    {
        if (\$providerClass = self::findProviderClassname(\$provider, \$locale)) {
            return \$providerClass;
        }
        // fallback to default locale
        if (\$providerClass = self::findProviderClassname(\$provider, static::DEFAULT_LOCALE)) {
            return \$providerClass;
        }
        // fallback to no locale
        if (\$providerClass = self::findProviderClassname(\$provider)) {
            return \$providerClass;
        }
        throw new \\InvalidArgumentException(sprintf('Unable to find provider \"%s\" with locale \"%s\"', \$provider, \$locale));
    }

    /**
     * @param string \$provider
     * @param string \$locale
     * @return string
     */
    protected static function findProviderClassname(\$provider, \$locale = '')
    {
        \$providerClass = 'Faker\\\\' . (\$locale ? sprintf('Provider\\%s\\%s', \$locale, \$provider) : sprintf('Provider\\%s', \$provider));
        if (class_exists(\$providerClass, true)) {
            return \$providerClass;
        }
    }
}
", "vendor/fzaninotto/faker/src/Faker/Factory.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Factory.php");
    }
}
