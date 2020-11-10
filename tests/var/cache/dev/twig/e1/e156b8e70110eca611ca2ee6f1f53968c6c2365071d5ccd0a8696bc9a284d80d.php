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

/* vendor/symfony/browser-kit/Request.php */
class __TwigTemplate_24ffe59d7f0a08e6d4f576f86f69a48953a0b7b40996457187090a3a9502c2fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Request.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Request.php"));

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
 */
class Request
{
    protected \$uri;
    protected \$method;
    protected \$parameters;
    protected \$files;
    protected \$cookies;
    protected \$server;
    protected \$content;

    /**
     * @param string \$uri        The request URI
     * @param string \$method     The HTTP method request
     * @param array  \$parameters The request parameters
     * @param array  \$files      An array of uploaded files
     * @param array  \$cookies    An array of cookies
     * @param array  \$server     An array of server parameters
     * @param string \$content    The raw body data
     */
    public function __construct(string \$uri, string \$method, array \$parameters = [], array \$files = [], array \$cookies = [], array \$server = [], string \$content = null)
    {
        \$this->uri = \$uri;
        \$this->method = \$method;
        \$this->parameters = \$parameters;
        \$this->files = \$files;
        \$this->cookies = \$cookies;
        \$this->server = \$server;
        \$this->content = \$content;
    }

    /**
     * Gets the request URI.
     *
     * @return string The request URI
     */
    public function getUri()
    {
        return \$this->uri;
    }

    /**
     * Gets the request HTTP method.
     *
     * @return string The request HTTP method
     */
    public function getMethod()
    {
        return \$this->method;
    }

    /**
     * Gets the request parameters.
     *
     * @return array The request parameters
     */
    public function getParameters()
    {
        return \$this->parameters;
    }

    /**
     * Gets the request server files.
     *
     * @return array The request files
     */
    public function getFiles()
    {
        return \$this->files;
    }

    /**
     * Gets the request cookies.
     *
     * @return array The request cookies
     */
    public function getCookies()
    {
        return \$this->cookies;
    }

    /**
     * Gets the request server parameters.
     *
     * @return array The request server parameters
     */
    public function getServer()
    {
        return \$this->server;
    }

    /**
     * Gets the request raw body data.
     *
     * @return string|null The request raw body data
     */
    public function getContent()
    {
        return \$this->content;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/Request.php";
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
 */
class Request
{
    protected \$uri;
    protected \$method;
    protected \$parameters;
    protected \$files;
    protected \$cookies;
    protected \$server;
    protected \$content;

    /**
     * @param string \$uri        The request URI
     * @param string \$method     The HTTP method request
     * @param array  \$parameters The request parameters
     * @param array  \$files      An array of uploaded files
     * @param array  \$cookies    An array of cookies
     * @param array  \$server     An array of server parameters
     * @param string \$content    The raw body data
     */
    public function __construct(string \$uri, string \$method, array \$parameters = [], array \$files = [], array \$cookies = [], array \$server = [], string \$content = null)
    {
        \$this->uri = \$uri;
        \$this->method = \$method;
        \$this->parameters = \$parameters;
        \$this->files = \$files;
        \$this->cookies = \$cookies;
        \$this->server = \$server;
        \$this->content = \$content;
    }

    /**
     * Gets the request URI.
     *
     * @return string The request URI
     */
    public function getUri()
    {
        return \$this->uri;
    }

    /**
     * Gets the request HTTP method.
     *
     * @return string The request HTTP method
     */
    public function getMethod()
    {
        return \$this->method;
    }

    /**
     * Gets the request parameters.
     *
     * @return array The request parameters
     */
    public function getParameters()
    {
        return \$this->parameters;
    }

    /**
     * Gets the request server files.
     *
     * @return array The request files
     */
    public function getFiles()
    {
        return \$this->files;
    }

    /**
     * Gets the request cookies.
     *
     * @return array The request cookies
     */
    public function getCookies()
    {
        return \$this->cookies;
    }

    /**
     * Gets the request server parameters.
     *
     * @return array The request server parameters
     */
    public function getServer()
    {
        return \$this->server;
    }

    /**
     * Gets the request raw body data.
     *
     * @return string|null The request raw body data
     */
    public function getContent()
    {
        return \$this->content;
    }
}
", "vendor/symfony/browser-kit/Request.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/Request.php");
    }
}
