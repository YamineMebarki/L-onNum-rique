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

/* vendor/fzaninotto/faker/src/Faker/Documentor.php */
class __TwigTemplate_dd76e8786c44e715114a4449f78566a19c32bb4315752d51c89d9944bed444a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Documentor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Documentor.php"));

        // line 1
        echo "<?php

namespace Faker;

class Documentor
{
    protected \$generator;

    /**
     * @param Generator \$generator
     */
    public function __construct(Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * @return array
     */
    public function getFormatters()
    {
        \$formatters = array();
        \$providers = array_reverse(\$this->generator->getProviders());
        \$providers[]= new Provider\\Base(\$this->generator);
        foreach (\$providers as \$provider) {
            \$providerClass = get_class(\$provider);
            \$formatters[\$providerClass] = array();
            \$refl = new \\ReflectionObject(\$provider);
            foreach (\$refl->getMethods(\\ReflectionMethod::IS_PUBLIC) as \$reflmethod) {
                if (\$reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && \$providerClass != 'Faker\\Provider\\Base') {
                    continue;
                }
                \$methodName = \$reflmethod->name;
                if (\$reflmethod->isConstructor()) {
                    continue;
                }
                \$parameters = array();
                foreach (\$reflmethod->getParameters() as \$reflparameter) {
                    \$parameter = '\$'. \$reflparameter->getName();
                    if (\$reflparameter->isDefaultValueAvailable()) {
                        \$parameter .= ' = ' . var_export(\$reflparameter->getDefaultValue(), true);
                    }
                    \$parameters []= \$parameter;
                }
                \$parameters = \$parameters ? '('. join(', ', \$parameters) . ')' : '';
                try {
                    \$example = \$this->generator->format(\$methodName);
                } catch (\\InvalidArgumentException \$e) {
                    \$example = '';
                }
                if (is_array(\$example)) {
                    \$example = \"array('\". join(\"', '\", \$example) . \"')\";
                } elseif (\$example instanceof \\DateTime) {
                    \$example = \"DateTime('\" . \$example->format('Y-m-d H:i:s') . \"')\";
                } elseif (\$example instanceof Generator || \$example instanceof UniqueGenerator) { // modifier
                    \$example = '';
                } else {
                    \$example = var_export(\$example, true);
                }
                \$formatters[\$providerClass][\$methodName . \$parameters] = \$example;
            }
        }

        return \$formatters;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Documentor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker;

class Documentor
{
    protected \$generator;

    /**
     * @param Generator \$generator
     */
    public function __construct(Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * @return array
     */
    public function getFormatters()
    {
        \$formatters = array();
        \$providers = array_reverse(\$this->generator->getProviders());
        \$providers[]= new Provider\\Base(\$this->generator);
        foreach (\$providers as \$provider) {
            \$providerClass = get_class(\$provider);
            \$formatters[\$providerClass] = array();
            \$refl = new \\ReflectionObject(\$provider);
            foreach (\$refl->getMethods(\\ReflectionMethod::IS_PUBLIC) as \$reflmethod) {
                if (\$reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && \$providerClass != 'Faker\\Provider\\Base') {
                    continue;
                }
                \$methodName = \$reflmethod->name;
                if (\$reflmethod->isConstructor()) {
                    continue;
                }
                \$parameters = array();
                foreach (\$reflmethod->getParameters() as \$reflparameter) {
                    \$parameter = '\$'. \$reflparameter->getName();
                    if (\$reflparameter->isDefaultValueAvailable()) {
                        \$parameter .= ' = ' . var_export(\$reflparameter->getDefaultValue(), true);
                    }
                    \$parameters []= \$parameter;
                }
                \$parameters = \$parameters ? '('. join(', ', \$parameters) . ')' : '';
                try {
                    \$example = \$this->generator->format(\$methodName);
                } catch (\\InvalidArgumentException \$e) {
                    \$example = '';
                }
                if (is_array(\$example)) {
                    \$example = \"array('\". join(\"', '\", \$example) . \"')\";
                } elseif (\$example instanceof \\DateTime) {
                    \$example = \"DateTime('\" . \$example->format('Y-m-d H:i:s') . \"')\";
                } elseif (\$example instanceof Generator || \$example instanceof UniqueGenerator) { // modifier
                    \$example = '';
                } else {
                    \$example = var_export(\$example, true);
                }
                \$formatters[\$providerClass][\$methodName . \$parameters] = \$example;
            }
        }

        return \$formatters;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Documentor.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Documentor.php");
    }
}
