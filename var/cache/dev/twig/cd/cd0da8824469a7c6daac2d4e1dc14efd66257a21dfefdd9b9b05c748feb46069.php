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

/* vendor/nikic/php-parser/lib/PhpParser/Node/NullableType.php */
class __TwigTemplate_cc386a8c47d100c213e18136bc6d227f1976627c7f93954d1d0f9201082cd207 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/NullableType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/NullableType.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

class NullableType extends NodeAbstract
{
    /** @var Identifier|Name Type */
    public \$type;

    /**
     * Constructs a nullable type (wrapping another type).
     *
     * @param string|Identifier|Name \$type       Type
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(\$type, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->type = \\is_string(\$type) ? new Identifier(\$type) : \$type;
    }

    public function getSubNodeNames() : array {
        return ['type'];
    }
    
    public function getType() : string {
        return 'NullableType';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/NullableType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

class NullableType extends NodeAbstract
{
    /** @var Identifier|Name Type */
    public \$type;

    /**
     * Constructs a nullable type (wrapping another type).
     *
     * @param string|Identifier|Name \$type       Type
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(\$type, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->type = \\is_string(\$type) ? new Identifier(\$type) : \$type;
    }

    public function getSubNodeNames() : array {
        return ['type'];
    }
    
    public function getType() : string {
        return 'NullableType';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/NullableType.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/NullableType.php");
    }
}
