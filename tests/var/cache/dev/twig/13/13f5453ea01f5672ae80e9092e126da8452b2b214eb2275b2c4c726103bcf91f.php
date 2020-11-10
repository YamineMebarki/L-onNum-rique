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

/* vendor/symfony/intl/Resources/data/scripts/sd.json */
class __TwigTemplate_45d3a7db8adfa91d7bfecc076839224b7c139404a70d170a9398e4a9a282b16d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/sd.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/sd.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"عربي\",
        \"Armn\": \"عرماني\",
        \"Beng\": \"بنگلا\",
        \"Bopo\": \"بوپوموفو\",
        \"Brai\": \"بريلي\",
        \"Cyrl\": \"سيريلي\",
        \"Deva\": \"ديوناگري\",
        \"Ethi\": \"ايٿوپيائي\",
        \"Geor\": \"جيورجيائي\",
        \"Grek\": \"يوناني\",
        \"Gujr\": \"گجراتي\",
        \"Guru\": \"گرمکي\",
        \"Hanb\": \"بوپوموفو سان هين\",
        \"Hang\": \"هنگول\",
        \"Hani\": \"هين\",
        \"Hans\": \"سادي\",
        \"Hant\": \"روايتي\",
        \"Hebr\": \"عبراني\",
        \"Hira\": \"هراگنا\",
        \"Hrkt\": \"جاپاني لکت\",
        \"Ital\": \"قديم اطالوي\",
        \"Jamo\": \"جامو\",
        \"Java\": \"جاوانيز\",
        \"Jpan\": \"جاپاني\",
        \"Kana\": \"ڪٽاڪانا\",
        \"Khmr\": \"خمر\",
        \"Knda\": \"ڪناڊا\",
        \"Kore\": \"ڪوريائي\",
        \"Laoo\": \"لائو\",
        \"Latn\": \"لاطيني\",
        \"Mlym\": \"مليالم\",
        \"Mong\": \"منگولي\",
        \"Mult\": \"ملتاني\",
        \"Mymr\": \"ميانمر\",
        \"Orya\": \"اوڊيا\",
        \"Sarb\": \"قديم ڏاکڻي عربي\",
        \"Sinh\": \"سنهالا\",
        \"Taml\": \"تامل\",
        \"Telu\": \"تلگو\",
        \"Thaa\": \"ٿانا\",
        \"Thai\": \"ٿائي\",
        \"Tibt\": \"تبيتن\",
        \"Xpeo\": \"قديم فارسي\",
        \"Zmth\": \"رياضي جون نشانيون\",
        \"Zsye\": \"ايموجي\",
        \"Zsym\": \"نشانيون\",
        \"Zxxx\": \"اڻ لکيل\",
        \"Zyyy\": \"ڪامن\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/sd.json";
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
        \"Arab\": \"عربي\",
        \"Armn\": \"عرماني\",
        \"Beng\": \"بنگلا\",
        \"Bopo\": \"بوپوموفو\",
        \"Brai\": \"بريلي\",
        \"Cyrl\": \"سيريلي\",
        \"Deva\": \"ديوناگري\",
        \"Ethi\": \"ايٿوپيائي\",
        \"Geor\": \"جيورجيائي\",
        \"Grek\": \"يوناني\",
        \"Gujr\": \"گجراتي\",
        \"Guru\": \"گرمکي\",
        \"Hanb\": \"بوپوموفو سان هين\",
        \"Hang\": \"هنگول\",
        \"Hani\": \"هين\",
        \"Hans\": \"سادي\",
        \"Hant\": \"روايتي\",
        \"Hebr\": \"عبراني\",
        \"Hira\": \"هراگنا\",
        \"Hrkt\": \"جاپاني لکت\",
        \"Ital\": \"قديم اطالوي\",
        \"Jamo\": \"جامو\",
        \"Java\": \"جاوانيز\",
        \"Jpan\": \"جاپاني\",
        \"Kana\": \"ڪٽاڪانا\",
        \"Khmr\": \"خمر\",
        \"Knda\": \"ڪناڊا\",
        \"Kore\": \"ڪوريائي\",
        \"Laoo\": \"لائو\",
        \"Latn\": \"لاطيني\",
        \"Mlym\": \"مليالم\",
        \"Mong\": \"منگولي\",
        \"Mult\": \"ملتاني\",
        \"Mymr\": \"ميانمر\",
        \"Orya\": \"اوڊيا\",
        \"Sarb\": \"قديم ڏاکڻي عربي\",
        \"Sinh\": \"سنهالا\",
        \"Taml\": \"تامل\",
        \"Telu\": \"تلگو\",
        \"Thaa\": \"ٿانا\",
        \"Thai\": \"ٿائي\",
        \"Tibt\": \"تبيتن\",
        \"Xpeo\": \"قديم فارسي\",
        \"Zmth\": \"رياضي جون نشانيون\",
        \"Zsye\": \"ايموجي\",
        \"Zsym\": \"نشانيون\",
        \"Zxxx\": \"اڻ لکيل\",
        \"Zyyy\": \"ڪامن\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/sd.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/sd.json");
    }
}
