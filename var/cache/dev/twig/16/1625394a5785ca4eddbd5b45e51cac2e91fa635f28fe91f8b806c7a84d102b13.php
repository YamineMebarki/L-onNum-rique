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

/* vendor/symfony/intl/Resources/data/scripts/km.json */
class __TwigTemplate_34691049f09ba33965d7b0c1243bdc56b42469c4ef23839a2ba6cbadad1ce00f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/km.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/km.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"អារ៉ាប់\",
        \"Armn\": \"អាមេនី\",
        \"Beng\": \"បង់ក្លាដែស\",
        \"Bopo\": \"បូផូម៉ូហ្វូ\",
        \"Brai\": \"អក្សរ​សម្រាប់មនុស្ស​ពិការ​ភ្នែក\",
        \"Cyrl\": \"ស៊ីរីលីក\",
        \"Deva\": \"ដាវ៉ាន់ណាការិ\",
        \"Ethi\": \"អេត្យូពី\",
        \"Geor\": \"ហ្សកហ្ស៊ី\",
        \"Grek\": \"ក្រិច\",
        \"Gujr\": \"គូចារ៉ាទី\",
        \"Guru\": \"កុមុយឃី\",
        \"Hanb\": \"ហានប៍\",
        \"Hang\": \"ហាំងកុល\",
        \"Hani\": \"ហាន\",
        \"Hans\": \"អក្សរ​ចិន​កាត់\",
        \"Hant\": \"អក្សរ​ចិន​ពេញ\",
        \"Hebr\": \"អ៊ីស្រាអែល\",
        \"Hira\": \"ហ៊ីរ៉ាកាណា\",
        \"Hrkt\": \"សញ្ញាសំឡេងភាសាជប៉ុន\",
        \"Jamo\": \"ចាម៉ូ\",
        \"Jpan\": \"ជប៉ុន\",
        \"Kana\": \"កាតាកាណា\",
        \"Khmr\": \"ខ្មែរ\",
        \"Knda\": \"ខាណាដា\",
        \"Kore\": \"កូរ៉េ\",
        \"Laoo\": \"ឡាវ\",
        \"Latn\": \"ឡាតាំង\",
        \"Mlym\": \"មលយាល័ម\",
        \"Mong\": \"ម៉ុងហ្គោលី\",
        \"Mymr\": \"ភូមា\",
        \"Orya\": \"អូឌៀ\",
        \"Sinh\": \"ស៊ីនហាឡា\",
        \"Taml\": \"តាមីល\",
        \"Telu\": \"តេលុគុ\",
        \"Thaa\": \"ថាណា\",
        \"Thai\": \"ថៃ\",
        \"Tibt\": \"ទីបេ\",
        \"Zmth\": \"និមិត្តសញ្ញាគណិតវិទ្យា\",
        \"Zsye\": \"សញ្ញាអារម្មណ៍\",
        \"Zsym\": \"និមិត្តសញ្ញា\",
        \"Zxxx\": \"គ្មានការសរសេរ\",
        \"Zyyy\": \"ទូទៅ\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/km.json";
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
        \"Arab\": \"អារ៉ាប់\",
        \"Armn\": \"អាមេនី\",
        \"Beng\": \"បង់ក្លាដែស\",
        \"Bopo\": \"បូផូម៉ូហ្វូ\",
        \"Brai\": \"អក្សរ​សម្រាប់មនុស្ស​ពិការ​ភ្នែក\",
        \"Cyrl\": \"ស៊ីរីលីក\",
        \"Deva\": \"ដាវ៉ាន់ណាការិ\",
        \"Ethi\": \"អេត្យូពី\",
        \"Geor\": \"ហ្សកហ្ស៊ី\",
        \"Grek\": \"ក្រិច\",
        \"Gujr\": \"គូចារ៉ាទី\",
        \"Guru\": \"កុមុយឃី\",
        \"Hanb\": \"ហានប៍\",
        \"Hang\": \"ហាំងកុល\",
        \"Hani\": \"ហាន\",
        \"Hans\": \"អក្សរ​ចិន​កាត់\",
        \"Hant\": \"អក្សរ​ចិន​ពេញ\",
        \"Hebr\": \"អ៊ីស្រាអែល\",
        \"Hira\": \"ហ៊ីរ៉ាកាណា\",
        \"Hrkt\": \"សញ្ញាសំឡេងភាសាជប៉ុន\",
        \"Jamo\": \"ចាម៉ូ\",
        \"Jpan\": \"ជប៉ុន\",
        \"Kana\": \"កាតាកាណា\",
        \"Khmr\": \"ខ្មែរ\",
        \"Knda\": \"ខាណាដា\",
        \"Kore\": \"កូរ៉េ\",
        \"Laoo\": \"ឡាវ\",
        \"Latn\": \"ឡាតាំង\",
        \"Mlym\": \"មលយាល័ម\",
        \"Mong\": \"ម៉ុងហ្គោលី\",
        \"Mymr\": \"ភូមា\",
        \"Orya\": \"អូឌៀ\",
        \"Sinh\": \"ស៊ីនហាឡា\",
        \"Taml\": \"តាមីល\",
        \"Telu\": \"តេលុគុ\",
        \"Thaa\": \"ថាណា\",
        \"Thai\": \"ថៃ\",
        \"Tibt\": \"ទីបេ\",
        \"Zmth\": \"និមិត្តសញ្ញាគណិតវិទ្យា\",
        \"Zsye\": \"សញ្ញាអារម្មណ៍\",
        \"Zsym\": \"និមិត្តសញ្ញា\",
        \"Zxxx\": \"គ្មានការសរសេរ\",
        \"Zyyy\": \"ទូទៅ\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/km.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/km.json");
    }
}
