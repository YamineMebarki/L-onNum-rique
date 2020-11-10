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

/* vendor/symfony/mime/Part/AbstractMultipartPart.php */
class __TwigTemplate_c87d76161f24fe19c48ecb0b1b1bd270998b0a79d14bc27fb30a30fa995e1085 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Part/AbstractMultipartPart.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Part/AbstractMultipartPart.php"));

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

namespace Symfony\\Component\\Mime\\Part;

use Symfony\\Component\\Mime\\Header\\Headers;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
abstract class AbstractMultipartPart extends AbstractPart
{
    private \$boundary;
    private \$parts = [];

    public function __construct(AbstractPart ...\$parts)
    {
        parent::__construct();

        foreach (\$parts as \$part) {
            \$this->parts[] = \$part;
        }
    }

    /**
     * @return AbstractPart[]
     */
    public function getParts(): array
    {
        return \$this->parts;
    }

    public function getMediaType(): string
    {
        return 'multipart';
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = parent::getPreparedHeaders();
        \$headers->setHeaderParameter('Content-Type', 'boundary', \$this->getBoundary());

        return \$headers;
    }

    public function bodyToString(): string
    {
        \$parts = \$this->getParts();
        \$string = '';
        foreach (\$parts as \$part) {
            \$string .= '--'.\$this->getBoundary().\"\\r\\n\".\$part->toString().\"\\r\\n\";
        }
        \$string .= '--'.\$this->getBoundary().\"--\\r\\n\";

        return \$string;
    }

    public function bodyToIterable(): iterable
    {
        \$parts = \$this->getParts();
        foreach (\$parts as \$part) {
            yield '--'.\$this->getBoundary().\"\\r\\n\";
            yield from \$part->toIterable();
            yield \"\\r\\n\";
        }
        yield '--'.\$this->getBoundary().\"--\\r\\n\";
    }

    private function getBoundary(): string
    {
        if (null === \$this->boundary) {
            \$this->boundary = '_=_symfony_'.time().'_'.bin2hex(random_bytes(16)).'_=_';
        }

        return \$this->boundary;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Part/AbstractMultipartPart.php";
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

namespace Symfony\\Component\\Mime\\Part;

use Symfony\\Component\\Mime\\Header\\Headers;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
abstract class AbstractMultipartPart extends AbstractPart
{
    private \$boundary;
    private \$parts = [];

    public function __construct(AbstractPart ...\$parts)
    {
        parent::__construct();

        foreach (\$parts as \$part) {
            \$this->parts[] = \$part;
        }
    }

    /**
     * @return AbstractPart[]
     */
    public function getParts(): array
    {
        return \$this->parts;
    }

    public function getMediaType(): string
    {
        return 'multipart';
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = parent::getPreparedHeaders();
        \$headers->setHeaderParameter('Content-Type', 'boundary', \$this->getBoundary());

        return \$headers;
    }

    public function bodyToString(): string
    {
        \$parts = \$this->getParts();
        \$string = '';
        foreach (\$parts as \$part) {
            \$string .= '--'.\$this->getBoundary().\"\\r\\n\".\$part->toString().\"\\r\\n\";
        }
        \$string .= '--'.\$this->getBoundary().\"--\\r\\n\";

        return \$string;
    }

    public function bodyToIterable(): iterable
    {
        \$parts = \$this->getParts();
        foreach (\$parts as \$part) {
            yield '--'.\$this->getBoundary().\"\\r\\n\";
            yield from \$part->toIterable();
            yield \"\\r\\n\";
        }
        yield '--'.\$this->getBoundary().\"--\\r\\n\";
    }

    private function getBoundary(): string
    {
        if (null === \$this->boundary) {
            \$this->boundary = '_=_symfony_'.time().'_'.bin2hex(random_bytes(16)).'_=_';
        }

        return \$this->boundary;
    }
}
", "vendor/symfony/mime/Part/AbstractMultipartPart.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Part/AbstractMultipartPart.php");
    }
}
