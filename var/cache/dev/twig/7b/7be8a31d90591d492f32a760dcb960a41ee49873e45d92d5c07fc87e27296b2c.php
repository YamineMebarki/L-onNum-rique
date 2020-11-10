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

/* vendor/symfony/twig-bridge/Mime/TemplatedEmail.php */
class __TwigTemplate_5e7c72e0737add95f9d481a4f951e30c28a1879539571fdfb479ab9320454462 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Mime/TemplatedEmail.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Mime/TemplatedEmail.php"));

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

namespace Symfony\\Bridge\\Twig\\Mime;

use Symfony\\Component\\Mime\\Email;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class TemplatedEmail extends Email
{
    private \$htmlTemplate;
    private \$textTemplate;
    private \$context = [];

    /**
     * @return \$this
     */
    public function textTemplate(?string \$template)
    {
        \$this->textTemplate = \$template;

        return \$this;
    }

    /**
     * @return \$this
     */
    public function htmlTemplate(?string \$template)
    {
        \$this->htmlTemplate = \$template;

        return \$this;
    }

    public function getTextTemplate(): ?string
    {
        return \$this->textTemplate;
    }

    public function getHtmlTemplate(): ?string
    {
        return \$this->htmlTemplate;
    }

    /**
     * @return \$this
     */
    public function context(array \$context)
    {
        \$this->context = \$context;

        return \$this;
    }

    public function getContext(): array
    {
        return \$this->context;
    }

    /**
     * @internal
     */
    public function __serialize(): array
    {
        return [\$this->htmlTemplate, \$this->textTemplate, \$this->context, parent::__serialize()];
    }

    /**
     * @internal
     */
    public function __unserialize(array \$data): void
    {
        [\$this->htmlTemplate, \$this->textTemplate, \$this->context, \$parentData] = \$data;

        parent::__unserialize(\$parentData);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Mime/TemplatedEmail.php";
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

namespace Symfony\\Bridge\\Twig\\Mime;

use Symfony\\Component\\Mime\\Email;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class TemplatedEmail extends Email
{
    private \$htmlTemplate;
    private \$textTemplate;
    private \$context = [];

    /**
     * @return \$this
     */
    public function textTemplate(?string \$template)
    {
        \$this->textTemplate = \$template;

        return \$this;
    }

    /**
     * @return \$this
     */
    public function htmlTemplate(?string \$template)
    {
        \$this->htmlTemplate = \$template;

        return \$this;
    }

    public function getTextTemplate(): ?string
    {
        return \$this->textTemplate;
    }

    public function getHtmlTemplate(): ?string
    {
        return \$this->htmlTemplate;
    }

    /**
     * @return \$this
     */
    public function context(array \$context)
    {
        \$this->context = \$context;

        return \$this;
    }

    public function getContext(): array
    {
        return \$this->context;
    }

    /**
     * @internal
     */
    public function __serialize(): array
    {
        return [\$this->htmlTemplate, \$this->textTemplate, \$this->context, parent::__serialize()];
    }

    /**
     * @internal
     */
    public function __unserialize(array \$data): void
    {
        [\$this->htmlTemplate, \$this->textTemplate, \$this->context, \$parentData] = \$data;

        parent::__unserialize(\$parentData);
    }
}
", "vendor/symfony/twig-bridge/Mime/TemplatedEmail.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Mime/TemplatedEmail.php");
    }
}
