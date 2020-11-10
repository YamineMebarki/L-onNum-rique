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

/* vendor/symfony/http-client-contracts/ChunkInterface.php */
class __TwigTemplate_6861d013f840305c5e614dea788e76b323a67a7e34d47fa5e7c642ab1416f856 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client-contracts/ChunkInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client-contracts/ChunkInterface.php"));

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

namespace Symfony\\Contracts\\HttpClient;

use Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface;

/**
 * The interface of chunks returned by ResponseStreamInterface::current().
 *
 * When the chunk is first, last or timeout, the content MUST be empty.
 * When an unchecked timeout or a network error occurs, a TransportExceptionInterface
 * MUST be thrown by the destructor unless one was already thrown by another method.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @experimental in 1.1
 */
interface ChunkInterface
{
    /**
     * Tells when the idle timeout has been reached.
     *
     * @throws TransportExceptionInterface on a network error
     */
    public function isTimeout(): bool;

    /**
     * Tells when headers just arrived.
     *
     * @throws TransportExceptionInterface on a network error or when the idle timeout is reached
     */
    public function isFirst(): bool;

    /**
     * Tells when the body just completed.
     *
     * @throws TransportExceptionInterface on a network error or when the idle timeout is reached
     */
    public function isLast(): bool;

    /**
     * Returns a [status code, headers] tuple when a 1xx status code was just received.
     *
     * @throws TransportExceptionInterface on a network error or when the idle timeout is reached
     */
    public function getInformationalStatus(): ?array;

    /**
     * Returns the content of the response chunk.
     *
     * @throws TransportExceptionInterface on a network error or when the idle timeout is reached
     */
    public function getContent(): string;

    /**
     * Returns the offset of the chunk in the response body.
     */
    public function getOffset(): int;

    /**
     * In case of error, returns the message that describes it.
     */
    public function getError(): ?string;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client-contracts/ChunkInterface.php";
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

namespace Symfony\\Contracts\\HttpClient;

use Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface;

/**
 * The interface of chunks returned by ResponseStreamInterface::current().
 *
 * When the chunk is first, last or timeout, the content MUST be empty.
 * When an unchecked timeout or a network error occurs, a TransportExceptionInterface
 * MUST be thrown by the destructor unless one was already thrown by another method.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @experimental in 1.1
 */
interface ChunkInterface
{
    /**
     * Tells when the idle timeout has been reached.
     *
     * @throws TransportExceptionInterface on a network error
     */
    public function isTimeout(): bool;

    /**
     * Tells when headers just arrived.
     *
     * @throws TransportExceptionInterface on a network error or when the idle timeout is reached
     */
    public function isFirst(): bool;

    /**
     * Tells when the body just completed.
     *
     * @throws TransportExceptionInterface on a network error or when the idle timeout is reached
     */
    public function isLast(): bool;

    /**
     * Returns a [status code, headers] tuple when a 1xx status code was just received.
     *
     * @throws TransportExceptionInterface on a network error or when the idle timeout is reached
     */
    public function getInformationalStatus(): ?array;

    /**
     * Returns the content of the response chunk.
     *
     * @throws TransportExceptionInterface on a network error or when the idle timeout is reached
     */
    public function getContent(): string;

    /**
     * Returns the offset of the chunk in the response body.
     */
    public function getOffset(): int;

    /**
     * In case of error, returns the message that describes it.
     */
    public function getError(): ?string;
}
", "vendor/symfony/http-client-contracts/ChunkInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client-contracts/ChunkInterface.php");
    }
}
