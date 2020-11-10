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

/* vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/PhoneNumber.php */
class __TwigTemplate_40db3c4aa800225941a306659b140c3f150bae1f62fd9f451786a5c824e2c43e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\vi_VN;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$areaCodes = array(
        76, 281, 64, 781, 240, 241,
        75, 650, 56, 651, 62, 780,
        26, 710, 511, 500, 510, 230,
        61, 67, 59, 219, 351, 4,
        39, 320, 31, 711, 218, 321,
        8, 58, 77, 60, 231, 25,
        20, 63, 72, 350, 38, 30,
        68, 210, 57, 52, 510, 55,
        33, 53, 79, 22, 66, 36,
        280, 37, 54, 73, 74, 27,
        70, 211, 29,
        // Mobile
        96, 97, 98, 162, 163, 164, 165, 166, 167, 168, 169, // Viettel
        91, 94, 123, 124, 125, 127, 129, // Vinaphone
        90, 93, 120, 121, 122, 126, 128, // Mobifone
        92, 186, 188, // Vietnamobile
        99, 199, // Gmobile
        95, // Sfone
    );

    protected static \$formats = array(
        '7' => array(
            '0[a] ### ####',
            '(0[a]) ### ####',
            '0[a]-###-####',
            '(0[a])###-####',
            '84-[a]-###-####',
            '(84)([a])###-####',
            '+84-[a]-###-####',
        ),
        '8' => array(
            '0[a] #### ####',
            '(0[a]) #### ####',
            '0[a]-####-####',
            '(0[a])####-####',
            '84-[a]-####-####',
            '(84)([a])####-####',
            '+84-[a]-####-####',
        ),
    );

    public function phoneNumber()
    {
        \$areaCode = static::randomElement(static::\$areaCodes);
        \$areaCodeLength = strlen(\$areaCode);
        \$digits = 7;

        if (\$areaCodeLength < 2) {
            \$digits = 8;
        }

        return static::numerify(str_replace('[a]', \$areaCode, static::randomElement(static::\$formats[\$digits])));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\vi_VN;

class PhoneNumber extends \\Faker\\Provider\\PhoneNumber
{
    protected static \$areaCodes = array(
        76, 281, 64, 781, 240, 241,
        75, 650, 56, 651, 62, 780,
        26, 710, 511, 500, 510, 230,
        61, 67, 59, 219, 351, 4,
        39, 320, 31, 711, 218, 321,
        8, 58, 77, 60, 231, 25,
        20, 63, 72, 350, 38, 30,
        68, 210, 57, 52, 510, 55,
        33, 53, 79, 22, 66, 36,
        280, 37, 54, 73, 74, 27,
        70, 211, 29,
        // Mobile
        96, 97, 98, 162, 163, 164, 165, 166, 167, 168, 169, // Viettel
        91, 94, 123, 124, 125, 127, 129, // Vinaphone
        90, 93, 120, 121, 122, 126, 128, // Mobifone
        92, 186, 188, // Vietnamobile
        99, 199, // Gmobile
        95, // Sfone
    );

    protected static \$formats = array(
        '7' => array(
            '0[a] ### ####',
            '(0[a]) ### ####',
            '0[a]-###-####',
            '(0[a])###-####',
            '84-[a]-###-####',
            '(84)([a])###-####',
            '+84-[a]-###-####',
        ),
        '8' => array(
            '0[a] #### ####',
            '(0[a]) #### ####',
            '0[a]-####-####',
            '(0[a])####-####',
            '84-[a]-####-####',
            '(84)([a])####-####',
            '+84-[a]-####-####',
        ),
    );

    public function phoneNumber()
    {
        \$areaCode = static::randomElement(static::\$areaCodes);
        \$areaCodeLength = strlen(\$areaCode);
        \$digits = 7;

        if (\$areaCodeLength < 2) {
            \$digits = 8;
        }

        return static::numerify(str_replace('[a]', \$areaCode, static::randomElement(static::\$formats[\$digits])));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/PhoneNumber.php");
    }
}
