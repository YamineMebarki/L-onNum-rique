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

/* vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php */
class __TwigTemplate_8ac6cdba6af802a2f6483318669d832ef279daf344ce1228a98eeaa65abb6823 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php"));

        // line 1
        echo "<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Handler;

use Monolog\\ResettableInterface;

/**
 * Helper trait for implementing ProcessableInterface
 *
 * This trait is present in monolog 1.x to ease forward compatibility.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
trait ProcessableHandlerTrait
{
    /**
     * @var callable[]
     */
    protected \$processors = [];

    /**
     * {@inheritdoc}
     * @suppress PhanTypeMismatchReturn
     */
    public function pushProcessor(\$callback): HandlerInterface
    {
        array_unshift(\$this->processors, \$callback);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function popProcessor(): callable
    {
        if (!\$this->processors) {
            throw new \\LogicException('You tried to pop from an empty processor stack.');
        }

        return array_shift(\$this->processors);
    }

    /**
     * Processes a record.
     */
    protected function processRecord(array \$record): array
    {
        foreach (\$this->processors as \$processor) {
            \$record = \$processor(\$record);
        }

        return \$record;
    }

    protected function resetProcessors(): void
    {
        foreach (\$this->processors as \$processor) {
            if (\$processor instanceof ResettableInterface) {
                \$processor->reset();
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Handler;

use Monolog\\ResettableInterface;

/**
 * Helper trait for implementing ProcessableInterface
 *
 * This trait is present in monolog 1.x to ease forward compatibility.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
trait ProcessableHandlerTrait
{
    /**
     * @var callable[]
     */
    protected \$processors = [];

    /**
     * {@inheritdoc}
     * @suppress PhanTypeMismatchReturn
     */
    public function pushProcessor(\$callback): HandlerInterface
    {
        array_unshift(\$this->processors, \$callback);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function popProcessor(): callable
    {
        if (!\$this->processors) {
            throw new \\LogicException('You tried to pop from an empty processor stack.');
        }

        return array_shift(\$this->processors);
    }

    /**
     * Processes a record.
     */
    protected function processRecord(array \$record): array
    {
        foreach (\$this->processors as \$processor) {
            \$record = \$processor(\$record);
        }

        return \$record;
    }

    protected function resetProcessors(): void
    {
        foreach (\$this->processors as \$processor) {
            if (\$processor instanceof ResettableInterface) {
                \$processor->reset();
            }
        }
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php");
    }
}
