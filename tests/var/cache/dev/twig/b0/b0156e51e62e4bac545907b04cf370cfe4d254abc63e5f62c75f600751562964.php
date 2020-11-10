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

/* vendor/symfony/http-foundation/Session/SessionUtils.php */
class __TwigTemplate_300096ab1ac152861b98222c99509f3f19462e6285308875ea965fff068c8bb5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/SessionUtils.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/SessionUtils.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session;

/**
 * Session utility functions.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Rémon van de Kamp <rpkamp@gmail.com>
 *
 * @internal
 */
final class SessionUtils
{
    /**
     * Finds the session header amongst the headers that are to be sent, removes it, and returns
     * it so the caller can process it further.
     */
    public static function popSessionCookie(string \$sessionName, string \$sessionId): ?string
    {
        \$sessionCookie = null;
        \$sessionCookiePrefix = sprintf(' %s=', urlencode(\$sessionName));
        \$sessionCookieWithId = sprintf('%s%s;', \$sessionCookiePrefix, urlencode(\$sessionId));
        \$otherCookies = [];
        foreach (headers_list() as \$h) {
            if (0 !== stripos(\$h, 'Set-Cookie:')) {
                continue;
            }
            if (11 === strpos(\$h, \$sessionCookiePrefix, 11)) {
                \$sessionCookie = \$h;

                if (11 !== strpos(\$h, \$sessionCookieWithId, 11)) {
                    \$otherCookies[] = \$h;
                }
            } else {
                \$otherCookies[] = \$h;
            }
        }
        if (null === \$sessionCookie) {
            return null;
        }

        header_remove('Set-Cookie');
        foreach (\$otherCookies as \$h) {
            header(\$h, false);
        }

        return \$sessionCookie;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/SessionUtils.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session;

/**
 * Session utility functions.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Rémon van de Kamp <rpkamp@gmail.com>
 *
 * @internal
 */
final class SessionUtils
{
    /**
     * Finds the session header amongst the headers that are to be sent, removes it, and returns
     * it so the caller can process it further.
     */
    public static function popSessionCookie(string \$sessionName, string \$sessionId): ?string
    {
        \$sessionCookie = null;
        \$sessionCookiePrefix = sprintf(' %s=', urlencode(\$sessionName));
        \$sessionCookieWithId = sprintf('%s%s;', \$sessionCookiePrefix, urlencode(\$sessionId));
        \$otherCookies = [];
        foreach (headers_list() as \$h) {
            if (0 !== stripos(\$h, 'Set-Cookie:')) {
                continue;
            }
            if (11 === strpos(\$h, \$sessionCookiePrefix, 11)) {
                \$sessionCookie = \$h;

                if (11 !== strpos(\$h, \$sessionCookieWithId, 11)) {
                    \$otherCookies[] = \$h;
                }
            } else {
                \$otherCookies[] = \$h;
            }
        }
        if (null === \$sessionCookie) {
            return null;
        }

        header_remove('Set-Cookie');
        foreach (\$otherCookies as \$h) {
            header(\$h, false);
        }

        return \$sessionCookie;
    }
}
", "vendor/symfony/http-foundation/Session/SessionUtils.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/SessionUtils.php");
    }
}
