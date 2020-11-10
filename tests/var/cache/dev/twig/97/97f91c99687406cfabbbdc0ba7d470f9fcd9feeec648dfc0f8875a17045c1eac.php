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

/* vendor/symfony/intl/Resources/data/scripts/pa.json */
class __TwigTemplate_5f648202a87abb105877cebe50e8b6312d95390c65284d82f9c80df5c1940edc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/pa.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/pa.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"ਅਰਬੀ\",
        \"Armn\": \"ਅਰਮੀਨੀਆਈ\",
        \"Beng\": \"ਬੰਗਾਲੀ\",
        \"Bopo\": \"ਬੋਪੋਮੋਫੋ\",
        \"Brai\": \"ਬਰੇਲ\",
        \"Cyrl\": \"ਸਿਰੀਲਿਕ\",
        \"Deva\": \"ਦੇਵਨਾਗਰੀ\",
        \"Ethi\": \"ਇਥੀਓਪਿਕ\",
        \"Geor\": \"ਜਾਰਜੀਆਈ\",
        \"Grek\": \"ਯੂਨਾਨੀ\",
        \"Gujr\": \"ਗੁਜਰਾਤੀ\",
        \"Guru\": \"ਗੁਰਮੁਖੀ\",
        \"Hanb\": \"ਹਾਂਬ\",
        \"Hang\": \"ਹੰਗੁਲ\",
        \"Hani\": \"ਹਾਨ\",
        \"Hans\": \"ਸਰਲ\",
        \"Hant\": \"ਰਵਾਇਤੀ\",
        \"Hebr\": \"ਹਿਬਰੂ\",
        \"Hira\": \"ਹਿਰਾਗਾਨਾ\",
        \"Hrkt\": \"ਜਾਪਾਨੀ ਸਿਲੇਬਰੀਜ਼\",
        \"Jamo\": \"ਜਾਮੋ\",
        \"Jpan\": \"ਜਪਾਨੀ\",
        \"Kana\": \"ਕਾਟਾਕਾਨਾ\",
        \"Khmr\": \"ਖਮੇਰ\",
        \"Knda\": \"ਕੰਨੜ\",
        \"Kore\": \"ਕੋਰੀਆਈ\",
        \"Laoo\": \"ਲਾਓ\",
        \"Latn\": \"ਲਾਤੀਨੀ\",
        \"Mlym\": \"ਮਲਿਆਲਮ\",
        \"Mong\": \"ਮੰਗੋਲੀਅਨ\",
        \"Mymr\": \"ਮਿਆਂਮਾਰ\",
        \"Orya\": \"ਉੜੀਆ\",
        \"Sinh\": \"ਸਿੰਹਾਲਾ\",
        \"Taml\": \"ਤਮਿਲ\",
        \"Telu\": \"ਤੇਲਗੂ\",
        \"Thaa\": \"ਥਾਨਾ\",
        \"Thai\": \"ਥਾਈ\",
        \"Tibt\": \"ਤਿੱਬਤੀ\",
        \"Zmth\": \"ਗਣਿਤ ਚਿੰਨ੍ਹ-ਲਿਪੀ\",
        \"Zsye\": \"ਇਮੋਜੀ\",
        \"Zsym\": \"ਚਿੰਨ੍ਹ\",
        \"Zxxx\": \"ਅਲਿਖਤ\",
        \"Zyyy\": \"ਸਧਾਰਨ\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/pa.json";
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
        \"Arab\": \"ਅਰਬੀ\",
        \"Armn\": \"ਅਰਮੀਨੀਆਈ\",
        \"Beng\": \"ਬੰਗਾਲੀ\",
        \"Bopo\": \"ਬੋਪੋਮੋਫੋ\",
        \"Brai\": \"ਬਰੇਲ\",
        \"Cyrl\": \"ਸਿਰੀਲਿਕ\",
        \"Deva\": \"ਦੇਵਨਾਗਰੀ\",
        \"Ethi\": \"ਇਥੀਓਪਿਕ\",
        \"Geor\": \"ਜਾਰਜੀਆਈ\",
        \"Grek\": \"ਯੂਨਾਨੀ\",
        \"Gujr\": \"ਗੁਜਰਾਤੀ\",
        \"Guru\": \"ਗੁਰਮੁਖੀ\",
        \"Hanb\": \"ਹਾਂਬ\",
        \"Hang\": \"ਹੰਗੁਲ\",
        \"Hani\": \"ਹਾਨ\",
        \"Hans\": \"ਸਰਲ\",
        \"Hant\": \"ਰਵਾਇਤੀ\",
        \"Hebr\": \"ਹਿਬਰੂ\",
        \"Hira\": \"ਹਿਰਾਗਾਨਾ\",
        \"Hrkt\": \"ਜਾਪਾਨੀ ਸਿਲੇਬਰੀਜ਼\",
        \"Jamo\": \"ਜਾਮੋ\",
        \"Jpan\": \"ਜਪਾਨੀ\",
        \"Kana\": \"ਕਾਟਾਕਾਨਾ\",
        \"Khmr\": \"ਖਮੇਰ\",
        \"Knda\": \"ਕੰਨੜ\",
        \"Kore\": \"ਕੋਰੀਆਈ\",
        \"Laoo\": \"ਲਾਓ\",
        \"Latn\": \"ਲਾਤੀਨੀ\",
        \"Mlym\": \"ਮਲਿਆਲਮ\",
        \"Mong\": \"ਮੰਗੋਲੀਅਨ\",
        \"Mymr\": \"ਮਿਆਂਮਾਰ\",
        \"Orya\": \"ਉੜੀਆ\",
        \"Sinh\": \"ਸਿੰਹਾਲਾ\",
        \"Taml\": \"ਤਮਿਲ\",
        \"Telu\": \"ਤੇਲਗੂ\",
        \"Thaa\": \"ਥਾਨਾ\",
        \"Thai\": \"ਥਾਈ\",
        \"Tibt\": \"ਤਿੱਬਤੀ\",
        \"Zmth\": \"ਗਣਿਤ ਚਿੰਨ੍ਹ-ਲਿਪੀ\",
        \"Zsye\": \"ਇਮੋਜੀ\",
        \"Zsym\": \"ਚਿੰਨ੍ਹ\",
        \"Zxxx\": \"ਅਲਿਖਤ\",
        \"Zyyy\": \"ਸਧਾਰਨ\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/pa.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/pa.json");
    }
}
