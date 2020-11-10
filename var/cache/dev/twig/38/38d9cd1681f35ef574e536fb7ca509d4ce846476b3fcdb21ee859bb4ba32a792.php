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

/* vendor/swiftmailer/swiftmailer/tests/IdenticalBinaryConstraint.php */
class __TwigTemplate_32004474768ef03ee486d830d37e09aaa156a00e39d54d0bd2345dca4100b2b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/IdenticalBinaryConstraint.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/IdenticalBinaryConstraint.php"));

        // line 1
        echo "<?php

/**
 * A binary safe string comparison.
 *
 * @author Chris Corbyn
 */
class IdenticalBinaryConstraint extends \\PHPUnit\\Framework\\Constraint\\Constraint
{
    protected \$value;

    public function __construct(\$value)
    {
        \$this->value = \$value;
    }

    /**
     * Evaluates the constraint for parameter \$other. Returns TRUE if the
     * constraint is met, FALSE otherwise.
     *
     * @param mixed \$other Value or object to evaluate.
     *
     * @return bool
     */
    public function matches(\$other)
    {
        \$aHex = \$this->asHexString(\$this->value);
        \$bHex = \$this->asHexString(\$other);

        return \$aHex === \$bHex;
    }

    /**
     * Returns a string representation of the constraint.
     *
     * @return string
     */
    public function toString()
    {
        return 'identical binary';
    }

    /**
     * Get the given string of bytes as a stirng of Hexadecimal sequences.
     *
     * @param string \$binary
     *
     * @return string
     */
    private function asHexString(\$binary)
    {
        \$hex = '';

        \$bytes = unpack('H*', \$binary);

        foreach (\$bytes as &\$byte) {
            \$byte = strtoupper(\$byte);
        }

        return implode('', \$bytes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/IdenticalBinaryConstraint.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/**
 * A binary safe string comparison.
 *
 * @author Chris Corbyn
 */
class IdenticalBinaryConstraint extends \\PHPUnit\\Framework\\Constraint\\Constraint
{
    protected \$value;

    public function __construct(\$value)
    {
        \$this->value = \$value;
    }

    /**
     * Evaluates the constraint for parameter \$other. Returns TRUE if the
     * constraint is met, FALSE otherwise.
     *
     * @param mixed \$other Value or object to evaluate.
     *
     * @return bool
     */
    public function matches(\$other)
    {
        \$aHex = \$this->asHexString(\$this->value);
        \$bHex = \$this->asHexString(\$other);

        return \$aHex === \$bHex;
    }

    /**
     * Returns a string representation of the constraint.
     *
     * @return string
     */
    public function toString()
    {
        return 'identical binary';
    }

    /**
     * Get the given string of bytes as a stirng of Hexadecimal sequences.
     *
     * @param string \$binary
     *
     * @return string
     */
    private function asHexString(\$binary)
    {
        \$hex = '';

        \$bytes = unpack('H*', \$binary);

        foreach (\$bytes as &\$byte) {
            \$byte = strtoupper(\$byte);
        }

        return implode('', \$bytes);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/IdenticalBinaryConstraint.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/IdenticalBinaryConstraint.php");
    }
}
