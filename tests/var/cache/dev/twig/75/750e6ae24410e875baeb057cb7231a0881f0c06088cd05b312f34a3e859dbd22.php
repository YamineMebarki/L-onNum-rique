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

/* vendor/symfony/intl/Resources/bin/compile */
class __TwigTemplate_1e38a8b39335152421afc11655ab38410b1e3ae4ce63aec5f3977aafb39c0d3f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/bin/compile"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/bin/compile"));

        // line 1
        echo "#!/usr/bin/env bash

[[ \$1 == force ]] && docker pull jakzal/php-intl
[[ ! -d /tmp/symfony/icu ]] && mkdir -p /tmp/symfony/icu

docker run \\
    -it --rm --name symfony-intl \\
    -u \$(id -u):\$(id -g) \\
    -v /tmp/symfony/icu:/tmp \\
    -v \$(pwd):/symfony \\
    -w /symfony \\
    jakzal/php-intl:latest \\
    php src/Symfony/Component/Intl/Resources/bin/update-data.php
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/bin/compile";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#!/usr/bin/env bash

[[ \$1 == force ]] && docker pull jakzal/php-intl
[[ ! -d /tmp/symfony/icu ]] && mkdir -p /tmp/symfony/icu

docker run \\
    -it --rm --name symfony-intl \\
    -u \$(id -u):\$(id -g) \\
    -v /tmp/symfony/icu:/tmp \\
    -v \$(pwd):/symfony \\
    -w /symfony \\
    jakzal/php-intl:latest \\
    php src/Symfony/Component/Intl/Resources/bin/update-data.php
", "vendor/symfony/intl/Resources/bin/compile", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/bin/compile");
    }
}
