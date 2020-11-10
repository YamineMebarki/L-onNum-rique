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

/* vendor/symfony/routing/Matcher/RedirectableUrlMatcher.php */
class __TwigTemplate_735edad90aba9fca9c149ef8284820f08f9cd6220a5ce9b4c35d40165f8c5bb2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Matcher/RedirectableUrlMatcher.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Matcher/RedirectableUrlMatcher.php"));

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

namespace Symfony\\Component\\Routing\\Matcher;

use Symfony\\Component\\Routing\\Exception\\ExceptionInterface;
use Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class RedirectableUrlMatcher extends UrlMatcher implements RedirectableUrlMatcherInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\$pathinfo)
    {
        try {
            return parent::match(\$pathinfo);
        } catch (ResourceNotFoundException \$e) {
            if (!\\in_array(\$this->context->getMethod(), ['HEAD', 'GET'], true)) {
                throw \$e;
            }

            if (\$this->allowSchemes) {
                redirect_scheme:
                \$scheme = \$this->context->getScheme();
                \$this->context->setScheme(current(\$this->allowSchemes));
                try {
                    \$ret = parent::match(\$pathinfo);

                    return \$this->redirect(\$pathinfo, \$ret['_route'] ?? null, \$this->context->getScheme()) + \$ret;
                } catch (ExceptionInterface \$e2) {
                    throw \$e;
                } finally {
                    \$this->context->setScheme(\$scheme);
                }
            } elseif ('/' === \$trimmedPathinfo = rtrim(\$pathinfo, '/') ?: '/') {
                throw \$e;
            } else {
                try {
                    \$pathinfo = \$trimmedPathinfo === \$pathinfo ? \$pathinfo.'/' : \$trimmedPathinfo;
                    \$ret = parent::match(\$pathinfo);

                    return \$this->redirect(\$pathinfo, \$ret['_route'] ?? null) + \$ret;
                } catch (ExceptionInterface \$e2) {
                    if (\$this->allowSchemes) {
                        goto redirect_scheme;
                    }
                    throw \$e;
                }
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Matcher/RedirectableUrlMatcher.php";
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

namespace Symfony\\Component\\Routing\\Matcher;

use Symfony\\Component\\Routing\\Exception\\ExceptionInterface;
use Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class RedirectableUrlMatcher extends UrlMatcher implements RedirectableUrlMatcherInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\$pathinfo)
    {
        try {
            return parent::match(\$pathinfo);
        } catch (ResourceNotFoundException \$e) {
            if (!\\in_array(\$this->context->getMethod(), ['HEAD', 'GET'], true)) {
                throw \$e;
            }

            if (\$this->allowSchemes) {
                redirect_scheme:
                \$scheme = \$this->context->getScheme();
                \$this->context->setScheme(current(\$this->allowSchemes));
                try {
                    \$ret = parent::match(\$pathinfo);

                    return \$this->redirect(\$pathinfo, \$ret['_route'] ?? null, \$this->context->getScheme()) + \$ret;
                } catch (ExceptionInterface \$e2) {
                    throw \$e;
                } finally {
                    \$this->context->setScheme(\$scheme);
                }
            } elseif ('/' === \$trimmedPathinfo = rtrim(\$pathinfo, '/') ?: '/') {
                throw \$e;
            } else {
                try {
                    \$pathinfo = \$trimmedPathinfo === \$pathinfo ? \$pathinfo.'/' : \$trimmedPathinfo;
                    \$ret = parent::match(\$pathinfo);

                    return \$this->redirect(\$pathinfo, \$ret['_route'] ?? null) + \$ret;
                } catch (ExceptionInterface \$e2) {
                    if (\$this->allowSchemes) {
                        goto redirect_scheme;
                    }
                    throw \$e;
                }
            }
        }
    }
}
", "vendor/symfony/routing/Matcher/RedirectableUrlMatcher.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Matcher/RedirectableUrlMatcher.php");
    }
}
