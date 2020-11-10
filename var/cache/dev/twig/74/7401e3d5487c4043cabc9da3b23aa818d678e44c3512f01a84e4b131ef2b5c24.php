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

/* vendor/symfony/intl/Resources/data/scripts/ml.json */
class __TwigTemplate_af33692e44a8021e702bc01b1c3e653ee824cc2c3551b28777cf92a57ad0f45b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ml.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ml.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"അറബിക്\",
        \"Armi\": \"അർമി\",
        \"Armn\": \"അർമേനിയൻ\",
        \"Avst\": \"അവെസ്ഥൻ\",
        \"Bali\": \"ബാലിനീസ്\",
        \"Batk\": \"ബട്ടക്\",
        \"Beng\": \"ബംഗാളി\",
        \"Blis\": \"ബ്ലിസ് ചിത്ര ലിപി\",
        \"Bopo\": \"ബോപ്പോമോഫോ\",
        \"Brah\": \"ബ്രാഹ്മി\",
        \"Brai\": \"ബ്രെയ്‌ലി\",
        \"Bugi\": \"ബുഗിനീസ്\",
        \"Buhd\": \"ബുഹിഡ്\",
        \"Cakm\": \"ചകം\",
        \"Cans\": \"ഏകീകൃത കനേഡിയൻ ഗോത്രലിപി\",
        \"Cari\": \"ചരിയൻ\",
        \"Cham\": \"ഛം\",
        \"Cher\": \"ചെറോക്കി\",
        \"Cirt\": \"ചിർത്ത്\",
        \"Copt\": \"കോപ്റ്റിക്\",
        \"Cprt\": \"സൈപ്രിയോട്ട്\",
        \"Cyrl\": \"സിറിലിക്\",
        \"Cyrs\": \"പുരാതന ചർച്ച് സ്ലവോണിക് സിറിലിക്\",
        \"Deva\": \"ദേവനാഗരി\",
        \"Dsrt\": \"ഡെസെർട്ട്\",
        \"Egyd\": \"ഈജിപ്ഷ്യൻ ഡിമോട്ടിക്\",
        \"Egyh\": \"ഈജിപ്ഷ്യൻ ഹിരാറ്റിക്\",
        \"Egyp\": \"ഈജിപ്ഷ്യൻ ചിത്രലിപി\",
        \"Ethi\": \"എത്യോപിക്\",
        \"Geok\": \"ജോർജ്ജിയൻ ഖുട്സുരി\",
        \"Geor\": \"ജോർജ്ജിയൻ\",
        \"Glag\": \"ഗ്ലഗോലിറ്റിക്\",
        \"Goth\": \"ഗോഥിക്\",
        \"Grek\": \"ഗ്രീക്ക്\",
        \"Gujr\": \"ഗുജറാത്തി\",
        \"Guru\": \"ഗുരുമുഖി\",
        \"Hanb\": \"ഹൻബ്\",
        \"Hang\": \"ഹാംഗുൽ\",
        \"Hani\": \"ഹാൻ\",
        \"Hano\": \"ഹനുനൂ\",
        \"Hans\": \"ലളിതവൽക്കരിച്ചത്\",
        \"Hant\": \"പരമ്പരാഗതം\",
        \"Hebr\": \"ഹീബ്രു\",
        \"Hira\": \"ഹിരഗാന\",
        \"Hmng\": \"പഹ്വാ ഹമോംഗ്\",
        \"Hrkt\": \"ജാപ്പനീസ് സില്ലബറീസ്\",
        \"Hung\": \"പുരാതന ഹംഗേറിയൻ\",
        \"Inds\": \"സിന്ധു\",
        \"Ital\": \"പഴയ ഇറ്റാലിയൻ\",
        \"Jamo\": \"ജാമോ\",
        \"Java\": \"ജാവനീസ്\",
        \"Jpan\": \"ജാപ്പനീസ്\",
        \"Kali\": \"കയാ ലി\",
        \"Kana\": \"കറ്റക്കാന\",
        \"Khar\": \"ഖരോഷ്ടി\",
        \"Khmr\": \"ഖമെർ\",
        \"Knda\": \"കന്നഡ\",
        \"Kore\": \"കൊറിയൻ\",
        \"Kthi\": \"ക്തി\",
        \"Lana\": \"ലന്ന\",
        \"Laoo\": \"ലാവോ\",
        \"Latf\": \"ഫ്രാക്ടുർ ലാറ്റിൻ\",
        \"Latg\": \"ഗെയ്‌ലിക് ലാറ്റിൻ\",
        \"Latn\": \"ലാറ്റിൻ\",
        \"Lepc\": \"ലെപ്ച\",
        \"Limb\": \"ലിംബു\",
        \"Lina\": \"സമരേഖയിലുള്ള എ\",
        \"Linb\": \"ലീനിയർ ബി\",
        \"Lyci\": \"ലൈസിൻ\",
        \"Lydi\": \"ലൈഡിയൻ\",
        \"Mand\": \"മൻഡേയൻ\",
        \"Mani\": \"മണിചേയൻ\",
        \"Maya\": \"മായൻ ചിത്രലിപി\",
        \"Mero\": \"മെറോയിറ്റിക്\",
        \"Mlym\": \"മലയാളം\",
        \"Mong\": \"മംഗോളിയൻ\",
        \"Moon\": \"മൂൺ\",
        \"Mtei\": \"മേറ്റി മായക്\",
        \"Mymr\": \"മ്യാൻമാർ\",
        \"Nkoo\": \"എൻകോ\",
        \"Ogam\": \"ഒഖാം\",
        \"Olck\": \"ഒൽ ചിക്കി\",
        \"Orkh\": \"ഒർഖോൺ\",
        \"Orya\": \"ഒഡിയ\",
        \"Osma\": \"ഒസ്‌മാനിയ\",
        \"Perm\": \"പുരാതന പെർമിക്\",
        \"Phag\": \"ഫഗസ് പ\",
        \"Phli\": \"എഴുത്തു പഹൽവി\",
        \"Phlp\": \"സാൾട്ടർ പഹൽവി\",
        \"Phlv\": \"പഹൽവി ലിപി\",
        \"Phnx\": \"ഫിനീഷ്യൻ\",
        \"Plrd\": \"പൊള്ളാർഡ് ശബ്ദലിപി\",
        \"Prti\": \"പൃതി\",
        \"Rjng\": \"റെജാംഗ്\",
        \"Roro\": \"റൊംഗോറൊംഗോ\",
        \"Runr\": \"റുണിക്\",
        \"Samr\": \"സമരിയ\",
        \"Sara\": \"സരതി\",
        \"Saur\": \"സൗരാഷ്ട്ര\",
        \"Sgnw\": \"ചിഹ്നലിപി\",
        \"Shaw\": \"ഷാവിയൻ\",
        \"Sinh\": \"സിംഹള\",
        \"Sund\": \"സന്താനീസ്\",
        \"Sylo\": \"സൈലോതി നാഗരി\",
        \"Syrc\": \"സിറിയക്ക്\",
        \"Syre\": \"എസ്റ്റ്രാംഗ്ലോ സിറിയക്\",
        \"Syrj\": \"പശ്ചിമസുറിയാനി\",
        \"Syrn\": \"കിഴക്കൻ സിറിയക്\",
        \"Tagb\": \"തഗ്ബൻവാ\",
        \"Tale\": \"തായ് ലേ\",
        \"Talu\": \"പുതിയ തായ് ല്യൂ\",
        \"Taml\": \"തമിഴ്\",
        \"Tavt\": \"ത്വട്\",
        \"Telu\": \"തെലുങ്ക്\",
        \"Teng\": \"തെംഗ്വർ\",
        \"Tfng\": \"തിഫിനാഗ്\",
        \"Tglg\": \"തഗലോഗ്\",
        \"Thaa\": \"ഥാന\",
        \"Thai\": \"തായ്\",
        \"Tibt\": \"ടിബറ്റൻ\",
        \"Ugar\": \"ഉഗ്രൈറ്റിക്\",
        \"Vaii\": \"വൈ\",
        \"Visp\": \"ദൃശ്യഭാഷ\",
        \"Xpeo\": \"പഴയ പേർഷ്യൻ\",
        \"Xsux\": \"സുമേറോ അക്കാഡിയൻ ക്യുണിഫോം\",
        \"Yiii\": \"യി\",
        \"Zinh\": \"പാരമ്പര്യമായ\",
        \"Zmth\": \"ഗണിത രൂപം\",
        \"Zsye\": \"ഇമോജി\",
        \"Zsym\": \"ചിഹ്നങ്ങൾ\",
        \"Zxxx\": \"എഴുതപ്പെടാത്തത്\",
        \"Zyyy\": \"സാധാരണ\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/ml.json";
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
        \"Arab\": \"അറബിക്\",
        \"Armi\": \"അർമി\",
        \"Armn\": \"അർമേനിയൻ\",
        \"Avst\": \"അവെസ്ഥൻ\",
        \"Bali\": \"ബാലിനീസ്\",
        \"Batk\": \"ബട്ടക്\",
        \"Beng\": \"ബംഗാളി\",
        \"Blis\": \"ബ്ലിസ് ചിത്ര ലിപി\",
        \"Bopo\": \"ബോപ്പോമോഫോ\",
        \"Brah\": \"ബ്രാഹ്മി\",
        \"Brai\": \"ബ്രെയ്‌ലി\",
        \"Bugi\": \"ബുഗിനീസ്\",
        \"Buhd\": \"ബുഹിഡ്\",
        \"Cakm\": \"ചകം\",
        \"Cans\": \"ഏകീകൃത കനേഡിയൻ ഗോത്രലിപി\",
        \"Cari\": \"ചരിയൻ\",
        \"Cham\": \"ഛം\",
        \"Cher\": \"ചെറോക്കി\",
        \"Cirt\": \"ചിർത്ത്\",
        \"Copt\": \"കോപ്റ്റിക്\",
        \"Cprt\": \"സൈപ്രിയോട്ട്\",
        \"Cyrl\": \"സിറിലിക്\",
        \"Cyrs\": \"പുരാതന ചർച്ച് സ്ലവോണിക് സിറിലിക്\",
        \"Deva\": \"ദേവനാഗരി\",
        \"Dsrt\": \"ഡെസെർട്ട്\",
        \"Egyd\": \"ഈജിപ്ഷ്യൻ ഡിമോട്ടിക്\",
        \"Egyh\": \"ഈജിപ്ഷ്യൻ ഹിരാറ്റിക്\",
        \"Egyp\": \"ഈജിപ്ഷ്യൻ ചിത്രലിപി\",
        \"Ethi\": \"എത്യോപിക്\",
        \"Geok\": \"ജോർജ്ജിയൻ ഖുട്സുരി\",
        \"Geor\": \"ജോർജ്ജിയൻ\",
        \"Glag\": \"ഗ്ലഗോലിറ്റിക്\",
        \"Goth\": \"ഗോഥിക്\",
        \"Grek\": \"ഗ്രീക്ക്\",
        \"Gujr\": \"ഗുജറാത്തി\",
        \"Guru\": \"ഗുരുമുഖി\",
        \"Hanb\": \"ഹൻബ്\",
        \"Hang\": \"ഹാംഗുൽ\",
        \"Hani\": \"ഹാൻ\",
        \"Hano\": \"ഹനുനൂ\",
        \"Hans\": \"ലളിതവൽക്കരിച്ചത്\",
        \"Hant\": \"പരമ്പരാഗതം\",
        \"Hebr\": \"ഹീബ്രു\",
        \"Hira\": \"ഹിരഗാന\",
        \"Hmng\": \"പഹ്വാ ഹമോംഗ്\",
        \"Hrkt\": \"ജാപ്പനീസ് സില്ലബറീസ്\",
        \"Hung\": \"പുരാതന ഹംഗേറിയൻ\",
        \"Inds\": \"സിന്ധു\",
        \"Ital\": \"പഴയ ഇറ്റാലിയൻ\",
        \"Jamo\": \"ജാമോ\",
        \"Java\": \"ജാവനീസ്\",
        \"Jpan\": \"ജാപ്പനീസ്\",
        \"Kali\": \"കയാ ലി\",
        \"Kana\": \"കറ്റക്കാന\",
        \"Khar\": \"ഖരോഷ്ടി\",
        \"Khmr\": \"ഖമെർ\",
        \"Knda\": \"കന്നഡ\",
        \"Kore\": \"കൊറിയൻ\",
        \"Kthi\": \"ക്തി\",
        \"Lana\": \"ലന്ന\",
        \"Laoo\": \"ലാവോ\",
        \"Latf\": \"ഫ്രാക്ടുർ ലാറ്റിൻ\",
        \"Latg\": \"ഗെയ്‌ലിക് ലാറ്റിൻ\",
        \"Latn\": \"ലാറ്റിൻ\",
        \"Lepc\": \"ലെപ്ച\",
        \"Limb\": \"ലിംബു\",
        \"Lina\": \"സമരേഖയിലുള്ള എ\",
        \"Linb\": \"ലീനിയർ ബി\",
        \"Lyci\": \"ലൈസിൻ\",
        \"Lydi\": \"ലൈഡിയൻ\",
        \"Mand\": \"മൻഡേയൻ\",
        \"Mani\": \"മണിചേയൻ\",
        \"Maya\": \"മായൻ ചിത്രലിപി\",
        \"Mero\": \"മെറോയിറ്റിക്\",
        \"Mlym\": \"മലയാളം\",
        \"Mong\": \"മംഗോളിയൻ\",
        \"Moon\": \"മൂൺ\",
        \"Mtei\": \"മേറ്റി മായക്\",
        \"Mymr\": \"മ്യാൻമാർ\",
        \"Nkoo\": \"എൻകോ\",
        \"Ogam\": \"ഒഖാം\",
        \"Olck\": \"ഒൽ ചിക്കി\",
        \"Orkh\": \"ഒർഖോൺ\",
        \"Orya\": \"ഒഡിയ\",
        \"Osma\": \"ഒസ്‌മാനിയ\",
        \"Perm\": \"പുരാതന പെർമിക്\",
        \"Phag\": \"ഫഗസ് പ\",
        \"Phli\": \"എഴുത്തു പഹൽവി\",
        \"Phlp\": \"സാൾട്ടർ പഹൽവി\",
        \"Phlv\": \"പഹൽവി ലിപി\",
        \"Phnx\": \"ഫിനീഷ്യൻ\",
        \"Plrd\": \"പൊള്ളാർഡ് ശബ്ദലിപി\",
        \"Prti\": \"പൃതി\",
        \"Rjng\": \"റെജാംഗ്\",
        \"Roro\": \"റൊംഗോറൊംഗോ\",
        \"Runr\": \"റുണിക്\",
        \"Samr\": \"സമരിയ\",
        \"Sara\": \"സരതി\",
        \"Saur\": \"സൗരാഷ്ട്ര\",
        \"Sgnw\": \"ചിഹ്നലിപി\",
        \"Shaw\": \"ഷാവിയൻ\",
        \"Sinh\": \"സിംഹള\",
        \"Sund\": \"സന്താനീസ്\",
        \"Sylo\": \"സൈലോതി നാഗരി\",
        \"Syrc\": \"സിറിയക്ക്\",
        \"Syre\": \"എസ്റ്റ്രാംഗ്ലോ സിറിയക്\",
        \"Syrj\": \"പശ്ചിമസുറിയാനി\",
        \"Syrn\": \"കിഴക്കൻ സിറിയക്\",
        \"Tagb\": \"തഗ്ബൻവാ\",
        \"Tale\": \"തായ് ലേ\",
        \"Talu\": \"പുതിയ തായ് ല്യൂ\",
        \"Taml\": \"തമിഴ്\",
        \"Tavt\": \"ത്വട്\",
        \"Telu\": \"തെലുങ്ക്\",
        \"Teng\": \"തെംഗ്വർ\",
        \"Tfng\": \"തിഫിനാഗ്\",
        \"Tglg\": \"തഗലോഗ്\",
        \"Thaa\": \"ഥാന\",
        \"Thai\": \"തായ്\",
        \"Tibt\": \"ടിബറ്റൻ\",
        \"Ugar\": \"ഉഗ്രൈറ്റിക്\",
        \"Vaii\": \"വൈ\",
        \"Visp\": \"ദൃശ്യഭാഷ\",
        \"Xpeo\": \"പഴയ പേർഷ്യൻ\",
        \"Xsux\": \"സുമേറോ അക്കാഡിയൻ ക്യുണിഫോം\",
        \"Yiii\": \"യി\",
        \"Zinh\": \"പാരമ്പര്യമായ\",
        \"Zmth\": \"ഗണിത രൂപം\",
        \"Zsye\": \"ഇമോജി\",
        \"Zsym\": \"ചിഹ്നങ്ങൾ\",
        \"Zxxx\": \"എഴുതപ്പെടാത്തത്\",
        \"Zyyy\": \"സാധാരണ\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/ml.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/ml.json");
    }
}
