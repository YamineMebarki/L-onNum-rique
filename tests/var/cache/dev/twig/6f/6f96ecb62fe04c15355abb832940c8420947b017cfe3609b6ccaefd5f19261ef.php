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

/* vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Company.php */
class __TwigTemplate_d4413abfa683e367e83139324ff6a78f7e16a9c82e56ae1a4bd7599a812397b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ka_GE;


class Company extends \\Faker\\Provider\\Company
{
    protected static \$companyPrefixes = array(
        'შპს', 'შპს', 'შპს', 'სს', 'სს', 'სს', 'კს', 'სს კორპორაცია', 'იმ', 'სპს', 'კოოპერატივი'
    );

    protected static \$companyNameSuffixes = array(
        'საბჭო', 'ექსპედიცია', 'პრომი', 'კომპლექსი', 'ავტო', 'ლიზინგი', 'თრასთი', 'ეიდი', 'პლუსი',
        'ლაბი', 'კავშირი', ' და კომპანია'
    );

    protected static \$companyElements = array(
        'ცემ', 'გეო', 'ქარ', 'ქიმ', 'ლიფტ', 'ტელე', 'რადიო', 'ტრანს', 'ალმას', 'მეტრო',
        'მოტორ', 'ტექ', 'სანტექ', 'ელექტრო', 'რეაქტო', 'ტექსტილ', 'კაბელ', 'მავალ', 'ტელ',
        'ტექნო'
    );

    protected static \$companyNameFormats = array(
        '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 24, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameSuffix"]) || array_key_exists("companyNameSuffix", $context) ? $context["companyNameSuffix"] : (function () { throw new RuntimeError('Variable "companyNameSuffix" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 25, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 25, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameSuffix"]) || array_key_exists("companyNameSuffix", $context) ? $context["companyNameSuffix"] : (function () { throw new RuntimeError('Variable "companyNameSuffix" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 26, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 26, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 26, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameSuffix"]) || array_key_exists("companyNameSuffix", $context) ? $context["companyNameSuffix"] : (function () { throw new RuntimeError('Variable "companyNameSuffix" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 27, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 27, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameElement"]) || array_key_exists("companyNameElement", $context) ? $context["companyNameElement"] : (function () { throw new RuntimeError('Variable "companyNameElement" does not exist.', 27, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companyNameSuffix"]) || array_key_exists("companyNameSuffix", $context) ? $context["companyNameSuffix"] : (function () { throw new RuntimeError('Variable "companyNameSuffix" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "',
    );


    /**
     * @example 'იმ ელექტროალმასგეოსაბჭო'
     */
    public function company()
    {
        \$format = static::randomElement(static::\$companyNameFormats);

        return \$this->generator->parse(\$format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefixes);
    }

    public static function companyNameElement()
    {
        return static::randomElement(static::\$companyElements);
    }

    public static function companyNameSuffix()
    {
        return static::randomElement(static::\$companyNameSuffixes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  83 => 26,  75 => 25,  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ka_GE;


class Company extends \\Faker\\Provider\\Company
{
    protected static \$companyPrefixes = array(
        'შპს', 'შპს', 'შპს', 'სს', 'სს', 'სს', 'კს', 'სს კორპორაცია', 'იმ', 'სპს', 'კოოპერატივი'
    );

    protected static \$companyNameSuffixes = array(
        'საბჭო', 'ექსპედიცია', 'პრომი', 'კომპლექსი', 'ავტო', 'ლიზინგი', 'თრასთი', 'ეიდი', 'პლუსი',
        'ლაბი', 'კავშირი', ' და კომპანია'
    );

    protected static \$companyElements = array(
        'ცემ', 'გეო', 'ქარ', 'ქიმ', 'ლიფტ', 'ტელე', 'რადიო', 'ტრანს', 'ალმას', 'მეტრო',
        'მოტორ', 'ტექ', 'სანტექ', 'ელექტრო', 'რეაქტო', 'ტექსტილ', 'კაბელ', 'მავალ', 'ტელ',
        'ტექნო'
    );

    protected static \$companyNameFormats = array(
        '{{companyPrefix}} {{companyNameElement}}{{companyNameSuffix}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
    );


    /**
     * @example 'იმ ელექტროალმასგეოსაბჭო'
     */
    public function company()
    {
        \$format = static::randomElement(static::\$companyNameFormats);

        return \$this->generator->parse(\$format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefixes);
    }

    public static function companyNameElement()
    {
        return static::randomElement(static::\$companyElements);
    }

    public static function companyNameSuffix()
    {
        return static::randomElement(static::\$companyNameSuffixes);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Company.php");
    }
}
