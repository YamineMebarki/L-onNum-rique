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

/* vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/DateTime.php */
class __TwigTemplate_e8a2dca385e88460644b4f3424072e548c0e1168dafd243e00fce77e87dd9d4c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/DateTime.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/DateTime.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ka_GE;

class DateTime extends \\Faker\\Provider\\DateTime
{

    public static function dayOfWeek(\$max = 'now')
    {
        \$map = array(
            'Sunday' => 'კვირა',
            'Monday' => 'ორშაბათი',
            'Tuesday' => 'სამშაბათი',
            'Wednesday' => 'ოთხშაბათი',
            'Thursday' => 'ხუთშაბათი',
            'Friday' => 'პარასკევი',
            'Saturday' => 'შაბათი',
        );
        \$week = static::dateTime(\$max)->format('l');
        return isset(\$map[\$week]) ? \$map[\$week] : \$week;
    }

    public static function monthName(\$max = 'now')
    {
        \$map = array(
            'January' => 'იანვარი',
            'February' => 'თებერვალი',
            'March' => 'მარტი',
            'April' => 'აპრილი',
            'May' => 'მაისი',
            'June' => 'ივნისი',
            'July' => 'ივლისი',
            'August' => 'აგვისტო',
            'September' => 'სექტემბერი',
            'October' => 'ოქტომბერი',
            'November' => 'ნოემბერი',
            'December' => 'დეკემბერი',
        );
        \$month = static::dateTime(\$max)->format('F');
        return isset(\$map[\$month]) ? \$map[\$month] : \$month;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/DateTime.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ka_GE;

class DateTime extends \\Faker\\Provider\\DateTime
{

    public static function dayOfWeek(\$max = 'now')
    {
        \$map = array(
            'Sunday' => 'კვირა',
            'Monday' => 'ორშაბათი',
            'Tuesday' => 'სამშაბათი',
            'Wednesday' => 'ოთხშაბათი',
            'Thursday' => 'ხუთშაბათი',
            'Friday' => 'პარასკევი',
            'Saturday' => 'შაბათი',
        );
        \$week = static::dateTime(\$max)->format('l');
        return isset(\$map[\$week]) ? \$map[\$week] : \$week;
    }

    public static function monthName(\$max = 'now')
    {
        \$map = array(
            'January' => 'იანვარი',
            'February' => 'თებერვალი',
            'March' => 'მარტი',
            'April' => 'აპრილი',
            'May' => 'მაისი',
            'June' => 'ივნისი',
            'July' => 'ივლისი',
            'August' => 'აგვისტო',
            'September' => 'სექტემბერი',
            'October' => 'ოქტომბერი',
            'November' => 'ნოემბერი',
            'December' => 'დეკემბერი',
        );
        \$month = static::dateTime(\$max)->format('F');
        return isset(\$map[\$month]) ? \$map[\$month] : \$month;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/DateTime.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/DateTime.php");
    }
}
