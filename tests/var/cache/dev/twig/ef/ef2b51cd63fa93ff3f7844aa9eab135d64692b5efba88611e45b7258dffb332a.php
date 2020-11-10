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

/* vendor/symfony/framework-bundle/Templating/TemplateNameParser.php */
class __TwigTemplate_2281266261513f8042fcd19ed3c020871f85bd3decb097c1897accfc26a47d27 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/TemplateNameParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/TemplateNameParser.php"));

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

@trigger_error('The '.TemplateNameParser::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\Templating\\TemplateNameParser as BaseTemplateNameParser;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;

/**
 * TemplateNameParser converts template names from the short notation
 * \"bundle:section:template.format.engine\" to TemplateReferenceInterface
 * instances.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplateNameParser extends BaseTemplateNameParser
{
    protected \$kernel;
    protected \$cache = [];

    public function __construct(KernelInterface \$kernel)
    {
        \$this->kernel = \$kernel;
    }

    /**
     * {@inheritdoc}
     */
    public function parse(\$name)
    {
        if (\$name instanceof TemplateReferenceInterface) {
            return \$name;
        } elseif (isset(\$this->cache[\$name])) {
            return \$this->cache[\$name];
        }

        // normalize name
        \$name = str_replace(':/', ':', preg_replace('#/{2,}#', '/', str_replace('\\\\', '/', \$name)));

        if (false !== strpos(\$name, '..')) {
            throw new \\RuntimeException(sprintf('Template name \"%s\" contains invalid characters.', \$name));
        }

        if (!preg_match('/^(?:([^:]*):([^:]*):)?(.+)\\.([^\\.]+)\\.([^\\.]+)\$/', \$name, \$matches) || 0 === strpos(\$name, '@')) {
            return parent::parse(\$name);
        }

        \$template = new TemplateReference(\$matches[1], \$matches[2], \$matches[3], \$matches[4], \$matches[5]);

        if (\$template->get('bundle')) {
            try {
                \$this->kernel->getBundle(\$template->get('bundle'));
            } catch (\\Exception \$e) {
                throw new \\InvalidArgumentException(sprintf('Template name \"%s\" is not valid.', \$name), 0, \$e);
            }
        }

        return \$this->cache[\$name] = \$template;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/TemplateNameParser.php";
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

@trigger_error('The '.TemplateNameParser::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\Templating\\TemplateNameParser as BaseTemplateNameParser;
use Symfony\\Component\\Templating\\TemplateReferenceInterface;

/**
 * TemplateNameParser converts template names from the short notation
 * \"bundle:section:template.format.engine\" to TemplateReferenceInterface
 * instances.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplateNameParser extends BaseTemplateNameParser
{
    protected \$kernel;
    protected \$cache = [];

    public function __construct(KernelInterface \$kernel)
    {
        \$this->kernel = \$kernel;
    }

    /**
     * {@inheritdoc}
     */
    public function parse(\$name)
    {
        if (\$name instanceof TemplateReferenceInterface) {
            return \$name;
        } elseif (isset(\$this->cache[\$name])) {
            return \$this->cache[\$name];
        }

        // normalize name
        \$name = str_replace(':/', ':', preg_replace('#/{2,}#', '/', str_replace('\\\\', '/', \$name)));

        if (false !== strpos(\$name, '..')) {
            throw new \\RuntimeException(sprintf('Template name \"%s\" contains invalid characters.', \$name));
        }

        if (!preg_match('/^(?:([^:]*):([^:]*):)?(.+)\\.([^\\.]+)\\.([^\\.]+)\$/', \$name, \$matches) || 0 === strpos(\$name, '@')) {
            return parent::parse(\$name);
        }

        \$template = new TemplateReference(\$matches[1], \$matches[2], \$matches[3], \$matches[4], \$matches[5]);

        if (\$template->get('bundle')) {
            try {
                \$this->kernel->getBundle(\$template->get('bundle'));
            } catch (\\Exception \$e) {
                throw new \\InvalidArgumentException(sprintf('Template name \"%s\" is not valid.', \$name), 0, \$e);
            }
        }

        return \$this->cache[\$name] = \$template;
    }
}
", "vendor/symfony/framework-bundle/Templating/TemplateNameParser.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/TemplateNameParser.php");
    }
}
