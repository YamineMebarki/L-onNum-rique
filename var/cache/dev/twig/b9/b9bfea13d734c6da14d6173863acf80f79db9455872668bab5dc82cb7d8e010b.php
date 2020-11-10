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

/* vendor/symfony/dependency-injection/Tests/Fixtures/ini/types.ini */
class __TwigTemplate_d11dae4d881c10317b3552e18932133cbe97f62d97497fc3ebe3a2e8245f6aca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/ini/types.ini"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/ini/types.ini"));

        // line 1
        echo "[parameters]
  true = true
  true_comment = true ; comment
  false = false
  null = null
  on = on
  off = off
  yes = yes
  no = no
  none = none
  constant = PHP_VERSION
  12 = 12
  12_string = '12'
  12_quoted_number = \"12\"
  12_comment = 12 ; comment
  12_string_comment = '12' ; comment
  12_quoted_number_comment = \"12\" ; comment
  -12 = -12
  0 = 0
  1 = 1
  0b0110 = 0b0110
  11112222333344445555 = 1111,2222,3333,4444,5555
  0777 = 0777
  255 = 0xFF
  100.0 = 1e2
  -120.0 = -1.2E2
  -10100.1 = -10100.1
  -10,100.1 = -10,100.1
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/ini/types.ini";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("[parameters]
  true = true
  true_comment = true ; comment
  false = false
  null = null
  on = on
  off = off
  yes = yes
  no = no
  none = none
  constant = PHP_VERSION
  12 = 12
  12_string = '12'
  12_quoted_number = \"12\"
  12_comment = 12 ; comment
  12_string_comment = '12' ; comment
  12_quoted_number_comment = \"12\" ; comment
  -12 = -12
  0 = 0
  1 = 1
  0b0110 = 0b0110
  11112222333344445555 = 1111,2222,3333,4444,5555
  0777 = 0777
  255 = 0xFF
  100.0 = 1e2
  -120.0 = -1.2E2
  -10100.1 = -10100.1
  -10,100.1 = -10,100.1
", "vendor/symfony/dependency-injection/Tests/Fixtures/ini/types.ini", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/ini/types.ini");
    }
}
