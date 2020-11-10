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

/* vendor/symfony/intl/Resources/data/regions/ru_UA.json */
class __TwigTemplate_d59e1dfc4e34eb9e9b298e01a54a87394fa2a8b94c32fb445697a4c351e30176 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/ru_UA.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/ru_UA.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AE\": \"Объединенные Арабские Эмираты\",
        \"BV\": \"О-в Буве\",
        \"CK\": \"О-ва Кука\",
        \"CX\": \"О-в Рождества\",
        \"HM\": \"О-ва Херд и Макдональд\",
        \"NF\": \"О-в Норфолк\",
        \"TL\": \"Тимор-Лесте\",
        \"UM\": \"Малые Тихоокеанские Отдаленные Острова США\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/ru_UA.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Version\": \"36\",
    \"Names\": {
        \"AE\": \"Объединенные Арабские Эмираты\",
        \"BV\": \"О-в Буве\",
        \"CK\": \"О-ва Кука\",
        \"CX\": \"О-в Рождества\",
        \"HM\": \"О-ва Херд и Макдональд\",
        \"NF\": \"О-в Норфолк\",
        \"TL\": \"Тимор-Лесте\",
        \"UM\": \"Малые Тихоокеанские Отдаленные Острова США\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/ru_UA.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/ru_UA.json");
    }
}
