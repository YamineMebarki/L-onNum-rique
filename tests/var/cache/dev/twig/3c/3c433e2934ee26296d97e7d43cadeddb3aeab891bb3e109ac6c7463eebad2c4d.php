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

/* vendor/symfony/config/Definition/Builder/NumericNodeDefinition.php */
class __TwigTemplate_7f68594acb43d6f17f1ea42586610cc42b5a4cc2d67756a5a713fa8046d54f79 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/NumericNodeDefinition.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/NumericNodeDefinition.php"));

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

namespace Symfony\\Component\\Config\\Definition\\Builder;

use Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException;

/**
 * Abstract class that contains common code of integer and float node definitions.
 *
 * @author David Jeanmonod <david.jeanmonod@gmail.com>
 */
abstract class NumericNodeDefinition extends ScalarNodeDefinition
{
    protected \$min;
    protected \$max;

    /**
     * Ensures that the value is smaller than the given reference.
     *
     * @param mixed \$max
     *
     * @return \$this
     *
     * @throws \\InvalidArgumentException when the constraint is inconsistent
     */
    public function max(\$max)
    {
        if (isset(\$this->min) && \$this->min > \$max) {
            throw new \\InvalidArgumentException(sprintf('You cannot define a max(%s) as you already have a min(%s)', \$max, \$this->min));
        }
        \$this->max = \$max;

        return \$this;
    }

    /**
     * Ensures that the value is bigger than the given reference.
     *
     * @param mixed \$min
     *
     * @return \$this
     *
     * @throws \\InvalidArgumentException when the constraint is inconsistent
     */
    public function min(\$min)
    {
        if (isset(\$this->max) && \$this->max < \$min) {
            throw new \\InvalidArgumentException(sprintf('You cannot define a min(%s) as you already have a max(%s)', \$min, \$this->max));
        }
        \$this->min = \$min;

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * @throws InvalidDefinitionException
     */
    public function cannotBeEmpty()
    {
        throw new InvalidDefinitionException('->cannotBeEmpty() is not applicable to NumericNodeDefinition.');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Definition/Builder/NumericNodeDefinition.php";
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

namespace Symfony\\Component\\Config\\Definition\\Builder;

use Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException;

/**
 * Abstract class that contains common code of integer and float node definitions.
 *
 * @author David Jeanmonod <david.jeanmonod@gmail.com>
 */
abstract class NumericNodeDefinition extends ScalarNodeDefinition
{
    protected \$min;
    protected \$max;

    /**
     * Ensures that the value is smaller than the given reference.
     *
     * @param mixed \$max
     *
     * @return \$this
     *
     * @throws \\InvalidArgumentException when the constraint is inconsistent
     */
    public function max(\$max)
    {
        if (isset(\$this->min) && \$this->min > \$max) {
            throw new \\InvalidArgumentException(sprintf('You cannot define a max(%s) as you already have a min(%s)', \$max, \$this->min));
        }
        \$this->max = \$max;

        return \$this;
    }

    /**
     * Ensures that the value is bigger than the given reference.
     *
     * @param mixed \$min
     *
     * @return \$this
     *
     * @throws \\InvalidArgumentException when the constraint is inconsistent
     */
    public function min(\$min)
    {
        if (isset(\$this->max) && \$this->max < \$min) {
            throw new \\InvalidArgumentException(sprintf('You cannot define a min(%s) as you already have a max(%s)', \$min, \$this->max));
        }
        \$this->min = \$min;

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * @throws InvalidDefinitionException
     */
    public function cannotBeEmpty()
    {
        throw new InvalidDefinitionException('->cannotBeEmpty() is not applicable to NumericNodeDefinition.');
    }
}
", "vendor/symfony/config/Definition/Builder/NumericNodeDefinition.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Definition/Builder/NumericNodeDefinition.php");
    }
}
