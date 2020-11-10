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

/* vendor/symfony/twig-bridge/TwigEngine.php */
class __TwigTemplate_38f76dd1767b63be9b1f36c92f8c2e9c036ff2b64eed9ac1ae32b8809c3bde4f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/TwigEngine.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/TwigEngine.php"));

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

namespace Symfony\\Bridge\\Twig;

@trigger_error('The '.TwigEngine::class.' class is deprecated since version 4.3 and will be removed in 5.0; use \\Twig\\Environment instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Templating\\EngineInterface;
use Symfony\\Component\\Templating\\StreamingEngineInterface;
use Symfony\\Component\\Templating\\TemplateNameParserInterface;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;
use Twig\\Environment;
use Twig\\Error\\Error;
use Twig\\Error\\LoaderError;
use Twig\\Loader\\ExistsLoaderInterface;
use Twig\\Loader\\SourceContextLoaderInterface;
use Twig\\Template;

/**
 * This engine knows how to render Twig templates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TwigEngine implements EngineInterface, StreamingEngineInterface
{
    protected \$environment;
    protected \$parser;

    public function __construct(Environment \$environment, TemplateNameParserInterface \$parser)
    {
        \$this->environment = \$environment;
        \$this->parser = \$parser;
    }

    /**
     * {@inheritdoc}
     *
     * It also supports Template as name parameter.
     *
     * @throws Error if something went wrong like a thrown exception while rendering the template
     */
    public function render(\$name, array \$parameters = [])
    {
        return \$this->load(\$name)->render(\$parameters);
    }

    /**
     * {@inheritdoc}
     *
     * It also supports Template as name parameter.
     *
     * @throws Error if something went wrong like a thrown exception while rendering the template
     */
    public function stream(\$name, array \$parameters = [])
    {
        \$this->load(\$name)->display(\$parameters);
    }

    /**
     * {@inheritdoc}
     *
     * It also supports Template as name parameter.
     */
    public function exists(\$name)
    {
        if (\$name instanceof Template) {
            return true;
        }

        \$loader = \$this->environment->getLoader();

        if (1 === Environment::MAJOR_VERSION && !\$loader instanceof ExistsLoaderInterface) {
            try {
                // cast possible TemplateReferenceInterface to string because the
                // EngineInterface supports them but LoaderInterface does not
                if (\$loader instanceof SourceContextLoaderInterface) {
                    \$loader->getSourceContext((string) \$name);
                } else {
                    \$loader->getSource((string) \$name);
                }

                return true;
            } catch (LoaderError \$e) {
            }

            return false;
        }

        return \$loader->exists((string) \$name);
    }

    /**
     * {@inheritdoc}
     *
     * It also supports Template as name parameter.
     */
    public function supports(\$name)
    {
        if (\$name instanceof Template) {
            return true;
        }

        \$template = \$this->parser->parse(\$name);

        return 'twig' === \$template->get('engine');
    }

    /**
     * Loads the given template.
     *
     * @param string|TemplateReferenceInterface|Template \$name A template name or an instance of
     *                                                         TemplateReferenceInterface or Template
     *
     * @return Template
     *
     * @throws \\InvalidArgumentException if the template does not exist
     */
    protected function load(\$name)
    {
        if (\$name instanceof Template) {
            return \$name;
        }

        try {
            return \$this->environment->loadTemplate((string) \$name);
        } catch (LoaderError \$e) {
            throw new \\InvalidArgumentException(\$e->getMessage(), \$e->getCode(), \$e);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/TwigEngine.php";
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

namespace Symfony\\Bridge\\Twig;

@trigger_error('The '.TwigEngine::class.' class is deprecated since version 4.3 and will be removed in 5.0; use \\Twig\\Environment instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Templating\\EngineInterface;
use Symfony\\Component\\Templating\\StreamingEngineInterface;
use Symfony\\Component\\Templating\\TemplateNameParserInterface;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;
use Twig\\Environment;
use Twig\\Error\\Error;
use Twig\\Error\\LoaderError;
use Twig\\Loader\\ExistsLoaderInterface;
use Twig\\Loader\\SourceContextLoaderInterface;
use Twig\\Template;

/**
 * This engine knows how to render Twig templates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TwigEngine implements EngineInterface, StreamingEngineInterface
{
    protected \$environment;
    protected \$parser;

    public function __construct(Environment \$environment, TemplateNameParserInterface \$parser)
    {
        \$this->environment = \$environment;
        \$this->parser = \$parser;
    }

    /**
     * {@inheritdoc}
     *
     * It also supports Template as name parameter.
     *
     * @throws Error if something went wrong like a thrown exception while rendering the template
     */
    public function render(\$name, array \$parameters = [])
    {
        return \$this->load(\$name)->render(\$parameters);
    }

    /**
     * {@inheritdoc}
     *
     * It also supports Template as name parameter.
     *
     * @throws Error if something went wrong like a thrown exception while rendering the template
     */
    public function stream(\$name, array \$parameters = [])
    {
        \$this->load(\$name)->display(\$parameters);
    }

    /**
     * {@inheritdoc}
     *
     * It also supports Template as name parameter.
     */
    public function exists(\$name)
    {
        if (\$name instanceof Template) {
            return true;
        }

        \$loader = \$this->environment->getLoader();

        if (1 === Environment::MAJOR_VERSION && !\$loader instanceof ExistsLoaderInterface) {
            try {
                // cast possible TemplateReferenceInterface to string because the
                // EngineInterface supports them but LoaderInterface does not
                if (\$loader instanceof SourceContextLoaderInterface) {
                    \$loader->getSourceContext((string) \$name);
                } else {
                    \$loader->getSource((string) \$name);
                }

                return true;
            } catch (LoaderError \$e) {
            }

            return false;
        }

        return \$loader->exists((string) \$name);
    }

    /**
     * {@inheritdoc}
     *
     * It also supports Template as name parameter.
     */
    public function supports(\$name)
    {
        if (\$name instanceof Template) {
            return true;
        }

        \$template = \$this->parser->parse(\$name);

        return 'twig' === \$template->get('engine');
    }

    /**
     * Loads the given template.
     *
     * @param string|TemplateReferenceInterface|Template \$name A template name or an instance of
     *                                                         TemplateReferenceInterface or Template
     *
     * @return Template
     *
     * @throws \\InvalidArgumentException if the template does not exist
     */
    protected function load(\$name)
    {
        if (\$name instanceof Template) {
            return \$name;
        }

        try {
            return \$this->environment->loadTemplate((string) \$name);
        } catch (LoaderError \$e) {
            throw new \\InvalidArgumentException(\$e->getMessage(), \$e->getCode(), \$e);
        }
    }
}
", "vendor/symfony/twig-bridge/TwigEngine.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/TwigEngine.php");
    }
}
