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

/* vendor/swiftmailer/swiftmailer/tests/_samples/files/textfile.zip */
class __TwigTemplate_576860e31a3fcd7bff076c3ec8f4c7274608d75a78c386683d910c94c3917499 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/_samples/files/textfile.zip"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/_samples/files/textfile.zip"));

        // line 1
        echo "PK
\000\000\000\000ȺV8�N\"�.\000\000\000.\000\000\000\000\000textfile.txtUT\t\000w��Gw��GUx\000��This is part of a Swift Mailer v4 smoke test.
PK
\000\000\000\000ȺV8�N\"�.\000\000\000.\000\000\000\000
\000\000\000\000\000\000\000\000��\000\000\000\000textfile.txtUT\000w��GUx\000\000PK\000\000\000\000\000\000G\000\000\000m\000\000\000\000\000";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/_samples/files/textfile.zip";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("PK
\000\000\000\000ȺV8�N\"�.\000\000\000.\000\000\000\000\000textfile.txtUT\t\000w��Gw��GUx\000��This is part of a Swift Mailer v4 smoke test.
PK
\000\000\000\000ȺV8�N\"�.\000\000\000.\000\000\000\000\000\000\000\000\000\000\000\000��\000\000\000\000textfile.txtUT\000w��GUx\000\000PK\000\000\000\000\000\000G\000\000\000m\000\000\000\000\000", "vendor/swiftmailer/swiftmailer/tests/_samples/files/textfile.zip", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/_samples/files/textfile.zip");
    }
}
