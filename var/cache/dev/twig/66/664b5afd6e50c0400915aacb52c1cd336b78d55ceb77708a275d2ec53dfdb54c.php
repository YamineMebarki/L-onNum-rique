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

/* vendor/symfony/security-http/AccessMap.php */
class __TwigTemplate_12dcb59f8eb6ac3f237bc051aab4edde92acc0749facf29ca40046f9e6178071 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/AccessMap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/AccessMap.php"));

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

namespace Symfony\\Component\\Security\\Http;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestMatcherInterface;

/**
 * AccessMap allows configuration of different access control rules for
 * specific parts of the website.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AccessMap implements AccessMapInterface
{
    private \$map = [];

    /**
     * @param RequestMatcherInterface \$requestMatcher A RequestMatcherInterface instance
     * @param array                   \$attributes     An array of attributes to pass to the access decision manager (like roles)
     * @param string|null             \$channel        The channel to enforce (http, https, or null)
     */
    public function add(RequestMatcherInterface \$requestMatcher, array \$attributes = [], \$channel = null)
    {
        \$this->map[] = [\$requestMatcher, \$attributes, \$channel];
    }

    /**
     * {@inheritdoc}
     */
    public function getPatterns(Request \$request)
    {
        foreach (\$this->map as \$elements) {
            if (null === \$elements[0] || \$elements[0]->matches(\$request)) {
                return [\$elements[1], \$elements[2]];
            }
        }

        return [null, null];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/AccessMap.php";
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

namespace Symfony\\Component\\Security\\Http;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestMatcherInterface;

/**
 * AccessMap allows configuration of different access control rules for
 * specific parts of the website.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AccessMap implements AccessMapInterface
{
    private \$map = [];

    /**
     * @param RequestMatcherInterface \$requestMatcher A RequestMatcherInterface instance
     * @param array                   \$attributes     An array of attributes to pass to the access decision manager (like roles)
     * @param string|null             \$channel        The channel to enforce (http, https, or null)
     */
    public function add(RequestMatcherInterface \$requestMatcher, array \$attributes = [], \$channel = null)
    {
        \$this->map[] = [\$requestMatcher, \$attributes, \$channel];
    }

    /**
     * {@inheritdoc}
     */
    public function getPatterns(Request \$request)
    {
        foreach (\$this->map as \$elements) {
            if (null === \$elements[0] || \$elements[0]->matches(\$request)) {
                return [\$elements[1], \$elements[2]];
            }
        }

        return [null, null];
    }
}
", "vendor/symfony/security-http/AccessMap.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/AccessMap.php");
    }
}
