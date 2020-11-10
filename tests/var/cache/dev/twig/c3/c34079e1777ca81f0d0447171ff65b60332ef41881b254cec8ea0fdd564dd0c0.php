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

/* vendor/symfony/web-profiler-bundle/Profiler/TemplateManager.php */
class __TwigTemplate_e4dabaa0b06e03bc9e63059abaa6c252617b7aef64229d1b148adc6fcd4cd0b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Profiler/TemplateManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Profiler/TemplateManager.php"));

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

namespace Symfony\\Bundle\\WebProfilerBundle\\Profiler;

use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\Profiler\\Profile;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Loader\\ExistsLoaderInterface;
use Twig\\Loader\\SourceContextLoaderInterface;
use Twig\\Template;

/**
 * Profiler Templates Manager.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Artur Wielogórski <wodor@wodor.net>
 */
class TemplateManager
{
    protected \$twig;
    protected \$templates;
    protected \$profiler;

    public function __construct(Profiler \$profiler, Environment \$twig, array \$templates)
    {
        \$this->profiler = \$profiler;
        \$this->twig = \$twig;
        \$this->templates = \$templates;
    }

    /**
     * Gets the template name for a given panel.
     *
     * @param string \$panel
     *
     * @return mixed
     *
     * @throws NotFoundHttpException
     */
    public function getName(Profile \$profile, \$panel)
    {
        \$templates = \$this->getNames(\$profile);

        if (!isset(\$templates[\$panel])) {
            throw new NotFoundHttpException(sprintf('Panel \"%s\" is not registered in profiler or is not present in viewed profile.', \$panel));
        }

        return \$templates[\$panel];
    }

    /**
     * Gets template names of templates that are present in the viewed profile.
     *
     * @return array
     *
     * @throws \\UnexpectedValueException
     */
    public function getNames(Profile \$profile)
    {
        \$templates = [];

        foreach (\$this->templates as \$arguments) {
            if (null === \$arguments) {
                continue;
            }

            list(\$name, \$template) = \$arguments;

            if (!\$this->profiler->has(\$name) || !\$profile->hasCollector(\$name)) {
                continue;
            }

            if ('.html.twig' === substr(\$template, -10)) {
                \$template = substr(\$template, 0, -10);
            }

            if (!\$this->templateExists(\$template.'.html.twig')) {
                throw new \\UnexpectedValueException(sprintf('The profiler template \"%s.html.twig\" for data collector \"%s\" does not exist.', \$template, \$name));
            }

            \$templates[\$name] = \$template.'.html.twig';
        }

        return \$templates;
    }

    // to be removed when the minimum required version of Twig is >= 2.0
    protected function templateExists(\$template)
    {
        \$loader = \$this->twig->getLoader();

        if (1 === Environment::MAJOR_VERSION && !\$loader instanceof ExistsLoaderInterface) {
            try {
                if (\$loader instanceof SourceContextLoaderInterface) {
                    \$loader->getSourceContext(\$template);
                } else {
                    \$loader->getSource(\$template);
                }

                return true;
            } catch (LoaderError \$e) {
            }

            return false;
        }

        return \$loader->exists(\$template);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/Profiler/TemplateManager.php";
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

namespace Symfony\\Bundle\\WebProfilerBundle\\Profiler;

use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\Profiler\\Profile;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Loader\\ExistsLoaderInterface;
use Twig\\Loader\\SourceContextLoaderInterface;
use Twig\\Template;

/**
 * Profiler Templates Manager.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Artur Wielogórski <wodor@wodor.net>
 */
class TemplateManager
{
    protected \$twig;
    protected \$templates;
    protected \$profiler;

    public function __construct(Profiler \$profiler, Environment \$twig, array \$templates)
    {
        \$this->profiler = \$profiler;
        \$this->twig = \$twig;
        \$this->templates = \$templates;
    }

    /**
     * Gets the template name for a given panel.
     *
     * @param string \$panel
     *
     * @return mixed
     *
     * @throws NotFoundHttpException
     */
    public function getName(Profile \$profile, \$panel)
    {
        \$templates = \$this->getNames(\$profile);

        if (!isset(\$templates[\$panel])) {
            throw new NotFoundHttpException(sprintf('Panel \"%s\" is not registered in profiler or is not present in viewed profile.', \$panel));
        }

        return \$templates[\$panel];
    }

    /**
     * Gets template names of templates that are present in the viewed profile.
     *
     * @return array
     *
     * @throws \\UnexpectedValueException
     */
    public function getNames(Profile \$profile)
    {
        \$templates = [];

        foreach (\$this->templates as \$arguments) {
            if (null === \$arguments) {
                continue;
            }

            list(\$name, \$template) = \$arguments;

            if (!\$this->profiler->has(\$name) || !\$profile->hasCollector(\$name)) {
                continue;
            }

            if ('.html.twig' === substr(\$template, -10)) {
                \$template = substr(\$template, 0, -10);
            }

            if (!\$this->templateExists(\$template.'.html.twig')) {
                throw new \\UnexpectedValueException(sprintf('The profiler template \"%s.html.twig\" for data collector \"%s\" does not exist.', \$template, \$name));
            }

            \$templates[\$name] = \$template.'.html.twig';
        }

        return \$templates;
    }

    // to be removed when the minimum required version of Twig is >= 2.0
    protected function templateExists(\$template)
    {
        \$loader = \$this->twig->getLoader();

        if (1 === Environment::MAJOR_VERSION && !\$loader instanceof ExistsLoaderInterface) {
            try {
                if (\$loader instanceof SourceContextLoaderInterface) {
                    \$loader->getSourceContext(\$template);
                } else {
                    \$loader->getSource(\$template);
                }

                return true;
            } catch (LoaderError \$e) {
            }

            return false;
        }

        return \$loader->exists(\$template);
    }
}
", "vendor/symfony/web-profiler-bundle/Profiler/TemplateManager.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Profiler/TemplateManager.php");
    }
}
