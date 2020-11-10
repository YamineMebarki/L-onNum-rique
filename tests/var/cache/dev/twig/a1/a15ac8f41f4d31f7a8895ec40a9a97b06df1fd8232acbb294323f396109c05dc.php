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

/* vendor/fzaninotto/faker/src/Faker/DefaultGenerator.php */
class __TwigTemplate_f020fdb3380a224df53a8c3f07d947bd66f6b66a30304c23ac3f08ae0d079c6d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/DefaultGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/DefaultGenerator.php"));

        // line 1
        echo "<?php

namespace Faker;

/**
 * This generator returns a default value for all called properties
 * and methods. It works with Faker\\Generator\\Base->optional().
 */
class DefaultGenerator
{
    protected \$default;

    public function __construct(\$default = null)
    {
        \$this->default = \$default;
    }

    /**
     * @param string \$attribute
     *
     * @return mixed
     */
    public function __get(\$attribute)
    {
        return \$this->default;
    }

    /**
     * @param string \$method
     * @param array \$attributes
     *
     * @return mixed
     */
    public function __call(\$method, \$attributes)
    {
        return \$this->default;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/DefaultGenerator.php";
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
 * This generator returns a default value for all called properties
 * and methods. It works with Faker\\Generator\\Base->optional().
 */
class DefaultGenerator
{
    protected \$default;

    public function __construct(\$default = null)
    {
        \$this->default = \$default;
    }

    /**
     * @param string \$attribute
     *
     * @return mixed
     */
    public function __get(\$attribute)
    {
        return \$this->default;
    }

    /**
     * @param string \$method
     * @param array \$attributes
     *
     * @return mixed
     */
    public function __call(\$method, \$attributes)
    {
        return \$this->default;
    }
}
", "vendor/fzaninotto/faker/src/Faker/DefaultGenerator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/DefaultGenerator.php");
    }
}
