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

/* vendor/symfony/process/Tests/PipeStdinInStdoutStdErrStreamSelect.php */
class __TwigTemplate_33ccaf763758ae5d86b556fcd1a5ad6758089fb322392181f44ffa9fd979c065 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Tests/PipeStdinInStdoutStdErrStreamSelect.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Tests/PipeStdinInStdoutStdErrStreamSelect.php"));

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

define('ERR_SELECT_FAILED', 1);
define('ERR_TIMEOUT', 2);
define('ERR_READ_FAILED', 3);
define('ERR_WRITE_FAILED', 4);

\$read = [STDIN];
\$write = [STDOUT, STDERR];

stream_set_blocking(STDIN, 0);
stream_set_blocking(STDOUT, 0);
stream_set_blocking(STDERR, 0);

\$out = \$err = '';
while (\$read || \$write) {
    \$r = \$read;
    \$w = \$write;
    \$e = null;
    \$n = stream_select(\$r, \$w, \$e, 5);

    if (false === \$n) {
        die(ERR_SELECT_FAILED);
    } elseif (\$n < 1) {
        die(ERR_TIMEOUT);
    }

    if (in_array(STDOUT, \$w) && strlen(\$out) > 0) {
        \$written = fwrite(STDOUT, (string) \$out, 32768);
        if (false === \$written) {
            die(ERR_WRITE_FAILED);
        }
        \$out = (string) substr(\$out, \$written);
    }
    if (null === \$read && '' === \$out) {
        \$write = array_diff(\$write, [STDOUT]);
    }

    if (in_array(STDERR, \$w) && strlen(\$err) > 0) {
        \$written = fwrite(STDERR, (string) \$err, 32768);
        if (false === \$written) {
            die(ERR_WRITE_FAILED);
        }
        \$err = (string) substr(\$err, \$written);
    }
    if (null === \$read && '' === \$err) {
        \$write = array_diff(\$write, [STDERR]);
    }

    if (\$r) {
        \$str = fread(STDIN, 32768);
        if (false !== \$str) {
            \$out .= \$str;
            \$err .= \$str;
        }
        if (false === \$str || feof(STDIN)) {
            \$read = null;
            if (!feof(STDIN)) {
                die(ERR_READ_FAILED);
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/Tests/PipeStdinInStdoutStdErrStreamSelect.php";
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

define('ERR_SELECT_FAILED', 1);
define('ERR_TIMEOUT', 2);
define('ERR_READ_FAILED', 3);
define('ERR_WRITE_FAILED', 4);

\$read = [STDIN];
\$write = [STDOUT, STDERR];

stream_set_blocking(STDIN, 0);
stream_set_blocking(STDOUT, 0);
stream_set_blocking(STDERR, 0);

\$out = \$err = '';
while (\$read || \$write) {
    \$r = \$read;
    \$w = \$write;
    \$e = null;
    \$n = stream_select(\$r, \$w, \$e, 5);

    if (false === \$n) {
        die(ERR_SELECT_FAILED);
    } elseif (\$n < 1) {
        die(ERR_TIMEOUT);
    }

    if (in_array(STDOUT, \$w) && strlen(\$out) > 0) {
        \$written = fwrite(STDOUT, (string) \$out, 32768);
        if (false === \$written) {
            die(ERR_WRITE_FAILED);
        }
        \$out = (string) substr(\$out, \$written);
    }
    if (null === \$read && '' === \$out) {
        \$write = array_diff(\$write, [STDOUT]);
    }

    if (in_array(STDERR, \$w) && strlen(\$err) > 0) {
        \$written = fwrite(STDERR, (string) \$err, 32768);
        if (false === \$written) {
            die(ERR_WRITE_FAILED);
        }
        \$err = (string) substr(\$err, \$written);
    }
    if (null === \$read && '' === \$err) {
        \$write = array_diff(\$write, [STDERR]);
    }

    if (\$r) {
        \$str = fread(STDIN, 32768);
        if (false !== \$str) {
            \$out .= \$str;
            \$err .= \$str;
        }
        if (false === \$str || feof(STDIN)) {
            \$read = null;
            if (!feof(STDIN)) {
                die(ERR_READ_FAILED);
            }
        }
    }
}
", "vendor/symfony/process/Tests/PipeStdinInStdoutStdErrStreamSelect.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/Tests/PipeStdinInStdoutStdErrStreamSelect.php");
    }
}
