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

/* vendor/symfony/mime/Encoder/Base64MimeHeaderEncoder.php */
class __TwigTemplate_dcecc9bc62b00ab41513f0cb468a9a5878043b3079c7ebe65b9ade48dbc1395f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Encoder/Base64MimeHeaderEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Encoder/Base64MimeHeaderEncoder.php"));

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
final class Base64MimeHeaderEncoder extends Base64Encoder implements MimeHeaderEncoderInterface
{
    public function getName(): string
    {
        return 'B';
    }

    /**
     * Takes an unencoded string and produces a Base64 encoded string from it.
     *
     * If the charset is iso-2022-jp, it uses mb_encode_mimeheader instead of
     * default encodeString, otherwise pass to the parent method.
     */
    public function encodeString(string \$string, ?string \$charset = 'utf-8', int \$firstLineOffset = 0, int \$maxLineLength = 0): string
    {
        if ('iso-2022-jp' === strtolower(\$charset)) {
            \$old = mb_internal_encoding();
            mb_internal_encoding('utf-8');
            \$newstring = mb_encode_mimeheader(\$string, 'iso-2022-jp', \$this->getName(), \"\\r\\n\");
            mb_internal_encoding(\$old);

            return \$newstring;
        }

        return parent::encodeString(\$string, \$charset, \$firstLineOffset, \$maxLineLength);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Encoder/Base64MimeHeaderEncoder.php";
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
final class Base64MimeHeaderEncoder extends Base64Encoder implements MimeHeaderEncoderInterface
{
    public function getName(): string
    {
        return 'B';
    }

    /**
     * Takes an unencoded string and produces a Base64 encoded string from it.
     *
     * If the charset is iso-2022-jp, it uses mb_encode_mimeheader instead of
     * default encodeString, otherwise pass to the parent method.
     */
    public function encodeString(string \$string, ?string \$charset = 'utf-8', int \$firstLineOffset = 0, int \$maxLineLength = 0): string
    {
        if ('iso-2022-jp' === strtolower(\$charset)) {
            \$old = mb_internal_encoding();
            mb_internal_encoding('utf-8');
            \$newstring = mb_encode_mimeheader(\$string, 'iso-2022-jp', \$this->getName(), \"\\r\\n\");
            mb_internal_encoding(\$old);

            return \$newstring;
        }

        return parent::encodeString(\$string, \$charset, \$firstLineOffset, \$maxLineLength);
    }
}
", "vendor/symfony/mime/Encoder/Base64MimeHeaderEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Encoder/Base64MimeHeaderEncoder.php");
    }
}
