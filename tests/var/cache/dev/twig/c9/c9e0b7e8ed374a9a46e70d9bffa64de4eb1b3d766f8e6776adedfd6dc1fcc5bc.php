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

/* vendor/symfony/http-client/Chunk/ErrorChunk.php */
class __TwigTemplate_def7022d12ff5c64f6b7f28ea70eb3501e798763b79e4e8434fb4c567a73f663 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Chunk/ErrorChunk.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Chunk/ErrorChunk.php"));

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

namespace Symfony\\Component\\HttpClient\\Chunk;

use Symfony\\Component\\HttpClient\\Exception\\TransportException;
use Symfony\\Contracts\\HttpClient\\ChunkInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ErrorChunk implements ChunkInterface
{
    private \$didThrow = false;
    private \$offset;
    private \$errorMessage;
    private \$error;

    public function __construct(int \$offset, \\Throwable \$error = null)
    {
        \$this->offset = \$offset;
        \$this->error = \$error;
        \$this->errorMessage = null !== \$error ? \$error->getMessage() : 'Reading from the response stream reached the idle timeout.';
    }

    /**
     * {@inheritdoc}
     */
    public function isTimeout(): bool
    {
        \$this->didThrow = true;

        if (null !== \$this->error) {
            throw new TransportException(\$this->errorMessage, 0, \$this->error);
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isFirst(): bool
    {
        \$this->didThrow = true;
        throw new TransportException(\$this->errorMessage, 0, \$this->error);
    }

    /**
     * {@inheritdoc}
     */
    public function isLast(): bool
    {
        \$this->didThrow = true;
        throw new TransportException(\$this->errorMessage, 0, \$this->error);
    }

    /**
     * {@inheritdoc}
     */
    public function getInformationalStatus(): ?array
    {
        \$this->didThrow = true;
        throw new TransportException(\$this->errorMessage, 0, \$this->error);
    }

    /**
     * {@inheritdoc}
     */
    public function getContent(): string
    {
        \$this->didThrow = true;
        throw new TransportException(\$this->errorMessage, 0, \$this->error);
    }

    /**
     * {@inheritdoc}
     */
    public function getOffset(): int
    {
        return \$this->offset;
    }

    /**
     * {@inheritdoc}
     */
    public function getError(): ?string
    {
        return \$this->errorMessage;
    }

    /**
     * @return bool Whether the wrapped error has been thrown or not
     */
    public function didThrow(): bool
    {
        return \$this->didThrow;
    }

    public function __destruct()
    {
        if (!\$this->didThrow) {
            \$this->didThrow = true;
            throw new TransportException(\$this->errorMessage, 0, \$this->error);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/Chunk/ErrorChunk.php";
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

namespace Symfony\\Component\\HttpClient\\Chunk;

use Symfony\\Component\\HttpClient\\Exception\\TransportException;
use Symfony\\Contracts\\HttpClient\\ChunkInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ErrorChunk implements ChunkInterface
{
    private \$didThrow = false;
    private \$offset;
    private \$errorMessage;
    private \$error;

    public function __construct(int \$offset, \\Throwable \$error = null)
    {
        \$this->offset = \$offset;
        \$this->error = \$error;
        \$this->errorMessage = null !== \$error ? \$error->getMessage() : 'Reading from the response stream reached the idle timeout.';
    }

    /**
     * {@inheritdoc}
     */
    public function isTimeout(): bool
    {
        \$this->didThrow = true;

        if (null !== \$this->error) {
            throw new TransportException(\$this->errorMessage, 0, \$this->error);
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isFirst(): bool
    {
        \$this->didThrow = true;
        throw new TransportException(\$this->errorMessage, 0, \$this->error);
    }

    /**
     * {@inheritdoc}
     */
    public function isLast(): bool
    {
        \$this->didThrow = true;
        throw new TransportException(\$this->errorMessage, 0, \$this->error);
    }

    /**
     * {@inheritdoc}
     */
    public function getInformationalStatus(): ?array
    {
        \$this->didThrow = true;
        throw new TransportException(\$this->errorMessage, 0, \$this->error);
    }

    /**
     * {@inheritdoc}
     */
    public function getContent(): string
    {
        \$this->didThrow = true;
        throw new TransportException(\$this->errorMessage, 0, \$this->error);
    }

    /**
     * {@inheritdoc}
     */
    public function getOffset(): int
    {
        return \$this->offset;
    }

    /**
     * {@inheritdoc}
     */
    public function getError(): ?string
    {
        return \$this->errorMessage;
    }

    /**
     * @return bool Whether the wrapped error has been thrown or not
     */
    public function didThrow(): bool
    {
        return \$this->didThrow;
    }

    public function __destruct()
    {
        if (!\$this->didThrow) {
            \$this->didThrow = true;
            throw new TransportException(\$this->errorMessage, 0, \$this->error);
        }
    }
}
", "vendor/symfony/http-client/Chunk/ErrorChunk.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/Chunk/ErrorChunk.php");
    }
}
