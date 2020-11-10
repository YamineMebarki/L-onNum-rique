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

/* vendor/symfony/validator/ConstraintViolationList.php */
class __TwigTemplate_15121d4fbac053cc70e55e337939923fd339af0fb2833a821d4b4b52e667d7ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/ConstraintViolationList.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/ConstraintViolationList.php"));

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

namespace Symfony\\Component\\Validator;

/**
 * Default implementation of {@ConstraintViolationListInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ConstraintViolationList implements \\IteratorAggregate, ConstraintViolationListInterface
{
    /**
     * @var ConstraintViolationInterface[]
     */
    private \$violations = [];

    /**
     * Creates a new constraint violation list.
     *
     * @param ConstraintViolationInterface[] \$violations The constraint violations to add to the list
     */
    public function __construct(array \$violations = [])
    {
        foreach (\$violations as \$violation) {
            \$this->add(\$violation);
        }
    }

    /**
     * Converts the violation into a string for debugging purposes.
     *
     * @return string The violation as string
     */
    public function __toString()
    {
        \$string = '';

        foreach (\$this->violations as \$violation) {
            \$string .= \$violation.\"\\n\";
        }

        return \$string;
    }

    /**
     * {@inheritdoc}
     */
    public function add(ConstraintViolationInterface \$violation)
    {
        \$this->violations[] = \$violation;
    }

    /**
     * {@inheritdoc}
     */
    public function addAll(ConstraintViolationListInterface \$otherList)
    {
        foreach (\$otherList as \$violation) {
            \$this->violations[] = \$violation;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$offset)
    {
        if (!isset(\$this->violations[\$offset])) {
            throw new \\OutOfBoundsException(sprintf('The offset \"%s\" does not exist.', \$offset));
        }

        return \$this->violations[\$offset];
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$offset)
    {
        return isset(\$this->violations[\$offset]);
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$offset, ConstraintViolationInterface \$violation)
    {
        \$this->violations[\$offset] = \$violation;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(\$offset)
    {
        unset(\$this->violations[\$offset]);
    }

    /**
     * {@inheritdoc}
     *
     * @return \\ArrayIterator|ConstraintViolationInterface[]
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->violations);
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return \\count(\$this->violations);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists(\$offset)
    {
        return \$this->has(\$offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet(\$offset)
    {
        return \$this->get(\$offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet(\$offset, \$violation)
    {
        if (null === \$offset) {
            \$this->add(\$violation);
        } else {
            \$this->set(\$offset, \$violation);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset(\$offset)
    {
        \$this->remove(\$offset);
    }

    /**
     * Creates iterator for errors with specific codes.
     *
     * @param string|string[] \$codes The codes to find
     *
     * @return static new instance which contains only specific errors
     */
    public function findByCodes(\$codes)
    {
        \$codes = (array) \$codes;
        \$violations = [];
        foreach (\$this as \$violation) {
            if (\\in_array(\$violation->getCode(), \$codes, true)) {
                \$violations[] = \$violation;
            }
        }

        return new static(\$violations);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/ConstraintViolationList.php";
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

namespace Symfony\\Component\\Validator;

/**
 * Default implementation of {@ConstraintViolationListInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ConstraintViolationList implements \\IteratorAggregate, ConstraintViolationListInterface
{
    /**
     * @var ConstraintViolationInterface[]
     */
    private \$violations = [];

    /**
     * Creates a new constraint violation list.
     *
     * @param ConstraintViolationInterface[] \$violations The constraint violations to add to the list
     */
    public function __construct(array \$violations = [])
    {
        foreach (\$violations as \$violation) {
            \$this->add(\$violation);
        }
    }

    /**
     * Converts the violation into a string for debugging purposes.
     *
     * @return string The violation as string
     */
    public function __toString()
    {
        \$string = '';

        foreach (\$this->violations as \$violation) {
            \$string .= \$violation.\"\\n\";
        }

        return \$string;
    }

    /**
     * {@inheritdoc}
     */
    public function add(ConstraintViolationInterface \$violation)
    {
        \$this->violations[] = \$violation;
    }

    /**
     * {@inheritdoc}
     */
    public function addAll(ConstraintViolationListInterface \$otherList)
    {
        foreach (\$otherList as \$violation) {
            \$this->violations[] = \$violation;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$offset)
    {
        if (!isset(\$this->violations[\$offset])) {
            throw new \\OutOfBoundsException(sprintf('The offset \"%s\" does not exist.', \$offset));
        }

        return \$this->violations[\$offset];
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$offset)
    {
        return isset(\$this->violations[\$offset]);
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$offset, ConstraintViolationInterface \$violation)
    {
        \$this->violations[\$offset] = \$violation;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(\$offset)
    {
        unset(\$this->violations[\$offset]);
    }

    /**
     * {@inheritdoc}
     *
     * @return \\ArrayIterator|ConstraintViolationInterface[]
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->violations);
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return \\count(\$this->violations);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists(\$offset)
    {
        return \$this->has(\$offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet(\$offset)
    {
        return \$this->get(\$offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet(\$offset, \$violation)
    {
        if (null === \$offset) {
            \$this->add(\$violation);
        } else {
            \$this->set(\$offset, \$violation);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset(\$offset)
    {
        \$this->remove(\$offset);
    }

    /**
     * Creates iterator for errors with specific codes.
     *
     * @param string|string[] \$codes The codes to find
     *
     * @return static new instance which contains only specific errors
     */
    public function findByCodes(\$codes)
    {
        \$codes = (array) \$codes;
        \$violations = [];
        foreach (\$this as \$violation) {
            if (\\in_array(\$violation->getCode(), \$codes, true)) {
                \$violations[] = \$violation;
            }
        }

        return new static(\$violations);
    }
}
", "vendor/symfony/validator/ConstraintViolationList.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/ConstraintViolationList.php");
    }
}
