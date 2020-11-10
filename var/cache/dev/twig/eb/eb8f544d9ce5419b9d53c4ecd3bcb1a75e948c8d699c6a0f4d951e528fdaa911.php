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

/* vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Address.php */
class __TwigTemplate_1f26ade31c0991a0380c3e8a8860d7baa56782dd32d1761d4f96e99337a995c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\th_TH;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array(
        'เมือง', 'หมู่บ้าน', 'ท่า',
    );

    protected static \$citySuffix = array(
        'เหนือ', 'ใต้', 'บุรี',
    );

    protected static \$buildingNumber = array(
        '#####', '####', '###', '##', '##/###',
    );

    protected static \$streetPrefix = array(
        'ซอย', 'ถนน', 'สะพาน', 'วงเวียน', 'แยก',
    );

    protected static \$postcode = array('#####');

    /**
     * @var array Thai province names
     * @link https://th.wikipedia.org/wiki/%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B9%84%E0%B8%97%E0%B8%A2
     */
    protected static \$province = array(
        'กระบี่', 'กรุงเทพมหานคร', 'กาญจนบุรี', 'กาฬสินธุ์', 'กำแพงเพชร', 'ขอนแก่น',
        'จันทบุรี', 'ฉะเชิงเทรา', 'ชลบุรี', 'ชัยนาท', 'ชัยภูมิ', 'ชุมพร',
        'ตรัง', 'ตราด', 'ตาก', 'นครนายก', 'นครปฐม', 'นครพนม', 'นครราชสีมา',
        'นครศรีธรรมราช', 'นครสวรรค์', 'นนทบุรี', 'นราธิวาส', 'น่าน',
        'บึงกาฬ', 'บุรีรัมย์', 'ปทุมธานี', 'ประจวบคีรีขันธ์', 'ปราจีนบุรี', 'ปัตตานี',
        'พระนครศรีอยุธยา', 'พะเยา', 'พังงา', 'พัทลุง', 'พิจิตร', 'พิษณุโลก', 'ภูเก็ต',
        'มหาสารคาม', 'มุกดาหาร', 'ยะลา', 'ยโสธร', 'ระนอง', 'ระยอง', 'ราชบุรี', 'ร้อยเอ็ด',
        'ลพบุรี', 'ลำปาง', 'ลำพูน', 'ศรีสะเกษ', 'สกลนคร', 'สงขลา', 'สตูล', 'สมุทรปราการ', 'สมุทรสงคราม',
        'สมุทรสาคร', 'สระบุรี', 'สระแก้ว', 'สิงห์บุรี', 'สุพรรณบุรี', 'สุราษฎร์ธานี', 'สุรินทร์', 'สุโขทัย',
        'หนองคาย', 'หนองบัวลำภู', 'อำนาจเจริญ', 'อุดรธานี', 'อุตรดิตถ์', 'อุทัยธานี', 'อุบลราชธานี', 'อ่างทอง',
        'เชียงราย', 'เชียงใหม่', 'เพชรบุรี', 'เพชรบูรณ์', 'เลย', 'แพร่', 'แม่ฮ่องสอน',
    );

    /**
     * @var array Country names in Thai
     * @link https://th.wikipedia.org/wiki/%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8_%E0%B8%94%E0%B8%B4%E0%B8%99%E0%B9%81%E0%B8%94%E0%B8%99_%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B8%AB%E0%B8%A5%E0%B8%A7%E0%B8%87
     */
    protected static \$country = array(
        'กรีซ', 'กัมพูชา', 'กัวเตมาลา', 'กาตาร์', 'คอซอวอ', 'คาซัคสถาน', 'คิริบาส', 'คิวบา', 'คีร์กีซสถาน', 'คูเวต',
        'จอร์เจีย', 'จอร์แดน', 'จาเมกา', 'จีน','ชิลี', 'ซานมารีโน', 'ซามัว', 'ซาอุดีอาระเบีย', 'ซีเรีย', 'ซูรินาม',
        'ญี่ปุ่น', 'ดอมินีกา', 'ตรินิแดดและโตเบโก', 'ตองกา', 'ติมอร์-เลสเต', 'ตุรกี', 'ตูวาลู', 'ทาจิกิสถาน',
        'นครรัฐวาติกัน', 'นอร์เวย์', 'นาอูรู', 'นิการากัว', 'นิวซีแลนด์', 'บราซิล', 'บรูไนดารุสซาลาม', 'บอสเนียและเฮอร์เซโกวีนา',
        'บังกลาเทศ', 'บัลแกเรีย', 'บาร์เบโดส', 'บาห์เรน', 'บาฮามาส', 'ปากีสถาน', 'ปานามา', 'ปาปัวนิวกินี', 'ปารากวัย', 'ปาเลา',
        'ฝรั่งเศส', 'พม่า', 'ฟิจิ', 'ฟินแลนด์', 'ฟิลิปปินส์', 'ภูฏาน', 'มองโกเลีย', 'มอนเตเนโกร', 'มอลตา','มอลโดวา', 'มัลดีฟส์', 'มาเลเซีย',
        'ยูเครน', 'รัสเซีย', 'ลักเซมเบิร์ก', 'ลัตเวีย', 'ลาว', 'ลิกเตนสไตน์','ลิทัวเนีย', 'ศรีลังกา',
        'สวิตเซอร์แลนด์', 'สวีเดน', 'สหรัฐอาหรับเอมิเรตส์', 'สหรัฐอเมริกา', 'สหราชอาณาจักร', 'สาธารณรัฐมาซิโดเนีย', 'สาธารณรัฐเช็ก', 'สาธารณรัฐโดมินิกัน',
        'สิงคโปร์', 'สเปน', 'สโลวาเกีย', 'สโลวีเนีย', 'หมู่เกาะมาร์แชลล์', 'หมู่เกาะโซโลมอน',
        'ออสเตรีย', 'ออสเตรเลีย', 'อันดอร์รา', 'อัฟกานิสถาน', 'อาร์มีเนีย', 'อาร์เจนตินา', 'อาเซอร์ไบจาน',
        'อิตาลี', 'อินเดีย', 'อินโดนีเซีย', 'อิรัก', 'อิสราเอล', 'อิหร่าน', 'อุซเบกิสถาน', 'อุรุกวัย', 'ฮอนดูรัส', 'ฮังการี',
        'เกรเนดา', 'เกาหลีเหนือ', 'เกาหลีใต้', 'เซนต์คิตส์และเนวิส', 'เซนต์ลูเซีย', 'เซนต์วินเซนต์และเกรนาดีนส์', 'เซอร์เบีย',
        'เดนมาร์ก', 'เติร์กเมนิสถาน', 'เนปาล', 'เนเธอร์แลนด์', 'เบลารุส', 'เบลีซ', 'เบลเยียม', 'เปรู', 'เม็กซิโก',
        'เยอรมนี', 'เยเมน', 'เลบานอน', 'เวียดนาม', 'เวเนซุเอลา', 'เอกวาดอร์', 'เอลซัลวาดอร์', 'เอสโตเนีย', 'เฮติ',  'แคนาดา',
        'แอนติกาและบาร์บูดา', 'แอลเบเนีย', 'โครเอเชีย', 'โคลอมเบีย', 'โบลิเวีย', 'โปรตุเกส', 'โปแลนด์', 'โมนาโก', 'โรมาเนีย',
        'โอมาน', 'ไซปรัส', 'ไทย', 'ไมโครนีเซีย', 'ไอซ์แลนด์', 'ไอร์แลนด์',
    );

    protected static \$cityFormats = array(
        '";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 67, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 67, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 68, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 69, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 70, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetNameFormats = array(
        '";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 75, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "',
    );
    
    protected static \$addressFormats = array(
        \"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 83, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "\",
    );

    /**
     * @example 'เมือง'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example 'กรุงเทพมหานคร'
     */
    public static function province()
    {
        return static::randomElement(static::\$province);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 83,  152 => 79,  143 => 75,  137 => 74,  129 => 70,  124 => 69,  118 => 68,  111 => 67,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\th_TH;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array(
        'เมือง', 'หมู่บ้าน', 'ท่า',
    );

    protected static \$citySuffix = array(
        'เหนือ', 'ใต้', 'บุรี',
    );

    protected static \$buildingNumber = array(
        '#####', '####', '###', '##', '##/###',
    );

    protected static \$streetPrefix = array(
        'ซอย', 'ถนน', 'สะพาน', 'วงเวียน', 'แยก',
    );

    protected static \$postcode = array('#####');

    /**
     * @var array Thai province names
     * @link https://th.wikipedia.org/wiki/%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B9%84%E0%B8%97%E0%B8%A2
     */
    protected static \$province = array(
        'กระบี่', 'กรุงเทพมหานคร', 'กาญจนบุรี', 'กาฬสินธุ์', 'กำแพงเพชร', 'ขอนแก่น',
        'จันทบุรี', 'ฉะเชิงเทรา', 'ชลบุรี', 'ชัยนาท', 'ชัยภูมิ', 'ชุมพร',
        'ตรัง', 'ตราด', 'ตาก', 'นครนายก', 'นครปฐม', 'นครพนม', 'นครราชสีมา',
        'นครศรีธรรมราช', 'นครสวรรค์', 'นนทบุรี', 'นราธิวาส', 'น่าน',
        'บึงกาฬ', 'บุรีรัมย์', 'ปทุมธานี', 'ประจวบคีรีขันธ์', 'ปราจีนบุรี', 'ปัตตานี',
        'พระนครศรีอยุธยา', 'พะเยา', 'พังงา', 'พัทลุง', 'พิจิตร', 'พิษณุโลก', 'ภูเก็ต',
        'มหาสารคาม', 'มุกดาหาร', 'ยะลา', 'ยโสธร', 'ระนอง', 'ระยอง', 'ราชบุรี', 'ร้อยเอ็ด',
        'ลพบุรี', 'ลำปาง', 'ลำพูน', 'ศรีสะเกษ', 'สกลนคร', 'สงขลา', 'สตูล', 'สมุทรปราการ', 'สมุทรสงคราม',
        'สมุทรสาคร', 'สระบุรี', 'สระแก้ว', 'สิงห์บุรี', 'สุพรรณบุรี', 'สุราษฎร์ธานี', 'สุรินทร์', 'สุโขทัย',
        'หนองคาย', 'หนองบัวลำภู', 'อำนาจเจริญ', 'อุดรธานี', 'อุตรดิตถ์', 'อุทัยธานี', 'อุบลราชธานี', 'อ่างทอง',
        'เชียงราย', 'เชียงใหม่', 'เพชรบุรี', 'เพชรบูรณ์', 'เลย', 'แพร่', 'แม่ฮ่องสอน',
    );

    /**
     * @var array Country names in Thai
     * @link https://th.wikipedia.org/wiki/%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8_%E0%B8%94%E0%B8%B4%E0%B8%99%E0%B9%81%E0%B8%94%E0%B8%99_%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B8%AB%E0%B8%A5%E0%B8%A7%E0%B8%87
     */
    protected static \$country = array(
        'กรีซ', 'กัมพูชา', 'กัวเตมาลา', 'กาตาร์', 'คอซอวอ', 'คาซัคสถาน', 'คิริบาส', 'คิวบา', 'คีร์กีซสถาน', 'คูเวต',
        'จอร์เจีย', 'จอร์แดน', 'จาเมกา', 'จีน','ชิลี', 'ซานมารีโน', 'ซามัว', 'ซาอุดีอาระเบีย', 'ซีเรีย', 'ซูรินาม',
        'ญี่ปุ่น', 'ดอมินีกา', 'ตรินิแดดและโตเบโก', 'ตองกา', 'ติมอร์-เลสเต', 'ตุรกี', 'ตูวาลู', 'ทาจิกิสถาน',
        'นครรัฐวาติกัน', 'นอร์เวย์', 'นาอูรู', 'นิการากัว', 'นิวซีแลนด์', 'บราซิล', 'บรูไนดารุสซาลาม', 'บอสเนียและเฮอร์เซโกวีนา',
        'บังกลาเทศ', 'บัลแกเรีย', 'บาร์เบโดส', 'บาห์เรน', 'บาฮามาส', 'ปากีสถาน', 'ปานามา', 'ปาปัวนิวกินี', 'ปารากวัย', 'ปาเลา',
        'ฝรั่งเศส', 'พม่า', 'ฟิจิ', 'ฟินแลนด์', 'ฟิลิปปินส์', 'ภูฏาน', 'มองโกเลีย', 'มอนเตเนโกร', 'มอลตา','มอลโดวา', 'มัลดีฟส์', 'มาเลเซีย',
        'ยูเครน', 'รัสเซีย', 'ลักเซมเบิร์ก', 'ลัตเวีย', 'ลาว', 'ลิกเตนสไตน์','ลิทัวเนีย', 'ศรีลังกา',
        'สวิตเซอร์แลนด์', 'สวีเดน', 'สหรัฐอาหรับเอมิเรตส์', 'สหรัฐอเมริกา', 'สหราชอาณาจักร', 'สาธารณรัฐมาซิโดเนีย', 'สาธารณรัฐเช็ก', 'สาธารณรัฐโดมินิกัน',
        'สิงคโปร์', 'สเปน', 'สโลวาเกีย', 'สโลวีเนีย', 'หมู่เกาะมาร์แชลล์', 'หมู่เกาะโซโลมอน',
        'ออสเตรีย', 'ออสเตรเลีย', 'อันดอร์รา', 'อัฟกานิสถาน', 'อาร์มีเนีย', 'อาร์เจนตินา', 'อาเซอร์ไบจาน',
        'อิตาลี', 'อินเดีย', 'อินโดนีเซีย', 'อิรัก', 'อิสราเอล', 'อิหร่าน', 'อุซเบกิสถาน', 'อุรุกวัย', 'ฮอนดูรัส', 'ฮังการี',
        'เกรเนดา', 'เกาหลีเหนือ', 'เกาหลีใต้', 'เซนต์คิตส์และเนวิส', 'เซนต์ลูเซีย', 'เซนต์วินเซนต์และเกรนาดีนส์', 'เซอร์เบีย',
        'เดนมาร์ก', 'เติร์กเมนิสถาน', 'เนปาล', 'เนเธอร์แลนด์', 'เบลารุส', 'เบลีซ', 'เบลเยียม', 'เปรู', 'เม็กซิโก',
        'เยอรมนี', 'เยเมน', 'เลบานอน', 'เวียดนาม', 'เวเนซุเอลา', 'เอกวาดอร์', 'เอลซัลวาดอร์', 'เอสโตเนีย', 'เฮติ',  'แคนาดา',
        'แอนติกาและบาร์บูดา', 'แอลเบเนีย', 'โครเอเชีย', 'โคลอมเบีย', 'โบลิเวีย', 'โปรตุเกส', 'โปแลนด์', 'โมนาโก', 'โรมาเนีย',
        'โอมาน', 'ไซปรัส', 'ไทย', 'ไมโครนีเซีย', 'ไอซ์แลนด์', 'ไอร์แลนด์',
    );

    protected static \$cityFormats = array(
        '{{cityPrefix}} {{firstName}}{{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
    );

    protected static \$streetNameFormats = array(
        '{{firstName}} {{streetSuffix}}',
        '{{lastName}} {{streetSuffix}}'
    );

    protected static \$streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
    );
    
    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{city}}, {{postcode}}\",
    );

    /**
     * @example 'เมือง'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example 'กรุงเทพมหานคร'
     */
    public static function province()
    {
        return static::randomElement(static::\$province);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/th_TH/Address.php");
    }
}
