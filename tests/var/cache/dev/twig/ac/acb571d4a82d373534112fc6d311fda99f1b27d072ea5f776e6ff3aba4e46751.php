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

/* vendor/symfony/http-kernel/Fragment/AbstractSurrogateFragmentRenderer.php */
class __TwigTemplate_e811a1b5389c96852b9def1e2297cf47221b8fc0aae9719c9dca369f904e1ff5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Fragment/AbstractSurrogateFragmentRenderer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Fragment/AbstractSurrogateFragmentRenderer.php"));

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
use Symfony\\Component\\HttpKernel\\HttpCache\\SurrogateInterface;
use Symfony\\Component\\HttpKernel\\UriSigner;

/**
 * Implements Surrogate rendering strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractSurrogateFragmentRenderer extends RoutableFragmentRenderer
{
    private \$surrogate;
    private \$inlineStrategy;
    private \$signer;

    /**
     * The \"fallback\" strategy when surrogate is not available should always be an
     * instance of InlineFragmentRenderer.
     *
     * @param SurrogateInterface        \$surrogate      An Surrogate instance
     * @param FragmentRendererInterface \$inlineStrategy The inline strategy to use when the surrogate is not supported
     * @param UriSigner                 \$signer
     */
    public function __construct(SurrogateInterface \$surrogate = null, FragmentRendererInterface \$inlineStrategy, UriSigner \$signer = null)
    {
        \$this->surrogate = \$surrogate;
        \$this->inlineStrategy = \$inlineStrategy;
        \$this->signer = \$signer;
    }

    /**
     * {@inheritdoc}
     *
     * Note that if the current Request has no surrogate capability, this method
     * falls back to use the inline rendering strategy.
     *
     * Additional available options:
     *
     *  * alt: an alternative URI to render in case of an error
     *  * comment: a comment to add when returning the surrogate tag
     *
     * Note, that not all surrogate strategies support all options. For now
     * 'alt' and 'comment' are only supported by ESI.
     *
     * @see Symfony\\Component\\HttpKernel\\HttpCache\\SurrogateInterface
     */
    public function render(\$uri, Request \$request, array \$options = [])
    {
        if (!\$this->surrogate || !\$this->surrogate->hasSurrogateCapability(\$request)) {
            if (\$uri instanceof ControllerReference && \$this->containsNonScalars(\$uri->attributes)) {
                throw new \\InvalidArgumentException('Passing non-scalar values as part of URI attributes to the ESI and SSI rendering strategies is not supported. Use a different rendering strategy or pass scalar values.');
            }

            return \$this->inlineStrategy->render(\$uri, \$request, \$options);
        }

        if (\$uri instanceof ControllerReference) {
            \$uri = \$this->generateSignedFragmentUri(\$uri, \$request);
        }

        \$alt = isset(\$options['alt']) ? \$options['alt'] : null;
        if (\$alt instanceof ControllerReference) {
            \$alt = \$this->generateSignedFragmentUri(\$alt, \$request);
        }

        \$tag = \$this->surrogate->renderIncludeTag(\$uri, \$alt, isset(\$options['ignore_errors']) ? \$options['ignore_errors'] : false, isset(\$options['comment']) ? \$options['comment'] : '');

        return new Response(\$tag);
    }

    private function generateSignedFragmentUri(\$uri, Request \$request): string
    {
        if (null === \$this->signer) {
            throw new \\LogicException('You must use a URI when using the ESI rendering strategy or set a URL signer.');
        }

        // we need to sign the absolute URI, but want to return the path only.
        \$fragmentUri = \$this->signer->sign(\$this->generateFragmentUri(\$uri, \$request, true));

        return substr(\$fragmentUri, \\strlen(\$request->getSchemeAndHttpHost()));
    }

    private function containsNonScalars(array \$values): bool
    {
        foreach (\$values as \$value) {
            if (\\is_array(\$value)) {
                return \$this->containsNonScalars(\$value);
            } elseif (!is_scalar(\$value) && null !== \$value) {
                return true;
            }
        }

        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Fragment/AbstractSurrogateFragmentRenderer.php";
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
use Symfony\\Component\\HttpKernel\\HttpCache\\SurrogateInterface;
use Symfony\\Component\\HttpKernel\\UriSigner;

/**
 * Implements Surrogate rendering strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractSurrogateFragmentRenderer extends RoutableFragmentRenderer
{
    private \$surrogate;
    private \$inlineStrategy;
    private \$signer;

    /**
     * The \"fallback\" strategy when surrogate is not available should always be an
     * instance of InlineFragmentRenderer.
     *
     * @param SurrogateInterface        \$surrogate      An Surrogate instance
     * @param FragmentRendererInterface \$inlineStrategy The inline strategy to use when the surrogate is not supported
     * @param UriSigner                 \$signer
     */
    public function __construct(SurrogateInterface \$surrogate = null, FragmentRendererInterface \$inlineStrategy, UriSigner \$signer = null)
    {
        \$this->surrogate = \$surrogate;
        \$this->inlineStrategy = \$inlineStrategy;
        \$this->signer = \$signer;
    }

    /**
     * {@inheritdoc}
     *
     * Note that if the current Request has no surrogate capability, this method
     * falls back to use the inline rendering strategy.
     *
     * Additional available options:
     *
     *  * alt: an alternative URI to render in case of an error
     *  * comment: a comment to add when returning the surrogate tag
     *
     * Note, that not all surrogate strategies support all options. For now
     * 'alt' and 'comment' are only supported by ESI.
     *
     * @see Symfony\\Component\\HttpKernel\\HttpCache\\SurrogateInterface
     */
    public function render(\$uri, Request \$request, array \$options = [])
    {
        if (!\$this->surrogate || !\$this->surrogate->hasSurrogateCapability(\$request)) {
            if (\$uri instanceof ControllerReference && \$this->containsNonScalars(\$uri->attributes)) {
                throw new \\InvalidArgumentException('Passing non-scalar values as part of URI attributes to the ESI and SSI rendering strategies is not supported. Use a different rendering strategy or pass scalar values.');
            }

            return \$this->inlineStrategy->render(\$uri, \$request, \$options);
        }

        if (\$uri instanceof ControllerReference) {
            \$uri = \$this->generateSignedFragmentUri(\$uri, \$request);
        }

        \$alt = isset(\$options['alt']) ? \$options['alt'] : null;
        if (\$alt instanceof ControllerReference) {
            \$alt = \$this->generateSignedFragmentUri(\$alt, \$request);
        }

        \$tag = \$this->surrogate->renderIncludeTag(\$uri, \$alt, isset(\$options['ignore_errors']) ? \$options['ignore_errors'] : false, isset(\$options['comment']) ? \$options['comment'] : '');

        return new Response(\$tag);
    }

    private function generateSignedFragmentUri(\$uri, Request \$request): string
    {
        if (null === \$this->signer) {
            throw new \\LogicException('You must use a URI when using the ESI rendering strategy or set a URL signer.');
        }

        // we need to sign the absolute URI, but want to return the path only.
        \$fragmentUri = \$this->signer->sign(\$this->generateFragmentUri(\$uri, \$request, true));

        return substr(\$fragmentUri, \\strlen(\$request->getSchemeAndHttpHost()));
    }

    private function containsNonScalars(array \$values): bool
    {
        foreach (\$values as \$value) {
            if (\\is_array(\$value)) {
                return \$this->containsNonScalars(\$value);
            } elseif (!is_scalar(\$value) && null !== \$value) {
                return true;
            }
        }

        return false;
    }
}
", "vendor/symfony/http-kernel/Fragment/AbstractSurrogateFragmentRenderer.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Fragment/AbstractSurrogateFragmentRenderer.php");
    }
}
