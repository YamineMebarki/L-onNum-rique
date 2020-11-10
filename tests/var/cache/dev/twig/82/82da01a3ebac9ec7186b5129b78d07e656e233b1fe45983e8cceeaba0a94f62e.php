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

/* vendor/symfony/browser-kit/Response.php */
class __TwigTemplate_fb6233b0a3d0fe8ba4b93bf85b943889fdd358959fc2b1b6248360bcf476eb7a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Response.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Response.php"));

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

namespace Symfony\\Component\\BrowserKit;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class Response
{
    /** @internal */
    protected \$content;
    /** @internal */
    protected \$status;
    /** @internal */
    protected \$headers;

    /**
     * The headers array is a set of key/value pairs. If a header is present multiple times
     * then the value is an array of all the values.
     *
     * @param string \$content The content of the response
     * @param int    \$status  The response status code
     * @param array  \$headers An array of headers
     */
    public function __construct(string \$content = '', int \$status = 200, array \$headers = [])
    {
        \$this->content = \$content;
        \$this->status = \$status;
        \$this->headers = \$headers;
    }

    /**
     * Converts the response object to string containing all headers and the response content.
     *
     * @return string The response with headers and content
     */
    public function __toString()
    {
        \$headers = '';
        foreach (\$this->headers as \$name => \$value) {
            if (\\is_string(\$value)) {
                \$headers .= sprintf(\"%s: %s\\n\", \$name, \$value);
            } else {
                foreach (\$value as \$headerValue) {
                    \$headers .= sprintf(\"%s: %s\\n\", \$name, \$headerValue);
                }
            }
        }

        return \$headers.\"\\n\".\$this->content;
    }

    /**
     * Returns the build header line.
     *
     * @param string \$name  The header name
     * @param string \$value The header value
     *
     * @return string The built header line
     *
     * @deprecated since Symfony 4.3
     */
    protected function buildHeader(\$name, \$value)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.3.', __METHOD__), E_USER_DEPRECATED);

        return sprintf(\"%s: %s\\n\", \$name, \$value);
    }

    /**
     * Gets the response content.
     *
     * @return string The response content
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * Gets the response status code.
     *
     * @return int The response status code
     *
     * @deprecated since Symfony 4.3, use getStatusCode() instead
     */
    public function getStatus()
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.3, use getStatusCode() instead.', __METHOD__), E_USER_DEPRECATED);

        return \$this->status;
    }

    public function getStatusCode(): int
    {
        return \$this->status;
    }

    /**
     * Gets the response headers.
     *
     * @return array The response headers
     */
    public function getHeaders()
    {
        return \$this->headers;
    }

    /**
     * Gets a response header.
     *
     * @param string \$header The header name
     * @param bool   \$first  Whether to return the first value or all header values
     *
     * @return string|array The first header value if \$first is true, an array of values otherwise
     */
    public function getHeader(\$header, \$first = true)
    {
        \$normalizedHeader = str_replace('-', '_', strtolower(\$header));
        foreach (\$this->headers as \$key => \$value) {
            if (str_replace('-', '_', strtolower(\$key)) === \$normalizedHeader) {
                if (\$first) {
                    return \\is_array(\$value) ? (\\count(\$value) ? \$value[0] : '') : \$value;
                }

                return \\is_array(\$value) ? \$value : [\$value];
            }
        }

        return \$first ? null : [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/Response.php";
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

namespace Symfony\\Component\\BrowserKit;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class Response
{
    /** @internal */
    protected \$content;
    /** @internal */
    protected \$status;
    /** @internal */
    protected \$headers;

    /**
     * The headers array is a set of key/value pairs. If a header is present multiple times
     * then the value is an array of all the values.
     *
     * @param string \$content The content of the response
     * @param int    \$status  The response status code
     * @param array  \$headers An array of headers
     */
    public function __construct(string \$content = '', int \$status = 200, array \$headers = [])
    {
        \$this->content = \$content;
        \$this->status = \$status;
        \$this->headers = \$headers;
    }

    /**
     * Converts the response object to string containing all headers and the response content.
     *
     * @return string The response with headers and content
     */
    public function __toString()
    {
        \$headers = '';
        foreach (\$this->headers as \$name => \$value) {
            if (\\is_string(\$value)) {
                \$headers .= sprintf(\"%s: %s\\n\", \$name, \$value);
            } else {
                foreach (\$value as \$headerValue) {
                    \$headers .= sprintf(\"%s: %s\\n\", \$name, \$headerValue);
                }
            }
        }

        return \$headers.\"\\n\".\$this->content;
    }

    /**
     * Returns the build header line.
     *
     * @param string \$name  The header name
     * @param string \$value The header value
     *
     * @return string The built header line
     *
     * @deprecated since Symfony 4.3
     */
    protected function buildHeader(\$name, \$value)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.3.', __METHOD__), E_USER_DEPRECATED);

        return sprintf(\"%s: %s\\n\", \$name, \$value);
    }

    /**
     * Gets the response content.
     *
     * @return string The response content
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * Gets the response status code.
     *
     * @return int The response status code
     *
     * @deprecated since Symfony 4.3, use getStatusCode() instead
     */
    public function getStatus()
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.3, use getStatusCode() instead.', __METHOD__), E_USER_DEPRECATED);

        return \$this->status;
    }

    public function getStatusCode(): int
    {
        return \$this->status;
    }

    /**
     * Gets the response headers.
     *
     * @return array The response headers
     */
    public function getHeaders()
    {
        return \$this->headers;
    }

    /**
     * Gets a response header.
     *
     * @param string \$header The header name
     * @param bool   \$first  Whether to return the first value or all header values
     *
     * @return string|array The first header value if \$first is true, an array of values otherwise
     */
    public function getHeader(\$header, \$first = true)
    {
        \$normalizedHeader = str_replace('-', '_', strtolower(\$header));
        foreach (\$this->headers as \$key => \$value) {
            if (str_replace('-', '_', strtolower(\$key)) === \$normalizedHeader) {
                if (\$first) {
                    return \\is_array(\$value) ? (\\count(\$value) ? \$value[0] : '') : \$value;
                }

                return \\is_array(\$value) ? \$value : [\$value];
            }
        }

        return \$first ? null : [];
    }
}
", "vendor/symfony/browser-kit/Response.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/Response.php");
    }
}
