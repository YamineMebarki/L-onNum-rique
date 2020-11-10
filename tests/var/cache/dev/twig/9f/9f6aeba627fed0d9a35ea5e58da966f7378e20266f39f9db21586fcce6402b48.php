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

/* vendor/symfony/intl/Resources/data/languages/sw_KE.json */
class __TwigTemplate_8b403d2ef90651ae2da47f4c0dae84dd04efcd838c850a5680bbb692dda729ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/sw_KE.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/languages/sw_KE.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ar_001\": \"Kiarabu sanifu\",
        \"arq\": \"Kiarabu cha Aljeria\",
        \"as\": \"Kiasamisi\",
        \"chr\": \"Kicheroki\",
        \"cu\": \"Kislovakia cha Kanisa la Jadi\",
        \"gaa\": \"Kiga\",
        \"grc\": \"Kigiriki cha Kale\",
        \"gwi\": \"Kigwichʼin\",
        \"hsb\": \"Kisorbia cha Juu\",
        \"hup\": \"Kihupa\",
        \"hy\": \"Kiamenia\",
        \"inh\": \"Kiingushi\",
        \"jbo\": \"Kilojbani\",
        \"kac\": \"Kikachini\",
        \"khq\": \"Kikoyrachiini\",
        \"kkj\": \"Kikako\",
        \"km\": \"Kikhmeri\",
        \"kn\": \"Kikanada\",
        \"koi\": \"Kikomipermyak\",
        \"kru\": \"Kikurukh\",
        \"lag\": \"Kilangi\",
        \"lam\": \"Kilamba\",
        \"li\": \"Kilimbugishi\",
        \"mdf\": \"Kimoksha\",
        \"mic\": \"Kimi'kmak\",
        \"mk\": \"Kimasedonia\",
        \"moh\": \"Kimohoki\",
        \"nnh\": \"Kiingiemboon\",
        \"nqo\": \"Kiin’ko\",
        \"or\": \"Kiodia\",
        \"pcm\": \"Kipijini cha Nigeria\",
        \"ro_MD\": \"Kimoldova cha Romania\",
        \"ses\": \"Kikoyraborosenni\",
        \"shu\": \"Kiarabu cha Chadi\",
        \"srn\": \"Kisranantongo\",
        \"sw_CD\": \"Kiswahili cha Kongo\",
        \"swb\": \"Kikomoro\",
        \"syr\": \"Kisiria\",
        \"tw\": \"Kitwi\",
        \"twq\": \"Kitasawak\",
        \"udm\": \"Kiudumurti\",
        \"ug\": \"Kiuiguri\",
        \"zgh\": \"Kitamazighati Sanifu cha Moroko\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/languages/sw_KE.json";
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
        \"ar_001\": \"Kiarabu sanifu\",
        \"arq\": \"Kiarabu cha Aljeria\",
        \"as\": \"Kiasamisi\",
        \"chr\": \"Kicheroki\",
        \"cu\": \"Kislovakia cha Kanisa la Jadi\",
        \"gaa\": \"Kiga\",
        \"grc\": \"Kigiriki cha Kale\",
        \"gwi\": \"Kigwichʼin\",
        \"hsb\": \"Kisorbia cha Juu\",
        \"hup\": \"Kihupa\",
        \"hy\": \"Kiamenia\",
        \"inh\": \"Kiingushi\",
        \"jbo\": \"Kilojbani\",
        \"kac\": \"Kikachini\",
        \"khq\": \"Kikoyrachiini\",
        \"kkj\": \"Kikako\",
        \"km\": \"Kikhmeri\",
        \"kn\": \"Kikanada\",
        \"koi\": \"Kikomipermyak\",
        \"kru\": \"Kikurukh\",
        \"lag\": \"Kilangi\",
        \"lam\": \"Kilamba\",
        \"li\": \"Kilimbugishi\",
        \"mdf\": \"Kimoksha\",
        \"mic\": \"Kimi'kmak\",
        \"mk\": \"Kimasedonia\",
        \"moh\": \"Kimohoki\",
        \"nnh\": \"Kiingiemboon\",
        \"nqo\": \"Kiin’ko\",
        \"or\": \"Kiodia\",
        \"pcm\": \"Kipijini cha Nigeria\",
        \"ro_MD\": \"Kimoldova cha Romania\",
        \"ses\": \"Kikoyraborosenni\",
        \"shu\": \"Kiarabu cha Chadi\",
        \"srn\": \"Kisranantongo\",
        \"sw_CD\": \"Kiswahili cha Kongo\",
        \"swb\": \"Kikomoro\",
        \"syr\": \"Kisiria\",
        \"tw\": \"Kitwi\",
        \"twq\": \"Kitasawak\",
        \"udm\": \"Kiudumurti\",
        \"ug\": \"Kiuiguri\",
        \"zgh\": \"Kitamazighati Sanifu cha Moroko\"
    }
}
", "vendor/symfony/intl/Resources/data/languages/sw_KE.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/languages/sw_KE.json");
    }
}
