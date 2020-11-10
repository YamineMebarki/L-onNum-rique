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

/* vendor/symfony/process/Tests/ErrorProcessInitiator.php */
class __TwigTemplate_09f13b2bcc5554d930d9ff8922800414ac4327a8f74e364023a0f80c78ce1d76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Tests/ErrorProcessInitiator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Tests/ErrorProcessInitiator.php"));

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

namespace Symfony\\Component\\Process\\Tests;

use Symfony\\Component\\Process\\Exception\\ProcessTimedOutException;
use Symfony\\Component\\Process\\Process;

require \\dirname(__DIR__).'/vendor/autoload.php';

list('e' => \$php) = getopt('e:') + ['e' => 'php'];

try {
    \$process = new Process(\"exec \$php -r \\\"echo 'ready'; trigger_error('error', E_USER_ERROR);\\\"\");
    \$process->start();
    \$process->setTimeout(0.5);
    while (false === strpos(\$process->getOutput(), 'ready')) {
        usleep(1000);
    }
    \$process->signal(SIGSTOP);
    \$process->wait();

    return \$process->getExitCode();
} catch (ProcessTimedOutException \$t) {
    echo \$t->getMessage().PHP_EOL;

    return 1;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/Tests/ErrorProcessInitiator.php";
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

namespace Symfony\\Component\\Process\\Tests;

use Symfony\\Component\\Process\\Exception\\ProcessTimedOutException;
use Symfony\\Component\\Process\\Process;

require \\dirname(__DIR__).'/vendor/autoload.php';

list('e' => \$php) = getopt('e:') + ['e' => 'php'];

try {
    \$process = new Process(\"exec \$php -r \\\"echo 'ready'; trigger_error('error', E_USER_ERROR);\\\"\");
    \$process->start();
    \$process->setTimeout(0.5);
    while (false === strpos(\$process->getOutput(), 'ready')) {
        usleep(1000);
    }
    \$process->signal(SIGSTOP);
    \$process->wait();

    return \$process->getExitCode();
} catch (ProcessTimedOutException \$t) {
    echo \$t->getMessage().PHP_EOL;

    return 1;
}
", "vendor/symfony/process/Tests/ErrorProcessInitiator.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/Tests/ErrorProcessInitiator.php");
    }
}
