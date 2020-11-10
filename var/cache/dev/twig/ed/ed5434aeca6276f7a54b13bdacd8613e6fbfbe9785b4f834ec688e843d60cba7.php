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

/* vendor/fzaninotto/faker/src/Faker/Provider/Person.php */
class __TwigTemplate_9a7c35bfd0a71ad303d04f0cad042ac32fc3a6e19edf8ba43ef0f40abc222b37 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

class Person extends Base
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';

    protected static \$titleFormat = array(
      '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
      '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$firstNameFormat = array(
      '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
      '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$maleNameFormats = array(
        '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$firstNameMale = array(
        'John',
    );

    protected static \$firstNameFemale = array(
        'Jane',
    );

    protected static \$lastName = array('Doe');

    protected static \$titleMale = array('Mr.', 'Dr.', 'Prof.');

    protected static \$titleFemale = array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.');

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @return string
     * @example 'John Doe'
     */
    public function name(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            \$format = static::randomElement(static::\$maleNameFormats);
        } elseif (\$gender === static::GENDER_FEMALE) {
            \$format = static::randomElement(static::\$femaleNameFormats);
        } else {
            \$format = static::randomElement(array_merge(static::\$maleNameFormats, static::\$femaleNameFormats));
        }

        return \$this->generator->parse(\$format);
    }

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @return string
     * @example 'John'
     */
    public function firstName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::firstNameMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return static::firstNameFemale();
        }

        return \$this->generator->parse(static::randomElement(static::\$firstNameFormat));
    }

    public static function firstNameMale()
    {
        return static::randomElement(static::\$firstNameMale);
    }

    public static function firstNameFemale()
    {
        return static::randomElement(static::\$firstNameFemale);
    }

    /**
     * @example 'Doe'
     * @return string
     */
    public function lastName()
    {
        return static::randomElement(static::\$lastName);
    }

    /**
     * @example 'Mrs.'
     * @param string|null \$gender 'male', 'female' or null for any
     * @return string
     */
    public function title(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::titleMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return static::titleFemale();
        }

        return \$this->generator->parse(static::randomElement(static::\$titleFormat));
    }

    /**
     * @example 'Mr.'
     */
    public static function titleMale()
    {
        return static::randomElement(static::\$titleMale);
    }

    /**
     * @example 'Mrs.'
     */
    public static function titleFemale()
    {
        return static::randomElement(static::\$titleFemale);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  77 => 21,  70 => 17,  66 => 16,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider;

class Person extends Base
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';

    protected static \$titleFormat = array(
      '{{titleMale}}',
      '{{titleFemale}}',
    );

    protected static \$firstNameFormat = array(
      '{{firstNameMale}}',
      '{{firstNameFemale}}',
    );

    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
    );

    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
    );

    protected static \$firstNameMale = array(
        'John',
    );

    protected static \$firstNameFemale = array(
        'Jane',
    );

    protected static \$lastName = array('Doe');

    protected static \$titleMale = array('Mr.', 'Dr.', 'Prof.');

    protected static \$titleFemale = array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.');

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @return string
     * @example 'John Doe'
     */
    public function name(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            \$format = static::randomElement(static::\$maleNameFormats);
        } elseif (\$gender === static::GENDER_FEMALE) {
            \$format = static::randomElement(static::\$femaleNameFormats);
        } else {
            \$format = static::randomElement(array_merge(static::\$maleNameFormats, static::\$femaleNameFormats));
        }

        return \$this->generator->parse(\$format);
    }

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @return string
     * @example 'John'
     */
    public function firstName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::firstNameMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return static::firstNameFemale();
        }

        return \$this->generator->parse(static::randomElement(static::\$firstNameFormat));
    }

    public static function firstNameMale()
    {
        return static::randomElement(static::\$firstNameMale);
    }

    public static function firstNameFemale()
    {
        return static::randomElement(static::\$firstNameFemale);
    }

    /**
     * @example 'Doe'
     * @return string
     */
    public function lastName()
    {
        return static::randomElement(static::\$lastName);
    }

    /**
     * @example 'Mrs.'
     * @param string|null \$gender 'male', 'female' or null for any
     * @return string
     */
    public function title(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::titleMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return static::titleFemale();
        }

        return \$this->generator->parse(static::randomElement(static::\$titleFormat));
    }

    /**
     * @example 'Mr.'
     */
    public static function titleMale()
    {
        return static::randomElement(static::\$titleMale);
    }

    /**
     * @example 'Mrs.'
     */
    public static function titleFemale()
    {
        return static::randomElement(static::\$titleFemale);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/Person.php");
    }
}
