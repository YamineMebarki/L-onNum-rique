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

/* vendor/symfony/process/Tests/NonStopableProcess.php */
class __TwigTemplate_6e4d3f16cd317023be32e5543d584ada806bdf4f1bb7dc5dfa11a66ed330879f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Tests/NonStopableProcess.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Tests/NonStopableProcess.php"));

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

/**
 * Runs a PHP script that can be stopped only with a SIGKILL (9) signal for 3 seconds.
 *
 * @args duration Run this script with a custom duration
 *
 * @example `php NonStopableProcess.php 42` will run the script for 42 seconds
 */
function handleSignal(\$signal)
{
    switch (\$signal) {
        case SIGTERM:
            \$name = 'SIGTERM';
            break;
        case SIGINT:
            \$name = 'SIGINT';
            break;
        default:
            \$name = \$signal.' (unknown)';
            break;
    }

    echo \"signal \$name\\n\";
}

pcntl_signal(SIGTERM, 'handleSignal');
pcntl_signal(SIGINT, 'handleSignal');

echo 'received ';

\$duration = isset(\$argv[1]) ? (int) \$argv[1] : 3;
\$start = microtime(true);

while (\$duration > (microtime(true) - \$start)) {
    usleep(10000);
    pcntl_signal_dispatch();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/Tests/NonStopableProcess.php";
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

/**
 * Runs a PHP script that can be stopped only with a SIGKILL (9) signal for 3 seconds.
 *
 * @args duration Run this script with a custom duration
 *
 * @example `php NonStopableProcess.php 42` will run the script for 42 seconds
 */
function handleSignal(\$signal)
{
    switch (\$signal) {
        case SIGTERM:
            \$name = 'SIGTERM';
            break;
        case SIGINT:
            \$name = 'SIGINT';
            break;
        default:
            \$name = \$signal.' (unknown)';
            break;
    }

    echo \"signal \$name\\n\";
}

pcntl_signal(SIGTERM, 'handleSignal');
pcntl_signal(SIGINT, 'handleSignal');

echo 'received ';

\$duration = isset(\$argv[1]) ? (int) \$argv[1] : 3;
\$start = microtime(true);

while (\$duration > (microtime(true) - \$start)) {
    usleep(10000);
    pcntl_signal_dispatch();
}
", "vendor/symfony/process/Tests/NonStopableProcess.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/Tests/NonStopableProcess.php");
    }
}
