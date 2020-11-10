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

/* vendor/symfony/intl/Resources/data/languages/ti.json */
class __TwigTemplate_008d954592c67038cec1d8e85d9f24141df4fb61d69ddc39d8d82df754c9e972 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ti.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/ti.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"af\": \"አፍሪቃንሰኛ\",
        \"am\": \"አምሐረኛ\",
        \"ar\": \"ዓረበኛ\",
        \"az\": \"አዜርባይጃንኛ\",
        \"be\": \"ቤላራሻኛ\",
        \"bg\": \"ቡልጋሪኛ\",
        \"bn\": \"በንጋሊኛ\",
        \"br\": \"ብሬቶን\",
        \"bs\": \"ቦስኒያን\",
        \"ca\": \"ካታላን\",
        \"cs\": \"ቼክኛ\",
        \"cy\": \"ወልሽ\",
        \"da\": \"ዴኒሽ\",
        \"de\": \"ጀርመን\",
        \"el\": \"ግሪከኛ\",
        \"en\": \"እንግሊዝኛ\",
        \"eo\": \"ኤስፐራንቶ\",
        \"es\": \"ስፓኒሽ\",
        \"et\": \"ኤስቶኒአን\",
        \"eu\": \"ባስክኛ\",
        \"fa\": \"ፐርሲያኛ\",
        \"fi\": \"ፊኒሽ\",
        \"fil\": \"ታጋሎገኛ\",
        \"fo\": \"ፋሮኛ\",
        \"fr\": \"ፈረንሳይኛ\",
        \"fy\": \"ፍሪሰኛ\",
        \"ga\": \"አይሪሽ\",
        \"gd\": \"እስኮትስ ጌልክኛ\",
        \"gl\": \"ጋለቪኛ\",
        \"gn\": \"ጓራኒ\",
        \"gu\": \"ጉጃራቲኛ\",
        \"he\": \"ዕብራስጥ\",
        \"hi\": \"ሕንደኛ\",
        \"hr\": \"ክሮሽያንኛ\",
        \"hu\": \"ሀንጋሪኛ\",
        \"ia\": \"ኢንቴር ቋንቋ\",
        \"id\": \"እንዶኑሲኛ\",
        \"is\": \"አይስላንደኛ\",
        \"it\": \"ጣሊያንኛ\",
        \"ja\": \"ጃፓንኛ\",
        \"jv\": \"ጃቫንኛ\",
        \"ka\": \"ጊዮርጊያኛ\",
        \"kn\": \"ካማደኛ\",
        \"ko\": \"ኮሪያኛ\",
        \"ku\": \"ኩርድሽ\",
        \"ky\": \"ኪሩጋዚ\",
        \"la\": \"ላቲንኛ\",
        \"lt\": \"ሊቱአኒየን\",
        \"lv\": \"ላቲቪያን\",
        \"mk\": \"ማክዶኒኛ\",
        \"ml\": \"ማላያላምኛ\",
        \"mr\": \"ማራቲኛ\",
        \"ms\": \"ማላይኛ\",
        \"mt\": \"ማልቲስኛ\",
        \"ne\": \"ኔፖሊኛ\",
        \"nl\": \"ደች\",
        \"nn\": \"ኖርዌይኛ (ናይ ኝኖርስክ)\",
        \"no\": \"ኖርዌጂያን\",
        \"oc\": \"ኦኪታንኛ\",
        \"or\": \"ኦሪያ\",
        \"pa\": \"ፑንጃቢኛ\",
        \"pl\": \"ፖሊሽ\",
        \"ps\": \"ፓሽቶ\",
        \"pt\": \"ፖርቱጋሊኛ\",
        \"pt_BR\": \"ፖርቱጋልኛ (ናይ ብራዚል)\",
        \"pt_PT\": \"ፖርቱጋልኛ (ናይ ፖርቱጋል)\",
        \"ro\": \"ሮማኒያን\",
        \"ru\": \"ራሽኛ\",
        \"sh\": \"ሰርቦ- ክሮዊታን\",
        \"si\": \"ስንሃልኛ\",
        \"sk\": \"ስሎቨክኛ\",
        \"sl\": \"ስቁቪኛ\",
        \"sq\": \"አልቤኒኛ\",
        \"sr\": \"ሰርቢኛ\",
        \"st\": \"ሰሴቶ\",
        \"su\": \"ሱዳንኛ\",
        \"sv\": \"ስዊድንኛ\",
        \"sw\": \"ሰዋሂሊኛ\",
        \"ta\": \"ታሚልኛ\",
        \"te\": \"ተሉጉኛ\",
        \"th\": \"ታይኛ\",
        \"ti\": \"ትግርኛ\",
        \"tk\": \"ናይ ቱርኪ ሰብዓይ (ቱርካዊ)\",
        \"tlh\": \"ክሊንግኦንኛ\",
        \"tr\": \"ቱርከኛ\",
        \"tw\": \"ትዊ\",
        \"uk\": \"ዩክረኒኛ\",
        \"ur\": \"ኡርዱኛ\",
        \"uz\": \"ኡዝበክኛ\",
        \"vi\": \"ቪትናምኛ\",
        \"xh\": \"ዞሳኛ\",
        \"yi\": \"ዪዲሽ\",
        \"zu\": \"ዙሉኛ\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/ti.json";
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
        \"af\": \"አፍሪቃንሰኛ\",
        \"am\": \"አምሐረኛ\",
        \"ar\": \"ዓረበኛ\",
        \"az\": \"አዜርባይጃንኛ\",
        \"be\": \"ቤላራሻኛ\",
        \"bg\": \"ቡልጋሪኛ\",
        \"bn\": \"በንጋሊኛ\",
        \"br\": \"ብሬቶን\",
        \"bs\": \"ቦስኒያን\",
        \"ca\": \"ካታላን\",
        \"cs\": \"ቼክኛ\",
        \"cy\": \"ወልሽ\",
        \"da\": \"ዴኒሽ\",
        \"de\": \"ጀርመን\",
        \"el\": \"ግሪከኛ\",
        \"en\": \"እንግሊዝኛ\",
        \"eo\": \"ኤስፐራንቶ\",
        \"es\": \"ስፓኒሽ\",
        \"et\": \"ኤስቶኒአን\",
        \"eu\": \"ባስክኛ\",
        \"fa\": \"ፐርሲያኛ\",
        \"fi\": \"ፊኒሽ\",
        \"fil\": \"ታጋሎገኛ\",
        \"fo\": \"ፋሮኛ\",
        \"fr\": \"ፈረንሳይኛ\",
        \"fy\": \"ፍሪሰኛ\",
        \"ga\": \"አይሪሽ\",
        \"gd\": \"እስኮትስ ጌልክኛ\",
        \"gl\": \"ጋለቪኛ\",
        \"gn\": \"ጓራኒ\",
        \"gu\": \"ጉጃራቲኛ\",
        \"he\": \"ዕብራስጥ\",
        \"hi\": \"ሕንደኛ\",
        \"hr\": \"ክሮሽያንኛ\",
        \"hu\": \"ሀንጋሪኛ\",
        \"ia\": \"ኢንቴር ቋንቋ\",
        \"id\": \"እንዶኑሲኛ\",
        \"is\": \"አይስላንደኛ\",
        \"it\": \"ጣሊያንኛ\",
        \"ja\": \"ጃፓንኛ\",
        \"jv\": \"ጃቫንኛ\",
        \"ka\": \"ጊዮርጊያኛ\",
        \"kn\": \"ካማደኛ\",
        \"ko\": \"ኮሪያኛ\",
        \"ku\": \"ኩርድሽ\",
        \"ky\": \"ኪሩጋዚ\",
        \"la\": \"ላቲንኛ\",
        \"lt\": \"ሊቱአኒየን\",
        \"lv\": \"ላቲቪያን\",
        \"mk\": \"ማክዶኒኛ\",
        \"ml\": \"ማላያላምኛ\",
        \"mr\": \"ማራቲኛ\",
        \"ms\": \"ማላይኛ\",
        \"mt\": \"ማልቲስኛ\",
        \"ne\": \"ኔፖሊኛ\",
        \"nl\": \"ደች\",
        \"nn\": \"ኖርዌይኛ (ናይ ኝኖርስክ)\",
        \"no\": \"ኖርዌጂያን\",
        \"oc\": \"ኦኪታንኛ\",
        \"or\": \"ኦሪያ\",
        \"pa\": \"ፑንጃቢኛ\",
        \"pl\": \"ፖሊሽ\",
        \"ps\": \"ፓሽቶ\",
        \"pt\": \"ፖርቱጋሊኛ\",
        \"pt_BR\": \"ፖርቱጋልኛ (ናይ ብራዚል)\",
        \"pt_PT\": \"ፖርቱጋልኛ (ናይ ፖርቱጋል)\",
        \"ro\": \"ሮማኒያን\",
        \"ru\": \"ራሽኛ\",
        \"sh\": \"ሰርቦ- ክሮዊታን\",
        \"si\": \"ስንሃልኛ\",
        \"sk\": \"ስሎቨክኛ\",
        \"sl\": \"ስቁቪኛ\",
        \"sq\": \"አልቤኒኛ\",
        \"sr\": \"ሰርቢኛ\",
        \"st\": \"ሰሴቶ\",
        \"su\": \"ሱዳንኛ\",
        \"sv\": \"ስዊድንኛ\",
        \"sw\": \"ሰዋሂሊኛ\",
        \"ta\": \"ታሚልኛ\",
        \"te\": \"ተሉጉኛ\",
        \"th\": \"ታይኛ\",
        \"ti\": \"ትግርኛ\",
        \"tk\": \"ናይ ቱርኪ ሰብዓይ (ቱርካዊ)\",
        \"tlh\": \"ክሊንግኦንኛ\",
        \"tr\": \"ቱርከኛ\",
        \"tw\": \"ትዊ\",
        \"uk\": \"ዩክረኒኛ\",
        \"ur\": \"ኡርዱኛ\",
        \"uz\": \"ኡዝበክኛ\",
        \"vi\": \"ቪትናምኛ\",
        \"xh\": \"ዞሳኛ\",
        \"yi\": \"ዪዲሽ\",
        \"zu\": \"ዙሉኛ\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/ti.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/ti.json");
    }
}
