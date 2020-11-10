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

/* vendor/symfony/intl/Resources/data/scripts/he.json */
class __TwigTemplate_8370444dbdd5e0b50da558ac839dd2af8576cc780915ca2c5e487c18960f6f51 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/he.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/he.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"ערבי\",
        \"Armn\": \"ארמני\",
        \"Bali\": \"באלינזי\",
        \"Beng\": \"בנגלי\",
        \"Bopo\": \"בופומופו\",
        \"Brai\": \"ברייל\",
        \"Cham\": \"צ׳אם\",
        \"Cher\": \"צ׳ירוקי\",
        \"Copt\": \"קופטי\",
        \"Cprt\": \"קפריסאי\",
        \"Cyrl\": \"קירילי\",
        \"Cyrs\": \"קירילי סלאבוני כנסייתי עתיק\",
        \"Deva\": \"דוואנגרי\",
        \"Egyp\": \"כתב חרטומים\",
        \"Ethi\": \"אתיופי\",
        \"Geor\": \"גאורגי\",
        \"Goth\": \"גותי\",
        \"Grek\": \"יווני\",
        \"Gujr\": \"גוג׳רטי\",
        \"Guru\": \"גורמוקי\",
        \"Hanb\": \"האן עם בופומופו\",
        \"Hang\": \"האנגול\",
        \"Hani\": \"האן\",
        \"Hans\": \"פשוט\",
        \"Hant\": \"מסורתי\",
        \"Hebr\": \"עברי\",
        \"Hira\": \"הירגאנה\",
        \"Hrkt\": \"הברתי יפני\",
        \"Hung\": \"הונגרי עתיק\",
        \"Inds\": \"אינדוס\",
        \"Ital\": \"איטלקי עתיק\",
        \"Jamo\": \"ג׳אמו\",
        \"Java\": \"ג׳אוונזי\",
        \"Jpan\": \"יפני\",
        \"Kana\": \"קטקאנה\",
        \"Khmr\": \"חמרי\",
        \"Knda\": \"קאנאדה\",
        \"Kore\": \"קוריאני\",
        \"Laoo\": \"לאי\",
        \"Latg\": \"לטיני גאלי\",
        \"Latn\": \"לטיני\",
        \"Maya\": \"מאיה\",
        \"Mlym\": \"מליאלאם\",
        \"Mong\": \"מונגולי\",
        \"Mymr\": \"מיאנמר\",
        \"Orya\": \"אודייה\",
        \"Phnx\": \"פיניקי\",
        \"Runr\": \"רוני\",
        \"Sinh\": \"סינהלה\",
        \"Syrc\": \"סורי\",
        \"Syrj\": \"סורי מערבי\",
        \"Syrn\": \"סורי מזרחי\",
        \"Taml\": \"טמיל\",
        \"Telu\": \"טלוגו\",
        \"Tglg\": \"טגלוג\",
        \"Thaa\": \"תאנה\",
        \"Thai\": \"תאי\",
        \"Tibt\": \"טיבטי\",
        \"Ugar\": \"אוגריתי\",
        \"Xpeo\": \"פרסי עתיק\",
        \"Zinh\": \"מורש\",
        \"Zmth\": \"סימון מתמטי\",
        \"Zsye\": \"אמוג׳י\",
        \"Zsym\": \"סמלים\",
        \"Zxxx\": \"לא כתוב\",
        \"Zyyy\": \"רגיל\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/he.json";
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
        \"Arab\": \"ערבי\",
        \"Armn\": \"ארמני\",
        \"Bali\": \"באלינזי\",
        \"Beng\": \"בנגלי\",
        \"Bopo\": \"בופומופו\",
        \"Brai\": \"ברייל\",
        \"Cham\": \"צ׳אם\",
        \"Cher\": \"צ׳ירוקי\",
        \"Copt\": \"קופטי\",
        \"Cprt\": \"קפריסאי\",
        \"Cyrl\": \"קירילי\",
        \"Cyrs\": \"קירילי סלאבוני כנסייתי עתיק\",
        \"Deva\": \"דוואנגרי\",
        \"Egyp\": \"כתב חרטומים\",
        \"Ethi\": \"אתיופי\",
        \"Geor\": \"גאורגי\",
        \"Goth\": \"גותי\",
        \"Grek\": \"יווני\",
        \"Gujr\": \"גוג׳רטי\",
        \"Guru\": \"גורמוקי\",
        \"Hanb\": \"האן עם בופומופו\",
        \"Hang\": \"האנגול\",
        \"Hani\": \"האן\",
        \"Hans\": \"פשוט\",
        \"Hant\": \"מסורתי\",
        \"Hebr\": \"עברי\",
        \"Hira\": \"הירגאנה\",
        \"Hrkt\": \"הברתי יפני\",
        \"Hung\": \"הונגרי עתיק\",
        \"Inds\": \"אינדוס\",
        \"Ital\": \"איטלקי עתיק\",
        \"Jamo\": \"ג׳אמו\",
        \"Java\": \"ג׳אוונזי\",
        \"Jpan\": \"יפני\",
        \"Kana\": \"קטקאנה\",
        \"Khmr\": \"חמרי\",
        \"Knda\": \"קאנאדה\",
        \"Kore\": \"קוריאני\",
        \"Laoo\": \"לאי\",
        \"Latg\": \"לטיני גאלי\",
        \"Latn\": \"לטיני\",
        \"Maya\": \"מאיה\",
        \"Mlym\": \"מליאלאם\",
        \"Mong\": \"מונגולי\",
        \"Mymr\": \"מיאנמר\",
        \"Orya\": \"אודייה\",
        \"Phnx\": \"פיניקי\",
        \"Runr\": \"רוני\",
        \"Sinh\": \"סינהלה\",
        \"Syrc\": \"סורי\",
        \"Syrj\": \"סורי מערבי\",
        \"Syrn\": \"סורי מזרחי\",
        \"Taml\": \"טמיל\",
        \"Telu\": \"טלוגו\",
        \"Tglg\": \"טגלוג\",
        \"Thaa\": \"תאנה\",
        \"Thai\": \"תאי\",
        \"Tibt\": \"טיבטי\",
        \"Ugar\": \"אוגריתי\",
        \"Xpeo\": \"פרסי עתיק\",
        \"Zinh\": \"מורש\",
        \"Zmth\": \"סימון מתמטי\",
        \"Zsye\": \"אמוג׳י\",
        \"Zsym\": \"סמלים\",
        \"Zxxx\": \"לא כתוב\",
        \"Zyyy\": \"רגיל\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/he.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/he.json");
    }
}
