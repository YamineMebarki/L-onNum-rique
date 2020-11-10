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

/* vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php */
class __TwigTemplate_f2f33e5a575149f2dd63fc39b792308d032566a55860f0c716572f0b2a955cfc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php"));

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

namespace Monolog\\Handler;

use Monolog\\ResettableInterface;

/**
 * Base Handler class providing the Handler structure
 *
 * Classes extending it should (in most cases) only implement write(\$record)
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Christophe Coevoet <stof@notk.org>
 */
abstract class AbstractProcessingHandler extends AbstractHandler
{
    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        if (!\$this->isHandling(\$record)) {
            return false;
        }

        \$record = \$this->processRecord(\$record);

        \$record['formatted'] = \$this->getFormatter()->format(\$record);

        \$this->write(\$record);

        return false === \$this->bubble;
    }

    /**
     * Writes the record down to the log of the implementing handler
     *
     * @param  array \$record
     * @return void
     */
    abstract protected function write(array \$record);

    /**
     * Processes a record.
     *
     * @param  array \$record
     * @return array
     */
    protected function processRecord(array \$record)
    {
        if (\$this->processors) {
            foreach (\$this->processors as \$processor) {
                \$record = call_user_func(\$processor, \$record);
            }
        }

        return \$record;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php";
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

namespace Monolog\\Handler;

use Monolog\\ResettableInterface;

/**
 * Base Handler class providing the Handler structure
 *
 * Classes extending it should (in most cases) only implement write(\$record)
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Christophe Coevoet <stof@notk.org>
 */
abstract class AbstractProcessingHandler extends AbstractHandler
{
    /**
     * {@inheritdoc}
     */
    public function handle(array \$record)
    {
        if (!\$this->isHandling(\$record)) {
            return false;
        }

        \$record = \$this->processRecord(\$record);

        \$record['formatted'] = \$this->getFormatter()->format(\$record);

        \$this->write(\$record);

        return false === \$this->bubble;
    }

    /**
     * Writes the record down to the log of the implementing handler
     *
     * @param  array \$record
     * @return void
     */
    abstract protected function write(array \$record);

    /**
     * Processes a record.
     *
     * @param  array \$record
     * @return array
     */
    protected function processRecord(array \$record)
    {
        if (\$this->processors) {
            foreach (\$this->processors as \$processor) {
                \$record = call_user_func(\$processor, \$record);
            }
        }

        return \$record;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php");
    }
}
