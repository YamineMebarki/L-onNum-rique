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

/* vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Address.php */
class __TwigTemplate_3d5fd35accf296c9caf7beb3fe434de047fa983a1790dbf8cbefb3aebb674962 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ar_JO;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$streetPrefix = array('شارع');

    protected static \$cityPrefix = array('شمال', 'شرق', 'غرب', 'جنوب', 'وسط', );

    /**
     * @link http://ar.wikipedia.org/wiki/%D9%85%D9%84%D8%AD%D9%82:%D9%82%D8%A7%D8%A6%D9%85%D8%A9_%D9%85%D8%AF%D9%86_%D8%A7%D9%84%D8%A3%D8%B1%D8%AF%D9%86
     */
    protected static \$cityName = array(
        'اربد', 'أبو نصير', 'الجبيهه', 'الحصن', 'الرصيفة', 'الرمثا', 'الزرقاء', 'السلط', 'الشهيد عزمي', 'الصريح', 'الضليل', 'الطفيلة', 'العقبة',     'القويسمة', 'الكرك', 'المشارع', 'المفرق', 'الهاشمية', 'ام قصير', 'ايدون',
        'بيت راس',
        'تلاع العلي',
        'جرش',
        'ساكب', 'سحاب',
        'شفا بدران',
        'صويلح',
        'عمان', 'عنجره', 'عين الباشا',
        'غور الصافي',
        'كريمه', 'كفرنجه',
        'مادبا', 'مخيم البقعه', 'مخيم حطين', 'مرج الحمام', 'معان',
        'ناعور',
        'وادي السير',
    );

    protected static \$buildingNumber = array('#####', '####', '##');

    protected static \$postcode = array('#####', '#####-####');

    /**
     * @link http://ar.wikipedia.org/wiki/%D9%85%D9%84%D8%AD%D9%82:%D9%82%D8%A7%D8%A6%D9%85%D8%A9_%D8%A7%D9%84%D9%88%D9%84%D8%A7%D9%8A%D8%A7%D8%AA_%D8%A7%D9%84%D8%A3%D9%85%D8%B1%D9%8A%D9%83%D9%8A%D8%A9_%D8%AD%D8%B3%D8%A8_%D8%A7%D9%84%D9%85%D8%B3%D8%A7%D8%AD%D8%A9
     */
    protected static \$state = array(
        'آيوا', 'أركنساس', 'أريزونا', 'ألاباما', 'ألاسكا', 'أوريغون', 'أوكلاهوما', 'أوهايو', 'أيداهو', 'إلينوي', 'إنديانا', 'الاباما', 'الجزر العذراء الأمريكية',
        'بنس    يلفانيا', 'بورتو ريكو',
        'تكساس', 'تينيسي',
        'جزر ماريانا الشمالية', 'جورجيا',
        'داكوتا الجنوبية', 'داكوتا الشمالية', 'ديلاوير', 'رود آيلاند',
        'ساموا الأمريكية',
        'غوام',
        'فرجينيا الغربية', 'فلوريدا', 'فيرجينيا', 'فيرجينيا الغربية', 'فيرمونت',
        'كارولاينا الجنوبية', 'كارولاينا الشمالية','كارولينا الشمالية', 'كاليفورنيا', 'كانساس', 'كنتاكي', 'كولورادو', 'كونيتيكت',
        'لويزيانا',
        'ماريلاند', 'ماساتشوستس', 'ماين', 'مسيسيبي', 'مونتانا', 'ميريلاند', 'ميزوري', 'ميشيغان', 'مين', 'مينيسوتا',
        'نبراسكا', 'نيفادا', 'نيو جيرسي', 'نيو ميكسيكو', 'نيوهامشير', 'نيويورك',
        'هاواي',
        'واشنطن', 'وايومنغ', 'ويسكنسن', 'يوتا',
    );

    protected static \$stateAbbr = array(
       'AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DC', 'DE', 'FL', 'GA', 'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME', 'MI', 'MN', 'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM', 'NV', 'NY', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VA', 'VT', 'WA', 'WI', 'WV', 'WY'
    );

    /**
     * @link http://www.nationsonline.org/oneworld/countrynames_arabic.htm
     */
    protected static \$country = array(
        'الكاريبي', 'أمريكا الوسطى', 'أنتيجوا وبربودا', 'أنجولا', 'أنجويلا', 'أندورا', 'اندونيسيا', 'أورجواي', 'أوروبا', 'أوزبكستان', 'أوغندا', 'أوقيانوسيا', 'أوقيانوسيا النائية', 'أوكرانيا', 'ايران', 'أيرلندا', 'أيسلندا', 'ايطاليا',
        'بابوا غينيا الجديدة', 'باراجواي', 'باكستان', 'بالاو', 'بتسوانا', 'بتكايرن', 'بربادوس', 'برمودا', 'بروناي', 'بلجيكا', 'بلغاريا', 'بليز', 'بنجلاديش', 'بنما', 'بنين', 'بوتان', 'بورتوريكو', 'بوركينا فاسو', 'بوروندي', 'بولندا', 'بوليفيا', 'بولينيزيا', 'بولينيزيا الفرنسية', 'بيرو',
        'تانزانيا', 'تايلند', 'تايوان', 'تركمانستان', 'تركيا', 'ترينيداد وتوباغو', 'تشاد', 'توجو', 'توفالو', 'توكيلو', 'تونجا', 'تونس', 'تيمور الشرقية',
        'جامايكا', 'جبل طارق', 'جرينادا', 'جرينلاند', 'جزر الأنتيل الهولندية', 'جزر الترك وجايكوس', 'جزر القمر', 'جزر الكايمن', 'جزر المارشال', 'جزر الملديف', 'جزر الولايات المتحدة البعيدة الصغيرة', 'جزر أولان', 'جزر سليمان', 'جزر فارو', 'جزر فرجين الأمريكية', 'جزر فرجين البريطانية', 'جزر فوكلاند', 'جزر كوك', 'جزر كوكوس', 'جزر ماريانا الشمالية', 'جزر والس وفوتونا', 'جزيرة الكريسماس', 'جزيرة بوفيه', 'جزيرة مان', 'جزيرة نورفوك', 'جزيرة هيرد وماكدونالد', 'جمهورية افريقيا الوسطى', 'جمهورية التشيك', 'جمهورية الدومينيك', 'جمهورية الكونغو الديمقراطية', 'جمهورية جنوب افريقيا', 'جنوب آسيا', 'جنوب أوروبا', 'جنوب شرق آسيا', 'جنوب وسط آسيا', 'جواتيمالا', 'جوادلوب', 'جوام', 'جورجيا', 'جورجيا الجنوبية وجزر ساندويتش الجنوبية', 'جيبوتي', 'جيرسي',
        'دومينيكا',
        'رواندا', 'روسيا', 'روسيا البيضاء', 'رومانيا', 'روينيون',
        'زامبيا', 'زيمبابوي',
        'ساحل العاج', 'ساموا', 'ساموا الأمريكية', 'سانت بيير وميكولون', 'سانت فنسنت وغرنادين', 'سانت كيتس ونيفيس', 'سانت لوسيا', 'سانت مارتين', 'سانت هيلنا', 'سان مارينو', 'ساو تومي وبرينسيبي', 'سريلانكا', 'سفالبارد وجان مايان', 'سلوفاكيا', 'سلوفينيا', 'سنغافورة', 'سوازيلاند', 'سوريا', 'سورينام', 'سويسرا', 'سيراليون', 'سيشل',
        'شرق آسيا', 'شرق افريقيا', 'شرق أوروبا', 'شمال افريقيا', 'شمال أمريكا', 'شمال أوروبا', 'شيلي',
        'صربيا', 'صربيا والجبل الأسود',
        'طاجكستان',
        'عمان',
        'غامبيا', 'غانا', 'غرب آسيا', 'غرب افريقيا', 'غرب أوروبا', 'غويانا', 'غيانا', 'غينيا', 'غينيا الاستوائية', 'غينيا بيساو',
        'فانواتو', 'فرنسا', 'فلسطين', 'فنزويلا', 'فنلندا', 'فيتنام', 'فيجي',
        'قبرص', 'قرغيزستان', 'قطر',
        'كازاخستان', 'كاليدونيا الجديدة', 'كرواتيا', 'كمبوديا', 'كندا', 'كوبا', 'كوريا الجنوبية', 'كوريا الشمالية', 'كوستاريكا', 'كولومبيا', 'كومنولث الدول المستقلة', 'كيريباتي', 'كينيا',
        'لاتفيا', 'لاوس', 'لبنان', 'لوكسمبورج', 'ليبيا', 'ليبيريا', 'ليتوانيا', 'ليختنشتاين', 'ليسوتو',
        'مارتينيك', 'ماكاو الصينية', 'مالطا', 'مالي', 'ماليزيا', 'مايوت', 'مدغشقر', 'مصر', 'مقدونيا', 'ملاوي', 'منغوليا', 'موريتانيا', 'موريشيوس', 'موزمبيق', 'مولدافيا', 'موناكو', 'مونتسرات', 'ميانمار', 'ميكرونيزيا', 'ميلانيزيا',
        'ناميبيا', 'نورو', 'نيبال', 'نيجيريا', 'نيكاراجوا', 'نيوزيلاندا', 'نيوي',
        'هايتي', 'هندوراس', 'هولندا', 'هونج كونج الصينية',
        'وسط آسيا', 'وسط افريقيا',
    );

    protected static \$cityFormats = array(
        '";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetNameFormats = array(
        '";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 91, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 91, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 95, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 96, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 96, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["secondaryAddress"]) || array_key_exists("secondaryAddress", $context) ? $context["secondaryAddress"] : (function () { throw new RuntimeError('Variable "secondaryAddress" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$addressFormats = array(
        \"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "\",
    );

    protected static \$secondaryAddressFormats = array('شقة رقم. ##', 'بناية رقم ##');

    /**
     * @example 'شرق'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example 'عمان'
     */
    public static function cityName()
    {
        return static::randomElement(static::\$cityName);
    }

    /**
     * @example 'شارع'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'شقة رقم. 350'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /**
     * @example 'كاليفورنيا'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'CA'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::\$stateAbbr);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 100,  160 => 96,  154 => 95,  143 => 91,  136 => 87,  130 => 86,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ar_JO;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$streetPrefix = array('شارع');

    protected static \$cityPrefix = array('شمال', 'شرق', 'غرب', 'جنوب', 'وسط', );

    /**
     * @link http://ar.wikipedia.org/wiki/%D9%85%D9%84%D8%AD%D9%82:%D9%82%D8%A7%D8%A6%D9%85%D8%A9_%D9%85%D8%AF%D9%86_%D8%A7%D9%84%D8%A3%D8%B1%D8%AF%D9%86
     */
    protected static \$cityName = array(
        'اربد', 'أبو نصير', 'الجبيهه', 'الحصن', 'الرصيفة', 'الرمثا', 'الزرقاء', 'السلط', 'الشهيد عزمي', 'الصريح', 'الضليل', 'الطفيلة', 'العقبة',     'القويسمة', 'الكرك', 'المشارع', 'المفرق', 'الهاشمية', 'ام قصير', 'ايدون',
        'بيت راس',
        'تلاع العلي',
        'جرش',
        'ساكب', 'سحاب',
        'شفا بدران',
        'صويلح',
        'عمان', 'عنجره', 'عين الباشا',
        'غور الصافي',
        'كريمه', 'كفرنجه',
        'مادبا', 'مخيم البقعه', 'مخيم حطين', 'مرج الحمام', 'معان',
        'ناعور',
        'وادي السير',
    );

    protected static \$buildingNumber = array('#####', '####', '##');

    protected static \$postcode = array('#####', '#####-####');

    /**
     * @link http://ar.wikipedia.org/wiki/%D9%85%D9%84%D8%AD%D9%82:%D9%82%D8%A7%D8%A6%D9%85%D8%A9_%D8%A7%D9%84%D9%88%D9%84%D8%A7%D9%8A%D8%A7%D8%AA_%D8%A7%D9%84%D8%A3%D9%85%D8%B1%D9%8A%D9%83%D9%8A%D8%A9_%D8%AD%D8%B3%D8%A8_%D8%A7%D9%84%D9%85%D8%B3%D8%A7%D8%AD%D8%A9
     */
    protected static \$state = array(
        'آيوا', 'أركنساس', 'أريزونا', 'ألاباما', 'ألاسكا', 'أوريغون', 'أوكلاهوما', 'أوهايو', 'أيداهو', 'إلينوي', 'إنديانا', 'الاباما', 'الجزر العذراء الأمريكية',
        'بنس    يلفانيا', 'بورتو ريكو',
        'تكساس', 'تينيسي',
        'جزر ماريانا الشمالية', 'جورجيا',
        'داكوتا الجنوبية', 'داكوتا الشمالية', 'ديلاوير', 'رود آيلاند',
        'ساموا الأمريكية',
        'غوام',
        'فرجينيا الغربية', 'فلوريدا', 'فيرجينيا', 'فيرجينيا الغربية', 'فيرمونت',
        'كارولاينا الجنوبية', 'كارولاينا الشمالية','كارولينا الشمالية', 'كاليفورنيا', 'كانساس', 'كنتاكي', 'كولورادو', 'كونيتيكت',
        'لويزيانا',
        'ماريلاند', 'ماساتشوستس', 'ماين', 'مسيسيبي', 'مونتانا', 'ميريلاند', 'ميزوري', 'ميشيغان', 'مين', 'مينيسوتا',
        'نبراسكا', 'نيفادا', 'نيو جيرسي', 'نيو ميكسيكو', 'نيوهامشير', 'نيويورك',
        'هاواي',
        'واشنطن', 'وايومنغ', 'ويسكنسن', 'يوتا',
    );

    protected static \$stateAbbr = array(
       'AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DC', 'DE', 'FL', 'GA', 'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME', 'MI', 'MN', 'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM', 'NV', 'NY', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VA', 'VT', 'WA', 'WI', 'WV', 'WY'
    );

    /**
     * @link http://www.nationsonline.org/oneworld/countrynames_arabic.htm
     */
    protected static \$country = array(
        'الكاريبي', 'أمريكا الوسطى', 'أنتيجوا وبربودا', 'أنجولا', 'أنجويلا', 'أندورا', 'اندونيسيا', 'أورجواي', 'أوروبا', 'أوزبكستان', 'أوغندا', 'أوقيانوسيا', 'أوقيانوسيا النائية', 'أوكرانيا', 'ايران', 'أيرلندا', 'أيسلندا', 'ايطاليا',
        'بابوا غينيا الجديدة', 'باراجواي', 'باكستان', 'بالاو', 'بتسوانا', 'بتكايرن', 'بربادوس', 'برمودا', 'بروناي', 'بلجيكا', 'بلغاريا', 'بليز', 'بنجلاديش', 'بنما', 'بنين', 'بوتان', 'بورتوريكو', 'بوركينا فاسو', 'بوروندي', 'بولندا', 'بوليفيا', 'بولينيزيا', 'بولينيزيا الفرنسية', 'بيرو',
        'تانزانيا', 'تايلند', 'تايوان', 'تركمانستان', 'تركيا', 'ترينيداد وتوباغو', 'تشاد', 'توجو', 'توفالو', 'توكيلو', 'تونجا', 'تونس', 'تيمور الشرقية',
        'جامايكا', 'جبل طارق', 'جرينادا', 'جرينلاند', 'جزر الأنتيل الهولندية', 'جزر الترك وجايكوس', 'جزر القمر', 'جزر الكايمن', 'جزر المارشال', 'جزر الملديف', 'جزر الولايات المتحدة البعيدة الصغيرة', 'جزر أولان', 'جزر سليمان', 'جزر فارو', 'جزر فرجين الأمريكية', 'جزر فرجين البريطانية', 'جزر فوكلاند', 'جزر كوك', 'جزر كوكوس', 'جزر ماريانا الشمالية', 'جزر والس وفوتونا', 'جزيرة الكريسماس', 'جزيرة بوفيه', 'جزيرة مان', 'جزيرة نورفوك', 'جزيرة هيرد وماكدونالد', 'جمهورية افريقيا الوسطى', 'جمهورية التشيك', 'جمهورية الدومينيك', 'جمهورية الكونغو الديمقراطية', 'جمهورية جنوب افريقيا', 'جنوب آسيا', 'جنوب أوروبا', 'جنوب شرق آسيا', 'جنوب وسط آسيا', 'جواتيمالا', 'جوادلوب', 'جوام', 'جورجيا', 'جورجيا الجنوبية وجزر ساندويتش الجنوبية', 'جيبوتي', 'جيرسي',
        'دومينيكا',
        'رواندا', 'روسيا', 'روسيا البيضاء', 'رومانيا', 'روينيون',
        'زامبيا', 'زيمبابوي',
        'ساحل العاج', 'ساموا', 'ساموا الأمريكية', 'سانت بيير وميكولون', 'سانت فنسنت وغرنادين', 'سانت كيتس ونيفيس', 'سانت لوسيا', 'سانت مارتين', 'سانت هيلنا', 'سان مارينو', 'ساو تومي وبرينسيبي', 'سريلانكا', 'سفالبارد وجان مايان', 'سلوفاكيا', 'سلوفينيا', 'سنغافورة', 'سوازيلاند', 'سوريا', 'سورينام', 'سويسرا', 'سيراليون', 'سيشل',
        'شرق آسيا', 'شرق افريقيا', 'شرق أوروبا', 'شمال افريقيا', 'شمال أمريكا', 'شمال أوروبا', 'شيلي',
        'صربيا', 'صربيا والجبل الأسود',
        'طاجكستان',
        'عمان',
        'غامبيا', 'غانا', 'غرب آسيا', 'غرب افريقيا', 'غرب أوروبا', 'غويانا', 'غيانا', 'غينيا', 'غينيا الاستوائية', 'غينيا بيساو',
        'فانواتو', 'فرنسا', 'فلسطين', 'فنزويلا', 'فنلندا', 'فيتنام', 'فيجي',
        'قبرص', 'قرغيزستان', 'قطر',
        'كازاخستان', 'كاليدونيا الجديدة', 'كرواتيا', 'كمبوديا', 'كندا', 'كوبا', 'كوريا الجنوبية', 'كوريا الشمالية', 'كوستاريكا', 'كولومبيا', 'كومنولث الدول المستقلة', 'كيريباتي', 'كينيا',
        'لاتفيا', 'لاوس', 'لبنان', 'لوكسمبورج', 'ليبيا', 'ليبيريا', 'ليتوانيا', 'ليختنشتاين', 'ليسوتو',
        'مارتينيك', 'ماكاو الصينية', 'مالطا', 'مالي', 'ماليزيا', 'مايوت', 'مدغشقر', 'مصر', 'مقدونيا', 'ملاوي', 'منغوليا', 'موريتانيا', 'موريشيوس', 'موزمبيق', 'مولدافيا', 'موناكو', 'مونتسرات', 'ميانمار', 'ميكرونيزيا', 'ميلانيزيا',
        'ناميبيا', 'نورو', 'نيبال', 'نيجيريا', 'نيكاراجوا', 'نيوزيلاندا', 'نيوي',
        'هايتي', 'هندوراس', 'هولندا', 'هونج كونج الصينية',
        'وسط آسيا', 'وسط افريقيا',
    );

    protected static \$cityFormats = array(
        '{{cityPrefix}} {{cityName}}',
        '{{cityName}}',
    );

    protected static \$streetNameFormats = array(
        '{{streetPrefix}} {{firstName}} {{lastName}}',
    );

    protected static \$streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}} {{streetName}} {{secondaryAddress}}',
    );

    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{city}}\",
    );

    protected static \$secondaryAddressFormats = array('شقة رقم. ##', 'بناية رقم ##');

    /**
     * @example 'شرق'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example 'عمان'
     */
    public static function cityName()
    {
        return static::randomElement(static::\$cityName);
    }

    /**
     * @example 'شارع'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'شقة رقم. 350'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /**
     * @example 'كاليفورنيا'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'CA'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::\$stateAbbr);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ar_JO/Address.php");
    }
}
