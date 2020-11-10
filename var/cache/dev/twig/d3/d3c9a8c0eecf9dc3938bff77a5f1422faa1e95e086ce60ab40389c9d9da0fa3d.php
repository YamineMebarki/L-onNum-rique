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

/* vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Color.php */
class __TwigTemplate_636dc6f15b52bdd87ad3ce694c8c68b1aba67bd3ae839c98fb6b4e8ad5f87a0c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Color.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Color.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\vi_VN;

class Color extends \\Faker\\Provider\\Color
{
    protected static \$safeColorNames = array(
        'đen', 'xanh', 'ô liu',
        'tím ', 'vôi', 'xanh', 'bạc',
        'xám', 'vàng', 'trắng',
    );

    protected static \$allColorNames = array(
        'Hổ phách', 'Ametit', 'Xanh berin',
        'Xanh da trời', 'Be', 'Nâu sẫm',
        'Đen', 'Xanh lam', 'Nâu',
        'Da bò', 'Cam cháy', 'Hồng y',
        'Đỏ yên chi', 'Men ngọc', 'Anh đào',
        'Xanh hoàng hôn', 'Xanh nõn chuối', 'Xanh cô ban',
        'Đồng', 'San hô', 'Kem',
        'Đỏ thắm', 'Xanh lơ', 'Lục bảo',
        'Vàng kim loại', 'Xám', 'Xanh lá cây',
        'Vòi voi', 'Chàm', 'Ngọc thạch',
        'Kaki', 'Oải hương', 'Vàng chanh',
        'Hồng sẫm', 'Hạt dẻ', 'Cẩm quỳ',
        'Hoa cà', 'Lam sẫm', 'Ochre',
        'Ô liu', 'Da cam', 'Lan tím',
        'Lòng đào', 'Dừa cạn', 'Hồng',
        'Mận', 'Xanh thủy tinh', 'Hồng đất',
        'Tía', 'Đỏ', 'Cá hồi',
        'Đỏ tươi', 'Nâu đen',
        'Bạc', 'Nâu tanin', 'Mòng két',
        'Xanh Thổ', 'Đỏ son', 'Tím',
        'Xanh crôm', 'Trắng', 'Vàng',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Color.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\vi_VN;

class Color extends \\Faker\\Provider\\Color
{
    protected static \$safeColorNames = array(
        'đen', 'xanh', 'ô liu',
        'tím ', 'vôi', 'xanh', 'bạc',
        'xám', 'vàng', 'trắng',
    );

    protected static \$allColorNames = array(
        'Hổ phách', 'Ametit', 'Xanh berin',
        'Xanh da trời', 'Be', 'Nâu sẫm',
        'Đen', 'Xanh lam', 'Nâu',
        'Da bò', 'Cam cháy', 'Hồng y',
        'Đỏ yên chi', 'Men ngọc', 'Anh đào',
        'Xanh hoàng hôn', 'Xanh nõn chuối', 'Xanh cô ban',
        'Đồng', 'San hô', 'Kem',
        'Đỏ thắm', 'Xanh lơ', 'Lục bảo',
        'Vàng kim loại', 'Xám', 'Xanh lá cây',
        'Vòi voi', 'Chàm', 'Ngọc thạch',
        'Kaki', 'Oải hương', 'Vàng chanh',
        'Hồng sẫm', 'Hạt dẻ', 'Cẩm quỳ',
        'Hoa cà', 'Lam sẫm', 'Ochre',
        'Ô liu', 'Da cam', 'Lan tím',
        'Lòng đào', 'Dừa cạn', 'Hồng',
        'Mận', 'Xanh thủy tinh', 'Hồng đất',
        'Tía', 'Đỏ', 'Cá hồi',
        'Đỏ tươi', 'Nâu đen',
        'Bạc', 'Nâu tanin', 'Mòng két',
        'Xanh Thổ', 'Đỏ son', 'Tím',
        'Xanh crôm', 'Trắng', 'Vàng',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Color.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Color.php");
    }
}
