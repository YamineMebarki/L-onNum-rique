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

/* vendor/symfony/intl/Resources/data/languages/sr_Latn_BA.json */
class __TwigTemplate_5e3213eef8f068ed3c765c9f1ee829ae9084f00c53da4cbf3b43319c8a4410fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/sr_Latn_BA.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/sr_Latn_BA.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"arn\": \"mapudungun\",
        \"be\": \"bjeloruski\",
        \"bm\": \"bamanankan\",
        \"bn\": \"bangla\",
        \"gsw\": \"švajcarski nemački\",
        \"ht\": \"haićanski kreolski\",
        \"lo\": \"laoški\",
        \"moh\": \"mohok\",
        \"nqo\": \"n’ko\",
        \"shi\": \"južni šilha\",
        \"si\": \"sinhalski\",
        \"sw_CD\": \"kisvahili\",
        \"tzm\": \"centralnoatlaski tamašek\",
        \"xh\": \"isikosa\",
        \"zgh\": \"standardni marokanski tamašek\",
        \"zh_Hans\": \"pojednostavljeni kineski\",
        \"zh_Hant\": \"tradicionalni kineski\",
        \"zu\": \"isizulu\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/sr_Latn_BA.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Version\": \"36\",
    \"Names\": {
        \"arn\": \"mapudungun\",
        \"be\": \"bjeloruski\",
        \"bm\": \"bamanankan\",
        \"bn\": \"bangla\",
        \"gsw\": \"švajcarski nemački\",
        \"ht\": \"haićanski kreolski\",
        \"lo\": \"laoški\",
        \"moh\": \"mohok\",
        \"nqo\": \"n’ko\",
        \"shi\": \"južni šilha\",
        \"si\": \"sinhalski\",
        \"sw_CD\": \"kisvahili\",
        \"tzm\": \"centralnoatlaski tamašek\",
        \"xh\": \"isikosa\",
        \"zgh\": \"standardni marokanski tamašek\",
        \"zh_Hans\": \"pojednostavljeni kineski\",
        \"zh_Hant\": \"tradicionalni kineski\",
        \"zu\": \"isizulu\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/sr_Latn_BA.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/sr_Latn_BA.json");
    }
}
