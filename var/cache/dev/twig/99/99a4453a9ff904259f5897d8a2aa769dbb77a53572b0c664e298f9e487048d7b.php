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

/* vendor/symfony/form/Console/Helper/DescriptorHelper.php */
class __TwigTemplate_373be67db40247dae0a8a8dd6456c770ae2b4e67ac04cca3b2e4781401e05c5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Console/Helper/DescriptorHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Console/Helper/DescriptorHelper.php"));

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

namespace Symfony\\Component\\Form\\Console\\Helper;

use Symfony\\Component\\Console\\Helper\\DescriptorHelper as BaseDescriptorHelper;
use Symfony\\Component\\Form\\Console\\Descriptor\\JsonDescriptor;
use Symfony\\Component\\Form\\Console\\Descriptor\\TextDescriptor;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @internal
 */
class DescriptorHelper extends BaseDescriptorHelper
{
    public function __construct(FileLinkFormatter \$fileLinkFormatter = null)
    {
        \$this
            ->register('txt', new TextDescriptor(\$fileLinkFormatter))
            ->register('json', new JsonDescriptor())
        ;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Console/Helper/DescriptorHelper.php";
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

namespace Symfony\\Component\\Form\\Console\\Helper;

use Symfony\\Component\\Console\\Helper\\DescriptorHelper as BaseDescriptorHelper;
use Symfony\\Component\\Form\\Console\\Descriptor\\JsonDescriptor;
use Symfony\\Component\\Form\\Console\\Descriptor\\TextDescriptor;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @internal
 */
class DescriptorHelper extends BaseDescriptorHelper
{
    public function __construct(FileLinkFormatter \$fileLinkFormatter = null)
    {
        \$this
            ->register('txt', new TextDescriptor(\$fileLinkFormatter))
            ->register('json', new JsonDescriptor())
        ;
    }
}
", "vendor/symfony/form/Console/Helper/DescriptorHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Console/Helper/DescriptorHelper.php");
    }
}
