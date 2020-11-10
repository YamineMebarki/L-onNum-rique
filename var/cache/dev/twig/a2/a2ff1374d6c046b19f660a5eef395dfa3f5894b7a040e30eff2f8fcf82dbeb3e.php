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

/* vendor/symfony/intl/Resources/data/currencies/vi.json */
class __TwigTemplate_fa892fc92f305e7a3df60c437ae4824cdac2e0dcfacb17b7c2bc9bbd78911c31 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/vi.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/vi.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ADP\": [
            \"ADP\",
            \"Đồng Peseta của Andora\"
        ],
        \"AED\": [
            \"AED\",
            \"Dirham UAE\"
        ],
        \"AFA\": [
            \"AFA\",
            \"Đồng Afghani của Afghanistan (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afghani Afghanistan\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Lek Albania\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Dram Armenia\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Guilder Antille Hà Lan\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza Angola\"
        ],
        \"AOK\": [
            \"AOK\",
            \"Đồng Kwanza của Angola (1977–1991)\"
        ],
        \"AON\": [
            \"AON\",
            \"Đồng Kwanza Mới của Angola (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"Đồng Kwanza Điều chỉnh lại của Angola (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"Đồng Austral của Argentina\"
        ],
        \"ARL\": [
            \"ARL\",
            \"Đồng Peso Ley của Argentina (1970–1983)\"
        ],
        \"ARM\": [
            \"ARM\",
            \"Đồng Peso Argentina (1881–1970)\"
        ],
        \"ARP\": [
            \"ARP\",
            \"Đồng Peso Argentina (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Peso Argentina\"
        ],
        \"ATS\": [
            \"ATS\",
            \"Đồng Schiling Áo\"
        ],
        \"AUD\": [
            \"AU\$\",
            \"Đô la Australia\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Florin Aruba\"
        ],
        \"AZM\": [
            \"AZM\",
            \"Đồng Manat của Azerbaijan (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Manat Azerbaijan\"
        ],
        \"BAD\": [
            \"BAD\",
            \"Đồng Dinar của Bosnia-Herzegovina (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Mark Bosnia-Herzegovina có thể chuyển đổi\"
        ],
        \"BAN\": [
            \"BAN\",
            \"Đồng Dinar Mới của Bosnia-Herzegovina (1994–1997)\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Đô la Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka Bangladesh\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Đồng Franc Bỉ (có thể chuyển đổi)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"Đồng Franc Bỉ\"
        ],
        \"BEL\": [
            \"BEL\",
            \"Đồng Franc Bỉ (tài chính)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"Đồng Lev Xu của Bun-ga-ri\"
        ],
        \"BGM\": [
            \"BGM\",
            \"Đồng Lev Xã hội chủ nghĩa của Bun-ga-ri\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Lev Bulgaria\"
        ],
        \"BGO\": [
            \"BGO\",
            \"Đồng Lev của Bun-ga-ri (1879–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinar Bahrain\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Franc Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Đô la Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"Đô la Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviano Bolivia\"
        ],
        \"BOL\": [
            \"BOL\",
            \"Đồng Boliviano của Bolivia (1863–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"Đồng Peso Bolivia\"
        ],
        \"BOV\": [
            \"BOV\",
            \"Đồng Mvdol Bolivia\"
        ],
        \"BRB\": [
            \"BRB\",
            \"Đồng Cruzerio Mới của Braxin (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"Đồng Cruzado của Braxin (1986–1989)\"
        ],
        \"BRE\": [
            \"BRE\",
            \"Đồng Cruzerio của Braxin (1990–1993)\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Real Braxin\"
        ],
        \"BRN\": [
            \"BRN\",
            \"Đồng Cruzado Mới của Braxin (1989–1990)\"
        ],
        \"BRR\": [
            \"BRR\",
            \"Đồng Cruzeiro của Braxin (1993–1994)\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"Đồng Cruzeiro của Braxin (1942–1967)\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Đô la Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Ngultrum Bhutan\"
        ],
        \"BUK\": [
            \"BUK\",
            \"Đồng Kyat Miến Điện\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula Botswana\"
        ],
        \"BYB\": [
            \"BYB\",
            \"Đồng Rúp Mới của Belarus (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Rúp Belarus\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Rúp Belarus (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Đô la Belize\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Đô la Canada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Franc Congo\"
        ],
        \"CHE\": [
            \"CHE\",
            \"Đồng Euro WIR\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Franc Thụy sĩ\"
        ],
        \"CHW\": [
            \"CHW\",
            \"Đồng France WIR\"
        ],
        \"CLE\": [
            \"CLE\",
            \"Đồng Escudo của Chile\"
        ],
        \"CLF\": [
            \"CLF\",
            \"Đơn vị Kế toán của Chile (UF)\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Peso Chile\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Nhân dân tệ (hải ngoại)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Nhân dân tệ\"
        ],
        \"COP\": [
            \"COP\",
            \"Peso Colombia\"
        ],
        \"COU\": [
            \"COU\",
            \"Đơn vị Giá trị Thực của Colombia\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Colón Costa Rica\"
        ],
        \"CSD\": [
            \"CSD\",
            \"Đồng Dinar của Serbia (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"Đồng Koruna Xu của Czechoslovakia\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Peso Cuba có thể chuyển đổi\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Peso Cuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Escudo Cape Verde\"
        ],
        \"CYP\": [
            \"CYP\",
            \"Đồng Bảng Síp\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Koruna Cộng hòa Séc\"
        ],
        \"DDM\": [
            \"DDM\",
            \"Đồng Mark Đông Đức\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Đồng Mark Đức\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Franc Djibouti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Krone Đan Mạch\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Peso Dominica\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinar Algeria\"
        ],
        \"ECS\": [
            \"ECS\",
            \"Đồng Scure Ecuador\"
        ],
        \"ECV\": [
            \"ECV\",
            \"Đơn vị Giá trị Không đổi của Ecuador\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Crun Extônia\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Bảng Ai Cập\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa Eritrea\"
        ],
        \"ESA\": [
            \"ESA\",
            \"Đồng Peseta Tây Ban Nha (Tài khoản)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"Đồng Peseta Tây Ban Nha (tài khoản có thể chuyển đổi)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"Đồng Peseta Tây Ban Nha\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Birr Ethiopia\"
        ],
        \"EUR\": [
            \"€\",
            \"Euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"Đồng Markka Phần Lan\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Đô la Fiji\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Bảng Quần đảo Falkland\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Franc Pháp\"
        ],
        \"GBP\": [
            \"£\",
            \"Bảng Anh\"
        ],
        \"GEK\": [
            \"GEK\",
            \"Đồng Kupon Larit của Georgia\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Lari Georgia\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Cedi Ghana (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Cedi Ghana\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Bảng Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi Gambia\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Franc Guinea\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Syli Guinea\"
        ],
        \"GQE\": [
            \"GQE\",
            \"Đồng Ekwele của Guinea Xích Đạo\"
        ],
        \"GRD\": [
            \"GRD\",
            \"Drachma Hy Lạp\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Quetzal Guatemala\"
        ],
        \"GWE\": [
            \"GWE\",
            \"Đồng Guinea Escudo Bồ Đào Nha\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Peso Guinea-Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Đô la Guyana\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Đô la Hồng Kông\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lempira Honduras\"
        ],
        \"HRD\": [
            \"HRD\",
            \"Đồng Dinar Croatia\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kuna Croatia\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gourde Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Forint Hungary\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Rupiah Indonesia\"
        ],
        \"IEP\": [
            \"IEP\",
            \"Pao Ai-len\"
        ],
        \"ILP\": [
            \"ILP\",
            \"Pao Ixraen\"
        ],
        \"ILS\": [
            \"₪\",
            \"Sheqel Israel mới\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupee Ấn Độ\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinar Iraq\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Rial Iran\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Króna Iceland\"
        ],
        \"ITL\": [
            \"ITL\",
            \"Lia Ý\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Đô la Jamaica\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinar Jordan\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yên Nhật\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilling Kenya\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Som Kyrgyzstan\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Riel Campuchia\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Franc Comoros\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Won Triều Tiên\"
        ],
        \"KRH\": [
            \"KRH\",
            \"Đồng Hwan Hàn Quốc (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"Đồng Won Hàn Quốc (1945–1953)\"
        ],
        \"KRW\": [
            \"₩\",
            \"Won Hàn Quốc\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinar Kuwait\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Đô la Quần đảo Cayman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tenge Kazakhstan\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Kip Lào\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Bảng Li-băng\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Rupee Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Đô la Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Ioti Lesotho\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litas Lít-va\"
        ],
        \"LTT\": [
            \"LTT\",
            \"Đồng Talonas Litva\"
        ],
        \"LUC\": [
            \"LUC\",
            \"Đồng Franc Luxembourg có thể chuyển đổi\"
        ],
        \"LUF\": [
            \"LUF\",
            \"Đồng Franc Luxembourg\"
        ],
        \"LUL\": [
            \"LUL\",
            \"Đồng Franc Luxembourg tài chính\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Lats Latvia\"
        ],
        \"LVR\": [
            \"LVR\",
            \"Đồng Rúp Latvia\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinar Libi\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham Ma-rốc\"
        ],
        \"MAF\": [
            \"MAF\",
            \"Đồng Franc Ma-rốc\"
        ],
        \"MCF\": [
            \"MCF\",
            \"Đồng Franc Monegasque\"
        ],
        \"MDC\": [
            \"MDC\",
            \"Đồng Cupon Moldova\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leu Moldova\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariary Malagasy\"
        ],
        \"MGF\": [
            \"MGF\",
            \"Đồng Franc Magalasy\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Denar Macedonia\"
        ],
        \"MKN\": [
            \"MKN\",
            \"Đồng Denar Macedonia (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"Đồng Franc Mali\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kyat Myanma\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Tugrik Mông Cổ\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Pataca Ma Cao\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya Mauritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya Mauritania\"
        ],
        \"MTL\": [
            \"MTL\",
            \"Lia xứ Man-tơ\"
        ],
        \"MTP\": [
            \"MTP\",
            \"Đồng Bảng Malta\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupee Mauritius\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rufiyaa Maldives\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha Malawi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Peso Mexico\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Đồng Peso Bạc Mê-hi-cô (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"Đơn vị Đầu tư Mê-hi-cô\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringgit Malaysia\"
        ],
        \"MZE\": [
            \"MZE\",
            \"Escudo Mozambique\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Đồng Metical Mozambique (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Metical Mozambique\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Đô la Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira Nigeria\"
        ],
        \"NIC\": [
            \"NIC\",
            \"Đồng Córdoba Nicaragua (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Córdoba Nicaragua\"
        ],
        \"NLG\": [
            \"NLG\",
            \"Đồng Guilder Hà Lan\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Krone Na Uy\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rupee Nepal\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Đô la New Zealand\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Rial Oman\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balboa Panama\"
        ],
        \"PEI\": [
            \"PEI\",
            \"Đồng Inti Peru\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Sol Peru\"
        ],
        \"PES\": [
            \"PES\",
            \"Đồng Sol Peru (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kina Papua New Guinea\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Peso Philipin\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rupee Pakistan\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Zloty Ba Lan\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"Đồng Zloty Ba Lan (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"Đồng Escudo Bồ Đào Nha\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guarani Paraguay\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Rial Qatar\"
        ],
        \"RHD\": [
            \"RHD\",
            \"Đồng Đô la Rhode\"
        ],
        \"ROL\": [
            \"ROL\",
            \"Đồng Leu Rumani (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"Leu Romania\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinar Serbia\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rúp Nga\"
        ],
        \"RUR\": [
            \"RUR\",
            \"Đồng Rúp Nga (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Franc Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal Ả Rập Xê-út\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Đô la quần đảo Solomon\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupee Seychelles\"
        ],
        \"SDD\": [
            \"SDD\",
            \"Đồng Dinar Sudan (1992–2007)\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Bảng Sudan\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Đồng Bảng Sudan (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Krona Thụy Điển\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Đô la Singapore\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Bảng St. Helena\"
        ],
        \"SIT\": [
            \"SIT\",
            \"Tôla Xlôvênia\"
        ],
        \"SKK\": [
            \"SKK\",
            \"Cuaron Xlôvác\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Schilling Somali\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Đô la Suriname\"
        ],
        \"SRG\": [
            \"SRG\",
            \"Đồng Guilder Surinam\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Bảng Nam Sudan\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra São Tomé và Príncipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra São Tomé và Príncipe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"Đồng Rúp Sô viết\"
        ],
        \"SVC\": [
            \"SVC\",
            \"Colón El Salvador\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Bảng Syria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni Swaziland\"
        ],
        \"THB\": [
            \"฿\",
            \"Bạt Thái Lan\"
        ],
        \"TJR\": [
            \"TJR\",
            \"Đồng Rúp Tajikistan\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somoni Tajikistan\"
        ],
        \"TMM\": [
            \"TMM\",
            \"Đồng Manat Turkmenistan (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manat Turkmenistan\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinar Tunisia\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Paʻanga Tonga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"Đồng Escudo Timor\"
        ],
        \"TRL\": [
            \"TRL\",
            \"Lia Thổ Nhĩ Kỳ (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Lia Thổ Nhĩ Kỳ\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Đô la Trinidad và Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Đô la Đài Loan mới\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilling Tanzania\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Hryvnia Ukraina\"
        ],
        \"UAK\": [
            \"UAK\",
            \"Đồng Karbovanets Ucraina\"
        ],
        \"UGS\": [
            \"UGS\",
            \"Đồng Shilling Uganda (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilling Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Đô la Mỹ\"
        ],
        \"USN\": [
            \"USN\",
            \"Đô la Mỹ (Ngày tiếp theo)\"
        ],
        \"USS\": [
            \"USS\",
            \"Đô la Mỹ (Cùng ngày)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"Đồng Peso Uruguay (Đơn vị Theo chỉ số)\"
        ],
        \"UYP\": [
            \"UYP\",
            \"Đồng Peso Uruguay (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Peso Uruguay\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Som Uzbekistan\"
        ],
        \"VEB\": [
            \"VEB\",
            \"Đồng bolívar của Venezuela (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolívar Venezuela (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolívar Venezuela\"
        ],
        \"VND\": [
            \"₫\",
            \"Đồng Việt Nam\"
        ],
        \"VNN\": [
            \"VNN\",
            \"Đồng Việt Nam (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vatu Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Tala Samoa\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Franc CFA Trung Phi\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Đô la Đông Caribê\"
        ],
        \"XEU\": [
            \"XEU\",
            \"Đơn vị Tiền Châu Âu\"
        ],
        \"XFO\": [
            \"XFO\",
            \"Đồng France Pháp Vàng\"
        ],
        \"XFU\": [
            \"XFU\",
            \"Đồng UIC-Franc Pháp\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Franc CFA Tây Phi\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Franc CFP\"
        ],
        \"XRE\": [
            \"XRE\",
            \"Quỹ RINET\"
        ],
        \"YDD\": [
            \"YDD\",
            \"Đồng Dinar Yemen\"
        ],
        \"YER\": [
            \"YER\",
            \"Rial Yemen\"
        ],
        \"YUD\": [
            \"YUD\",
            \"Đồng Dinar Nam Tư Xu (1966–1990)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"Đồng Dinar Nam Tư Mới (1994–2002)\"
        ],
        \"YUN\": [
            \"YUN\",
            \"Đồng Dinar Nam Tư Có thể chuyển đổi (1990–1992)\"
        ],
        \"YUR\": [
            \"YUR\",
            \"Đồng Dinar Nam Tư Tái cơ cấu (1992–1993)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"Đồng Rand Nam Phi (tài chính)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rand Nam Phi\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Đồng kwacha của Zambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha Zambia\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"Đồng Zaire Mới (1993–1998)\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"Đồng Zaire (1971–1993)\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Đồng Đô la Zimbabwe (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"Đồng Đô la Zimbabwe (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"Đồng Đô la Zimbabwe (2008)\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/vi.json";
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
        \"ADP\": [
            \"ADP\",
            \"Đồng Peseta của Andora\"
        ],
        \"AED\": [
            \"AED\",
            \"Dirham UAE\"
        ],
        \"AFA\": [
            \"AFA\",
            \"Đồng Afghani của Afghanistan (1927–2002)\"
        ],
        \"AFN\": [
            \"AFN\",
            \"Afghani Afghanistan\"
        ],
        \"ALL\": [
            \"ALL\",
            \"Lek Albania\"
        ],
        \"AMD\": [
            \"AMD\",
            \"Dram Armenia\"
        ],
        \"ANG\": [
            \"ANG\",
            \"Guilder Antille Hà Lan\"
        ],
        \"AOA\": [
            \"AOA\",
            \"Kwanza Angola\"
        ],
        \"AOK\": [
            \"AOK\",
            \"Đồng Kwanza của Angola (1977–1991)\"
        ],
        \"AON\": [
            \"AON\",
            \"Đồng Kwanza Mới của Angola (1990–2000)\"
        ],
        \"AOR\": [
            \"AOR\",
            \"Đồng Kwanza Điều chỉnh lại của Angola (1995–1999)\"
        ],
        \"ARA\": [
            \"ARA\",
            \"Đồng Austral của Argentina\"
        ],
        \"ARL\": [
            \"ARL\",
            \"Đồng Peso Ley của Argentina (1970–1983)\"
        ],
        \"ARM\": [
            \"ARM\",
            \"Đồng Peso Argentina (1881–1970)\"
        ],
        \"ARP\": [
            \"ARP\",
            \"Đồng Peso Argentina (1983–1985)\"
        ],
        \"ARS\": [
            \"ARS\",
            \"Peso Argentina\"
        ],
        \"ATS\": [
            \"ATS\",
            \"Đồng Schiling Áo\"
        ],
        \"AUD\": [
            \"AU\$\",
            \"Đô la Australia\"
        ],
        \"AWG\": [
            \"AWG\",
            \"Florin Aruba\"
        ],
        \"AZM\": [
            \"AZM\",
            \"Đồng Manat của Azerbaijan (1993–2006)\"
        ],
        \"AZN\": [
            \"AZN\",
            \"Manat Azerbaijan\"
        ],
        \"BAD\": [
            \"BAD\",
            \"Đồng Dinar của Bosnia-Herzegovina (1992–1994)\"
        ],
        \"BAM\": [
            \"BAM\",
            \"Mark Bosnia-Herzegovina có thể chuyển đổi\"
        ],
        \"BAN\": [
            \"BAN\",
            \"Đồng Dinar Mới của Bosnia-Herzegovina (1994–1997)\"
        ],
        \"BBD\": [
            \"BBD\",
            \"Đô la Barbados\"
        ],
        \"BDT\": [
            \"BDT\",
            \"Taka Bangladesh\"
        ],
        \"BEC\": [
            \"BEC\",
            \"Đồng Franc Bỉ (có thể chuyển đổi)\"
        ],
        \"BEF\": [
            \"BEF\",
            \"Đồng Franc Bỉ\"
        ],
        \"BEL\": [
            \"BEL\",
            \"Đồng Franc Bỉ (tài chính)\"
        ],
        \"BGL\": [
            \"BGL\",
            \"Đồng Lev Xu của Bun-ga-ri\"
        ],
        \"BGM\": [
            \"BGM\",
            \"Đồng Lev Xã hội chủ nghĩa của Bun-ga-ri\"
        ],
        \"BGN\": [
            \"BGN\",
            \"Lev Bulgaria\"
        ],
        \"BGO\": [
            \"BGO\",
            \"Đồng Lev của Bun-ga-ri (1879–1952)\"
        ],
        \"BHD\": [
            \"BHD\",
            \"Dinar Bahrain\"
        ],
        \"BIF\": [
            \"BIF\",
            \"Franc Burundi\"
        ],
        \"BMD\": [
            \"BMD\",
            \"Đô la Bermuda\"
        ],
        \"BND\": [
            \"BND\",
            \"Đô la Brunei\"
        ],
        \"BOB\": [
            \"BOB\",
            \"Boliviano Bolivia\"
        ],
        \"BOL\": [
            \"BOL\",
            \"Đồng Boliviano của Bolivia (1863–1963)\"
        ],
        \"BOP\": [
            \"BOP\",
            \"Đồng Peso Bolivia\"
        ],
        \"BOV\": [
            \"BOV\",
            \"Đồng Mvdol Bolivia\"
        ],
        \"BRB\": [
            \"BRB\",
            \"Đồng Cruzerio Mới của Braxin (1967–1986)\"
        ],
        \"BRC\": [
            \"BRC\",
            \"Đồng Cruzado của Braxin (1986–1989)\"
        ],
        \"BRE\": [
            \"BRE\",
            \"Đồng Cruzerio của Braxin (1990–1993)\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Real Braxin\"
        ],
        \"BRN\": [
            \"BRN\",
            \"Đồng Cruzado Mới của Braxin (1989–1990)\"
        ],
        \"BRR\": [
            \"BRR\",
            \"Đồng Cruzeiro của Braxin (1993–1994)\"
        ],
        \"BRZ\": [
            \"BRZ\",
            \"Đồng Cruzeiro của Braxin (1942–1967)\"
        ],
        \"BSD\": [
            \"BSD\",
            \"Đô la Bahamas\"
        ],
        \"BTN\": [
            \"BTN\",
            \"Ngultrum Bhutan\"
        ],
        \"BUK\": [
            \"BUK\",
            \"Đồng Kyat Miến Điện\"
        ],
        \"BWP\": [
            \"BWP\",
            \"Pula Botswana\"
        ],
        \"BYB\": [
            \"BYB\",
            \"Đồng Rúp Mới của Belarus (1994–1999)\"
        ],
        \"BYN\": [
            \"BYN\",
            \"Rúp Belarus\"
        ],
        \"BYR\": [
            \"BYR\",
            \"Rúp Belarus (2000–2016)\"
        ],
        \"BZD\": [
            \"BZD\",
            \"Đô la Belize\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"Đô la Canada\"
        ],
        \"CDF\": [
            \"CDF\",
            \"Franc Congo\"
        ],
        \"CHE\": [
            \"CHE\",
            \"Đồng Euro WIR\"
        ],
        \"CHF\": [
            \"CHF\",
            \"Franc Thụy sĩ\"
        ],
        \"CHW\": [
            \"CHW\",
            \"Đồng France WIR\"
        ],
        \"CLE\": [
            \"CLE\",
            \"Đồng Escudo của Chile\"
        ],
        \"CLF\": [
            \"CLF\",
            \"Đơn vị Kế toán của Chile (UF)\"
        ],
        \"CLP\": [
            \"CLP\",
            \"Peso Chile\"
        ],
        \"CNH\": [
            \"CNH\",
            \"Nhân dân tệ (hải ngoại)\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Nhân dân tệ\"
        ],
        \"COP\": [
            \"COP\",
            \"Peso Colombia\"
        ],
        \"COU\": [
            \"COU\",
            \"Đơn vị Giá trị Thực của Colombia\"
        ],
        \"CRC\": [
            \"CRC\",
            \"Colón Costa Rica\"
        ],
        \"CSD\": [
            \"CSD\",
            \"Đồng Dinar của Serbia (2002–2006)\"
        ],
        \"CSK\": [
            \"CSK\",
            \"Đồng Koruna Xu của Czechoslovakia\"
        ],
        \"CUC\": [
            \"CUC\",
            \"Peso Cuba có thể chuyển đổi\"
        ],
        \"CUP\": [
            \"CUP\",
            \"Peso Cuba\"
        ],
        \"CVE\": [
            \"CVE\",
            \"Escudo Cape Verde\"
        ],
        \"CYP\": [
            \"CYP\",
            \"Đồng Bảng Síp\"
        ],
        \"CZK\": [
            \"CZK\",
            \"Koruna Cộng hòa Séc\"
        ],
        \"DDM\": [
            \"DDM\",
            \"Đồng Mark Đông Đức\"
        ],
        \"DEM\": [
            \"DEM\",
            \"Đồng Mark Đức\"
        ],
        \"DJF\": [
            \"DJF\",
            \"Franc Djibouti\"
        ],
        \"DKK\": [
            \"DKK\",
            \"Krone Đan Mạch\"
        ],
        \"DOP\": [
            \"DOP\",
            \"Peso Dominica\"
        ],
        \"DZD\": [
            \"DZD\",
            \"Dinar Algeria\"
        ],
        \"ECS\": [
            \"ECS\",
            \"Đồng Scure Ecuador\"
        ],
        \"ECV\": [
            \"ECV\",
            \"Đơn vị Giá trị Không đổi của Ecuador\"
        ],
        \"EEK\": [
            \"EEK\",
            \"Crun Extônia\"
        ],
        \"EGP\": [
            \"EGP\",
            \"Bảng Ai Cập\"
        ],
        \"ERN\": [
            \"ERN\",
            \"Nakfa Eritrea\"
        ],
        \"ESA\": [
            \"ESA\",
            \"Đồng Peseta Tây Ban Nha (Tài khoản)\"
        ],
        \"ESB\": [
            \"ESB\",
            \"Đồng Peseta Tây Ban Nha (tài khoản có thể chuyển đổi)\"
        ],
        \"ESP\": [
            \"ESP\",
            \"Đồng Peseta Tây Ban Nha\"
        ],
        \"ETB\": [
            \"ETB\",
            \"Birr Ethiopia\"
        ],
        \"EUR\": [
            \"€\",
            \"Euro\"
        ],
        \"FIM\": [
            \"FIM\",
            \"Đồng Markka Phần Lan\"
        ],
        \"FJD\": [
            \"FJD\",
            \"Đô la Fiji\"
        ],
        \"FKP\": [
            \"FKP\",
            \"Bảng Quần đảo Falkland\"
        ],
        \"FRF\": [
            \"FRF\",
            \"Franc Pháp\"
        ],
        \"GBP\": [
            \"£\",
            \"Bảng Anh\"
        ],
        \"GEK\": [
            \"GEK\",
            \"Đồng Kupon Larit của Georgia\"
        ],
        \"GEL\": [
            \"GEL\",
            \"Lari Georgia\"
        ],
        \"GHC\": [
            \"GHC\",
            \"Cedi Ghana (1979–2007)\"
        ],
        \"GHS\": [
            \"GHS\",
            \"Cedi Ghana\"
        ],
        \"GIP\": [
            \"GIP\",
            \"Bảng Gibraltar\"
        ],
        \"GMD\": [
            \"GMD\",
            \"Dalasi Gambia\"
        ],
        \"GNF\": [
            \"GNF\",
            \"Franc Guinea\"
        ],
        \"GNS\": [
            \"GNS\",
            \"Syli Guinea\"
        ],
        \"GQE\": [
            \"GQE\",
            \"Đồng Ekwele của Guinea Xích Đạo\"
        ],
        \"GRD\": [
            \"GRD\",
            \"Drachma Hy Lạp\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"Quetzal Guatemala\"
        ],
        \"GWE\": [
            \"GWE\",
            \"Đồng Guinea Escudo Bồ Đào Nha\"
        ],
        \"GWP\": [
            \"GWP\",
            \"Peso Guinea-Bissau\"
        ],
        \"GYD\": [
            \"GYD\",
            \"Đô la Guyana\"
        ],
        \"HKD\": [
            \"HK\$\",
            \"Đô la Hồng Kông\"
        ],
        \"HNL\": [
            \"HNL\",
            \"Lempira Honduras\"
        ],
        \"HRD\": [
            \"HRD\",
            \"Đồng Dinar Croatia\"
        ],
        \"HRK\": [
            \"HRK\",
            \"Kuna Croatia\"
        ],
        \"HTG\": [
            \"HTG\",
            \"Gourde Haiti\"
        ],
        \"HUF\": [
            \"HUF\",
            \"Forint Hungary\"
        ],
        \"IDR\": [
            \"IDR\",
            \"Rupiah Indonesia\"
        ],
        \"IEP\": [
            \"IEP\",
            \"Pao Ai-len\"
        ],
        \"ILP\": [
            \"ILP\",
            \"Pao Ixraen\"
        ],
        \"ILS\": [
            \"₪\",
            \"Sheqel Israel mới\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupee Ấn Độ\"
        ],
        \"IQD\": [
            \"IQD\",
            \"Dinar Iraq\"
        ],
        \"IRR\": [
            \"IRR\",
            \"Rial Iran\"
        ],
        \"ISK\": [
            \"ISK\",
            \"Króna Iceland\"
        ],
        \"ITL\": [
            \"ITL\",
            \"Lia Ý\"
        ],
        \"JMD\": [
            \"JMD\",
            \"Đô la Jamaica\"
        ],
        \"JOD\": [
            \"JOD\",
            \"Dinar Jordan\"
        ],
        \"JPY\": [
            \"JP¥\",
            \"Yên Nhật\"
        ],
        \"KES\": [
            \"KES\",
            \"Shilling Kenya\"
        ],
        \"KGS\": [
            \"KGS\",
            \"Som Kyrgyzstan\"
        ],
        \"KHR\": [
            \"KHR\",
            \"Riel Campuchia\"
        ],
        \"KMF\": [
            \"KMF\",
            \"Franc Comoros\"
        ],
        \"KPW\": [
            \"KPW\",
            \"Won Triều Tiên\"
        ],
        \"KRH\": [
            \"KRH\",
            \"Đồng Hwan Hàn Quốc (1953–1962)\"
        ],
        \"KRO\": [
            \"KRO\",
            \"Đồng Won Hàn Quốc (1945–1953)\"
        ],
        \"KRW\": [
            \"₩\",
            \"Won Hàn Quốc\"
        ],
        \"KWD\": [
            \"KWD\",
            \"Dinar Kuwait\"
        ],
        \"KYD\": [
            \"KYD\",
            \"Đô la Quần đảo Cayman\"
        ],
        \"KZT\": [
            \"KZT\",
            \"Tenge Kazakhstan\"
        ],
        \"LAK\": [
            \"LAK\",
            \"Kip Lào\"
        ],
        \"LBP\": [
            \"LBP\",
            \"Bảng Li-băng\"
        ],
        \"LKR\": [
            \"LKR\",
            \"Rupee Sri Lanka\"
        ],
        \"LRD\": [
            \"LRD\",
            \"Đô la Liberia\"
        ],
        \"LSL\": [
            \"LSL\",
            \"Ioti Lesotho\"
        ],
        \"LTL\": [
            \"LTL\",
            \"Litas Lít-va\"
        ],
        \"LTT\": [
            \"LTT\",
            \"Đồng Talonas Litva\"
        ],
        \"LUC\": [
            \"LUC\",
            \"Đồng Franc Luxembourg có thể chuyển đổi\"
        ],
        \"LUF\": [
            \"LUF\",
            \"Đồng Franc Luxembourg\"
        ],
        \"LUL\": [
            \"LUL\",
            \"Đồng Franc Luxembourg tài chính\"
        ],
        \"LVL\": [
            \"LVL\",
            \"Lats Latvia\"
        ],
        \"LVR\": [
            \"LVR\",
            \"Đồng Rúp Latvia\"
        ],
        \"LYD\": [
            \"LYD\",
            \"Dinar Libi\"
        ],
        \"MAD\": [
            \"MAD\",
            \"Dirham Ma-rốc\"
        ],
        \"MAF\": [
            \"MAF\",
            \"Đồng Franc Ma-rốc\"
        ],
        \"MCF\": [
            \"MCF\",
            \"Đồng Franc Monegasque\"
        ],
        \"MDC\": [
            \"MDC\",
            \"Đồng Cupon Moldova\"
        ],
        \"MDL\": [
            \"MDL\",
            \"Leu Moldova\"
        ],
        \"MGA\": [
            \"MGA\",
            \"Ariary Malagasy\"
        ],
        \"MGF\": [
            \"MGF\",
            \"Đồng Franc Magalasy\"
        ],
        \"MKD\": [
            \"MKD\",
            \"Denar Macedonia\"
        ],
        \"MKN\": [
            \"MKN\",
            \"Đồng Denar Macedonia (1992–1993)\"
        ],
        \"MLF\": [
            \"MLF\",
            \"Đồng Franc Mali\"
        ],
        \"MMK\": [
            \"MMK\",
            \"Kyat Myanma\"
        ],
        \"MNT\": [
            \"MNT\",
            \"Tugrik Mông Cổ\"
        ],
        \"MOP\": [
            \"MOP\",
            \"Pataca Ma Cao\"
        ],
        \"MRO\": [
            \"MRO\",
            \"Ouguiya Mauritania (1973–2017)\"
        ],
        \"MRU\": [
            \"MRU\",
            \"Ouguiya Mauritania\"
        ],
        \"MTL\": [
            \"MTL\",
            \"Lia xứ Man-tơ\"
        ],
        \"MTP\": [
            \"MTP\",
            \"Đồng Bảng Malta\"
        ],
        \"MUR\": [
            \"MUR\",
            \"Rupee Mauritius\"
        ],
        \"MVR\": [
            \"MVR\",
            \"Rufiyaa Maldives\"
        ],
        \"MWK\": [
            \"MWK\",
            \"Kwacha Malawi\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"Peso Mexico\"
        ],
        \"MXP\": [
            \"MXP\",
            \"Đồng Peso Bạc Mê-hi-cô (1861–1992)\"
        ],
        \"MXV\": [
            \"MXV\",
            \"Đơn vị Đầu tư Mê-hi-cô\"
        ],
        \"MYR\": [
            \"MYR\",
            \"Ringgit Malaysia\"
        ],
        \"MZE\": [
            \"MZE\",
            \"Escudo Mozambique\"
        ],
        \"MZM\": [
            \"MZM\",
            \"Đồng Metical Mozambique (1980–2006)\"
        ],
        \"MZN\": [
            \"MZN\",
            \"Metical Mozambique\"
        ],
        \"NAD\": [
            \"NAD\",
            \"Đô la Namibia\"
        ],
        \"NGN\": [
            \"NGN\",
            \"Naira Nigeria\"
        ],
        \"NIC\": [
            \"NIC\",
            \"Đồng Córdoba Nicaragua (1988–1991)\"
        ],
        \"NIO\": [
            \"NIO\",
            \"Córdoba Nicaragua\"
        ],
        \"NLG\": [
            \"NLG\",
            \"Đồng Guilder Hà Lan\"
        ],
        \"NOK\": [
            \"NOK\",
            \"Krone Na Uy\"
        ],
        \"NPR\": [
            \"NPR\",
            \"Rupee Nepal\"
        ],
        \"NZD\": [
            \"NZ\$\",
            \"Đô la New Zealand\"
        ],
        \"OMR\": [
            \"OMR\",
            \"Rial Oman\"
        ],
        \"PAB\": [
            \"PAB\",
            \"Balboa Panama\"
        ],
        \"PEI\": [
            \"PEI\",
            \"Đồng Inti Peru\"
        ],
        \"PEN\": [
            \"PEN\",
            \"Sol Peru\"
        ],
        \"PES\": [
            \"PES\",
            \"Đồng Sol Peru (1863–1965)\"
        ],
        \"PGK\": [
            \"PGK\",
            \"Kina Papua New Guinea\"
        ],
        \"PHP\": [
            \"PHP\",
            \"Peso Philipin\"
        ],
        \"PKR\": [
            \"PKR\",
            \"Rupee Pakistan\"
        ],
        \"PLN\": [
            \"PLN\",
            \"Zloty Ba Lan\"
        ],
        \"PLZ\": [
            \"PLZ\",
            \"Đồng Zloty Ba Lan (1950–1995)\"
        ],
        \"PTE\": [
            \"PTE\",
            \"Đồng Escudo Bồ Đào Nha\"
        ],
        \"PYG\": [
            \"PYG\",
            \"Guarani Paraguay\"
        ],
        \"QAR\": [
            \"QAR\",
            \"Rial Qatar\"
        ],
        \"RHD\": [
            \"RHD\",
            \"Đồng Đô la Rhode\"
        ],
        \"ROL\": [
            \"ROL\",
            \"Đồng Leu Rumani (1952–2006)\"
        ],
        \"RON\": [
            \"RON\",
            \"Leu Romania\"
        ],
        \"RSD\": [
            \"RSD\",
            \"Dinar Serbia\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rúp Nga\"
        ],
        \"RUR\": [
            \"RUR\",
            \"Đồng Rúp Nga (1991–1998)\"
        ],
        \"RWF\": [
            \"RWF\",
            \"Franc Rwanda\"
        ],
        \"SAR\": [
            \"SAR\",
            \"Riyal Ả Rập Xê-út\"
        ],
        \"SBD\": [
            \"SBD\",
            \"Đô la quần đảo Solomon\"
        ],
        \"SCR\": [
            \"SCR\",
            \"Rupee Seychelles\"
        ],
        \"SDD\": [
            \"SDD\",
            \"Đồng Dinar Sudan (1992–2007)\"
        ],
        \"SDG\": [
            \"SDG\",
            \"Bảng Sudan\"
        ],
        \"SDP\": [
            \"SDP\",
            \"Đồng Bảng Sudan (1957–1998)\"
        ],
        \"SEK\": [
            \"SEK\",
            \"Krona Thụy Điển\"
        ],
        \"SGD\": [
            \"SGD\",
            \"Đô la Singapore\"
        ],
        \"SHP\": [
            \"SHP\",
            \"Bảng St. Helena\"
        ],
        \"SIT\": [
            \"SIT\",
            \"Tôla Xlôvênia\"
        ],
        \"SKK\": [
            \"SKK\",
            \"Cuaron Xlôvác\"
        ],
        \"SLL\": [
            \"SLL\",
            \"Leone Sierra Leone\"
        ],
        \"SOS\": [
            \"SOS\",
            \"Schilling Somali\"
        ],
        \"SRD\": [
            \"SRD\",
            \"Đô la Suriname\"
        ],
        \"SRG\": [
            \"SRG\",
            \"Đồng Guilder Surinam\"
        ],
        \"SSP\": [
            \"SSP\",
            \"Bảng Nam Sudan\"
        ],
        \"STD\": [
            \"STD\",
            \"Dobra São Tomé và Príncipe (1977–2017)\"
        ],
        \"STN\": [
            \"STN\",
            \"Dobra São Tomé và Príncipe\"
        ],
        \"SUR\": [
            \"SUR\",
            \"Đồng Rúp Sô viết\"
        ],
        \"SVC\": [
            \"SVC\",
            \"Colón El Salvador\"
        ],
        \"SYP\": [
            \"SYP\",
            \"Bảng Syria\"
        ],
        \"SZL\": [
            \"SZL\",
            \"Lilangeni Swaziland\"
        ],
        \"THB\": [
            \"฿\",
            \"Bạt Thái Lan\"
        ],
        \"TJR\": [
            \"TJR\",
            \"Đồng Rúp Tajikistan\"
        ],
        \"TJS\": [
            \"TJS\",
            \"Somoni Tajikistan\"
        ],
        \"TMM\": [
            \"TMM\",
            \"Đồng Manat Turkmenistan (1993–2009)\"
        ],
        \"TMT\": [
            \"TMT\",
            \"Manat Turkmenistan\"
        ],
        \"TND\": [
            \"TND\",
            \"Dinar Tunisia\"
        ],
        \"TOP\": [
            \"TOP\",
            \"Paʻanga Tonga\"
        ],
        \"TPE\": [
            \"TPE\",
            \"Đồng Escudo Timor\"
        ],
        \"TRL\": [
            \"TRL\",
            \"Lia Thổ Nhĩ Kỳ (1922–2005)\"
        ],
        \"TRY\": [
            \"TRY\",
            \"Lia Thổ Nhĩ Kỳ\"
        ],
        \"TTD\": [
            \"TTD\",
            \"Đô la Trinidad và Tobago\"
        ],
        \"TWD\": [
            \"NT\$\",
            \"Đô la Đài Loan mới\"
        ],
        \"TZS\": [
            \"TZS\",
            \"Shilling Tanzania\"
        ],
        \"UAH\": [
            \"UAH\",
            \"Hryvnia Ukraina\"
        ],
        \"UAK\": [
            \"UAK\",
            \"Đồng Karbovanets Ucraina\"
        ],
        \"UGS\": [
            \"UGS\",
            \"Đồng Shilling Uganda (1966–1987)\"
        ],
        \"UGX\": [
            \"UGX\",
            \"Shilling Uganda\"
        ],
        \"USD\": [
            \"US\$\",
            \"Đô la Mỹ\"
        ],
        \"USN\": [
            \"USN\",
            \"Đô la Mỹ (Ngày tiếp theo)\"
        ],
        \"USS\": [
            \"USS\",
            \"Đô la Mỹ (Cùng ngày)\"
        ],
        \"UYI\": [
            \"UYI\",
            \"Đồng Peso Uruguay (Đơn vị Theo chỉ số)\"
        ],
        \"UYP\": [
            \"UYP\",
            \"Đồng Peso Uruguay (1975–1993)\"
        ],
        \"UYU\": [
            \"UYU\",
            \"Peso Uruguay\"
        ],
        \"UZS\": [
            \"UZS\",
            \"Som Uzbekistan\"
        ],
        \"VEB\": [
            \"VEB\",
            \"Đồng bolívar của Venezuela (1871–2008)\"
        ],
        \"VEF\": [
            \"VEF\",
            \"Bolívar Venezuela (2008–2018)\"
        ],
        \"VES\": [
            \"VES\",
            \"Bolívar Venezuela\"
        ],
        \"VND\": [
            \"₫\",
            \"Đồng Việt Nam\"
        ],
        \"VNN\": [
            \"VNN\",
            \"Đồng Việt Nam (1978–1985)\"
        ],
        \"VUV\": [
            \"VUV\",
            \"Vatu Vanuatu\"
        ],
        \"WST\": [
            \"WST\",
            \"Tala Samoa\"
        ],
        \"XAF\": [
            \"FCFA\",
            \"Franc CFA Trung Phi\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"Đô la Đông Caribê\"
        ],
        \"XEU\": [
            \"XEU\",
            \"Đơn vị Tiền Châu Âu\"
        ],
        \"XFO\": [
            \"XFO\",
            \"Đồng France Pháp Vàng\"
        ],
        \"XFU\": [
            \"XFU\",
            \"Đồng UIC-Franc Pháp\"
        ],
        \"XOF\": [
            \"CFA\",
            \"Franc CFA Tây Phi\"
        ],
        \"XPF\": [
            \"CFPF\",
            \"Franc CFP\"
        ],
        \"XRE\": [
            \"XRE\",
            \"Quỹ RINET\"
        ],
        \"YDD\": [
            \"YDD\",
            \"Đồng Dinar Yemen\"
        ],
        \"YER\": [
            \"YER\",
            \"Rial Yemen\"
        ],
        \"YUD\": [
            \"YUD\",
            \"Đồng Dinar Nam Tư Xu (1966–1990)\"
        ],
        \"YUM\": [
            \"YUM\",
            \"Đồng Dinar Nam Tư Mới (1994–2002)\"
        ],
        \"YUN\": [
            \"YUN\",
            \"Đồng Dinar Nam Tư Có thể chuyển đổi (1990–1992)\"
        ],
        \"YUR\": [
            \"YUR\",
            \"Đồng Dinar Nam Tư Tái cơ cấu (1992–1993)\"
        ],
        \"ZAL\": [
            \"ZAL\",
            \"Đồng Rand Nam Phi (tài chính)\"
        ],
        \"ZAR\": [
            \"ZAR\",
            \"Rand Nam Phi\"
        ],
        \"ZMK\": [
            \"ZMK\",
            \"Đồng kwacha của Zambia (1968–2012)\"
        ],
        \"ZMW\": [
            \"ZMW\",
            \"Kwacha Zambia\"
        ],
        \"ZRN\": [
            \"ZRN\",
            \"Đồng Zaire Mới (1993–1998)\"
        ],
        \"ZRZ\": [
            \"ZRZ\",
            \"Đồng Zaire (1971–1993)\"
        ],
        \"ZWD\": [
            \"ZWD\",
            \"Đồng Đô la Zimbabwe (1980–2008)\"
        ],
        \"ZWL\": [
            \"ZWL\",
            \"Đồng Đô la Zimbabwe (2009)\"
        ],
        \"ZWR\": [
            \"ZWR\",
            \"Đồng Đô la Zimbabwe (2008)\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/vi.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/vi.json");
    }
}
