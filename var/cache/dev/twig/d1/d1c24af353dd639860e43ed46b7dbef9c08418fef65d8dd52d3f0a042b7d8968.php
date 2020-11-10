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

/* vendor/doctrine/doctrine-bundle/Dbal/Logging/BacktraceLogger.php */
class __TwigTemplate_ff98374c7538ad509839a2fae0e42485d170a4e5c8bd3c04cf9b62df0592542c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Dbal/Logging/BacktraceLogger.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Dbal/Logging/BacktraceLogger.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Dbal\\Logging;

use Doctrine\\DBAL\\Logging\\DebugStack;

final class BacktraceLogger extends DebugStack
{
    /**
     * {@inheritdoc}
     */
    public function startQuery(\$sql, ?array \$params = null, ?array \$types = null) : void
    {
        parent::startQuery(\$sql, \$params, \$types);

        \$backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);

        // skip first since it's always the current method
        array_shift(\$backtrace);

        \$this->queries[\$this->currentQuery]['backtrace'] = \$backtrace;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Dbal/Logging/BacktraceLogger.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Dbal\\Logging;

use Doctrine\\DBAL\\Logging\\DebugStack;

final class BacktraceLogger extends DebugStack
{
    /**
     * {@inheritdoc}
     */
    public function startQuery(\$sql, ?array \$params = null, ?array \$types = null) : void
    {
        parent::startQuery(\$sql, \$params, \$types);

        \$backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);

        // skip first since it's always the current method
        array_shift(\$backtrace);

        \$this->queries[\$this->currentQuery]['backtrace'] = \$backtrace;
    }
}
", "vendor/doctrine/doctrine-bundle/Dbal/Logging/BacktraceLogger.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Dbal/Logging/BacktraceLogger.php");
    }
}
