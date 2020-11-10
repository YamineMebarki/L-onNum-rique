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

/* vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Address.php */
class __TwigTemplate_7be76077b5347de97656b36c6a2a3510a115b22e66ff8534f704e936f9701c76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ka_GE;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('ქალაქი', 'ქ.');

    protected static \$regionSuffix = array('რაიონი');
    protected static \$streetSuffix = array(
        'ჩიხი', 'ქ.', 'გამზირი', 'ქუჩა', 'გზატკეცილი', 'მოედანი', 'ბულვარი',
        'აღმართი', 'ხეივანი'
    );

    protected static \$buildingNumber = array('##');
    protected static \$postcode = array('####');
    protected static \$country = array(
        'ავსტრალია', 'ავსტრია', 'ავღანეთი', 'აზერბაიჯანი', 'ალანდის კუნძულები', 'ალბანეთი',
        'ალჟირი', 'ამერიკის სამოა', 'ანგილია', 'ანგოლა', 'ანდორა', 'ანტარქტიდა', 'ანტიგუა და ბარბუდა',
        'არაბთა გაერთიანებული საამიროები', 'არგენტინა', 'არუბა', 'აღმოსავლეთი ტიმორი', 'აშშ',
        'აშშ-ის მიმდებარე მცირე კუნძულები', 'ახალი ზელანდია', 'ახალი კალედონია', 'ბანგლადეში',
        'ბარბადოსი', 'ბაჰამის კუნძულები', 'ბაჰრეინი', 'ბელარუსი', 'ბელგია', 'ბელიზი', 'ბენინი',
        'ბერმუდის კუნძულები', 'ბოლივია', 'ბოსნია და ჰერცეგოვინა', 'ბოტსვანა', 'ბრაზილია',
        'ბრუნეი დარუსალამი', 'ბუვე', 'ბულგარეთი', 'ბურკინა-ფასო', 'ბურუნდი', 'ბჰუტანი', 'გაბონი',
        'გაერთიანებული სამეფო', 'გაიანა', 'გამბია', 'განა', 'გერმანია', 'გერნზი', 'გვადელუპა', 'გვატემალა',
        'გვინეა', 'გვინეა-ბისაუ', 'გიბრალტარი', 'გრენადა', 'გრენლანდია', 'გუამი', 'დანია', 'დასავლეთი საჰარა',
        'დომინიკა', 'დომინიკელთა რესპუბლიკა', 'ეგვიპტე', 'ეთიოპია', 'ეკვადორი', 'ეკვატორული გვინეა', 'ერაყი',
        'ერიტრეა', 'ესპანეთი', 'ესტონეთი', 'ვანუატუ', 'ვატიკანი (წმინდა საყდარი)', 'ვენესუელა', 'ვიეტნამი',
        'ვირჯინის კუნძულები (აშშ-ის)', 'ვირჯინის კუნძულები (ბრიტანეთის)', 'ზამბია', 'ზიმბაბვე', 'თურქეთი',
        'თურქმენეთი', 'იამაიკა', 'იაპონია', 'იემენი', 'ინდოეთი', 'ინდონეზია', 'იორდანია',
        'ირანის მუსულმანური რესპუბლიკა', 'ირლანდია', 'ისლანდია', 'ისრაელი', 'იტალია', 'კაბო-ვერდე',
        'კაიმანის კუნძულები', 'კამბოჯა', 'კამერუნი', 'კანადა', 'კატარი', 'კენია', 'კვიპროსი', 'კირიბატი',
        'კოლუმბია', 'კომორის კუნძულების კავშირი', 'კონგო', 'კონგოს დემოკრატიული რესპუბლიკა', 'კოსტა-რიკა',
        'კოტ-დ’ივუარი', 'კუბა', 'კუკის კუნძულები', 'კუნძული მენი', 'ლაოსის სახალხო დემოკრატიული რესპუბლიკა',
        'ლატვია', 'ლესოთო', 'ლიბანი', 'ლიბერია', 'ლიბიის არაბული ჯამაჰირია', 'ლიტვა', 'ლიხტენშტაინი',
        'ლუქსემბურგი', 'მადაგასკარი', 'მავრიკი', 'მავრიტანია', 'მაიოტა', 'მაკაო', 'მაკედონია', 'მალავი',
        'მალაიზია', 'მალდივი', 'მალი', 'მალტა', 'მაროკო', 'მარტინიკა', 'მარშალის კუნძულები', 'მექსიკა',
        'მიანმარი', 'მიკრონეზიის ფედერაციული შტატები', 'მოზამბიკი', 'მოლდოვას რესპუბლიკა', 'მონაკო', 'მონსერატი',
        'მონღოლეთი', 'ნამიბია', 'ნაურუ', 'ნეპალი', 'ნიგერი', 'ნიგერია', 'ნიდერლანდი', 'ნიდერლანდის ანტილები',
        'ნიკარაგუა', 'ნიუე', 'ნორვეგია', 'ნორფოლკი (კუნძული)', 'ომანი', 'პაკისტანი', 'პალაუ',
        'პალესტინის ტერიტორიები, ოკუპირებული', 'პანამა', 'პაპუა-ახალი გვინეა', 'პარაგვაი', 'პერუ',
        'პიტკერნის კუნძულები', 'პოლონეთი', 'პორტუგალია', 'პუერტო-რიკო', 'რეიუნიონი', 'რუანდა', 'რუმინეთი',
        'რუსეთი', 'საბერძნეთი', 'სალვადორი', 'სამოა', 'სამხრეთი აფრიკა',
        'სამხრეთი გეორგია და სამხრეთ სენდვიჩის კუნძულები', 'სამხრეთი კორეა', 'სან-მარინო', 'სან-ტომე და პრინსიპი',
        'საუდის არაბეთი', 'საფრანგეთი', 'საფრანგეთის გვიანა', 'საფრანგეთის პოლინეზია',
        'საფრანგეთის სამხრეთული და ანტარქტიდული ტერიტორია', 'საქართველო', 'სეიშელი', 'სენ-ბართელმი',
        'სენ-პიერი და მიკელონი', 'სენეგალი', 'სენტ-ვინსენტი და გრენადინები', 'სენტ-კიტსი და ნევისი',
        'სენტ-ლუსია', 'სერბეთი', 'სვაზილენდი', 'სვალბარდი და იან-მაიენი', 'სიერა-ლეონე', 'სინგაპური',
        'სირიის არაბთა რესპუბლიკა', 'სლოვაკეთი', 'სლოვენია', 'სოლომონის კუნძულები', 'სომალი', 'სომხეთი', 'სუდანი',
        'სურინამი', 'ტაივანი', 'ტაილანდი', 'ტანზანიის გაერთიანებული რესპუბლიკა', 'ტაჯიკეთი',
        'ტერქსისა და კაიკოსის კუნძულები', 'ტოგო', 'ტოკელაუ', 'ტონგა', 'ტრინიდადი და ტობაგო', 'ტუვალუ', 'ტუნისი',
        'უგანდა', 'უზბეკეთი', 'უკრაინა', 'უნგრეთი', 'უოლისი და ფუტუნა', 'ურუგვაი', 'ფარერის კუნძულები', 'ფილიპინები',
        'ფინეთი', 'ფიჯი', 'ფოლკლენდის კუნძულები (მალვინები)', 'ქოქოსის კუნძულები', 'ქუვეითი', 'ყაზახეთი', 'ყირგიზეთი',
        'შვედეთი', 'შვეიცარია', 'შობის კუნძული', 'შრი-ლანკა', 'ჩადი', 'ჩერნოგორია', 'ჩეხეთი', 'ჩილე', 'ჩინეთი',
        'ჩრდილოეთი კორეა', 'ჩრდილოეთი მარიანას კუნძულები', 'ცენტრალური აფრიკის რესპუბლიკა', 'წმინდა ელენეს კუნძული',
        'წმინდა მარტინი (საფრანგეთის ნაწილი)', 'ხორვატია', 'ჯერზი', 'ჯიბუტი', 'ჰაიტი',
        'ჰერდი და მაკდონალდის კუნძულები', 'ჰონგ-კონგი', 'ჰონდურასი'
    );

    protected static \$region = array(
        'აფხაზეთი', 'აჭარა', 'იმერეთი', 'სამეგრელო-ზემო სვანეთი', 'მცხეთა-მთიანეთი', 'სამცხე-ჯავახეთი',
        'შიდა ქართლი', 'კახეთი', 'რაჭა-ლეჩხუმი და ქვემო სვანეთი', 'გურია', 'ქვემო ქართლი'
    );

    protected static \$regionGenitiveForm = array(
        'აფხაზეთის', 'აჭარის', 'იმერეთის', 'სამეგრელო-ზემო სვანეთის', 'მცხეთა-მთიანეთის', 'სამცხე-ჯავახეთის',
        'შიდა ქართლის', 'კახეთის', 'რაჭა-ლეჩხუმი და ქვემო სვანეთის', 'გურიის', 'ქვემო ქართლის'
    );

    protected static \$city = array(
        'აბაშა', 'ამბროლაური', 'ახალი ათონი', 'ახალქალაქი', 'ახალციხე', 'ახმეტა', 'ბათუმი', 'ბაღდათი',
        'ბოლნისი', 'ბორჯომი', 'გაგრა', 'გალი', 'გარდაბანი', 'გორი', 'გუდაუთა', 'გურჯაანი', 'დედოფლისწყარო',
        'დმანისი', 'დუშეთი', 'ვალე', 'ვანი', 'ზესტაფონი', 'ზუგდიდი', 'თბილისი', 'თეთრიწყარო', 'თელავი',
        'თერჯოლა', 'კასპი', 'ლაგოდეხი', 'ლანჩხუთი', 'მარნეული', 'მარტვილი', 'მცხეთა', 'ნინოწმინდა', 'ოზურგეთი',
        'ონი', 'ოჩამჩირე', 'რუსთავი', 'საგარეჯო', 'სამტრედია', 'საჩხერე', 'სენაკი', 'სიღნაღი', 'სოხუმი',
        'ტყვარჩელი', 'ტყიბული', 'ფოთი', 'ქარელი', 'ქობულეთი', 'ქუთაისი', 'ყვარელი', 'ცაგერი', 'ცხინვალი',
        'წალენჯიხა', 'წალკა', 'წნორი', 'წყალტუბო', 'ჭიათურა', 'ხაშური', 'ხობი', 'ხონი', 'ჯვარი'
    );

    protected static \$street = array(
        'რუსთაველის', 'ტაბიძის', 'აღმაშენებლის', 'ბარათაშვილის', 'თამარ მეფის', 'სააკაძის', 'ყაზბეგის', 'რობაქიძის',
        'ვაჟა-ფშაველას', 'ნუცუბიძის', 'შეშელიძის', 'სააკაძის', 'სანაპიროს', 'გორგასლის', 'ელიავას', 'ჭონქაძის',
        'ფანასკერტელის'
    );

    protected static \$addressFormats = array(
        \"საქართველო, ";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["regionGenitiveForm"]) || array_key_exists("regionGenitiveForm", $context) ? $context["regionGenitiveForm"] : (function () { throw new RuntimeError('Variable "regionGenitiveForm" does not exist.', 87, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["regionSuffix"]) || array_key_exists("regionSuffix", $context) ? $context["regionSuffix"] : (function () { throw new RuntimeError('Variable "regionSuffix" does not exist.', 87, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 87, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 87, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["regionGenitiveForm"]) || array_key_exists("regionGenitiveForm", $context) ? $context["regionGenitiveForm"] : (function () { throw new RuntimeError('Variable "regionGenitiveForm" does not exist.', 88, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["regionSuffix"]) || array_key_exists("regionSuffix", $context) ? $context["regionSuffix"] : (function () { throw new RuntimeError('Variable "regionSuffix" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 89, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 89, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 89, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["regionGenitiveForm"]) || array_key_exists("regionGenitiveForm", $context) ? $context["regionGenitiveForm"] : (function () { throw new RuntimeError('Variable "regionGenitiveForm" does not exist.', 89, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["regionSuffix"]) || array_key_exists("regionSuffix", $context) ? $context["regionSuffix"] : (function () { throw new RuntimeError('Variable "regionSuffix" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 90, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 90, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 90, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["regionGenitiveForm"]) || array_key_exists("regionGenitiveForm", $context) ? $context["regionGenitiveForm"] : (function () { throw new RuntimeError('Variable "regionGenitiveForm" does not exist.', 90, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["regionSuffix"]) || array_key_exists("regionSuffix", $context) ? $context["regionSuffix"] : (function () { throw new RuntimeError('Variable "regionSuffix" does not exist.', 90, $this->source); })()), "html", null, true);
        echo ", საქართველო\",
        \"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 91, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 91, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "\",
        \"საქართველო, ";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 92, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 92, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 93, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 93, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 94, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 94, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 94, $this->source); })()), "html", null, true);
        echo ", საქართველო\",
    );

    protected static \$streetAddressFormats = array(
        \"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["street"]) || array_key_exists("street", $context) ? $context["street"] : (function () { throw new RuntimeError('Variable "street" does not exist.', 98, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 98, $this->source); })()), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 98, $this->source); })()), "html", null, true);
        echo "\"
    );

    protected static \$cityFormats = array(
        \"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 102, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 102, $this->source); })()), "html", null, true);
        echo "\"
    );


    public static function regionSuffix()
    {
        return static::randomElement(static::\$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::\$region);
    }

    public static function regionGenitiveForm()
    {
        return static::randomElement(static::\$regionGenitiveForm);
    }

    public static function cityName()
    {
        return static::randomElement(static::\$city);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    public static function streetSuffix()
    {
        return static::randomElement(static::\$streetSuffix);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 102,  214 => 98,  203 => 94,  195 => 93,  187 => 92,  179 => 91,  167 => 90,  155 => 89,  143 => 88,  131 => 87,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ka_GE;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('ქალაქი', 'ქ.');

    protected static \$regionSuffix = array('რაიონი');
    protected static \$streetSuffix = array(
        'ჩიხი', 'ქ.', 'გამზირი', 'ქუჩა', 'გზატკეცილი', 'მოედანი', 'ბულვარი',
        'აღმართი', 'ხეივანი'
    );

    protected static \$buildingNumber = array('##');
    protected static \$postcode = array('####');
    protected static \$country = array(
        'ავსტრალია', 'ავსტრია', 'ავღანეთი', 'აზერბაიჯანი', 'ალანდის კუნძულები', 'ალბანეთი',
        'ალჟირი', 'ამერიკის სამოა', 'ანგილია', 'ანგოლა', 'ანდორა', 'ანტარქტიდა', 'ანტიგუა და ბარბუდა',
        'არაბთა გაერთიანებული საამიროები', 'არგენტინა', 'არუბა', 'აღმოსავლეთი ტიმორი', 'აშშ',
        'აშშ-ის მიმდებარე მცირე კუნძულები', 'ახალი ზელანდია', 'ახალი კალედონია', 'ბანგლადეში',
        'ბარბადოსი', 'ბაჰამის კუნძულები', 'ბაჰრეინი', 'ბელარუსი', 'ბელგია', 'ბელიზი', 'ბენინი',
        'ბერმუდის კუნძულები', 'ბოლივია', 'ბოსნია და ჰერცეგოვინა', 'ბოტსვანა', 'ბრაზილია',
        'ბრუნეი დარუსალამი', 'ბუვე', 'ბულგარეთი', 'ბურკინა-ფასო', 'ბურუნდი', 'ბჰუტანი', 'გაბონი',
        'გაერთიანებული სამეფო', 'გაიანა', 'გამბია', 'განა', 'გერმანია', 'გერნზი', 'გვადელუპა', 'გვატემალა',
        'გვინეა', 'გვინეა-ბისაუ', 'გიბრალტარი', 'გრენადა', 'გრენლანდია', 'გუამი', 'დანია', 'დასავლეთი საჰარა',
        'დომინიკა', 'დომინიკელთა რესპუბლიკა', 'ეგვიპტე', 'ეთიოპია', 'ეკვადორი', 'ეკვატორული გვინეა', 'ერაყი',
        'ერიტრეა', 'ესპანეთი', 'ესტონეთი', 'ვანუატუ', 'ვატიკანი (წმინდა საყდარი)', 'ვენესუელა', 'ვიეტნამი',
        'ვირჯინის კუნძულები (აშშ-ის)', 'ვირჯინის კუნძულები (ბრიტანეთის)', 'ზამბია', 'ზიმბაბვე', 'თურქეთი',
        'თურქმენეთი', 'იამაიკა', 'იაპონია', 'იემენი', 'ინდოეთი', 'ინდონეზია', 'იორდანია',
        'ირანის მუსულმანური რესპუბლიკა', 'ირლანდია', 'ისლანდია', 'ისრაელი', 'იტალია', 'კაბო-ვერდე',
        'კაიმანის კუნძულები', 'კამბოჯა', 'კამერუნი', 'კანადა', 'კატარი', 'კენია', 'კვიპროსი', 'კირიბატი',
        'კოლუმბია', 'კომორის კუნძულების კავშირი', 'კონგო', 'კონგოს დემოკრატიული რესპუბლიკა', 'კოსტა-რიკა',
        'კოტ-დ’ივუარი', 'კუბა', 'კუკის კუნძულები', 'კუნძული მენი', 'ლაოსის სახალხო დემოკრატიული რესპუბლიკა',
        'ლატვია', 'ლესოთო', 'ლიბანი', 'ლიბერია', 'ლიბიის არაბული ჯამაჰირია', 'ლიტვა', 'ლიხტენშტაინი',
        'ლუქსემბურგი', 'მადაგასკარი', 'მავრიკი', 'მავრიტანია', 'მაიოტა', 'მაკაო', 'მაკედონია', 'მალავი',
        'მალაიზია', 'მალდივი', 'მალი', 'მალტა', 'მაროკო', 'მარტინიკა', 'მარშალის კუნძულები', 'მექსიკა',
        'მიანმარი', 'მიკრონეზიის ფედერაციული შტატები', 'მოზამბიკი', 'მოლდოვას რესპუბლიკა', 'მონაკო', 'მონსერატი',
        'მონღოლეთი', 'ნამიბია', 'ნაურუ', 'ნეპალი', 'ნიგერი', 'ნიგერია', 'ნიდერლანდი', 'ნიდერლანდის ანტილები',
        'ნიკარაგუა', 'ნიუე', 'ნორვეგია', 'ნორფოლკი (კუნძული)', 'ომანი', 'პაკისტანი', 'პალაუ',
        'პალესტინის ტერიტორიები, ოკუპირებული', 'პანამა', 'პაპუა-ახალი გვინეა', 'პარაგვაი', 'პერუ',
        'პიტკერნის კუნძულები', 'პოლონეთი', 'პორტუგალია', 'პუერტო-რიკო', 'რეიუნიონი', 'რუანდა', 'რუმინეთი',
        'რუსეთი', 'საბერძნეთი', 'სალვადორი', 'სამოა', 'სამხრეთი აფრიკა',
        'სამხრეთი გეორგია და სამხრეთ სენდვიჩის კუნძულები', 'სამხრეთი კორეა', 'სან-მარინო', 'სან-ტომე და პრინსიპი',
        'საუდის არაბეთი', 'საფრანგეთი', 'საფრანგეთის გვიანა', 'საფრანგეთის პოლინეზია',
        'საფრანგეთის სამხრეთული და ანტარქტიდული ტერიტორია', 'საქართველო', 'სეიშელი', 'სენ-ბართელმი',
        'სენ-პიერი და მიკელონი', 'სენეგალი', 'სენტ-ვინსენტი და გრენადინები', 'სენტ-კიტსი და ნევისი',
        'სენტ-ლუსია', 'სერბეთი', 'სვაზილენდი', 'სვალბარდი და იან-მაიენი', 'სიერა-ლეონე', 'სინგაპური',
        'სირიის არაბთა რესპუბლიკა', 'სლოვაკეთი', 'სლოვენია', 'სოლომონის კუნძულები', 'სომალი', 'სომხეთი', 'სუდანი',
        'სურინამი', 'ტაივანი', 'ტაილანდი', 'ტანზანიის გაერთიანებული რესპუბლიკა', 'ტაჯიკეთი',
        'ტერქსისა და კაიკოსის კუნძულები', 'ტოგო', 'ტოკელაუ', 'ტონგა', 'ტრინიდადი და ტობაგო', 'ტუვალუ', 'ტუნისი',
        'უგანდა', 'უზბეკეთი', 'უკრაინა', 'უნგრეთი', 'უოლისი და ფუტუნა', 'ურუგვაი', 'ფარერის კუნძულები', 'ფილიპინები',
        'ფინეთი', 'ფიჯი', 'ფოლკლენდის კუნძულები (მალვინები)', 'ქოქოსის კუნძულები', 'ქუვეითი', 'ყაზახეთი', 'ყირგიზეთი',
        'შვედეთი', 'შვეიცარია', 'შობის კუნძული', 'შრი-ლანკა', 'ჩადი', 'ჩერნოგორია', 'ჩეხეთი', 'ჩილე', 'ჩინეთი',
        'ჩრდილოეთი კორეა', 'ჩრდილოეთი მარიანას კუნძულები', 'ცენტრალური აფრიკის რესპუბლიკა', 'წმინდა ელენეს კუნძული',
        'წმინდა მარტინი (საფრანგეთის ნაწილი)', 'ხორვატია', 'ჯერზი', 'ჯიბუტი', 'ჰაიტი',
        'ჰერდი და მაკდონალდის კუნძულები', 'ჰონგ-კონგი', 'ჰონდურასი'
    );

    protected static \$region = array(
        'აფხაზეთი', 'აჭარა', 'იმერეთი', 'სამეგრელო-ზემო სვანეთი', 'მცხეთა-მთიანეთი', 'სამცხე-ჯავახეთი',
        'შიდა ქართლი', 'კახეთი', 'რაჭა-ლეჩხუმი და ქვემო სვანეთი', 'გურია', 'ქვემო ქართლი'
    );

    protected static \$regionGenitiveForm = array(
        'აფხაზეთის', 'აჭარის', 'იმერეთის', 'სამეგრელო-ზემო სვანეთის', 'მცხეთა-მთიანეთის', 'სამცხე-ჯავახეთის',
        'შიდა ქართლის', 'კახეთის', 'რაჭა-ლეჩხუმი და ქვემო სვანეთის', 'გურიის', 'ქვემო ქართლის'
    );

    protected static \$city = array(
        'აბაშა', 'ამბროლაური', 'ახალი ათონი', 'ახალქალაქი', 'ახალციხე', 'ახმეტა', 'ბათუმი', 'ბაღდათი',
        'ბოლნისი', 'ბორჯომი', 'გაგრა', 'გალი', 'გარდაბანი', 'გორი', 'გუდაუთა', 'გურჯაანი', 'დედოფლისწყარო',
        'დმანისი', 'დუშეთი', 'ვალე', 'ვანი', 'ზესტაფონი', 'ზუგდიდი', 'თბილისი', 'თეთრიწყარო', 'თელავი',
        'თერჯოლა', 'კასპი', 'ლაგოდეხი', 'ლანჩხუთი', 'მარნეული', 'მარტვილი', 'მცხეთა', 'ნინოწმინდა', 'ოზურგეთი',
        'ონი', 'ოჩამჩირე', 'რუსთავი', 'საგარეჯო', 'სამტრედია', 'საჩხერე', 'სენაკი', 'სიღნაღი', 'სოხუმი',
        'ტყვარჩელი', 'ტყიბული', 'ფოთი', 'ქარელი', 'ქობულეთი', 'ქუთაისი', 'ყვარელი', 'ცაგერი', 'ცხინვალი',
        'წალენჯიხა', 'წალკა', 'წნორი', 'წყალტუბო', 'ჭიათურა', 'ხაშური', 'ხობი', 'ხონი', 'ჯვარი'
    );

    protected static \$street = array(
        'რუსთაველის', 'ტაბიძის', 'აღმაშენებლის', 'ბარათაშვილის', 'თამარ მეფის', 'სააკაძის', 'ყაზბეგის', 'რობაქიძის',
        'ვაჟა-ფშაველას', 'ნუცუბიძის', 'შეშელიძის', 'სააკაძის', 'სანაპიროს', 'გორგასლის', 'ელიავას', 'ჭონქაძის',
        'ფანასკერტელის'
    );

    protected static \$addressFormats = array(
        \"საქართველო, {{regionGenitiveForm}} {{regionSuffix}}, {{city}}, {{streetAddress}}, {{postcode}}\",
        \"{{regionGenitiveForm}} {{regionSuffix}}, {{city}}, {{streetAddress}}, {{postcode}}\",
        \"{{streetAddress}}, {{postcode}}, {{city}}, {{regionGenitiveForm}} {{regionSuffix}}\",
        \"{{streetAddress}}, {{postcode}}, {{city}}, {{regionGenitiveForm}} {{regionSuffix}}, საქართველო\",
        \"{{city}}, {{streetAddress}}, {{postcode}}\",
        \"საქართველო, {{city}}, {{streetAddress}}, {{postcode}}\",
        \"{{streetAddress}}, {{postcode}}, {{city}}\",
        \"{{streetAddress}}, {{postcode}}, {{city}}, საქართველო\",
    );

    protected static \$streetAddressFormats = array(
        \"{{street}} {{streetSuffix}} #{{buildingNumber}}\"
    );

    protected static \$cityFormats = array(
        \"{{cityPrefix}} {{cityName}}\"
    );


    public static function regionSuffix()
    {
        return static::randomElement(static::\$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::\$region);
    }

    public static function regionGenitiveForm()
    {
        return static::randomElement(static::\$regionGenitiveForm);
    }

    public static function cityName()
    {
        return static::randomElement(static::\$city);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    public static function streetSuffix()
    {
        return static::randomElement(static::\$streetSuffix);
    }

    public static function street()
    {
        return static::randomElement(static::\$street);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Address.php");
    }
}
