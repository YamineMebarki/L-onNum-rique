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

/* vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php */
class __TwigTemplate_d2c254148eed4da53501bd265fc26c7031b8322d87d7182f83a291de1bc44adf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\UrlHelper;
use Symfony\\Component\\Routing\\RequestContext;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * Twig extension for the Symfony HttpFoundation component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HttpFoundationExtension extends AbstractExtension
{
    private \$urlHelper;

    /**
     * @param UrlHelper \$urlHelper
     */
    public function __construct(\$urlHelper)
    {
        if (\$urlHelper instanceof UrlHelper) {
            \$this->urlHelper = \$urlHelper;

            return;
        }

        if (!\$urlHelper instanceof RequestStack) {
            throw new \\TypeError(sprintf('The first argument must be an instance of \"%s\" or an instance of \"%s\".', UrlHelper::class, RequestStack::class));
        }

        @trigger_error(sprintf('Passing a \"%s\" instance as the first argument to the \"%s\" constructor is deprecated since Symfony 4.3, pass a \"%s\" instance instead.', RequestStack::class, __CLASS__, UrlHelper::class), E_USER_DEPRECATED);

        \$requestContext = null;
        if (2 === \\func_num_args()) {
            \$requestContext = func_get_arg(1);
            if (null !== \$requestContext && !\$requestContext instanceof RequestContext) {
                throw new \\TypeError(sprintf('The second argument must be an instance of \"%s\".', RequestContext::class));
            }
        }

        \$this->urlHelper = new UrlHelper(\$urlHelper, \$requestContext);
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('absolute_url', [\$this, 'generateAbsoluteUrl']),
            new TwigFunction('relative_path', [\$this, 'generateRelativePath']),
        ];
    }

    /**
     * Returns the absolute URL for the given absolute or relative path.
     *
     * This method returns the path unchanged if no request is available.
     *
     * @param string \$path The path
     *
     * @return string The absolute URL
     *
     * @see Request::getUriForPath()
     */
    public function generateAbsoluteUrl(\$path)
    {
        return \$this->urlHelper->getAbsoluteUrl(\$path);
    }

    /**
     * Returns a relative path based on the current Request.
     *
     * This method returns the path unchanged if no request is available.
     *
     * @param string \$path The path
     *
     * @return string The relative path
     *
     * @see Request::getRelativeUriForPath()
     */
    public function generateRelativePath(\$path)
    {
        return \$this->urlHelper->getRelativePath(\$path);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'request';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\UrlHelper;
use Symfony\\Component\\Routing\\RequestContext;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * Twig extension for the Symfony HttpFoundation component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HttpFoundationExtension extends AbstractExtension
{
    private \$urlHelper;

    /**
     * @param UrlHelper \$urlHelper
     */
    public function __construct(\$urlHelper)
    {
        if (\$urlHelper instanceof UrlHelper) {
            \$this->urlHelper = \$urlHelper;

            return;
        }

        if (!\$urlHelper instanceof RequestStack) {
            throw new \\TypeError(sprintf('The first argument must be an instance of \"%s\" or an instance of \"%s\".', UrlHelper::class, RequestStack::class));
        }

        @trigger_error(sprintf('Passing a \"%s\" instance as the first argument to the \"%s\" constructor is deprecated since Symfony 4.3, pass a \"%s\" instance instead.', RequestStack::class, __CLASS__, UrlHelper::class), E_USER_DEPRECATED);

        \$requestContext = null;
        if (2 === \\func_num_args()) {
            \$requestContext = func_get_arg(1);
            if (null !== \$requestContext && !\$requestContext instanceof RequestContext) {
                throw new \\TypeError(sprintf('The second argument must be an instance of \"%s\".', RequestContext::class));
            }
        }

        \$this->urlHelper = new UrlHelper(\$urlHelper, \$requestContext);
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('absolute_url', [\$this, 'generateAbsoluteUrl']),
            new TwigFunction('relative_path', [\$this, 'generateRelativePath']),
        ];
    }

    /**
     * Returns the absolute URL for the given absolute or relative path.
     *
     * This method returns the path unchanged if no request is available.
     *
     * @param string \$path The path
     *
     * @return string The absolute URL
     *
     * @see Request::getUriForPath()
     */
    public function generateAbsoluteUrl(\$path)
    {
        return \$this->urlHelper->getAbsoluteUrl(\$path);
    }

    /**
     * Returns a relative path based on the current Request.
     *
     * This method returns the path unchanged if no request is available.
     *
     * @param string \$path The path
     *
     * @return string The relative path
     *
     * @see Request::getRelativeUriForPath()
     */
    public function generateRelativePath(\$path)
    {
        return \$this->urlHelper->getRelativePath(\$path);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'request';
    }
}
", "vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php");
    }
}
