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

/* vendor/twig/twig/src/Profiler/NodeVisitor/ProfilerNodeVisitor.php */
class __TwigTemplate_78b34119502b8878efd2a24e49a693c8d63c433a7aa80f89a2bcf0c341a626c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/NodeVisitor/ProfilerNodeVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Profiler/NodeVisitor/ProfilerNodeVisitor.php"));

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

namespace Twig\\Profiler\\NodeVisitor;

use Twig\\Environment;
use Twig\\Node\\BlockNode;
use Twig\\Node\\BodyNode;
use Twig\\Node\\MacroNode;
use Twig\\Node\\ModuleNode;
use Twig\\Node\\Node;
use Twig\\NodeVisitor\\AbstractNodeVisitor;
use Twig\\Profiler\\Node\\EnterProfileNode;
use Twig\\Profiler\\Node\\LeaveProfileNode;
use Twig\\Profiler\\Profile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ProfilerNodeVisitor extends AbstractNodeVisitor
{
    private \$extensionName;

    public function __construct(string \$extensionName)
    {
        \$this->extensionName = \$extensionName;
    }

    protected function doEnterNode(Node \$node, Environment \$env)
    {
        return \$node;
    }

    protected function doLeaveNode(Node \$node, Environment \$env)
    {
        if (\$node instanceof ModuleNode) {
            \$varName = \$this->getVarName();
            \$node->setNode('display_start', new Node([new EnterProfileNode(\$this->extensionName, Profile::TEMPLATE, \$node->getTemplateName(), \$varName), \$node->getNode('display_start')]));
            \$node->setNode('display_end', new Node([new LeaveProfileNode(\$varName), \$node->getNode('display_end')]));
        } elseif (\$node instanceof BlockNode) {
            \$varName = \$this->getVarName();
            \$node->setNode('body', new BodyNode([
                new EnterProfileNode(\$this->extensionName, Profile::BLOCK, \$node->getAttribute('name'), \$varName),
                \$node->getNode('body'),
                new LeaveProfileNode(\$varName),
            ]));
        } elseif (\$node instanceof MacroNode) {
            \$varName = \$this->getVarName();
            \$node->setNode('body', new BodyNode([
                new EnterProfileNode(\$this->extensionName, Profile::MACRO, \$node->getAttribute('name'), \$varName),
                \$node->getNode('body'),
                new LeaveProfileNode(\$varName),
            ]));
        }

        return \$node;
    }

    private function getVarName(): string
    {
        return sprintf('__internal_%s', hash('sha256', \$this->extensionName));
    }

    public function getPriority()
    {
        return 0;
    }
}

class_alias('Twig\\Profiler\\NodeVisitor\\ProfilerNodeVisitor', 'Twig_Profiler_NodeVisitor_Profiler');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Profiler/NodeVisitor/ProfilerNodeVisitor.php";
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

namespace Twig\\Profiler\\NodeVisitor;

use Twig\\Environment;
use Twig\\Node\\BlockNode;
use Twig\\Node\\BodyNode;
use Twig\\Node\\MacroNode;
use Twig\\Node\\ModuleNode;
use Twig\\Node\\Node;
use Twig\\NodeVisitor\\AbstractNodeVisitor;
use Twig\\Profiler\\Node\\EnterProfileNode;
use Twig\\Profiler\\Node\\LeaveProfileNode;
use Twig\\Profiler\\Profile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ProfilerNodeVisitor extends AbstractNodeVisitor
{
    private \$extensionName;

    public function __construct(string \$extensionName)
    {
        \$this->extensionName = \$extensionName;
    }

    protected function doEnterNode(Node \$node, Environment \$env)
    {
        return \$node;
    }

    protected function doLeaveNode(Node \$node, Environment \$env)
    {
        if (\$node instanceof ModuleNode) {
            \$varName = \$this->getVarName();
            \$node->setNode('display_start', new Node([new EnterProfileNode(\$this->extensionName, Profile::TEMPLATE, \$node->getTemplateName(), \$varName), \$node->getNode('display_start')]));
            \$node->setNode('display_end', new Node([new LeaveProfileNode(\$varName), \$node->getNode('display_end')]));
        } elseif (\$node instanceof BlockNode) {
            \$varName = \$this->getVarName();
            \$node->setNode('body', new BodyNode([
                new EnterProfileNode(\$this->extensionName, Profile::BLOCK, \$node->getAttribute('name'), \$varName),
                \$node->getNode('body'),
                new LeaveProfileNode(\$varName),
            ]));
        } elseif (\$node instanceof MacroNode) {
            \$varName = \$this->getVarName();
            \$node->setNode('body', new BodyNode([
                new EnterProfileNode(\$this->extensionName, Profile::MACRO, \$node->getAttribute('name'), \$varName),
                \$node->getNode('body'),
                new LeaveProfileNode(\$varName),
            ]));
        }

        return \$node;
    }

    private function getVarName(): string
    {
        return sprintf('__internal_%s', hash('sha256', \$this->extensionName));
    }

    public function getPriority()
    {
        return 0;
    }
}

class_alias('Twig\\Profiler\\NodeVisitor\\ProfilerNodeVisitor', 'Twig_Profiler_NodeVisitor_Profiler');
", "vendor/twig/twig/src/Profiler/NodeVisitor/ProfilerNodeVisitor.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Profiler/NodeVisitor/ProfilerNodeVisitor.php");
    }
}
