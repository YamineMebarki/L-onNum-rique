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

/* vendor/symfony/mime/Encoder/Rfc2231Encoder.php */
class __TwigTemplate_ee088506466b650f503805154bfa3740d62604c9b44c8e613c67f47e391c9078 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Encoder/Rfc2231Encoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Encoder/Rfc2231Encoder.php"));

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

use Symfony\\Component\\Mime\\CharacterStream;

/**
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
final class Rfc2231Encoder implements EncoderInterface
{
    /**
     * Takes an unencoded string and produces a string encoded according to RFC 2231 from it.
     */
    public function encodeString(string \$string, ?string \$charset = 'utf-8', int \$firstLineOffset = 0, int \$maxLineLength = 0): string
    {
        \$lines = [];
        \$lineCount = 0;
        \$lines[] = '';
        \$currentLine = &\$lines[\$lineCount++];

        if (0 >= \$maxLineLength) {
            \$maxLineLength = 75;
        }

        \$charStream = new CharacterStream(\$string, \$charset);
        \$thisLineLength = \$maxLineLength - \$firstLineOffset;

        while (null !== \$char = \$charStream->read(4)) {
            \$encodedChar = rawurlencode(\$char);
            if (0 !== \\strlen(\$currentLine) && \\strlen(\$currentLine.\$encodedChar) > \$thisLineLength) {
                \$lines[] = '';
                \$currentLine = &\$lines[\$lineCount++];
                \$thisLineLength = \$maxLineLength;
            }
            \$currentLine .= \$encodedChar;
        }

        return implode(\"\\r\\n\", \$lines);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Encoder/Rfc2231Encoder.php";
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

use Symfony\\Component\\Mime\\CharacterStream;

/**
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
final class Rfc2231Encoder implements EncoderInterface
{
    /**
     * Takes an unencoded string and produces a string encoded according to RFC 2231 from it.
     */
    public function encodeString(string \$string, ?string \$charset = 'utf-8', int \$firstLineOffset = 0, int \$maxLineLength = 0): string
    {
        \$lines = [];
        \$lineCount = 0;
        \$lines[] = '';
        \$currentLine = &\$lines[\$lineCount++];

        if (0 >= \$maxLineLength) {
            \$maxLineLength = 75;
        }

        \$charStream = new CharacterStream(\$string, \$charset);
        \$thisLineLength = \$maxLineLength - \$firstLineOffset;

        while (null !== \$char = \$charStream->read(4)) {
            \$encodedChar = rawurlencode(\$char);
            if (0 !== \\strlen(\$currentLine) && \\strlen(\$currentLine.\$encodedChar) > \$thisLineLength) {
                \$lines[] = '';
                \$currentLine = &\$lines[\$lineCount++];
                \$thisLineLength = \$maxLineLength;
            }
            \$currentLine .= \$encodedChar;
        }

        return implode(\"\\r\\n\", \$lines);
    }
}
", "vendor/symfony/mime/Encoder/Rfc2231Encoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Encoder/Rfc2231Encoder.php");
    }
}
