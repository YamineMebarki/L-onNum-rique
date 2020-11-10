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

/* vendor/sensio/framework-extra-bundle/src/Configuration/Method.php */
class __TwigTemplate_c227c8c7113f72b541d55cf9bf9816c5066774fd1387122b21b119352511f1b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Configuration/Method.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Configuration/Method.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Configuration;

@trigger_error(sprintf('The \"%s\" annotation is deprecated since version 5.2. Use \"%s\" instead.', Method::class, \\Symfony\\Component\\Routing\\Annotation\\Route::class), E_USER_DEPRECATED);

/**
 * The Method class handles the Method annotation parts.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @Annotation
 *
 * @deprecated since version 5.2
 */
class Method extends ConfigurationAnnotation
{
    /**
     * An array of restricted HTTP methods.
     *
     * @var array
     */
    private \$methods = [];

    /**
     * Returns the array of HTTP methods.
     *
     * @return array
     */
    public function getMethods()
    {
        return \$this->methods;
    }

    /**
     * Sets the HTTP methods.
     *
     * @param array|string \$methods An HTTP method or an array of HTTP methods
     */
    public function setMethods(\$methods)
    {
        \$this->methods = \\is_array(\$methods) ? \$methods : [\$methods];
    }

    /**
     * Sets the HTTP methods.
     *
     * @param array|string \$methods An HTTP method or an array of HTTP methods
     */
    public function setValue(\$methods)
    {
        \$this->setMethods(\$methods);
    }

    /**
     * Returns the annotation alias name.
     *
     * @return string
     *
     * @see ConfigurationInterface
     */
    public function getAliasName()
    {
        return 'method';
    }

    /**
     * Only one method directive is allowed.
     *
     * @return bool
     *
     * @see ConfigurationInterface
     */
    public function allowArray()
    {
        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Configuration/Method.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Configuration;

@trigger_error(sprintf('The \"%s\" annotation is deprecated since version 5.2. Use \"%s\" instead.', Method::class, \\Symfony\\Component\\Routing\\Annotation\\Route::class), E_USER_DEPRECATED);

/**
 * The Method class handles the Method annotation parts.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @Annotation
 *
 * @deprecated since version 5.2
 */
class Method extends ConfigurationAnnotation
{
    /**
     * An array of restricted HTTP methods.
     *
     * @var array
     */
    private \$methods = [];

    /**
     * Returns the array of HTTP methods.
     *
     * @return array
     */
    public function getMethods()
    {
        return \$this->methods;
    }

    /**
     * Sets the HTTP methods.
     *
     * @param array|string \$methods An HTTP method or an array of HTTP methods
     */
    public function setMethods(\$methods)
    {
        \$this->methods = \\is_array(\$methods) ? \$methods : [\$methods];
    }

    /**
     * Sets the HTTP methods.
     *
     * @param array|string \$methods An HTTP method or an array of HTTP methods
     */
    public function setValue(\$methods)
    {
        \$this->setMethods(\$methods);
    }

    /**
     * Returns the annotation alias name.
     *
     * @return string
     *
     * @see ConfigurationInterface
     */
    public function getAliasName()
    {
        return 'method';
    }

    /**
     * Only one method directive is allowed.
     *
     * @return bool
     *
     * @see ConfigurationInterface
     */
    public function allowArray()
    {
        return false;
    }
}
", "vendor/sensio/framework-extra-bundle/src/Configuration/Method.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Configuration/Method.php");
    }
}
