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

/* vendor/symfony/twig-bundle/Controller/ExceptionController.php */
class __TwigTemplate_8a2ff68b11668cc2a116f86eb016425f72ae68a33bfa38d8a916ecc1532393cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Controller/ExceptionController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Controller/ExceptionController.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Controller;

use Symfony\\Component\\Debug\\Exception\\FlattenException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Loader\\ExistsLoaderInterface;
use Twig\\Loader\\SourceContextLoaderInterface;

/**
 * ExceptionController renders error or exception pages for a given
 * FlattenException.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ExceptionController
{
    protected \$twig;
    protected \$debug;

    /**
     * @param bool \$debug Show error (false) or exception (true) pages by default
     */
    public function __construct(Environment \$twig, bool \$debug)
    {
        \$this->twig = \$twig;
        \$this->debug = \$debug;
    }

    /**
     * Converts an Exception to a Response.
     *
     * A \"showException\" request parameter can be used to force display of an error page (when set to false) or
     * the exception page (when true). If it is not present, the \"debug\" value passed into the constructor will
     * be used.
     *
     * @return Response
     *
     * @throws \\InvalidArgumentException When the exception template does not exist
     */
    public function showAction(Request \$request, FlattenException \$exception, DebugLoggerInterface \$logger = null)
    {
        \$currentContent = \$this->getAndCleanOutputBuffering(\$request->headers->get('X-Php-Ob-Level', -1));
        \$showException = \$request->attributes->get('showException', \$this->debug); // As opposed to an additional parameter, this maintains BC

        \$code = \$exception->getStatusCode();

        return new Response(\$this->twig->render(
            (string) \$this->findTemplate(\$request, \$request->getRequestFormat(), \$code, \$showException),
            [
                'status_code' => \$code,
                'status_text' => isset(Response::\$statusTexts[\$code]) ? Response::\$statusTexts[\$code] : '',
                'exception' => \$exception,
                'logger' => \$logger,
                'currentContent' => \$currentContent,
            ]
        ), 200, ['Content-Type' => \$request->getMimeType(\$request->getRequestFormat()) ?: 'text/html']);
    }

    /**
     * @param int \$startObLevel
     *
     * @return string
     */
    protected function getAndCleanOutputBuffering(\$startObLevel)
    {
        if (ob_get_level() <= \$startObLevel) {
            return '';
        }

        Response::closeOutputBuffers(\$startObLevel + 1, true);

        return ob_get_clean();
    }

    /**
     * @param string \$format
     * @param int    \$code          An HTTP response status code
     * @param bool   \$showException
     *
     * @return string
     */
    protected function findTemplate(Request \$request, \$format, \$code, \$showException)
    {
        \$name = \$showException ? 'exception' : 'error';
        if (\$showException && 'html' == \$format) {
            \$name = 'exception_full';
        }

        // For error pages, try to find a template for the specific HTTP status code and format
        if (!\$showException) {
            \$template = sprintf('@Twig/Exception/%s%s.%s.twig', \$name, \$code, \$format);
            if (\$this->templateExists(\$template)) {
                return \$template;
            }
        }

        // try to find a template for the given format
        \$template = sprintf('@Twig/Exception/%s.%s.twig', \$name, \$format);
        if (\$this->templateExists(\$template)) {
            return \$template;
        }

        // default to a generic HTML exception
        \$request->setRequestFormat('html');

        return sprintf('@Twig/Exception/%s.html.twig', \$showException ? 'exception_full' : \$name);
    }

    // to be removed when the minimum required version of Twig is >= 2.0
    protected function templateExists(\$template)
    {
        \$template = (string) \$template;

        \$loader = \$this->twig->getLoader();

        if (1 === Environment::MAJOR_VERSION && !\$loader instanceof ExistsLoaderInterface) {
            try {
                if (\$loader instanceof SourceContextLoaderInterface) {
                    \$loader->getSourceContext(\$template);
                } else {
                    \$loader->getSource(\$template);
                }

                return true;
            } catch (LoaderError \$e) {
            }

            return false;
        }

        return \$loader->exists(\$template);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Controller/ExceptionController.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Controller;

use Symfony\\Component\\Debug\\Exception\\FlattenException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Loader\\ExistsLoaderInterface;
use Twig\\Loader\\SourceContextLoaderInterface;

/**
 * ExceptionController renders error or exception pages for a given
 * FlattenException.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ExceptionController
{
    protected \$twig;
    protected \$debug;

    /**
     * @param bool \$debug Show error (false) or exception (true) pages by default
     */
    public function __construct(Environment \$twig, bool \$debug)
    {
        \$this->twig = \$twig;
        \$this->debug = \$debug;
    }

    /**
     * Converts an Exception to a Response.
     *
     * A \"showException\" request parameter can be used to force display of an error page (when set to false) or
     * the exception page (when true). If it is not present, the \"debug\" value passed into the constructor will
     * be used.
     *
     * @return Response
     *
     * @throws \\InvalidArgumentException When the exception template does not exist
     */
    public function showAction(Request \$request, FlattenException \$exception, DebugLoggerInterface \$logger = null)
    {
        \$currentContent = \$this->getAndCleanOutputBuffering(\$request->headers->get('X-Php-Ob-Level', -1));
        \$showException = \$request->attributes->get('showException', \$this->debug); // As opposed to an additional parameter, this maintains BC

        \$code = \$exception->getStatusCode();

        return new Response(\$this->twig->render(
            (string) \$this->findTemplate(\$request, \$request->getRequestFormat(), \$code, \$showException),
            [
                'status_code' => \$code,
                'status_text' => isset(Response::\$statusTexts[\$code]) ? Response::\$statusTexts[\$code] : '',
                'exception' => \$exception,
                'logger' => \$logger,
                'currentContent' => \$currentContent,
            ]
        ), 200, ['Content-Type' => \$request->getMimeType(\$request->getRequestFormat()) ?: 'text/html']);
    }

    /**
     * @param int \$startObLevel
     *
     * @return string
     */
    protected function getAndCleanOutputBuffering(\$startObLevel)
    {
        if (ob_get_level() <= \$startObLevel) {
            return '';
        }

        Response::closeOutputBuffers(\$startObLevel + 1, true);

        return ob_get_clean();
    }

    /**
     * @param string \$format
     * @param int    \$code          An HTTP response status code
     * @param bool   \$showException
     *
     * @return string
     */
    protected function findTemplate(Request \$request, \$format, \$code, \$showException)
    {
        \$name = \$showException ? 'exception' : 'error';
        if (\$showException && 'html' == \$format) {
            \$name = 'exception_full';
        }

        // For error pages, try to find a template for the specific HTTP status code and format
        if (!\$showException) {
            \$template = sprintf('@Twig/Exception/%s%s.%s.twig', \$name, \$code, \$format);
            if (\$this->templateExists(\$template)) {
                return \$template;
            }
        }

        // try to find a template for the given format
        \$template = sprintf('@Twig/Exception/%s.%s.twig', \$name, \$format);
        if (\$this->templateExists(\$template)) {
            return \$template;
        }

        // default to a generic HTML exception
        \$request->setRequestFormat('html');

        return sprintf('@Twig/Exception/%s.html.twig', \$showException ? 'exception_full' : \$name);
    }

    // to be removed when the minimum required version of Twig is >= 2.0
    protected function templateExists(\$template)
    {
        \$template = (string) \$template;

        \$loader = \$this->twig->getLoader();

        if (1 === Environment::MAJOR_VERSION && !\$loader instanceof ExistsLoaderInterface) {
            try {
                if (\$loader instanceof SourceContextLoaderInterface) {
                    \$loader->getSourceContext(\$template);
                } else {
                    \$loader->getSource(\$template);
                }

                return true;
            } catch (LoaderError \$e) {
            }

            return false;
        }

        return \$loader->exists(\$template);
    }
}
", "vendor/symfony/twig-bundle/Controller/ExceptionController.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Controller/ExceptionController.php");
    }
}
