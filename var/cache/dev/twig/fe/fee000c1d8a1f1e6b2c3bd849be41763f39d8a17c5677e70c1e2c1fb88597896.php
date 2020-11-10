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

/* vendor/symfony/framework-bundle/Client.php */
class __TwigTemplate_8697d0f821f3d4df832b7fb6ac70e4800ec44ff367084d485bfe6bcd28edf3e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Client.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Client.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle;

use Symfony\\Component\\BrowserKit\\CookieJar;
use Symfony\\Component\\BrowserKit\\History;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpKernelBrowser;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\HttpKernel\\Profiler\\Profile as HttpProfile;

/**
 * Client simulates a browser and makes requests to a Kernel object.
 *
 * @deprecated since Symfony 4.3, use KernelBrowser instead.
 */
class Client extends HttpKernelBrowser
{
    private \$hasPerformedRequest = false;
    private \$profiler = false;
    private \$reboot = true;

    /**
     * {@inheritdoc}
     */
    public function __construct(KernelInterface \$kernel, array \$server = [], History \$history = null, CookieJar \$cookieJar = null)
    {
        parent::__construct(\$kernel, \$server, \$history, \$cookieJar);
    }

    /**
     * Returns the container.
     *
     * @return ContainerInterface|null Returns null when the Kernel has been shutdown or not started yet
     */
    public function getContainer()
    {
        return \$this->kernel->getContainer();
    }

    /**
     * Returns the kernel.
     *
     * @return KernelInterface
     */
    public function getKernel()
    {
        return \$this->kernel;
    }

    /**
     * Gets the profile associated with the current Response.
     *
     * @return HttpProfile|false A Profile instance
     */
    public function getProfile()
    {
        if (null === \$this->response || !\$this->kernel->getContainer()->has('profiler')) {
            return false;
        }

        return \$this->kernel->getContainer()->get('profiler')->loadProfileFromResponse(\$this->response);
    }

    /**
     * Enables the profiler for the very next request.
     *
     * If the profiler is not enabled, the call to this method does nothing.
     */
    public function enableProfiler()
    {
        if (\$this->kernel->getContainer()->has('profiler')) {
            \$this->profiler = true;
        }
    }

    /**
     * Disables kernel reboot between requests.
     *
     * By default, the Client reboots the Kernel for each request. This method
     * allows to keep the same kernel across requests.
     */
    public function disableReboot()
    {
        \$this->reboot = false;
    }

    /**
     * Enables kernel reboot between requests.
     */
    public function enableReboot()
    {
        \$this->reboot = true;
    }

    /**
     * {@inheritdoc}
     *
     * @param Request \$request A Request instance
     *
     * @return Response A Response instance
     */
    protected function doRequest(\$request)
    {
        // avoid shutting down the Kernel if no request has been performed yet
        // WebTestCase::createClient() boots the Kernel but do not handle a request
        if (\$this->hasPerformedRequest && \$this->reboot) {
            \$this->kernel->shutdown();
        } else {
            \$this->hasPerformedRequest = true;
        }

        if (\$this->profiler) {
            \$this->profiler = false;

            \$this->kernel->boot();
            \$this->kernel->getContainer()->get('profiler')->enable();
        }

        return parent::doRequest(\$request);
    }

    /**
     * {@inheritdoc}
     *
     * @param Request \$request A Request instance
     *
     * @return Response A Response instance
     */
    protected function doRequestInProcess(\$request)
    {
        \$response = parent::doRequestInProcess(\$request);

        \$this->profiler = false;

        return \$response;
    }

    /**
     * Returns the script to execute when the request must be insulated.
     *
     * It assumes that the autoloader is named 'autoload.php' and that it is
     * stored in the same directory as the kernel (this is the case for the
     * Symfony Standard Edition). If this is not your case, create your own
     * client and override this method.
     *
     * @param Request \$request A Request instance
     *
     * @return string The script content
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

        \$requires .= 'require_once '.var_export((new \\ReflectionObject(\$this->kernel))->getFileName(), true).\";\\n\";

        \$profilerCode = '';
        if (\$this->profiler) {
            \$profilerCode = '\$kernel->getContainer()->get(\\'profiler\\')->enable();';
        }

        \$code = <<<EOF
<?php

error_reporting(\$errorReporting);

\$requires

\\\$kernel = unserialize(\$kernel);
\\\$kernel->boot();
\$profilerCode

\\\$request = unserialize(\$request);
EOF;

        return \$code.\$this->getHandleScript();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Client.php";
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

namespace Symfony\\Bundle\\FrameworkBundle;

use Symfony\\Component\\BrowserKit\\CookieJar;
use Symfony\\Component\\BrowserKit\\History;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpKernelBrowser;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\HttpKernel\\Profiler\\Profile as HttpProfile;

/**
 * Client simulates a browser and makes requests to a Kernel object.
 *
 * @deprecated since Symfony 4.3, use KernelBrowser instead.
 */
class Client extends HttpKernelBrowser
{
    private \$hasPerformedRequest = false;
    private \$profiler = false;
    private \$reboot = true;

    /**
     * {@inheritdoc}
     */
    public function __construct(KernelInterface \$kernel, array \$server = [], History \$history = null, CookieJar \$cookieJar = null)
    {
        parent::__construct(\$kernel, \$server, \$history, \$cookieJar);
    }

    /**
     * Returns the container.
     *
     * @return ContainerInterface|null Returns null when the Kernel has been shutdown or not started yet
     */
    public function getContainer()
    {
        return \$this->kernel->getContainer();
    }

    /**
     * Returns the kernel.
     *
     * @return KernelInterface
     */
    public function getKernel()
    {
        return \$this->kernel;
    }

    /**
     * Gets the profile associated with the current Response.
     *
     * @return HttpProfile|false A Profile instance
     */
    public function getProfile()
    {
        if (null === \$this->response || !\$this->kernel->getContainer()->has('profiler')) {
            return false;
        }

        return \$this->kernel->getContainer()->get('profiler')->loadProfileFromResponse(\$this->response);
    }

    /**
     * Enables the profiler for the very next request.
     *
     * If the profiler is not enabled, the call to this method does nothing.
     */
    public function enableProfiler()
    {
        if (\$this->kernel->getContainer()->has('profiler')) {
            \$this->profiler = true;
        }
    }

    /**
     * Disables kernel reboot between requests.
     *
     * By default, the Client reboots the Kernel for each request. This method
     * allows to keep the same kernel across requests.
     */
    public function disableReboot()
    {
        \$this->reboot = false;
    }

    /**
     * Enables kernel reboot between requests.
     */
    public function enableReboot()
    {
        \$this->reboot = true;
    }

    /**
     * {@inheritdoc}
     *
     * @param Request \$request A Request instance
     *
     * @return Response A Response instance
     */
    protected function doRequest(\$request)
    {
        // avoid shutting down the Kernel if no request has been performed yet
        // WebTestCase::createClient() boots the Kernel but do not handle a request
        if (\$this->hasPerformedRequest && \$this->reboot) {
            \$this->kernel->shutdown();
        } else {
            \$this->hasPerformedRequest = true;
        }

        if (\$this->profiler) {
            \$this->profiler = false;

            \$this->kernel->boot();
            \$this->kernel->getContainer()->get('profiler')->enable();
        }

        return parent::doRequest(\$request);
    }

    /**
     * {@inheritdoc}
     *
     * @param Request \$request A Request instance
     *
     * @return Response A Response instance
     */
    protected function doRequestInProcess(\$request)
    {
        \$response = parent::doRequestInProcess(\$request);

        \$this->profiler = false;

        return \$response;
    }

    /**
     * Returns the script to execute when the request must be insulated.
     *
     * It assumes that the autoloader is named 'autoload.php' and that it is
     * stored in the same directory as the kernel (this is the case for the
     * Symfony Standard Edition). If this is not your case, create your own
     * client and override this method.
     *
     * @param Request \$request A Request instance
     *
     * @return string The script content
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

        \$requires .= 'require_once '.var_export((new \\ReflectionObject(\$this->kernel))->getFileName(), true).\";\\n\";

        \$profilerCode = '';
        if (\$this->profiler) {
            \$profilerCode = '\$kernel->getContainer()->get(\\'profiler\\')->enable();';
        }

        \$code = <<<EOF
<?php

error_reporting(\$errorReporting);

\$requires

\\\$kernel = unserialize(\$kernel);
\\\$kernel->boot();
\$profilerCode

\\\$request = unserialize(\$request);
EOF;

        return \$code.\$this->getHandleScript();
    }
}
", "vendor/symfony/framework-bundle/Client.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Client.php");
    }
}
