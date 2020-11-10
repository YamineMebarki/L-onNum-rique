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

/* vendor/symfony/framework-bundle/Templating/Helper/RequestHelper.php */
class __TwigTemplate_3f59551a3cf6853d9701557e1af046fe888d21a6fd2db89687b1489cf0c98e4b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/RequestHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/RequestHelper.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.RequestHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * RequestHelper provides access to the current request parameters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class RequestHelper extends Helper
{
    protected \$requestStack;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->requestStack = \$requestStack;
    }

    /**
     * Returns a parameter from the current request object.
     *
     * @param string \$key     The name of the parameter
     * @param string \$default A default value
     *
     * @return mixed
     *
     * @see Request::get()
     */
    public function getParameter(\$key, \$default = null)
    {
        return \$this->getRequest()->get(\$key, \$default);
    }

    /**
     * Returns the locale.
     *
     * @return string
     */
    public function getLocale()
    {
        return \$this->getRequest()->getLocale();
    }

    private function getRequest()
    {
        if (!\$this->requestStack->getCurrentRequest()) {
            throw new \\LogicException('A Request must be available.');
        }

        return \$this->requestStack->getCurrentRequest();
    }

    /**
     * {@inheritdoc}
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
        return "vendor/symfony/framework-bundle/Templating/Helper/RequestHelper.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.RequestHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * RequestHelper provides access to the current request parameters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class RequestHelper extends Helper
{
    protected \$requestStack;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->requestStack = \$requestStack;
    }

    /**
     * Returns a parameter from the current request object.
     *
     * @param string \$key     The name of the parameter
     * @param string \$default A default value
     *
     * @return mixed
     *
     * @see Request::get()
     */
    public function getParameter(\$key, \$default = null)
    {
        return \$this->getRequest()->get(\$key, \$default);
    }

    /**
     * Returns the locale.
     *
     * @return string
     */
    public function getLocale()
    {
        return \$this->getRequest()->getLocale();
    }

    private function getRequest()
    {
        if (!\$this->requestStack->getCurrentRequest()) {
            throw new \\LogicException('A Request must be available.');
        }

        return \$this->requestStack->getCurrentRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'request';
    }
}
", "vendor/symfony/framework-bundle/Templating/Helper/RequestHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/Helper/RequestHelper.php");
    }
}
