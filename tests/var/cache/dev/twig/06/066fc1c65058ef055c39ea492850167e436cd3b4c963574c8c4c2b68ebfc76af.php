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

/* vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/DateTime.php */
class __TwigTemplate_48f49a66647c51498bcaa1460ebe5945cb09967a8d90c8dd67014de59e099766 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/DateTime.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/DateTime.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\cs_CZ;

/**
 * Czech months and days without setting locale
 */
class DateTime extends \\Faker\\Provider\\DateTime
{
    protected static \$days = array(
        'neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota'
    );
    protected static \$months = array(
        'leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec',
        'srpen', 'září', 'říjen', 'listopad', 'prosinec'
    );
    protected static \$monthsGenitive  = array(
        'ledna', 'února', 'března', 'dubna', 'května', 'června', 'července',
        'srpna', 'září', 'října', 'listopadu', 'prosince'
    );
    protected static \$formattedDateFormat = array(
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["dayOfMonth"]) || array_key_exists("dayOfMonth", $context) ? $context["dayOfMonth"] : (function () { throw new RuntimeError('Variable "dayOfMonth" does not exist.', 22, $this->source); })()), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, (isset($context["monthNameGenitive"]) || array_key_exists("monthNameGenitive", $context) ? $context["monthNameGenitive"] : (function () { throw new RuntimeError('Variable "monthNameGenitive" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
    );

    public static function monthName(\$max = 'now')
    {
        return static::\$months[parent::month(\$max) - 1];
    }

    public static function monthNameGenitive(\$max = 'now')
    {
        return static::\$monthsGenitive[parent::month(\$max) - 1];
    }

    public static function dayOfWeek(\$max = 'now')
    {
        return static::\$days[static::dateTime(\$max)->format('w')];
    }

    /**
     * @param  \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '2'
     */
    public static function dayOfMonth(\$max = 'now')
    {
        return static::dateTime(\$max)->format('j');
    }

    /**
     * Full date with inflected month
     * @return string
     * @example '16. listopadu 2003'
     */
    public function formattedDate()
    {
        \$format = static::randomElement(static::\$formattedDateFormat);

        return \$this->generator->parse(\$format);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/DateTime.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\cs_CZ;

/**
 * Czech months and days without setting locale
 */
class DateTime extends \\Faker\\Provider\\DateTime
{
    protected static \$days = array(
        'neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota'
    );
    protected static \$months = array(
        'leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec',
        'srpen', 'září', 'říjen', 'listopad', 'prosinec'
    );
    protected static \$monthsGenitive  = array(
        'ledna', 'února', 'března', 'dubna', 'května', 'června', 'července',
        'srpna', 'září', 'října', 'listopadu', 'prosince'
    );
    protected static \$formattedDateFormat = array(
        '{{dayOfMonth}}. {{monthNameGenitive}} {{year}}',
    );

    public static function monthName(\$max = 'now')
    {
        return static::\$months[parent::month(\$max) - 1];
    }

    public static function monthNameGenitive(\$max = 'now')
    {
        return static::\$monthsGenitive[parent::month(\$max) - 1];
    }

    public static function dayOfWeek(\$max = 'now')
    {
        return static::\$days[static::dateTime(\$max)->format('w')];
    }

    /**
     * @param  \\DateTime|int|string \$max maximum timestamp used as random end limit, default to \"now\"
     * @return string
     * @example '2'
     */
    public static function dayOfMonth(\$max = 'now')
    {
        return static::dateTime(\$max)->format('j');
    }

    /**
     * Full date with inflected month
     * @return string
     * @example '16. listopadu 2003'
     */
    public function formattedDate()
    {
        \$format = static::randomElement(static::\$formattedDateFormat);

        return \$this->generator->parse(\$format);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/DateTime.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/DateTime.php");
    }
}
