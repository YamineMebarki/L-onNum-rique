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

/* vendor/twig/twig/src/Extension/ProfilerExtension.php */
class __TwigTemplate_6a6bf0f1ea034d2c80d97f9d73bd6ee2bb7a05112b600b114bfc3872b24cc2f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Extension/ProfilerExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Extension/ProfilerExtension.php"));

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

use Twig\\Profiler\\NodeVisitor\\ProfilerNodeVisitor;
use Twig\\Profiler\\Profile;

class ProfilerExtension extends AbstractExtension
{
    private \$actives = [];

    public function __construct(Profile \$profile)
    {
        \$this->actives[] = \$profile;
    }

    public function enter(Profile \$profile)
    {
        \$this->actives[0]->addProfile(\$profile);
        array_unshift(\$this->actives, \$profile);
    }

    public function leave(Profile \$profile)
    {
        \$profile->leave();
        array_shift(\$this->actives);

        if (1 === \\count(\$this->actives)) {
            \$this->actives[0]->leave();
        }
    }

    public function getNodeVisitors()
    {
        return [new ProfilerNodeVisitor(\\get_class(\$this))];
    }
}

class_alias('Twig\\Extension\\ProfilerExtension', 'Twig_Extension_Profiler');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Extension/ProfilerExtension.php";
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

use Twig\\Profiler\\NodeVisitor\\ProfilerNodeVisitor;
use Twig\\Profiler\\Profile;

class ProfilerExtension extends AbstractExtension
{
    private \$actives = [];

    public function __construct(Profile \$profile)
    {
        \$this->actives[] = \$profile;
    }

    public function enter(Profile \$profile)
    {
        \$this->actives[0]->addProfile(\$profile);
        array_unshift(\$this->actives, \$profile);
    }

    public function leave(Profile \$profile)
    {
        \$profile->leave();
        array_shift(\$this->actives);

        if (1 === \\count(\$this->actives)) {
            \$this->actives[0]->leave();
        }
    }

    public function getNodeVisitors()
    {
        return [new ProfilerNodeVisitor(\\get_class(\$this))];
    }
}

class_alias('Twig\\Extension\\ProfilerExtension', 'Twig_Extension_Profiler');
", "vendor/twig/twig/src/Extension/ProfilerExtension.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Extension/ProfilerExtension.php");
    }
}
