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

/* vendor/symfony/translation/Catalogue/TargetOperation.php */
class __TwigTemplate_1948e300acb6e996d55dc5934748d23d29e9e531a6306cf35003124a7adab3cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Catalogue/TargetOperation.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Catalogue/TargetOperation.php"));

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
 * Target operation between two catalogues:
 * intersection = source ∩ target = {x: x ∈ source ∧ x ∈ target}
 * all = intersection ∪ (target ∖ intersection) = target
 * new = all ∖ source = {x: x ∈ target ∧ x ∉ source}
 * obsolete = source ∖ all = source ∖ target = {x: x ∈ source ∧ x ∉ target}
 * Basically, the result contains messages from the target catalogue.
 *
 * @author Michael Lee <michael.lee@zerustech.com>
 */
class TargetOperation extends AbstractOperation
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

        // For 'all' messages, the code can't be simplified as ``\$this->messages[\$domain]['all'] = \$target->all(\$domain);``,
        // because doing so will drop messages like {x: x ∈ source ∧ x ∉ target.all ∧ x ∈ target.fallback}
        //
        // For 'new' messages, the code can't be simplified as ``array_diff_assoc(\$this->target->all(\$domain), \$this->source->all(\$domain));``
        // because doing so will not exclude messages like {x: x ∈ target ∧ x ∉ source.all ∧ x ∈ source.fallback}
        //
        // For 'obsolete' messages, the code can't be simplified as ``array_diff_assoc(\$this->source->all(\$domain), \$this->target->all(\$domain))``
        // because doing so will not exclude messages like {x: x ∈ source ∧ x ∉ target.all ∧ x ∈ target.fallback}

        foreach (\$this->source->all(\$domain) as \$id => \$message) {
            if (\$this->target->has(\$id, \$domain)) {
                \$this->messages[\$domain]['all'][\$id] = \$message;
                \$this->result->add([\$id => \$message], \$this->target->defines(\$id, \$intlDomain) ? \$intlDomain : \$domain);
                if (null !== \$keyMetadata = \$this->source->getMetadata(\$id, \$domain)) {
                    \$this->result->setMetadata(\$id, \$keyMetadata, \$domain);
                }
            } else {
                \$this->messages[\$domain]['obsolete'][\$id] = \$message;
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
        return "vendor/symfony/translation/Catalogue/TargetOperation.php";
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
 * Target operation between two catalogues:
 * intersection = source ∩ target = {x: x ∈ source ∧ x ∈ target}
 * all = intersection ∪ (target ∖ intersection) = target
 * new = all ∖ source = {x: x ∈ target ∧ x ∉ source}
 * obsolete = source ∖ all = source ∖ target = {x: x ∈ source ∧ x ∉ target}
 * Basically, the result contains messages from the target catalogue.
 *
 * @author Michael Lee <michael.lee@zerustech.com>
 */
class TargetOperation extends AbstractOperation
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

        // For 'all' messages, the code can't be simplified as ``\$this->messages[\$domain]['all'] = \$target->all(\$domain);``,
        // because doing so will drop messages like {x: x ∈ source ∧ x ∉ target.all ∧ x ∈ target.fallback}
        //
        // For 'new' messages, the code can't be simplified as ``array_diff_assoc(\$this->target->all(\$domain), \$this->source->all(\$domain));``
        // because doing so will not exclude messages like {x: x ∈ target ∧ x ∉ source.all ∧ x ∈ source.fallback}
        //
        // For 'obsolete' messages, the code can't be simplified as ``array_diff_assoc(\$this->source->all(\$domain), \$this->target->all(\$domain))``
        // because doing so will not exclude messages like {x: x ∈ source ∧ x ∉ target.all ∧ x ∈ target.fallback}

        foreach (\$this->source->all(\$domain) as \$id => \$message) {
            if (\$this->target->has(\$id, \$domain)) {
                \$this->messages[\$domain]['all'][\$id] = \$message;
                \$this->result->add([\$id => \$message], \$this->target->defines(\$id, \$intlDomain) ? \$intlDomain : \$domain);
                if (null !== \$keyMetadata = \$this->source->getMetadata(\$id, \$domain)) {
                    \$this->result->setMetadata(\$id, \$keyMetadata, \$domain);
                }
            } else {
                \$this->messages[\$domain]['obsolete'][\$id] = \$message;
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
", "vendor/symfony/translation/Catalogue/TargetOperation.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Catalogue/TargetOperation.php");
    }
}
