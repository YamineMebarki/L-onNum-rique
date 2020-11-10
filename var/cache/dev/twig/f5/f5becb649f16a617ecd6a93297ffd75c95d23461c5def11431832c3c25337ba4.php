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

/* vendor/fzaninotto/faker/src/Faker/UniqueGenerator.php */
class __TwigTemplate_c2395168ab0e60a2b5a2a395cd50d787c6d8889101ff13d2ce48781694bb0404 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/UniqueGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/UniqueGenerator.php"));

        // line 1
        echo "<?php

namespace Faker;

/**
 * Proxy for other generators, to return only unique values. Works with
 * Faker\\Generator\\Base->unique()
 */
class UniqueGenerator
{
    protected \$generator;
    protected \$maxRetries;
    protected \$uniques = array();

    /**
     * @param Generator \$generator
     * @param integer \$maxRetries
     */
    public function __construct(Generator \$generator, \$maxRetries = 10000)
    {
        \$this->generator = \$generator;
        \$this->maxRetries = \$maxRetries;
    }

    /**
     * Catch and proxy all generator calls but return only unique values
     * @param string \$attribute
     * @return mixed
     */
    public function __get(\$attribute)
    {
        return \$this->__call(\$attribute, array());
    }

    /**
     * Catch and proxy all generator calls with arguments but return only unique values
     * @param string \$name
     * @param array \$arguments
     * @return mixed
     */
    public function __call(\$name, \$arguments)
    {
        if (!isset(\$this->uniques[\$name])) {
            \$this->uniques[\$name] = array();
        }
        \$i = 0;
        do {
            \$res = call_user_func_array(array(\$this->generator, \$name), \$arguments);
            \$i++;
            if (\$i > \$this->maxRetries) {
                throw new \\OverflowException(sprintf('Maximum retries of %d reached without finding a unique value', \$this->maxRetries));
            }
        } while (array_key_exists(serialize(\$res), \$this->uniques[\$name]));
        \$this->uniques[\$name][serialize(\$res)]= null;

        return \$res;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/UniqueGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker;

/**
 * Proxy for other generators, to return only unique values. Works with
 * Faker\\Generator\\Base->unique()
 */
class UniqueGenerator
{
    protected \$generator;
    protected \$maxRetries;
    protected \$uniques = array();

    /**
     * @param Generator \$generator
     * @param integer \$maxRetries
     */
    public function __construct(Generator \$generator, \$maxRetries = 10000)
    {
        \$this->generator = \$generator;
        \$this->maxRetries = \$maxRetries;
    }

    /**
     * Catch and proxy all generator calls but return only unique values
     * @param string \$attribute
     * @return mixed
     */
    public function __get(\$attribute)
    {
        return \$this->__call(\$attribute, array());
    }

    /**
     * Catch and proxy all generator calls with arguments but return only unique values
     * @param string \$name
     * @param array \$arguments
     * @return mixed
     */
    public function __call(\$name, \$arguments)
    {
        if (!isset(\$this->uniques[\$name])) {
            \$this->uniques[\$name] = array();
        }
        \$i = 0;
        do {
            \$res = call_user_func_array(array(\$this->generator, \$name), \$arguments);
            \$i++;
            if (\$i > \$this->maxRetries) {
                throw new \\OverflowException(sprintf('Maximum retries of %d reached without finding a unique value', \$this->maxRetries));
            }
        } while (array_key_exists(serialize(\$res), \$this->uniques[\$name]));
        \$this->uniques[\$name][serialize(\$res)]= null;

        return \$res;
    }
}
", "vendor/fzaninotto/faker/src/Faker/UniqueGenerator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/UniqueGenerator.php");
    }
}
