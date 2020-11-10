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

/* vendor/twig/twig/src/Extension/SandboxExtension.php */
class __TwigTemplate_ab88f76d956f824b324da8025979e110828efc7319cdc79e1acd2f482d7abef9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Extension/SandboxExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Extension/SandboxExtension.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Extension;

use Twig\\NodeVisitor\\SandboxNodeVisitor;
use Twig\\Sandbox\\SecurityNotAllowedMethodError;
use Twig\\Sandbox\\SecurityNotAllowedPropertyError;
use Twig\\Sandbox\\SecurityPolicyInterface;
use Twig\\Source;
use Twig\\TokenParser\\SandboxTokenParser;

final class SandboxExtension extends AbstractExtension
{
    private \$sandboxedGlobally;
    private \$sandboxed;
    private \$policy;

    public function __construct(SecurityPolicyInterface \$policy, \$sandboxed = false)
    {
        \$this->policy = \$policy;
        \$this->sandboxedGlobally = \$sandboxed;
    }

    public function getTokenParsers()
    {
        return [new SandboxTokenParser()];
    }

    public function getNodeVisitors()
    {
        return [new SandboxNodeVisitor()];
    }

    public function enableSandbox()
    {
        \$this->sandboxed = true;
    }

    public function disableSandbox()
    {
        \$this->sandboxed = false;
    }

    public function isSandboxed()
    {
        return \$this->sandboxedGlobally || \$this->sandboxed;
    }

    public function isSandboxedGlobally()
    {
        return \$this->sandboxedGlobally;
    }

    public function setSecurityPolicy(SecurityPolicyInterface \$policy)
    {
        \$this->policy = \$policy;
    }

    public function getSecurityPolicy()
    {
        return \$this->policy;
    }

    public function checkSecurity(\$tags, \$filters, \$functions)
    {
        if (\$this->isSandboxed()) {
            \$this->policy->checkSecurity(\$tags, \$filters, \$functions);
        }
    }

    public function checkMethodAllowed(\$obj, \$method, int \$lineno = -1, Source \$source = null)
    {
        if (\$this->isSandboxed()) {
            try {
                \$this->policy->checkMethodAllowed(\$obj, \$method);
            } catch (SecurityNotAllowedMethodError \$e) {
                \$e->setSourceContext(\$source);
                \$e->setTemplateLine(\$lineno);

                throw \$e;
            }
        }
    }

    public function checkPropertyAllowed(\$obj, \$method, int \$lineno = -1, Source \$source = null)
    {
        if (\$this->isSandboxed()) {
            try {
                \$this->policy->checkPropertyAllowed(\$obj, \$method);
            } catch (SecurityNotAllowedPropertyError \$e) {
                \$e->setSourceContext(\$source);
                \$e->setTemplateLine(\$lineno);

                throw \$e;
            }
        }
    }

    public function ensureToStringAllowed(\$obj, int \$lineno = -1, Source \$source = null)
    {
        if (\$this->isSandboxed() && \\is_object(\$obj) && method_exists(\$obj, '__toString')) {
            try {
                \$this->policy->checkMethodAllowed(\$obj, '__toString');
            } catch (SecurityNotAllowedMethodError \$e) {
                \$e->setSourceContext(\$source);
                \$e->setTemplateLine(\$lineno);

                throw \$e;
            }
        }

        return \$obj;
    }
}

class_alias('Twig\\Extension\\SandboxExtension', 'Twig_Extension_Sandbox');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Extension/SandboxExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Extension;

use Twig\\NodeVisitor\\SandboxNodeVisitor;
use Twig\\Sandbox\\SecurityNotAllowedMethodError;
use Twig\\Sandbox\\SecurityNotAllowedPropertyError;
use Twig\\Sandbox\\SecurityPolicyInterface;
use Twig\\Source;
use Twig\\TokenParser\\SandboxTokenParser;

final class SandboxExtension extends AbstractExtension
{
    private \$sandboxedGlobally;
    private \$sandboxed;
    private \$policy;

    public function __construct(SecurityPolicyInterface \$policy, \$sandboxed = false)
    {
        \$this->policy = \$policy;
        \$this->sandboxedGlobally = \$sandboxed;
    }

    public function getTokenParsers()
    {
        return [new SandboxTokenParser()];
    }

    public function getNodeVisitors()
    {
        return [new SandboxNodeVisitor()];
    }

    public function enableSandbox()
    {
        \$this->sandboxed = true;
    }

    public function disableSandbox()
    {
        \$this->sandboxed = false;
    }

    public function isSandboxed()
    {
        return \$this->sandboxedGlobally || \$this->sandboxed;
    }

    public function isSandboxedGlobally()
    {
        return \$this->sandboxedGlobally;
    }

    public function setSecurityPolicy(SecurityPolicyInterface \$policy)
    {
        \$this->policy = \$policy;
    }

    public function getSecurityPolicy()
    {
        return \$this->policy;
    }

    public function checkSecurity(\$tags, \$filters, \$functions)
    {
        if (\$this->isSandboxed()) {
            \$this->policy->checkSecurity(\$tags, \$filters, \$functions);
        }
    }

    public function checkMethodAllowed(\$obj, \$method, int \$lineno = -1, Source \$source = null)
    {
        if (\$this->isSandboxed()) {
            try {
                \$this->policy->checkMethodAllowed(\$obj, \$method);
            } catch (SecurityNotAllowedMethodError \$e) {
                \$e->setSourceContext(\$source);
                \$e->setTemplateLine(\$lineno);

                throw \$e;
            }
        }
    }

    public function checkPropertyAllowed(\$obj, \$method, int \$lineno = -1, Source \$source = null)
    {
        if (\$this->isSandboxed()) {
            try {
                \$this->policy->checkPropertyAllowed(\$obj, \$method);
            } catch (SecurityNotAllowedPropertyError \$e) {
                \$e->setSourceContext(\$source);
                \$e->setTemplateLine(\$lineno);

                throw \$e;
            }
        }
    }

    public function ensureToStringAllowed(\$obj, int \$lineno = -1, Source \$source = null)
    {
        if (\$this->isSandboxed() && \\is_object(\$obj) && method_exists(\$obj, '__toString')) {
            try {
                \$this->policy->checkMethodAllowed(\$obj, '__toString');
            } catch (SecurityNotAllowedMethodError \$e) {
                \$e->setSourceContext(\$source);
                \$e->setTemplateLine(\$lineno);

                throw \$e;
            }
        }

        return \$obj;
    }
}

class_alias('Twig\\Extension\\SandboxExtension', 'Twig_Extension_Sandbox');
", "vendor/twig/twig/src/Extension/SandboxExtension.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Extension/SandboxExtension.php");
    }
}
