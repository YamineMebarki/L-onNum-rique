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

/* vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Internet.php */
class __TwigTemplate_8d5b65effc5f12e2ada7ee407c4e887286266d9eba67c50d5c136aedf6719cd7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Internet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Internet.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ka_GE;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$freeEmailDomain = array(
        'posta.ge', 'boom.ge', 'hotmail.com', 'gmail.com', 'yahoo.com', 'mail.ru', 'avoe.ge'
    );

    protected static \$tld = array(
        'ge', 'ge', 'ge', 'ge', 'ge', 'com.ge', 'edu.ge', 'net.ge', 'org.ge',
        'pvt.ge', 'gov.ge', 'mil.ge', 'com', 'biz', 'info', 'net', 'org'
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Internet.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ka_GE;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$freeEmailDomain = array(
        'posta.ge', 'boom.ge', 'hotmail.com', 'gmail.com', 'yahoo.com', 'mail.ru', 'avoe.ge'
    );

    protected static \$tld = array(
        'ge', 'ge', 'ge', 'ge', 'ge', 'com.ge', 'edu.ge', 'net.ge', 'org.ge',
        'pvt.ge', 'gov.ge', 'mil.ge', 'com', 'biz', 'info', 'net', 'org'
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Internet.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ka_GE/Internet.php");
    }
}
