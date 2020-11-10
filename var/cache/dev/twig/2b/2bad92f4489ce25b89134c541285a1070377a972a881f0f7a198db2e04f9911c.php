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

/* vendor/fzaninotto/faker/src/Faker/Provider/UserAgent.php */
class __TwigTemplate_c7d3010982570af61d04b4459eb68d6914374cb43e9d83c11630374e7c829792 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/UserAgent.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/UserAgent.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

class UserAgent extends Base
{
    protected static \$userAgents = array('firefox', 'chrome', 'internetExplorer', 'opera', 'safari');

    protected static \$windowsPlatformTokens = array(
        'Windows NT 6.2', 'Windows NT 6.1', 'Windows NT 6.0', 'Windows NT 5.2', 'Windows NT 5.1',
        'Windows NT 5.01', 'Windows NT 5.0', 'Windows NT 4.0', 'Windows 98; Win 9x 4.90', 'Windows 98',
        'Windows 95', 'Windows CE'
    );

    /**
     * Possible processors on Linux
     */
    protected static \$linuxProcessor = array('i686', 'x86_64');

    /**
     * Mac processors (it also added U;)
     */
    protected static \$macProcessor = array('Intel', 'PPC', 'U; Intel', 'U; PPC');

    /**
     * Add as many languages as you like.
     */
    protected static \$lang = array('en-US', 'sl-SI');

    /**
     * Generate mac processor
     *
     * @return string
     */
    public static function macProcessor()
    {
        return static::randomElement(static::\$macProcessor);
    }

    /**
     * Generate linux processor
     *
     * @return string
     */
    public static function linuxProcessor()
    {
        return static::randomElement(static::\$linuxProcessor);
    }

    /**
     * Generate a random user agent
     *
     * @example 'Mozilla/5.0 (Windows CE) AppleWebKit/5350 (KHTML, like Gecko) Chrome/13.0.888.0 Safari/5350'
     */
    public static function userAgent()
    {
        \$userAgentName = static::randomElement(static::\$userAgents);

        return static::\$userAgentName();
    }

    /**
     * Generate Chrome user agent
     *
     * @example 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_6_5) AppleWebKit/5312 (KHTML, like Gecko) Chrome/14.0.894.0 Safari/5312'
     */
    public static function chrome()
    {
        \$saf = mt_rand(531, 536) . mt_rand(0, 2);

        \$platforms = array(
            '(' . static::linuxPlatformToken() . \") AppleWebKit/\$saf (KHTML, like Gecko) Chrome/\" . mt_rand(36, 40) . '.0.' . mt_rand(800, 899) . \".0 Mobile Safari/\$saf\",
            '(' . static::windowsPlatformToken() . \") AppleWebKit/\$saf (KHTML, like Gecko) Chrome/\" . mt_rand(36, 40) . '.0.' . mt_rand(800, 899) . \".0 Mobile Safari/\$saf\",
            '(' . static::macPlatformToken() . \") AppleWebKit/\$saf (KHTML, like Gecko) Chrome/\" . mt_rand(36, 40) . '.0.' . mt_rand(800, 899) . \".0 Mobile Safari/\$saf\"
        );

        return 'Mozilla/5.0 ' . static::randomElement(\$platforms);
    }

    /**
     * Generate Firefox user agent
     *
     * @example 'Mozilla/5.0 (X11; Linuxi686; rv:7.0) Gecko/20101231 Firefox/3.6'
     */
    public static function firefox()
    {
        \$ver = 'Gecko/' . date('Ymd', mt_rand(strtotime('2010-1-1'), time())) . ' Firefox/' . mt_rand(35, 37) . '.0';

        \$platforms = array(
            '(' . static::windowsPlatformToken() . '; ' . static::randomElement(static::\$lang) . '; rv:1.9.' . mt_rand(0, 2) . '.20) ' . \$ver,
            '(' . static::linuxPlatformToken() . '; rv:' . mt_rand(5, 7) . '.0) ' . \$ver,
            '(' . static::macPlatformToken() . ' rv:' . mt_rand(2, 6) . '.0) ' . \$ver
        );

        return \"Mozilla/5.0 \" . static::randomElement(\$platforms);
    }

    /**
     * Generate Safari user agent
     *
     * @example 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_1 rv:3.0; en-US) AppleWebKit/534.11.3 (KHTML, like Gecko) Version/4.0 Safari/534.11.3'
     */
    public static function safari()
    {
        \$saf = mt_rand(531, 535) . '.' . mt_rand(1, 50) . '.' . mt_rand(1, 7);
        if (mt_rand(0, 1) == 0) {
            \$ver = mt_rand(4, 5) . '.' . mt_rand(0, 1);
        } else {
            \$ver = mt_rand(4, 5) . '.0.' . mt_rand(1, 5);
        }

        \$mobileDevices = array(
            'iPhone; CPU iPhone OS',
            'iPad; CPU OS'
        );

        \$platforms = array(
            '(Windows; U; ' . static::windowsPlatformToken() . \") AppleWebKit/\$saf (KHTML, like Gecko) Version/\$ver Safari/\$saf\",
            '(' . static::macPlatformToken() . ' rv:' . mt_rand(2, 6) . '.0; ' . static::randomElement(static::\$lang) . \") AppleWebKit/\$saf (KHTML, like Gecko) Version/\$ver Safari/\$saf\",
            '(' . static::randomElement(\$mobileDevices) . ' ' . mt_rand(7, 8) . '_' . mt_rand(0, 2) . '_' . mt_rand(1, 2) . ' like Mac OS X; ' . static::randomElement(static::\$lang) . \") AppleWebKit/\$saf (KHTML, like Gecko) Version/\" . mt_rand(3, 4) . \".0.5 Mobile/8B\" . mt_rand(111, 119) . \" Safari/6\$saf\",
        );

        return \"Mozilla/5.0 \" . static::randomElement(\$platforms);
    }

    /**
     * Generate Opera user agent
     *
     * @example 'Opera/8.25 (Windows NT 5.1; en-US) Presto/2.9.188 Version/10.00'
     */
    public static function opera()
    {
        \$platforms = array(
            '(' . static::linuxPlatformToken() . '; ' . static::randomElement(static::\$lang) . ') Presto/2.' . mt_rand(8, 12) . '.' . mt_rand(160, 355) . ' Version/' . mt_rand(10, 12) . '.00',
            '(' . static::windowsPlatformToken() . '; ' . static::randomElement(static::\$lang) . ') Presto/2.' . mt_rand(8, 12) . '.' . mt_rand(160, 355) . ' Version/' . mt_rand(10, 12) . '.00'
        );

        return \"Opera/\" . mt_rand(8, 9) . '.' . mt_rand(10, 99) . ' ' . static::randomElement(\$platforms);
    }

    /**
     * Generate Internet Explorer user agent
     *
     * @example 'Mozilla/5.0 (compatible; MSIE 7.0; Windows 98; Win 9x 4.90; Trident/3.0)'
     */
    public static function internetExplorer()
    {
        return 'Mozilla/5.0 (compatible; MSIE ' . mt_rand(5, 11) . '.0; ' . static::windowsPlatformToken() . '; Trident/' . mt_rand(3, 5) . '.' . mt_rand(0, 1) . ')';
    }

    public static function windowsPlatformToken()
    {
        return static::randomElement(static::\$windowsPlatformTokens);
    }

    public static function macPlatformToken()
    {
        return 'Macintosh; ' . static::randomElement(static::\$macProcessor) . ' Mac OS X 10_' . mt_rand(5, 8) . '_' . mt_rand(0, 9);
    }

    public static function linuxPlatformToken()
    {
        return 'X11; Linux ' . static::randomElement(static::\$linuxProcessor);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/UserAgent.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider;

class UserAgent extends Base
{
    protected static \$userAgents = array('firefox', 'chrome', 'internetExplorer', 'opera', 'safari');

    protected static \$windowsPlatformTokens = array(
        'Windows NT 6.2', 'Windows NT 6.1', 'Windows NT 6.0', 'Windows NT 5.2', 'Windows NT 5.1',
        'Windows NT 5.01', 'Windows NT 5.0', 'Windows NT 4.0', 'Windows 98; Win 9x 4.90', 'Windows 98',
        'Windows 95', 'Windows CE'
    );

    /**
     * Possible processors on Linux
     */
    protected static \$linuxProcessor = array('i686', 'x86_64');

    /**
     * Mac processors (it also added U;)
     */
    protected static \$macProcessor = array('Intel', 'PPC', 'U; Intel', 'U; PPC');

    /**
     * Add as many languages as you like.
     */
    protected static \$lang = array('en-US', 'sl-SI');

    /**
     * Generate mac processor
     *
     * @return string
     */
    public static function macProcessor()
    {
        return static::randomElement(static::\$macProcessor);
    }

    /**
     * Generate linux processor
     *
     * @return string
     */
    public static function linuxProcessor()
    {
        return static::randomElement(static::\$linuxProcessor);
    }

    /**
     * Generate a random user agent
     *
     * @example 'Mozilla/5.0 (Windows CE) AppleWebKit/5350 (KHTML, like Gecko) Chrome/13.0.888.0 Safari/5350'
     */
    public static function userAgent()
    {
        \$userAgentName = static::randomElement(static::\$userAgents);

        return static::\$userAgentName();
    }

    /**
     * Generate Chrome user agent
     *
     * @example 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_6_5) AppleWebKit/5312 (KHTML, like Gecko) Chrome/14.0.894.0 Safari/5312'
     */
    public static function chrome()
    {
        \$saf = mt_rand(531, 536) . mt_rand(0, 2);

        \$platforms = array(
            '(' . static::linuxPlatformToken() . \") AppleWebKit/\$saf (KHTML, like Gecko) Chrome/\" . mt_rand(36, 40) . '.0.' . mt_rand(800, 899) . \".0 Mobile Safari/\$saf\",
            '(' . static::windowsPlatformToken() . \") AppleWebKit/\$saf (KHTML, like Gecko) Chrome/\" . mt_rand(36, 40) . '.0.' . mt_rand(800, 899) . \".0 Mobile Safari/\$saf\",
            '(' . static::macPlatformToken() . \") AppleWebKit/\$saf (KHTML, like Gecko) Chrome/\" . mt_rand(36, 40) . '.0.' . mt_rand(800, 899) . \".0 Mobile Safari/\$saf\"
        );

        return 'Mozilla/5.0 ' . static::randomElement(\$platforms);
    }

    /**
     * Generate Firefox user agent
     *
     * @example 'Mozilla/5.0 (X11; Linuxi686; rv:7.0) Gecko/20101231 Firefox/3.6'
     */
    public static function firefox()
    {
        \$ver = 'Gecko/' . date('Ymd', mt_rand(strtotime('2010-1-1'), time())) . ' Firefox/' . mt_rand(35, 37) . '.0';

        \$platforms = array(
            '(' . static::windowsPlatformToken() . '; ' . static::randomElement(static::\$lang) . '; rv:1.9.' . mt_rand(0, 2) . '.20) ' . \$ver,
            '(' . static::linuxPlatformToken() . '; rv:' . mt_rand(5, 7) . '.0) ' . \$ver,
            '(' . static::macPlatformToken() . ' rv:' . mt_rand(2, 6) . '.0) ' . \$ver
        );

        return \"Mozilla/5.0 \" . static::randomElement(\$platforms);
    }

    /**
     * Generate Safari user agent
     *
     * @example 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_1 rv:3.0; en-US) AppleWebKit/534.11.3 (KHTML, like Gecko) Version/4.0 Safari/534.11.3'
     */
    public static function safari()
    {
        \$saf = mt_rand(531, 535) . '.' . mt_rand(1, 50) . '.' . mt_rand(1, 7);
        if (mt_rand(0, 1) == 0) {
            \$ver = mt_rand(4, 5) . '.' . mt_rand(0, 1);
        } else {
            \$ver = mt_rand(4, 5) . '.0.' . mt_rand(1, 5);
        }

        \$mobileDevices = array(
            'iPhone; CPU iPhone OS',
            'iPad; CPU OS'
        );

        \$platforms = array(
            '(Windows; U; ' . static::windowsPlatformToken() . \") AppleWebKit/\$saf (KHTML, like Gecko) Version/\$ver Safari/\$saf\",
            '(' . static::macPlatformToken() . ' rv:' . mt_rand(2, 6) . '.0; ' . static::randomElement(static::\$lang) . \") AppleWebKit/\$saf (KHTML, like Gecko) Version/\$ver Safari/\$saf\",
            '(' . static::randomElement(\$mobileDevices) . ' ' . mt_rand(7, 8) . '_' . mt_rand(0, 2) . '_' . mt_rand(1, 2) . ' like Mac OS X; ' . static::randomElement(static::\$lang) . \") AppleWebKit/\$saf (KHTML, like Gecko) Version/\" . mt_rand(3, 4) . \".0.5 Mobile/8B\" . mt_rand(111, 119) . \" Safari/6\$saf\",
        );

        return \"Mozilla/5.0 \" . static::randomElement(\$platforms);
    }

    /**
     * Generate Opera user agent
     *
     * @example 'Opera/8.25 (Windows NT 5.1; en-US) Presto/2.9.188 Version/10.00'
     */
    public static function opera()
    {
        \$platforms = array(
            '(' . static::linuxPlatformToken() . '; ' . static::randomElement(static::\$lang) . ') Presto/2.' . mt_rand(8, 12) . '.' . mt_rand(160, 355) . ' Version/' . mt_rand(10, 12) . '.00',
            '(' . static::windowsPlatformToken() . '; ' . static::randomElement(static::\$lang) . ') Presto/2.' . mt_rand(8, 12) . '.' . mt_rand(160, 355) . ' Version/' . mt_rand(10, 12) . '.00'
        );

        return \"Opera/\" . mt_rand(8, 9) . '.' . mt_rand(10, 99) . ' ' . static::randomElement(\$platforms);
    }

    /**
     * Generate Internet Explorer user agent
     *
     * @example 'Mozilla/5.0 (compatible; MSIE 7.0; Windows 98; Win 9x 4.90; Trident/3.0)'
     */
    public static function internetExplorer()
    {
        return 'Mozilla/5.0 (compatible; MSIE ' . mt_rand(5, 11) . '.0; ' . static::windowsPlatformToken() . '; Trident/' . mt_rand(3, 5) . '.' . mt_rand(0, 1) . ')';
    }

    public static function windowsPlatformToken()
    {
        return static::randomElement(static::\$windowsPlatformTokens);
    }

    public static function macPlatformToken()
    {
        return 'Macintosh; ' . static::randomElement(static::\$macProcessor) . ' Mac OS X 10_' . mt_rand(5, 8) . '_' . mt_rand(0, 9);
    }

    public static function linuxPlatformToken()
    {
        return 'X11; Linux ' . static::randomElement(static::\$linuxProcessor);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/UserAgent.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/UserAgent.php");
    }
}
