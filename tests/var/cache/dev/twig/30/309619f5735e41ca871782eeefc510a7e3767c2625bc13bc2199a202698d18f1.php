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

/* vendor/symfony/mime/Encoder/Base64Encoder.php */
class __TwigTemplate_b09267d35de6f0d00953fa6e4323246d671ca97330e88bf2d5c8da16ff12ecda extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Encoder/Base64Encoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Encoder/Base64Encoder.php"));

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

namespace Symfony\\Component\\Mime\\Encoder;

/**
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
class Base64Encoder implements EncoderInterface
{
    /**
     * Takes an unencoded string and produces a Base64 encoded string from it.
     *
     * Base64 encoded strings have a maximum line length of 76 characters.
     * If the first line needs to be shorter, indicate the difference with
     * \$firstLineOffset.
     */
    public function encodeString(string \$string, ?string \$charset = 'utf-8', int \$firstLineOffset = 0, int \$maxLineLength = 0): string
    {
        if (0 >= \$maxLineLength || 76 < \$maxLineLength) {
            \$maxLineLength = 76;
        }

        \$encodedString = base64_encode(\$string);
        \$firstLine = '';
        if (0 !== \$firstLineOffset) {
            \$firstLine = substr(\$encodedString, 0, \$maxLineLength - \$firstLineOffset).\"\\r\\n\";
            \$encodedString = substr(\$encodedString, \$maxLineLength - \$firstLineOffset);
        }

        return \$firstLine.trim(chunk_split(\$encodedString, \$maxLineLength, \"\\r\\n\"));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Encoder/Base64Encoder.php";
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

namespace Symfony\\Component\\Mime\\Encoder;

/**
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
class Base64Encoder implements EncoderInterface
{
    /**
     * Takes an unencoded string and produces a Base64 encoded string from it.
     *
     * Base64 encoded strings have a maximum line length of 76 characters.
     * If the first line needs to be shorter, indicate the difference with
     * \$firstLineOffset.
     */
    public function encodeString(string \$string, ?string \$charset = 'utf-8', int \$firstLineOffset = 0, int \$maxLineLength = 0): string
    {
        if (0 >= \$maxLineLength || 76 < \$maxLineLength) {
            \$maxLineLength = 76;
        }

        \$encodedString = base64_encode(\$string);
        \$firstLine = '';
        if (0 !== \$firstLineOffset) {
            \$firstLine = substr(\$encodedString, 0, \$maxLineLength - \$firstLineOffset).\"\\r\\n\";
            \$encodedString = substr(\$encodedString, \$maxLineLength - \$firstLineOffset);
        }

        return \$firstLine.trim(chunk_split(\$encodedString, \$maxLineLength, \"\\r\\n\"));
    }
}
", "vendor/symfony/mime/Encoder/Base64Encoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Encoder/Base64Encoder.php");
    }
}
