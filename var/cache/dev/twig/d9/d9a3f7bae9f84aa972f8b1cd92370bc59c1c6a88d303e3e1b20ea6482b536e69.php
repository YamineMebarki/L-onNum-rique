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

/* vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Internet.php */
class __TwigTemplate_4147f2f3baf8d359e89e0266044c44e14437b7503c811cc3be4172e7571f4439 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Internet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Internet.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ar_JO;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$userNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastNameAscii"]) || array_key_exists("lastNameAscii", $context) ? $context["lastNameAscii"] : (function () { throw new RuntimeError('Variable "lastNameAscii" does not exist.', 8, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["firstNameAscii"]) || array_key_exists("firstNameAscii", $context) ? $context["firstNameAscii"] : (function () { throw new RuntimeError('Variable "firstNameAscii" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["firstNameAscii"]) || array_key_exists("firstNameAscii", $context) ? $context["firstNameAscii"] : (function () { throw new RuntimeError('Variable "firstNameAscii" does not exist.', 9, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["lastNameAscii"]) || array_key_exists("lastNameAscii", $context) ? $context["lastNameAscii"] : (function () { throw new RuntimeError('Variable "lastNameAscii" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstNameAscii"]) || array_key_exists("firstNameAscii", $context) ? $context["firstNameAscii"] : (function () { throw new RuntimeError('Variable "firstNameAscii" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "##',
        '?";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["lastNameAscii"]) || array_key_exists("lastNameAscii", $context) ? $context["lastNameAscii"] : (function () { throw new RuntimeError('Variable "lastNameAscii" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$safeEmailTld = array(
        'com', 'jo', 'me', 'net', 'org',
    );

    protected static \$tld = array(
        'biz', 'com', 'info', 'jo', 'net', 'org',
    );

    protected static \$lastNameAscii = array(
        'abbad', 'abbadi', 'abbas', 'abulebbeh', 'flefel', 'hadi', 'hamad', 'hasan', 'jabri', 'kanaan', 'karam', 'maanee', 'melhem', 'nimry', 'obaisi', 'qasem', 'qawasmee', 'rabee', 'rashwani', 'shami', 'zaloum',
    );
    protected static \$firstNameAscii = array(
        'abd', 'abdullah', 'ahmad', 'akram', 'amr', 'bashar', 'bilal', 'fadi', 'ibrahim', 'khaled', 'layth', 'mohammad', 'mutaz', 'omar', 'osama', 'rami', 'saleem', 'samer', 'sami', 'yazan',
    );

    public static function lastNameAscii()
    {
        return static::randomElement(static::\$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::\$firstNameAscii);
    }

    /**
     * @example 'ahmad.abbadi'
     */
    public function userName()
    {
        \$format = static::randomElement(static::\$userNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    /**
     * @example 'wewebit.jo'
     */
    public function domainName()
    {
        return static::randomElement(static::\$lastNameAscii) . '.' . \$this->tld();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Internet.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  64 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ar_JO;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );
    protected static \$safeEmailTld = array(
        'com', 'jo', 'me', 'net', 'org',
    );

    protected static \$tld = array(
        'biz', 'com', 'info', 'jo', 'net', 'org',
    );

    protected static \$lastNameAscii = array(
        'abbad', 'abbadi', 'abbas', 'abulebbeh', 'flefel', 'hadi', 'hamad', 'hasan', 'jabri', 'kanaan', 'karam', 'maanee', 'melhem', 'nimry', 'obaisi', 'qasem', 'qawasmee', 'rabee', 'rashwani', 'shami', 'zaloum',
    );
    protected static \$firstNameAscii = array(
        'abd', 'abdullah', 'ahmad', 'akram', 'amr', 'bashar', 'bilal', 'fadi', 'ibrahim', 'khaled', 'layth', 'mohammad', 'mutaz', 'omar', 'osama', 'rami', 'saleem', 'samer', 'sami', 'yazan',
    );

    public static function lastNameAscii()
    {
        return static::randomElement(static::\$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::\$firstNameAscii);
    }

    /**
     * @example 'ahmad.abbadi'
     */
    public function userName()
    {
        \$format = static::randomElement(static::\$userNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    /**
     * @example 'wewebit.jo'
     */
    public function domainName()
    {
        return static::randomElement(static::\$lastNameAscii) . '.' . \$this->tld();
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Internet.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Internet.php");
    }
}
