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

/* vendor/symfony/intl/Tests/Data/Bundle/Reader/Fixtures/build.sh */
class __TwigTemplate_569adc36022d38a4ee693f90c96f7d4906311624c5c9bbec0b70ad2326bc77fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Reader/Fixtures/build.sh"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Reader/Fixtures/build.sh"));

        // line 1
        echo "#!/bin/bash

if [ -z \"\$ICU_BUILD_DIR\" ]; then
    echo \"Please set the ICU_BUILD_DIR environment variable\"
    exit
fi

if [ ! -d \"\$ICU_BUILD_DIR\" ]; then
    echo \"The directory \$ICU_BUILD_DIR pointed at by ICU_BUILD_DIR does not exist\"
    exit
fi

DIR=`dirname \$0`

rm \$DIR/res/*.res

LD_LIBRARY_PATH=\$ICU_BUILD_DIR/lib \$ICU_BUILD_DIR/bin/genrb -d \$DIR/res \$DIR/txt/*.txt
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Data/Bundle/Reader/Fixtures/build.sh";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#!/bin/bash

if [ -z \"\$ICU_BUILD_DIR\" ]; then
    echo \"Please set the ICU_BUILD_DIR environment variable\"
    exit
fi

if [ ! -d \"\$ICU_BUILD_DIR\" ]; then
    echo \"The directory \$ICU_BUILD_DIR pointed at by ICU_BUILD_DIR does not exist\"
    exit
fi

DIR=`dirname \$0`

rm \$DIR/res/*.res

LD_LIBRARY_PATH=\$ICU_BUILD_DIR/lib \$ICU_BUILD_DIR/bin/genrb -d \$DIR/res \$DIR/txt/*.txt
", "vendor/symfony/intl/Tests/Data/Bundle/Reader/Fixtures/build.sh", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Data/Bundle/Reader/Fixtures/build.sh");
    }
}
