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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/MagicConst.php */
class __TwigTemplate_51d27aa6cf3a852be7225ce2240027bbec2a799298584c24d4a2da007864709b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/MagicConst.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/MagicConst.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Scalar;

use PhpParser\\Node\\Scalar;

abstract class MagicConst extends Scalar
{
    /**
     * Constructs a magic constant node.
     *
     * @param array \$attributes Additional attributes
     */
    public function __construct(array \$attributes = []) {
        \$this->attributes = \$attributes;
    }

    public function getSubNodeNames() : array {
        return [];
    }

    /**
     * Get name of magic constant.
     *
     * @return string Name of magic constant
     */
    abstract public function getName() : string;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/MagicConst.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Scalar;

use PhpParser\\Node\\Scalar;

abstract class MagicConst extends Scalar
{
    /**
     * Constructs a magic constant node.
     *
     * @param array \$attributes Additional attributes
     */
    public function __construct(array \$attributes = []) {
        \$this->attributes = \$attributes;
    }

    public function getSubNodeNames() : array {
        return [];
    }

    /**
     * Get name of magic constant.
     *
     * @return string Name of magic constant
     */
    abstract public function getName() : string;
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/MagicConst.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/MagicConst.php");
    }
}
