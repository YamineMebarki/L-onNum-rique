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

/* vendor/symfony/form/Extension/HttpFoundation/HttpFoundationRequestHandler.php */
class __TwigTemplate_6c18f3caed9b9f362a8fdd6de9490ca53cec0b445193054d476232e1955a730d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/HttpFoundation/HttpFoundationRequestHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/HttpFoundation/HttpFoundationRequestHandler.php"));

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

namespace Symfony\\Component\\Form\\Extension\\HttpFoundation;

use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\RequestHandlerInterface;
use Symfony\\Component\\Form\\Util\\ServerParams;
use Symfony\\Component\\HttpFoundation\\File\\File;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * A request processor using the {@link Request} class of the HttpFoundation
 * component.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class HttpFoundationRequestHandler implements RequestHandlerInterface
{
    private \$serverParams;

    public function __construct(ServerParams \$serverParams = null)
    {
        \$this->serverParams = \$serverParams ?: new ServerParams();
    }

    /**
     * {@inheritdoc}
     */
    public function handleRequest(FormInterface \$form, \$request = null)
    {
        if (!\$request instanceof Request) {
            throw new UnexpectedTypeException(\$request, 'Symfony\\Component\\HttpFoundation\\Request');
        }

        \$name = \$form->getName();
        \$method = \$form->getConfig()->getMethod();

        if (\$method !== \$request->getMethod()) {
            return;
        }

        // For request methods that must not have a request body we fetch data
        // from the query string. Otherwise we look for data in the request body.
        if ('GET' === \$method || 'HEAD' === \$method || 'TRACE' === \$method) {
            if ('' === \$name) {
                \$data = \$request->query->all();
            } else {
                // Don't submit GET requests if the form's name does not exist
                // in the request
                if (!\$request->query->has(\$name)) {
                    return;
                }

                \$data = \$request->query->get(\$name);
            }
        } else {
            // Mark the form with an error if the uploaded size was too large
            // This is done here and not in FormValidator because \$_POST is
            // empty when that error occurs. Hence the form is never submitted.
            if (\$this->serverParams->hasPostMaxSizeBeenExceeded()) {
                // Submit the form, but don't clear the default values
                \$form->submit(null, false);

                \$form->addError(new FormError(
                    \$form->getConfig()->getOption('upload_max_size_message')(),
                    null,
                    ['";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "' => \$this->serverParams->getNormalizedIniPostMaxSize()]
                ));

                return;
            }

            if ('' === \$name) {
                \$params = \$request->request->all();
                \$files = \$request->files->all();
            } elseif (\$request->request->has(\$name) || \$request->files->has(\$name)) {
                \$default = \$form->getConfig()->getCompound() ? [] : null;
                \$params = \$request->request->get(\$name, \$default);
                \$files = \$request->files->get(\$name, \$default);
            } else {
                // Don't submit the form if it is not present in the request
                return;
            }

            if (\\is_array(\$params) && \\is_array(\$files)) {
                \$data = array_replace_recursive(\$params, \$files);
            } else {
                \$data = \$params ?: \$files;
            }
        }

        // Don't auto-submit the form unless at least one field is present.
        if ('' === \$name && \\count(array_intersect_key(\$data, \$form->all())) <= 0) {
            return;
        }

        \$form->submit(\$data, 'PATCH' !== \$method);
    }

    /**
     * {@inheritdoc}
     */
    public function isFileUpload(\$data)
    {
        return \$data instanceof File;
    }

    /**
     * @return int|null
     */
    public function getUploadFileError(\$data)
    {
        if (!\$data instanceof UploadedFile || \$data->isValid()) {
            return null;
        }

        return \$data->getError();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/HttpFoundation/HttpFoundationRequestHandler.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 79,  43 => 1,);
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

namespace Symfony\\Component\\Form\\Extension\\HttpFoundation;

use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\RequestHandlerInterface;
use Symfony\\Component\\Form\\Util\\ServerParams;
use Symfony\\Component\\HttpFoundation\\File\\File;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * A request processor using the {@link Request} class of the HttpFoundation
 * component.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class HttpFoundationRequestHandler implements RequestHandlerInterface
{
    private \$serverParams;

    public function __construct(ServerParams \$serverParams = null)
    {
        \$this->serverParams = \$serverParams ?: new ServerParams();
    }

    /**
     * {@inheritdoc}
     */
    public function handleRequest(FormInterface \$form, \$request = null)
    {
        if (!\$request instanceof Request) {
            throw new UnexpectedTypeException(\$request, 'Symfony\\Component\\HttpFoundation\\Request');
        }

        \$name = \$form->getName();
        \$method = \$form->getConfig()->getMethod();

        if (\$method !== \$request->getMethod()) {
            return;
        }

        // For request methods that must not have a request body we fetch data
        // from the query string. Otherwise we look for data in the request body.
        if ('GET' === \$method || 'HEAD' === \$method || 'TRACE' === \$method) {
            if ('' === \$name) {
                \$data = \$request->query->all();
            } else {
                // Don't submit GET requests if the form's name does not exist
                // in the request
                if (!\$request->query->has(\$name)) {
                    return;
                }

                \$data = \$request->query->get(\$name);
            }
        } else {
            // Mark the form with an error if the uploaded size was too large
            // This is done here and not in FormValidator because \$_POST is
            // empty when that error occurs. Hence the form is never submitted.
            if (\$this->serverParams->hasPostMaxSizeBeenExceeded()) {
                // Submit the form, but don't clear the default values
                \$form->submit(null, false);

                \$form->addError(new FormError(
                    \$form->getConfig()->getOption('upload_max_size_message')(),
                    null,
                    ['{{ max }}' => \$this->serverParams->getNormalizedIniPostMaxSize()]
                ));

                return;
            }

            if ('' === \$name) {
                \$params = \$request->request->all();
                \$files = \$request->files->all();
            } elseif (\$request->request->has(\$name) || \$request->files->has(\$name)) {
                \$default = \$form->getConfig()->getCompound() ? [] : null;
                \$params = \$request->request->get(\$name, \$default);
                \$files = \$request->files->get(\$name, \$default);
            } else {
                // Don't submit the form if it is not present in the request
                return;
            }

            if (\\is_array(\$params) && \\is_array(\$files)) {
                \$data = array_replace_recursive(\$params, \$files);
            } else {
                \$data = \$params ?: \$files;
            }
        }

        // Don't auto-submit the form unless at least one field is present.
        if ('' === \$name && \\count(array_intersect_key(\$data, \$form->all())) <= 0) {
            return;
        }

        \$form->submit(\$data, 'PATCH' !== \$method);
    }

    /**
     * {@inheritdoc}
     */
    public function isFileUpload(\$data)
    {
        return \$data instanceof File;
    }

    /**
     * @return int|null
     */
    public function getUploadFileError(\$data)
    {
        if (!\$data instanceof UploadedFile || \$data->isValid()) {
            return null;
        }

        return \$data->getError();
    }
}
", "vendor/symfony/form/Extension/HttpFoundation/HttpFoundationRequestHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/HttpFoundation/HttpFoundationRequestHandler.php");
    }
}
