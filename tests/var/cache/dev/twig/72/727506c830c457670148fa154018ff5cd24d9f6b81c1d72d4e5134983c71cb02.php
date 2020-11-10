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

/* vendor/symfony/mime/Encoder/Base64ContentEncoder.php */
class __TwigTemplate_38a13bef65f0107f85b8e20b3c72b88296d6ebd196753a50a8b7df7573caad0f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Encoder/Base64ContentEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Encoder/Base64ContentEncoder.php"));

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

use Symfony\\Component\\Mime\\Exception\\RuntimeException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class Base64ContentEncoder extends Base64Encoder implements ContentEncoderInterface
{
    public function encodeByteStream(\$stream, int \$maxLineLength = 0): iterable
    {
        if (!\\is_resource(\$stream)) {
            throw new \\TypeError(sprintf('Method \"%s\" takes a stream as a first argument.', __METHOD__));
        }

        \$filter = stream_filter_append(\$stream, 'convert.base64-encode', \\STREAM_FILTER_READ, [
            'line-length' => 0 >= \$maxLineLength || 76 < \$maxLineLength ? 76 : \$maxLineLength,
            'line-break-chars' => \"\\r\\n\",
        ]);
        if (!\\is_resource(\$filter)) {
            throw new RuntimeException('Unable to set the base64 content encoder to the filter.');
        }

        if (stream_get_meta_data(\$stream)['seekable'] ?? false) {
            rewind(\$stream);
        }
        while (!feof(\$stream)) {
            yield fread(\$stream, 8192);
        }
        stream_filter_remove(\$filter);
    }

    public function getName(): string
    {
        return 'base64';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Encoder/Base64ContentEncoder.php";
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

use Symfony\\Component\\Mime\\Exception\\RuntimeException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class Base64ContentEncoder extends Base64Encoder implements ContentEncoderInterface
{
    public function encodeByteStream(\$stream, int \$maxLineLength = 0): iterable
    {
        if (!\\is_resource(\$stream)) {
            throw new \\TypeError(sprintf('Method \"%s\" takes a stream as a first argument.', __METHOD__));
        }

        \$filter = stream_filter_append(\$stream, 'convert.base64-encode', \\STREAM_FILTER_READ, [
            'line-length' => 0 >= \$maxLineLength || 76 < \$maxLineLength ? 76 : \$maxLineLength,
            'line-break-chars' => \"\\r\\n\",
        ]);
        if (!\\is_resource(\$filter)) {
            throw new RuntimeException('Unable to set the base64 content encoder to the filter.');
        }

        if (stream_get_meta_data(\$stream)['seekable'] ?? false) {
            rewind(\$stream);
        }
        while (!feof(\$stream)) {
            yield fread(\$stream, 8192);
        }
        stream_filter_remove(\$filter);
    }

    public function getName(): string
    {
        return 'base64';
    }
}
", "vendor/symfony/mime/Encoder/Base64ContentEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Encoder/Base64ContentEncoder.php");
    }
}
