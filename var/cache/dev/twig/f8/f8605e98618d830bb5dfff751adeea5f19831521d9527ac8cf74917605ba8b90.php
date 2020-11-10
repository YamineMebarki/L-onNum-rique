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

/* vendor/fzaninotto/faker/src/Faker/Provider/ko_KR/PhoneNumber.php */
class __TwigTemplate_71b768f95073bad7d0d8b0de9db17d4cbf183f2afcf874f659e2920b8ee2c280 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ko_KR/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ko_KR/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ko_KR;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    //reference : https://ko.wikipedia.org/wiki/%EB%8C%80%ED%95%9C%EB%AF%BC%EA%B5%AD%EC%9D%98_%EC%A0%84%ED%99%94%EB%B2%88%ED%98%B8_%EC%B2%B4%EA%B3%84
    
    protected static \$formats = array(
        //local area phone format
        '070-####-####',
        '02-####-####',
        '03#-####-####',
        '04#-####-####',
        '05#-####-####',
        '06#-####-####',
        
        //cell phone format
        '010-####-####',
        
        //others: Intelligent Network(기간통신사업자)
        '15##-####',
        '16##-####',
        '18##-####',
    );
    
    public function localAreaPhoneNumber()
    {
        \$format = self::randomElement(array_slice(static::\$formats, 0, 6));

        return self::numerify(\$this->generator->parse(\$format));
    }
    
    
    
    public function cellPhoneNumber()
    {
        \$format = self::randomElement(array_slice(static::\$formats, 6, 1));

        return self::numerify(\$this->generator->parse(\$format));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ko_KR/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ko_KR;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    //reference : https://ko.wikipedia.org/wiki/%EB%8C%80%ED%95%9C%EB%AF%BC%EA%B5%AD%EC%9D%98_%EC%A0%84%ED%99%94%EB%B2%88%ED%98%B8_%EC%B2%B4%EA%B3%84
    
    protected static \$formats = array(
        //local area phone format
        '070-####-####',
        '02-####-####',
        '03#-####-####',
        '04#-####-####',
        '05#-####-####',
        '06#-####-####',
        
        //cell phone format
        '010-####-####',
        
        //others: Intelligent Network(기간통신사업자)
        '15##-####',
        '16##-####',
        '18##-####',
    );
    
    public function localAreaPhoneNumber()
    {
        \$format = self::randomElement(array_slice(static::\$formats, 0, 6));

        return self::numerify(\$this->generator->parse(\$format));
    }
    
    
    
    public function cellPhoneNumber()
    {
        \$format = self::randomElement(array_slice(static::\$formats, 6, 1));

        return self::numerify(\$this->generator->parse(\$format));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ko_KR/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ko_KR/PhoneNumber.php");
    }
}
