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

/* vendor/symfony/intl/Resources/data/scripts/hu.json */
class __TwigTemplate_cdfa72195603c5e765d67710c299a379501ba39e44ac3e874af2315441165384 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/hu.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/hu.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"Arab\",
        \"Armi\": \"Birodalmi arámi\",
        \"Armn\": \"Örmény\",
        \"Avst\": \"Avesztán\",
        \"Bali\": \"Balinéz\",
        \"Batk\": \"Batak\",
        \"Beng\": \"Bengáli\",
        \"Blis\": \"Bliss jelképrendszer\",
        \"Bopo\": \"Bopomofo\",
        \"Brah\": \"Brámi\",
        \"Brai\": \"Vakírás\",
        \"Bugi\": \"Buginéz\",
        \"Buhd\": \"Buhid\",
        \"Cakm\": \"Csakma\",
        \"Cans\": \"Egyesített kanadai őslakos jelek\",
        \"Cari\": \"Kari\",
        \"Cham\": \"Csám\",
        \"Cher\": \"Cseroki\",
        \"Copt\": \"Kopt\",
        \"Cprt\": \"Ciprusi\",
        \"Cyrl\": \"Cirill\",
        \"Cyrs\": \"Óegyházi szláv cirill\",
        \"Deva\": \"Devanagári\",
        \"Dsrt\": \"Deseret\",
        \"Egyd\": \"Egyiptomi demotikus\",
        \"Egyh\": \"Egyiptomi hieratikus\",
        \"Egyp\": \"Egyiptomi hieroglifák\",
        \"Ethi\": \"Etióp\",
        \"Geok\": \"Grúz kucsuri\",
        \"Geor\": \"Grúz\",
        \"Glag\": \"Glagolitikus\",
        \"Goth\": \"Gót\",
        \"Grek\": \"Görög\",
        \"Gujr\": \"Gudzsaráti\",
        \"Guru\": \"Gurmuki\",
        \"Hanb\": \"Hanb\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hano\": \"Hanunoo\",
        \"Hans\": \"Egyszerűsített\",
        \"Hant\": \"Hagyományos\",
        \"Hebr\": \"Héber\",
        \"Hira\": \"Hiragana\",
        \"Hmng\": \"Pahawh hmong\",
        \"Hrkt\": \"Katakana vagy hiragana\",
        \"Hung\": \"Ómagyar\",
        \"Inds\": \"Indus\",
        \"Ital\": \"Régi olasz\",
        \"Jamo\": \"Jamo\",
        \"Java\": \"Jávai\",
        \"Jpan\": \"Japán\",
        \"Kali\": \"Kajah li\",
        \"Kana\": \"Katakana\",
        \"Khar\": \"Kharoshthi\",
        \"Khmr\": \"Khmer\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Koreai\",
        \"Kthi\": \"Kaithi\",
        \"Lana\": \"Lanna\",
        \"Laoo\": \"Lao\",
        \"Latf\": \"Fraktur latin\",
        \"Latg\": \"Gael latin\",
        \"Latn\": \"Latin\",
        \"Lepc\": \"Lepcha\",
        \"Limb\": \"Limbu\",
        \"Lina\": \"Lineáris A\",
        \"Linb\": \"Lineáris B\",
        \"Lyci\": \"Líciai\",
        \"Lydi\": \"Lídiai\",
        \"Mand\": \"Mandai\",
        \"Mani\": \"Manicheus\",
        \"Maya\": \"Maja hieroglifák\",
        \"Mero\": \"Meroitikus\",
        \"Mlym\": \"Malajálam\",
        \"Mong\": \"Mongol\",
        \"Moon\": \"Moon\",
        \"Mtei\": \"Meitei mayek\",
        \"Mymr\": \"Burmai\",
        \"Nkoo\": \"N’ko\",
        \"Ogam\": \"Ogham\",
        \"Olck\": \"Ol chiki\",
        \"Orkh\": \"Orhon\",
        \"Orya\": \"Oriya\",
        \"Osma\": \"Oszmán\",
        \"Perm\": \"Ópermikus\",
        \"Phag\": \"Phags-pa\",
        \"Phli\": \"Felriatos pahlavi\",
        \"Phlp\": \"Psalter pahlavi\",
        \"Phlv\": \"Könyv pahlavi\",
        \"Phnx\": \"Főniciai\",
        \"Plrd\": \"Pollard fonetikus\",
        \"Prti\": \"Feliratos parthian\",
        \"Rjng\": \"Redzsang\",
        \"Roro\": \"Rongorongo\",
        \"Runr\": \"Runikus\",
        \"Samr\": \"Szamaritán\",
        \"Sara\": \"Szarati\",
        \"Saur\": \"Szaurastra\",
        \"Sgnw\": \"Jelírás\",
        \"Shaw\": \"Shaw ábécé\",
        \"Sidd\": \"Sziddham\",
        \"Sinh\": \"Szingaléz\",
        \"Sogd\": \"Szogd\",
        \"Sogo\": \"Ószogd\",
        \"Sund\": \"Szundanéz\",
        \"Sylo\": \"Sylheti nagári\",
        \"Syrc\": \"Szíriai\",
        \"Syre\": \"Estrangelo szíriai\",
        \"Syrj\": \"Nyugat-szíriai\",
        \"Syrn\": \"Kelet-szíriai\",
        \"Tagb\": \"Tagbanwa\",
        \"Tale\": \"Tai Le\",
        \"Talu\": \"Új tai lue\",
        \"Taml\": \"Tamil\",
        \"Tavt\": \"Tai viet\",
        \"Telu\": \"Telugu\",
        \"Teng\": \"Tengwar\",
        \"Tfng\": \"Berber\",
        \"Tglg\": \"Tagalog\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibeti\",
        \"Ugar\": \"Ugari\",
        \"Vaii\": \"Vai\",
        \"Visp\": \"Látható beszéd\",
        \"Xpeo\": \"Óperzsa\",
        \"Xsux\": \"Ékírásos suméro-akkád\",
        \"Yiii\": \"Ji\",
        \"Zinh\": \"Származtatott\",
        \"Zmth\": \"Matematikai jelrendszer\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Szimbólum\",
        \"Zxxx\": \"Íratlan nyelvek kódja\",
        \"Zyyy\": \"Meghatározatlan\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/hu.json";
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
        \"Arab\": \"Arab\",
        \"Armi\": \"Birodalmi arámi\",
        \"Armn\": \"Örmény\",
        \"Avst\": \"Avesztán\",
        \"Bali\": \"Balinéz\",
        \"Batk\": \"Batak\",
        \"Beng\": \"Bengáli\",
        \"Blis\": \"Bliss jelképrendszer\",
        \"Bopo\": \"Bopomofo\",
        \"Brah\": \"Brámi\",
        \"Brai\": \"Vakírás\",
        \"Bugi\": \"Buginéz\",
        \"Buhd\": \"Buhid\",
        \"Cakm\": \"Csakma\",
        \"Cans\": \"Egyesített kanadai őslakos jelek\",
        \"Cari\": \"Kari\",
        \"Cham\": \"Csám\",
        \"Cher\": \"Cseroki\",
        \"Copt\": \"Kopt\",
        \"Cprt\": \"Ciprusi\",
        \"Cyrl\": \"Cirill\",
        \"Cyrs\": \"Óegyházi szláv cirill\",
        \"Deva\": \"Devanagári\",
        \"Dsrt\": \"Deseret\",
        \"Egyd\": \"Egyiptomi demotikus\",
        \"Egyh\": \"Egyiptomi hieratikus\",
        \"Egyp\": \"Egyiptomi hieroglifák\",
        \"Ethi\": \"Etióp\",
        \"Geok\": \"Grúz kucsuri\",
        \"Geor\": \"Grúz\",
        \"Glag\": \"Glagolitikus\",
        \"Goth\": \"Gót\",
        \"Grek\": \"Görög\",
        \"Gujr\": \"Gudzsaráti\",
        \"Guru\": \"Gurmuki\",
        \"Hanb\": \"Hanb\",
        \"Hang\": \"Hangul\",
        \"Hani\": \"Han\",
        \"Hano\": \"Hanunoo\",
        \"Hans\": \"Egyszerűsített\",
        \"Hant\": \"Hagyományos\",
        \"Hebr\": \"Héber\",
        \"Hira\": \"Hiragana\",
        \"Hmng\": \"Pahawh hmong\",
        \"Hrkt\": \"Katakana vagy hiragana\",
        \"Hung\": \"Ómagyar\",
        \"Inds\": \"Indus\",
        \"Ital\": \"Régi olasz\",
        \"Jamo\": \"Jamo\",
        \"Java\": \"Jávai\",
        \"Jpan\": \"Japán\",
        \"Kali\": \"Kajah li\",
        \"Kana\": \"Katakana\",
        \"Khar\": \"Kharoshthi\",
        \"Khmr\": \"Khmer\",
        \"Knda\": \"Kannada\",
        \"Kore\": \"Koreai\",
        \"Kthi\": \"Kaithi\",
        \"Lana\": \"Lanna\",
        \"Laoo\": \"Lao\",
        \"Latf\": \"Fraktur latin\",
        \"Latg\": \"Gael latin\",
        \"Latn\": \"Latin\",
        \"Lepc\": \"Lepcha\",
        \"Limb\": \"Limbu\",
        \"Lina\": \"Lineáris A\",
        \"Linb\": \"Lineáris B\",
        \"Lyci\": \"Líciai\",
        \"Lydi\": \"Lídiai\",
        \"Mand\": \"Mandai\",
        \"Mani\": \"Manicheus\",
        \"Maya\": \"Maja hieroglifák\",
        \"Mero\": \"Meroitikus\",
        \"Mlym\": \"Malajálam\",
        \"Mong\": \"Mongol\",
        \"Moon\": \"Moon\",
        \"Mtei\": \"Meitei mayek\",
        \"Mymr\": \"Burmai\",
        \"Nkoo\": \"N’ko\",
        \"Ogam\": \"Ogham\",
        \"Olck\": \"Ol chiki\",
        \"Orkh\": \"Orhon\",
        \"Orya\": \"Oriya\",
        \"Osma\": \"Oszmán\",
        \"Perm\": \"Ópermikus\",
        \"Phag\": \"Phags-pa\",
        \"Phli\": \"Felriatos pahlavi\",
        \"Phlp\": \"Psalter pahlavi\",
        \"Phlv\": \"Könyv pahlavi\",
        \"Phnx\": \"Főniciai\",
        \"Plrd\": \"Pollard fonetikus\",
        \"Prti\": \"Feliratos parthian\",
        \"Rjng\": \"Redzsang\",
        \"Roro\": \"Rongorongo\",
        \"Runr\": \"Runikus\",
        \"Samr\": \"Szamaritán\",
        \"Sara\": \"Szarati\",
        \"Saur\": \"Szaurastra\",
        \"Sgnw\": \"Jelírás\",
        \"Shaw\": \"Shaw ábécé\",
        \"Sidd\": \"Sziddham\",
        \"Sinh\": \"Szingaléz\",
        \"Sogd\": \"Szogd\",
        \"Sogo\": \"Ószogd\",
        \"Sund\": \"Szundanéz\",
        \"Sylo\": \"Sylheti nagári\",
        \"Syrc\": \"Szíriai\",
        \"Syre\": \"Estrangelo szíriai\",
        \"Syrj\": \"Nyugat-szíriai\",
        \"Syrn\": \"Kelet-szíriai\",
        \"Tagb\": \"Tagbanwa\",
        \"Tale\": \"Tai Le\",
        \"Talu\": \"Új tai lue\",
        \"Taml\": \"Tamil\",
        \"Tavt\": \"Tai viet\",
        \"Telu\": \"Telugu\",
        \"Teng\": \"Tengwar\",
        \"Tfng\": \"Berber\",
        \"Tglg\": \"Tagalog\",
        \"Thaa\": \"Thaana\",
        \"Thai\": \"Thai\",
        \"Tibt\": \"Tibeti\",
        \"Ugar\": \"Ugari\",
        \"Vaii\": \"Vai\",
        \"Visp\": \"Látható beszéd\",
        \"Xpeo\": \"Óperzsa\",
        \"Xsux\": \"Ékírásos suméro-akkád\",
        \"Yiii\": \"Ji\",
        \"Zinh\": \"Származtatott\",
        \"Zmth\": \"Matematikai jelrendszer\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"Szimbólum\",
        \"Zxxx\": \"Íratlan nyelvek kódja\",
        \"Zyyy\": \"Meghatározatlan\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/hu.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/hu.json");
    }
}
