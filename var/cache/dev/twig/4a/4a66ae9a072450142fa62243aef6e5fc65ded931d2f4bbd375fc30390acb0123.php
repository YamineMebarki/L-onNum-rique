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

/* vendor/symfony/http-kernel/Tests/Logger.php */
class __TwigTemplate_9279052a16e8d0ffd84912174e6ec6015ad072a6bddaf388691d712aa7606365 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Logger.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Logger.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests;

use Psr\\Log\\LoggerInterface;

class Logger implements LoggerInterface
{
    protected \$log;

    public function __construct()
    {
        \$this->clear();
    }

    public function getLogs(\$level = false): array
    {
        return false === \$level ? \$this->log : \$this->log[\$level];
    }

    public function clear()
    {
        \$this->log = [
            'emergency' => [],
            'alert' => [],
            'critical' => [],
            'error' => [],
            'warning' => [],
            'notice' => [],
            'info' => [],
            'debug' => [],
        ];
    }

    public function log(\$level, \$message, array \$context = [])
    {
        \$this->log[\$level][] = \$message;
    }

    public function emergency(\$message, array \$context = [])
    {
        \$this->log('emergency', \$message, \$context);
    }

    public function alert(\$message, array \$context = [])
    {
        \$this->log('alert', \$message, \$context);
    }

    public function critical(\$message, array \$context = [])
    {
        \$this->log('critical', \$message, \$context);
    }

    public function error(\$message, array \$context = [])
    {
        \$this->log('error', \$message, \$context);
    }

    public function warning(\$message, array \$context = [])
    {
        \$this->log('warning', \$message, \$context);
    }

    public function notice(\$message, array \$context = [])
    {
        \$this->log('notice', \$message, \$context);
    }

    public function info(\$message, array \$context = [])
    {
        \$this->log('info', \$message, \$context);
    }

    public function debug(\$message, array \$context = [])
    {
        \$this->log('debug', \$message, \$context);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Logger.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests;

use Psr\\Log\\LoggerInterface;

class Logger implements LoggerInterface
{
    protected \$log;

    public function __construct()
    {
        \$this->clear();
    }

    public function getLogs(\$level = false): array
    {
        return false === \$level ? \$this->log : \$this->log[\$level];
    }

    public function clear()
    {
        \$this->log = [
            'emergency' => [],
            'alert' => [],
            'critical' => [],
            'error' => [],
            'warning' => [],
            'notice' => [],
            'info' => [],
            'debug' => [],
        ];
    }

    public function log(\$level, \$message, array \$context = [])
    {
        \$this->log[\$level][] = \$message;
    }

    public function emergency(\$message, array \$context = [])
    {
        \$this->log('emergency', \$message, \$context);
    }

    public function alert(\$message, array \$context = [])
    {
        \$this->log('alert', \$message, \$context);
    }

    public function critical(\$message, array \$context = [])
    {
        \$this->log('critical', \$message, \$context);
    }

    public function error(\$message, array \$context = [])
    {
        \$this->log('error', \$message, \$context);
    }

    public function warning(\$message, array \$context = [])
    {
        \$this->log('warning', \$message, \$context);
    }

    public function notice(\$message, array \$context = [])
    {
        \$this->log('notice', \$message, \$context);
    }

    public function info(\$message, array \$context = [])
    {
        \$this->log('info', \$message, \$context);
    }

    public function debug(\$message, array \$context = [])
    {
        \$this->log('debug', \$message, \$context);
    }
}
", "vendor/symfony/http-kernel/Tests/Logger.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Logger.php");
    }
}
