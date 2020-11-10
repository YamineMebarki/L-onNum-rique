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

/* vendor/symfony/web-server-bundle/Resources/router.php */
class __TwigTemplate_aa35360e12e059bd95a040a4193eb7cae6cdd10b8c550d8b08b13434c8788b6a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/Resources/router.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/Resources/router.php"));

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

/*
 * This file implements rewrite rules for PHP built-in web server.
 *
 * See: https://php.net/features.commandline.webserver
 *
 * If you have custom directory layout, then you have to write your own router
 * and pass it as a value to 'router' option of server:run command.
 *
 * @author Michał Pipa <michal.pipa.xsolve@gmail.com>
 * @author Albert Jessurum <ajessu@gmail.com>
 */

// Workaround https://bugs.php.net/64566
if (ini_get('auto_prepend_file') && !in_array(realpath(ini_get('auto_prepend_file')), get_included_files(), true)) {
    require ini_get('auto_prepend_file');
}

if (is_file(\$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.\$_SERVER['SCRIPT_NAME'])) {
    return false;
}

\$script = isset(\$_ENV['APP_FRONT_CONTROLLER']) ? \$_ENV['APP_FRONT_CONTROLLER'] : 'index.php';

\$_SERVER = array_merge(\$_SERVER, \$_ENV);
\$_SERVER['SCRIPT_FILENAME'] = \$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.\$script;

// Since we are rewriting to app_dev.php, adjust SCRIPT_NAME and PHP_SELF accordingly
\$_SERVER['SCRIPT_NAME'] = DIRECTORY_SEPARATOR.\$script;
\$_SERVER['PHP_SELF'] = DIRECTORY_SEPARATOR.\$script;

require \$script;

error_log(sprintf('%s:%d [%d]: %s', \$_SERVER['REMOTE_ADDR'], \$_SERVER['REMOTE_PORT'], http_response_code(), \$_SERVER['REQUEST_URI']), 4);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-server-bundle/Resources/router.php";
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

/*
 * This file implements rewrite rules for PHP built-in web server.
 *
 * See: https://php.net/features.commandline.webserver
 *
 * If you have custom directory layout, then you have to write your own router
 * and pass it as a value to 'router' option of server:run command.
 *
 * @author Michał Pipa <michal.pipa.xsolve@gmail.com>
 * @author Albert Jessurum <ajessu@gmail.com>
 */

// Workaround https://bugs.php.net/64566
if (ini_get('auto_prepend_file') && !in_array(realpath(ini_get('auto_prepend_file')), get_included_files(), true)) {
    require ini_get('auto_prepend_file');
}

if (is_file(\$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.\$_SERVER['SCRIPT_NAME'])) {
    return false;
}

\$script = isset(\$_ENV['APP_FRONT_CONTROLLER']) ? \$_ENV['APP_FRONT_CONTROLLER'] : 'index.php';

\$_SERVER = array_merge(\$_SERVER, \$_ENV);
\$_SERVER['SCRIPT_FILENAME'] = \$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.\$script;

// Since we are rewriting to app_dev.php, adjust SCRIPT_NAME and PHP_SELF accordingly
\$_SERVER['SCRIPT_NAME'] = DIRECTORY_SEPARATOR.\$script;
\$_SERVER['PHP_SELF'] = DIRECTORY_SEPARATOR.\$script;

require \$script;

error_log(sprintf('%s:%d [%d]: %s', \$_SERVER['REMOTE_ADDR'], \$_SERVER['REMOTE_PORT'], http_response_code(), \$_SERVER['REQUEST_URI']), 4);
", "vendor/symfony/web-server-bundle/Resources/router.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-server-bundle/Resources/router.php");
    }
}
