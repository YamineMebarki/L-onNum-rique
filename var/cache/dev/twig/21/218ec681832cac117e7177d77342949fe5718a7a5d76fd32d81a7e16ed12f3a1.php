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

/* vendor/symfony/http-kernel/Client.php */
class __TwigTemplate_4c0197f88d0d7fc8df49867417b92b2d4e2d6d3fb60195451d1b4ef1af6d49d0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Client.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Client.php"));

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

namespace Symfony\\Component\\HttpKernel;

use Symfony\\Component\\BrowserKit\\AbstractBrowser;
use Symfony\\Component\\BrowserKit\\CookieJar;
use Symfony\\Component\\BrowserKit\\History;
use Symfony\\Component\\BrowserKit\\Request as DomRequest;
use Symfony\\Component\\BrowserKit\\Response as DomResponse;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Client simulates a browser and makes requests to an HttpKernel instance.
 *
 * @method Request  getRequest()  A Request instance
 * @method Response getResponse() A Response instance
 *
 * @deprecated since Symfony 4.3, use HttpKernelBrowser instead.
 */
class Client extends AbstractBrowser
{
    protected \$kernel;
    private \$catchExceptions = true;

    /**
     * @param HttpKernelInterface \$kernel    An HttpKernel instance
     * @param array               \$server    The server parameters (equivalent of \$_SERVER)
     * @param History             \$history   A History instance to store the browser history
     * @param CookieJar           \$cookieJar A CookieJar instance to store the cookies
     */
    public function __construct(HttpKernelInterface \$kernel, array \$server = [], History \$history = null, CookieJar \$cookieJar = null)
    {
        // These class properties must be set before calling the parent constructor, as it may depend on it.
        \$this->kernel = \$kernel;
        \$this->followRedirects = false;

        parent::__construct(\$server, \$history, \$cookieJar);
    }

    /**
     * Sets whether to catch exceptions when the kernel is handling a request.
     *
     * @param bool \$catchExceptions Whether to catch exceptions
     */
    public function catchExceptions(\$catchExceptions)
    {
        \$this->catchExceptions = \$catchExceptions;
    }

    /**
     * Makes a request.
     *
     * @return Response A Response instance
     */
    protected function doRequest(\$request)
    {
        \$response = \$this->kernel->handle(\$request, HttpKernelInterface::MASTER_REQUEST, \$this->catchExceptions);

        if (\$this->kernel instanceof TerminableInterface) {
            \$this->kernel->terminate(\$request, \$response);
        }

        return \$response;
    }

    /**
     * Returns the script to execute when the request must be insulated.
     *
     * @return string
     */
    protected function getScript(\$request)
    {
        \$kernel = var_export(serialize(\$this->kernel), true);
        \$request = var_export(serialize(\$request), true);

        \$errorReporting = error_reporting();

        \$requires = '';
        foreach (get_declared_classes() as \$class) {
            if (0 === strpos(\$class, 'ComposerAutoloaderInit')) {
                \$r = new \\ReflectionClass(\$class);
                \$file = \\dirname(\$r->getFileName(), 2).'/autoload.php';
                if (file_exists(\$file)) {
                    \$requires .= 'require_once '.var_export(\$file, true).\";\\n\";
                }
            }
        }

        if (!\$requires) {
            throw new \\RuntimeException('Composer autoloader not found.');
        }

        \$code = <<<EOF
<?php

error_reporting(\$errorReporting);

\$requires

\\\$kernel = unserialize(\$kernel);
\\\$request = unserialize(\$request);
EOF;

        return \$code.\$this->getHandleScript();
    }

    protected function getHandleScript()
    {
        return <<<'EOF'
\$response = \$kernel->handle(\$request);

if (\$kernel instanceof Symfony\\Component\\HttpKernel\\TerminableInterface) {
    \$kernel->terminate(\$request, \$response);
}

echo serialize(\$response);
EOF;
    }

    /**
     * Converts the BrowserKit request to a HttpKernel request.
     *
     * @return Request A Request instance
     */
    protected function filterRequest(DomRequest \$request)
    {
        \$httpRequest = Request::create(\$request->getUri(), \$request->getMethod(), \$request->getParameters(), \$request->getCookies(), \$request->getFiles(), \$request->getServer(), \$request->getContent());

        foreach (\$this->filterFiles(\$httpRequest->files->all()) as \$key => \$value) {
            \$httpRequest->files->set(\$key, \$value);
        }

        return \$httpRequest;
    }

    /**
     * Filters an array of files.
     *
     * This method created test instances of UploadedFile so that the move()
     * method can be called on those instances.
     *
     * If the size of a file is greater than the allowed size (from php.ini) then
     * an invalid UploadedFile is returned with an error set to UPLOAD_ERR_INI_SIZE.
     *
     * @see UploadedFile
     *
     * @return array An array with all uploaded files marked as already moved
     */
    protected function filterFiles(array \$files)
    {
        \$filtered = [];
        foreach (\$files as \$key => \$value) {
            if (\\is_array(\$value)) {
                \$filtered[\$key] = \$this->filterFiles(\$value);
            } elseif (\$value instanceof UploadedFile) {
                if (\$value->isValid() && \$value->getSize() > UploadedFile::getMaxFilesize()) {
                    \$filtered[\$key] = new UploadedFile(
                        '',
                        \$value->getClientOriginalName(),
                        \$value->getClientMimeType(),
                        UPLOAD_ERR_INI_SIZE,
                        true
                    );
                } else {
                    \$filtered[\$key] = new UploadedFile(
                        \$value->getPathname(),
                        \$value->getClientOriginalName(),
                        \$value->getClientMimeType(),
                        \$value->getError(),
                        true
                    );
                }
            }
        }

        return \$filtered;
    }

    /**
     * Converts the HttpKernel response to a BrowserKit response.
     *
     * @return DomResponse A DomResponse instance
     */
    protected function filterResponse(\$response)
    {
        // this is needed to support StreamedResponse
        ob_start();
        \$response->sendContent();
        \$content = ob_get_clean();

        return new DomResponse(\$content, \$response->getStatusCode(), \$response->headers->all());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Client.php";
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

namespace Symfony\\Component\\HttpKernel;

use Symfony\\Component\\BrowserKit\\AbstractBrowser;
use Symfony\\Component\\BrowserKit\\CookieJar;
use Symfony\\Component\\BrowserKit\\History;
use Symfony\\Component\\BrowserKit\\Request as DomRequest;
use Symfony\\Component\\BrowserKit\\Response as DomResponse;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Client simulates a browser and makes requests to an HttpKernel instance.
 *
 * @method Request  getRequest()  A Request instance
 * @method Response getResponse() A Response instance
 *
 * @deprecated since Symfony 4.3, use HttpKernelBrowser instead.
 */
class Client extends AbstractBrowser
{
    protected \$kernel;
    private \$catchExceptions = true;

    /**
     * @param HttpKernelInterface \$kernel    An HttpKernel instance
     * @param array               \$server    The server parameters (equivalent of \$_SERVER)
     * @param History             \$history   A History instance to store the browser history
     * @param CookieJar           \$cookieJar A CookieJar instance to store the cookies
     */
    public function __construct(HttpKernelInterface \$kernel, array \$server = [], History \$history = null, CookieJar \$cookieJar = null)
    {
        // These class properties must be set before calling the parent constructor, as it may depend on it.
        \$this->kernel = \$kernel;
        \$this->followRedirects = false;

        parent::__construct(\$server, \$history, \$cookieJar);
    }

    /**
     * Sets whether to catch exceptions when the kernel is handling a request.
     *
     * @param bool \$catchExceptions Whether to catch exceptions
     */
    public function catchExceptions(\$catchExceptions)
    {
        \$this->catchExceptions = \$catchExceptions;
    }

    /**
     * Makes a request.
     *
     * @return Response A Response instance
     */
    protected function doRequest(\$request)
    {
        \$response = \$this->kernel->handle(\$request, HttpKernelInterface::MASTER_REQUEST, \$this->catchExceptions);

        if (\$this->kernel instanceof TerminableInterface) {
            \$this->kernel->terminate(\$request, \$response);
        }

        return \$response;
    }

    /**
     * Returns the script to execute when the request must be insulated.
     *
     * @return string
     */
    protected function getScript(\$request)
    {
        \$kernel = var_export(serialize(\$this->kernel), true);
        \$request = var_export(serialize(\$request), true);

        \$errorReporting = error_reporting();

        \$requires = '';
        foreach (get_declared_classes() as \$class) {
            if (0 === strpos(\$class, 'ComposerAutoloaderInit')) {
                \$r = new \\ReflectionClass(\$class);
                \$file = \\dirname(\$r->getFileName(), 2).'/autoload.php';
                if (file_exists(\$file)) {
                    \$requires .= 'require_once '.var_export(\$file, true).\";\\n\";
                }
            }
        }

        if (!\$requires) {
            throw new \\RuntimeException('Composer autoloader not found.');
        }

        \$code = <<<EOF
<?php

error_reporting(\$errorReporting);

\$requires

\\\$kernel = unserialize(\$kernel);
\\\$request = unserialize(\$request);
EOF;

        return \$code.\$this->getHandleScript();
    }

    protected function getHandleScript()
    {
        return <<<'EOF'
\$response = \$kernel->handle(\$request);

if (\$kernel instanceof Symfony\\Component\\HttpKernel\\TerminableInterface) {
    \$kernel->terminate(\$request, \$response);
}

echo serialize(\$response);
EOF;
    }

    /**
     * Converts the BrowserKit request to a HttpKernel request.
     *
     * @return Request A Request instance
     */
    protected function filterRequest(DomRequest \$request)
    {
        \$httpRequest = Request::create(\$request->getUri(), \$request->getMethod(), \$request->getParameters(), \$request->getCookies(), \$request->getFiles(), \$request->getServer(), \$request->getContent());

        foreach (\$this->filterFiles(\$httpRequest->files->all()) as \$key => \$value) {
            \$httpRequest->files->set(\$key, \$value);
        }

        return \$httpRequest;
    }

    /**
     * Filters an array of files.
     *
     * This method created test instances of UploadedFile so that the move()
     * method can be called on those instances.
     *
     * If the size of a file is greater than the allowed size (from php.ini) then
     * an invalid UploadedFile is returned with an error set to UPLOAD_ERR_INI_SIZE.
     *
     * @see UploadedFile
     *
     * @return array An array with all uploaded files marked as already moved
     */
    protected function filterFiles(array \$files)
    {
        \$filtered = [];
        foreach (\$files as \$key => \$value) {
            if (\\is_array(\$value)) {
                \$filtered[\$key] = \$this->filterFiles(\$value);
            } elseif (\$value instanceof UploadedFile) {
                if (\$value->isValid() && \$value->getSize() > UploadedFile::getMaxFilesize()) {
                    \$filtered[\$key] = new UploadedFile(
                        '',
                        \$value->getClientOriginalName(),
                        \$value->getClientMimeType(),
                        UPLOAD_ERR_INI_SIZE,
                        true
                    );
                } else {
                    \$filtered[\$key] = new UploadedFile(
                        \$value->getPathname(),
                        \$value->getClientOriginalName(),
                        \$value->getClientMimeType(),
                        \$value->getError(),
                        true
                    );
                }
            }
        }

        return \$filtered;
    }

    /**
     * Converts the HttpKernel response to a BrowserKit response.
     *
     * @return DomResponse A DomResponse instance
     */
    protected function filterResponse(\$response)
    {
        // this is needed to support StreamedResponse
        ob_start();
        \$response->sendContent();
        \$content = ob_get_clean();

        return new DomResponse(\$content, \$response->getStatusCode(), \$response->headers->all());
    }
}
", "vendor/symfony/http-kernel/Client.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Client.php");
    }
}
