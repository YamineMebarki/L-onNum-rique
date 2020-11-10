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

/* vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Internet.php */
class __TwigTemplate_44aa098d96eacfc7cff2534b66ab5fa5fe52e19739988e3b64a125631cee1f56 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Internet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Internet.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\vi_VN;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$tld = array('com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'vn', 'com.vn', 'biz.vn', 'edu.vn', 'gov.vn', 'net.vn', 'org.vn', 'int.vn', 'ac.vn', 'pro.vn', 'info.vn', 'health.vn', 'name.vn', 'mil.vn');
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Internet.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\vi_VN;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$tld = array('com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'vn', 'com.vn', 'biz.vn', 'edu.vn', 'gov.vn', 'net.vn', 'org.vn', 'int.vn', 'ac.vn', 'pro.vn', 'info.vn', 'health.vn', 'name.vn', 'mil.vn');
}
", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Internet.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Internet.php");
    }
}
