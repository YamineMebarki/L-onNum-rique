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

/* vendor/symfony/http-kernel/Fragment/HIncludeFragmentRenderer.php */
class __TwigTemplate_5669b5f5676d18bcf929dabb7a01798fca440b43c019dd3060cb6aaa4200b220 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Fragment/HIncludeFragmentRenderer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Fragment/HIncludeFragmentRenderer.php"));

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

namespace Symfony\\Component\\HttpKernel\\Fragment;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\UriSigner;
use Symfony\\Component\\Templating\\EngineInterface;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Loader\\ExistsLoaderInterface;
use Twig\\Loader\\SourceContextLoaderInterface;

/**
 * Implements the Hinclude rendering strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HIncludeFragmentRenderer extends RoutableFragmentRenderer
{
    private \$globalDefaultTemplate;
    private \$signer;
    private \$templating;
    private \$charset;

    /**
     * @param EngineInterface|Environment \$templating            An EngineInterface or a Twig instance
     * @param UriSigner                   \$signer                A UriSigner instance
     * @param string                      \$globalDefaultTemplate The global default content (it can be a template name or the content)
     */
    public function __construct(\$templating = null, UriSigner \$signer = null, string \$globalDefaultTemplate = null, string \$charset = 'utf-8')
    {
        \$this->setTemplating(\$templating);
        \$this->globalDefaultTemplate = \$globalDefaultTemplate;
        \$this->signer = \$signer;
        \$this->charset = \$charset;
    }

    /**
     * Sets the templating engine to use to render the default content.
     *
     * @param EngineInterface|Environment|null \$templating An EngineInterface or an Environment instance
     *
     * @throws \\InvalidArgumentException
     */
    public function setTemplating(\$templating)
    {
        if (null !== \$templating && !\$templating instanceof EngineInterface && !\$templating instanceof Environment) {
            throw new \\InvalidArgumentException('The hinclude rendering strategy needs an instance of Twig\\Environment or Symfony\\Component\\Templating\\EngineInterface');
        }

        if (\$templating instanceof EngineInterface) {
            @trigger_error(sprintf('Using a \"%s\" instance for \"%s\" is deprecated since version 4.3; use a \\Twig\\Environment instance instead.', EngineInterface::class, __CLASS__), E_USER_DEPRECATED);
        }

        \$this->templating = \$templating;
    }

    /**
     * Checks if a templating engine has been set.
     *
     * @return bool true if the templating engine has been set, false otherwise
     */
    public function hasTemplating()
    {
        return null !== \$this->templating;
    }

    /**
     * {@inheritdoc}
     *
     * Additional available options:
     *
     *  * default:    The default content (it can be a template name or the content)
     *  * id:         An optional hx:include tag id attribute
     *  * attributes: An optional array of hx:include tag attributes
     */
    public function render(\$uri, Request \$request, array \$options = [])
    {
        if (\$uri instanceof ControllerReference) {
            if (null === \$this->signer) {
                throw new \\LogicException('You must use a proper URI when using the Hinclude rendering strategy or set a URL signer.');
            }

            // we need to sign the absolute URI, but want to return the path only.
            \$uri = substr(\$this->signer->sign(\$this->generateFragmentUri(\$uri, \$request, true)), \\strlen(\$request->getSchemeAndHttpHost()));
        }

        // We need to replace ampersands in the URI with the encoded form in order to return valid html/xml content.
        \$uri = str_replace('&', '&amp;', \$uri);

        \$template = isset(\$options['default']) ? \$options['default'] : \$this->globalDefaultTemplate;
        if (null !== \$this->templating && \$template && \$this->templateExists(\$template)) {
            \$content = \$this->templating->render(\$template);
        } else {
            \$content = \$template;
        }

        \$attributes = isset(\$options['attributes']) && \\is_array(\$options['attributes']) ? \$options['attributes'] : [];
        if (isset(\$options['id']) && \$options['id']) {
            \$attributes['id'] = \$options['id'];
        }
        \$renderedAttributes = '';
        if (\\count(\$attributes) > 0) {
            \$flags = ENT_QUOTES | ENT_SUBSTITUTE;
            foreach (\$attributes as \$attribute => \$value) {
                \$renderedAttributes .= sprintf(
                    ' %s=\"%s\"',
                    htmlspecialchars(\$attribute, \$flags, \$this->charset, false),
                    htmlspecialchars(\$value, \$flags, \$this->charset, false)
                );
            }
        }

        return new Response(sprintf('<hx:include src=\"%s\"%s>%s</hx:include>', \$uri, \$renderedAttributes, \$content));
    }

    private function templateExists(string \$template): bool
    {
        if (\$this->templating instanceof EngineInterface) {
            try {
                return \$this->templating->exists(\$template);
            } catch (\\Exception \$e) {
                return false;
            }
        }

        \$loader = \$this->templating->getLoader();

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

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'hinclude';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Fragment/HIncludeFragmentRenderer.php";
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

namespace Symfony\\Component\\HttpKernel\\Fragment;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\UriSigner;
use Symfony\\Component\\Templating\\EngineInterface;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Loader\\ExistsLoaderInterface;
use Twig\\Loader\\SourceContextLoaderInterface;

/**
 * Implements the Hinclude rendering strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HIncludeFragmentRenderer extends RoutableFragmentRenderer
{
    private \$globalDefaultTemplate;
    private \$signer;
    private \$templating;
    private \$charset;

    /**
     * @param EngineInterface|Environment \$templating            An EngineInterface or a Twig instance
     * @param UriSigner                   \$signer                A UriSigner instance
     * @param string                      \$globalDefaultTemplate The global default content (it can be a template name or the content)
     */
    public function __construct(\$templating = null, UriSigner \$signer = null, string \$globalDefaultTemplate = null, string \$charset = 'utf-8')
    {
        \$this->setTemplating(\$templating);
        \$this->globalDefaultTemplate = \$globalDefaultTemplate;
        \$this->signer = \$signer;
        \$this->charset = \$charset;
    }

    /**
     * Sets the templating engine to use to render the default content.
     *
     * @param EngineInterface|Environment|null \$templating An EngineInterface or an Environment instance
     *
     * @throws \\InvalidArgumentException
     */
    public function setTemplating(\$templating)
    {
        if (null !== \$templating && !\$templating instanceof EngineInterface && !\$templating instanceof Environment) {
            throw new \\InvalidArgumentException('The hinclude rendering strategy needs an instance of Twig\\Environment or Symfony\\Component\\Templating\\EngineInterface');
        }

        if (\$templating instanceof EngineInterface) {
            @trigger_error(sprintf('Using a \"%s\" instance for \"%s\" is deprecated since version 4.3; use a \\Twig\\Environment instance instead.', EngineInterface::class, __CLASS__), E_USER_DEPRECATED);
        }

        \$this->templating = \$templating;
    }

    /**
     * Checks if a templating engine has been set.
     *
     * @return bool true if the templating engine has been set, false otherwise
     */
    public function hasTemplating()
    {
        return null !== \$this->templating;
    }

    /**
     * {@inheritdoc}
     *
     * Additional available options:
     *
     *  * default:    The default content (it can be a template name or the content)
     *  * id:         An optional hx:include tag id attribute
     *  * attributes: An optional array of hx:include tag attributes
     */
    public function render(\$uri, Request \$request, array \$options = [])
    {
        if (\$uri instanceof ControllerReference) {
            if (null === \$this->signer) {
                throw new \\LogicException('You must use a proper URI when using the Hinclude rendering strategy or set a URL signer.');
            }

            // we need to sign the absolute URI, but want to return the path only.
            \$uri = substr(\$this->signer->sign(\$this->generateFragmentUri(\$uri, \$request, true)), \\strlen(\$request->getSchemeAndHttpHost()));
        }

        // We need to replace ampersands in the URI with the encoded form in order to return valid html/xml content.
        \$uri = str_replace('&', '&amp;', \$uri);

        \$template = isset(\$options['default']) ? \$options['default'] : \$this->globalDefaultTemplate;
        if (null !== \$this->templating && \$template && \$this->templateExists(\$template)) {
            \$content = \$this->templating->render(\$template);
        } else {
            \$content = \$template;
        }

        \$attributes = isset(\$options['attributes']) && \\is_array(\$options['attributes']) ? \$options['attributes'] : [];
        if (isset(\$options['id']) && \$options['id']) {
            \$attributes['id'] = \$options['id'];
        }
        \$renderedAttributes = '';
        if (\\count(\$attributes) > 0) {
            \$flags = ENT_QUOTES | ENT_SUBSTITUTE;
            foreach (\$attributes as \$attribute => \$value) {
                \$renderedAttributes .= sprintf(
                    ' %s=\"%s\"',
                    htmlspecialchars(\$attribute, \$flags, \$this->charset, false),
                    htmlspecialchars(\$value, \$flags, \$this->charset, false)
                );
            }
        }

        return new Response(sprintf('<hx:include src=\"%s\"%s>%s</hx:include>', \$uri, \$renderedAttributes, \$content));
    }

    private function templateExists(string \$template): bool
    {
        if (\$this->templating instanceof EngineInterface) {
            try {
                return \$this->templating->exists(\$template);
            } catch (\\Exception \$e) {
                return false;
            }
        }

        \$loader = \$this->templating->getLoader();

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

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'hinclude';
    }
}
", "vendor/symfony/http-kernel/Fragment/HIncludeFragmentRenderer.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Fragment/HIncludeFragmentRenderer.php");
    }
}
