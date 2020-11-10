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

/* vendor/symfony/intl/Resources/data/currencies/mi.json */
class __TwigTemplate_ae9544bcc4128506422a3129d1a677b27a1c694314e45d86a68b1804981c793e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/mi.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/currencies/mi.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"ANG\": [
            \"ANG\",
            \"ANG\"
        ],
        \"ARS\": [
            \"ARS\",
            \"ARS\"
        ],
        \"AWG\": [
            \"AWG\",
            \"AWG\"
        ],
        \"BBD\": [
            \"BBD\",
            \"BBD\"
        ],
        \"BMD\": [
            \"BMD\",
            \"BMD\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Real Parahi\"
        ],
        \"BSD\": [
            \"BSD\",
            \"BSD\"
        ],
        \"BZD\": [
            \"BZD\",
            \"BZD\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"CAD\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Haina\"
        ],
        \"CRC\": [
            \"CRC\",
            \"CRC\"
        ],
        \"CUC\": [
            \"CUC\",
            \"CUC\"
        ],
        \"CUP\": [
            \"CUP\",
            \"CUP\"
        ],
        \"DOP\": [
            \"DOP\",
            \"DOP\"
        ],
        \"EUR\": [
            \"€\",
            \"Euro\"
        ],
        \"GBP\": [
            \"£\",
            \"Pāuna Piritene\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"GTQ\"
        ],
        \"HNL\": [
            \"HNL\",
            \"HNL\"
        ],
        \"HTG\": [
            \"HTG\",
            \"HTG\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupī Iniana\"
        ],
        \"JMD\": [
            \"JMD\",
            \"JMD\"
        ],
        \"JPY\": [
            \"¥\",
            \"Yen Hapanihi\"
        ],
        \"KYD\": [
            \"KYD\",
            \"KYD\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"MXN\"
        ],
        \"NIO\": [
            \"NIO\",
            \"NIO\"
        ],
        \"NZD\": [
            \"\$\",
            \"Tāra o Aotearoa\"
        ],
        \"PAB\": [
            \"PAB\",
            \"PAB\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rūpera Ruhiana\"
        ],
        \"TTD\": [
            \"TTD\",
            \"TTD\"
        ],
        \"USD\": [
            \"US\$\",
            \"Tāra US\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"XCD\"
        ]
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/currencies/mi.json";
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
        \"ANG\": [
            \"ANG\",
            \"ANG\"
        ],
        \"ARS\": [
            \"ARS\",
            \"ARS\"
        ],
        \"AWG\": [
            \"AWG\",
            \"AWG\"
        ],
        \"BBD\": [
            \"BBD\",
            \"BBD\"
        ],
        \"BMD\": [
            \"BMD\",
            \"BMD\"
        ],
        \"BRL\": [
            \"R\$\",
            \"Real Parahi\"
        ],
        \"BSD\": [
            \"BSD\",
            \"BSD\"
        ],
        \"BZD\": [
            \"BZD\",
            \"BZD\"
        ],
        \"CAD\": [
            \"CA\$\",
            \"CAD\"
        ],
        \"CNY\": [
            \"CN¥\",
            \"Yuan Haina\"
        ],
        \"CRC\": [
            \"CRC\",
            \"CRC\"
        ],
        \"CUC\": [
            \"CUC\",
            \"CUC\"
        ],
        \"CUP\": [
            \"CUP\",
            \"CUP\"
        ],
        \"DOP\": [
            \"DOP\",
            \"DOP\"
        ],
        \"EUR\": [
            \"€\",
            \"Euro\"
        ],
        \"GBP\": [
            \"£\",
            \"Pāuna Piritene\"
        ],
        \"GTQ\": [
            \"GTQ\",
            \"GTQ\"
        ],
        \"HNL\": [
            \"HNL\",
            \"HNL\"
        ],
        \"HTG\": [
            \"HTG\",
            \"HTG\"
        ],
        \"INR\": [
            \"₹\",
            \"Rupī Iniana\"
        ],
        \"JMD\": [
            \"JMD\",
            \"JMD\"
        ],
        \"JPY\": [
            \"¥\",
            \"Yen Hapanihi\"
        ],
        \"KYD\": [
            \"KYD\",
            \"KYD\"
        ],
        \"MXN\": [
            \"MX\$\",
            \"MXN\"
        ],
        \"NIO\": [
            \"NIO\",
            \"NIO\"
        ],
        \"NZD\": [
            \"\$\",
            \"Tāra o Aotearoa\"
        ],
        \"PAB\": [
            \"PAB\",
            \"PAB\"
        ],
        \"RUB\": [
            \"RUB\",
            \"Rūpera Ruhiana\"
        ],
        \"TTD\": [
            \"TTD\",
            \"TTD\"
        ],
        \"USD\": [
            \"US\$\",
            \"Tāra US\"
        ],
        \"XCD\": [
            \"EC\$\",
            \"XCD\"
        ]
    }
}
", "vendor/symfony/intl/Resources/data/currencies/mi.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/currencies/mi.json");
    }
}
