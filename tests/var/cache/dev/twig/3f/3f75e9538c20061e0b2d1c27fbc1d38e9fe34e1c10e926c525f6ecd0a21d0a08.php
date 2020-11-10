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

/* vendor/symfony/mime/Part/AbstractPart.php */
class __TwigTemplate_583c937c47507ea12af77eab48bc6aa70c27a4daa6ace50966a4f23c6552661c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Part/AbstractPart.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Part/AbstractPart.php"));

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
abstract class AbstractPart
{
    private \$headers;

    public function __construct()
    {
        \$this->headers = new Headers();
    }

    public function getHeaders(): Headers
    {
        return \$this->headers;
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = clone \$this->headers;
        \$headers->setHeaderBody('Parameterized', 'Content-Type', \$this->getMediaType().'/'.\$this->getMediaSubtype());

        return \$headers;
    }

    public function toString(): string
    {
        return \$this->getPreparedHeaders()->toString().\"\\r\\n\".\$this->bodyToString();
    }

    public function toIterable(): iterable
    {
        yield \$this->getPreparedHeaders()->toString();
        yield \"\\r\\n\";
        yield from \$this->bodyToIterable();
    }

    abstract public function bodyToString(): string;

    abstract public function bodyToIterable(): iterable;

    abstract public function getMediaType(): string;

    abstract public function getMediaSubtype(): string;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Part/AbstractPart.php";
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
abstract class AbstractPart
{
    private \$headers;

    public function __construct()
    {
        \$this->headers = new Headers();
    }

    public function getHeaders(): Headers
    {
        return \$this->headers;
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = clone \$this->headers;
        \$headers->setHeaderBody('Parameterized', 'Content-Type', \$this->getMediaType().'/'.\$this->getMediaSubtype());

        return \$headers;
    }

    public function toString(): string
    {
        return \$this->getPreparedHeaders()->toString().\"\\r\\n\".\$this->bodyToString();
    }

    public function toIterable(): iterable
    {
        yield \$this->getPreparedHeaders()->toString();
        yield \"\\r\\n\";
        yield from \$this->bodyToIterable();
    }

    abstract public function bodyToString(): string;

    abstract public function bodyToIterable(): iterable;

    abstract public function getMediaType(): string;

    abstract public function getMediaSubtype(): string;
}
", "vendor/symfony/mime/Part/AbstractPart.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Part/AbstractPart.php");
    }
}
