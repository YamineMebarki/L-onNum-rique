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

/* vendor/phpdocumentor/type-resolver/composer-require-config.json */
class __TwigTemplate_c4b4170d936de6835151f80e14df29702dc2ac42f5e3da0a5d8c377a3943af67 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/composer-require-config.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/composer-require-config.json"));

        // line 1
        echo "{
  \"symbol-whitelist\" : [
    \"null\", \"true\", \"false\",
    \"static\", \"self\", \"parent\",
    \"array\", \"string\", \"int\", \"float\", \"bool\", \"iterable\", \"callable\", \"void\", \"object\", \"XSLTProcessor\"
  ],
  \"php-core-extensions\" : [
    \"Core\",
    \"pcre\",
    \"Reflection\",
    \"tokenizer\",
    \"SPL\",
    \"standard\"
  ]
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/type-resolver/composer-require-config.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"symbol-whitelist\" : [
    \"null\", \"true\", \"false\",
    \"static\", \"self\", \"parent\",
    \"array\", \"string\", \"int\", \"float\", \"bool\", \"iterable\", \"callable\", \"void\", \"object\", \"XSLTProcessor\"
  ],
  \"php-core-extensions\" : [
    \"Core\",
    \"pcre\",
    \"Reflection\",
    \"tokenizer\",
    \"SPL\",
    \"standard\"
  ]
}
", "vendor/phpdocumentor/type-resolver/composer-require-config.json", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/type-resolver/composer-require-config.json");
    }
}
