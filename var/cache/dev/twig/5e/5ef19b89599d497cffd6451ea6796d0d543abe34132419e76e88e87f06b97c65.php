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

/* vendor/symfony/intl/Resources/data/scripts/hy.json */
class __TwigTemplate_7ff8d31a54fdb655d2c1543b3f59662c258c867b4b79fe03a310b17a465bfa36 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/hy.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/hy.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"արաբական\",
        \"Armn\": \"հայկական\",
        \"Beng\": \"բենգալական\",
        \"Bopo\": \"բոպոմոֆո\",
        \"Brai\": \"բրայլի\",
        \"Cyrl\": \"կյուրեղագիր\",
        \"Deva\": \"դեւանագարի\",
        \"Ethi\": \"եթովպական\",
        \"Geor\": \"վրացական\",
        \"Grek\": \"հունական\",
        \"Gujr\": \"գուջարաթի\",
        \"Guru\": \"գուրմուխի\",
        \"Hanb\": \"հանբ\",
        \"Hang\": \"հանգըլ\",
        \"Hani\": \"չինական\",
        \"Hans\": \"պարզեցված չինական\",
        \"Hant\": \"ավանդական չինական\",
        \"Hebr\": \"եբրայական\",
        \"Hira\": \"հիրագանա\",
        \"Hrkt\": \"ճապոնական վանկագիր\",
        \"Jamo\": \"ջամո\",
        \"Jpan\": \"ճապոնական\",
        \"Kana\": \"կատականա\",
        \"Khmr\": \"քմերական\",
        \"Knda\": \"կաննադա\",
        \"Kore\": \"կորեական\",
        \"Laoo\": \"լաոսական\",
        \"Latn\": \"լատինական\",
        \"Mlym\": \"մալայալամ\",
        \"Mong\": \"մոնղոլական\",
        \"Mymr\": \"մյանմարական\",
        \"Orya\": \"օրիյա\",
        \"Sinh\": \"սինհալական\",
        \"Taml\": \"թամիլական\",
        \"Telu\": \"թելուգու\",
        \"Thaa\": \"թաանա\",
        \"Thai\": \"թայական\",
        \"Tibt\": \"տիբեթական\",
        \"Zmth\": \"մաթեմատիկական նշաններ\",
        \"Zsye\": \"էմոձի\",
        \"Zsym\": \"նշաններ\",
        \"Zxxx\": \"չգրված\",
        \"Zyyy\": \"ընդհանուր\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/hy.json";
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
        \"Arab\": \"արաբական\",
        \"Armn\": \"հայկական\",
        \"Beng\": \"բենգալական\",
        \"Bopo\": \"բոպոմոֆո\",
        \"Brai\": \"բրայլի\",
        \"Cyrl\": \"կյուրեղագիր\",
        \"Deva\": \"դեւանագարի\",
        \"Ethi\": \"եթովպական\",
        \"Geor\": \"վրացական\",
        \"Grek\": \"հունական\",
        \"Gujr\": \"գուջարաթի\",
        \"Guru\": \"գուրմուխի\",
        \"Hanb\": \"հանբ\",
        \"Hang\": \"հանգըլ\",
        \"Hani\": \"չինական\",
        \"Hans\": \"պարզեցված չինական\",
        \"Hant\": \"ավանդական չինական\",
        \"Hebr\": \"եբրայական\",
        \"Hira\": \"հիրագանա\",
        \"Hrkt\": \"ճապոնական վանկագիր\",
        \"Jamo\": \"ջամո\",
        \"Jpan\": \"ճապոնական\",
        \"Kana\": \"կատականա\",
        \"Khmr\": \"քմերական\",
        \"Knda\": \"կաննադա\",
        \"Kore\": \"կորեական\",
        \"Laoo\": \"լաոսական\",
        \"Latn\": \"լատինական\",
        \"Mlym\": \"մալայալամ\",
        \"Mong\": \"մոնղոլական\",
        \"Mymr\": \"մյանմարական\",
        \"Orya\": \"օրիյա\",
        \"Sinh\": \"սինհալական\",
        \"Taml\": \"թամիլական\",
        \"Telu\": \"թելուգու\",
        \"Thaa\": \"թաանա\",
        \"Thai\": \"թայական\",
        \"Tibt\": \"տիբեթական\",
        \"Zmth\": \"մաթեմատիկական նշաններ\",
        \"Zsye\": \"էմոձի\",
        \"Zsym\": \"նշաններ\",
        \"Zxxx\": \"չգրված\",
        \"Zyyy\": \"ընդհանուր\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/hy.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/hy.json");
    }
}
