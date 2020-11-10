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

/* vendor/symfony/framework-bundle/Templating/PhpEngine.php */
class __TwigTemplate_1e970fe6a663fb1f9e4baf21d1b2818b956d03222c21722d064467ff97080023 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/PhpEngine.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/PhpEngine.php"));

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

@trigger_error('The '.PhpEngine::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Templating\\Loader\\LoaderInterface;
use Symfony\\Component\\Templating\\PhpEngine as BasePhpEngine;
use Symfony\\Component\\Templating\\TemplateNameParserInterface;

/**
 * This engine knows how to render Symfony templates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class PhpEngine extends BasePhpEngine implements EngineInterface
{
    protected \$container;

    public function __construct(TemplateNameParserInterface \$parser, ContainerInterface \$container, LoaderInterface \$loader, GlobalVariables \$globals = null)
    {
        \$this->container = \$container;

        parent::__construct(\$parser, \$loader);

        if (null !== \$globals) {
            \$this->addGlobal('app', \$globals);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name)
    {
        if (!isset(\$this->helpers[\$name])) {
            throw new \\InvalidArgumentException(sprintf('The helper \"%s\" is not defined.', \$name));
        }

        if (\\is_string(\$this->helpers[\$name])) {
            \$this->helpers[\$name] = \$this->container->get(\$this->helpers[\$name]);
            \$this->helpers[\$name]->setCharset(\$this->charset);
        }

        return \$this->helpers[\$name];
    }

    /**
     * {@inheritdoc}
     */
    public function setHelpers(array \$helpers)
    {
        \$this->helpers = \$helpers;
    }

    /**
     * {@inheritdoc}
     */
    public function renderResponse(\$view, array \$parameters = [], Response \$response = null)
    {
        if (null === \$response) {
            \$response = new Response();
        }

        \$response->setContent(\$this->render(\$view, \$parameters));

        return \$response;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/PhpEngine.php";
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

@trigger_error('The '.PhpEngine::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Templating\\Loader\\LoaderInterface;
use Symfony\\Component\\Templating\\PhpEngine as BasePhpEngine;
use Symfony\\Component\\Templating\\TemplateNameParserInterface;

/**
 * This engine knows how to render Symfony templates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class PhpEngine extends BasePhpEngine implements EngineInterface
{
    protected \$container;

    public function __construct(TemplateNameParserInterface \$parser, ContainerInterface \$container, LoaderInterface \$loader, GlobalVariables \$globals = null)
    {
        \$this->container = \$container;

        parent::__construct(\$parser, \$loader);

        if (null !== \$globals) {
            \$this->addGlobal('app', \$globals);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name)
    {
        if (!isset(\$this->helpers[\$name])) {
            throw new \\InvalidArgumentException(sprintf('The helper \"%s\" is not defined.', \$name));
        }

        if (\\is_string(\$this->helpers[\$name])) {
            \$this->helpers[\$name] = \$this->container->get(\$this->helpers[\$name]);
            \$this->helpers[\$name]->setCharset(\$this->charset);
        }

        return \$this->helpers[\$name];
    }

    /**
     * {@inheritdoc}
     */
    public function setHelpers(array \$helpers)
    {
        \$this->helpers = \$helpers;
    }

    /**
     * {@inheritdoc}
     */
    public function renderResponse(\$view, array \$parameters = [], Response \$response = null)
    {
        if (null === \$response) {
            \$response = new Response();
        }

        \$response->setContent(\$this->render(\$view, \$parameters));

        return \$response;
    }
}
", "vendor/symfony/framework-bundle/Templating/PhpEngine.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/PhpEngine.php");
    }
}
