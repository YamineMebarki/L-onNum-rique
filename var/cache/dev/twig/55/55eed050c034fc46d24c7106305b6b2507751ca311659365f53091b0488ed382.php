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

/* vendor/symfony/security-http/ParameterBagUtils.php */
class __TwigTemplate_578fd0cda3f914532c9578b1530725e5787d210304868139c06c0cfc2a48cbf3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/ParameterBagUtils.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/ParameterBagUtils.php"));

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

use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\PropertyAccess\\Exception\\AccessException;
use Symfony\\Component\\PropertyAccess\\Exception\\InvalidArgumentException;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;

/**
 * @internal
 */
final class ParameterBagUtils
{
    private static \$propertyAccessor;

    /**
     * Returns a \"parameter\" value.
     *
     * Paths like foo[bar] will be evaluated to find deeper items in nested data structures.
     *
     * @param ParameterBag \$parameters The parameter bag
     * @param string       \$path       The key
     *
     * @return mixed
     *
     * @throws InvalidArgumentException when the given path is malformed
     */
    public static function getParameterBagValue(ParameterBag \$parameters, \$path)
    {
        if (false === \$pos = strpos(\$path, '[')) {
            return \$parameters->get(\$path);
        }

        \$root = substr(\$path, 0, \$pos);

        if (null === \$value = \$parameters->get(\$root)) {
            return null;
        }

        if (null === self::\$propertyAccessor) {
            self::\$propertyAccessor = PropertyAccess::createPropertyAccessor();
        }

        try {
            return self::\$propertyAccessor->getValue(\$value, substr(\$path, \$pos));
        } catch (AccessException \$e) {
            return null;
        }
    }

    /**
     * Returns a request \"parameter\" value.
     *
     * Paths like foo[bar] will be evaluated to find deeper items in nested data structures.
     *
     * @param Request \$request The request
     * @param string  \$path    The key
     *
     * @return mixed
     *
     * @throws InvalidArgumentException when the given path is malformed
     */
    public static function getRequestParameterValue(Request \$request, \$path)
    {
        if (false === \$pos = strpos(\$path, '[')) {
            return \$request->get(\$path);
        }

        \$root = substr(\$path, 0, \$pos);

        if (null === \$value = \$request->get(\$root)) {
            return null;
        }

        if (null === self::\$propertyAccessor) {
            self::\$propertyAccessor = PropertyAccess::createPropertyAccessor();
        }

        try {
            return self::\$propertyAccessor->getValue(\$value, substr(\$path, \$pos));
        } catch (AccessException \$e) {
            return null;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/ParameterBagUtils.php";
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

use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\PropertyAccess\\Exception\\AccessException;
use Symfony\\Component\\PropertyAccess\\Exception\\InvalidArgumentException;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;

/**
 * @internal
 */
final class ParameterBagUtils
{
    private static \$propertyAccessor;

    /**
     * Returns a \"parameter\" value.
     *
     * Paths like foo[bar] will be evaluated to find deeper items in nested data structures.
     *
     * @param ParameterBag \$parameters The parameter bag
     * @param string       \$path       The key
     *
     * @return mixed
     *
     * @throws InvalidArgumentException when the given path is malformed
     */
    public static function getParameterBagValue(ParameterBag \$parameters, \$path)
    {
        if (false === \$pos = strpos(\$path, '[')) {
            return \$parameters->get(\$path);
        }

        \$root = substr(\$path, 0, \$pos);

        if (null === \$value = \$parameters->get(\$root)) {
            return null;
        }

        if (null === self::\$propertyAccessor) {
            self::\$propertyAccessor = PropertyAccess::createPropertyAccessor();
        }

        try {
            return self::\$propertyAccessor->getValue(\$value, substr(\$path, \$pos));
        } catch (AccessException \$e) {
            return null;
        }
    }

    /**
     * Returns a request \"parameter\" value.
     *
     * Paths like foo[bar] will be evaluated to find deeper items in nested data structures.
     *
     * @param Request \$request The request
     * @param string  \$path    The key
     *
     * @return mixed
     *
     * @throws InvalidArgumentException when the given path is malformed
     */
    public static function getRequestParameterValue(Request \$request, \$path)
    {
        if (false === \$pos = strpos(\$path, '[')) {
            return \$request->get(\$path);
        }

        \$root = substr(\$path, 0, \$pos);

        if (null === \$value = \$request->get(\$root)) {
            return null;
        }

        if (null === self::\$propertyAccessor) {
            self::\$propertyAccessor = PropertyAccess::createPropertyAccessor();
        }

        try {
            return self::\$propertyAccessor->getValue(\$value, substr(\$path, \$pos));
        } catch (AccessException \$e) {
            return null;
        }
    }
}
", "vendor/symfony/security-http/ParameterBagUtils.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/ParameterBagUtils.php");
    }
}
