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

/* vendor/symfony/intl/Resources/data/scripts/my.json */
class __TwigTemplate_223c7695c36612c3813ff9ae0830c3fffe9109393d037efb14a54c08472c6dac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/my.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/my.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"အာရေဗျ\",
        \"Armn\": \"အာမေးနီးယား\",
        \"Beng\": \"ဘင်္ဂါလီ\",
        \"Bopo\": \"ဘိုပို\",
        \"Brah\": \"ဗွဟ်မမီ\",
        \"Brai\": \"ဘရေ\",
        \"Cyrl\": \"စစ်ရိလစ်\",
        \"Deva\": \"ဒီဗနာဂရီ\",
        \"Ethi\": \"အီသီယိုးပီးယား\",
        \"Geor\": \"ဂျော်ဂျီယာ\",
        \"Grek\": \"ဂရိ\",
        \"Gujr\": \"ဂုဂျာရသီ\",
        \"Guru\": \"ဂူရူ\",
        \"Hanb\": \"ဟန်ဘ်\",
        \"Hang\": \"ဟန်ဂူးလ်\",
        \"Hani\": \"ဟန်\",
        \"Hans\": \"ရိုးရှင်း\",
        \"Hant\": \"ရိုးရာ\",
        \"Hebr\": \"ဟီဗရူး\",
        \"Hira\": \"ဟီရဂန\",
        \"Hrkt\": \"ဂျပန် အက္ခရာ\",
        \"Jamo\": \"ဂျမို\",
        \"Java\": \"ဂျာဗားနီးစ်\",
        \"Jpan\": \"ဂျပန်\",
        \"Kali\": \"ကယားလီ\",
        \"Kana\": \"ခတခန\",
        \"Khmr\": \"ခမာ\",
        \"Knda\": \"ခန်နာဒါ\",
        \"Kore\": \"ကိုရီးယား\",
        \"Laoo\": \"လာအို\",
        \"Latn\": \"လက်တင်\",
        \"Mlym\": \"မလေယာလမ်\",
        \"Mong\": \"မွန်ဂိုလီးယား\",
        \"Mymr\": \"မြန်မာ\",
        \"Orya\": \"အိုရာ\",
        \"Sinh\": \"ဆင်ဟာလ\",
        \"Tale\": \"တိုင်လီ\",
        \"Taml\": \"တမီးလ်\",
        \"Telu\": \"တီလု\",
        \"Tglg\": \"တဂလော့ဂ်\",
        \"Thaa\": \"သာအ်\",
        \"Thai\": \"ထိုင်း\",
        \"Tibt\": \"တိဘက်\",
        \"Visp\": \"မြင်နိုင်သော စကား\",
        \"Xpeo\": \"ပါရှန် အဟောင်း\",
        \"Yiii\": \"ရီ\",
        \"Zmth\": \"ဂဏန်းသင်္ချာ\",
        \"Zsye\": \"အီမိုဂျီ\",
        \"Zsym\": \"သင်္ကေတ\",
        \"Zxxx\": \"ထုံးတမ်းသဖွယ်လိုက်နာလျက်ရှိသော\",
        \"Zyyy\": \"အများနှင့်သက်ဆိုင်သော\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/my.json";
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
        \"Arab\": \"အာရေဗျ\",
        \"Armn\": \"အာမေးနီးယား\",
        \"Beng\": \"ဘင်္ဂါလီ\",
        \"Bopo\": \"ဘိုပို\",
        \"Brah\": \"ဗွဟ်မမီ\",
        \"Brai\": \"ဘရေ\",
        \"Cyrl\": \"စစ်ရိလစ်\",
        \"Deva\": \"ဒီဗနာဂရီ\",
        \"Ethi\": \"အီသီယိုးပီးယား\",
        \"Geor\": \"ဂျော်ဂျီယာ\",
        \"Grek\": \"ဂရိ\",
        \"Gujr\": \"ဂုဂျာရသီ\",
        \"Guru\": \"ဂူရူ\",
        \"Hanb\": \"ဟန်ဘ်\",
        \"Hang\": \"ဟန်ဂူးလ်\",
        \"Hani\": \"ဟန်\",
        \"Hans\": \"ရိုးရှင်း\",
        \"Hant\": \"ရိုးရာ\",
        \"Hebr\": \"ဟီဗရူး\",
        \"Hira\": \"ဟီရဂန\",
        \"Hrkt\": \"ဂျပန် အက္ခရာ\",
        \"Jamo\": \"ဂျမို\",
        \"Java\": \"ဂျာဗားနီးစ်\",
        \"Jpan\": \"ဂျပန်\",
        \"Kali\": \"ကယားလီ\",
        \"Kana\": \"ခတခန\",
        \"Khmr\": \"ခမာ\",
        \"Knda\": \"ခန်နာဒါ\",
        \"Kore\": \"ကိုရီးယား\",
        \"Laoo\": \"လာအို\",
        \"Latn\": \"လက်တင်\",
        \"Mlym\": \"မလေယာလမ်\",
        \"Mong\": \"မွန်ဂိုလီးယား\",
        \"Mymr\": \"မြန်မာ\",
        \"Orya\": \"အိုရာ\",
        \"Sinh\": \"ဆင်ဟာလ\",
        \"Tale\": \"တိုင်လီ\",
        \"Taml\": \"တမီးလ်\",
        \"Telu\": \"တီလု\",
        \"Tglg\": \"တဂလော့ဂ်\",
        \"Thaa\": \"သာအ်\",
        \"Thai\": \"ထိုင်း\",
        \"Tibt\": \"တိဘက်\",
        \"Visp\": \"မြင်နိုင်သော စကား\",
        \"Xpeo\": \"ပါရှန် အဟောင်း\",
        \"Yiii\": \"ရီ\",
        \"Zmth\": \"ဂဏန်းသင်္ချာ\",
        \"Zsye\": \"အီမိုဂျီ\",
        \"Zsym\": \"သင်္ကေတ\",
        \"Zxxx\": \"ထုံးတမ်းသဖွယ်လိုက်နာလျက်ရှိသော\",
        \"Zyyy\": \"အများနှင့်သက်ဆိုင်သော\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/my.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/my.json");
    }
}
