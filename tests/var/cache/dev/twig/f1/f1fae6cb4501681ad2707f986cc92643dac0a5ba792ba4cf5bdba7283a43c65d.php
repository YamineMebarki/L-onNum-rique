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

/* vendor/symfony/intl/Resources/data/regions/vi.json */
class __TwigTemplate_a8ab05d1992e3cd7919e4673e8c9ebdf2917931213a0c8d1a9c9be18c1e245c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/vi.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/vi.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"Andorra\",
        \"AE\": \"Các Tiểu Vương quốc Ả Rập Thống nhất\",
        \"AF\": \"Afghanistan\",
        \"AG\": \"Antigua và Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Nam Cực\",
        \"AR\": \"Argentina\",
        \"AS\": \"Samoa thuộc Mỹ\",
        \"AT\": \"Áo\",
        \"AU\": \"Australia\",
        \"AW\": \"Aruba\",
        \"AX\": \"Quần đảo Åland\",
        \"AZ\": \"Azerbaijan\",
        \"BA\": \"Bosnia và Herzegovina\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Bỉ\",
        \"BF\": \"Burkina Faso\",
        \"BG\": \"Bulgaria\",
        \"BH\": \"Bahrain\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benin\",
        \"BL\": \"St. Barthélemy\",
        \"BM\": \"Bermuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bolivia\",
        \"BQ\": \"Ca-ri-bê Hà Lan\",
        \"BR\": \"Brazil\",
        \"BS\": \"Bahamas\",
        \"BT\": \"Bhutan\",
        \"BV\": \"Đảo Bouvet\",
        \"BW\": \"Botswana\",
        \"BY\": \"Belarus\",
        \"BZ\": \"Belize\",
        \"CA\": \"Canada\",
        \"CC\": \"Quần đảo Cocos (Keeling)\",
        \"CD\": \"Congo - Kinshasa\",
        \"CF\": \"Cộng hòa Trung Phi\",
        \"CG\": \"Congo - Brazzaville\",
        \"CH\": \"Thụy Sĩ\",
        \"CI\": \"Côte d’Ivoire\",
        \"CK\": \"Quần đảo Cook\",
        \"CL\": \"Chile\",
        \"CM\": \"Cameroon\",
        \"CN\": \"Trung Quốc\",
        \"CO\": \"Colombia\",
        \"CR\": \"Costa Rica\",
        \"CU\": \"Cuba\",
        \"CV\": \"Cape Verde\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Đảo Giáng Sinh\",
        \"CY\": \"Síp\",
        \"CZ\": \"Séc\",
        \"DE\": \"Đức\",
        \"DJ\": \"Djibouti\",
        \"DK\": \"Đan Mạch\",
        \"DM\": \"Dominica\",
        \"DO\": \"Cộng hòa Dominica\",
        \"DZ\": \"Algeria\",
        \"EC\": \"Ecuador\",
        \"EE\": \"Estonia\",
        \"EG\": \"Ai Cập\",
        \"EH\": \"Tây Sahara\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Tây Ban Nha\",
        \"ET\": \"Ethiopia\",
        \"FI\": \"Phần Lan\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Quần đảo Falkland\",
        \"FM\": \"Micronesia\",
        \"FO\": \"Quần đảo Faroe\",
        \"FR\": \"Pháp\",
        \"GA\": \"Gabon\",
        \"GB\": \"Vương quốc Anh\",
        \"GD\": \"Grenada\",
        \"GE\": \"Georgia\",
        \"GF\": \"Guiana thuộc Pháp\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Greenland\",
        \"GM\": \"Gambia\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Guinea Xích Đạo\",
        \"GR\": \"Hy Lạp\",
        \"GS\": \"Nam Georgia & Quần đảo Nam Sandwich\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bissau\",
        \"GY\": \"Guyana\",
        \"HK\": \"Hồng Kông, Trung Quốc\",
        \"HM\": \"Quần đảo Heard và McDonald\",
        \"HN\": \"Honduras\",
        \"HR\": \"Croatia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Hungary\",
        \"ID\": \"Indonesia\",
        \"IE\": \"Ireland\",
        \"IL\": \"Israel\",
        \"IM\": \"Đảo Man\",
        \"IN\": \"Ấn Độ\",
        \"IO\": \"Lãnh thổ Ấn Độ Dương thuộc Anh\",
        \"IQ\": \"Iraq\",
        \"IR\": \"Iran\",
        \"IS\": \"Iceland\",
        \"IT\": \"Italy\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaica\",
        \"JO\": \"Jordan\",
        \"JP\": \"Nhật Bản\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kyrgyzstan\",
        \"KH\": \"Campuchia\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Comoros\",
        \"KN\": \"St. Kitts và Nevis\",
        \"KP\": \"Triều Tiên\",
        \"KR\": \"Hàn Quốc\",
        \"KW\": \"Kuwait\",
        \"KY\": \"Quần đảo Cayman\",
        \"KZ\": \"Kazakhstan\",
        \"LA\": \"Lào\",
        \"LB\": \"Li-băng\",
        \"LC\": \"St. Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Liberia\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Litva\",
        \"LU\": \"Luxembourg\",
        \"LV\": \"Latvia\",
        \"LY\": \"Libya\",
        \"MA\": \"Ma-rốc\",
        \"MC\": \"Monaco\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"St. Martin\",
        \"MG\": \"Madagascar\",
        \"MH\": \"Quần đảo Marshall\",
        \"MK\": \"Bắc Macedonia\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar (Miến Điện)\",
        \"MN\": \"Mông Cổ\",
        \"MO\": \"Macao, Trung Quốc\",
        \"MP\": \"Quần đảo Bắc Mariana\",
        \"MQ\": \"Martinique\",
        \"MR\": \"Mauritania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Maldives\",
        \"MW\": \"Malawi\",
        \"MX\": \"Mexico\",
        \"MY\": \"Malaysia\",
        \"MZ\": \"Mozambique\",
        \"NA\": \"Namibia\",
        \"NC\": \"New Caledonia\",
        \"NE\": \"Niger\",
        \"NF\": \"Đảo Norfolk\",
        \"NG\": \"Nigeria\",
        \"NI\": \"Nicaragua\",
        \"NL\": \"Hà Lan\",
        \"NO\": \"Na Uy\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"New Zealand\",
        \"OM\": \"Oman\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Polynesia thuộc Pháp\",
        \"PG\": \"Papua New Guinea\",
        \"PH\": \"Philippines\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Ba Lan\",
        \"PM\": \"Saint Pierre và Miquelon\",
        \"PN\": \"Quần đảo Pitcairn\",
        \"PR\": \"Puerto Rico\",
        \"PS\": \"Lãnh thổ Palestine\",
        \"PT\": \"Bồ Đào Nha\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Qatar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Romania\",
        \"RS\": \"Serbia\",
        \"RU\": \"Nga\",
        \"RW\": \"Rwanda\",
        \"SA\": \"Ả Rập Xê-út\",
        \"SB\": \"Quần đảo Solomon\",
        \"SC\": \"Seychelles\",
        \"SD\": \"Sudan\",
        \"SE\": \"Thụy Điển\",
        \"SG\": \"Singapore\",
        \"SH\": \"St. Helena\",
        \"SI\": \"Slovenia\",
        \"SJ\": \"Svalbard và Jan Mayen\",
        \"SK\": \"Slovakia\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somalia\",
        \"SR\": \"Suriname\",
        \"SS\": \"Nam Sudan\",
        \"ST\": \"São Tomé và Príncipe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Syria\",
        \"SZ\": \"Swaziland\",
        \"TC\": \"Quần đảo Turks và Caicos\",
        \"TD\": \"Chad\",
        \"TF\": \"Lãnh thổ phía Nam Thuộc Pháp\",
        \"TG\": \"Togo\",
        \"TH\": \"Thái Lan\",
        \"TJ\": \"Tajikistan\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor-Leste\",
        \"TM\": \"Turkmenistan\",
        \"TN\": \"Tunisia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Thổ Nhĩ Kỳ\",
        \"TT\": \"Trinidad và Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Đài Loan\",
        \"TZ\": \"Tanzania\",
        \"UA\": \"Ukraina\",
        \"UG\": \"Uganda\",
        \"UM\": \"Các tiểu đảo xa của Hoa Kỳ\",
        \"US\": \"Hoa Kỳ\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Uzbekistan\",
        \"VA\": \"Thành Vatican\",
        \"VC\": \"St. Vincent và Grenadines\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Quần đảo Virgin thuộc Anh\",
        \"VI\": \"Quần đảo Virgin thuộc Mỹ\",
        \"VN\": \"Việt Nam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis và Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Yemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Nam Phi\",
        \"ZM\": \"Zambia\",
        \"ZW\": \"Zimbabwe\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/vi.json";
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
        \"AD\": \"Andorra\",
        \"AE\": \"Các Tiểu Vương quốc Ả Rập Thống nhất\",
        \"AF\": \"Afghanistan\",
        \"AG\": \"Antigua và Barbuda\",
        \"AI\": \"Anguilla\",
        \"AL\": \"Albania\",
        \"AM\": \"Armenia\",
        \"AO\": \"Angola\",
        \"AQ\": \"Nam Cực\",
        \"AR\": \"Argentina\",
        \"AS\": \"Samoa thuộc Mỹ\",
        \"AT\": \"Áo\",
        \"AU\": \"Australia\",
        \"AW\": \"Aruba\",
        \"AX\": \"Quần đảo Åland\",
        \"AZ\": \"Azerbaijan\",
        \"BA\": \"Bosnia và Herzegovina\",
        \"BB\": \"Barbados\",
        \"BD\": \"Bangladesh\",
        \"BE\": \"Bỉ\",
        \"BF\": \"Burkina Faso\",
        \"BG\": \"Bulgaria\",
        \"BH\": \"Bahrain\",
        \"BI\": \"Burundi\",
        \"BJ\": \"Benin\",
        \"BL\": \"St. Barthélemy\",
        \"BM\": \"Bermuda\",
        \"BN\": \"Brunei\",
        \"BO\": \"Bolivia\",
        \"BQ\": \"Ca-ri-bê Hà Lan\",
        \"BR\": \"Brazil\",
        \"BS\": \"Bahamas\",
        \"BT\": \"Bhutan\",
        \"BV\": \"Đảo Bouvet\",
        \"BW\": \"Botswana\",
        \"BY\": \"Belarus\",
        \"BZ\": \"Belize\",
        \"CA\": \"Canada\",
        \"CC\": \"Quần đảo Cocos (Keeling)\",
        \"CD\": \"Congo - Kinshasa\",
        \"CF\": \"Cộng hòa Trung Phi\",
        \"CG\": \"Congo - Brazzaville\",
        \"CH\": \"Thụy Sĩ\",
        \"CI\": \"Côte d’Ivoire\",
        \"CK\": \"Quần đảo Cook\",
        \"CL\": \"Chile\",
        \"CM\": \"Cameroon\",
        \"CN\": \"Trung Quốc\",
        \"CO\": \"Colombia\",
        \"CR\": \"Costa Rica\",
        \"CU\": \"Cuba\",
        \"CV\": \"Cape Verde\",
        \"CW\": \"Curaçao\",
        \"CX\": \"Đảo Giáng Sinh\",
        \"CY\": \"Síp\",
        \"CZ\": \"Séc\",
        \"DE\": \"Đức\",
        \"DJ\": \"Djibouti\",
        \"DK\": \"Đan Mạch\",
        \"DM\": \"Dominica\",
        \"DO\": \"Cộng hòa Dominica\",
        \"DZ\": \"Algeria\",
        \"EC\": \"Ecuador\",
        \"EE\": \"Estonia\",
        \"EG\": \"Ai Cập\",
        \"EH\": \"Tây Sahara\",
        \"ER\": \"Eritrea\",
        \"ES\": \"Tây Ban Nha\",
        \"ET\": \"Ethiopia\",
        \"FI\": \"Phần Lan\",
        \"FJ\": \"Fiji\",
        \"FK\": \"Quần đảo Falkland\",
        \"FM\": \"Micronesia\",
        \"FO\": \"Quần đảo Faroe\",
        \"FR\": \"Pháp\",
        \"GA\": \"Gabon\",
        \"GB\": \"Vương quốc Anh\",
        \"GD\": \"Grenada\",
        \"GE\": \"Georgia\",
        \"GF\": \"Guiana thuộc Pháp\",
        \"GG\": \"Guernsey\",
        \"GH\": \"Ghana\",
        \"GI\": \"Gibraltar\",
        \"GL\": \"Greenland\",
        \"GM\": \"Gambia\",
        \"GN\": \"Guinea\",
        \"GP\": \"Guadeloupe\",
        \"GQ\": \"Guinea Xích Đạo\",
        \"GR\": \"Hy Lạp\",
        \"GS\": \"Nam Georgia & Quần đảo Nam Sandwich\",
        \"GT\": \"Guatemala\",
        \"GU\": \"Guam\",
        \"GW\": \"Guinea-Bissau\",
        \"GY\": \"Guyana\",
        \"HK\": \"Hồng Kông, Trung Quốc\",
        \"HM\": \"Quần đảo Heard và McDonald\",
        \"HN\": \"Honduras\",
        \"HR\": \"Croatia\",
        \"HT\": \"Haiti\",
        \"HU\": \"Hungary\",
        \"ID\": \"Indonesia\",
        \"IE\": \"Ireland\",
        \"IL\": \"Israel\",
        \"IM\": \"Đảo Man\",
        \"IN\": \"Ấn Độ\",
        \"IO\": \"Lãnh thổ Ấn Độ Dương thuộc Anh\",
        \"IQ\": \"Iraq\",
        \"IR\": \"Iran\",
        \"IS\": \"Iceland\",
        \"IT\": \"Italy\",
        \"JE\": \"Jersey\",
        \"JM\": \"Jamaica\",
        \"JO\": \"Jordan\",
        \"JP\": \"Nhật Bản\",
        \"KE\": \"Kenya\",
        \"KG\": \"Kyrgyzstan\",
        \"KH\": \"Campuchia\",
        \"KI\": \"Kiribati\",
        \"KM\": \"Comoros\",
        \"KN\": \"St. Kitts và Nevis\",
        \"KP\": \"Triều Tiên\",
        \"KR\": \"Hàn Quốc\",
        \"KW\": \"Kuwait\",
        \"KY\": \"Quần đảo Cayman\",
        \"KZ\": \"Kazakhstan\",
        \"LA\": \"Lào\",
        \"LB\": \"Li-băng\",
        \"LC\": \"St. Lucia\",
        \"LI\": \"Liechtenstein\",
        \"LK\": \"Sri Lanka\",
        \"LR\": \"Liberia\",
        \"LS\": \"Lesotho\",
        \"LT\": \"Litva\",
        \"LU\": \"Luxembourg\",
        \"LV\": \"Latvia\",
        \"LY\": \"Libya\",
        \"MA\": \"Ma-rốc\",
        \"MC\": \"Monaco\",
        \"MD\": \"Moldova\",
        \"ME\": \"Montenegro\",
        \"MF\": \"St. Martin\",
        \"MG\": \"Madagascar\",
        \"MH\": \"Quần đảo Marshall\",
        \"MK\": \"Bắc Macedonia\",
        \"ML\": \"Mali\",
        \"MM\": \"Myanmar (Miến Điện)\",
        \"MN\": \"Mông Cổ\",
        \"MO\": \"Macao, Trung Quốc\",
        \"MP\": \"Quần đảo Bắc Mariana\",
        \"MQ\": \"Martinique\",
        \"MR\": \"Mauritania\",
        \"MS\": \"Montserrat\",
        \"MT\": \"Malta\",
        \"MU\": \"Mauritius\",
        \"MV\": \"Maldives\",
        \"MW\": \"Malawi\",
        \"MX\": \"Mexico\",
        \"MY\": \"Malaysia\",
        \"MZ\": \"Mozambique\",
        \"NA\": \"Namibia\",
        \"NC\": \"New Caledonia\",
        \"NE\": \"Niger\",
        \"NF\": \"Đảo Norfolk\",
        \"NG\": \"Nigeria\",
        \"NI\": \"Nicaragua\",
        \"NL\": \"Hà Lan\",
        \"NO\": \"Na Uy\",
        \"NP\": \"Nepal\",
        \"NR\": \"Nauru\",
        \"NU\": \"Niue\",
        \"NZ\": \"New Zealand\",
        \"OM\": \"Oman\",
        \"PA\": \"Panama\",
        \"PE\": \"Peru\",
        \"PF\": \"Polynesia thuộc Pháp\",
        \"PG\": \"Papua New Guinea\",
        \"PH\": \"Philippines\",
        \"PK\": \"Pakistan\",
        \"PL\": \"Ba Lan\",
        \"PM\": \"Saint Pierre và Miquelon\",
        \"PN\": \"Quần đảo Pitcairn\",
        \"PR\": \"Puerto Rico\",
        \"PS\": \"Lãnh thổ Palestine\",
        \"PT\": \"Bồ Đào Nha\",
        \"PW\": \"Palau\",
        \"PY\": \"Paraguay\",
        \"QA\": \"Qatar\",
        \"RE\": \"Réunion\",
        \"RO\": \"Romania\",
        \"RS\": \"Serbia\",
        \"RU\": \"Nga\",
        \"RW\": \"Rwanda\",
        \"SA\": \"Ả Rập Xê-út\",
        \"SB\": \"Quần đảo Solomon\",
        \"SC\": \"Seychelles\",
        \"SD\": \"Sudan\",
        \"SE\": \"Thụy Điển\",
        \"SG\": \"Singapore\",
        \"SH\": \"St. Helena\",
        \"SI\": \"Slovenia\",
        \"SJ\": \"Svalbard và Jan Mayen\",
        \"SK\": \"Slovakia\",
        \"SL\": \"Sierra Leone\",
        \"SM\": \"San Marino\",
        \"SN\": \"Senegal\",
        \"SO\": \"Somalia\",
        \"SR\": \"Suriname\",
        \"SS\": \"Nam Sudan\",
        \"ST\": \"São Tomé và Príncipe\",
        \"SV\": \"El Salvador\",
        \"SX\": \"Sint Maarten\",
        \"SY\": \"Syria\",
        \"SZ\": \"Swaziland\",
        \"TC\": \"Quần đảo Turks và Caicos\",
        \"TD\": \"Chad\",
        \"TF\": \"Lãnh thổ phía Nam Thuộc Pháp\",
        \"TG\": \"Togo\",
        \"TH\": \"Thái Lan\",
        \"TJ\": \"Tajikistan\",
        \"TK\": \"Tokelau\",
        \"TL\": \"Timor-Leste\",
        \"TM\": \"Turkmenistan\",
        \"TN\": \"Tunisia\",
        \"TO\": \"Tonga\",
        \"TR\": \"Thổ Nhĩ Kỳ\",
        \"TT\": \"Trinidad và Tobago\",
        \"TV\": \"Tuvalu\",
        \"TW\": \"Đài Loan\",
        \"TZ\": \"Tanzania\",
        \"UA\": \"Ukraina\",
        \"UG\": \"Uganda\",
        \"UM\": \"Các tiểu đảo xa của Hoa Kỳ\",
        \"US\": \"Hoa Kỳ\",
        \"UY\": \"Uruguay\",
        \"UZ\": \"Uzbekistan\",
        \"VA\": \"Thành Vatican\",
        \"VC\": \"St. Vincent và Grenadines\",
        \"VE\": \"Venezuela\",
        \"VG\": \"Quần đảo Virgin thuộc Anh\",
        \"VI\": \"Quần đảo Virgin thuộc Mỹ\",
        \"VN\": \"Việt Nam\",
        \"VU\": \"Vanuatu\",
        \"WF\": \"Wallis và Futuna\",
        \"WS\": \"Samoa\",
        \"YE\": \"Yemen\",
        \"YT\": \"Mayotte\",
        \"ZA\": \"Nam Phi\",
        \"ZM\": \"Zambia\",
        \"ZW\": \"Zimbabwe\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/vi.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/vi.json");
    }
}
