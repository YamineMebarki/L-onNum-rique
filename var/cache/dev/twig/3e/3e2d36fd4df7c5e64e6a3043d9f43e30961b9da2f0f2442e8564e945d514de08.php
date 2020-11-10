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

/* vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Company.php */
class __TwigTemplate_cae5319e5933e3eefe4ea1297ad2168a5bb1ed400aff589c0e590707d8b6fe74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\th_TH;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$slogans = array(
        array(
            'เชื่อมต่อ', 'สรรสร้าง', 'เชื่อมโยง', 'ส่งเสริม', 'เปลี่ยน', 'ประสาน', 'พัฒนา',
        ),
        array(
            'ตลาด', 'อุตสาหกรรม', 'โครงสร้าง', 'เทคโนโลยี', 'เนื้อหา', 'สถาปัตยกรรม', 'ระบบ', 'ความคิด', 'ผู้ใช้', 'เครือข่าย', 'ประสบการณ์',
        ),
        array(
            'ที่แข็งแกร่ง', 'ที่มีคุณค่า', 'ที่สร้างสรรค์', '24 ชั่วโมง', 'อย่างสากล', 'สู่ผู้บริโภค', 'ที่น่าดึงดูด', 'อย่างมีประสิทธิภาพ', 'อย่างไร้รอยต่อ', 'อย่างไร้ที่ติ', 'ที่ปรับตัวได้', 'คุณภาพสากล', 'พร้อมใช้งาน', 'ที่มีความหมาย', 'ที่โปร่งใส', 'เพื่อการเปลี่ยนแปลง', 'สมัยใหม่', 'รูปแบบใหม่',
        ),
    );

    /**
     * @example 'เชื่อมต่อตลาดที่แข็งแกร่ง'
     */
    public function slogan()
    {
        \$result = array();

        foreach (static::\$slogans as &\$slogan) {
            \$result[] = static::randomElement(\$slogan);
        }

        return implode(\$result);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Company.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\th_TH;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$slogans = array(
        array(
            'เชื่อมต่อ', 'สรรสร้าง', 'เชื่อมโยง', 'ส่งเสริม', 'เปลี่ยน', 'ประสาน', 'พัฒนา',
        ),
        array(
            'ตลาด', 'อุตสาหกรรม', 'โครงสร้าง', 'เทคโนโลยี', 'เนื้อหา', 'สถาปัตยกรรม', 'ระบบ', 'ความคิด', 'ผู้ใช้', 'เครือข่าย', 'ประสบการณ์',
        ),
        array(
            'ที่แข็งแกร่ง', 'ที่มีคุณค่า', 'ที่สร้างสรรค์', '24 ชั่วโมง', 'อย่างสากล', 'สู่ผู้บริโภค', 'ที่น่าดึงดูด', 'อย่างมีประสิทธิภาพ', 'อย่างไร้รอยต่อ', 'อย่างไร้ที่ติ', 'ที่ปรับตัวได้', 'คุณภาพสากล', 'พร้อมใช้งาน', 'ที่มีความหมาย', 'ที่โปร่งใส', 'เพื่อการเปลี่ยนแปลง', 'สมัยใหม่', 'รูปแบบใหม่',
        ),
    );

    /**
     * @example 'เชื่อมต่อตลาดที่แข็งแกร่ง'
     */
    public function slogan()
    {
        \$result = array();

        foreach (static::\$slogans as &\$slogan) {
            \$result[] = static::randomElement(\$slogan);
        }

        return implode(\$result);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Company.php");
    }
}
