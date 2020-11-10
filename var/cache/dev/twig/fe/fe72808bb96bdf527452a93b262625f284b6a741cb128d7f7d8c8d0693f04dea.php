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

/* vendor/symfony/intl/Resources/data/regions/am.json */
class __TwigTemplate_24957c865ed7ac734e3f812d6793b224233113a7aa13db0f44d32f761c7bc83e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/am.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/regions/am.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"AD\": \"አንዶራ\",
        \"AE\": \"የተባበሩት ዓረብ ኤምሬትስ\",
        \"AF\": \"አፍጋኒስታን\",
        \"AG\": \"አንቲጓ እና ባሩዳ\",
        \"AI\": \"አንጉይላ\",
        \"AL\": \"አልባኒያ\",
        \"AM\": \"አርሜኒያ\",
        \"AO\": \"አንጐላ\",
        \"AQ\": \"አንታርክቲካ\",
        \"AR\": \"አርጀንቲና\",
        \"AS\": \"የአሜሪካ ሳሞአ\",
        \"AT\": \"ኦስትሪያ\",
        \"AU\": \"አውስትራልያ\",
        \"AW\": \"አሩባ\",
        \"AX\": \"የአላንድ ደሴቶች\",
        \"AZ\": \"አዘርባጃን\",
        \"BA\": \"ቦስኒያ እና ሄርዞጎቪኒያ\",
        \"BB\": \"ባርቤዶስ\",
        \"BD\": \"ባንግላዲሽ\",
        \"BE\": \"ቤልጄም\",
        \"BF\": \"ቡርኪና ፋሶ\",
        \"BG\": \"ቡልጌሪያ\",
        \"BH\": \"ባህሬን\",
        \"BI\": \"ብሩንዲ\",
        \"BJ\": \"ቤኒን\",
        \"BL\": \"ቅዱስ በርቴሎሜ\",
        \"BM\": \"ቤርሙዳ\",
        \"BN\": \"ብሩኒ\",
        \"BO\": \"ቦሊቪያ\",
        \"BQ\": \"የካሪቢያን ኔዘርላንድስ\",
        \"BR\": \"ብራዚል\",
        \"BS\": \"ባሃማስ\",
        \"BT\": \"ቡህታን\",
        \"BV\": \"ቡቬት ደሴት\",
        \"BW\": \"ቦትስዋና\",
        \"BY\": \"ቤላሩስ\",
        \"BZ\": \"በሊዝ\",
        \"CA\": \"ካናዳ\",
        \"CC\": \"ኮኮስ(ኬሊንግ) ደሴቶች\",
        \"CD\": \"ኮንጎ-ኪንሻሳ\",
        \"CF\": \"ማዕከላዊ አፍሪካ ሪፑብሊክ\",
        \"CG\": \"ኮንጎ ብራዛቪል\",
        \"CH\": \"ስዊዘርላንድ\",
        \"CI\": \"ኮት ዲቯር\",
        \"CK\": \"ኩክ ደሴቶች\",
        \"CL\": \"ቺሊ\",
        \"CM\": \"ካሜሩን\",
        \"CN\": \"ቻይና\",
        \"CO\": \"ኮሎምቢያ\",
        \"CR\": \"ኮስታሪካ\",
        \"CU\": \"ኩባ\",
        \"CV\": \"ኬፕ ቬርዴ\",
        \"CW\": \"ኩራሳዎ\",
        \"CX\": \"ክሪስማስ ደሴት\",
        \"CY\": \"ሳይፕረስ\",
        \"CZ\": \"ቼቺያ\",
        \"DE\": \"ጀርመን\",
        \"DJ\": \"ጂቡቲ\",
        \"DK\": \"ዴንማርክ\",
        \"DM\": \"ዶሚኒካ\",
        \"DO\": \"ዶመኒካን ሪፑብሊክ\",
        \"DZ\": \"አልጄሪያ\",
        \"EC\": \"ኢኳዶር\",
        \"EE\": \"ኤስቶኒያ\",
        \"EG\": \"ግብጽ\",
        \"EH\": \"ምዕራባዊ ሳህራ\",
        \"ER\": \"ኤርትራ\",
        \"ES\": \"ስፔን\",
        \"ET\": \"ኢትዮጵያ\",
        \"FI\": \"ፊንላንድ\",
        \"FJ\": \"ፊጂ\",
        \"FK\": \"የፎክላንድ ደሴቶች\",
        \"FM\": \"ሚክሮኔዢያ\",
        \"FO\": \"የፋሮ ደሴቶች\",
        \"FR\": \"ፈረንሳይ\",
        \"GA\": \"ጋቦን\",
        \"GB\": \"ዩናይትድ ኪንግደም\",
        \"GD\": \"ግሬናዳ\",
        \"GE\": \"ጆርጂያ\",
        \"GF\": \"የፈረንሳይ ጉዊአና\",
        \"GG\": \"ጉርነሲ\",
        \"GH\": \"ጋና\",
        \"GI\": \"ጂብራልተር\",
        \"GL\": \"ግሪንላንድ\",
        \"GM\": \"ጋምቢያ\",
        \"GN\": \"ጊኒ\",
        \"GP\": \"ጉዋደሉፕ\",
        \"GQ\": \"ኢኳቶሪያል ጊኒ\",
        \"GR\": \"ግሪክ\",
        \"GS\": \"ደቡብ ጆርጂያ እና የደቡብ ሳንድዊች ደሴቶች\",
        \"GT\": \"ጉዋቲማላ\",
        \"GU\": \"ጉዋም\",
        \"GW\": \"ጊኒ ቢሳኦ\",
        \"GY\": \"ጉያና\",
        \"HK\": \"ሆንግ ኮንግ ልዩ የአስተዳደር ክልል ቻይና\",
        \"HM\": \"ኽርድ ደሴቶችና ማክዶናልድ ደሴቶች\",
        \"HN\": \"ሆንዱራስ\",
        \"HR\": \"ክሮኤሽያ\",
        \"HT\": \"ሀይቲ\",
        \"HU\": \"ሀንጋሪ\",
        \"ID\": \"ኢንዶኔዢያ\",
        \"IE\": \"አየርላንድ\",
        \"IL\": \"እስራኤል\",
        \"IM\": \"አይል ኦፍ ማን\",
        \"IN\": \"ህንድ\",
        \"IO\": \"የብሪታኒያ ህንድ ውቂያኖስ ግዛት\",
        \"IQ\": \"ኢራቅ\",
        \"IR\": \"ኢራን\",
        \"IS\": \"አይስላንድ\",
        \"IT\": \"ጣሊያን\",
        \"JE\": \"ጀርሲ\",
        \"JM\": \"ጃማይካ\",
        \"JO\": \"ጆርዳን\",
        \"JP\": \"ጃፓን\",
        \"KE\": \"ኬንያ\",
        \"KG\": \"ኪርጊስታን\",
        \"KH\": \"ካምቦዲያ\",
        \"KI\": \"ኪሪባቲ\",
        \"KM\": \"ኮሞሮስ\",
        \"KN\": \"ቅዱስ ኪትስ እና ኔቪስ\",
        \"KP\": \"ሰሜን ኮሪያ\",
        \"KR\": \"ደቡብ ኮሪያ\",
        \"KW\": \"ክዌት\",
        \"KY\": \"ካይማን ደሴቶች\",
        \"KZ\": \"ካዛኪስታን\",
        \"LA\": \"ላኦስ\",
        \"LB\": \"ሊባኖስ\",
        \"LC\": \"ሴንት ሉቺያ\",
        \"LI\": \"ሊችተንስታይን\",
        \"LK\": \"ሲሪላንካ\",
        \"LR\": \"ላይቤሪያ\",
        \"LS\": \"ሌሶቶ\",
        \"LT\": \"ሊቱዌኒያ\",
        \"LU\": \"ሉክሰምበርግ\",
        \"LV\": \"ላትቪያ\",
        \"LY\": \"ሊቢያ\",
        \"MA\": \"ሞሮኮ\",
        \"MC\": \"ሞናኮ\",
        \"MD\": \"ሞልዶቫ\",
        \"ME\": \"ሞንተኔግሮ\",
        \"MF\": \"ሴንት ማርቲን\",
        \"MG\": \"ማዳጋስካር\",
        \"MH\": \"ማርሻል አይላንድ\",
        \"MK\": \"ሰሜን መቄዶንያ\",
        \"ML\": \"ማሊ\",
        \"MM\": \"ማይናማር(በርማ)\",
        \"MN\": \"ሞንጎሊያ\",
        \"MO\": \"ማካኡ ልዩ የአስተዳደር ክልል ቻይና\",
        \"MP\": \"የሰሜናዊ ማሪያና ደሴቶች\",
        \"MQ\": \"ማርቲኒክ\",
        \"MR\": \"ሞሪቴኒያ\",
        \"MS\": \"ሞንትሴራት\",
        \"MT\": \"ማልታ\",
        \"MU\": \"ሞሪሸስ\",
        \"MV\": \"ማልዲቭስ\",
        \"MW\": \"ማላዊ\",
        \"MX\": \"ሜክሲኮ\",
        \"MY\": \"ማሌዢያ\",
        \"MZ\": \"ሞዛምቢክ\",
        \"NA\": \"ናሚቢያ\",
        \"NC\": \"ኒው ካሌዶኒያ\",
        \"NE\": \"ኒጀር\",
        \"NF\": \"ኖርፎልክ ደሴት\",
        \"NG\": \"ናይጄሪያ\",
        \"NI\": \"ኒካራጓ\",
        \"NL\": \"ኔዘርላንድ\",
        \"NO\": \"ኖርዌይ\",
        \"NP\": \"ኔፓል\",
        \"NR\": \"ናኡሩ\",
        \"NU\": \"ኒኡይ\",
        \"NZ\": \"ኒው ዚላንድ\",
        \"OM\": \"ኦማን\",
        \"PA\": \"ፓናማ\",
        \"PE\": \"ፔሩ\",
        \"PF\": \"የፈረንሳይ ፖሊኔዢያ\",
        \"PG\": \"ፓፑዋ ኒው ጊኒ\",
        \"PH\": \"ፊሊፒንስ\",
        \"PK\": \"ፓኪስታን\",
        \"PL\": \"ፖላንድ\",
        \"PM\": \"ቅዱስ ፒዬር እና ሚኩኤሎን\",
        \"PN\": \"ፒትካኢርን አይስላንድ\",
        \"PR\": \"ፖርታ ሪኮ\",
        \"PS\": \"የፍልስጤም ግዛት\",
        \"PT\": \"ፖርቱጋል\",
        \"PW\": \"ፓላው\",
        \"PY\": \"ፓራጓይ\",
        \"QA\": \"ኳታር\",
        \"RE\": \"ሪዩኒየን\",
        \"RO\": \"ሮሜኒያ\",
        \"RS\": \"ሰርብያ\",
        \"RU\": \"ሩስያ\",
        \"RW\": \"ሩዋንዳ\",
        \"SA\": \"ሳውድአረቢያ\",
        \"SB\": \"ሰሎሞን ደሴት\",
        \"SC\": \"ሲሼልስ\",
        \"SD\": \"ሱዳን\",
        \"SE\": \"ስዊድን\",
        \"SG\": \"ሲንጋፖር\",
        \"SH\": \"ሴንት ሄለና\",
        \"SI\": \"ስሎቬኒያ\",
        \"SJ\": \"ስቫልባርድ እና ጃን ማየን\",
        \"SK\": \"ስሎቫኪያ\",
        \"SL\": \"ሴራሊዮን\",
        \"SM\": \"ሳን ማሪኖ\",
        \"SN\": \"ሴኔጋል\",
        \"SO\": \"ሱማሌ\",
        \"SR\": \"ሱሪናም\",
        \"SS\": \"ደቡብ ሱዳን\",
        \"ST\": \"ሳኦ ቶሜ እና ፕሪንሲፔ\",
        \"SV\": \"ኤል ሳልቫዶር\",
        \"SX\": \"ሲንት ማርተን\",
        \"SY\": \"ሲሪያ\",
        \"SZ\": \"ሱዋዚላንድ\",
        \"TC\": \"የቱርኮችና የካኢኮስ ደሴቶች\",
        \"TD\": \"ቻድ\",
        \"TF\": \"የፈረንሳይ ደቡባዊ ግዛቶች\",
        \"TG\": \"ቶጐ\",
        \"TH\": \"ታይላንድ\",
        \"TJ\": \"ታጃኪስታን\",
        \"TK\": \"ቶክላው\",
        \"TL\": \"ቲሞር ሌስቴ\",
        \"TM\": \"ቱርክሜኒስታን\",
        \"TN\": \"ቱኒዚያ\",
        \"TO\": \"ቶንጋ\",
        \"TR\": \"ቱርክ\",
        \"TT\": \"ትሪናዳድ እና ቶቤጎ\",
        \"TV\": \"ቱቫሉ\",
        \"TW\": \"ታይዋን\",
        \"TZ\": \"ታንዛኒያ\",
        \"UA\": \"ዩክሬን\",
        \"UG\": \"ዩጋንዳ\",
        \"UM\": \"የዩ ኤስ ጠረፍ ላይ ያሉ ደሴቶች\",
        \"US\": \"ዩናይትድ ስቴትስ\",
        \"UY\": \"ኡራጓይ\",
        \"UZ\": \"ኡዝቤኪስታን\",
        \"VA\": \"ቫቲካን ከተማ\",
        \"VC\": \"ቅዱስ ቪንሴንት እና ግሬናዲንስ\",
        \"VE\": \"ቬንዙዌላ\",
        \"VG\": \"የእንግሊዝ ቨርጂን ደሴቶች\",
        \"VI\": \"የአሜሪካ ቨርጂን ደሴቶች\",
        \"VN\": \"ቬትናም\",
        \"VU\": \"ቫኑአቱ\",
        \"WF\": \"ዋሊስ እና ፉቱና ደሴቶች\",
        \"WS\": \"ሳሞአ\",
        \"YE\": \"የመን\",
        \"YT\": \"ሜይኦቴ\",
        \"ZA\": \"ደቡብ አፍሪካ\",
        \"ZM\": \"ዛምቢያ\",
        \"ZW\": \"ዚምቧቤ\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/regions/am.json";
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
        \"AD\": \"አንዶራ\",
        \"AE\": \"የተባበሩት ዓረብ ኤምሬትስ\",
        \"AF\": \"አፍጋኒስታን\",
        \"AG\": \"አንቲጓ እና ባሩዳ\",
        \"AI\": \"አንጉይላ\",
        \"AL\": \"አልባኒያ\",
        \"AM\": \"አርሜኒያ\",
        \"AO\": \"አንጐላ\",
        \"AQ\": \"አንታርክቲካ\",
        \"AR\": \"አርጀንቲና\",
        \"AS\": \"የአሜሪካ ሳሞአ\",
        \"AT\": \"ኦስትሪያ\",
        \"AU\": \"አውስትራልያ\",
        \"AW\": \"አሩባ\",
        \"AX\": \"የአላንድ ደሴቶች\",
        \"AZ\": \"አዘርባጃን\",
        \"BA\": \"ቦስኒያ እና ሄርዞጎቪኒያ\",
        \"BB\": \"ባርቤዶስ\",
        \"BD\": \"ባንግላዲሽ\",
        \"BE\": \"ቤልጄም\",
        \"BF\": \"ቡርኪና ፋሶ\",
        \"BG\": \"ቡልጌሪያ\",
        \"BH\": \"ባህሬን\",
        \"BI\": \"ብሩንዲ\",
        \"BJ\": \"ቤኒን\",
        \"BL\": \"ቅዱስ በርቴሎሜ\",
        \"BM\": \"ቤርሙዳ\",
        \"BN\": \"ብሩኒ\",
        \"BO\": \"ቦሊቪያ\",
        \"BQ\": \"የካሪቢያን ኔዘርላንድስ\",
        \"BR\": \"ብራዚል\",
        \"BS\": \"ባሃማስ\",
        \"BT\": \"ቡህታን\",
        \"BV\": \"ቡቬት ደሴት\",
        \"BW\": \"ቦትስዋና\",
        \"BY\": \"ቤላሩስ\",
        \"BZ\": \"በሊዝ\",
        \"CA\": \"ካናዳ\",
        \"CC\": \"ኮኮስ(ኬሊንግ) ደሴቶች\",
        \"CD\": \"ኮንጎ-ኪንሻሳ\",
        \"CF\": \"ማዕከላዊ አፍሪካ ሪፑብሊክ\",
        \"CG\": \"ኮንጎ ብራዛቪል\",
        \"CH\": \"ስዊዘርላንድ\",
        \"CI\": \"ኮት ዲቯር\",
        \"CK\": \"ኩክ ደሴቶች\",
        \"CL\": \"ቺሊ\",
        \"CM\": \"ካሜሩን\",
        \"CN\": \"ቻይና\",
        \"CO\": \"ኮሎምቢያ\",
        \"CR\": \"ኮስታሪካ\",
        \"CU\": \"ኩባ\",
        \"CV\": \"ኬፕ ቬርዴ\",
        \"CW\": \"ኩራሳዎ\",
        \"CX\": \"ክሪስማስ ደሴት\",
        \"CY\": \"ሳይፕረስ\",
        \"CZ\": \"ቼቺያ\",
        \"DE\": \"ጀርመን\",
        \"DJ\": \"ጂቡቲ\",
        \"DK\": \"ዴንማርክ\",
        \"DM\": \"ዶሚኒካ\",
        \"DO\": \"ዶመኒካን ሪፑብሊክ\",
        \"DZ\": \"አልጄሪያ\",
        \"EC\": \"ኢኳዶር\",
        \"EE\": \"ኤስቶኒያ\",
        \"EG\": \"ግብጽ\",
        \"EH\": \"ምዕራባዊ ሳህራ\",
        \"ER\": \"ኤርትራ\",
        \"ES\": \"ስፔን\",
        \"ET\": \"ኢትዮጵያ\",
        \"FI\": \"ፊንላንድ\",
        \"FJ\": \"ፊጂ\",
        \"FK\": \"የፎክላንድ ደሴቶች\",
        \"FM\": \"ሚክሮኔዢያ\",
        \"FO\": \"የፋሮ ደሴቶች\",
        \"FR\": \"ፈረንሳይ\",
        \"GA\": \"ጋቦን\",
        \"GB\": \"ዩናይትድ ኪንግደም\",
        \"GD\": \"ግሬናዳ\",
        \"GE\": \"ጆርጂያ\",
        \"GF\": \"የፈረንሳይ ጉዊአና\",
        \"GG\": \"ጉርነሲ\",
        \"GH\": \"ጋና\",
        \"GI\": \"ጂብራልተር\",
        \"GL\": \"ግሪንላንድ\",
        \"GM\": \"ጋምቢያ\",
        \"GN\": \"ጊኒ\",
        \"GP\": \"ጉዋደሉፕ\",
        \"GQ\": \"ኢኳቶሪያል ጊኒ\",
        \"GR\": \"ግሪክ\",
        \"GS\": \"ደቡብ ጆርጂያ እና የደቡብ ሳንድዊች ደሴቶች\",
        \"GT\": \"ጉዋቲማላ\",
        \"GU\": \"ጉዋም\",
        \"GW\": \"ጊኒ ቢሳኦ\",
        \"GY\": \"ጉያና\",
        \"HK\": \"ሆንግ ኮንግ ልዩ የአስተዳደር ክልል ቻይና\",
        \"HM\": \"ኽርድ ደሴቶችና ማክዶናልድ ደሴቶች\",
        \"HN\": \"ሆንዱራስ\",
        \"HR\": \"ክሮኤሽያ\",
        \"HT\": \"ሀይቲ\",
        \"HU\": \"ሀንጋሪ\",
        \"ID\": \"ኢንዶኔዢያ\",
        \"IE\": \"አየርላንድ\",
        \"IL\": \"እስራኤል\",
        \"IM\": \"አይል ኦፍ ማን\",
        \"IN\": \"ህንድ\",
        \"IO\": \"የብሪታኒያ ህንድ ውቂያኖስ ግዛት\",
        \"IQ\": \"ኢራቅ\",
        \"IR\": \"ኢራን\",
        \"IS\": \"አይስላንድ\",
        \"IT\": \"ጣሊያን\",
        \"JE\": \"ጀርሲ\",
        \"JM\": \"ጃማይካ\",
        \"JO\": \"ጆርዳን\",
        \"JP\": \"ጃፓን\",
        \"KE\": \"ኬንያ\",
        \"KG\": \"ኪርጊስታን\",
        \"KH\": \"ካምቦዲያ\",
        \"KI\": \"ኪሪባቲ\",
        \"KM\": \"ኮሞሮስ\",
        \"KN\": \"ቅዱስ ኪትስ እና ኔቪስ\",
        \"KP\": \"ሰሜን ኮሪያ\",
        \"KR\": \"ደቡብ ኮሪያ\",
        \"KW\": \"ክዌት\",
        \"KY\": \"ካይማን ደሴቶች\",
        \"KZ\": \"ካዛኪስታን\",
        \"LA\": \"ላኦስ\",
        \"LB\": \"ሊባኖስ\",
        \"LC\": \"ሴንት ሉቺያ\",
        \"LI\": \"ሊችተንስታይን\",
        \"LK\": \"ሲሪላንካ\",
        \"LR\": \"ላይቤሪያ\",
        \"LS\": \"ሌሶቶ\",
        \"LT\": \"ሊቱዌኒያ\",
        \"LU\": \"ሉክሰምበርግ\",
        \"LV\": \"ላትቪያ\",
        \"LY\": \"ሊቢያ\",
        \"MA\": \"ሞሮኮ\",
        \"MC\": \"ሞናኮ\",
        \"MD\": \"ሞልዶቫ\",
        \"ME\": \"ሞንተኔግሮ\",
        \"MF\": \"ሴንት ማርቲን\",
        \"MG\": \"ማዳጋስካር\",
        \"MH\": \"ማርሻል አይላንድ\",
        \"MK\": \"ሰሜን መቄዶንያ\",
        \"ML\": \"ማሊ\",
        \"MM\": \"ማይናማር(በርማ)\",
        \"MN\": \"ሞንጎሊያ\",
        \"MO\": \"ማካኡ ልዩ የአስተዳደር ክልል ቻይና\",
        \"MP\": \"የሰሜናዊ ማሪያና ደሴቶች\",
        \"MQ\": \"ማርቲኒክ\",
        \"MR\": \"ሞሪቴኒያ\",
        \"MS\": \"ሞንትሴራት\",
        \"MT\": \"ማልታ\",
        \"MU\": \"ሞሪሸስ\",
        \"MV\": \"ማልዲቭስ\",
        \"MW\": \"ማላዊ\",
        \"MX\": \"ሜክሲኮ\",
        \"MY\": \"ማሌዢያ\",
        \"MZ\": \"ሞዛምቢክ\",
        \"NA\": \"ናሚቢያ\",
        \"NC\": \"ኒው ካሌዶኒያ\",
        \"NE\": \"ኒጀር\",
        \"NF\": \"ኖርፎልክ ደሴት\",
        \"NG\": \"ናይጄሪያ\",
        \"NI\": \"ኒካራጓ\",
        \"NL\": \"ኔዘርላንድ\",
        \"NO\": \"ኖርዌይ\",
        \"NP\": \"ኔፓል\",
        \"NR\": \"ናኡሩ\",
        \"NU\": \"ኒኡይ\",
        \"NZ\": \"ኒው ዚላንድ\",
        \"OM\": \"ኦማን\",
        \"PA\": \"ፓናማ\",
        \"PE\": \"ፔሩ\",
        \"PF\": \"የፈረንሳይ ፖሊኔዢያ\",
        \"PG\": \"ፓፑዋ ኒው ጊኒ\",
        \"PH\": \"ፊሊፒንስ\",
        \"PK\": \"ፓኪስታን\",
        \"PL\": \"ፖላንድ\",
        \"PM\": \"ቅዱስ ፒዬር እና ሚኩኤሎን\",
        \"PN\": \"ፒትካኢርን አይስላንድ\",
        \"PR\": \"ፖርታ ሪኮ\",
        \"PS\": \"የፍልስጤም ግዛት\",
        \"PT\": \"ፖርቱጋል\",
        \"PW\": \"ፓላው\",
        \"PY\": \"ፓራጓይ\",
        \"QA\": \"ኳታር\",
        \"RE\": \"ሪዩኒየን\",
        \"RO\": \"ሮሜኒያ\",
        \"RS\": \"ሰርብያ\",
        \"RU\": \"ሩስያ\",
        \"RW\": \"ሩዋንዳ\",
        \"SA\": \"ሳውድአረቢያ\",
        \"SB\": \"ሰሎሞን ደሴት\",
        \"SC\": \"ሲሼልስ\",
        \"SD\": \"ሱዳን\",
        \"SE\": \"ስዊድን\",
        \"SG\": \"ሲንጋፖር\",
        \"SH\": \"ሴንት ሄለና\",
        \"SI\": \"ስሎቬኒያ\",
        \"SJ\": \"ስቫልባርድ እና ጃን ማየን\",
        \"SK\": \"ስሎቫኪያ\",
        \"SL\": \"ሴራሊዮን\",
        \"SM\": \"ሳን ማሪኖ\",
        \"SN\": \"ሴኔጋል\",
        \"SO\": \"ሱማሌ\",
        \"SR\": \"ሱሪናም\",
        \"SS\": \"ደቡብ ሱዳን\",
        \"ST\": \"ሳኦ ቶሜ እና ፕሪንሲፔ\",
        \"SV\": \"ኤል ሳልቫዶር\",
        \"SX\": \"ሲንት ማርተን\",
        \"SY\": \"ሲሪያ\",
        \"SZ\": \"ሱዋዚላንድ\",
        \"TC\": \"የቱርኮችና የካኢኮስ ደሴቶች\",
        \"TD\": \"ቻድ\",
        \"TF\": \"የፈረንሳይ ደቡባዊ ግዛቶች\",
        \"TG\": \"ቶጐ\",
        \"TH\": \"ታይላንድ\",
        \"TJ\": \"ታጃኪስታን\",
        \"TK\": \"ቶክላው\",
        \"TL\": \"ቲሞር ሌስቴ\",
        \"TM\": \"ቱርክሜኒስታን\",
        \"TN\": \"ቱኒዚያ\",
        \"TO\": \"ቶንጋ\",
        \"TR\": \"ቱርክ\",
        \"TT\": \"ትሪናዳድ እና ቶቤጎ\",
        \"TV\": \"ቱቫሉ\",
        \"TW\": \"ታይዋን\",
        \"TZ\": \"ታንዛኒያ\",
        \"UA\": \"ዩክሬን\",
        \"UG\": \"ዩጋንዳ\",
        \"UM\": \"የዩ ኤስ ጠረፍ ላይ ያሉ ደሴቶች\",
        \"US\": \"ዩናይትድ ስቴትስ\",
        \"UY\": \"ኡራጓይ\",
        \"UZ\": \"ኡዝቤኪስታን\",
        \"VA\": \"ቫቲካን ከተማ\",
        \"VC\": \"ቅዱስ ቪንሴንት እና ግሬናዲንስ\",
        \"VE\": \"ቬንዙዌላ\",
        \"VG\": \"የእንግሊዝ ቨርጂን ደሴቶች\",
        \"VI\": \"የአሜሪካ ቨርጂን ደሴቶች\",
        \"VN\": \"ቬትናም\",
        \"VU\": \"ቫኑአቱ\",
        \"WF\": \"ዋሊስ እና ፉቱና ደሴቶች\",
        \"WS\": \"ሳሞአ\",
        \"YE\": \"የመን\",
        \"YT\": \"ሜይኦቴ\",
        \"ZA\": \"ደቡብ አፍሪካ\",
        \"ZM\": \"ዛምቢያ\",
        \"ZW\": \"ዚምቧቤ\"
    }
}
", "vendor/symfony/intl/Resources/data/regions/am.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/regions/am.json");
    }
}