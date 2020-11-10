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

/* vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Internet.php */
class __TwigTemplate_e8ca1f35565ae96e9d0dad64c7fa457a9c4e57adc5adf5466533f455dc84a580 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Internet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Internet.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\de_DE;

class Internet extends \\Faker\\Provider\\Internet
{
    /**
     * @link https://www.statista.com/statistics/446418/most-popular-e-mail-providers-germany/
     * @link http://blog.shuttlecloud.com/the-10-most-popular-email-providers-in-germany
     */
    protected static \$freeEmailDomain = array(
        'web.de',
        'gmail.com',
        'hotmail.de',
        'yahoo.de',
        'googlemail.com',
        'aol.de',
        'gmx.de',
        'freenet.de',
        'posteo.de',
        'mail.de',
        'live.de',
        't-online.de'
    );
    protected static \$tld = array('com', 'com', 'com', 'net', 'org', 'de', 'de', 'de');
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Internet.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\de_DE;

class Internet extends \\Faker\\Provider\\Internet
{
    /**
     * @link https://www.statista.com/statistics/446418/most-popular-e-mail-providers-germany/
     * @link http://blog.shuttlecloud.com/the-10-most-popular-email-providers-in-germany
     */
    protected static \$freeEmailDomain = array(
        'web.de',
        'gmail.com',
        'hotmail.de',
        'yahoo.de',
        'googlemail.com',
        'aol.de',
        'gmx.de',
        'freenet.de',
        'posteo.de',
        'mail.de',
        'live.de',
        't-online.de'
    );
    protected static \$tld = array('com', 'com', 'com', 'net', 'org', 'de', 'de', 'de');
}
", "vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Internet.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/de_DE/Internet.php");
    }
}
