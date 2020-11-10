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

/* vendor/symfony/framework-bundle/Templating/TemplateReference.php */
class __TwigTemplate_45cfb6522fd47fce5bc84cf7943f797bdf5c2a526351be159fac4c276125f297 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/TemplateReference.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/TemplateReference.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating;

@trigger_error('The '.TemplateReference::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Templating\\TemplateReference as BaseTemplateReference;

/**
 * Internal representation of a template.
 *
 * @author Victor Berchet <victor@suumit.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplateReference extends BaseTemplateReference
{
    public function __construct(string \$bundle = null, string \$controller = null, string \$name = null, string \$format = null, string \$engine = null)
    {
        \$this->parameters = [
            'bundle' => \$bundle,
            'controller' => \$controller,
            'name' => \$name,
            'format' => \$format,
            'engine' => \$engine,
        ];
    }

    /**
     * Returns the path to the template
     *  - as a path when the template is not part of a bundle
     *  - as a resource when the template is part of a bundle.
     *
     * @return string A path to the template or a resource
     */
    public function getPath()
    {
        \$controller = str_replace('\\\\', '/', \$this->get('controller'));

        \$path = (empty(\$controller) ? '' : \$controller.'/').\$this->get('name').'.'.\$this->get('format').'.'.\$this->get('engine');

        return empty(\$this->parameters['bundle']) ? 'views/'.\$path : '@'.\$this->get('bundle').'/Resources/views/'.\$path;
    }

    /**
     * {@inheritdoc}
     */
    public function getLogicalName()
    {
        return sprintf('%s:%s:%s.%s.%s', \$this->parameters['bundle'], \$this->parameters['controller'], \$this->parameters['name'], \$this->parameters['format'], \$this->parameters['engine']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/TemplateReference.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating;

@trigger_error('The '.TemplateReference::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Templating\\TemplateReference as BaseTemplateReference;

/**
 * Internal representation of a template.
 *
 * @author Victor Berchet <victor@suumit.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplateReference extends BaseTemplateReference
{
    public function __construct(string \$bundle = null, string \$controller = null, string \$name = null, string \$format = null, string \$engine = null)
    {
        \$this->parameters = [
            'bundle' => \$bundle,
            'controller' => \$controller,
            'name' => \$name,
            'format' => \$format,
            'engine' => \$engine,
        ];
    }

    /**
     * Returns the path to the template
     *  - as a path when the template is not part of a bundle
     *  - as a resource when the template is part of a bundle.
     *
     * @return string A path to the template or a resource
     */
    public function getPath()
    {
        \$controller = str_replace('\\\\', '/', \$this->get('controller'));

        \$path = (empty(\$controller) ? '' : \$controller.'/').\$this->get('name').'.'.\$this->get('format').'.'.\$this->get('engine');

        return empty(\$this->parameters['bundle']) ? 'views/'.\$path : '@'.\$this->get('bundle').'/Resources/views/'.\$path;
    }

    /**
     * {@inheritdoc}
     */
    public function getLogicalName()
    {
        return sprintf('%s:%s:%s.%s.%s', \$this->parameters['bundle'], \$this->parameters['controller'], \$this->parameters['name'], \$this->parameters['format'], \$this->parameters['engine']);
    }
}
", "vendor/symfony/framework-bundle/Templating/TemplateReference.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/TemplateReference.php");
    }
}
