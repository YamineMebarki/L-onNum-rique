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

/* vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Color.php */
class __TwigTemplate_344a2a515c418754fb9ed37ab38f0420b8c0444d9918473952e6701aa21b3fe1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Color.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Color.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\uk_UA;

class Color extends \\Faker\\Provider\\Color
{
    protected static \$safeColorNames = array(
        'чорний', 'темно-бордовий', 'зелений', 'темно-синій', 'оливковий',
        'фіолетовий', 'помаранчевий', 'синій', 'червоний',
        'сірий', 'жовтий', 'блакитний', 'морська хвиля', 'білий'
    );

    protected static \$allColorNames = array(
        'Бурштиновий', 'Абрикосовий', 'Зелений армійський', 'Спаржевий', 'Амарантовий', 'Янтарний',
        'Ніжно-блакитний', 'Аметистовий', 'Матовий білий', 'Античний білий', 'Смарагдовий', 'Спаржа',
        'Захисний синій', 'Жовто-зелений', 'Сіра спаржа', 'Індиго', 'Лавандний', 'Хакі', 'Нефритовий',
        'Лайм', 'Гірчичний', 'Чорний', 'Малахітовий', 'Синій', 'Вода пляжа Бонді', 'Латуний', 'Пурпурний',
        'Орхідея', 'Блідо-брунатний', 'Зелена сосна', 'Гарбуз', 'Лазурний', 'Каштановий', 'Шоколадний', 'Умбра',
        'Кобальтовий', 'Кремовий', 'Циан', 'Іржавий', 'Фуксия', 'Шафрановий', 'Лляний', 'Золотий', 'Зелений',
        'Лимонний', 'Ліловий', 'Перський синій', 'Охра', 'Панг', 'Сливовий', 'Фіолетово-червоний', 'Сірий',
        'Багряний', 'Срібний', 'Болотний', 'Пшеничний', 'Пастельно-зелений', 'Умбра', 'Лососевий', 'Синя сталь'
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Color.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\uk_UA;

class Color extends \\Faker\\Provider\\Color
{
    protected static \$safeColorNames = array(
        'чорний', 'темно-бордовий', 'зелений', 'темно-синій', 'оливковий',
        'фіолетовий', 'помаранчевий', 'синій', 'червоний',
        'сірий', 'жовтий', 'блакитний', 'морська хвиля', 'білий'
    );

    protected static \$allColorNames = array(
        'Бурштиновий', 'Абрикосовий', 'Зелений армійський', 'Спаржевий', 'Амарантовий', 'Янтарний',
        'Ніжно-блакитний', 'Аметистовий', 'Матовий білий', 'Античний білий', 'Смарагдовий', 'Спаржа',
        'Захисний синій', 'Жовто-зелений', 'Сіра спаржа', 'Індиго', 'Лавандний', 'Хакі', 'Нефритовий',
        'Лайм', 'Гірчичний', 'Чорний', 'Малахітовий', 'Синій', 'Вода пляжа Бонді', 'Латуний', 'Пурпурний',
        'Орхідея', 'Блідо-брунатний', 'Зелена сосна', 'Гарбуз', 'Лазурний', 'Каштановий', 'Шоколадний', 'Умбра',
        'Кобальтовий', 'Кремовий', 'Циан', 'Іржавий', 'Фуксия', 'Шафрановий', 'Лляний', 'Золотий', 'Зелений',
        'Лимонний', 'Ліловий', 'Перський синій', 'Охра', 'Панг', 'Сливовий', 'Фіолетово-червоний', 'Сірий',
        'Багряний', 'Срібний', 'Болотний', 'Пшеничний', 'Пастельно-зелений', 'Умбра', 'Лососевий', 'Синя сталь'
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Color.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/uk_UA/Color.php");
    }
}
