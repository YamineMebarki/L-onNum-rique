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

/* vendor/symfony/translation/Catalogue/MergeOperation.php */
class __TwigTemplate_68d0a5fa87f5f6669cee50a26be9d659261bce948c9c4bbd5d1546c54c5d28ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Catalogue/MergeOperation.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Catalogue/MergeOperation.php"));

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

namespace Symfony\\Component\\Translation\\Catalogue;

use Symfony\\Component\\Translation\\MessageCatalogueInterface;

/**
 * Merge operation between two catalogues as follows:
 * all = source ∪ target = {x: x ∈ source ∨ x ∈ target}
 * new = all ∖ source = {x: x ∈ target ∧ x ∉ source}
 * obsolete = source ∖ all = {x: x ∈ source ∧ x ∉ source ∧ x ∉ target} = ∅
 * Basically, the result contains messages from both catalogues.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class MergeOperation extends AbstractOperation
{
    /**
     * {@inheritdoc}
     */
    protected function processDomain(\$domain)
    {
        \$this->messages[\$domain] = [
            'all' => [],
            'new' => [],
            'obsolete' => [],
        ];
        \$intlDomain = \$domain.MessageCatalogueInterface::INTL_DOMAIN_SUFFIX;

        foreach (\$this->source->all(\$domain) as \$id => \$message) {
            \$this->messages[\$domain]['all'][\$id] = \$message;
            \$this->result->add([\$id => \$message], \$this->source->defines(\$id, \$intlDomain) ? \$intlDomain : \$domain);
            if (null !== \$keyMetadata = \$this->source->getMetadata(\$id, \$domain)) {
                \$this->result->setMetadata(\$id, \$keyMetadata, \$domain);
            }
        }

        foreach (\$this->target->all(\$domain) as \$id => \$message) {
            if (!\$this->source->has(\$id, \$domain)) {
                \$this->messages[\$domain]['all'][\$id] = \$message;
                \$this->messages[\$domain]['new'][\$id] = \$message;
                \$this->result->add([\$id => \$message], \$this->target->defines(\$id, \$intlDomain) ? \$intlDomain : \$domain);
                if (null !== \$keyMetadata = \$this->target->getMetadata(\$id, \$domain)) {
                    \$this->result->setMetadata(\$id, \$keyMetadata, \$domain);
                }
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
        return "vendor/symfony/translation/Catalogue/MergeOperation.php";
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

namespace Symfony\\Component\\Translation\\Catalogue;

use Symfony\\Component\\Translation\\MessageCatalogueInterface;

/**
 * Merge operation between two catalogues as follows:
 * all = source ∪ target = {x: x ∈ source ∨ x ∈ target}
 * new = all ∖ source = {x: x ∈ target ∧ x ∉ source}
 * obsolete = source ∖ all = {x: x ∈ source ∧ x ∉ source ∧ x ∉ target} = ∅
 * Basically, the result contains messages from both catalogues.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class MergeOperation extends AbstractOperation
{
    /**
     * {@inheritdoc}
     */
    protected function processDomain(\$domain)
    {
        \$this->messages[\$domain] = [
            'all' => [],
            'new' => [],
            'obsolete' => [],
        ];
        \$intlDomain = \$domain.MessageCatalogueInterface::INTL_DOMAIN_SUFFIX;

        foreach (\$this->source->all(\$domain) as \$id => \$message) {
            \$this->messages[\$domain]['all'][\$id] = \$message;
            \$this->result->add([\$id => \$message], \$this->source->defines(\$id, \$intlDomain) ? \$intlDomain : \$domain);
            if (null !== \$keyMetadata = \$this->source->getMetadata(\$id, \$domain)) {
                \$this->result->setMetadata(\$id, \$keyMetadata, \$domain);
            }
        }

        foreach (\$this->target->all(\$domain) as \$id => \$message) {
            if (!\$this->source->has(\$id, \$domain)) {
                \$this->messages[\$domain]['all'][\$id] = \$message;
                \$this->messages[\$domain]['new'][\$id] = \$message;
                \$this->result->add([\$id => \$message], \$this->target->defines(\$id, \$intlDomain) ? \$intlDomain : \$domain);
                if (null !== \$keyMetadata = \$this->target->getMetadata(\$id, \$domain)) {
                    \$this->result->setMetadata(\$id, \$keyMetadata, \$domain);
                }
            }
        }
    }
}
", "vendor/symfony/translation/Catalogue/MergeOperation.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Catalogue/MergeOperation.php");
    }
}
