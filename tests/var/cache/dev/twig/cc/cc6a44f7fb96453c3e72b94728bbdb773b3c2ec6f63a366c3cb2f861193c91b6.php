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

/* vendor/fzaninotto/faker/src/Faker/Provider/da_DK/Internet.php */
class __TwigTemplate_b957991069fcf81208946cd482601b664987e921fd7cccec2c6dcacf05f4c8c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/da_DK/Internet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/da_DK/Internet.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\da_DK;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class Internet extends \\Faker\\Provider\\Internet
{
    /**
     * @var array Some safe email TLD.
     */
    protected static \$safeEmailTld = array(
        'org', 'com', 'net', 'dk', 'dk', 'dk',
    );

    /**
     * @var array Some email domains in Denmark.
     */
    protected static \$freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'yahoo.dk', 'hotmail.com', 'hotmail.dk', 'mail.dk', 'live.dk'
    );

    /**
     * @var array Some TLD.
     */
    protected static \$tld = array(
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'dk', 'dk', 'dk',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/da_DK/Internet.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\da_DK;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class Internet extends \\Faker\\Provider\\Internet
{
    /**
     * @var array Some safe email TLD.
     */
    protected static \$safeEmailTld = array(
        'org', 'com', 'net', 'dk', 'dk', 'dk',
    );

    /**
     * @var array Some email domains in Denmark.
     */
    protected static \$freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'yahoo.dk', 'hotmail.com', 'hotmail.dk', 'mail.dk', 'live.dk'
    );

    /**
     * @var array Some TLD.
     */
    protected static \$tld = array(
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'dk', 'dk', 'dk',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/da_DK/Internet.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/da_DK/Internet.php");
    }
}
