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

/* vendor/symfony/intl/Resources/data/locales/uz_Arab.json */
class __TwigTemplate_6d1cc3e848f0537a123736c0271b6299844c4f31d14f99150d318267eef6de39 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/uz_Arab.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/locales/uz_Arab.json"));

        // line 1
        echo "{
    \"Names\": {
        \"fa\": \"دری\",
        \"fa_AF\": \"دری (افغانستان)\",
        \"fa_IR\": \"دری (Eron)\",
        \"pa_Arab\": \"panjobcha (عربی)\",
        \"pa_Arab_PK\": \"panjobcha (عربی, Pokiston)\",
        \"ps\": \"پشتو\",
        \"ps_AF\": \"پشتو (افغانستان)\",
        \"ps_PK\": \"پشتو (Pokiston)\",
        \"uz\": \"اوزبیک\",
        \"uz_AF\": \"اوزبیک (افغانستان)\",
        \"uz_Arab\": \"اوزبیک (عربی)\",
        \"uz_Arab_AF\": \"اوزبیک (عربی, افغانستان)\",
        \"uz_Cyrl\": \"اوزبیک (kirill)\",
        \"uz_Cyrl_UZ\": \"اوزبیک (kirill, Oʻzbekiston)\",
        \"uz_Latn\": \"اوزبیک (lotin)\",
        \"uz_Latn_UZ\": \"اوزبیک (lotin, Oʻzbekiston)\",
        \"uz_UZ\": \"اوزبیک (Oʻzbekiston)\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/locales/uz_Arab.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Names\": {
        \"fa\": \"دری\",
        \"fa_AF\": \"دری (افغانستان)\",
        \"fa_IR\": \"دری (Eron)\",
        \"pa_Arab\": \"panjobcha (عربی)\",
        \"pa_Arab_PK\": \"panjobcha (عربی, Pokiston)\",
        \"ps\": \"پشتو\",
        \"ps_AF\": \"پشتو (افغانستان)\",
        \"ps_PK\": \"پشتو (Pokiston)\",
        \"uz\": \"اوزبیک\",
        \"uz_AF\": \"اوزبیک (افغانستان)\",
        \"uz_Arab\": \"اوزبیک (عربی)\",
        \"uz_Arab_AF\": \"اوزبیک (عربی, افغانستان)\",
        \"uz_Cyrl\": \"اوزبیک (kirill)\",
        \"uz_Cyrl_UZ\": \"اوزبیک (kirill, Oʻzbekiston)\",
        \"uz_Latn\": \"اوزبیک (lotin)\",
        \"uz_Latn_UZ\": \"اوزبیک (lotin, Oʻzbekiston)\",
        \"uz_UZ\": \"اوزبیک (Oʻzbekiston)\"
    }
}
", "vendor/symfony/intl/Resources/data/locales/uz_Arab.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/locales/uz_Arab.json");
    }
}
