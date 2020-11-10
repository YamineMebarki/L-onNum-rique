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

/* vendor/symfony/mime/Part/Multipart/FormDataPart.php */
class __TwigTemplate_da04b3735b2bde712d0306a5a336a687254e5ba798bf90016d4b4589daa6add5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Part/Multipart/FormDataPart.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Part/Multipart/FormDataPart.php"));

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

namespace Symfony\\Component\\Mime\\Part\\Multipart;

use Symfony\\Component\\Mime\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Mime\\Part\\AbstractMultipartPart;
use Symfony\\Component\\Mime\\Part\\DataPart;
use Symfony\\Component\\Mime\\Part\\TextPart;

/**
 * Implements RFC 7578.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class FormDataPart extends AbstractMultipartPart
{
    private \$fields = [];

    /**
     * @param (string|array|DataPart)[] \$fields
     */
    public function __construct(array \$fields = [])
    {
        parent::__construct();

        foreach (\$fields as \$name => \$value) {
            if (!\\is_string(\$value) && !\\is_array(\$value) && !\$value instanceof TextPart) {
                throw new InvalidArgumentException(sprintf('A form field value can only be a string, an array, or an instance of TextPart (\"%s\" given).', \\is_object(\$value) ? \\get_class(\$value) : \\gettype(\$value)));
            }

            \$this->fields[\$name] = \$value;
        }
        // HTTP does not support \\r\\n in header values
        \$this->getHeaders()->setMaxLineLength(PHP_INT_MAX);
    }

    public function getMediaSubtype(): string
    {
        return 'form-data';
    }

    public function getParts(): array
    {
        return \$this->prepareFields(\$this->fields);
    }

    private function prepareFields(array \$fields): array
    {
        \$values = [];
        array_walk_recursive(\$fields, function (\$item, \$key) use (&\$values) {
            if (!\\is_array(\$item)) {
                \$values[] = \$this->preparePart(\$key, \$item);
            }
        });

        return \$values;
    }

    private function preparePart(\$name, \$value): TextPart
    {
        if (\\is_string(\$value)) {
            return \$this->configurePart(\$name, new TextPart(\$value, 'utf-8', 'plain', '8bit'));
        }

        return \$this->configurePart(\$name, \$value);
    }

    private function configurePart(string \$name, TextPart \$part): TextPart
    {
        static \$r;

        if (null === \$r) {
            \$r = new \\ReflectionProperty(TextPart::class, 'encoding');
            \$r->setAccessible(true);
        }

        \$part->setDisposition('form-data');
        \$part->setName(\$name);
        // HTTP does not support \\r\\n in header values
        \$part->getHeaders()->setMaxLineLength(PHP_INT_MAX);
        \$r->setValue(\$part, '8bit');

        return \$part;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Part/Multipart/FormDataPart.php";
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

namespace Symfony\\Component\\Mime\\Part\\Multipart;

use Symfony\\Component\\Mime\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Mime\\Part\\AbstractMultipartPart;
use Symfony\\Component\\Mime\\Part\\DataPart;
use Symfony\\Component\\Mime\\Part\\TextPart;

/**
 * Implements RFC 7578.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class FormDataPart extends AbstractMultipartPart
{
    private \$fields = [];

    /**
     * @param (string|array|DataPart)[] \$fields
     */
    public function __construct(array \$fields = [])
    {
        parent::__construct();

        foreach (\$fields as \$name => \$value) {
            if (!\\is_string(\$value) && !\\is_array(\$value) && !\$value instanceof TextPart) {
                throw new InvalidArgumentException(sprintf('A form field value can only be a string, an array, or an instance of TextPart (\"%s\" given).', \\is_object(\$value) ? \\get_class(\$value) : \\gettype(\$value)));
            }

            \$this->fields[\$name] = \$value;
        }
        // HTTP does not support \\r\\n in header values
        \$this->getHeaders()->setMaxLineLength(PHP_INT_MAX);
    }

    public function getMediaSubtype(): string
    {
        return 'form-data';
    }

    public function getParts(): array
    {
        return \$this->prepareFields(\$this->fields);
    }

    private function prepareFields(array \$fields): array
    {
        \$values = [];
        array_walk_recursive(\$fields, function (\$item, \$key) use (&\$values) {
            if (!\\is_array(\$item)) {
                \$values[] = \$this->preparePart(\$key, \$item);
            }
        });

        return \$values;
    }

    private function preparePart(\$name, \$value): TextPart
    {
        if (\\is_string(\$value)) {
            return \$this->configurePart(\$name, new TextPart(\$value, 'utf-8', 'plain', '8bit'));
        }

        return \$this->configurePart(\$name, \$value);
    }

    private function configurePart(string \$name, TextPart \$part): TextPart
    {
        static \$r;

        if (null === \$r) {
            \$r = new \\ReflectionProperty(TextPart::class, 'encoding');
            \$r->setAccessible(true);
        }

        \$part->setDisposition('form-data');
        \$part->setName(\$name);
        // HTTP does not support \\r\\n in header values
        \$part->getHeaders()->setMaxLineLength(PHP_INT_MAX);
        \$r->setValue(\$part, '8bit');

        return \$part;
    }
}
", "vendor/symfony/mime/Part/Multipart/FormDataPart.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Part/Multipart/FormDataPart.php");
    }
}
