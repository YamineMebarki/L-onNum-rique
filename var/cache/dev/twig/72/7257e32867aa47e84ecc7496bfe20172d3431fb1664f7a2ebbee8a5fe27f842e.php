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

/* vendor/symfony/mime/Part/Multipart/RelatedPart.php */
class __TwigTemplate_70a8139b499438bf2b3fce495e2c68664fe2ab78ff169c253c553635db942e91 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Part/Multipart/RelatedPart.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Part/Multipart/RelatedPart.php"));

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

use Symfony\\Component\\Mime\\Part\\AbstractMultipartPart;
use Symfony\\Component\\Mime\\Part\\AbstractPart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class RelatedPart extends AbstractMultipartPart
{
    private \$mainPart;

    public function __construct(AbstractPart \$mainPart, AbstractPart \$part, AbstractPart ...\$parts)
    {
        \$this->mainPart = \$mainPart;
        \$this->prepareParts(\$part, ...\$parts);

        parent::__construct(\$part, ...\$parts);
    }

    public function getParts(): array
    {
        return array_merge([\$this->mainPart], parent::getParts());
    }

    public function getMediaSubtype(): string
    {
        return 'related';
    }

    private function generateContentId(): string
    {
        return bin2hex(random_bytes(16)).'@symfony';
    }

    private function prepareParts(AbstractPart ...\$parts): void
    {
        foreach (\$parts as \$part) {
            if (!\$part->getHeaders()->has('Content-ID')) {
                \$part->getHeaders()->setHeaderBody('Id', 'Content-ID', \$this->generateContentId());
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Part/Multipart/RelatedPart.php";
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

use Symfony\\Component\\Mime\\Part\\AbstractMultipartPart;
use Symfony\\Component\\Mime\\Part\\AbstractPart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class RelatedPart extends AbstractMultipartPart
{
    private \$mainPart;

    public function __construct(AbstractPart \$mainPart, AbstractPart \$part, AbstractPart ...\$parts)
    {
        \$this->mainPart = \$mainPart;
        \$this->prepareParts(\$part, ...\$parts);

        parent::__construct(\$part, ...\$parts);
    }

    public function getParts(): array
    {
        return array_merge([\$this->mainPart], parent::getParts());
    }

    public function getMediaSubtype(): string
    {
        return 'related';
    }

    private function generateContentId(): string
    {
        return bin2hex(random_bytes(16)).'@symfony';
    }

    private function prepareParts(AbstractPart ...\$parts): void
    {
        foreach (\$parts as \$part) {
            if (!\$part->getHeaders()->has('Content-ID')) {
                \$part->getHeaders()->setHeaderBody('Id', 'Content-ID', \$this->generateContentId());
            }
        }
    }
}
", "vendor/symfony/mime/Part/Multipart/RelatedPart.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Part/Multipart/RelatedPart.php");
    }
}
