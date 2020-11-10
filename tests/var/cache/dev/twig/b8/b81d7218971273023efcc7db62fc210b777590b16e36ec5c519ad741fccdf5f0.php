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

/* vendor/symfony/debug/Tests/Fixtures/ToStringThrower.php */
class __TwigTemplate_d7218fd58d8d34677b9ce358af855f4432671abd8da5ac442186b23614a214f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/Fixtures/ToStringThrower.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/Fixtures/ToStringThrower.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Debug\\Tests\\Fixtures;

class ToStringThrower
{
    private \$exception;

    public function __construct(\\Exception \$e)
    {
        \$this->exception = \$e;
    }

    public function __toString()
    {
        try {
            throw \$this->exception;
        } catch (\\Exception \$e) {
            // Using user_error() here is on purpose so we do not forget
            // that this alias also should work alongside with trigger_error().
            return trigger_error(\$e, E_USER_ERROR);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Tests/Fixtures/ToStringThrower.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Debug\\Tests\\Fixtures;

class ToStringThrower
{
    private \$exception;

    public function __construct(\\Exception \$e)
    {
        \$this->exception = \$e;
    }

    public function __toString()
    {
        try {
            throw \$this->exception;
        } catch (\\Exception \$e) {
            // Using user_error() here is on purpose so we do not forget
            // that this alias also should work alongside with trigger_error().
            return trigger_error(\$e, E_USER_ERROR);
        }
    }
}
", "vendor/symfony/debug/Tests/Fixtures/ToStringThrower.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Tests/Fixtures/ToStringThrower.php");
    }
}
