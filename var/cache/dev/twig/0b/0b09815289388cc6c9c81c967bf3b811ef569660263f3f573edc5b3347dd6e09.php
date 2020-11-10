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

/* vendor/symfony/translation/Loader/JsonFileLoader.php */
class __TwigTemplate_3fbb3114687f2a38ec984d71743e0b57b2ab4c7b01429586230992ac783d30cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/JsonFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/JsonFileLoader.php"));

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

namespace Symfony\\Component\\Translation\\Loader;

use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;

/**
 * JsonFileLoader loads translations from an json file.
 *
 * @author singles
 */
class JsonFileLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    protected function loadResource(\$resource)
    {
        \$messages = [];
        if (\$data = file_get_contents(\$resource)) {
            \$messages = json_decode(\$data, true);

            if (0 < \$errorCode = json_last_error()) {
                throw new InvalidResourceException(sprintf('Error parsing JSON - %s', \$this->getJSONErrorMessage(\$errorCode)));
            }
        }

        return \$messages;
    }

    /**
     * Translates JSON_ERROR_* constant into meaningful message.
     *
     * @param int \$errorCode Error code returned by json_last_error() call
     *
     * @return string Message string
     */
    private function getJSONErrorMessage(\$errorCode)
    {
        switch (\$errorCode) {
            case JSON_ERROR_DEPTH:
                return 'Maximum stack depth exceeded';
            case JSON_ERROR_STATE_MISMATCH:
                return 'Underflow or the modes mismatch';
            case JSON_ERROR_CTRL_CHAR:
                return 'Unexpected control character found';
            case JSON_ERROR_SYNTAX:
                return 'Syntax error, malformed JSON';
            case JSON_ERROR_UTF8:
                return 'Malformed UTF-8 characters, possibly incorrectly encoded';
            default:
                return 'Unknown error';
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Loader/JsonFileLoader.php";
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

namespace Symfony\\Component\\Translation\\Loader;

use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;

/**
 * JsonFileLoader loads translations from an json file.
 *
 * @author singles
 */
class JsonFileLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    protected function loadResource(\$resource)
    {
        \$messages = [];
        if (\$data = file_get_contents(\$resource)) {
            \$messages = json_decode(\$data, true);

            if (0 < \$errorCode = json_last_error()) {
                throw new InvalidResourceException(sprintf('Error parsing JSON - %s', \$this->getJSONErrorMessage(\$errorCode)));
            }
        }

        return \$messages;
    }

    /**
     * Translates JSON_ERROR_* constant into meaningful message.
     *
     * @param int \$errorCode Error code returned by json_last_error() call
     *
     * @return string Message string
     */
    private function getJSONErrorMessage(\$errorCode)
    {
        switch (\$errorCode) {
            case JSON_ERROR_DEPTH:
                return 'Maximum stack depth exceeded';
            case JSON_ERROR_STATE_MISMATCH:
                return 'Underflow or the modes mismatch';
            case JSON_ERROR_CTRL_CHAR:
                return 'Unexpected control character found';
            case JSON_ERROR_SYNTAX:
                return 'Syntax error, malformed JSON';
            case JSON_ERROR_UTF8:
                return 'Malformed UTF-8 characters, possibly incorrectly encoded';
            default:
                return 'Unknown error';
        }
    }
}
", "vendor/symfony/translation/Loader/JsonFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Loader/JsonFileLoader.php");
    }
}
