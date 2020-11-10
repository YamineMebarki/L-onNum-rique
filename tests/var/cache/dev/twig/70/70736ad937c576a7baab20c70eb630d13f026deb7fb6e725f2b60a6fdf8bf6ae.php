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

/* vendor/fzaninotto/faker/src/Faker/Provider/ar_SA/Person.php */
class __TwigTemplate_c5b040d2a5d959ee8a677ace3f722d9e35cead7771820c01ed27a1ae88f1e04f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ar_SA/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ar_SA/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ar_SA;

use Faker\\Calculator\\Luhn;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @link http://muslim-names.us/
     */
    protected static \$firstNameMale = array(

        'آدم', 'أبراهيم', 'أحمد', 'أدهم', 'أسامة', 'أسعد', 'أشرف', 'أكثم', 'أكرم', 'أمجد', 'أمين', 'أنس', 'أنور', 'أواس', 'أوس', 'أيمن', 'أيهم', 'أيوب', 'إبراهيم', 'إسلام', 'إسماعيل', 'إلياس', 'إياد', 'إيهاب', 'ابان', 'ابراهيم', 'اثير', 'احسان', 'احمد', 'ادريس', 'ادم', 'ادهم', 'اديب', 'اسامة',
        'اسحاق', 'اسحق', 'اسعد', 'اسلام', 'اسماعيل', 'اسيد', 'اشراف', 'اشرف', 'اصلان', 'اكثم', 'اكرم', 'البراء', 'البشر', 'الحارث', 'الحسين', 'الطفيل', 'العزم', 'الليث', 'المثنى', 'المنصور', 'الياس', 'اليمان', 'امجد', 'امير', 'امين', 'أنس', 'انور', 'انيس', 'اوس', 'اوسم', 'اويس', 'اياد', 'اياس',
        'ايسر', 'ايمن', 'ايهم', 'ايوب', 'باسل', 'باسم', 'باهر', 'بدر', 'بدوان', 'براء', 'برهان', 'بسام', 'بشار', 'بشر', 'بشير', 'بكر', 'بلال', 'بليغ', 'بندر', 'بهاء', 'تركي', 'توفيق', 'ثامر', 'جابر', 'جاسر', 'جاسم', 'جبر', 'جبير', 'جراح', 'جريس', 'جعفر', 'جلال', 'جمال', 'جمزه', 'جميل', 'جهاد',
        'جواد', 'حابس', 'حاتم', 'حارث', 'حازم', 'حافظ', 'حاكم', 'حامد', 'حبيب', 'حذيفة', 'حسام', 'حسان', 'حسن', 'حسني', 'حسين', 'حكم', 'حمد', 'حمدالله', 'حمدان', 'حمدي', 'حمزة', 'حمود', 'حميد', 'خالد', 'خضر', 'خلدون', 'خلف', 'خليفة', 'خليل', 'خميس', 'داوود', 'ذياب', 'ذيب', 'رأفت', 'رؤوف', 'رئاد',
        'رائد', 'رائف', 'راجح', 'راجي', 'راشد', 'راضي', 'راغب', 'رافت', 'رافع', 'رافي', 'راكان', 'رامان', 'رامز', 'رامي', 'رامين', 'ربيع', 'رجا', 'رجائي', 'رجب', 'رداد', 'رزق', 'رسلان', 'رشاد', 'رشيد', 'رضا', 'رضوان', 'رعد', 'رغد', 'رغيد', 'ركان', 'رماح', 'رياض', 'ريان', 'زاهر', 'زاهي', 'زايد',
        'زكريا', 'زمام', 'زهير', 'زياد', 'زيد', 'زيدان', 'زيدون', 'زين', 'زين العابدين', 'سائد', 'ساري', 'سالم', 'سامح', 'سامر', 'سامي', 'ساهر', 'سدير', 'سرمد', 'سري', 'سعد', 'سعود', 'سعيد', 'سفيان', 'سكوت', 'سلام', 'سلطان', 'سلمان', 'سليم', 'سليمان', 'سمعان', 'سميح', 'سنان', 'سند', 'سهل', 'سهم',
        'سيف', 'شادي', 'شافع', 'شاكر', 'شامل', 'شاهر', 'شرحبيل', 'شريف', 'شهاب', 'شهم', 'شوان', 'صادق', 'صافي', 'صالح', 'صخر', 'صدام', 'صفاء', 'صفوان', 'صقر', 'صلاح', 'صلاح الدين', 'صهيب', 'ضرار', 'ضرغام', 'ضياء', 'ضياء الدين’, ', 'طارق', 'طالب', 'طاهر', 'طلال', 'طه', 'عادل', 'عاصم', 'عاطف',
        'عامر', 'عايد', 'عبادة', 'عباس', 'عبد الباري', 'عبد الحافظ', 'عبد الحكيم', 'عبد الحليم', 'عبد الحميد', 'عبد الحي', 'عبد الرحمان', 'عبد الرحمن', 'عبد الرحيم', 'عبد الرزاق', 'عبد السلام', 'عبد السميع', 'عبد العزيز', 'عبد العفو', 'عبد الغني', 'عبد الفتاح', 'عبد القادر', 'عبد الكريم',
        'عبد اللطيف', 'عبد الله', 'عبد المجيد', 'عبد المولى', 'عبد الناصر', 'عبد الهادي', 'عبد ربه', 'عبداالله', 'عبدالاله', 'عبدالباسط', 'عبدالجليل', 'عبدالجواد', 'عبدالحليم', 'عبدالحميد', 'عبدالرؤوف', 'عبدالرحمن', 'عبدالرحيم', 'عبدالرزاق', 'عبدالسلام', 'عبدالعزيز', 'عبدالفتاح', 'عبدالقادر',
        'عبدالكريم', 'عبداللطيف', 'عبدالله', 'عبدالمجيد', 'عبدالمطلب', 'عبدالمعطي', 'عبدالمهيمن', 'عبدالناصر', 'عبدالهادي', 'عبدالوهاب', 'عبيدالله', 'عبيدة', 'عتيبه', 'عثمان', 'عدب', 'عدلي', 'عدنان', 'عدوان', 'عدي', 'عرار', 'عرمان', 'عروة', 'عريق', 'عرين', 'عز الدين', 'عزالدين', 'عزام', 'عزت',
        'عزمي', 'عزيز', 'عصام', 'عقل', 'علاء', 'علي', 'عليان', 'عماد', 'عمار', 'عمر', 'عمران', 'عمرو', 'عملا', 'عميد', 'عناد', 'عنان', 'عواد', 'عودة', 'عوده', 'عوض', 'عوف', 'عون', 'عوني', 'عيد', 'عيدالله', 'عيسى', 'غازي', 'غالب', 'غانم', 'غدير', 'غسان', 'غيث', 'فؤاد', 'فائق', 'فاخر', 'فادي',
        'فارس', 'فاروق', 'فاضل', 'فايز', 'فتحي', 'فجر', 'فراس', 'فرح', 'فريد', 'فلاح', 'فهد', 'فهمي', 'فواز', 'فوزي', 'فيصل', 'قارس', 'قاسم', 'قبلان', 'قتاده', 'قتيبة', 'قصي', 'قيس', 'كاظم', 'كامل', 'كايد', 'كرم', 'كريم', 'كفاح', 'كمال', 'كنان', 'لؤي', 'لبيب', 'لطف', 'لطفي', 'ليث', 'مأمون', 'مؤثر',
        'مؤمن', 'مؤنس', 'مؤيد', 'ماجد', 'مازن', 'مالك', 'مامون', 'ماهر', 'مبارك', 'مثنى', 'مجاهد', 'مجد', 'مجدي', 'محسن', 'محمد ', 'محمود', 'محي', 'مختار', 'مخلص', 'مدحت', 'مدين', 'مراد', 'مرشد', 'مرهف', 'مروان', 'مسعد', 'مسعود', 'مسلم', 'مشاري', 'مشعل', 'مشهور', 'مصباح', 'مصطفى', 'مصطفي', 'مصعب',
        'مضر', 'مطيع', 'مظفر', 'مظهر', 'معاذ', 'معاوية', 'معتز', 'معتصم', 'معمر', 'معن', 'معين', 'مفدي', 'مفلح', 'مقداد', 'ملهم', 'ممدوح', 'مناف', 'منتصر', 'منح', 'منذر', 'منصف', 'منصور', 'منير', 'مهاب', 'مهدي', 'مهران', 'مهند', 'موسى', 'موفق', 'نائل', 'ناجي', 'نادر', 'ناصر', 'ناهض', 'نايف',
        'نبراس', 'نبيل', 'نجيب', 'نديم', 'نزار', 'نزال', 'نزيه', 'نسيم', 'نشات', 'نصار', 'نصر', 'نصري', 'نصوح', 'نضال', 'نظام', 'نعمان', 'نعمة', 'نعيم', 'نقولا', 'نمر', 'نهاد', 'نهار', 'نواف', 'نورس', 'نوفان', 'هادي', 'هارون', 'هاشم', 'هانى', 'هاني', 'هذال', 'هشام', 'هلال', 'همام', 'هيثم', 'وائل',
        'واثق', 'واصف', 'وجدي', 'وجيه', 'وحيد', 'وديع', 'ورد', 'وسام', 'وسن', 'وسيم', 'وصفي', 'وضاح', 'وعد', 'وفاء', 'وليد', 'وهيب', 'ياسر', 'ياسين', 'يامن', 'يحيى', 'يزن', 'يزيد', 'يسار', 'يشار', 'يعرب', 'يعقوب', 'يمان', 'ينال', 'يوسف', 'يونس',
    );

    /**
     * @link http://muslim-names.us/
     */
    protected static \$firstNameFemale = array(
        'آثار', 'آلاء', 'آناء', 'آية', 'أبرار', 'أحلام', 'أروى', 'أريج', 'أسماء', 'أسيل', 'أصاله', 'أفنان', 'ألاء', 'أماني', 'أمل', 'أميرة', 'أنسام', 'أنوار', 'إباء', 'إخلاص', 'إسراء', 'إسلام', 'إكرام', 'إنعام', 'إيمان', 'إيناس', 'ابتهاج', 'ابتهال', 'أبرار', 'إخلاص', 'ارجوان', 'أروى', 'أريج',
        'أزهار', 'أسحار', 'اسراء', 'اسرار', 'اسيل', 'اشراق', 'أصالة', 'اعتدال', 'أفراح', 'أفنان', 'إكرام', 'آلاء', 'العنود', 'إلهام', 'آمال', 'أمنة', 'أميرة', 'أمينة', 'أناهيد', 'انتظار', 'أنعام', 'أنوار', 'آيات', 'إيمان', 'إيناس', 'آية', 'باسمة', 'بتول', 'بثينة', 'بدور', 'براء', 'براءة', 'بسمة',
        'بشائر', 'بشرى', 'بلسم', 'بنان', 'بهجة', 'بيان', 'بيداء', 'بيسان', 'تالا', 'تالة', 'تالين', 'تحرير', 'تسنيم', 'تغريد', 'تقوى', 'تقى', 'تمارا', 'تماضر', 'تمام', 'تهاني', 'تولين', 'ثريا', 'جمانة', 'جميلة', 'جنى', 'جهاد', 'جود', 'حبيبة', 'حسناء', 'حصة', 'حلا', 'حليمة', 'حنان', 'حنين', 'حياة',
        'ختام', 'خديجة', 'خلود', 'خولة', 'دارين', 'داليا', 'دالية', 'دانا', 'دانة', 'دانية', 'دعاء', 'دلال', 'دنى', 'دنيا', 'ديانا', 'ديما', 'دينا', 'رؤى', 'رؤيه', 'رابعة', 'راغدة', 'راما', 'رانا', 'رانيا', 'راوية', 'راية', 'ربا', 'رباب', 'ربى', 'رجاء', 'رحمة', 'رحمه', 'ردينة', 'رزان',
        'رشا', 'رغد', 'رغدة', 'رفاه', 'رقية', 'رمال', 'رنا', 'رناد', 'رند', 'رنده', 'رنيم', 'رنين', 'رهام', 'رهف', 'رواء', 'روان', 'روزان', 'روزانا', 'روزين', 'رولى', 'روند', 'رويدة', 'ريان', 'ريتا', 'ريم', 'ريما', 'ريمان', 'ريناتا', 'ريناد', 'ريهام', 'زكية', 'زمان', 'زها', 'زهرة', 'زين', 'زينا',
        'زينات', 'زينب', 'زينة', 'ساجدة', 'سارة', 'سجى', 'سحر', 'سدين', 'سرى', 'سرين', 'سعاد', 'سكينة', 'سلام', 'سلسبيل', 'سلمى', 'سلوى', 'سما', 'سماح', 'سماره', 'سمر', 'سمية', 'سميرة', 'سناء', 'سنابل', 'سندس', 'سنريت', 'سنن', 'سهاد', 'سهام', 'سهر', 'سهى', 'سهير', 'سهيله', 'سوار', 'سوزان', 'سوسن',
        'سيرين', 'سيرينا', 'سيلفا', 'سيلين', 'سيما', 'شذى', 'شروق', 'شريفة', 'شرين', 'شريهان', 'شفاء', 'شهد', 'شيرين', 'شيماء', 'صابرين', 'صبا', 'صباح', 'صبرين', 'صفا', 'صفاء', 'صفية', 'صمود', 'ضحى', 'ضياء', 'عائشة', 'عاليا', 'عالية', 'عبلة', 'عبير', 'عزة', 'عزيزة', 'عفاف', 'علا', 'علياء',
        'عنود', 'عهد', 'غادة', 'غدير', 'غرام', 'غزل', 'غصون', 'غفران', 'غنى', 'غيد', 'غيداء', 'غيده', 'فاتن', 'فادية', 'فاديه', 'فاطمة', 'فايزة', 'فتحية', 'فداء', 'فدوى', 'فدى', 'فرح', 'فريال', 'فريدة', 'فوزية', 'فيروز', 'فيفيان', 'قمر', 'كيان', 'لارا', 'لانا', 'لبنا', 'لجين', 'لطيفة', 'لمى',
        'لميس', 'لنا', 'لورا', 'لورينا', 'لونا', 'ليان', 'ليدا', 'ليلى', 'ليليان', 'لين', 'لينا', 'لينة', 'ليندا', 'لينه', 'مايا', 'مجد', 'مجدولين', 'محبوبة', 'مديحة', 'مرام', 'مرح', 'مروة', 'مريام', 'مريم', 'مسعدة', 'مشيرة', 'معالي', 'ملاك', 'ملك', 'منار', 'منال', 'منى', 'مها', 'مي',
        'ميادة', 'مياده', 'ميار', 'ميان', 'ميرا', 'ميرال', 'ميران', 'ميرفت', 'ميس', 'ميسا', 'ميساء', 'ميسر', 'ميسره', 'ميسم', 'ميسون', 'ميلاء', 'ميناس', 'نائله', 'ناديا', 'نادية', 'نادين', 'ناديه', 'نانسي', 'نبال', 'نبراس', 'نبيله', 'نجاة', 'نجاح', 'نجلاء', 'نجود', 'نجوى', 'نداء', 'ندى',
        'ندين', 'نرمين', 'نسرين', 'نسيمة', 'نعمت', 'نعمه', 'نهاد', 'نهى', 'نهيدة', 'نوال', 'نور', 'نور الهدى', 'نورا', 'نوران', 'نيروز', 'نيفين', 'هادلين', 'هازار', 'هالة', 'هانيا', 'هايدي', 'هبة', 'هدايه', 'هدى', 'هديل', 'هزار', 'هلا', 'هنا', 'هناء', 'هنادي', 'هند', 'هيا', 'هيفا',
        'هيفاء', 'هيلين', 'وئام', 'وجدان', 'وداد', 'ورود', 'وسام', 'وسن', 'وسيم', 'وعد', 'وفاء', 'ولاء', 'ىمنة', 'يارا', 'ياسمين', 'يسرى',
    );

    protected static \$lastName = array(
        'العتيبي', 'الشهري', 'العنزي', 'الخضيري', 'الحسين', 'العسكر', 'باشا', 'مدني', 'العرفج',
        'القحطاني', 'الفدا', 'المشيقح', 'العمرو', 'السالم', 'الشيباني', 'السهلي', 'المطرفي',
        'الأحمري', 'الفيفي', 'العقل', 'الفرحان', 'الحصين', 'الأسمري', 'الماجد', 'الخالدي', 'السيف',
        'الحنتوشي', 'الشهيل', 'الزامل', 'الصامل', 'السماعيل', 'الجريد', 'الحميد', 'المقبل',
        'الراجحي', 'المنيف', 'السويلم', 'السمير', 'الصقير', 'الصقيه', 'سقا', 'مكي', 'جواهرجي',
        'الجهني', 'الفريدي', 'برماوي', 'هوساوي', 'السعيد', 'الداوود', 'السليم', 'السماري',
    );

    protected static \$titleMale = array('السيد', 'الأستاذ', 'الدكتور', 'المهندس');
    protected static \$titleFemale = array('السيدة', 'الآنسة', 'الدكتورة', 'المهندسة');
    private static \$prefix = array('أ.', 'د.', 'أ.د', 'م.');

    /**
     * @example 'أ.'
     */
    public static function prefix()
    {
        return static::randomElement(static::\$prefix);
    }

    /**
     * @example 1010101010
     */
    public static function idNumber()
    {
        \$partialValue = static::numerify(
            static::randomElement(array(1, 2)) . str_repeat('#', 8)
        );
        return Luhn::generateLuhnNumber(\$partialValue);
    }

    /**
     * @example 1010101010
     */
    public static function nationalIdNumber()
    {
        \$partialValue = static::numerify(1 . str_repeat('#', 8));
        return Luhn::generateLuhnNumber(\$partialValue);
    }

    /**
     * @example 2010101010
     */
    public static function foreignerIdNumber()
    {
        \$partialValue = static::numerify(2 . str_repeat('#', 8));
        return Luhn::generateLuhnNumber(\$partialValue);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ar_SA/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 25,  133 => 24,  125 => 23,  119 => 22,  113 => 21,  107 => 20,  101 => 19,  90 => 15,  80 => 14,  72 => 13,  66 => 12,  60 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ar_SA;

use Faker\\Calculator\\Luhn;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    /**
     * @link http://muslim-names.us/
     */
    protected static \$firstNameMale = array(

        'آدم', 'أبراهيم', 'أحمد', 'أدهم', 'أسامة', 'أسعد', 'أشرف', 'أكثم', 'أكرم', 'أمجد', 'أمين', 'أنس', 'أنور', 'أواس', 'أوس', 'أيمن', 'أيهم', 'أيوب', 'إبراهيم', 'إسلام', 'إسماعيل', 'إلياس', 'إياد', 'إيهاب', 'ابان', 'ابراهيم', 'اثير', 'احسان', 'احمد', 'ادريس', 'ادم', 'ادهم', 'اديب', 'اسامة',
        'اسحاق', 'اسحق', 'اسعد', 'اسلام', 'اسماعيل', 'اسيد', 'اشراف', 'اشرف', 'اصلان', 'اكثم', 'اكرم', 'البراء', 'البشر', 'الحارث', 'الحسين', 'الطفيل', 'العزم', 'الليث', 'المثنى', 'المنصور', 'الياس', 'اليمان', 'امجد', 'امير', 'امين', 'أنس', 'انور', 'انيس', 'اوس', 'اوسم', 'اويس', 'اياد', 'اياس',
        'ايسر', 'ايمن', 'ايهم', 'ايوب', 'باسل', 'باسم', 'باهر', 'بدر', 'بدوان', 'براء', 'برهان', 'بسام', 'بشار', 'بشر', 'بشير', 'بكر', 'بلال', 'بليغ', 'بندر', 'بهاء', 'تركي', 'توفيق', 'ثامر', 'جابر', 'جاسر', 'جاسم', 'جبر', 'جبير', 'جراح', 'جريس', 'جعفر', 'جلال', 'جمال', 'جمزه', 'جميل', 'جهاد',
        'جواد', 'حابس', 'حاتم', 'حارث', 'حازم', 'حافظ', 'حاكم', 'حامد', 'حبيب', 'حذيفة', 'حسام', 'حسان', 'حسن', 'حسني', 'حسين', 'حكم', 'حمد', 'حمدالله', 'حمدان', 'حمدي', 'حمزة', 'حمود', 'حميد', 'خالد', 'خضر', 'خلدون', 'خلف', 'خليفة', 'خليل', 'خميس', 'داوود', 'ذياب', 'ذيب', 'رأفت', 'رؤوف', 'رئاد',
        'رائد', 'رائف', 'راجح', 'راجي', 'راشد', 'راضي', 'راغب', 'رافت', 'رافع', 'رافي', 'راكان', 'رامان', 'رامز', 'رامي', 'رامين', 'ربيع', 'رجا', 'رجائي', 'رجب', 'رداد', 'رزق', 'رسلان', 'رشاد', 'رشيد', 'رضا', 'رضوان', 'رعد', 'رغد', 'رغيد', 'ركان', 'رماح', 'رياض', 'ريان', 'زاهر', 'زاهي', 'زايد',
        'زكريا', 'زمام', 'زهير', 'زياد', 'زيد', 'زيدان', 'زيدون', 'زين', 'زين العابدين', 'سائد', 'ساري', 'سالم', 'سامح', 'سامر', 'سامي', 'ساهر', 'سدير', 'سرمد', 'سري', 'سعد', 'سعود', 'سعيد', 'سفيان', 'سكوت', 'سلام', 'سلطان', 'سلمان', 'سليم', 'سليمان', 'سمعان', 'سميح', 'سنان', 'سند', 'سهل', 'سهم',
        'سيف', 'شادي', 'شافع', 'شاكر', 'شامل', 'شاهر', 'شرحبيل', 'شريف', 'شهاب', 'شهم', 'شوان', 'صادق', 'صافي', 'صالح', 'صخر', 'صدام', 'صفاء', 'صفوان', 'صقر', 'صلاح', 'صلاح الدين', 'صهيب', 'ضرار', 'ضرغام', 'ضياء', 'ضياء الدين’, ', 'طارق', 'طالب', 'طاهر', 'طلال', 'طه', 'عادل', 'عاصم', 'عاطف',
        'عامر', 'عايد', 'عبادة', 'عباس', 'عبد الباري', 'عبد الحافظ', 'عبد الحكيم', 'عبد الحليم', 'عبد الحميد', 'عبد الحي', 'عبد الرحمان', 'عبد الرحمن', 'عبد الرحيم', 'عبد الرزاق', 'عبد السلام', 'عبد السميع', 'عبد العزيز', 'عبد العفو', 'عبد الغني', 'عبد الفتاح', 'عبد القادر', 'عبد الكريم',
        'عبد اللطيف', 'عبد الله', 'عبد المجيد', 'عبد المولى', 'عبد الناصر', 'عبد الهادي', 'عبد ربه', 'عبداالله', 'عبدالاله', 'عبدالباسط', 'عبدالجليل', 'عبدالجواد', 'عبدالحليم', 'عبدالحميد', 'عبدالرؤوف', 'عبدالرحمن', 'عبدالرحيم', 'عبدالرزاق', 'عبدالسلام', 'عبدالعزيز', 'عبدالفتاح', 'عبدالقادر',
        'عبدالكريم', 'عبداللطيف', 'عبدالله', 'عبدالمجيد', 'عبدالمطلب', 'عبدالمعطي', 'عبدالمهيمن', 'عبدالناصر', 'عبدالهادي', 'عبدالوهاب', 'عبيدالله', 'عبيدة', 'عتيبه', 'عثمان', 'عدب', 'عدلي', 'عدنان', 'عدوان', 'عدي', 'عرار', 'عرمان', 'عروة', 'عريق', 'عرين', 'عز الدين', 'عزالدين', 'عزام', 'عزت',
        'عزمي', 'عزيز', 'عصام', 'عقل', 'علاء', 'علي', 'عليان', 'عماد', 'عمار', 'عمر', 'عمران', 'عمرو', 'عملا', 'عميد', 'عناد', 'عنان', 'عواد', 'عودة', 'عوده', 'عوض', 'عوف', 'عون', 'عوني', 'عيد', 'عيدالله', 'عيسى', 'غازي', 'غالب', 'غانم', 'غدير', 'غسان', 'غيث', 'فؤاد', 'فائق', 'فاخر', 'فادي',
        'فارس', 'فاروق', 'فاضل', 'فايز', 'فتحي', 'فجر', 'فراس', 'فرح', 'فريد', 'فلاح', 'فهد', 'فهمي', 'فواز', 'فوزي', 'فيصل', 'قارس', 'قاسم', 'قبلان', 'قتاده', 'قتيبة', 'قصي', 'قيس', 'كاظم', 'كامل', 'كايد', 'كرم', 'كريم', 'كفاح', 'كمال', 'كنان', 'لؤي', 'لبيب', 'لطف', 'لطفي', 'ليث', 'مأمون', 'مؤثر',
        'مؤمن', 'مؤنس', 'مؤيد', 'ماجد', 'مازن', 'مالك', 'مامون', 'ماهر', 'مبارك', 'مثنى', 'مجاهد', 'مجد', 'مجدي', 'محسن', 'محمد ', 'محمود', 'محي', 'مختار', 'مخلص', 'مدحت', 'مدين', 'مراد', 'مرشد', 'مرهف', 'مروان', 'مسعد', 'مسعود', 'مسلم', 'مشاري', 'مشعل', 'مشهور', 'مصباح', 'مصطفى', 'مصطفي', 'مصعب',
        'مضر', 'مطيع', 'مظفر', 'مظهر', 'معاذ', 'معاوية', 'معتز', 'معتصم', 'معمر', 'معن', 'معين', 'مفدي', 'مفلح', 'مقداد', 'ملهم', 'ممدوح', 'مناف', 'منتصر', 'منح', 'منذر', 'منصف', 'منصور', 'منير', 'مهاب', 'مهدي', 'مهران', 'مهند', 'موسى', 'موفق', 'نائل', 'ناجي', 'نادر', 'ناصر', 'ناهض', 'نايف',
        'نبراس', 'نبيل', 'نجيب', 'نديم', 'نزار', 'نزال', 'نزيه', 'نسيم', 'نشات', 'نصار', 'نصر', 'نصري', 'نصوح', 'نضال', 'نظام', 'نعمان', 'نعمة', 'نعيم', 'نقولا', 'نمر', 'نهاد', 'نهار', 'نواف', 'نورس', 'نوفان', 'هادي', 'هارون', 'هاشم', 'هانى', 'هاني', 'هذال', 'هشام', 'هلال', 'همام', 'هيثم', 'وائل',
        'واثق', 'واصف', 'وجدي', 'وجيه', 'وحيد', 'وديع', 'ورد', 'وسام', 'وسن', 'وسيم', 'وصفي', 'وضاح', 'وعد', 'وفاء', 'وليد', 'وهيب', 'ياسر', 'ياسين', 'يامن', 'يحيى', 'يزن', 'يزيد', 'يسار', 'يشار', 'يعرب', 'يعقوب', 'يمان', 'ينال', 'يوسف', 'يونس',
    );

    /**
     * @link http://muslim-names.us/
     */
    protected static \$firstNameFemale = array(
        'آثار', 'آلاء', 'آناء', 'آية', 'أبرار', 'أحلام', 'أروى', 'أريج', 'أسماء', 'أسيل', 'أصاله', 'أفنان', 'ألاء', 'أماني', 'أمل', 'أميرة', 'أنسام', 'أنوار', 'إباء', 'إخلاص', 'إسراء', 'إسلام', 'إكرام', 'إنعام', 'إيمان', 'إيناس', 'ابتهاج', 'ابتهال', 'أبرار', 'إخلاص', 'ارجوان', 'أروى', 'أريج',
        'أزهار', 'أسحار', 'اسراء', 'اسرار', 'اسيل', 'اشراق', 'أصالة', 'اعتدال', 'أفراح', 'أفنان', 'إكرام', 'آلاء', 'العنود', 'إلهام', 'آمال', 'أمنة', 'أميرة', 'أمينة', 'أناهيد', 'انتظار', 'أنعام', 'أنوار', 'آيات', 'إيمان', 'إيناس', 'آية', 'باسمة', 'بتول', 'بثينة', 'بدور', 'براء', 'براءة', 'بسمة',
        'بشائر', 'بشرى', 'بلسم', 'بنان', 'بهجة', 'بيان', 'بيداء', 'بيسان', 'تالا', 'تالة', 'تالين', 'تحرير', 'تسنيم', 'تغريد', 'تقوى', 'تقى', 'تمارا', 'تماضر', 'تمام', 'تهاني', 'تولين', 'ثريا', 'جمانة', 'جميلة', 'جنى', 'جهاد', 'جود', 'حبيبة', 'حسناء', 'حصة', 'حلا', 'حليمة', 'حنان', 'حنين', 'حياة',
        'ختام', 'خديجة', 'خلود', 'خولة', 'دارين', 'داليا', 'دالية', 'دانا', 'دانة', 'دانية', 'دعاء', 'دلال', 'دنى', 'دنيا', 'ديانا', 'ديما', 'دينا', 'رؤى', 'رؤيه', 'رابعة', 'راغدة', 'راما', 'رانا', 'رانيا', 'راوية', 'راية', 'ربا', 'رباب', 'ربى', 'رجاء', 'رحمة', 'رحمه', 'ردينة', 'رزان',
        'رشا', 'رغد', 'رغدة', 'رفاه', 'رقية', 'رمال', 'رنا', 'رناد', 'رند', 'رنده', 'رنيم', 'رنين', 'رهام', 'رهف', 'رواء', 'روان', 'روزان', 'روزانا', 'روزين', 'رولى', 'روند', 'رويدة', 'ريان', 'ريتا', 'ريم', 'ريما', 'ريمان', 'ريناتا', 'ريناد', 'ريهام', 'زكية', 'زمان', 'زها', 'زهرة', 'زين', 'زينا',
        'زينات', 'زينب', 'زينة', 'ساجدة', 'سارة', 'سجى', 'سحر', 'سدين', 'سرى', 'سرين', 'سعاد', 'سكينة', 'سلام', 'سلسبيل', 'سلمى', 'سلوى', 'سما', 'سماح', 'سماره', 'سمر', 'سمية', 'سميرة', 'سناء', 'سنابل', 'سندس', 'سنريت', 'سنن', 'سهاد', 'سهام', 'سهر', 'سهى', 'سهير', 'سهيله', 'سوار', 'سوزان', 'سوسن',
        'سيرين', 'سيرينا', 'سيلفا', 'سيلين', 'سيما', 'شذى', 'شروق', 'شريفة', 'شرين', 'شريهان', 'شفاء', 'شهد', 'شيرين', 'شيماء', 'صابرين', 'صبا', 'صباح', 'صبرين', 'صفا', 'صفاء', 'صفية', 'صمود', 'ضحى', 'ضياء', 'عائشة', 'عاليا', 'عالية', 'عبلة', 'عبير', 'عزة', 'عزيزة', 'عفاف', 'علا', 'علياء',
        'عنود', 'عهد', 'غادة', 'غدير', 'غرام', 'غزل', 'غصون', 'غفران', 'غنى', 'غيد', 'غيداء', 'غيده', 'فاتن', 'فادية', 'فاديه', 'فاطمة', 'فايزة', 'فتحية', 'فداء', 'فدوى', 'فدى', 'فرح', 'فريال', 'فريدة', 'فوزية', 'فيروز', 'فيفيان', 'قمر', 'كيان', 'لارا', 'لانا', 'لبنا', 'لجين', 'لطيفة', 'لمى',
        'لميس', 'لنا', 'لورا', 'لورينا', 'لونا', 'ليان', 'ليدا', 'ليلى', 'ليليان', 'لين', 'لينا', 'لينة', 'ليندا', 'لينه', 'مايا', 'مجد', 'مجدولين', 'محبوبة', 'مديحة', 'مرام', 'مرح', 'مروة', 'مريام', 'مريم', 'مسعدة', 'مشيرة', 'معالي', 'ملاك', 'ملك', 'منار', 'منال', 'منى', 'مها', 'مي',
        'ميادة', 'مياده', 'ميار', 'ميان', 'ميرا', 'ميرال', 'ميران', 'ميرفت', 'ميس', 'ميسا', 'ميساء', 'ميسر', 'ميسره', 'ميسم', 'ميسون', 'ميلاء', 'ميناس', 'نائله', 'ناديا', 'نادية', 'نادين', 'ناديه', 'نانسي', 'نبال', 'نبراس', 'نبيله', 'نجاة', 'نجاح', 'نجلاء', 'نجود', 'نجوى', 'نداء', 'ندى',
        'ندين', 'نرمين', 'نسرين', 'نسيمة', 'نعمت', 'نعمه', 'نهاد', 'نهى', 'نهيدة', 'نوال', 'نور', 'نور الهدى', 'نورا', 'نوران', 'نيروز', 'نيفين', 'هادلين', 'هازار', 'هالة', 'هانيا', 'هايدي', 'هبة', 'هدايه', 'هدى', 'هديل', 'هزار', 'هلا', 'هنا', 'هناء', 'هنادي', 'هند', 'هيا', 'هيفا',
        'هيفاء', 'هيلين', 'وئام', 'وجدان', 'وداد', 'ورود', 'وسام', 'وسن', 'وسيم', 'وعد', 'وفاء', 'ولاء', 'ىمنة', 'يارا', 'ياسمين', 'يسرى',
    );

    protected static \$lastName = array(
        'العتيبي', 'الشهري', 'العنزي', 'الخضيري', 'الحسين', 'العسكر', 'باشا', 'مدني', 'العرفج',
        'القحطاني', 'الفدا', 'المشيقح', 'العمرو', 'السالم', 'الشيباني', 'السهلي', 'المطرفي',
        'الأحمري', 'الفيفي', 'العقل', 'الفرحان', 'الحصين', 'الأسمري', 'الماجد', 'الخالدي', 'السيف',
        'الحنتوشي', 'الشهيل', 'الزامل', 'الصامل', 'السماعيل', 'الجريد', 'الحميد', 'المقبل',
        'الراجحي', 'المنيف', 'السويلم', 'السمير', 'الصقير', 'الصقيه', 'سقا', 'مكي', 'جواهرجي',
        'الجهني', 'الفريدي', 'برماوي', 'هوساوي', 'السعيد', 'الداوود', 'السليم', 'السماري',
    );

    protected static \$titleMale = array('السيد', 'الأستاذ', 'الدكتور', 'المهندس');
    protected static \$titleFemale = array('السيدة', 'الآنسة', 'الدكتورة', 'المهندسة');
    private static \$prefix = array('أ.', 'د.', 'أ.د', 'م.');

    /**
     * @example 'أ.'
     */
    public static function prefix()
    {
        return static::randomElement(static::\$prefix);
    }

    /**
     * @example 1010101010
     */
    public static function idNumber()
    {
        \$partialValue = static::numerify(
            static::randomElement(array(1, 2)) . str_repeat('#', 8)
        );
        return Luhn::generateLuhnNumber(\$partialValue);
    }

    /**
     * @example 1010101010
     */
    public static function nationalIdNumber()
    {
        \$partialValue = static::numerify(1 . str_repeat('#', 8));
        return Luhn::generateLuhnNumber(\$partialValue);
    }

    /**
     * @example 2010101010
     */
    public static function foreignerIdNumber()
    {
        \$partialValue = static::numerify(2 . str_repeat('#', 8));
        return Luhn::generateLuhnNumber(\$partialValue);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ar_SA/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ar_SA/Person.php");
    }
}
