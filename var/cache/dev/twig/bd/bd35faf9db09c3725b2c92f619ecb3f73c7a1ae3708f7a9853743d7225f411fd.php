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

/* vendor/symfony/twig-bridge/Extension/ProfilerExtension.php */
class __TwigTemplate_fe3c190f78291d102d32b5aac4f3b0aa4abb5af8c8ccc33803db988404ae1c17 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/ProfilerExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/ProfilerExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Stopwatch\\Stopwatch;
use Twig\\Extension\\ProfilerExtension as BaseProfilerExtension;
use Twig\\Profiler\\Profile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ProfilerExtension extends BaseProfilerExtension
{
    private \$stopwatch;
    private \$events;

    public function __construct(Profile \$profile, Stopwatch \$stopwatch = null)
    {
        parent::__construct(\$profile);

        \$this->stopwatch = \$stopwatch;
        \$this->events = new \\SplObjectStorage();
    }

    public function enter(Profile \$profile)
    {
        if (\$this->stopwatch && \$profile->isTemplate()) {
            \$this->events[\$profile] = \$this->stopwatch->start(\$profile->getName(), 'template');
        }

        parent::enter(\$profile);
    }

    public function leave(Profile \$profile)
    {
        parent::leave(\$profile);

        if (\$this->stopwatch && \$profile->isTemplate()) {
            \$this->events[\$profile]->stop();
            unset(\$this->events[\$profile]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'native_profiler';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Extension/ProfilerExtension.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Stopwatch\\Stopwatch;
use Twig\\Extension\\ProfilerExtension as BaseProfilerExtension;
use Twig\\Profiler\\Profile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ProfilerExtension extends BaseProfilerExtension
{
    private \$stopwatch;
    private \$events;

    public function __construct(Profile \$profile, Stopwatch \$stopwatch = null)
    {
        parent::__construct(\$profile);

        \$this->stopwatch = \$stopwatch;
        \$this->events = new \\SplObjectStorage();
    }

    public function enter(Profile \$profile)
    {
        if (\$this->stopwatch && \$profile->isTemplate()) {
            \$this->events[\$profile] = \$this->stopwatch->start(\$profile->getName(), 'template');
        }

        parent::enter(\$profile);
    }

    public function leave(Profile \$profile)
    {
        parent::leave(\$profile);

        if (\$this->stopwatch && \$profile->isTemplate()) {
            \$this->events[\$profile]->stop();
            unset(\$this->events[\$profile]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'native_profiler';
    }
}
", "vendor/symfony/twig-bridge/Extension/ProfilerExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php");
    }
}
