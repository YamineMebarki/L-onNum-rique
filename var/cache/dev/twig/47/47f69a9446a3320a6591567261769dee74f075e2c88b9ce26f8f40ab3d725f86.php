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

/* vendor/symfony/intl/Resources/data/regions/ka.json */
class __TwigTemplate_106a8dbeecbea4383d0e5eeaabf7c6f477b06d495c6f7e76415779a46178d99a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/ka.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/ka.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"ანდორა\",
        \"AE\": \"არაბთა გაერთიანებული საამიროები\",
        \"AF\": \"ავღანეთი\",
        \"AG\": \"ანტიგუა და ბარბუდა\",
        \"AI\": \"ანგილია\",
        \"AL\": \"ალბანეთი\",
        \"AM\": \"სომხეთი\",
        \"AO\": \"ანგოლა\",
        \"AQ\": \"ანტარქტიკა\",
        \"AR\": \"არგენტინა\",
        \"AS\": \"ამერიკის სამოა\",
        \"AT\": \"ავსტრია\",
        \"AU\": \"ავსტრალია\",
        \"AW\": \"არუბა\",
        \"AX\": \"ალანდის კუნძულები\",
        \"AZ\": \"აზერბაიჯანი\",
        \"BA\": \"ბოსნია და ჰერცეგოვინა\",
        \"BB\": \"ბარბადოსი\",
        \"BD\": \"ბანგლადეში\",
        \"BE\": \"ბელგია\",
        \"BF\": \"ბურკინა-ფასო\",
        \"BG\": \"ბულგარეთი\",
        \"BH\": \"ბაჰრეინი\",
        \"BI\": \"ბურუნდი\",
        \"BJ\": \"ბენინი\",
        \"BL\": \"სენ-ბართელმი\",
        \"BM\": \"ბერმუდა\",
        \"BN\": \"ბრუნეი\",
        \"BO\": \"ბოლივია\",
        \"BQ\": \"კარიბის ნიდერლანდები\",
        \"BR\": \"ბრაზილია\",
        \"BS\": \"ბაჰამის კუნძულები\",
        \"BT\": \"ბუტანი\",
        \"BV\": \"ბუვე\",
        \"BW\": \"ბოტსვანა\",
        \"BY\": \"ბელარუსი\",
        \"BZ\": \"ბელიზი\",
        \"CA\": \"კანადა\",
        \"CC\": \"ქოქოსის (კილინგის) კუნძულები\",
        \"CD\": \"კონგო - კინშასა\",
        \"CF\": \"ცენტრალური აფრიკის რესპუბლიკა\",
        \"CG\": \"კონგო - ბრაზავილი\",
        \"CH\": \"შვეიცარია\",
        \"CI\": \"კოტ-დივუარი\",
        \"CK\": \"კუკის კუნძულები\",
        \"CL\": \"ჩილე\",
        \"CM\": \"კამერუნი\",
        \"CN\": \"ჩინეთი\",
        \"CO\": \"კოლუმბია\",
        \"CR\": \"კოსტა-რიკა\",
        \"CU\": \"კუბა\",
        \"CV\": \"კაბო-ვერდე\",
        \"CW\": \"კიურასაო\",
        \"CX\": \"შობის კუნძული\",
        \"CY\": \"კვიპროსი\",
        \"CZ\": \"ჩეხეთი\",
        \"DE\": \"გერმანია\",
        \"DJ\": \"ჯიბუტი\",
        \"DK\": \"დანია\",
        \"DM\": \"დომინიკა\",
        \"DO\": \"დომინიკელთა რესპუბლიკა\",
        \"DZ\": \"ალჟირი\",
        \"EC\": \"ეკვადორი\",
        \"EE\": \"ესტონეთი\",
        \"EG\": \"ეგვიპტე\",
        \"EH\": \"დასავლეთ საჰარა\",
        \"ER\": \"ერიტრეა\",
        \"ES\": \"ესპანეთი\",
        \"ET\": \"ეთიოპია\",
        \"FI\": \"ფინეთი\",
        \"FJ\": \"ფიჯი\",
        \"FK\": \"ფოლკლენდის კუნძულები\",
        \"FM\": \"მიკრონეზია\",
        \"FO\": \"ფარერის კუნძულები\",
        \"FR\": \"საფრანგეთი\",
        \"GA\": \"გაბონი\",
        \"GB\": \"გაერთიანებული სამეფო\",
        \"GD\": \"გრენადა\",
        \"GE\": \"საქართველო\",
        \"GF\": \"საფრანგეთის გვიანა\",
        \"GG\": \"გერნსი\",
        \"GH\": \"განა\",
        \"GI\": \"გიბრალტარი\",
        \"GL\": \"გრენლანდია\",
        \"GM\": \"გამბია\",
        \"GN\": \"გვინეა\",
        \"GP\": \"გვადელუპა\",
        \"GQ\": \"ეკვატორული გვინეა\",
        \"GR\": \"საბერძნეთი\",
        \"GS\": \"სამხრეთ ჯორჯია და სამხრეთ სენდვიჩის კუნძულები\",
        \"GT\": \"გვატემალა\",
        \"GU\": \"გუამი\",
        \"GW\": \"გვინეა-ბისაუ\",
        \"GY\": \"გაიანა\",
        \"HK\": \"ჰონკონგის სპეციალური ადმინისტრაციული რეგიონი, ჩინეთი\",
        \"HM\": \"ჰერდი და მაკდონალდის კუნძულები\",
        \"HN\": \"ჰონდურასი\",
        \"HR\": \"ხორვატია\",
        \"HT\": \"ჰაიტი\",
        \"HU\": \"უნგრეთი\",
        \"ID\": \"ინდონეზია\",
        \"IE\": \"ირლანდია\",
        \"IL\": \"ისრაელი\",
        \"IM\": \"მენის კუნძული\",
        \"IN\": \"ინდოეთი\",
        \"IO\": \"ბრიტანეთის ტერიტორია ინდოეთის ოკეანეში\",
        \"IQ\": \"ერაყი\",
        \"IR\": \"ირანი\",
        \"IS\": \"ისლანდია\",
        \"IT\": \"იტალია\",
        \"JE\": \"ჯერსი\",
        \"JM\": \"იამაიკა\",
        \"JO\": \"იორდანია\",
        \"JP\": \"იაპონია\",
        \"KE\": \"კენია\",
        \"KG\": \"ყირგიზეთი\",
        \"KH\": \"კამბოჯა\",
        \"KI\": \"კირიბატი\",
        \"KM\": \"კომორის კუნძულები\",
        \"KN\": \"სენტ-კიტსი და ნევისი\",
        \"KP\": \"ჩრდილოეთ კორეა\",
        \"KR\": \"სამხრეთ კორეა\",
        \"KW\": \"ქუვეითი\",
        \"KY\": \"კაიმანის კუნძულები\",
        \"KZ\": \"ყაზახეთი\",
        \"LA\": \"ლაოსი\",
        \"LB\": \"ლიბანი\",
        \"LC\": \"სენტ-ლუსია\",
        \"LI\": \"ლიხტენშტაინი\",
        \"LK\": \"შრი-ლანკა\",
        \"LR\": \"ლიბერია\",
        \"LS\": \"ლესოთო\",
        \"LT\": \"ლიეტუვა\",
        \"LU\": \"ლუქსემბურგი\",
        \"LV\": \"ლატვია\",
        \"LY\": \"ლიბია\",
        \"MA\": \"მაროკო\",
        \"MC\": \"მონაკო\",
        \"MD\": \"მოლდოვა\",
        \"ME\": \"მონტენეგრო\",
        \"MF\": \"სენ-მარტენი\",
        \"MG\": \"მადაგასკარი\",
        \"MH\": \"მარშალის კუნძულები\",
        \"MK\": \"ჩრდილოეთ მაკედონია\",
        \"ML\": \"მალი\",
        \"MM\": \"მიანმარი (ბირმა)\",
        \"MN\": \"მონღოლეთი\",
        \"MO\": \"მაკაოს სპეციალური ადმინისტრაციული რეგიონი, ჩინეთი\",
        \"MP\": \"ჩრდილოეთ მარიანას კუნძულები\",
        \"MQ\": \"მარტინიკა\",
        \"MR\": \"მავრიტანია\",
        \"MS\": \"მონსერატი\",
        \"MT\": \"მალტა\",
        \"MU\": \"მავრიკი\",
        \"MV\": \"მალდივები\",
        \"MW\": \"მალავი\",
        \"MX\": \"მექსიკა\",
        \"MY\": \"მალაიზია\",
        \"MZ\": \"მოზამბიკი\",
        \"NA\": \"ნამიბია\",
        \"NC\": \"ახალი კალედონია\",
        \"NE\": \"ნიგერი\",
        \"NF\": \"ნორფოლკის კუნძული\",
        \"NG\": \"ნიგერია\",
        \"NI\": \"ნიკარაგუა\",
        \"NL\": \"ნიდერლანდები\",
        \"NO\": \"ნორვეგია\",
        \"NP\": \"ნეპალი\",
        \"NR\": \"ნაურუ\",
        \"NU\": \"ნიუე\",
        \"NZ\": \"ახალი ზელანდია\",
        \"OM\": \"ომანი\",
        \"PA\": \"პანამა\",
        \"PE\": \"პერუ\",
        \"PF\": \"საფრანგეთის პოლინეზია\",
        \"PG\": \"პაპუა-ახალი გვინეა\",
        \"PH\": \"ფილიპინები\",
        \"PK\": \"პაკისტანი\",
        \"PL\": \"პოლონეთი\",
        \"PM\": \"სენ-პიერი და მიკელონი\",
        \"PN\": \"პიტკერნის კუნძულები\",
        \"PR\": \"პუერტო-რიკო\",
        \"PS\": \"პალესტინის ტერიტორიები\",
        \"PT\": \"პორტუგალია\",
        \"PW\": \"პალაუ\",
        \"PY\": \"პარაგვაი\",
        \"QA\": \"კატარი\",
        \"RE\": \"რეუნიონი\",
        \"RO\": \"რუმინეთი\",
        \"RS\": \"სერბეთი\",
        \"RU\": \"რუსეთი\",
        \"RW\": \"რუანდა\",
        \"SA\": \"საუდის არაბეთი\",
        \"SB\": \"სოლომონის კუნძულები\",
        \"SC\": \"სეიშელის კუნძულები\",
        \"SD\": \"სუდანი\",
        \"SE\": \"შვედეთი\",
        \"SG\": \"სინგაპური\",
        \"SH\": \"წმინდა ელენეს კუნძული\",
        \"SI\": \"სლოვენია\",
        \"SJ\": \"შპიცბერგენი და იან-მაიენი\",
        \"SK\": \"სლოვაკეთი\",
        \"SL\": \"სიერა-ლეონე\",
        \"SM\": \"სან-მარინო\",
        \"SN\": \"სენეგალი\",
        \"SO\": \"სომალი\",
        \"SR\": \"სურინამი\",
        \"SS\": \"სამხრეთ სუდანი\",
        \"ST\": \"სან-ტომე და პრინსიპი\",
        \"SV\": \"სალვადორი\",
        \"SX\": \"სინტ-მარტენი\",
        \"SY\": \"სირია\",
        \"SZ\": \"სვაზილენდი\",
        \"TC\": \"თერქს-ქაიქოსის კუნძულები\",
        \"TD\": \"ჩადი\",
        \"TF\": \"ფრანგული სამხრეთის ტერიტორიები\",
        \"TG\": \"ტოგო\",
        \"TH\": \"ტაილანდი\",
        \"TJ\": \"ტაჯიკეთი\",
        \"TK\": \"ტოკელაუ\",
        \"TL\": \"ტიმორ-ლესტე\",
        \"TM\": \"თურქმენეთი\",
        \"TN\": \"ტუნისი\",
        \"TO\": \"ტონგა\",
        \"TR\": \"თურქეთი\",
        \"TT\": \"ტრინიდადი და ტობაგო\",
        \"TV\": \"ტუვალუ\",
        \"TW\": \"ტაივანი\",
        \"TZ\": \"ტანზანია\",
        \"UA\": \"უკრაინა\",
        \"UG\": \"უგანდა\",
        \"UM\": \"აშშ-ის შორეული კუნძულები\",
        \"US\": \"ამერიკის შეერთებული შტატები\",
        \"UY\": \"ურუგვაი\",
        \"UZ\": \"უზბეკეთი\",
        \"VA\": \"ქალაქი ვატიკანი\",
        \"VC\": \"სენტ-ვინსენტი და გრენადინები\",
        \"VE\": \"ვენესუელა\",
        \"VG\": \"ბრიტანეთის ვირჯინის კუნძულები\",
        \"VI\": \"აშშ-ის ვირჯინის კუნძულები\",
        \"VN\": \"ვიეტნამი\",
        \"VU\": \"ვანუატუ\",
        \"WF\": \"უოლისი და ფუტუნა\",
        \"WS\": \"სამოა\",
        \"YE\": \"იემენი\",
        \"YT\": \"მაიოტა\",
        \"ZA\": \"სამხრეთ აფრიკის რესპუბლიკა\",
        \"ZM\": \"ზამბია\",
        \"ZW\": \"ზიმბაბვე\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/ka.json";
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
        \"AD\": \"ანდორა\",
        \"AE\": \"არაბთა გაერთიანებული საამიროები\",
        \"AF\": \"ავღანეთი\",
        \"AG\": \"ანტიგუა და ბარბუდა\",
        \"AI\": \"ანგილია\",
        \"AL\": \"ალბანეთი\",
        \"AM\": \"სომხეთი\",
        \"AO\": \"ანგოლა\",
        \"AQ\": \"ანტარქტიკა\",
        \"AR\": \"არგენტინა\",
        \"AS\": \"ამერიკის სამოა\",
        \"AT\": \"ავსტრია\",
        \"AU\": \"ავსტრალია\",
        \"AW\": \"არუბა\",
        \"AX\": \"ალანდის კუნძულები\",
        \"AZ\": \"აზერბაიჯანი\",
        \"BA\": \"ბოსნია და ჰერცეგოვინა\",
        \"BB\": \"ბარბადოსი\",
        \"BD\": \"ბანგლადეში\",
        \"BE\": \"ბელგია\",
        \"BF\": \"ბურკინა-ფასო\",
        \"BG\": \"ბულგარეთი\",
        \"BH\": \"ბაჰრეინი\",
        \"BI\": \"ბურუნდი\",
        \"BJ\": \"ბენინი\",
        \"BL\": \"სენ-ბართელმი\",
        \"BM\": \"ბერმუდა\",
        \"BN\": \"ბრუნეი\",
        \"BO\": \"ბოლივია\",
        \"BQ\": \"კარიბის ნიდერლანდები\",
        \"BR\": \"ბრაზილია\",
        \"BS\": \"ბაჰამის კუნძულები\",
        \"BT\": \"ბუტანი\",
        \"BV\": \"ბუვე\",
        \"BW\": \"ბოტსვანა\",
        \"BY\": \"ბელარუსი\",
        \"BZ\": \"ბელიზი\",
        \"CA\": \"კანადა\",
        \"CC\": \"ქოქოსის (კილინგის) კუნძულები\",
        \"CD\": \"კონგო - კინშასა\",
        \"CF\": \"ცენტრალური აფრიკის რესპუბლიკა\",
        \"CG\": \"კონგო - ბრაზავილი\",
        \"CH\": \"შვეიცარია\",
        \"CI\": \"კოტ-დივუარი\",
        \"CK\": \"კუკის კუნძულები\",
        \"CL\": \"ჩილე\",
        \"CM\": \"კამერუნი\",
        \"CN\": \"ჩინეთი\",
        \"CO\": \"კოლუმბია\",
        \"CR\": \"კოსტა-რიკა\",
        \"CU\": \"კუბა\",
        \"CV\": \"კაბო-ვერდე\",
        \"CW\": \"კიურასაო\",
        \"CX\": \"შობის კუნძული\",
        \"CY\": \"კვიპროსი\",
        \"CZ\": \"ჩეხეთი\",
        \"DE\": \"გერმანია\",
        \"DJ\": \"ჯიბუტი\",
        \"DK\": \"დანია\",
        \"DM\": \"დომინიკა\",
        \"DO\": \"დომინიკელთა რესპუბლიკა\",
        \"DZ\": \"ალჟირი\",
        \"EC\": \"ეკვადორი\",
        \"EE\": \"ესტონეთი\",
        \"EG\": \"ეგვიპტე\",
        \"EH\": \"დასავლეთ საჰარა\",
        \"ER\": \"ერიტრეა\",
        \"ES\": \"ესპანეთი\",
        \"ET\": \"ეთიოპია\",
        \"FI\": \"ფინეთი\",
        \"FJ\": \"ფიჯი\",
        \"FK\": \"ფოლკლენდის კუნძულები\",
        \"FM\": \"მიკრონეზია\",
        \"FO\": \"ფარერის კუნძულები\",
        \"FR\": \"საფრანგეთი\",
        \"GA\": \"გაბონი\",
        \"GB\": \"გაერთიანებული სამეფო\",
        \"GD\": \"გრენადა\",
        \"GE\": \"საქართველო\",
        \"GF\": \"საფრანგეთის გვიანა\",
        \"GG\": \"გერნსი\",
        \"GH\": \"განა\",
        \"GI\": \"გიბრალტარი\",
        \"GL\": \"გრენლანდია\",
        \"GM\": \"გამბია\",
        \"GN\": \"გვინეა\",
        \"GP\": \"გვადელუპა\",
        \"GQ\": \"ეკვატორული გვინეა\",
        \"GR\": \"საბერძნეთი\",
        \"GS\": \"სამხრეთ ჯორჯია და სამხრეთ სენდვიჩის კუნძულები\",
        \"GT\": \"გვატემალა\",
        \"GU\": \"გუამი\",
        \"GW\": \"გვინეა-ბისაუ\",
        \"GY\": \"გაიანა\",
        \"HK\": \"ჰონკონგის სპეციალური ადმინისტრაციული რეგიონი, ჩინეთი\",
        \"HM\": \"ჰერდი და მაკდონალდის კუნძულები\",
        \"HN\": \"ჰონდურასი\",
        \"HR\": \"ხორვატია\",
        \"HT\": \"ჰაიტი\",
        \"HU\": \"უნგრეთი\",
        \"ID\": \"ინდონეზია\",
        \"IE\": \"ირლანდია\",
        \"IL\": \"ისრაელი\",
        \"IM\": \"მენის კუნძული\",
        \"IN\": \"ინდოეთი\",
        \"IO\": \"ბრიტანეთის ტერიტორია ინდოეთის ოკეანეში\",
        \"IQ\": \"ერაყი\",
        \"IR\": \"ირანი\",
        \"IS\": \"ისლანდია\",
        \"IT\": \"იტალია\",
        \"JE\": \"ჯერსი\",
        \"JM\": \"იამაიკა\",
        \"JO\": \"იორდანია\",
        \"JP\": \"იაპონია\",
        \"KE\": \"კენია\",
        \"KG\": \"ყირგიზეთი\",
        \"KH\": \"კამბოჯა\",
        \"KI\": \"კირიბატი\",
        \"KM\": \"კომორის კუნძულები\",
        \"KN\": \"სენტ-კიტსი და ნევისი\",
        \"KP\": \"ჩრდილოეთ კორეა\",
        \"KR\": \"სამხრეთ კორეა\",
        \"KW\": \"ქუვეითი\",
        \"KY\": \"კაიმანის კუნძულები\",
        \"KZ\": \"ყაზახეთი\",
        \"LA\": \"ლაოსი\",
        \"LB\": \"ლიბანი\",
        \"LC\": \"სენტ-ლუსია\",
        \"LI\": \"ლიხტენშტაინი\",
        \"LK\": \"შრი-ლანკა\",
        \"LR\": \"ლიბერია\",
        \"LS\": \"ლესოთო\",
        \"LT\": \"ლიეტუვა\",
        \"LU\": \"ლუქსემბურგი\",
        \"LV\": \"ლატვია\",
        \"LY\": \"ლიბია\",
        \"MA\": \"მაროკო\",
        \"MC\": \"მონაკო\",
        \"MD\": \"მოლდოვა\",
        \"ME\": \"მონტენეგრო\",
        \"MF\": \"სენ-მარტენი\",
        \"MG\": \"მადაგასკარი\",
        \"MH\": \"მარშალის კუნძულები\",
        \"MK\": \"ჩრდილოეთ მაკედონია\",
        \"ML\": \"მალი\",
        \"MM\": \"მიანმარი (ბირმა)\",
        \"MN\": \"მონღოლეთი\",
        \"MO\": \"მაკაოს სპეციალური ადმინისტრაციული რეგიონი, ჩინეთი\",
        \"MP\": \"ჩრდილოეთ მარიანას კუნძულები\",
        \"MQ\": \"მარტინიკა\",
        \"MR\": \"მავრიტანია\",
        \"MS\": \"მონსერატი\",
        \"MT\": \"მალტა\",
        \"MU\": \"მავრიკი\",
        \"MV\": \"მალდივები\",
        \"MW\": \"მალავი\",
        \"MX\": \"მექსიკა\",
        \"MY\": \"მალაიზია\",
        \"MZ\": \"მოზამბიკი\",
        \"NA\": \"ნამიბია\",
        \"NC\": \"ახალი კალედონია\",
        \"NE\": \"ნიგერი\",
        \"NF\": \"ნორფოლკის კუნძული\",
        \"NG\": \"ნიგერია\",
        \"NI\": \"ნიკარაგუა\",
        \"NL\": \"ნიდერლანდები\",
        \"NO\": \"ნორვეგია\",
        \"NP\": \"ნეპალი\",
        \"NR\": \"ნაურუ\",
        \"NU\": \"ნიუე\",
        \"NZ\": \"ახალი ზელანდია\",
        \"OM\": \"ომანი\",
        \"PA\": \"პანამა\",
        \"PE\": \"პერუ\",
        \"PF\": \"საფრანგეთის პოლინეზია\",
        \"PG\": \"პაპუა-ახალი გვინეა\",
        \"PH\": \"ფილიპინები\",
        \"PK\": \"პაკისტანი\",
        \"PL\": \"პოლონეთი\",
        \"PM\": \"სენ-პიერი და მიკელონი\",
        \"PN\": \"პიტკერნის კუნძულები\",
        \"PR\": \"პუერტო-რიკო\",
        \"PS\": \"პალესტინის ტერიტორიები\",
        \"PT\": \"პორტუგალია\",
        \"PW\": \"პალაუ\",
        \"PY\": \"პარაგვაი\",
        \"QA\": \"კატარი\",
        \"RE\": \"რეუნიონი\",
        \"RO\": \"რუმინეთი\",
        \"RS\": \"სერბეთი\",
        \"RU\": \"რუსეთი\",
        \"RW\": \"რუანდა\",
        \"SA\": \"საუდის არაბეთი\",
        \"SB\": \"სოლომონის კუნძულები\",
        \"SC\": \"სეიშელის კუნძულები\",
        \"SD\": \"სუდანი\",
        \"SE\": \"შვედეთი\",
        \"SG\": \"სინგაპური\",
        \"SH\": \"წმინდა ელენეს კუნძული\",
        \"SI\": \"სლოვენია\",
        \"SJ\": \"შპიცბერგენი და იან-მაიენი\",
        \"SK\": \"სლოვაკეთი\",
        \"SL\": \"სიერა-ლეონე\",
        \"SM\": \"სან-მარინო\",
        \"SN\": \"სენეგალი\",
        \"SO\": \"სომალი\",
        \"SR\": \"სურინამი\",
        \"SS\": \"სამხრეთ სუდანი\",
        \"ST\": \"სან-ტომე და პრინსიპი\",
        \"SV\": \"სალვადორი\",
        \"SX\": \"სინტ-მარტენი\",
        \"SY\": \"სირია\",
        \"SZ\": \"სვაზილენდი\",
        \"TC\": \"თერქს-ქაიქოსის კუნძულები\",
        \"TD\": \"ჩადი\",
        \"TF\": \"ფრანგული სამხრეთის ტერიტორიები\",
        \"TG\": \"ტოგო\",
        \"TH\": \"ტაილანდი\",
        \"TJ\": \"ტაჯიკეთი\",
        \"TK\": \"ტოკელაუ\",
        \"TL\": \"ტიმორ-ლესტე\",
        \"TM\": \"თურქმენეთი\",
        \"TN\": \"ტუნისი\",
        \"TO\": \"ტონგა\",
        \"TR\": \"თურქეთი\",
        \"TT\": \"ტრინიდადი და ტობაგო\",
        \"TV\": \"ტუვალუ\",
        \"TW\": \"ტაივანი\",
        \"TZ\": \"ტანზანია\",
        \"UA\": \"უკრაინა\",
        \"UG\": \"უგანდა\",
        \"UM\": \"აშშ-ის შორეული კუნძულები\",
        \"US\": \"ამერიკის შეერთებული შტატები\",
        \"UY\": \"ურუგვაი\",
        \"UZ\": \"უზბეკეთი\",
        \"VA\": \"ქალაქი ვატიკანი\",
        \"VC\": \"სენტ-ვინსენტი და გრენადინები\",
        \"VE\": \"ვენესუელა\",
        \"VG\": \"ბრიტანეთის ვირჯინის კუნძულები\",
        \"VI\": \"აშშ-ის ვირჯინის კუნძულები\",
        \"VN\": \"ვიეტნამი\",
        \"VU\": \"ვანუატუ\",
        \"WF\": \"უოლისი და ფუტუნა\",
        \"WS\": \"სამოა\",
        \"YE\": \"იემენი\",
        \"YT\": \"მაიოტა\",
        \"ZA\": \"სამხრეთ აფრიკის რესპუბლიკა\",
        \"ZM\": \"ზამბია\",
        \"ZW\": \"ზიმბაბვე\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/ka.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/ka.json");
    }
}