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

/* vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Payment.php */
class __TwigTemplate_e3147e4efba2aa43f335b1db86c6b82bc00a508dad2c6d6509524fd829f58288 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Payment.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Payment.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\zh_CN;

class Payment extends \\Faker\\Provider\\Payment
{
    /**
     * @see https://zh.wikipedia.org/wiki/%E4%B8%AD%E5%9B%BD%E9%93%B6%E8%A1%8C%E5%88%97%E8%A1%A8
     * @var array
     */
    protected static \$banks = array(
        '渤海银行',
        '广发银行',
        '国家开发银行',
        '恒丰银行',
        '华夏银行',
        '交通银行',
        '平安银行',
        '上海浦东发展银行',
        '兴业银行',
        '招商银行',
        '浙商银行',
        '中国工商银行',
        '中国光大银行',
        '中国建设银行',
        '中国民生银行',
        '中国农业银行',
        '中国银行',
        '中国邮政储蓄银行',
        '中信银行',
    );

    /**
     * @example '中国建设银行'
     * @return string
     */
    public static function bank()
    {
        return static::randomElement(static::\$banks);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Payment.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\zh_CN;

class Payment extends \\Faker\\Provider\\Payment
{
    /**
     * @see https://zh.wikipedia.org/wiki/%E4%B8%AD%E5%9B%BD%E9%93%B6%E8%A1%8C%E5%88%97%E8%A1%A8
     * @var array
     */
    protected static \$banks = array(
        '渤海银行',
        '广发银行',
        '国家开发银行',
        '恒丰银行',
        '华夏银行',
        '交通银行',
        '平安银行',
        '上海浦东发展银行',
        '兴业银行',
        '招商银行',
        '浙商银行',
        '中国工商银行',
        '中国光大银行',
        '中国建设银行',
        '中国民生银行',
        '中国农业银行',
        '中国银行',
        '中国邮政储蓄银行',
        '中信银行',
    );

    /**
     * @example '中国建设银行'
     * @return string
     */
    public static function bank()
    {
        return static::randomElement(static::\$banks);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Payment.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Payment.php");
    }
}
