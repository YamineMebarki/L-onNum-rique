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

/* vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Company.php */
class __TwigTemplate_f31397cfaf88ba81e1f995253803daf18c0a7a5be4ffc7697ca238683492d8ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ar_JO;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$bsWords = array(
        array()
    );

    protected static \$catchPhraseWords = array(
        array('الخدمات','الحلول','الانظمة'),
        array(
            'الذهبية','الذكية','المتطورة','المتقدمة', 'الدولية', 'المتخصصه', 'السريعة',
            'المثلى', 'الابداعية', 'المتكاملة', 'المتغيرة', 'المثالية'
            ),
    );

    protected static \$companyPrefix = array('شركة','مؤسسة','مجموعة','مكتب','أكاديمية','معرض');

    protected static \$companySuffix = array('وأولاده', 'للمساهمة المحدودة', ' ذ.م.م', 'مساهمة عامة', 'وشركائه');

    /**
     * @example 'مؤسسة'
     * @return string
     */
    public function companyPrefix()
    {
        return static::randomElement(self::\$companyPrefix);
    }

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase()
    {
        \$result = array();
        foreach (static::\$catchPhraseWords as &\$word) {
            \$result[] = static::randomElement(\$word);
        }

        return join(\$result, ' ');
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs()
    {
        \$result = array();
        foreach (static::\$bsWords as &\$word) {
            \$result[] = static::randomElement(\$word);
        }

        return join(\$result, ' ');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ar_JO;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
    );

    protected static \$bsWords = array(
        array()
    );

    protected static \$catchPhraseWords = array(
        array('الخدمات','الحلول','الانظمة'),
        array(
            'الذهبية','الذكية','المتطورة','المتقدمة', 'الدولية', 'المتخصصه', 'السريعة',
            'المثلى', 'الابداعية', 'المتكاملة', 'المتغيرة', 'المثالية'
            ),
    );

    protected static \$companyPrefix = array('شركة','مؤسسة','مجموعة','مكتب','أكاديمية','معرض');

    protected static \$companySuffix = array('وأولاده', 'للمساهمة المحدودة', ' ذ.م.م', 'مساهمة عامة', 'وشركائه');

    /**
     * @example 'مؤسسة'
     * @return string
     */
    public function companyPrefix()
    {
        return static::randomElement(self::\$companyPrefix);
    }

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase()
    {
        \$result = array();
        foreach (static::\$catchPhraseWords as &\$word) {
            \$result[] = static::randomElement(\$word);
        }

        return join(\$result, ' ');
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs()
    {
        \$result = array();
        foreach (static::\$bsWords as &\$word) {
            \$result[] = static::randomElement(\$word);
        }

        return join(\$result, ' ');
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Company.php");
    }
}
