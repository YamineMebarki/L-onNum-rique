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

/* vendor/symfony/process/InputStream.php */
class __TwigTemplate_8e62827eb61bea8017cf6523b22ebd64e7c50fe5bba08ab41469b08fcbf788ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/InputStream.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/InputStream.php"));

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

namespace Symfony\\Component\\Process;

use Symfony\\Component\\Process\\Exception\\RuntimeException;

/**
 * Provides a way to continuously write to the input of a Process until the InputStream is closed.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class InputStream implements \\IteratorAggregate
{
    /** @var callable|null */
    private \$onEmpty = null;
    private \$input = [];
    private \$open = true;

    /**
     * Sets a callback that is called when the write buffer becomes empty.
     */
    public function onEmpty(callable \$onEmpty = null)
    {
        \$this->onEmpty = \$onEmpty;
    }

    /**
     * Appends an input to the write buffer.
     *
     * @param resource|string|int|float|bool|\\Traversable|null \$input The input to append as scalar,
     *                                                                stream resource or \\Traversable
     */
    public function write(\$input)
    {
        if (null === \$input) {
            return;
        }
        if (\$this->isClosed()) {
            throw new RuntimeException(sprintf('%s is closed', static::class));
        }
        \$this->input[] = ProcessUtils::validateInput(__METHOD__, \$input);
    }

    /**
     * Closes the write buffer.
     */
    public function close()
    {
        \$this->open = false;
    }

    /**
     * Tells whether the write buffer is closed or not.
     */
    public function isClosed()
    {
        return !\$this->open;
    }

    public function getIterator()
    {
        \$this->open = true;

        while (\$this->open || \$this->input) {
            if (!\$this->input) {
                yield '';
                continue;
            }
            \$current = array_shift(\$this->input);

            if (\$current instanceof \\Iterator) {
                yield from \$current;
            } else {
                yield \$current;
            }
            if (!\$this->input && \$this->open && null !== \$onEmpty = \$this->onEmpty) {
                \$this->write(\$onEmpty(\$this));
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
        return "vendor/symfony/process/InputStream.php";
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

namespace Symfony\\Component\\Process;

use Symfony\\Component\\Process\\Exception\\RuntimeException;

/**
 * Provides a way to continuously write to the input of a Process until the InputStream is closed.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class InputStream implements \\IteratorAggregate
{
    /** @var callable|null */
    private \$onEmpty = null;
    private \$input = [];
    private \$open = true;

    /**
     * Sets a callback that is called when the write buffer becomes empty.
     */
    public function onEmpty(callable \$onEmpty = null)
    {
        \$this->onEmpty = \$onEmpty;
    }

    /**
     * Appends an input to the write buffer.
     *
     * @param resource|string|int|float|bool|\\Traversable|null \$input The input to append as scalar,
     *                                                                stream resource or \\Traversable
     */
    public function write(\$input)
    {
        if (null === \$input) {
            return;
        }
        if (\$this->isClosed()) {
            throw new RuntimeException(sprintf('%s is closed', static::class));
        }
        \$this->input[] = ProcessUtils::validateInput(__METHOD__, \$input);
    }

    /**
     * Closes the write buffer.
     */
    public function close()
    {
        \$this->open = false;
    }

    /**
     * Tells whether the write buffer is closed or not.
     */
    public function isClosed()
    {
        return !\$this->open;
    }

    public function getIterator()
    {
        \$this->open = true;

        while (\$this->open || \$this->input) {
            if (!\$this->input) {
                yield '';
                continue;
            }
            \$current = array_shift(\$this->input);

            if (\$current instanceof \\Iterator) {
                yield from \$current;
            } else {
                yield \$current;
            }
            if (!\$this->input && \$this->open && null !== \$onEmpty = \$this->onEmpty) {
                \$this->write(\$onEmpty(\$this));
            }
        }
    }
}
", "vendor/symfony/process/InputStream.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/InputStream.php");
    }
}
