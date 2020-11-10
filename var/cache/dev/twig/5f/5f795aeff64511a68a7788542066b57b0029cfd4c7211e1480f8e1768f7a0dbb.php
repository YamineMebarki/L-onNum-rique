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

/* vendor/swiftmailer/swiftmailer/tests/_samples/dkim/dkim.test.pub */
class __TwigTemplate_47366e5c89c54a8551a03dcac253f332808d8c85acb8224343f5947419b068c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/_samples/dkim/dkim.test.pub"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/_samples/dkim/dkim.test.pub"));

        // line 1
        echo "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDZeUdi1RKnm9cRYNn6E24xxrRT
ouh3Va8JOEHQ5SB018lvbjwH2lW5mZ/I0kh/dHsTN0zcN0VE62WIbnLreMk/af/4
Pg1i93+c9TmfXmoropsmdLosw0tjq50jGbBqtHZNJYAokP/u3uUuRw8g0V/O4zlQ
3GlO/PDH7xDQzekl9wIDAQAB
-----END PUBLIC KEY-----
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/_samples/dkim/dkim.test.pub";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDZeUdi1RKnm9cRYNn6E24xxrRT
ouh3Va8JOEHQ5SB018lvbjwH2lW5mZ/I0kh/dHsTN0zcN0VE62WIbnLreMk/af/4
Pg1i93+c9TmfXmoropsmdLosw0tjq50jGbBqtHZNJYAokP/u3uUuRw8g0V/O4zlQ
3GlO/PDH7xDQzekl9wIDAQAB
-----END PUBLIC KEY-----
", "vendor/swiftmailer/swiftmailer/tests/_samples/dkim/dkim.test.pub", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/_samples/dkim/dkim.test.pub");
    }
}
