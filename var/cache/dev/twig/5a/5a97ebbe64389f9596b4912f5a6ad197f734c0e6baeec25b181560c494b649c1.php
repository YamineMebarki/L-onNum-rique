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

/* vendor/symfony/debug/Exception/SilencedErrorContext.php */
class __TwigTemplate_77e1b667e8225e847e89afc7e8fc9b638e6aecdb66be03d6e861a6cd33aa9cb2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Exception/SilencedErrorContext.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Exception/SilencedErrorContext.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Debug\\Exception;

/**
 * Data Object that represents a Silenced Error.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class SilencedErrorContext implements \\JsonSerializable
{
    public \$count = 1;

    private \$severity;
    private \$file;
    private \$line;
    private \$trace;

    public function __construct(int \$severity, string \$file, int \$line, array \$trace = [], int \$count = 1)
    {
        \$this->severity = \$severity;
        \$this->file = \$file;
        \$this->line = \$line;
        \$this->trace = \$trace;
        \$this->count = \$count;
    }

    public function getSeverity()
    {
        return \$this->severity;
    }

    public function getFile()
    {
        return \$this->file;
    }

    public function getLine()
    {
        return \$this->line;
    }

    public function getTrace()
    {
        return \$this->trace;
    }

    public function jsonSerialize()
    {
        return [
            'severity' => \$this->severity,
            'file' => \$this->file,
            'line' => \$this->line,
            'trace' => \$this->trace,
            'count' => \$this->count,
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Exception/SilencedErrorContext.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Debug\\Exception;

/**
 * Data Object that represents a Silenced Error.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class SilencedErrorContext implements \\JsonSerializable
{
    public \$count = 1;

    private \$severity;
    private \$file;
    private \$line;
    private \$trace;

    public function __construct(int \$severity, string \$file, int \$line, array \$trace = [], int \$count = 1)
    {
        \$this->severity = \$severity;
        \$this->file = \$file;
        \$this->line = \$line;
        \$this->trace = \$trace;
        \$this->count = \$count;
    }

    public function getSeverity()
    {
        return \$this->severity;
    }

    public function getFile()
    {
        return \$this->file;
    }

    public function getLine()
    {
        return \$this->line;
    }

    public function getTrace()
    {
        return \$this->trace;
    }

    public function jsonSerialize()
    {
        return [
            'severity' => \$this->severity,
            'file' => \$this->file,
            'line' => \$this->line,
            'trace' => \$this->trace,
            'count' => \$this->count,
        ];
    }
}
", "vendor/symfony/debug/Exception/SilencedErrorContext.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Exception/SilencedErrorContext.php");
    }
}
