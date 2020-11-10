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

/* vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Color.php */
class __TwigTemplate_750406267bba1af96455c7ac6468feda1b818a26b72aae36c733c05c06597bb5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Color.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Color.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ru_RU;

class Color extends \\Faker\\Provider\\Color
{
    protected static \$safeColorNames = array(
        'черный', 'темно-бордовый', 'зеленый', 'темно-синий', 'оливковый',
        'фиолетовый', 'зеленовато-голубой', 'синий', 'серебро',
        'серый', 'желтый', 'фуксия', 'цвет морской волны', 'белый'
    );

    protected static \$allColorNames = array(
        'Военно-воздушный синий', 'Синяя Элис', 'Ализариновый красный', 'Миндаль Крайола', 'Амарантовый', 'Янтарный',
        'Американская роза', 'Аметистовый', 'Матовый белый', 'Античный белый', 'Яблочно-зеленый', 'Спаржа',
        'Цвет морской волны', 'Аквамариновый', 'Армейский зелёный', 'Мышьяковый', 'Лазурный', 'Бежевый',
        'Бистр', 'Горькая радость', 'Чёрный', 'Белокурый', 'Синий', 'Вода пляжа Бонди', 'Латунный', 'Ярко-зелёный',
        'Сиена жжёная', 'Хаки', 'Кардинал', 'Морковный', 'Лазурный', 'Каштановый', 'Шоколадный', 'Коричный',
        'Кобальт синий', 'Кремовый', 'Циан', 'Индиго', 'Фуксия', 'Кирпичный', 'Льняной', 'Золотой', 'Зелёный',
        'Индиго', 'Нефритовый', 'Сиреневый', 'Охра', 'Панг', 'Берлинская лазурь', 'Красновато-коричневый',
        'Сангрия', 'Сепия', 'Болотный', 'Тициановый', 'Чертополох', 'Глициния', 'Вино', 'Циннвальдит',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Color.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ru_RU;

class Color extends \\Faker\\Provider\\Color
{
    protected static \$safeColorNames = array(
        'черный', 'темно-бордовый', 'зеленый', 'темно-синий', 'оливковый',
        'фиолетовый', 'зеленовато-голубой', 'синий', 'серебро',
        'серый', 'желтый', 'фуксия', 'цвет морской волны', 'белый'
    );

    protected static \$allColorNames = array(
        'Военно-воздушный синий', 'Синяя Элис', 'Ализариновый красный', 'Миндаль Крайола', 'Амарантовый', 'Янтарный',
        'Американская роза', 'Аметистовый', 'Матовый белый', 'Античный белый', 'Яблочно-зеленый', 'Спаржа',
        'Цвет морской волны', 'Аквамариновый', 'Армейский зелёный', 'Мышьяковый', 'Лазурный', 'Бежевый',
        'Бистр', 'Горькая радость', 'Чёрный', 'Белокурый', 'Синий', 'Вода пляжа Бонди', 'Латунный', 'Ярко-зелёный',
        'Сиена жжёная', 'Хаки', 'Кардинал', 'Морковный', 'Лазурный', 'Каштановый', 'Шоколадный', 'Коричный',
        'Кобальт синий', 'Кремовый', 'Циан', 'Индиго', 'Фуксия', 'Кирпичный', 'Льняной', 'Золотой', 'Зелёный',
        'Индиго', 'Нефритовый', 'Сиреневый', 'Охра', 'Панг', 'Берлинская лазурь', 'Красновато-коричневый',
        'Сангрия', 'Сепия', 'Болотный', 'Тициановый', 'Чертополох', 'Глициния', 'Вино', 'Циннвальдит',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Color.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ru_RU/Color.php");
    }
}
