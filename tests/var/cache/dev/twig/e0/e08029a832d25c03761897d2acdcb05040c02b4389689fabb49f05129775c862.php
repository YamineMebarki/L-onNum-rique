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

/* vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/PhoneNumber.php */
class __TwigTemplate_1281b553ee1cdee7fa445f5aa85d813a944ac140479cc8c88a4fdc2fb917f3bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\fr_FR;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    // Phone numbers can't start by 00 in France
    // 01 is the most common prefix
    protected static \$formats = array(
        '+33 (0)1 ## ## ## ##',
        '+33 (0)1 ## ## ## ##',
        '+33 (0)2 ## ## ## ##',
        '+33 (0)3 ## ## ## ##',
        '+33 (0)4 ## ## ## ##',
        '+33 (0)5 ## ## ## ##',
        '+33 (0)6 ## ## ## ##',
        '+33 (0)7 ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["phoneNumber07WithSeparator"]) || array_key_exists("phoneNumber07WithSeparator", $context) ? $context["phoneNumber07WithSeparator"] : (function () { throw new RuntimeError('Variable "phoneNumber07WithSeparator" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '+33 (0)8 ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["phoneNumber08WithSeparator"]) || array_key_exists("phoneNumber08WithSeparator", $context) ? $context["phoneNumber08WithSeparator"] : (function () { throw new RuntimeError('Variable "phoneNumber08WithSeparator" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
        '+33 (0)9 ## ## ## ##',
        '+33 1 ## ## ## ##',
        '+33 1 ## ## ## ##',
        '+33 2 ## ## ## ##',
        '+33 3 ## ## ## ##',
        '+33 4 ## ## ## ##',
        '+33 5 ## ## ## ##',
        '+33 6 ## ## ## ##',
        '+33 7 ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["phoneNumber07WithSeparator"]) || array_key_exists("phoneNumber07WithSeparator", $context) ? $context["phoneNumber07WithSeparator"] : (function () { throw new RuntimeError('Variable "phoneNumber07WithSeparator" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "',
        '+33 8 ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["phoneNumber08WithSeparator"]) || array_key_exists("phoneNumber08WithSeparator", $context) ? $context["phoneNumber08WithSeparator"] : (function () { throw new RuntimeError('Variable "phoneNumber08WithSeparator" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "',
        '+33 9 ## ## ## ##',
        '01########',
        '01########',
        '02########',
        '03########',
        '04########',
        '05########',
        '06########',
        '07";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["phoneNumber07"]) || array_key_exists("phoneNumber07", $context) ? $context["phoneNumber07"] : (function () { throw new RuntimeError('Variable "phoneNumber07" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "',
        '08";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["phoneNumber08"]) || array_key_exists("phoneNumber08", $context) ? $context["phoneNumber08"] : (function () { throw new RuntimeError('Variable "phoneNumber08" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "',
        '09########',
        '01 ## ## ## ##',
        '01 ## ## ## ##',
        '02 ## ## ## ##',
        '03 ## ## ## ##',
        '04 ## ## ## ##',
        '05 ## ## ## ##',
        '06 ## ## ## ##',
        '07 ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["phoneNumber07WithSeparator"]) || array_key_exists("phoneNumber07WithSeparator", $context) ? $context["phoneNumber07WithSeparator"] : (function () { throw new RuntimeError('Variable "phoneNumber07WithSeparator" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "',
        '08 ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["phoneNumber08WithSeparator"]) || array_key_exists("phoneNumber08WithSeparator", $context) ? $context["phoneNumber08WithSeparator"] : (function () { throw new RuntimeError('Variable "phoneNumber08WithSeparator" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "',
        '09 ## ## ## ##',
    );

    // Mobile phone numbers start by 06 and 07
    // 06 is the most common prefix
    protected static \$mobileFormats  = array(
        '+33 (0)6 ## ## ## ##',
        '+33 6 ## ## ## ##',
        '+33 (0)7 ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["phoneNumber07WithSeparator"]) || array_key_exists("phoneNumber07WithSeparator", $context) ? $context["phoneNumber07WithSeparator"] : (function () { throw new RuntimeError('Variable "phoneNumber07WithSeparator" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "',
        '+33 7 ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["phoneNumber07WithSeparator"]) || array_key_exists("phoneNumber07WithSeparator", $context) ? $context["phoneNumber07WithSeparator"] : (function () { throw new RuntimeError('Variable "phoneNumber07WithSeparator" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "',
        '06########',
        '07";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["phoneNumber07"]) || array_key_exists("phoneNumber07", $context) ? $context["phoneNumber07"] : (function () { throw new RuntimeError('Variable "phoneNumber07" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "',
        '06 ## ## ## ##',
        '07 ";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["phoneNumber07WithSeparator"]) || array_key_exists("phoneNumber07WithSeparator", $context) ? $context["phoneNumber07WithSeparator"] : (function () { throw new RuntimeError('Variable "phoneNumber07WithSeparator" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$serviceFormats = array(
        '+33 (0)8 ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["phoneNumber08WithSeparator"]) || array_key_exists("phoneNumber08WithSeparator", $context) ? $context["phoneNumber08WithSeparator"] : (function () { throw new RuntimeError('Variable "phoneNumber08WithSeparator" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "',
        '+33 8 ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["phoneNumber08WithSeparator"]) || array_key_exists("phoneNumber08WithSeparator", $context) ? $context["phoneNumber08WithSeparator"] : (function () { throw new RuntimeError('Variable "phoneNumber08WithSeparator" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "',
        '08 ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["phoneNumber08WithSeparator"]) || array_key_exists("phoneNumber08WithSeparator", $context) ? $context["phoneNumber08WithSeparator"] : (function () { throw new RuntimeError('Variable "phoneNumber08WithSeparator" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "',
        '08";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["phoneNumber08"]) || array_key_exists("phoneNumber08", $context) ? $context["phoneNumber08"] : (function () { throw new RuntimeError('Variable "phoneNumber08" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "',
    );

    public function phoneNumber07()
    {
        \$phoneNumber = \$this->phoneNumber07WithSeparator();
        \$phoneNumber = str_replace(' ', '', \$phoneNumber);
        return \$phoneNumber;
    }

    /**
     * Only 073 to 079 are acceptable prefixes with 07
     *
     * @see http://www.arcep.fr/index.php?id=8146
     */
    public function phoneNumber07WithSeparator()
    {
        \$phoneNumber = \$this->generator->numberBetween(3, 9);
        \$phoneNumber .= \$this->numerify('# ## ## ##');
        return \$phoneNumber;
    }

    public function phoneNumber08()
    {
        \$phoneNumber = \$this->phoneNumber08WithSeparator();
        \$phoneNumber = str_replace(' ', '', \$phoneNumber);
        return \$phoneNumber;
    }

    /**
     *  Valid formats for 08:
     *
     *  0# ## ## ##
     *  1# ## ## ##
     *  2# ## ## ##
     *  91 ## ## ##
     *  92 ## ## ##
     *  93 ## ## ##
     *  97 ## ## ##
     *  98 ## ## ##
     *  99 ## ## ##
     *
     *  Formats 089(4|6)## ## ## are valid, but will be
     *  attributed when other 089 resource ranges are exhausted.
     *
     * @see https://www.arcep.fr/index.php?id=8146#c9625
     * @see https://issuetracker.google.com/u/1/issues/73269839
     */
    public function phoneNumber08WithSeparator()
    {
        \$regex = '([012]{1}\\d{1}|(9[1-357-9])( \\d{2}){3}';
        return \$this->regexify(\$regex);
    }

    /**
     * @example '0601020304'
     */
    public function mobileNumber()
    {
        \$format = static::randomElement(static::\$mobileFormats);

        return static::numerify(\$this->generator->parse(\$format));
    }
    /**
     * @example '0891951357'
     */
    public function serviceNumber()
    {
        \$format = static::randomElement(static::\$serviceFormats);

        return static::numerify(\$this->generator->parse(\$format));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/PhoneNumber.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 69,  154 => 68,  150 => 67,  146 => 66,  139 => 62,  134 => 60,  129 => 58,  125 => 57,  113 => 48,  109 => 47,  97 => 38,  93 => 37,  81 => 28,  77 => 27,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\fr_FR;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    // Phone numbers can't start by 00 in France
    // 01 is the most common prefix
    protected static \$formats = array(
        '+33 (0)1 ## ## ## ##',
        '+33 (0)1 ## ## ## ##',
        '+33 (0)2 ## ## ## ##',
        '+33 (0)3 ## ## ## ##',
        '+33 (0)4 ## ## ## ##',
        '+33 (0)5 ## ## ## ##',
        '+33 (0)6 ## ## ## ##',
        '+33 (0)7 {{phoneNumber07WithSeparator}}',
        '+33 (0)8 {{phoneNumber08WithSeparator}}',
        '+33 (0)9 ## ## ## ##',
        '+33 1 ## ## ## ##',
        '+33 1 ## ## ## ##',
        '+33 2 ## ## ## ##',
        '+33 3 ## ## ## ##',
        '+33 4 ## ## ## ##',
        '+33 5 ## ## ## ##',
        '+33 6 ## ## ## ##',
        '+33 7 {{phoneNumber07WithSeparator}}',
        '+33 8 {{phoneNumber08WithSeparator}}',
        '+33 9 ## ## ## ##',
        '01########',
        '01########',
        '02########',
        '03########',
        '04########',
        '05########',
        '06########',
        '07{{phoneNumber07}}',
        '08{{phoneNumber08}}',
        '09########',
        '01 ## ## ## ##',
        '01 ## ## ## ##',
        '02 ## ## ## ##',
        '03 ## ## ## ##',
        '04 ## ## ## ##',
        '05 ## ## ## ##',
        '06 ## ## ## ##',
        '07 {{phoneNumber07WithSeparator}}',
        '08 {{phoneNumber08WithSeparator}}',
        '09 ## ## ## ##',
    );

    // Mobile phone numbers start by 06 and 07
    // 06 is the most common prefix
    protected static \$mobileFormats  = array(
        '+33 (0)6 ## ## ## ##',
        '+33 6 ## ## ## ##',
        '+33 (0)7 {{phoneNumber07WithSeparator}}',
        '+33 7 {{phoneNumber07WithSeparator}}',
        '06########',
        '07{{phoneNumber07}}',
        '06 ## ## ## ##',
        '07 {{phoneNumber07WithSeparator}}',
    );

    protected static \$serviceFormats = array(
        '+33 (0)8 {{phoneNumber08WithSeparator}}',
        '+33 8 {{phoneNumber08WithSeparator}}',
        '08 {{phoneNumber08WithSeparator}}',
        '08{{phoneNumber08}}',
    );

    public function phoneNumber07()
    {
        \$phoneNumber = \$this->phoneNumber07WithSeparator();
        \$phoneNumber = str_replace(' ', '', \$phoneNumber);
        return \$phoneNumber;
    }

    /**
     * Only 073 to 079 are acceptable prefixes with 07
     *
     * @see http://www.arcep.fr/index.php?id=8146
     */
    public function phoneNumber07WithSeparator()
    {
        \$phoneNumber = \$this->generator->numberBetween(3, 9);
        \$phoneNumber .= \$this->numerify('# ## ## ##');
        return \$phoneNumber;
    }

    public function phoneNumber08()
    {
        \$phoneNumber = \$this->phoneNumber08WithSeparator();
        \$phoneNumber = str_replace(' ', '', \$phoneNumber);
        return \$phoneNumber;
    }

    /**
     *  Valid formats for 08:
     *
     *  0# ## ## ##
     *  1# ## ## ##
     *  2# ## ## ##
     *  91 ## ## ##
     *  92 ## ## ##
     *  93 ## ## ##
     *  97 ## ## ##
     *  98 ## ## ##
     *  99 ## ## ##
     *
     *  Formats 089(4|6)## ## ## are valid, but will be
     *  attributed when other 089 resource ranges are exhausted.
     *
     * @see https://www.arcep.fr/index.php?id=8146#c9625
     * @see https://issuetracker.google.com/u/1/issues/73269839
     */
    public function phoneNumber08WithSeparator()
    {
        \$regex = '([012]{1}\\d{1}|(9[1-357-9])( \\d{2}){3}';
        return \$this->regexify(\$regex);
    }

    /**
     * @example '0601020304'
     */
    public function mobileNumber()
    {
        \$format = static::randomElement(static::\$mobileFormats);

        return static::numerify(\$this->generator->parse(\$format));
    }
    /**
     * @example '0891951357'
     */
    public function serviceNumber()
    {
        \$format = static::randomElement(static::\$serviceFormats);

        return static::numerify(\$this->generator->parse(\$format));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/fr_FR/PhoneNumber.php");
    }
}
