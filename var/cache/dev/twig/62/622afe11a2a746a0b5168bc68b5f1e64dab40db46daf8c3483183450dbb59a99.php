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

/* vendor/symfony/config/Definition/BooleanNode.php */
class __TwigTemplate_28bfc26cb44c132ef7617e82befa6d5cf94cfafffd6838f4263eaa277a5ab693 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/BooleanNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/BooleanNode.php"));

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

namespace Symfony\\Component\\Config\\Definition;

use Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException;

/**
 * This node represents a Boolean value in the config tree.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class BooleanNode extends ScalarNode
{
    /**
     * {@inheritdoc}
     */
    protected function validateType(\$value)
    {
        if (!\\is_bool(\$value)) {
            \$ex = new InvalidTypeException(sprintf('Invalid type for path \"%s\". Expected boolean, but got %s.', \$this->getPath(), \\gettype(\$value)));
            if (\$hint = \$this->getInfo()) {
                \$ex->addHint(\$hint);
            }
            \$ex->setPath(\$this->getPath());

            throw \$ex;
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function isValueEmpty(\$value)
    {
        // a boolean value cannot be empty
        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function getValidPlaceholderTypes(): array
    {
        return ['bool'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Definition/BooleanNode.php";
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

namespace Symfony\\Component\\Config\\Definition;

use Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException;

/**
 * This node represents a Boolean value in the config tree.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class BooleanNode extends ScalarNode
{
    /**
     * {@inheritdoc}
     */
    protected function validateType(\$value)
    {
        if (!\\is_bool(\$value)) {
            \$ex = new InvalidTypeException(sprintf('Invalid type for path \"%s\". Expected boolean, but got %s.', \$this->getPath(), \\gettype(\$value)));
            if (\$hint = \$this->getInfo()) {
                \$ex->addHint(\$hint);
            }
            \$ex->setPath(\$this->getPath());

            throw \$ex;
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function isValueEmpty(\$value)
    {
        // a boolean value cannot be empty
        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function getValidPlaceholderTypes(): array
    {
        return ['bool'];
    }
}
", "vendor/symfony/config/Definition/BooleanNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Definition/BooleanNode.php");
    }
}
