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

/* vendor/symfony/http-foundation/StreamedResponse.php */
class __TwigTemplate_2ddcb01b5df7d468632e8ad1e31b1dd5bb1418853038a36579e6db90917d9bc0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/StreamedResponse.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/StreamedResponse.php"));

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

namespace Symfony\\Component\\HttpFoundation;

/**
 * StreamedResponse represents a streamed HTTP response.
 *
 * A StreamedResponse uses a callback for its content.
 *
 * The callback should use the standard PHP functions like echo
 * to stream the response back to the client. The flush() function
 * can also be used if needed.
 *
 * @see flush()
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StreamedResponse extends Response
{
    protected \$callback;
    protected \$streamed;
    private \$headersSent;

    /**
     * @param callable|null \$callback A valid PHP callback or null to set it later
     * @param int           \$status   The response status code
     * @param array         \$headers  An array of response headers
     */
    public function __construct(callable \$callback = null, int \$status = 200, array \$headers = [])
    {
        parent::__construct(null, \$status, \$headers);

        if (null !== \$callback) {
            \$this->setCallback(\$callback);
        }
        \$this->streamed = false;
        \$this->headersSent = false;
    }

    /**
     * Factory method for chainability.
     *
     * @param callable|null \$callback A valid PHP callback or null to set it later
     * @param int           \$status   The response status code
     * @param array         \$headers  An array of response headers
     *
     * @return static
     */
    public static function create(\$callback = null, \$status = 200, \$headers = [])
    {
        return new static(\$callback, \$status, \$headers);
    }

    /**
     * Sets the PHP callback associated with this Response.
     *
     * @param callable \$callback A valid PHP callback
     *
     * @return \$this
     */
    public function setCallback(callable \$callback)
    {
        \$this->callback = \$callback;

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * This method only sends the headers once.
     *
     * @return \$this
     */
    public function sendHeaders()
    {
        if (\$this->headersSent) {
            return \$this;
        }

        \$this->headersSent = true;

        return parent::sendHeaders();
    }

    /**
     * {@inheritdoc}
     *
     * This method only sends the content once.
     *
     * @return \$this
     */
    public function sendContent()
    {
        if (\$this->streamed) {
            return \$this;
        }

        \$this->streamed = true;

        if (null === \$this->callback) {
            throw new \\LogicException('The Response callback must not be null.');
        }

        (\$this->callback)();

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\LogicException when the content is not null
     *
     * @return \$this
     */
    public function setContent(\$content)
    {
        if (null !== \$content) {
            throw new \\LogicException('The content cannot be set on a StreamedResponse instance.');
        }

        \$this->streamed = true;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/StreamedResponse.php";
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

namespace Symfony\\Component\\HttpFoundation;

/**
 * StreamedResponse represents a streamed HTTP response.
 *
 * A StreamedResponse uses a callback for its content.
 *
 * The callback should use the standard PHP functions like echo
 * to stream the response back to the client. The flush() function
 * can also be used if needed.
 *
 * @see flush()
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StreamedResponse extends Response
{
    protected \$callback;
    protected \$streamed;
    private \$headersSent;

    /**
     * @param callable|null \$callback A valid PHP callback or null to set it later
     * @param int           \$status   The response status code
     * @param array         \$headers  An array of response headers
     */
    public function __construct(callable \$callback = null, int \$status = 200, array \$headers = [])
    {
        parent::__construct(null, \$status, \$headers);

        if (null !== \$callback) {
            \$this->setCallback(\$callback);
        }
        \$this->streamed = false;
        \$this->headersSent = false;
    }

    /**
     * Factory method for chainability.
     *
     * @param callable|null \$callback A valid PHP callback or null to set it later
     * @param int           \$status   The response status code
     * @param array         \$headers  An array of response headers
     *
     * @return static
     */
    public static function create(\$callback = null, \$status = 200, \$headers = [])
    {
        return new static(\$callback, \$status, \$headers);
    }

    /**
     * Sets the PHP callback associated with this Response.
     *
     * @param callable \$callback A valid PHP callback
     *
     * @return \$this
     */
    public function setCallback(callable \$callback)
    {
        \$this->callback = \$callback;

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * This method only sends the headers once.
     *
     * @return \$this
     */
    public function sendHeaders()
    {
        if (\$this->headersSent) {
            return \$this;
        }

        \$this->headersSent = true;

        return parent::sendHeaders();
    }

    /**
     * {@inheritdoc}
     *
     * This method only sends the content once.
     *
     * @return \$this
     */
    public function sendContent()
    {
        if (\$this->streamed) {
            return \$this;
        }

        \$this->streamed = true;

        if (null === \$this->callback) {
            throw new \\LogicException('The Response callback must not be null.');
        }

        (\$this->callback)();

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\LogicException when the content is not null
     *
     * @return \$this
     */
    public function setContent(\$content)
    {
        if (null !== \$content) {
            throw new \\LogicException('The content cannot be set on a StreamedResponse instance.');
        }

        \$this->streamed = true;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return false;
    }
}
", "vendor/symfony/http-foundation/StreamedResponse.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/StreamedResponse.php");
    }
}
