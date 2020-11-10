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

/* vendor/symfony/console/Helper/HelperSet.php */
class __TwigTemplate_90d0cf77d3cfc0633d374611bff140c4b1836cc3c3be1c8f74a74d97deea1605 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/HelperSet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/HelperSet.php"));

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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * HelperSet represents a set of helpers to be used with a command.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HelperSet implements \\IteratorAggregate
{
    /**
     * @var Helper[]
     */
    private \$helpers = [];
    private \$command;

    /**
     * @param Helper[] \$helpers An array of helper
     */
    public function __construct(array \$helpers = [])
    {
        foreach (\$helpers as \$alias => \$helper) {
            \$this->set(\$helper, \\is_int(\$alias) ? null : \$alias);
        }
    }

    /**
     * Sets a helper.
     *
     * @param HelperInterface \$helper The helper instance
     * @param string          \$alias  An alias
     */
    public function set(HelperInterface \$helper, \$alias = null)
    {
        \$this->helpers[\$helper->getName()] = \$helper;
        if (null !== \$alias) {
            \$this->helpers[\$alias] = \$helper;
        }

        \$helper->setHelperSet(\$this);
    }

    /**
     * Returns true if the helper if defined.
     *
     * @param string \$name The helper name
     *
     * @return bool true if the helper is defined, false otherwise
     */
    public function has(\$name)
    {
        return isset(\$this->helpers[\$name]);
    }

    /**
     * Gets a helper value.
     *
     * @param string \$name The helper name
     *
     * @return HelperInterface The helper instance
     *
     * @throws InvalidArgumentException if the helper is not defined
     */
    public function get(\$name)
    {
        if (!\$this->has(\$name)) {
            throw new InvalidArgumentException(sprintf('The helper \"%s\" is not defined.', \$name));
        }

        return \$this->helpers[\$name];
    }

    public function setCommand(Command \$command = null)
    {
        \$this->command = \$command;
    }

    /**
     * Gets the command associated with this helper set.
     *
     * @return Command A Command instance
     */
    public function getCommand()
    {
        return \$this->command;
    }

    /**
     * @return Helper[]
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->helpers);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Helper/HelperSet.php";
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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * HelperSet represents a set of helpers to be used with a command.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HelperSet implements \\IteratorAggregate
{
    /**
     * @var Helper[]
     */
    private \$helpers = [];
    private \$command;

    /**
     * @param Helper[] \$helpers An array of helper
     */
    public function __construct(array \$helpers = [])
    {
        foreach (\$helpers as \$alias => \$helper) {
            \$this->set(\$helper, \\is_int(\$alias) ? null : \$alias);
        }
    }

    /**
     * Sets a helper.
     *
     * @param HelperInterface \$helper The helper instance
     * @param string          \$alias  An alias
     */
    public function set(HelperInterface \$helper, \$alias = null)
    {
        \$this->helpers[\$helper->getName()] = \$helper;
        if (null !== \$alias) {
            \$this->helpers[\$alias] = \$helper;
        }

        \$helper->setHelperSet(\$this);
    }

    /**
     * Returns true if the helper if defined.
     *
     * @param string \$name The helper name
     *
     * @return bool true if the helper is defined, false otherwise
     */
    public function has(\$name)
    {
        return isset(\$this->helpers[\$name]);
    }

    /**
     * Gets a helper value.
     *
     * @param string \$name The helper name
     *
     * @return HelperInterface The helper instance
     *
     * @throws InvalidArgumentException if the helper is not defined
     */
    public function get(\$name)
    {
        if (!\$this->has(\$name)) {
            throw new InvalidArgumentException(sprintf('The helper \"%s\" is not defined.', \$name));
        }

        return \$this->helpers[\$name];
    }

    public function setCommand(Command \$command = null)
    {
        \$this->command = \$command;
    }

    /**
     * Gets the command associated with this helper set.
     *
     * @return Command A Command instance
     */
    public function getCommand()
    {
        return \$this->command;
    }

    /**
     * @return Helper[]
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->helpers);
    }
}
", "vendor/symfony/console/Helper/HelperSet.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Helper/HelperSet.php");
    }
}
