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

/* vendor/symfony/web-profiler-bundle/Controller/ExceptionController.php */
class __TwigTemplate_1d6ceb57c7c4f5f8b0a20d12bd90ef32ff309829dd6ea96c6a9c7ce164fd2de5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Controller/ExceptionController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Controller/ExceptionController.php"));

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

namespace Symfony\\Bundle\\WebProfilerBundle\\Controller;

use Symfony\\Component\\Debug\\ExceptionHandler;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Loader\\ExistsLoaderInterface;
use Twig\\Loader\\SourceContextLoaderInterface;

/**
 * ExceptionController.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExceptionController
{
    protected \$twig;
    protected \$debug;
    protected \$profiler;
    private \$fileLinkFormat;

    public function __construct(Profiler \$profiler = null, Environment \$twig, bool \$debug, FileLinkFormatter \$fileLinkFormat = null)
    {
        \$this->profiler = \$profiler;
        \$this->twig = \$twig;
        \$this->debug = \$debug;
        \$this->fileLinkFormat = \$fileLinkFormat;
    }

    /**
     * Renders the exception panel for the given token.
     *
     * @param string \$token The profiler token
     *
     * @return Response A Response instance
     *
     * @throws NotFoundHttpException
     */
    public function showAction(\$token)
    {
        if (null === \$this->profiler) {
            throw new NotFoundHttpException('The profiler must be enabled.');
        }

        \$this->profiler->disable();

        \$exception = \$this->profiler->loadProfile(\$token)->getCollector('exception')->getException();
        \$template = \$this->getTemplate();

        if (!\$this->templateExists(\$template)) {
            \$handler = new ExceptionHandler(\$this->debug, \$this->twig->getCharset(), \$this->fileLinkFormat);

            return new Response(\$handler->getContent(\$exception), 200, ['Content-Type' => 'text/html']);
        }

        \$code = \$exception->getStatusCode();

        return new Response(\$this->twig->render(
            \$template,
            [
                'status_code' => \$code,
                'status_text' => Response::\$statusTexts[\$code],
                'exception' => \$exception,
                'logger' => null,
                'currentContent' => '',
            ]
        ), 200, ['Content-Type' => 'text/html']);
    }

    /**
     * Renders the exception panel stylesheet for the given token.
     *
     * @param string \$token The profiler token
     *
     * @return Response A Response instance
     *
     * @throws NotFoundHttpException
     */
    public function cssAction(\$token)
    {
        if (null === \$this->profiler) {
            throw new NotFoundHttpException('The profiler must be enabled.');
        }

        \$this->profiler->disable();

        \$exception = \$this->profiler->loadProfile(\$token)->getCollector('exception')->getException();
        \$template = \$this->getTemplate();

        if (!\$this->templateExists(\$template)) {
            \$handler = new ExceptionHandler(\$this->debug, \$this->twig->getCharset(), \$this->fileLinkFormat);

            return new Response(\$handler->getStylesheet(\$exception), 200, ['Content-Type' => 'text/css']);
        }

        return new Response(\$this->twig->render('@WebProfiler/Collector/exception.css.twig'), 200, ['Content-Type' => 'text/css']);
    }

    protected function getTemplate()
    {
        return '@Twig/Exception/'.(\$this->debug ? 'exception' : 'error').'.html.twig';
    }

    // to be removed when the minimum required version of Twig is >= 2.0
    protected function templateExists(\$template)
    {
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
        return "vendor/symfony/web-profiler-bundle/Controller/ExceptionController.php";
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

namespace Symfony\\Bundle\\WebProfilerBundle\\Controller;

use Symfony\\Component\\Debug\\ExceptionHandler;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Loader\\ExistsLoaderInterface;
use Twig\\Loader\\SourceContextLoaderInterface;

/**
 * ExceptionController.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExceptionController
{
    protected \$twig;
    protected \$debug;
    protected \$profiler;
    private \$fileLinkFormat;

    public function __construct(Profiler \$profiler = null, Environment \$twig, bool \$debug, FileLinkFormatter \$fileLinkFormat = null)
    {
        \$this->profiler = \$profiler;
        \$this->twig = \$twig;
        \$this->debug = \$debug;
        \$this->fileLinkFormat = \$fileLinkFormat;
    }

    /**
     * Renders the exception panel for the given token.
     *
     * @param string \$token The profiler token
     *
     * @return Response A Response instance
     *
     * @throws NotFoundHttpException
     */
    public function showAction(\$token)
    {
        if (null === \$this->profiler) {
            throw new NotFoundHttpException('The profiler must be enabled.');
        }

        \$this->profiler->disable();

        \$exception = \$this->profiler->loadProfile(\$token)->getCollector('exception')->getException();
        \$template = \$this->getTemplate();

        if (!\$this->templateExists(\$template)) {
            \$handler = new ExceptionHandler(\$this->debug, \$this->twig->getCharset(), \$this->fileLinkFormat);

            return new Response(\$handler->getContent(\$exception), 200, ['Content-Type' => 'text/html']);
        }

        \$code = \$exception->getStatusCode();

        return new Response(\$this->twig->render(
            \$template,
            [
                'status_code' => \$code,
                'status_text' => Response::\$statusTexts[\$code],
                'exception' => \$exception,
                'logger' => null,
                'currentContent' => '',
            ]
        ), 200, ['Content-Type' => 'text/html']);
    }

    /**
     * Renders the exception panel stylesheet for the given token.
     *
     * @param string \$token The profiler token
     *
     * @return Response A Response instance
     *
     * @throws NotFoundHttpException
     */
    public function cssAction(\$token)
    {
        if (null === \$this->profiler) {
            throw new NotFoundHttpException('The profiler must be enabled.');
        }

        \$this->profiler->disable();

        \$exception = \$this->profiler->loadProfile(\$token)->getCollector('exception')->getException();
        \$template = \$this->getTemplate();

        if (!\$this->templateExists(\$template)) {
            \$handler = new ExceptionHandler(\$this->debug, \$this->twig->getCharset(), \$this->fileLinkFormat);

            return new Response(\$handler->getStylesheet(\$exception), 200, ['Content-Type' => 'text/css']);
        }

        return new Response(\$this->twig->render('@WebProfiler/Collector/exception.css.twig'), 200, ['Content-Type' => 'text/css']);
    }

    protected function getTemplate()
    {
        return '@Twig/Exception/'.(\$this->debug ? 'exception' : 'error').'.html.twig';
    }

    // to be removed when the minimum required version of Twig is >= 2.0
    protected function templateExists(\$template)
    {
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
", "vendor/symfony/web-profiler-bundle/Controller/ExceptionController.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Controller/ExceptionController.php");
    }
}
