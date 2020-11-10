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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/OutputWriter.php */
class __TwigTemplate_005c58c78d6666b8c4f2f40d5175a26ab76180c2c01e7912b9a18d44d83e32f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/OutputWriter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/OutputWriter.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

/**
 * The OutputWriter class is responsible for writing output to the command line when executing migrations.
 */
class OutputWriter
{
    /** @var callable */
    private \$callback;

    /** @var string */
    private \$lastMessage = '';

    public function __construct(?callable \$callback = null)
    {
        if (\$callback === null) {
            \$callback = function (string \$message) : void {
                \$this->lastMessage = \$message;
            };
        }

        \$this->callback = \$callback;
    }

    public function setCallback(callable \$callback) : void
    {
        \$this->callback = \$callback;
    }

    public function write(string \$message) : void
    {
        (\$this->callback)(\$message);
    }

    public function getLastMessage() : string
    {
        return \$this->lastMessage;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/OutputWriter.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

/**
 * The OutputWriter class is responsible for writing output to the command line when executing migrations.
 */
class OutputWriter
{
    /** @var callable */
    private \$callback;

    /** @var string */
    private \$lastMessage = '';

    public function __construct(?callable \$callback = null)
    {
        if (\$callback === null) {
            \$callback = function (string \$message) : void {
                \$this->lastMessage = \$message;
            };
        }

        \$this->callback = \$callback;
    }

    public function setCallback(callable \$callback) : void
    {
        \$this->callback = \$callback;
    }

    public function write(string \$message) : void
    {
        (\$this->callback)(\$message);
    }

    public function getLastMessage() : string
    {
        return \$this->lastMessage;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/OutputWriter.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/OutputWriter.php");
    }
}
