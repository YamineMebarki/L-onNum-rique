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

/* vendor/fzaninotto/faker/src/Faker/Provider/th_TH/PhoneNumber.php */
class __TwigTemplate_e09a9946a21836096e69d2e1f47b47fe80ecb554e9399fa509b6df62b55a0ce5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\th_TH;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * @var array Thai phone number formats
     * @link http://www4.sit.kmutt.ac.th/content/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%82%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%AB%E0%B8%A1%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A5%E0%B8%82%E0%B9%82%E0%B8%97%E0%B8%A3%E0%B8%A8%E0%B8%B1%E0%B8%9E%E0%B8%97%E0%B9%8C%E0%B9%83%E0%B8%AB%E0%B9%89%E0%B8%96%E0%B8%B9%E0%B8%81%E0%B8%95%E0%B9%89%E0%B8%AD%E0%B8%87
     */
    protected static \$formats = array(
        '0 #### ####',
        '+66 #### ####',
        '0########',
    );

    /**
     * @var array Thai mobile phone number formats
     */
    protected static \$mobileFormats = array(
      '08# ### ####',
      '08 #### ####',
      '09# ### ####',
      '09 #### ####',
      '06# ### ####',
      '06 #### ####',
    );

    /**
     * Returns a Thai mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileFormats));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\th_TH;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    /**
     * @var array Thai phone number formats
     * @link http://www4.sit.kmutt.ac.th/content/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%82%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%AB%E0%B8%A1%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A5%E0%B8%82%E0%B9%82%E0%B8%97%E0%B8%A3%E0%B8%A8%E0%B8%B1%E0%B8%9E%E0%B8%97%E0%B9%8C%E0%B9%83%E0%B8%AB%E0%B9%89%E0%B8%96%E0%B8%B9%E0%B8%81%E0%B8%95%E0%B9%89%E0%B8%AD%E0%B8%87
     */
    protected static \$formats = array(
        '0 #### ####',
        '+66 #### ####',
        '0########',
    );

    /**
     * @var array Thai mobile phone number formats
     */
    protected static \$mobileFormats = array(
      '08# ### ####',
      '08 #### ####',
      '09# ### ####',
      '09 #### ####',
      '06# ### ####',
      '06 #### ####',
    );

    /**
     * Returns a Thai mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::\$mobileFormats));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/th_TH/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/th_TH/PhoneNumber.php");
    }
}
