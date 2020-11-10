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

/* vendor/symfony/intl/Resources/data/scripts/be.json */
class __TwigTemplate_eed4ecad14f9d62bbdb4fada7699da675af94debe6c2a277a0744b50f02a7584 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/be.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/be.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"арабскае\",
        \"Armn\": \"армянскае\",
        \"Beng\": \"бенгальскае\",
        \"Bopo\": \"бапамофа\",
        \"Brai\": \"шрыфт Брайля\",
        \"Cyrl\": \"кірыліца\",
        \"Deva\": \"дэванагары\",
        \"Ethi\": \"эфіопскае\",
        \"Geor\": \"грузінскае\",
        \"Grek\": \"грэчаскае\",
        \"Gujr\": \"гуджараці\",
        \"Guru\": \"гурмукхі\",
        \"Hanb\": \"хан з бапамофа\",
        \"Hang\": \"хангыль\",
        \"Hani\": \"хан\",
        \"Hans\": \"спрошчанае кітайскае\",
        \"Hant\": \"традыцыйнае кітайскае\",
        \"Hebr\": \"яўрэйскае\",
        \"Hira\": \"хірагана\",
        \"Hrkt\": \"японскія складовыя пісьмы\",
        \"Jamo\": \"чамо\",
        \"Jpan\": \"японскае\",
        \"Kana\": \"катакана\",
        \"Khmr\": \"кхмерскае\",
        \"Knda\": \"канада\",
        \"Kore\": \"карэйскае\",
        \"Laoo\": \"лаоскае\",
        \"Latn\": \"лацініца\",
        \"Mlym\": \"малаялам\",
        \"Mong\": \"старамангольскае\",
        \"Mymr\": \"бірманскае\",
        \"Orya\": \"орыя\",
        \"Sinh\": \"сінгальскае\",
        \"Taml\": \"тамільскае\",
        \"Telu\": \"тэлугу\",
        \"Thaa\": \"тана\",
        \"Thai\": \"тайскае\",
        \"Tibt\": \"тыбецкае\",
        \"Zmth\": \"матэматычныя знакі\",
        \"Zsye\": \"эмодзі\",
        \"Zsym\": \"сімвалы\",
        \"Zxxx\": \"беспісьменная\",
        \"Zyyy\": \"агульнае\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/be.json";
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
        \"Arab\": \"арабскае\",
        \"Armn\": \"армянскае\",
        \"Beng\": \"бенгальскае\",
        \"Bopo\": \"бапамофа\",
        \"Brai\": \"шрыфт Брайля\",
        \"Cyrl\": \"кірыліца\",
        \"Deva\": \"дэванагары\",
        \"Ethi\": \"эфіопскае\",
        \"Geor\": \"грузінскае\",
        \"Grek\": \"грэчаскае\",
        \"Gujr\": \"гуджараці\",
        \"Guru\": \"гурмукхі\",
        \"Hanb\": \"хан з бапамофа\",
        \"Hang\": \"хангыль\",
        \"Hani\": \"хан\",
        \"Hans\": \"спрошчанае кітайскае\",
        \"Hant\": \"традыцыйнае кітайскае\",
        \"Hebr\": \"яўрэйскае\",
        \"Hira\": \"хірагана\",
        \"Hrkt\": \"японскія складовыя пісьмы\",
        \"Jamo\": \"чамо\",
        \"Jpan\": \"японскае\",
        \"Kana\": \"катакана\",
        \"Khmr\": \"кхмерскае\",
        \"Knda\": \"канада\",
        \"Kore\": \"карэйскае\",
        \"Laoo\": \"лаоскае\",
        \"Latn\": \"лацініца\",
        \"Mlym\": \"малаялам\",
        \"Mong\": \"старамангольскае\",
        \"Mymr\": \"бірманскае\",
        \"Orya\": \"орыя\",
        \"Sinh\": \"сінгальскае\",
        \"Taml\": \"тамільскае\",
        \"Telu\": \"тэлугу\",
        \"Thaa\": \"тана\",
        \"Thai\": \"тайскае\",
        \"Tibt\": \"тыбецкае\",
        \"Zmth\": \"матэматычныя знакі\",
        \"Zsye\": \"эмодзі\",
        \"Zsym\": \"сімвалы\",
        \"Zxxx\": \"беспісьменная\",
        \"Zyyy\": \"агульнае\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/be.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/be.json");
    }
}
