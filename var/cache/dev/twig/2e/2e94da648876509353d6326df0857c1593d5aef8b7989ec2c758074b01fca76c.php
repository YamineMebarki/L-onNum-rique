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

/* vendor/easycorp/easy-log-handler/src/EasyLogHandler.php */
class __TwigTemplate_7af0c4c6ea51c2e5db170363309137ed7a8849d64741f47e5b8af36a2085551b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/easycorp/easy-log-handler/src/EasyLogHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/easycorp/easy-log-handler/src/EasyLogHandler.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\EasyLog;

use Monolog\\Handler\\StreamHandler;

class EasyLogHandler extends StreamHandler
{
    /**
     * @param resource|string \$stream
     */
    public function __construct(\$stream)
    {
        parent::__construct(\$stream);

        \$this->formatter = new EasyLogFormatter();
    }

    /**
     * @param array \$record
     */
    public function handle(array \$record): bool
    {
        throw new \\RuntimeException('The method \"handle()\" should never be called (call \"handleBatch()\" instead). This is probably caused by a wrong \"monolog\" configuration. Please read EasyLogHandler README instructions to learn how to configure and use it.');
    }

    /**
     * @param array \$records
     */
    public function handleBatch(array \$records): void
    {
        // if the log records were filtered (by channel, level, etc.) the array
        // no longer contains consecutive numeric keys. Make them consecutive again
        // before the log processing (this eases getting the next/previous record)
        \$records = array_values(\$records);

        if (\$records) {
            \$this->write(\$this->getFormatter()->formatBatch(\$records));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/easycorp/easy-log-handler/src/EasyLogHandler.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\EasyLog;

use Monolog\\Handler\\StreamHandler;

class EasyLogHandler extends StreamHandler
{
    /**
     * @param resource|string \$stream
     */
    public function __construct(\$stream)
    {
        parent::__construct(\$stream);

        \$this->formatter = new EasyLogFormatter();
    }

    /**
     * @param array \$record
     */
    public function handle(array \$record): bool
    {
        throw new \\RuntimeException('The method \"handle()\" should never be called (call \"handleBatch()\" instead). This is probably caused by a wrong \"monolog\" configuration. Please read EasyLogHandler README instructions to learn how to configure and use it.');
    }

    /**
     * @param array \$records
     */
    public function handleBatch(array \$records): void
    {
        // if the log records were filtered (by channel, level, etc.) the array
        // no longer contains consecutive numeric keys. Make them consecutive again
        // before the log processing (this eases getting the next/previous record)
        \$records = array_values(\$records);

        if (\$records) {
            \$this->write(\$this->getFormatter()->formatBatch(\$records));
        }
    }
}
", "vendor/easycorp/easy-log-handler/src/EasyLogHandler.php", "/var/www/public/DevLaon/templates/vendor/easycorp/easy-log-handler/src/EasyLogHandler.php");
    }
}
