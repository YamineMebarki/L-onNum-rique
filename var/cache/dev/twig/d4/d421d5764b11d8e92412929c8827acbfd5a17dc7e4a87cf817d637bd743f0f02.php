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

/* vendor/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php */
class __TwigTemplate_cfa2f02bd9bab5f4bc2854db697f88322024ac8e5691baa6c9d92f335a67184e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Processor;

/**
 * Some methods that are common for all memory processors
 *
 * @author Rob Jensen
 */
abstract class MemoryProcessor implements ProcessorInterface
{
    /**
     * @var bool If true, get the real size of memory allocated from system. Else, only the memory used by emalloc() is reported.
     */
    protected \$realUsage;

    /**
     * @var bool If true, then format memory size to human readable string (MB, KB, B depending on size)
     */
    protected \$useFormatting;

    /**
     * @param bool \$realUsage     Set this to true to get the real size of memory allocated from system.
     * @param bool \$useFormatting If true, then format memory size to human readable string (MB, KB, B depending on size)
     */
    public function __construct(\$realUsage = true, \$useFormatting = true)
    {
        \$this->realUsage = (bool) \$realUsage;
        \$this->useFormatting = (bool) \$useFormatting;
    }

    /**
     * Formats bytes into a human readable string if \$this->useFormatting is true, otherwise return \$bytes as is
     *
     * @param  int        \$bytes
     * @return string|int Formatted string if \$this->useFormatting is true, otherwise return \$bytes as is
     */
    protected function formatBytes(\$bytes)
    {
        \$bytes = (int) \$bytes;

        if (!\$this->useFormatting) {
            return \$bytes;
        }

        if (\$bytes > 1024 * 1024) {
            return round(\$bytes / 1024 / 1024, 2).' MB';
        } elseif (\$bytes > 1024) {
            return round(\$bytes / 1024, 2).' KB';
        }

        return \$bytes . ' B';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Processor;

/**
 * Some methods that are common for all memory processors
 *
 * @author Rob Jensen
 */
abstract class MemoryProcessor implements ProcessorInterface
{
    /**
     * @var bool If true, get the real size of memory allocated from system. Else, only the memory used by emalloc() is reported.
     */
    protected \$realUsage;

    /**
     * @var bool If true, then format memory size to human readable string (MB, KB, B depending on size)
     */
    protected \$useFormatting;

    /**
     * @param bool \$realUsage     Set this to true to get the real size of memory allocated from system.
     * @param bool \$useFormatting If true, then format memory size to human readable string (MB, KB, B depending on size)
     */
    public function __construct(\$realUsage = true, \$useFormatting = true)
    {
        \$this->realUsage = (bool) \$realUsage;
        \$this->useFormatting = (bool) \$useFormatting;
    }

    /**
     * Formats bytes into a human readable string if \$this->useFormatting is true, otherwise return \$bytes as is
     *
     * @param  int        \$bytes
     * @return string|int Formatted string if \$this->useFormatting is true, otherwise return \$bytes as is
     */
    protected function formatBytes(\$bytes)
    {
        \$bytes = (int) \$bytes;

        if (!\$this->useFormatting) {
            return \$bytes;
        }

        if (\$bytes > 1024 * 1024) {
            return round(\$bytes / 1024 / 1024, 2).' MB';
        } elseif (\$bytes > 1024) {
            return round(\$bytes / 1024, 2).' KB';
        }

        return \$bytes . ' B';
    }
}
", "vendor/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php");
    }
}
