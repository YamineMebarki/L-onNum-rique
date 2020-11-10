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

/* vendor/symfony/intl/Globals/IntlGlobals.php */
class __TwigTemplate_95c73ea7b491328232d9fc38ac8c0c6dae6fdedb78f796cdcc5f16aeb8b97b4b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Globals/IntlGlobals.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Globals/IntlGlobals.php"));

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

namespace Symfony\\Component\\Intl\\Globals;

/**
 * Provides fake static versions of the global functions in the intl extension.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
abstract class IntlGlobals
{
    /**
     * Indicates that no error occurred.
     */
    const U_ZERO_ERROR = 0;

    /**
     * Indicates that an invalid argument was passed.
     */
    const U_ILLEGAL_ARGUMENT_ERROR = 1;

    /**
     * Indicates that the parse() operation failed.
     */
    const U_PARSE_ERROR = 9;

    /**
     * All known error codes.
     */
    private static \$errorCodes = [
        self::U_ZERO_ERROR => 'U_ZERO_ERROR',
        self::U_ILLEGAL_ARGUMENT_ERROR => 'U_ILLEGAL_ARGUMENT_ERROR',
        self::U_PARSE_ERROR => 'U_PARSE_ERROR',
    ];

    /**
     * The error code of the last operation.
     */
    private static \$errorCode = self::U_ZERO_ERROR;

    /**
     * The error code of the last operation.
     */
    private static \$errorMessage = 'U_ZERO_ERROR';

    /**
     * Returns whether the error code indicates a failure.
     *
     * @param int \$errorCode The error code returned by IntlGlobals::getErrorCode()
     *
     * @return bool
     */
    public static function isFailure(\$errorCode)
    {
        return isset(self::\$errorCodes[\$errorCode])
            && \$errorCode > self::U_ZERO_ERROR;
    }

    /**
     * Returns the error code of the last operation.
     *
     * Returns IntlGlobals::U_ZERO_ERROR if no error occurred.
     *
     * @return int
     */
    public static function getErrorCode()
    {
        return self::\$errorCode;
    }

    /**
     * Returns the error message of the last operation.
     *
     * Returns \"U_ZERO_ERROR\" if no error occurred.
     *
     * @return string
     */
    public static function getErrorMessage()
    {
        return self::\$errorMessage;
    }

    /**
     * Returns the symbolic name for a given error code.
     *
     * @param int \$code The error code returned by IntlGlobals::getErrorCode()
     *
     * @return string
     */
    public static function getErrorName(\$code)
    {
        return self::\$errorCodes[\$code] ?? '[BOGUS UErrorCode]';
    }

    /**
     * Sets the current error.
     *
     * @param int    \$code    One of the error constants in this class
     * @param string \$message The ICU class error message
     *
     * @throws \\InvalidArgumentException If the code is not one of the error constants in this class
     */
    public static function setError(\$code, \$message = '')
    {
        if (!isset(self::\$errorCodes[\$code])) {
            throw new \\InvalidArgumentException(sprintf('No such error code: \"%s\"', \$code));
        }

        self::\$errorMessage = \$message ? sprintf('%s: %s', \$message, self::\$errorCodes[\$code]) : self::\$errorCodes[\$code];
        self::\$errorCode = \$code;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Globals/IntlGlobals.php";
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

namespace Symfony\\Component\\Intl\\Globals;

/**
 * Provides fake static versions of the global functions in the intl extension.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
abstract class IntlGlobals
{
    /**
     * Indicates that no error occurred.
     */
    const U_ZERO_ERROR = 0;

    /**
     * Indicates that an invalid argument was passed.
     */
    const U_ILLEGAL_ARGUMENT_ERROR = 1;

    /**
     * Indicates that the parse() operation failed.
     */
    const U_PARSE_ERROR = 9;

    /**
     * All known error codes.
     */
    private static \$errorCodes = [
        self::U_ZERO_ERROR => 'U_ZERO_ERROR',
        self::U_ILLEGAL_ARGUMENT_ERROR => 'U_ILLEGAL_ARGUMENT_ERROR',
        self::U_PARSE_ERROR => 'U_PARSE_ERROR',
    ];

    /**
     * The error code of the last operation.
     */
    private static \$errorCode = self::U_ZERO_ERROR;

    /**
     * The error code of the last operation.
     */
    private static \$errorMessage = 'U_ZERO_ERROR';

    /**
     * Returns whether the error code indicates a failure.
     *
     * @param int \$errorCode The error code returned by IntlGlobals::getErrorCode()
     *
     * @return bool
     */
    public static function isFailure(\$errorCode)
    {
        return isset(self::\$errorCodes[\$errorCode])
            && \$errorCode > self::U_ZERO_ERROR;
    }

    /**
     * Returns the error code of the last operation.
     *
     * Returns IntlGlobals::U_ZERO_ERROR if no error occurred.
     *
     * @return int
     */
    public static function getErrorCode()
    {
        return self::\$errorCode;
    }

    /**
     * Returns the error message of the last operation.
     *
     * Returns \"U_ZERO_ERROR\" if no error occurred.
     *
     * @return string
     */
    public static function getErrorMessage()
    {
        return self::\$errorMessage;
    }

    /**
     * Returns the symbolic name for a given error code.
     *
     * @param int \$code The error code returned by IntlGlobals::getErrorCode()
     *
     * @return string
     */
    public static function getErrorName(\$code)
    {
        return self::\$errorCodes[\$code] ?? '[BOGUS UErrorCode]';
    }

    /**
     * Sets the current error.
     *
     * @param int    \$code    One of the error constants in this class
     * @param string \$message The ICU class error message
     *
     * @throws \\InvalidArgumentException If the code is not one of the error constants in this class
     */
    public static function setError(\$code, \$message = '')
    {
        if (!isset(self::\$errorCodes[\$code])) {
            throw new \\InvalidArgumentException(sprintf('No such error code: \"%s\"', \$code));
        }

        self::\$errorMessage = \$message ? sprintf('%s: %s', \$message, self::\$errorCodes[\$code]) : self::\$errorCodes[\$code];
        self::\$errorCode = \$code;
    }
}
", "vendor/symfony/intl/Globals/IntlGlobals.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Globals/IntlGlobals.php");
    }
}
