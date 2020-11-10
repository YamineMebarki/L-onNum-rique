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

/* vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Address.php */
class __TwigTemplate_2bb1b0ebfe5c0169693d419a5c7306757015d06f9de558060b9c6852193338b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\vi_VN;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('####', '###', '##', '#');
    protected static \$postcode = array('#####', '######', '#####-####');
    protected static \$province = array(
        'An Giang', 'Bà Rịa - Vũng Tàu',
        'Bắc Giang', 'Bắc Kạn', 'Bạc Liêu',
        'Bắc Ninh', 'Bến Tre', 'Bình Định',
        'Bình Dương', 'Bình Phước', 'Bình Thuận',
        'Cà Mau', 'Cao Bằng', 'Đắk Lắk',
        'Đắk Nông', 'Điện Biên', 'Đồng Nai',
        'Đồng Tháp', 'Gia Lai', 'Hà Giang',
        'Hà Nam', 'Hà Tĩnh', 'Hải Dương',
        'Hậu Giang', 'Hòa Bình', 'Hưng Yên',
        'Khánh Hòa', 'Kiên Giang', 'Kon Tum',
        'Lai Châu', 'Lâm Đồng', 'Lạng Sơn',
        'Lào Cai', 'Long An', 'Nam Định',
        'Nghệ An', 'Ninh Bình', 'Ninh Thuận',
        'Phú Thọ', 'Quảng Bình', 'Quảng Nam',
        'Quảng Ngãi', 'Quảng Ninh', 'Quảng Trị',
        'Sóc Trăng', 'Sơn La', 'Tây Ninh',
        'Thái Bình', 'Thái Nguyên', 'Thanh Hóa',
        'Thừa Thiên Huế', 'Tiền Giang', 'Trà Vinh',
        'Tuyên Quang', 'Vĩnh Long', 'Vĩnh Phúc',
        'Yên Bái', 'Phú Yên',
    );
    protected static \$city = array(
        'Cần Thơ', 'Đà Nẵng', 'Hải Phòng', 'Hà Nội', 'Hồ Chí Minh',
    );
    protected static \$streetNameFormats = array(
        'Phố ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 35, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 35, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "',
        'Phố ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "',
        'Phố ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "',
        'Phố ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "',
        'Phố ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetAddressFormats = array(
        '";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$hamletNameFormats = array(
        '";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["hamletPrefix"]) || array_key_exists("hamletPrefix", $context) ? $context["hamletPrefix"] : (function () { throw new RuntimeError('Variable "hamletPrefix" does not exist.', 45, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 45, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["hamletPrefix"]) || array_key_exists("hamletPrefix", $context) ? $context["hamletPrefix"] : (function () { throw new RuntimeError('Variable "hamletPrefix" does not exist.', 46, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 46, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["hamletPrefix"]) || array_key_exists("hamletPrefix", $context) ? $context["hamletPrefix"] : (function () { throw new RuntimeError('Variable "hamletPrefix" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["hamletPrefix"]) || array_key_exists("hamletPrefix", $context) ? $context["hamletPrefix"] : (function () { throw new RuntimeError('Variable "hamletPrefix" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["hamletPrefix"]) || array_key_exists("hamletPrefix", $context) ? $context["hamletPrefix"] : (function () { throw new RuntimeError('Variable "hamletPrefix" does not exist.', 49, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 49, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 49, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["hamletPrefix"]) || array_key_exists("hamletPrefix", $context) ? $context["hamletPrefix"] : (function () { throw new RuntimeError('Variable "hamletPrefix" does not exist.', 50, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["hamletPrefix"]) || array_key_exists("hamletPrefix", $context) ? $context["hamletPrefix"] : (function () { throw new RuntimeError('Variable "hamletPrefix" does not exist.', 51, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["hamletPrefix"]) || array_key_exists("hamletPrefix", $context) ? $context["hamletPrefix"] : (function () { throw new RuntimeError('Variable "hamletPrefix" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " ##',
        '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["hamletPrefix"]) || array_key_exists("hamletPrefix", $context) ? $context["hamletPrefix"] : (function () { throw new RuntimeError('Variable "hamletPrefix" does not exist.', 53, $this->source); })()), "html", null, true);
        echo " #',
    );
    protected static \$hamletPrefix = array(
        'Thôn', 'Ấp',
    );
    protected static \$wardNameFormats = array(
        '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["hamletPrefix"]) || array_key_exists("hamletPrefix", $context) ? $context["hamletPrefix"] : (function () { throw new RuntimeError('Variable "hamletPrefix" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["hamletPrefix"]) || array_key_exists("hamletPrefix", $context) ? $context["hamletPrefix"] : (function () { throw new RuntimeError('Variable "hamletPrefix" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["wardPrefix"]) || array_key_exists("wardPrefix", $context) ? $context["wardPrefix"] : (function () { throw new RuntimeError('Variable "wardPrefix" does not exist.', 61, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 61, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["wardPrefix"]) || array_key_exists("wardPrefix", $context) ? $context["wardPrefix"] : (function () { throw new RuntimeError('Variable "wardPrefix" does not exist.', 62, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 62, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["wardPrefix"]) || array_key_exists("wardPrefix", $context) ? $context["wardPrefix"] : (function () { throw new RuntimeError('Variable "wardPrefix" does not exist.', 63, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 63, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 63, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["wardPrefix"]) || array_key_exists("wardPrefix", $context) ? $context["wardPrefix"] : (function () { throw new RuntimeError('Variable "wardPrefix" does not exist.', 64, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["wardPrefix"]) || array_key_exists("wardPrefix", $context) ? $context["wardPrefix"] : (function () { throw new RuntimeError('Variable "wardPrefix" does not exist.', 65, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["wardPrefix"]) || array_key_exists("wardPrefix", $context) ? $context["wardPrefix"] : (function () { throw new RuntimeError('Variable "wardPrefix" does not exist.', 66, $this->source); })()), "html", null, true);
        echo " ##',
        '";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["wardPrefix"]) || array_key_exists("wardPrefix", $context) ? $context["wardPrefix"] : (function () { throw new RuntimeError('Variable "wardPrefix" does not exist.', 67, $this->source); })()), "html", null, true);
        echo " #',
    );
    protected static \$wardPrefix = array(
        'Phường', 'Xã',
    );
    protected static \$districtNameFormats = array(
        '";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["districtPrefix"]) || array_key_exists("districtPrefix", $context) ? $context["districtPrefix"] : (function () { throw new RuntimeError('Variable "districtPrefix" does not exist.', 73, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 73, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["districtPrefix"]) || array_key_exists("districtPrefix", $context) ? $context["districtPrefix"] : (function () { throw new RuntimeError('Variable "districtPrefix" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["districtPrefix"]) || array_key_exists("districtPrefix", $context) ? $context["districtPrefix"] : (function () { throw new RuntimeError('Variable "districtPrefix" does not exist.', 75, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 75, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["districtPrefix"]) || array_key_exists("districtPrefix", $context) ? $context["districtPrefix"] : (function () { throw new RuntimeError('Variable "districtPrefix" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["districtPrefix"]) || array_key_exists("districtPrefix", $context) ? $context["districtPrefix"] : (function () { throw new RuntimeError('Variable "districtPrefix" does not exist.', 77, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 77, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleName"]) || array_key_exists("middleName", $context) ? $context["middleName"] : (function () { throw new RuntimeError('Variable "middleName" does not exist.', 77, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["districtPrefix"]) || array_key_exists("districtPrefix", $context) ? $context["districtPrefix"] : (function () { throw new RuntimeError('Variable "districtPrefix" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["districtPrefix"]) || array_key_exists("districtPrefix", $context) ? $context["districtPrefix"] : (function () { throw new RuntimeError('Variable "districtPrefix" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["districtPrefix"]) || array_key_exists("districtPrefix", $context) ? $context["districtPrefix"] : (function () { throw new RuntimeError('Variable "districtPrefix" does not exist.', 80, $this->source); })()), "html", null, true);
        echo " ##',
        '";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["districtPrefix"]) || array_key_exists("districtPrefix", $context) ? $context["districtPrefix"] : (function () { throw new RuntimeError('Variable "districtPrefix" does not exist.', 81, $this->source); })()), "html", null, true);
        echo " #',
    );
    protected static \$districtPrefix = array(
        'Quận', 'Huyện',
    );
    protected static \$addressFormats = array(
        \"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 87, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["wardName"]) || array_key_exists("wardName", $context) ? $context["wardName"] : (function () { throw new RuntimeError('Variable "wardName" does not exist.', 87, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["districtName"]) || array_key_exists("districtName", $context) ? $context["districtName"] : (function () { throw new RuntimeError('Variable "districtName" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["wardName"]) || array_key_exists("wardName", $context) ? $context["wardName"] : (function () { throw new RuntimeError('Variable "wardName" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["districtName"]) || array_key_exists("districtName", $context) ? $context["districtName"] : (function () { throw new RuntimeError('Variable "districtName" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["province"]) || array_key_exists("province", $context) ? $context["province"] : (function () { throw new RuntimeError('Variable "province" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 89, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["hamletName"]) || array_key_exists("hamletName", $context) ? $context["hamletName"] : (function () { throw new RuntimeError('Variable "hamletName" does not exist.', 89, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["wardName"]) || array_key_exists("wardName", $context) ? $context["wardName"] : (function () { throw new RuntimeError('Variable "wardName" does not exist.', 89, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["districtName"]) || array_key_exists("districtName", $context) ? $context["districtName"] : (function () { throw new RuntimeError('Variable "districtName" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["province"]) || array_key_exists("province", $context) ? $context["province"] : (function () { throw new RuntimeError('Variable "province" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "\",
    );
    protected static \$country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territories', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe'
    );

    public function hamletName()
    {
        \$format = static::randomElement(static::\$hamletNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    public function hamletPrefix()
    {
        return static::randomElement(static::\$hamletPrefix);
    }

    public function wardName()
    {
        \$format = static::randomElement(static::\$wardNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    public function wardPrefix()
    {
        return static::randomElement(static::\$wardPrefix);
    }

    public function districtName()
    {
        \$format = static::randomElement(static::\$districtNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    public function districtPrefix()
    {
        return static::randomElement(static::\$districtPrefix);
    }

    /**
     * @example 'Hà Nội'
     */
    public function city()
    {
        return static::randomElement(static::\$city);
    }

    /**
     * @example 'Bắc Giang'
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 89,  332 => 88,  322 => 87,  313 => 81,  309 => 80,  303 => 79,  297 => 78,  287 => 77,  279 => 76,  271 => 75,  263 => 74,  255 => 73,  246 => 67,  242 => 66,  236 => 65,  230 => 64,  220 => 63,  212 => 62,  204 => 61,  196 => 60,  188 => 59,  179 => 53,  175 => 52,  169 => 51,  163 => 50,  153 => 49,  145 => 48,  137 => 47,  129 => 46,  121 => 45,  113 => 42,  107 => 39,  103 => 38,  95 => 37,  87 => 36,  79 => 35,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\vi_VN;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$buildingNumber = array('####', '###', '##', '#');
    protected static \$postcode = array('#####', '######', '#####-####');
    protected static \$province = array(
        'An Giang', 'Bà Rịa - Vũng Tàu',
        'Bắc Giang', 'Bắc Kạn', 'Bạc Liêu',
        'Bắc Ninh', 'Bến Tre', 'Bình Định',
        'Bình Dương', 'Bình Phước', 'Bình Thuận',
        'Cà Mau', 'Cao Bằng', 'Đắk Lắk',
        'Đắk Nông', 'Điện Biên', 'Đồng Nai',
        'Đồng Tháp', 'Gia Lai', 'Hà Giang',
        'Hà Nam', 'Hà Tĩnh', 'Hải Dương',
        'Hậu Giang', 'Hòa Bình', 'Hưng Yên',
        'Khánh Hòa', 'Kiên Giang', 'Kon Tum',
        'Lai Châu', 'Lâm Đồng', 'Lạng Sơn',
        'Lào Cai', 'Long An', 'Nam Định',
        'Nghệ An', 'Ninh Bình', 'Ninh Thuận',
        'Phú Thọ', 'Quảng Bình', 'Quảng Nam',
        'Quảng Ngãi', 'Quảng Ninh', 'Quảng Trị',
        'Sóc Trăng', 'Sơn La', 'Tây Ninh',
        'Thái Bình', 'Thái Nguyên', 'Thanh Hóa',
        'Thừa Thiên Huế', 'Tiền Giang', 'Trà Vinh',
        'Tuyên Quang', 'Vĩnh Long', 'Vĩnh Phúc',
        'Yên Bái', 'Phú Yên',
    );
    protected static \$city = array(
        'Cần Thơ', 'Đà Nẵng', 'Hải Phòng', 'Hà Nội', 'Hồ Chí Minh',
    );
    protected static \$streetNameFormats = array(
        'Phố {{lastName}} {{middleName}} {{firstName}}',
        'Phố {{lastName}} {{middleName}} {{firstName}}',
        'Phố {{lastName}} {{middleName}} {{firstName}}',
        'Phố {{firstName}}',
        'Phố {{lastName}}',
    );
    protected static \$streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
    );
    protected static \$hamletNameFormats = array(
        '{{hamletPrefix}} {{middleName}} {{firstName}}',
        '{{hamletPrefix}} {{lastName}} {{firstName}}',
        '{{hamletPrefix}} {{firstName}} {{lastName}}',
        '{{hamletPrefix}} {{middleName}} {{firstName}}',
        '{{hamletPrefix}} {{lastName}} {{middleName}} {{firstName}}',
        '{{hamletPrefix}} {{firstName}}',
        '{{hamletPrefix}} {{lastName}}',
        '{{hamletPrefix}} ##',
        '{{hamletPrefix}} #',
    );
    protected static \$hamletPrefix = array(
        'Thôn', 'Ấp',
    );
    protected static \$wardNameFormats = array(
        '{{hamletPrefix}} {{middleName}} {{firstName}}',
        '{{hamletPrefix}} {{lastName}} {{firstName}}',
        '{{wardPrefix}} {{firstName}} {{lastName}}',
        '{{wardPrefix}} {{middleName}} {{firstName}}',
        '{{wardPrefix}} {{lastName}} {{middleName}} {{firstName}}',
        '{{wardPrefix}} {{firstName}}',
        '{{wardPrefix}} {{lastName}}',
        '{{wardPrefix}} ##',
        '{{wardPrefix}} #',
    );
    protected static \$wardPrefix = array(
        'Phường', 'Xã',
    );
    protected static \$districtNameFormats = array(
        '{{districtPrefix}} {{middleName}} {{firstName}}',
        '{{districtPrefix}} {{lastName}} {{firstName}}',
        '{{districtPrefix}} {{firstName}} {{lastName}}',
        '{{districtPrefix}} {{middleName}} {{firstName}}',
        '{{districtPrefix}} {{lastName}} {{middleName}} {{firstName}}',
        '{{districtPrefix}} {{firstName}}',
        '{{districtPrefix}} {{lastName}}',
        '{{districtPrefix}} ##',
        '{{districtPrefix}} #',
    );
    protected static \$districtPrefix = array(
        'Quận', 'Huyện',
    );
    protected static \$addressFormats = array(
        \"{{streetAddress}}, {{wardName}}, {{districtName}}\\n{{city}}\",
        \"{{streetAddress}}, {{wardName}}, {{districtName}}\\n{{province}}\",
        \"{{buildingNumber}}, {{hamletName}}, {{wardName}}, {{districtName}}\\n{{province}}\",
    );
    protected static \$country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territories', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe'
    );

    public function hamletName()
    {
        \$format = static::randomElement(static::\$hamletNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    public function hamletPrefix()
    {
        return static::randomElement(static::\$hamletPrefix);
    }

    public function wardName()
    {
        \$format = static::randomElement(static::\$wardNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    public function wardPrefix()
    {
        return static::randomElement(static::\$wardPrefix);
    }

    public function districtName()
    {
        \$format = static::randomElement(static::\$districtNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    public function districtPrefix()
    {
        return static::randomElement(static::\$districtPrefix);
    }

    /**
     * @example 'Hà Nội'
     */
    public function city()
    {
        return static::randomElement(static::\$city);
    }

    /**
     * @example 'Bắc Giang'
     */
    public static function province()
    {
        return static::randomElement(static::\$province);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Address.php");
    }
}
