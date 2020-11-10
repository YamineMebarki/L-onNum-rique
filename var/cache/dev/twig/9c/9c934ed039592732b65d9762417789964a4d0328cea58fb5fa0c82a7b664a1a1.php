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

/* vendor/symfony/web-server-bundle/WebServerConfig.php */
class __TwigTemplate_4195a1609ece2460ce93f364dabeabc0acb1954f77ec03be20298cfb0bfc1b85 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/WebServerConfig.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/WebServerConfig.php"));

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

namespace Symfony\\Bundle\\WebServerBundle;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WebServerConfig
{
    private \$hostname;
    private \$port;
    private \$documentRoot;
    private \$env;
    private \$router;

    public function __construct(string \$documentRoot, string \$env, string \$address = null, string \$router = null)
    {
        if (!is_dir(\$documentRoot)) {
            throw new \\InvalidArgumentException(sprintf('The document root directory \"%s\" does not exist.', \$documentRoot));
        }

        if (null === \$file = \$this->findFrontController(\$documentRoot, \$env)) {
            throw new \\InvalidArgumentException(sprintf('Unable to find the front controller under \"%s\" (none of these files exist: %s).', \$documentRoot, implode(', ', \$this->getFrontControllerFileNames(\$env))));
        }

        \$_ENV['APP_FRONT_CONTROLLER'] = \$file;

        \$this->documentRoot = \$documentRoot;
        \$this->env = \$env;

        if (null !== \$router) {
            \$absoluteRouterPath = realpath(\$router);

            if (false === \$absoluteRouterPath) {
                throw new \\InvalidArgumentException(sprintf('Router script \"%s\" does not exist.', \$router));
            }

            \$this->router = \$absoluteRouterPath;
        } else {
            \$this->router = __DIR__.'/Resources/router.php';
        }

        if (null === \$address) {
            \$this->hostname = '127.0.0.1';
            \$this->port = \$this->findBestPort();
        } elseif (false !== \$pos = strrpos(\$address, ':')) {
            \$this->hostname = substr(\$address, 0, \$pos);
            if ('*' === \$this->hostname) {
                \$this->hostname = '0.0.0.0';
            }
            \$this->port = substr(\$address, \$pos + 1);
        } elseif (ctype_digit(\$address)) {
            \$this->hostname = '127.0.0.1';
            \$this->port = \$address;
        } else {
            \$this->hostname = \$address;
            \$this->port = \$this->findBestPort();
        }

        if (!ctype_digit(\$this->port)) {
            throw new \\InvalidArgumentException(sprintf('Port \"%s\" is not valid.', \$this->port));
        }
    }

    public function getDocumentRoot()
    {
        return \$this->documentRoot;
    }

    public function getEnv()
    {
        return \$this->env;
    }

    public function getRouter()
    {
        return \$this->router;
    }

    public function getHostname()
    {
        return \$this->hostname;
    }

    public function getPort()
    {
        return \$this->port;
    }

    public function getAddress()
    {
        return \$this->hostname.':'.\$this->port;
    }

    /**
     * @return string contains resolved hostname if available, empty string otherwise
     */
    public function getDisplayAddress()
    {
        if ('0.0.0.0' !== \$this->hostname) {
            return '';
        }

        if (false === \$localHostname = gethostname()) {
            return '';
        }

        return gethostbyname(\$localHostname).':'.\$this->port;
    }

    private function findFrontController(string \$documentRoot, string \$env): ?string
    {
        \$fileNames = \$this->getFrontControllerFileNames(\$env);

        foreach (\$fileNames as \$fileName) {
            if (file_exists(\$documentRoot.'/'.\$fileName)) {
                return \$fileName;
            }
        }

        return null;
    }

    private function getFrontControllerFileNames(string \$env): array
    {
        return ['app_'.\$env.'.php', 'app.php', 'index_'.\$env.'.php', 'index.php'];
    }

    private function findBestPort(): int
    {
        \$port = 8000;
        while (false !== \$fp = @fsockopen(\$this->hostname, \$port, \$errno, \$errstr, 1)) {
            fclose(\$fp);
            if (\$port++ >= 8100) {
                throw new \\RuntimeException('Unable to find a port available to run the web server.');
            }
        }

        return \$port;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-server-bundle/WebServerConfig.php";
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

namespace Symfony\\Bundle\\WebServerBundle;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WebServerConfig
{
    private \$hostname;
    private \$port;
    private \$documentRoot;
    private \$env;
    private \$router;

    public function __construct(string \$documentRoot, string \$env, string \$address = null, string \$router = null)
    {
        if (!is_dir(\$documentRoot)) {
            throw new \\InvalidArgumentException(sprintf('The document root directory \"%s\" does not exist.', \$documentRoot));
        }

        if (null === \$file = \$this->findFrontController(\$documentRoot, \$env)) {
            throw new \\InvalidArgumentException(sprintf('Unable to find the front controller under \"%s\" (none of these files exist: %s).', \$documentRoot, implode(', ', \$this->getFrontControllerFileNames(\$env))));
        }

        \$_ENV['APP_FRONT_CONTROLLER'] = \$file;

        \$this->documentRoot = \$documentRoot;
        \$this->env = \$env;

        if (null !== \$router) {
            \$absoluteRouterPath = realpath(\$router);

            if (false === \$absoluteRouterPath) {
                throw new \\InvalidArgumentException(sprintf('Router script \"%s\" does not exist.', \$router));
            }

            \$this->router = \$absoluteRouterPath;
        } else {
            \$this->router = __DIR__.'/Resources/router.php';
        }

        if (null === \$address) {
            \$this->hostname = '127.0.0.1';
            \$this->port = \$this->findBestPort();
        } elseif (false !== \$pos = strrpos(\$address, ':')) {
            \$this->hostname = substr(\$address, 0, \$pos);
            if ('*' === \$this->hostname) {
                \$this->hostname = '0.0.0.0';
            }
            \$this->port = substr(\$address, \$pos + 1);
        } elseif (ctype_digit(\$address)) {
            \$this->hostname = '127.0.0.1';
            \$this->port = \$address;
        } else {
            \$this->hostname = \$address;
            \$this->port = \$this->findBestPort();
        }

        if (!ctype_digit(\$this->port)) {
            throw new \\InvalidArgumentException(sprintf('Port \"%s\" is not valid.', \$this->port));
        }
    }

    public function getDocumentRoot()
    {
        return \$this->documentRoot;
    }

    public function getEnv()
    {
        return \$this->env;
    }

    public function getRouter()
    {
        return \$this->router;
    }

    public function getHostname()
    {
        return \$this->hostname;
    }

    public function getPort()
    {
        return \$this->port;
    }

    public function getAddress()
    {
        return \$this->hostname.':'.\$this->port;
    }

    /**
     * @return string contains resolved hostname if available, empty string otherwise
     */
    public function getDisplayAddress()
    {
        if ('0.0.0.0' !== \$this->hostname) {
            return '';
        }

        if (false === \$localHostname = gethostname()) {
            return '';
        }

        return gethostbyname(\$localHostname).':'.\$this->port;
    }

    private function findFrontController(string \$documentRoot, string \$env): ?string
    {
        \$fileNames = \$this->getFrontControllerFileNames(\$env);

        foreach (\$fileNames as \$fileName) {
            if (file_exists(\$documentRoot.'/'.\$fileName)) {
                return \$fileName;
            }
        }

        return null;
    }

    private function getFrontControllerFileNames(string \$env): array
    {
        return ['app_'.\$env.'.php', 'app.php', 'index_'.\$env.'.php', 'index.php'];
    }

    private function findBestPort(): int
    {
        \$port = 8000;
        while (false !== \$fp = @fsockopen(\$this->hostname, \$port, \$errno, \$errstr, 1)) {
            fclose(\$fp);
            if (\$port++ >= 8100) {
                throw new \\RuntimeException('Unable to find a port available to run the web server.');
            }
        }

        return \$port;
    }
}
", "vendor/symfony/web-server-bundle/WebServerConfig.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-server-bundle/WebServerConfig.php");
    }
}
