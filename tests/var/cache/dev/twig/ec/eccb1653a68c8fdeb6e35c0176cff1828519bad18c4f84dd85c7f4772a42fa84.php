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

/* vendor/symfony/intl/Resources/data/scripts/ka.json */
class __TwigTemplate_289303abb431da8fb136af5cafd797e7f8ea850bc5b4c09177750de14fd17869 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ka.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ka.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Afak\": \"აფაკა\",
        \"Arab\": \"არაბული\",
        \"Armi\": \"იმპერიული არამეული\",
        \"Armn\": \"სომხური\",
        \"Avst\": \"ავესტური\",
        \"Bali\": \"ბალიური\",
        \"Bamu\": \"ბამუმი\",
        \"Bass\": \"ბასა ვაჰი\",
        \"Batk\": \"ბატაკი\",
        \"Beng\": \"ბენგალური\",
        \"Blis\": \"ბლისსიმბოლოები\",
        \"Bopo\": \"ბოპომოფო\",
        \"Brah\": \"ბრაჰმი\",
        \"Brai\": \"ბრაილი\",
        \"Buhd\": \"ბუჰიდი\",
        \"Cakm\": \"ჩაკმა\",
        \"Cari\": \"კარიული\",
        \"Cham\": \"ჩამი\",
        \"Cher\": \"ჩეროკი\",
        \"Cirt\": \"კირთი\",
        \"Copt\": \"კოპტური\",
        \"Cprt\": \"კვიპროსული\",
        \"Cyrl\": \"კირილიცა\",
        \"Cyrs\": \"ძველი სლავური კირილიცა\",
        \"Deva\": \"დევანაგარი\",
        \"Dsrt\": \"დეზერეტის\",
        \"Dupl\": \"დუპლოის სტენოგრაფია\",
        \"Egyd\": \"ეგვიპტური დემოტიკური\",
        \"Egyh\": \"ეგვიპტური იერატიკული\",
        \"Egyp\": \"ეგვიპტური იეროგლიფური\",
        \"Ethi\": \"ეთიოპიური\",
        \"Geok\": \"ხუცური\",
        \"Geor\": \"ქართული\",
        \"Glag\": \"გლაგოლიცა\",
        \"Goth\": \"გოთური\",
        \"Gran\": \"გრანთა\",
        \"Grek\": \"ბერძნული\",
        \"Gujr\": \"გუჯარათული\",
        \"Guru\": \"გურმუხი\",
        \"Hanb\": \"ჰანბი\",
        \"Hang\": \"ჰანგული\",
        \"Hani\": \"ჰანი\",
        \"Hano\": \"ჰანუნოო\",
        \"Hans\": \"გამარტივებული\",
        \"Hant\": \"ტრადიციული\",
        \"Hebr\": \"ებრაული\",
        \"Hira\": \"ჰირაგანა\",
        \"Hluw\": \"ანატოლიური იეროგლიფური\",
        \"Hmng\": \"ფაჰაუ-მონი\",
        \"Hrkt\": \"იაპონური კანა\",
        \"Hung\": \"ძველი უნგრული\",
        \"Jamo\": \"ჯამო\",
        \"Java\": \"იავური\",
        \"Jpan\": \"იაპონური\",
        \"Jurc\": \"ჯურჯენული\",
        \"Kali\": \"კაიაჰ-ლი\",
        \"Kana\": \"კატაკანა\",
        \"Khar\": \"ქაროშთი\",
        \"Khmr\": \"ქმერული\",
        \"Khoj\": \"ქოჯკი\",
        \"Knda\": \"კანადა\",
        \"Kore\": \"კორეული\",
        \"Kpel\": \"კპელე\",
        \"Kthi\": \"კაითი\",
        \"Laoo\": \"ლაოსური\",
        \"Latg\": \"გელური ლათინური\",
        \"Latn\": \"ლათინური\",
        \"Limb\": \"ლიმბუ\",
        \"Lina\": \"A-ხაზოვანი\",
        \"Linb\": \"B-ხაზოვანი\",
        \"Loma\": \"ლომა\",
        \"Lyci\": \"ლიკიური\",
        \"Lydi\": \"ლიდიური\",
        \"Mand\": \"მანდეური\",
        \"Mani\": \"მანიქეური\",
        \"Maya\": \"მაიას იეროგლიფები\",
        \"Mend\": \"მენდე\",
        \"Merc\": \"მეროიტული კურსივი\",
        \"Mero\": \"მეროიტული\",
        \"Mlym\": \"მალაიალამური\",
        \"Mong\": \"მონღოლური\",
        \"Mroo\": \"მრო\",
        \"Mymr\": \"მიანმური\",
        \"Narb\": \"ძველი ჩრდილოეთ-არაბული\",
        \"Nbat\": \"ნაბატეური\",
        \"Nkoo\": \"ნკო\",
        \"Nshu\": \"ნუშუ\",
        \"Ogam\": \"ოღამი\",
        \"Olck\": \"ოლ-ჩიკი\",
        \"Orkh\": \"ორხონული\",
        \"Orya\": \"ორია\",
        \"Osma\": \"ოსმანია\",
        \"Palm\": \"პალმირული\",
        \"Perm\": \"ძველი პერმული\",
        \"Phag\": \"ფაგსპა\",
        \"Phli\": \"მონუმენტური ფალაური\",
        \"Phlp\": \"ფსალმუნური ფალაური\",
        \"Phlv\": \"წიგნური ფალაური\",
        \"Phnx\": \"ფინიკიური\",
        \"Prti\": \"მონუმენტური პართული\",
        \"Rjng\": \"რეჯანგი\",
        \"Roro\": \"რონგორონგო\",
        \"Runr\": \"რუნული\",
        \"Samr\": \"სამარიული\",
        \"Sara\": \"სარატი\",
        \"Sarb\": \"ძველი სამხრეთ-არაბული\",
        \"Saur\": \"საურაშტრა\",
        \"Sgnw\": \"ჟესტთა\",
        \"Shrd\": \"შარადა\",
        \"Sind\": \"ქუდავადი\",
        \"Sinh\": \"სინჰალური\",
        \"Sora\": \"სორან-სომპენი\",
        \"Sund\": \"სუნდანური\",
        \"Sylo\": \"სილოტი ნაგრი\",
        \"Syrc\": \"სირიული\",
        \"Syre\": \"სირიული ესტრანგელო\",
        \"Syrj\": \"დასავლეთი სირიული\",
        \"Syrn\": \"აღმოსავლეთი სირიული\",
        \"Tagb\": \"ტაგბანვა\",
        \"Takr\": \"ტაკრი\",
        \"Tale\": \"ტაი ლე\",
        \"Talu\": \"ახალი ტაი ლიუ\",
        \"Taml\": \"ტამილური\",
        \"Tang\": \"ტანღუტური\",
        \"Tavt\": \"ტაი-ვიეტი\",
        \"Telu\": \"ტელუგუ\",
        \"Teng\": \"ტენგვარი\",
        \"Tfng\": \"ტიფინაღი\",
        \"Thaa\": \"თაანა\",
        \"Thai\": \"ტაი\",
        \"Tibt\": \"ტიბეტური\",
        \"Tirh\": \"ტირჰუტა\",
        \"Ugar\": \"უგარითული\",
        \"Vaii\": \"ვაი\",
        \"Visp\": \"ხილული მეტყველება\",
        \"Wara\": \"ვარანგ-კშიტი\",
        \"Wole\": \"ვოლეაი\",
        \"Xpeo\": \"ძველი სპარსული\",
        \"Xsux\": \"შუმერულ-აქადური ლურსმნული\",
        \"Zinh\": \"გადაღებული\",
        \"Zmth\": \"მათემატიკური ნოტაცია\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"სიმბოლოები\",
        \"Zxxx\": \"უმწერლობო\",
        \"Zyyy\": \"ზოგადი\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/ka.json";
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
        \"Afak\": \"აფაკა\",
        \"Arab\": \"არაბული\",
        \"Armi\": \"იმპერიული არამეული\",
        \"Armn\": \"სომხური\",
        \"Avst\": \"ავესტური\",
        \"Bali\": \"ბალიური\",
        \"Bamu\": \"ბამუმი\",
        \"Bass\": \"ბასა ვაჰი\",
        \"Batk\": \"ბატაკი\",
        \"Beng\": \"ბენგალური\",
        \"Blis\": \"ბლისსიმბოლოები\",
        \"Bopo\": \"ბოპომოფო\",
        \"Brah\": \"ბრაჰმი\",
        \"Brai\": \"ბრაილი\",
        \"Buhd\": \"ბუჰიდი\",
        \"Cakm\": \"ჩაკმა\",
        \"Cari\": \"კარიული\",
        \"Cham\": \"ჩამი\",
        \"Cher\": \"ჩეროკი\",
        \"Cirt\": \"კირთი\",
        \"Copt\": \"კოპტური\",
        \"Cprt\": \"კვიპროსული\",
        \"Cyrl\": \"კირილიცა\",
        \"Cyrs\": \"ძველი სლავური კირილიცა\",
        \"Deva\": \"დევანაგარი\",
        \"Dsrt\": \"დეზერეტის\",
        \"Dupl\": \"დუპლოის სტენოგრაფია\",
        \"Egyd\": \"ეგვიპტური დემოტიკური\",
        \"Egyh\": \"ეგვიპტური იერატიკული\",
        \"Egyp\": \"ეგვიპტური იეროგლიფური\",
        \"Ethi\": \"ეთიოპიური\",
        \"Geok\": \"ხუცური\",
        \"Geor\": \"ქართული\",
        \"Glag\": \"გლაგოლიცა\",
        \"Goth\": \"გოთური\",
        \"Gran\": \"გრანთა\",
        \"Grek\": \"ბერძნული\",
        \"Gujr\": \"გუჯარათული\",
        \"Guru\": \"გურმუხი\",
        \"Hanb\": \"ჰანბი\",
        \"Hang\": \"ჰანგული\",
        \"Hani\": \"ჰანი\",
        \"Hano\": \"ჰანუნოო\",
        \"Hans\": \"გამარტივებული\",
        \"Hant\": \"ტრადიციული\",
        \"Hebr\": \"ებრაული\",
        \"Hira\": \"ჰირაგანა\",
        \"Hluw\": \"ანატოლიური იეროგლიფური\",
        \"Hmng\": \"ფაჰაუ-მონი\",
        \"Hrkt\": \"იაპონური კანა\",
        \"Hung\": \"ძველი უნგრული\",
        \"Jamo\": \"ჯამო\",
        \"Java\": \"იავური\",
        \"Jpan\": \"იაპონური\",
        \"Jurc\": \"ჯურჯენული\",
        \"Kali\": \"კაიაჰ-ლი\",
        \"Kana\": \"კატაკანა\",
        \"Khar\": \"ქაროშთი\",
        \"Khmr\": \"ქმერული\",
        \"Khoj\": \"ქოჯკი\",
        \"Knda\": \"კანადა\",
        \"Kore\": \"კორეული\",
        \"Kpel\": \"კპელე\",
        \"Kthi\": \"კაითი\",
        \"Laoo\": \"ლაოსური\",
        \"Latg\": \"გელური ლათინური\",
        \"Latn\": \"ლათინური\",
        \"Limb\": \"ლიმბუ\",
        \"Lina\": \"A-ხაზოვანი\",
        \"Linb\": \"B-ხაზოვანი\",
        \"Loma\": \"ლომა\",
        \"Lyci\": \"ლიკიური\",
        \"Lydi\": \"ლიდიური\",
        \"Mand\": \"მანდეური\",
        \"Mani\": \"მანიქეური\",
        \"Maya\": \"მაიას იეროგლიფები\",
        \"Mend\": \"მენდე\",
        \"Merc\": \"მეროიტული კურსივი\",
        \"Mero\": \"მეროიტული\",
        \"Mlym\": \"მალაიალამური\",
        \"Mong\": \"მონღოლური\",
        \"Mroo\": \"მრო\",
        \"Mymr\": \"მიანმური\",
        \"Narb\": \"ძველი ჩრდილოეთ-არაბული\",
        \"Nbat\": \"ნაბატეური\",
        \"Nkoo\": \"ნკო\",
        \"Nshu\": \"ნუშუ\",
        \"Ogam\": \"ოღამი\",
        \"Olck\": \"ოლ-ჩიკი\",
        \"Orkh\": \"ორხონული\",
        \"Orya\": \"ორია\",
        \"Osma\": \"ოსმანია\",
        \"Palm\": \"პალმირული\",
        \"Perm\": \"ძველი პერმული\",
        \"Phag\": \"ფაგსპა\",
        \"Phli\": \"მონუმენტური ფალაური\",
        \"Phlp\": \"ფსალმუნური ფალაური\",
        \"Phlv\": \"წიგნური ფალაური\",
        \"Phnx\": \"ფინიკიური\",
        \"Prti\": \"მონუმენტური პართული\",
        \"Rjng\": \"რეჯანგი\",
        \"Roro\": \"რონგორონგო\",
        \"Runr\": \"რუნული\",
        \"Samr\": \"სამარიული\",
        \"Sara\": \"სარატი\",
        \"Sarb\": \"ძველი სამხრეთ-არაბული\",
        \"Saur\": \"საურაშტრა\",
        \"Sgnw\": \"ჟესტთა\",
        \"Shrd\": \"შარადა\",
        \"Sind\": \"ქუდავადი\",
        \"Sinh\": \"სინჰალური\",
        \"Sora\": \"სორან-სომპენი\",
        \"Sund\": \"სუნდანური\",
        \"Sylo\": \"სილოტი ნაგრი\",
        \"Syrc\": \"სირიული\",
        \"Syre\": \"სირიული ესტრანგელო\",
        \"Syrj\": \"დასავლეთი სირიული\",
        \"Syrn\": \"აღმოსავლეთი სირიული\",
        \"Tagb\": \"ტაგბანვა\",
        \"Takr\": \"ტაკრი\",
        \"Tale\": \"ტაი ლე\",
        \"Talu\": \"ახალი ტაი ლიუ\",
        \"Taml\": \"ტამილური\",
        \"Tang\": \"ტანღუტური\",
        \"Tavt\": \"ტაი-ვიეტი\",
        \"Telu\": \"ტელუგუ\",
        \"Teng\": \"ტენგვარი\",
        \"Tfng\": \"ტიფინაღი\",
        \"Thaa\": \"თაანა\",
        \"Thai\": \"ტაი\",
        \"Tibt\": \"ტიბეტური\",
        \"Tirh\": \"ტირჰუტა\",
        \"Ugar\": \"უგარითული\",
        \"Vaii\": \"ვაი\",
        \"Visp\": \"ხილული მეტყველება\",
        \"Wara\": \"ვარანგ-კშიტი\",
        \"Wole\": \"ვოლეაი\",
        \"Xpeo\": \"ძველი სპარსული\",
        \"Xsux\": \"შუმერულ-აქადური ლურსმნული\",
        \"Zinh\": \"გადაღებული\",
        \"Zmth\": \"მათემატიკური ნოტაცია\",
        \"Zsye\": \"Emoji\",
        \"Zsym\": \"სიმბოლოები\",
        \"Zxxx\": \"უმწერლობო\",
        \"Zyyy\": \"ზოგადი\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/ka.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/ka.json");
    }
}