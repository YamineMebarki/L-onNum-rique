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

/* vendor/symfony/translation/Catalogue/AbstractOperation.php */
class __TwigTemplate_5531edbb0bfd1d5c5ea60cf88a91794118158016c4332b4d2dc731d64549347d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Catalogue/AbstractOperation.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Catalogue/AbstractOperation.php"));

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

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\Exception\\LogicException;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Symfony\\Component\\Translation\\MessageCatalogueInterface;

/**
 * Base catalogues binary operation class.
 *
 * A catalogue binary operation performs operation on
 * source (the left argument) and target (the right argument) catalogues.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
abstract class AbstractOperation implements OperationInterface
{
    protected \$source;
    protected \$target;
    protected \$result;

    /**
     * @var array|null The domains affected by this operation
     */
    private \$domains;

    /**
     * This array stores 'all', 'new' and 'obsolete' messages for all valid domains.
     *
     * The data structure of this array is as follows:
     *
     *     [
     *         'domain 1' => [
     *             'all' => [...],
     *             'new' => [...],
     *             'obsolete' => [...]
     *         ],
     *         'domain 2' => [
     *             'all' => [...],
     *             'new' => [...],
     *             'obsolete' => [...]
     *         ],
     *         ...
     *     ]
     *
     * @var array The array that stores 'all', 'new' and 'obsolete' messages
     */
    protected \$messages;

    /**
     * @throws LogicException
     */
    public function __construct(MessageCatalogueInterface \$source, MessageCatalogueInterface \$target)
    {
        if (\$source->getLocale() !== \$target->getLocale()) {
            throw new LogicException('Operated catalogues must belong to the same locale.');
        }

        \$this->source = \$source;
        \$this->target = \$target;
        \$this->result = new MessageCatalogue(\$source->getLocale());
        \$this->messages = [];
    }

    /**
     * {@inheritdoc}
     */
    public function getDomains()
    {
        if (null === \$this->domains) {
            \$this->domains = array_values(array_unique(array_merge(\$this->source->getDomains(), \$this->target->getDomains())));
        }

        return \$this->domains;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessages(\$domain)
    {
        if (!\\in_array(\$domain, \$this->getDomains())) {
            throw new InvalidArgumentException(sprintf('Invalid domain: %s.', \$domain));
        }

        if (!isset(\$this->messages[\$domain]['all'])) {
            \$this->processDomain(\$domain);
        }

        return \$this->messages[\$domain]['all'];
    }

    /**
     * {@inheritdoc}
     */
    public function getNewMessages(\$domain)
    {
        if (!\\in_array(\$domain, \$this->getDomains())) {
            throw new InvalidArgumentException(sprintf('Invalid domain: %s.', \$domain));
        }

        if (!isset(\$this->messages[\$domain]['new'])) {
            \$this->processDomain(\$domain);
        }

        return \$this->messages[\$domain]['new'];
    }

    /**
     * {@inheritdoc}
     */
    public function getObsoleteMessages(\$domain)
    {
        if (!\\in_array(\$domain, \$this->getDomains())) {
            throw new InvalidArgumentException(sprintf('Invalid domain: %s.', \$domain));
        }

        if (!isset(\$this->messages[\$domain]['obsolete'])) {
            \$this->processDomain(\$domain);
        }

        return \$this->messages[\$domain]['obsolete'];
    }

    /**
     * {@inheritdoc}
     */
    public function getResult()
    {
        foreach (\$this->getDomains() as \$domain) {
            if (!isset(\$this->messages[\$domain])) {
                \$this->processDomain(\$domain);
            }
        }

        return \$this->result;
    }

    /**
     * Performs operation on source and target catalogues for the given domain and
     * stores the results.
     *
     * @param string \$domain The domain which the operation will be performed for
     */
    abstract protected function processDomain(\$domain);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Catalogue/AbstractOperation.php";
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

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\Exception\\LogicException;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Symfony\\Component\\Translation\\MessageCatalogueInterface;

/**
 * Base catalogues binary operation class.
 *
 * A catalogue binary operation performs operation on
 * source (the left argument) and target (the right argument) catalogues.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
abstract class AbstractOperation implements OperationInterface
{
    protected \$source;
    protected \$target;
    protected \$result;

    /**
     * @var array|null The domains affected by this operation
     */
    private \$domains;

    /**
     * This array stores 'all', 'new' and 'obsolete' messages for all valid domains.
     *
     * The data structure of this array is as follows:
     *
     *     [
     *         'domain 1' => [
     *             'all' => [...],
     *             'new' => [...],
     *             'obsolete' => [...]
     *         ],
     *         'domain 2' => [
     *             'all' => [...],
     *             'new' => [...],
     *             'obsolete' => [...]
     *         ],
     *         ...
     *     ]
     *
     * @var array The array that stores 'all', 'new' and 'obsolete' messages
     */
    protected \$messages;

    /**
     * @throws LogicException
     */
    public function __construct(MessageCatalogueInterface \$source, MessageCatalogueInterface \$target)
    {
        if (\$source->getLocale() !== \$target->getLocale()) {
            throw new LogicException('Operated catalogues must belong to the same locale.');
        }

        \$this->source = \$source;
        \$this->target = \$target;
        \$this->result = new MessageCatalogue(\$source->getLocale());
        \$this->messages = [];
    }

    /**
     * {@inheritdoc}
     */
    public function getDomains()
    {
        if (null === \$this->domains) {
            \$this->domains = array_values(array_unique(array_merge(\$this->source->getDomains(), \$this->target->getDomains())));
        }

        return \$this->domains;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessages(\$domain)
    {
        if (!\\in_array(\$domain, \$this->getDomains())) {
            throw new InvalidArgumentException(sprintf('Invalid domain: %s.', \$domain));
        }

        if (!isset(\$this->messages[\$domain]['all'])) {
            \$this->processDomain(\$domain);
        }

        return \$this->messages[\$domain]['all'];
    }

    /**
     * {@inheritdoc}
     */
    public function getNewMessages(\$domain)
    {
        if (!\\in_array(\$domain, \$this->getDomains())) {
            throw new InvalidArgumentException(sprintf('Invalid domain: %s.', \$domain));
        }

        if (!isset(\$this->messages[\$domain]['new'])) {
            \$this->processDomain(\$domain);
        }

        return \$this->messages[\$domain]['new'];
    }

    /**
     * {@inheritdoc}
     */
    public function getObsoleteMessages(\$domain)
    {
        if (!\\in_array(\$domain, \$this->getDomains())) {
            throw new InvalidArgumentException(sprintf('Invalid domain: %s.', \$domain));
        }

        if (!isset(\$this->messages[\$domain]['obsolete'])) {
            \$this->processDomain(\$domain);
        }

        return \$this->messages[\$domain]['obsolete'];
    }

    /**
     * {@inheritdoc}
     */
    public function getResult()
    {
        foreach (\$this->getDomains() as \$domain) {
            if (!isset(\$this->messages[\$domain])) {
                \$this->processDomain(\$domain);
            }
        }

        return \$this->result;
    }

    /**
     * Performs operation on source and target catalogues for the given domain and
     * stores the results.
     *
     * @param string \$domain The domain which the operation will be performed for
     */
    abstract protected function processDomain(\$domain);
}
", "vendor/symfony/translation/Catalogue/AbstractOperation.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Catalogue/AbstractOperation.php");
    }
}
