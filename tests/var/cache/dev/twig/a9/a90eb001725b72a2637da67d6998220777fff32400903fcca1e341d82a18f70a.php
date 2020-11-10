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

/* vendor/fzaninotto/faker/src/Faker/Provider/PhoneNumber.php */
class __TwigTemplate_5aa3ccc33d4421c0e5520e4fab07b34df371a4437e72f3008519c6bd5c2e57f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/PhoneNumber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/PhoneNumber.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

use Faker\\Calculator\\Luhn;

class PhoneNumber extends Base
{
    protected static \$formats = array('###-###-###');

    /**
     * @example '555-123-546'
     */
    public function phoneNumber()
    {
        return static::numerify(\$this->generator->parse(static::randomElement(static::\$formats)));
    }

    /**
     * @example +27113456789
     * @return string
     */
    public function e164PhoneNumber()
    {
        \$formats = array('+%############');
        return static::numerify(\$this->generator->parse(static::randomElement(\$formats)));
    }

    /**
     * International Mobile Equipment Identity (IMEI)
     *
     * @link http://en.wikipedia.org/wiki/International_Mobile_Station_Equipment_Identity
     * @link http://imei-number.com/imei-validation-check/
     * @example '720084494799532'
     * @return int \$imei
     */
    public function imei()
    {
        \$imei = (string) static::numerify('##############');
        \$imei .= Luhn::computeCheckDigit(\$imei);
        return \$imei;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/PhoneNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider;

use Faker\\Calculator\\Luhn;

class PhoneNumber extends Base
{
    protected static \$formats = array('###-###-###');

    /**
     * @example '555-123-546'
     */
    public function phoneNumber()
    {
        return static::numerify(\$this->generator->parse(static::randomElement(static::\$formats)));
    }

    /**
     * @example +27113456789
     * @return string
     */
    public function e164PhoneNumber()
    {
        \$formats = array('+%############');
        return static::numerify(\$this->generator->parse(static::randomElement(\$formats)));
    }

    /**
     * International Mobile Equipment Identity (IMEI)
     *
     * @link http://en.wikipedia.org/wiki/International_Mobile_Station_Equipment_Identity
     * @link http://imei-number.com/imei-validation-check/
     * @example '720084494799532'
     * @return int \$imei
     */
    public function imei()
    {
        \$imei = (string) static::numerify('##############');
        \$imei .= Luhn::computeCheckDigit(\$imei);
        return \$imei;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/PhoneNumber.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/PhoneNumber.php");
    }
}
