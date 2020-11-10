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

/* vendor/symfony/framework-bundle/Templating/Helper/ActionsHelper.php */
class __TwigTemplate_3af66f7a9e80767b8910a563487f83002eb4fee4d1ca8c3adcb34c8ee67d59ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/ActionsHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/ActionsHelper.php"));

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

@trigger_error('The '.ActionsHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * ActionsHelper manages action inclusions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class ActionsHelper extends Helper
{
    private \$handler;

    public function __construct(FragmentHandler \$handler)
    {
        \$this->handler = \$handler;
    }

    /**
     * Returns the fragment content for a given URI.
     *
     * @param string \$uri     A URI
     * @param array  \$options An array of options
     *
     * @return string The fragment content
     *
     * @see FragmentHandler::render()
     */
    public function render(\$uri, array \$options = [])
    {
        \$strategy = isset(\$options['strategy']) ? \$options['strategy'] : 'inline';
        unset(\$options['strategy']);

        return \$this->handler->render(\$uri, \$strategy, \$options);
    }

    public function controller(\$controller, \$attributes = [], \$query = [])
    {
        return new ControllerReference(\$controller, \$attributes, \$query);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'actions';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/Helper/ActionsHelper.php";
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

@trigger_error('The '.ActionsHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * ActionsHelper manages action inclusions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class ActionsHelper extends Helper
{
    private \$handler;

    public function __construct(FragmentHandler \$handler)
    {
        \$this->handler = \$handler;
    }

    /**
     * Returns the fragment content for a given URI.
     *
     * @param string \$uri     A URI
     * @param array  \$options An array of options
     *
     * @return string The fragment content
     *
     * @see FragmentHandler::render()
     */
    public function render(\$uri, array \$options = [])
    {
        \$strategy = isset(\$options['strategy']) ? \$options['strategy'] : 'inline';
        unset(\$options['strategy']);

        return \$this->handler->render(\$uri, \$strategy, \$options);
    }

    public function controller(\$controller, \$attributes = [], \$query = [])
    {
        return new ControllerReference(\$controller, \$attributes, \$query);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'actions';
    }
}
", "vendor/symfony/framework-bundle/Templating/Helper/ActionsHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/Helper/ActionsHelper.php");
    }
}
