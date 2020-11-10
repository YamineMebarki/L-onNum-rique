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

/* vendor/symfony/intl/Data/Util/ArrayAccessibleResourceBundle.php */
class __TwigTemplate_12d0f9ba89f93dd785da370d303cda4cd07379ffd3c804e05d9fbaba029392bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Util/ArrayAccessibleResourceBundle.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Util/ArrayAccessibleResourceBundle.php"));

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

namespace Symfony\\Component\\Intl\\Data\\Util;

use Symfony\\Component\\Intl\\Exception\\BadMethodCallException;

/**
 * Work-around for a bug in PHP's \\ResourceBundle implementation.
 *
 * More information can be found on https://bugs.php.net/64356.
 * This class can be removed once that bug is fixed.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class ArrayAccessibleResourceBundle implements \\ArrayAccess, \\IteratorAggregate, \\Countable
{
    private \$bundleImpl;

    public function __construct(\\ResourceBundle \$bundleImpl)
    {
        \$this->bundleImpl = \$bundleImpl;
    }

    public function get(\$offset)
    {
        \$value = \$this->bundleImpl->get(\$offset);

        return \$value instanceof \\ResourceBundle ? new static(\$value) : \$value;
    }

    public function offsetExists(\$offset)
    {
        return null !== \$this->bundleImpl->get(\$offset);
    }

    public function offsetGet(\$offset)
    {
        return \$this->get(\$offset);
    }

    public function offsetSet(\$offset, \$value)
    {
        throw new BadMethodCallException('Resource bundles cannot be modified.');
    }

    public function offsetUnset(\$offset)
    {
        throw new BadMethodCallException('Resource bundles cannot be modified.');
    }

    public function getIterator()
    {
        return \$this->bundleImpl;
    }

    public function count()
    {
        return \$this->bundleImpl->count();
    }

    public function getErrorCode()
    {
        return \$this->bundleImpl->getErrorCode();
    }

    public function getErrorMessage()
    {
        return \$this->bundleImpl->getErrorMessage();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Util/ArrayAccessibleResourceBundle.php";
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

namespace Symfony\\Component\\Intl\\Data\\Util;

use Symfony\\Component\\Intl\\Exception\\BadMethodCallException;

/**
 * Work-around for a bug in PHP's \\ResourceBundle implementation.
 *
 * More information can be found on https://bugs.php.net/64356.
 * This class can be removed once that bug is fixed.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class ArrayAccessibleResourceBundle implements \\ArrayAccess, \\IteratorAggregate, \\Countable
{
    private \$bundleImpl;

    public function __construct(\\ResourceBundle \$bundleImpl)
    {
        \$this->bundleImpl = \$bundleImpl;
    }

    public function get(\$offset)
    {
        \$value = \$this->bundleImpl->get(\$offset);

        return \$value instanceof \\ResourceBundle ? new static(\$value) : \$value;
    }

    public function offsetExists(\$offset)
    {
        return null !== \$this->bundleImpl->get(\$offset);
    }

    public function offsetGet(\$offset)
    {
        return \$this->get(\$offset);
    }

    public function offsetSet(\$offset, \$value)
    {
        throw new BadMethodCallException('Resource bundles cannot be modified.');
    }

    public function offsetUnset(\$offset)
    {
        throw new BadMethodCallException('Resource bundles cannot be modified.');
    }

    public function getIterator()
    {
        return \$this->bundleImpl;
    }

    public function count()
    {
        return \$this->bundleImpl->count();
    }

    public function getErrorCode()
    {
        return \$this->bundleImpl->getErrorCode();
    }

    public function getErrorMessage()
    {
        return \$this->bundleImpl->getErrorMessage();
    }
}
", "vendor/symfony/intl/Data/Util/ArrayAccessibleResourceBundle.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Util/ArrayAccessibleResourceBundle.php");
    }
}
