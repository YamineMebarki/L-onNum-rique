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

/* vendor/fzaninotto/faker/src/Faker/Provider/zh_TW/DateTime.php */
class __TwigTemplate_fb33aabce4bf6264978428f0674fdba8803c8f122b0b32005b73c993dbf00ac6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/zh_TW/DateTime.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/zh_TW/DateTime.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\zh_TW;

class DateTime extends \\Faker\\Provider\\DateTime
{
    public static function amPm(\$max = 'now')
    {
        return static::dateTime(\$max)->format('a') === 'am' ? '上午' : '下午';
    }

    public static function dayOfWeek(\$max = 'now')
    {
        \$map = array(
            'Sunday' => '星期日',
            'Monday' => '星期一',
            'Tuesday' => '星期二',
            'Wednesday' => '星期三',
            'Thursday' => '星期四',
            'Friday' => '星期五',
            'Saturday' => '星期六',
        );
        \$week = static::dateTime(\$max)->format('l');
        return isset(\$map[\$week]) ? \$map[\$week] : \$week;
    }

    public static function monthName(\$max = 'now')
    {
        \$map = array(
            'January' => '一月',
            'February' => '二月',
            'March' => '三月',
            'April' => '四月',
            'May' => '五月',
            'June' => '六月',
            'July' => '七月',
            'August' => '八月',
            'September' => '九月',
            'October' => '十月',
            'November' => '十一月',
            'December' => '十二月',
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/zh_TW/DateTime.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\zh_TW;

class DateTime extends \\Faker\\Provider\\DateTime
{
    public static function amPm(\$max = 'now')
    {
        return static::dateTime(\$max)->format('a') === 'am' ? '上午' : '下午';
    }

    public static function dayOfWeek(\$max = 'now')
    {
        \$map = array(
            'Sunday' => '星期日',
            'Monday' => '星期一',
            'Tuesday' => '星期二',
            'Wednesday' => '星期三',
            'Thursday' => '星期四',
            'Friday' => '星期五',
            'Saturday' => '星期六',
        );
        \$week = static::dateTime(\$max)->format('l');
        return isset(\$map[\$week]) ? \$map[\$week] : \$week;
    }

    public static function monthName(\$max = 'now')
    {
        \$map = array(
            'January' => '一月',
            'February' => '二月',
            'March' => '三月',
            'April' => '四月',
            'May' => '五月',
            'June' => '六月',
            'July' => '七月',
            'August' => '八月',
            'September' => '九月',
            'October' => '十月',
            'November' => '十一月',
            'December' => '十二月',
        );
        \$month = static::dateTime(\$max)->format('F');
        return isset(\$map[\$month]) ? \$map[\$month] : \$month;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/zh_TW/DateTime.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/zh_TW/DateTime.php");
    }
}
