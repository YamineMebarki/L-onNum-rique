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

/* vendor/symfony/intl/Data/Util/RingBuffer.php */
class __TwigTemplate_e1f1f9a490dcbb63c0866721d07f54337cdc0f5b619d2aad841c68aec649e221 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Util/RingBuffer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Util/RingBuffer.php"));

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

use Symfony\\Component\\Intl\\Exception\\OutOfBoundsException;

/**
 * Implements a ring buffer.
 *
 * A ring buffer is an array-like structure with a fixed size. If the buffer
 * is full, the next written element overwrites the first bucket in the buffer,
 * then the second and so on.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class RingBuffer implements \\ArrayAccess
{
    private \$values = [];

    private \$indices = [];

    private \$cursor = 0;

    private \$size;

    public function __construct(int \$size)
    {
        \$this->size = \$size;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists(\$key)
    {
        return isset(\$this->indices[\$key]);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet(\$key)
    {
        if (!isset(\$this->indices[\$key])) {
            throw new OutOfBoundsException(sprintf('The index \"%s\" does not exist.', \$key));
        }

        return \$this->values[\$this->indices[\$key]];
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet(\$key, \$value)
    {
        if (false !== (\$keyToRemove = array_search(\$this->cursor, \$this->indices))) {
            unset(\$this->indices[\$keyToRemove]);
        }

        \$this->values[\$this->cursor] = \$value;
        \$this->indices[\$key] = \$this->cursor;

        \$this->cursor = (\$this->cursor + 1) % \$this->size;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset(\$key)
    {
        if (isset(\$this->indices[\$key])) {
            \$this->values[\$this->indices[\$key]] = null;
            unset(\$this->indices[\$key]);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Util/RingBuffer.php";
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

use Symfony\\Component\\Intl\\Exception\\OutOfBoundsException;

/**
 * Implements a ring buffer.
 *
 * A ring buffer is an array-like structure with a fixed size. If the buffer
 * is full, the next written element overwrites the first bucket in the buffer,
 * then the second and so on.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class RingBuffer implements \\ArrayAccess
{
    private \$values = [];

    private \$indices = [];

    private \$cursor = 0;

    private \$size;

    public function __construct(int \$size)
    {
        \$this->size = \$size;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists(\$key)
    {
        return isset(\$this->indices[\$key]);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet(\$key)
    {
        if (!isset(\$this->indices[\$key])) {
            throw new OutOfBoundsException(sprintf('The index \"%s\" does not exist.', \$key));
        }

        return \$this->values[\$this->indices[\$key]];
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet(\$key, \$value)
    {
        if (false !== (\$keyToRemove = array_search(\$this->cursor, \$this->indices))) {
            unset(\$this->indices[\$keyToRemove]);
        }

        \$this->values[\$this->cursor] = \$value;
        \$this->indices[\$key] = \$this->cursor;

        \$this->cursor = (\$this->cursor + 1) % \$this->size;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset(\$key)
    {
        if (isset(\$this->indices[\$key])) {
            \$this->values[\$this->indices[\$key]] = null;
            unset(\$this->indices[\$key]);
        }
    }
}
", "vendor/symfony/intl/Data/Util/RingBuffer.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Util/RingBuffer.php");
    }
}
