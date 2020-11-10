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

/* vendor/symfony/intl/Resources/data/scripts/bn.json */
class __TwigTemplate_0afeea9205ae3e14109da0af6d24c3f990e93b7c9bb6495ab6f3d1b2ff7d080b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/bn.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/bn.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"আরবি\",
        \"Armi\": \"আরমি\",
        \"Armn\": \"আর্মেনীয়\",
        \"Avst\": \"আভেসতান\",
        \"Bali\": \"বালীয়\",
        \"Batk\": \"বাটাক\",
        \"Beng\": \"বাংলা\",
        \"Blis\": \"ব্লিসপ্রতীক\",
        \"Bopo\": \"বোপোমোফো\",
        \"Brah\": \"ব্রাহ্মী\",
        \"Brai\": \"ব্রেইল\",
        \"Bugi\": \"বুগি\",
        \"Buhd\": \"বুহিড\",
        \"Cakm\": \"চাকমা\",
        \"Cans\": \"সংযুক্ত কানাডিয়ান অ্যাব্রোজিনিয়ান সিলেবিক্স\",
        \"Cari\": \"ক্যারিয়ান\",
        \"Cham\": \"চ্যাম\",
        \"Cher\": \"চেরোকি\",
        \"Cirt\": \"কির্ট\",
        \"Copt\": \"কোপ্টিক\",
        \"Cprt\": \"সাইপ্রোয়েট\",
        \"Cyrl\": \"সিরিলিক\",
        \"Cyrs\": \"প্রাচীন চার্চ স্লাভোনিক সিরিলিক\",
        \"Deva\": \"দেবনাগরি\",
        \"Dsrt\": \"দেসেরাত\",
        \"Egyd\": \"মিশরীয় ডেমোটিক\",
        \"Egyh\": \"মিশরীয় হায়রেটিক\",
        \"Egyp\": \"মিশরীয় হায়ারোগ্লিপ\",
        \"Ethi\": \"ইথিওপিয়\",
        \"Geok\": \"জর্জিয় খুৎসুরি\",
        \"Geor\": \"জর্জিয়ান\",
        \"Glag\": \"গ্লাগোলিটিক\",
        \"Goth\": \"গোথিক\",
        \"Grek\": \"গ্রিক\",
        \"Gujr\": \"গুজরাটি\",
        \"Guru\": \"গুরুমুখি\",
        \"Hanb\": \"হ্যানবি\",
        \"Hang\": \"হাঙ্গুল\",
        \"Hani\": \"হ্যান\",
        \"Hano\": \"হ্যানুনু\",
        \"Hans\": \"সরলীকৃত\",
        \"Hant\": \"ঐতিহ্যবাহী\",
        \"Hebr\": \"হিব্রু\",
        \"Hira\": \"হিরাগানা\",
        \"Hmng\": \"ফাহাও মঙ\",
        \"Hrkt\": \"জাপানি অক্ষরমালা\",
        \"Hung\": \"পুরোনো হাঙ্গেরীয়\",
        \"Inds\": \"সিন্ধু\",
        \"Ital\": \"প্রাচীন ইতালি\",
        \"Jamo\": \"জ্যামো\",
        \"Java\": \"জাভানিজ\",
        \"Jpan\": \"জাপানী\",
        \"Kali\": \"কায়াহ লি\",
        \"Kana\": \"কাটাকানা\",
        \"Khar\": \"খরোষ্ঠী\",
        \"Khmr\": \"খেমের\",
        \"Knda\": \"কানাড়া\",
        \"Kore\": \"কোরিয়ান\",
        \"Kthi\": \"কাইথি\",
        \"Lana\": \"লান্না\",
        \"Laoo\": \"লাও\",
        \"Latf\": \"ফ্রাক্টুর ল্যাটিন\",
        \"Latg\": \"গ্যালিক ল্যাটিন\",
        \"Latn\": \"ল্যাটিন\",
        \"Lepc\": \"লেপ্চা\",
        \"Limb\": \"লিম্বু\",
        \"Lina\": \"লিনিয়ার এ\",
        \"Linb\": \"লিনিয়ার বি\",
        \"Lyci\": \"লাইসিয়ান\",
        \"Lydi\": \"লাইডিয়ান\",
        \"Mand\": \"ম্যান্ডায়ীন\",
        \"Mani\": \"ম্যানিচাইন\",
        \"Maya\": \"মায়ান হায়ারোগ্লিপ\",
        \"Mero\": \"মেরোইটিক\",
        \"Mlym\": \"মালায়ালাম\",
        \"Mong\": \"মোঙ্গোলীয়\",
        \"Moon\": \"মুন\",
        \"Mtei\": \"মেইটেই মায়েক\",
        \"Mymr\": \"মায়ানমার\",
        \"Nkoo\": \"এনকো\",
        \"Ogam\": \"ওঘাম\",
        \"Olck\": \"ওল চিকি\",
        \"Orkh\": \"অর্খোন\",
        \"Orya\": \"ওড়িয়া\",
        \"Osma\": \"ওসমানিয়\",
        \"Perm\": \"প্রাচীন পার্মিক\",
        \"Phag\": \"ফাগ্স-পা\",
        \"Phli\": \"খদিত পাহলভি\",
        \"Phlp\": \"সল্টার পাহলভি\",
        \"Phlv\": \"পুস্তক পাহলভি\",
        \"Phnx\": \"ফিনিশিয়\",
        \"Plrd\": \"পোলার্ড ধ্বনিক\",
        \"Prti\": \"পার্থিয়ন\",
        \"Rjng\": \"রেজ্যাঙ্গ\",
        \"Roro\": \"রোঙ্গোরোঙ্গো\",
        \"Runr\": \"রুনিক\",
        \"Samr\": \"সমেরিটন\",
        \"Sara\": \"সারাতি\",
        \"Saur\": \"সৌরাষ্ট্র\",
        \"Sgnw\": \"চিহ্ন লিখন\",
        \"Shaw\": \"সাভিয়ান\",
        \"Sinh\": \"সিংহলি\",
        \"Sund\": \"সান্দানিজ\",
        \"Sylo\": \"সিলেটি নাগরি\",
        \"Syrc\": \"সিরিয়াক\",
        \"Syre\": \"এস্ট্রেঙ্গেলো সিরিয়াক\",
        \"Syrj\": \"পশ্চিমাঞ্চলীয় সিরিয়াক\",
        \"Syrn\": \"পূর্বাঞ্চলীয় সিরিয়াক\",
        \"Tagb\": \"টাগোওয়ানা\",
        \"Tale\": \"তাইলে\",
        \"Talu\": \"নতুন তাই লু\",
        \"Taml\": \"তামিল\",
        \"Tavt\": \"তাই ভিয়েৎ\",
        \"Telu\": \"তেলেগু\",
        \"Teng\": \"তেঙ্গোয়ার\",
        \"Tfng\": \"তিফিনাগ\",
        \"Tglg\": \"টাগালগ\",
        \"Thaa\": \"থানা\",
        \"Thai\": \"থাই\",
        \"Tibt\": \"তিব্বতি\",
        \"Ugar\": \"উগারিটিক\",
        \"Vaii\": \"ভাই\",
        \"Visp\": \"দৃশ্যমান ভাষা\",
        \"Xpeo\": \"প্রাচীন ফার্সি\",
        \"Xsux\": \"সুমের-আক্কাদীয় কীলকরূপ\",
        \"Yiii\": \"উই\",
        \"Zinh\": \"কাই\",
        \"Zmth\": \"গাণিতিক চিহ্ন\",
        \"Zsye\": \"ইমোজি\",
        \"Zsym\": \"প্রতীকগুলি\",
        \"Zxxx\": \"অলিখিত\",
        \"Zyyy\": \"সাধারন\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/bn.json";
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
        \"Arab\": \"আরবি\",
        \"Armi\": \"আরমি\",
        \"Armn\": \"আর্মেনীয়\",
        \"Avst\": \"আভেসতান\",
        \"Bali\": \"বালীয়\",
        \"Batk\": \"বাটাক\",
        \"Beng\": \"বাংলা\",
        \"Blis\": \"ব্লিসপ্রতীক\",
        \"Bopo\": \"বোপোমোফো\",
        \"Brah\": \"ব্রাহ্মী\",
        \"Brai\": \"ব্রেইল\",
        \"Bugi\": \"বুগি\",
        \"Buhd\": \"বুহিড\",
        \"Cakm\": \"চাকমা\",
        \"Cans\": \"সংযুক্ত কানাডিয়ান অ্যাব্রোজিনিয়ান সিলেবিক্স\",
        \"Cari\": \"ক্যারিয়ান\",
        \"Cham\": \"চ্যাম\",
        \"Cher\": \"চেরোকি\",
        \"Cirt\": \"কির্ট\",
        \"Copt\": \"কোপ্টিক\",
        \"Cprt\": \"সাইপ্রোয়েট\",
        \"Cyrl\": \"সিরিলিক\",
        \"Cyrs\": \"প্রাচীন চার্চ স্লাভোনিক সিরিলিক\",
        \"Deva\": \"দেবনাগরি\",
        \"Dsrt\": \"দেসেরাত\",
        \"Egyd\": \"মিশরীয় ডেমোটিক\",
        \"Egyh\": \"মিশরীয় হায়রেটিক\",
        \"Egyp\": \"মিশরীয় হায়ারোগ্লিপ\",
        \"Ethi\": \"ইথিওপিয়\",
        \"Geok\": \"জর্জিয় খুৎসুরি\",
        \"Geor\": \"জর্জিয়ান\",
        \"Glag\": \"গ্লাগোলিটিক\",
        \"Goth\": \"গোথিক\",
        \"Grek\": \"গ্রিক\",
        \"Gujr\": \"গুজরাটি\",
        \"Guru\": \"গুরুমুখি\",
        \"Hanb\": \"হ্যানবি\",
        \"Hang\": \"হাঙ্গুল\",
        \"Hani\": \"হ্যান\",
        \"Hano\": \"হ্যানুনু\",
        \"Hans\": \"সরলীকৃত\",
        \"Hant\": \"ঐতিহ্যবাহী\",
        \"Hebr\": \"হিব্রু\",
        \"Hira\": \"হিরাগানা\",
        \"Hmng\": \"ফাহাও মঙ\",
        \"Hrkt\": \"জাপানি অক্ষরমালা\",
        \"Hung\": \"পুরোনো হাঙ্গেরীয়\",
        \"Inds\": \"সিন্ধু\",
        \"Ital\": \"প্রাচীন ইতালি\",
        \"Jamo\": \"জ্যামো\",
        \"Java\": \"জাভানিজ\",
        \"Jpan\": \"জাপানী\",
        \"Kali\": \"কায়াহ লি\",
        \"Kana\": \"কাটাকানা\",
        \"Khar\": \"খরোষ্ঠী\",
        \"Khmr\": \"খেমের\",
        \"Knda\": \"কানাড়া\",
        \"Kore\": \"কোরিয়ান\",
        \"Kthi\": \"কাইথি\",
        \"Lana\": \"লান্না\",
        \"Laoo\": \"লাও\",
        \"Latf\": \"ফ্রাক্টুর ল্যাটিন\",
        \"Latg\": \"গ্যালিক ল্যাটিন\",
        \"Latn\": \"ল্যাটিন\",
        \"Lepc\": \"লেপ্চা\",
        \"Limb\": \"লিম্বু\",
        \"Lina\": \"লিনিয়ার এ\",
        \"Linb\": \"লিনিয়ার বি\",
        \"Lyci\": \"লাইসিয়ান\",
        \"Lydi\": \"লাইডিয়ান\",
        \"Mand\": \"ম্যান্ডায়ীন\",
        \"Mani\": \"ম্যানিচাইন\",
        \"Maya\": \"মায়ান হায়ারোগ্লিপ\",
        \"Mero\": \"মেরোইটিক\",
        \"Mlym\": \"মালায়ালাম\",
        \"Mong\": \"মোঙ্গোলীয়\",
        \"Moon\": \"মুন\",
        \"Mtei\": \"মেইটেই মায়েক\",
        \"Mymr\": \"মায়ানমার\",
        \"Nkoo\": \"এনকো\",
        \"Ogam\": \"ওঘাম\",
        \"Olck\": \"ওল চিকি\",
        \"Orkh\": \"অর্খোন\",
        \"Orya\": \"ওড়িয়া\",
        \"Osma\": \"ওসমানিয়\",
        \"Perm\": \"প্রাচীন পার্মিক\",
        \"Phag\": \"ফাগ্স-পা\",
        \"Phli\": \"খদিত পাহলভি\",
        \"Phlp\": \"সল্টার পাহলভি\",
        \"Phlv\": \"পুস্তক পাহলভি\",
        \"Phnx\": \"ফিনিশিয়\",
        \"Plrd\": \"পোলার্ড ধ্বনিক\",
        \"Prti\": \"পার্থিয়ন\",
        \"Rjng\": \"রেজ্যাঙ্গ\",
        \"Roro\": \"রোঙ্গোরোঙ্গো\",
        \"Runr\": \"রুনিক\",
        \"Samr\": \"সমেরিটন\",
        \"Sara\": \"সারাতি\",
        \"Saur\": \"সৌরাষ্ট্র\",
        \"Sgnw\": \"চিহ্ন লিখন\",
        \"Shaw\": \"সাভিয়ান\",
        \"Sinh\": \"সিংহলি\",
        \"Sund\": \"সান্দানিজ\",
        \"Sylo\": \"সিলেটি নাগরি\",
        \"Syrc\": \"সিরিয়াক\",
        \"Syre\": \"এস্ট্রেঙ্গেলো সিরিয়াক\",
        \"Syrj\": \"পশ্চিমাঞ্চলীয় সিরিয়াক\",
        \"Syrn\": \"পূর্বাঞ্চলীয় সিরিয়াক\",
        \"Tagb\": \"টাগোওয়ানা\",
        \"Tale\": \"তাইলে\",
        \"Talu\": \"নতুন তাই লু\",
        \"Taml\": \"তামিল\",
        \"Tavt\": \"তাই ভিয়েৎ\",
        \"Telu\": \"তেলেগু\",
        \"Teng\": \"তেঙ্গোয়ার\",
        \"Tfng\": \"তিফিনাগ\",
        \"Tglg\": \"টাগালগ\",
        \"Thaa\": \"থানা\",
        \"Thai\": \"থাই\",
        \"Tibt\": \"তিব্বতি\",
        \"Ugar\": \"উগারিটিক\",
        \"Vaii\": \"ভাই\",
        \"Visp\": \"দৃশ্যমান ভাষা\",
        \"Xpeo\": \"প্রাচীন ফার্সি\",
        \"Xsux\": \"সুমের-আক্কাদীয় কীলকরূপ\",
        \"Yiii\": \"উই\",
        \"Zinh\": \"কাই\",
        \"Zmth\": \"গাণিতিক চিহ্ন\",
        \"Zsye\": \"ইমোজি\",
        \"Zsym\": \"প্রতীকগুলি\",
        \"Zxxx\": \"অলিখিত\",
        \"Zyyy\": \"সাধারন\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/bn.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/bn.json");
    }
}
