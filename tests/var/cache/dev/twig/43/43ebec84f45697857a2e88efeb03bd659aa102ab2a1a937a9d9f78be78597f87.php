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

/* vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Payment.php */
class __TwigTemplate_6421540fc54088c38bb52f4b06d7dc6438eadce82596143897e1a8683ca86d5b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Payment.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Payment.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\th_TH;

class Payment extends \\Faker\\Provider\\Payment
{
    /**
     * @var array Thai bank names
     * @link https://th.wikipedia.org/wiki/%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%98%E0%B8%99%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B9%84%E0%B8%97%E0%B8%A2
     */
    protected static \$banks = array(
        'ธนาคารแห่งประเทศไทย',
        'ธนาคารกรุงเทพ',
        'ธนาคารกรุงศรีอยุธยา',
        'ธนาคารกสิกรไทย',
        'ธนาคารเกียรตินาคิน',
        'ธนาคารซีไอเอ็มบีไทย',
        'ธนาคารทหารไทย',
        'ธนาคารทิสโก้',
        'ธนาคารไทยพาณิชย์',
        'ธนาคารไทยเครดิตเพื่อรายย่อย',
        'ธนาคารธนชาต',
        'ธนาคารยูโอบี',
        'ธนาคารแลนด์ แอนด์ เฮาส์',
        'ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย)',
        'ธนาคารกรุงไทย',
        'ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย',
        'ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร',
        'ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย',
        'ธนาคารออมสิน',
        'ธนาคารอาคารสงเคราะห์',
        'ธนาคารอิสลามแห่งประเทศไทย',
        'ธนาคารไอซีบีซี (ไทย)',
    );

    /**
     * @example 'ธนาคารกสิกรไทย'
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Payment.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\th_TH;

class Payment extends \\Faker\\Provider\\Payment
{
    /**
     * @var array Thai bank names
     * @link https://th.wikipedia.org/wiki/%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%98%E0%B8%99%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B9%84%E0%B8%97%E0%B8%A2
     */
    protected static \$banks = array(
        'ธนาคารแห่งประเทศไทย',
        'ธนาคารกรุงเทพ',
        'ธนาคารกรุงศรีอยุธยา',
        'ธนาคารกสิกรไทย',
        'ธนาคารเกียรตินาคิน',
        'ธนาคารซีไอเอ็มบีไทย',
        'ธนาคารทหารไทย',
        'ธนาคารทิสโก้',
        'ธนาคารไทยพาณิชย์',
        'ธนาคารไทยเครดิตเพื่อรายย่อย',
        'ธนาคารธนชาต',
        'ธนาคารยูโอบี',
        'ธนาคารแลนด์ แอนด์ เฮาส์',
        'ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย)',
        'ธนาคารกรุงไทย',
        'ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย',
        'ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร',
        'ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย',
        'ธนาคารออมสิน',
        'ธนาคารอาคารสงเคราะห์',
        'ธนาคารอิสลามแห่งประเทศไทย',
        'ธนาคารไอซีบีซี (ไทย)',
    );

    /**
     * @example 'ธนาคารกสิกรไทย'
     */
    public static function bank()
    {
        return static::randomElement(static::\$banks);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Payment.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Payment.php");
    }
}
