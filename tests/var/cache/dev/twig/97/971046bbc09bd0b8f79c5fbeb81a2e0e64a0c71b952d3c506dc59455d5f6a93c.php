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

/* vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Color.php */
class __TwigTemplate_b8e525f43b39cc4cc2f010bc1f963afdade2a5c74a7ecfc84f7610c0c7dc6ee5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Color.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Color.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\zh_CN;

class Color extends \\Faker\\Provider\\Color
{
    /**
     * @link https://zh.wikipedia.org/zh-cn/%E9%A2%9C%E8%89%B2%E5%88%97%E8%A1%A8
     */
    protected static \$safeColorNames = array(
        '黑色', '粟色', '绿色', '藏青', '橄榄色',
        '紫', '凫绿', '鲜绿色', '蓝色', '银色',
        '灰色', '黄色', '品红', '水色', '白色'
    );

    protected static \$allColorNames = array(
        '黑色', '昏灰', '灰色', '暗灰', '银色', '亮灰色',
        '庚斯博罗灰', '白烟色', '白色', '雪色', '铁灰色',
        '沙棕', '玫瑰褐', '亮珊瑚色', '印度红', '褐色',
        '耐火砖红', '栗色', '暗红', '鲜红', '红色', '柿子橙',
        '雾玫瑰色', '鲑红', '腥红', '蕃茄红', '暗鲑红',
        '珊瑚红', '橙红', '亮鲑红', '朱红', '赭黄', '热带橙',
        '驼色', '杏黄', '椰褐', '海贝色', '鞍褐', '巧克力色',
        '燃橙', '阳橙', '粉扑桃色', '沙褐', '古铜色', '亚麻色',
        '蜜橙', '秘鲁色', '乌贼墨色', '赭色', '陶坯黄', '橘色',
        '暗橙', '古董白', '日晒色', '硬木色', '杏仁白',
        '那瓦霍白', '万寿菊黄', '蕃木瓜色', '灰土色',
        '卡其色', '鹿皮鞋色', '旧蕾丝色', '小麦色', '桃色',
        '橙色', '花卉白', '金菊色', '暗金菊色', '咖啡色',
        '茉莉黄', '琥珀色', '玉米丝色', '铬黄', '金色',
        '柠檬绸色', '亮卡其色', '灰金菊色', '暗卡其色',
        '含羞草黄', '奶油色', '象牙色', '米黄色', '亮黄',
        '亮金菊黄', '香槟黄', '芥末黄', '月黄', '橄榄色',
        '鲜黄', '黄色', '苔藓绿', '亮柠檬绿', '橄榄军服绿',
        '黄绿', '暗橄榄绿', '苹果绿', '绿黄', '草绿', '草坪绿',
        '查特酒绿', '叶绿', '嫩绿', '明绿', '钴绿', '蜜瓜绿',
        '暗海绿', '亮绿', '灰绿', '常春藤绿', '森林绿',
        '柠檬绿', '暗绿', '绿色', '鲜绿色', '孔雀石绿',
        '薄荷绿', '青瓷绿', '碧绿', '绿松石绿', '铬绿', '苍色',
        '海绿', '中海绿', '薄荷奶油色', '春绿', '孔雀绿',
        '中春绿色', '中碧蓝色', '碧蓝色', '青蓝', '水蓝',
        '绿松石蓝', '绿松石色', '亮海绿', '中绿松石色',
        '亮青', '浅蓝', '灰绿松石色', '暗岩灰', '凫绿', '暗青',
        '青色', '水色', '暗绿松石色', '军服蓝', '孔雀蓝',
        '婴儿粉蓝', '浓蓝', '亮蓝', '灰蓝', '萨克斯蓝',
        '深天蓝', '天蓝', '亮天蓝', '水手蓝', '普鲁士蓝',
        '钢青色', '爱丽丝蓝', '岩灰', '亮岩灰', '道奇蓝',
        '矿蓝', '湛蓝', '韦奇伍德瓷蓝', '亮钢蓝', '钴蓝',
        '灰丁宁蓝', '矢车菊蓝', '鼠尾草蓝', '暗婴儿粉蓝',
        '蓝宝石色', '国际奇连蓝', '蔚蓝', '品蓝', '暗矿蓝',
        '极浓海蓝', '天青石蓝', '幽灵白', '薰衣草紫',
        '长春花色', '午夜蓝', '藏青', '暗蓝', '中蓝', '蓝色',
        '紫藤色', '暗岩蓝', '岩蓝', '中岩蓝', '木槿紫',
        '紫丁香色', '中紫红', '紫水晶色', '浅灰紫红',
        '缬草紫', '矿紫', '蓝紫', '紫罗兰色', '靛色', '暗兰紫',
        '暗紫', '三色堇紫', '锦葵紫', '优品紫红', '中兰紫',
        '淡紫丁香色', '蓟紫', '铁线莲紫', '梅红色', '亮紫',
        '紫色', '暗洋红', '洋红', '品红', '兰紫', '浅珍珠红',
        '陈玫红', '浅玫瑰红', '中青紫红', '洋玫瑰红',
        '玫瑰红', '红宝石色', '山茶红', '深粉红', '火鹤红',
        '浅珊瑚红', '暖粉红', '勃根第酒红', '尖晶石红',
        '胭脂红', '浅粉红', '枢机红', '薰衣草紫红', '灰紫红',
        '樱桃红', '浅鲑红', '绯红', '粉红', '亮粉红', '壳黄红',
        '茜红',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Color.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\zh_CN;

class Color extends \\Faker\\Provider\\Color
{
    /**
     * @link https://zh.wikipedia.org/zh-cn/%E9%A2%9C%E8%89%B2%E5%88%97%E8%A1%A8
     */
    protected static \$safeColorNames = array(
        '黑色', '粟色', '绿色', '藏青', '橄榄色',
        '紫', '凫绿', '鲜绿色', '蓝色', '银色',
        '灰色', '黄色', '品红', '水色', '白色'
    );

    protected static \$allColorNames = array(
        '黑色', '昏灰', '灰色', '暗灰', '银色', '亮灰色',
        '庚斯博罗灰', '白烟色', '白色', '雪色', '铁灰色',
        '沙棕', '玫瑰褐', '亮珊瑚色', '印度红', '褐色',
        '耐火砖红', '栗色', '暗红', '鲜红', '红色', '柿子橙',
        '雾玫瑰色', '鲑红', '腥红', '蕃茄红', '暗鲑红',
        '珊瑚红', '橙红', '亮鲑红', '朱红', '赭黄', '热带橙',
        '驼色', '杏黄', '椰褐', '海贝色', '鞍褐', '巧克力色',
        '燃橙', '阳橙', '粉扑桃色', '沙褐', '古铜色', '亚麻色',
        '蜜橙', '秘鲁色', '乌贼墨色', '赭色', '陶坯黄', '橘色',
        '暗橙', '古董白', '日晒色', '硬木色', '杏仁白',
        '那瓦霍白', '万寿菊黄', '蕃木瓜色', '灰土色',
        '卡其色', '鹿皮鞋色', '旧蕾丝色', '小麦色', '桃色',
        '橙色', '花卉白', '金菊色', '暗金菊色', '咖啡色',
        '茉莉黄', '琥珀色', '玉米丝色', '铬黄', '金色',
        '柠檬绸色', '亮卡其色', '灰金菊色', '暗卡其色',
        '含羞草黄', '奶油色', '象牙色', '米黄色', '亮黄',
        '亮金菊黄', '香槟黄', '芥末黄', '月黄', '橄榄色',
        '鲜黄', '黄色', '苔藓绿', '亮柠檬绿', '橄榄军服绿',
        '黄绿', '暗橄榄绿', '苹果绿', '绿黄', '草绿', '草坪绿',
        '查特酒绿', '叶绿', '嫩绿', '明绿', '钴绿', '蜜瓜绿',
        '暗海绿', '亮绿', '灰绿', '常春藤绿', '森林绿',
        '柠檬绿', '暗绿', '绿色', '鲜绿色', '孔雀石绿',
        '薄荷绿', '青瓷绿', '碧绿', '绿松石绿', '铬绿', '苍色',
        '海绿', '中海绿', '薄荷奶油色', '春绿', '孔雀绿',
        '中春绿色', '中碧蓝色', '碧蓝色', '青蓝', '水蓝',
        '绿松石蓝', '绿松石色', '亮海绿', '中绿松石色',
        '亮青', '浅蓝', '灰绿松石色', '暗岩灰', '凫绿', '暗青',
        '青色', '水色', '暗绿松石色', '军服蓝', '孔雀蓝',
        '婴儿粉蓝', '浓蓝', '亮蓝', '灰蓝', '萨克斯蓝',
        '深天蓝', '天蓝', '亮天蓝', '水手蓝', '普鲁士蓝',
        '钢青色', '爱丽丝蓝', '岩灰', '亮岩灰', '道奇蓝',
        '矿蓝', '湛蓝', '韦奇伍德瓷蓝', '亮钢蓝', '钴蓝',
        '灰丁宁蓝', '矢车菊蓝', '鼠尾草蓝', '暗婴儿粉蓝',
        '蓝宝石色', '国际奇连蓝', '蔚蓝', '品蓝', '暗矿蓝',
        '极浓海蓝', '天青石蓝', '幽灵白', '薰衣草紫',
        '长春花色', '午夜蓝', '藏青', '暗蓝', '中蓝', '蓝色',
        '紫藤色', '暗岩蓝', '岩蓝', '中岩蓝', '木槿紫',
        '紫丁香色', '中紫红', '紫水晶色', '浅灰紫红',
        '缬草紫', '矿紫', '蓝紫', '紫罗兰色', '靛色', '暗兰紫',
        '暗紫', '三色堇紫', '锦葵紫', '优品紫红', '中兰紫',
        '淡紫丁香色', '蓟紫', '铁线莲紫', '梅红色', '亮紫',
        '紫色', '暗洋红', '洋红', '品红', '兰紫', '浅珍珠红',
        '陈玫红', '浅玫瑰红', '中青紫红', '洋玫瑰红',
        '玫瑰红', '红宝石色', '山茶红', '深粉红', '火鹤红',
        '浅珊瑚红', '暖粉红', '勃根第酒红', '尖晶石红',
        '胭脂红', '浅粉红', '枢机红', '薰衣草紫红', '灰紫红',
        '樱桃红', '浅鲑红', '绯红', '粉红', '亮粉红', '壳黄红',
        '茜红',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Color.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Color.php");
    }
}
