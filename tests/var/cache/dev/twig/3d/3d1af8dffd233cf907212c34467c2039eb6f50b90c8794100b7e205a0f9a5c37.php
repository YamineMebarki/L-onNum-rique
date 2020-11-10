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

/* vendor/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php */
class __TwigTemplate_2ef86852df18c8459ae8bbd892d1e63ccc0f1034eac14bc907d1e24c03c4749e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Formatter;

use Elastica\\Document;

/**
 * Format a log message into an Elastica Document
 *
 * @author Jelle Vink <jelle.vink@gmail.com>
 */
class ElasticaFormatter extends NormalizerFormatter
{
    /**
     * @var string Elastic search index name
     */
    protected \$index;

    /**
     * @var string Elastic search document type
     */
    protected \$type;

    /**
     * @param string \$index Elastic Search index name
     * @param string \$type  Elastic Search document type
     */
    public function __construct(\$index, \$type)
    {
        // elasticsearch requires a ISO 8601 format date with optional millisecond precision.
        parent::__construct('Y-m-d\\TH:i:s.uP');

        \$this->index = \$index;
        \$this->type = \$type;
    }

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        \$record = parent::format(\$record);

        return \$this->getDocument(\$record);
    }

    /**
     * Getter index
     * @return string
     */
    public function getIndex()
    {
        return \$this->index;
    }

    /**
     * Getter type
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Convert a log message into an Elastica Document
     *
     * @param  array    \$record Log message
     * @return Document
     */
    protected function getDocument(\$record)
    {
        \$document = new Document();
        \$document->setData(\$record);
        \$document->setType(\$this->type);
        \$document->setIndex(\$this->index);

        return \$document;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Formatter;

use Elastica\\Document;

/**
 * Format a log message into an Elastica Document
 *
 * @author Jelle Vink <jelle.vink@gmail.com>
 */
class ElasticaFormatter extends NormalizerFormatter
{
    /**
     * @var string Elastic search index name
     */
    protected \$index;

    /**
     * @var string Elastic search document type
     */
    protected \$type;

    /**
     * @param string \$index Elastic Search index name
     * @param string \$type  Elastic Search document type
     */
    public function __construct(\$index, \$type)
    {
        // elasticsearch requires a ISO 8601 format date with optional millisecond precision.
        parent::__construct('Y-m-d\\TH:i:s.uP');

        \$this->index = \$index;
        \$this->type = \$type;
    }

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        \$record = parent::format(\$record);

        return \$this->getDocument(\$record);
    }

    /**
     * Getter index
     * @return string
     */
    public function getIndex()
    {
        return \$this->index;
    }

    /**
     * Getter type
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Convert a log message into an Elastica Document
     *
     * @param  array    \$record Log message
     * @return Document
     */
    protected function getDocument(\$record)
    {
        \$document = new Document();
        \$document->setData(\$record);
        \$document->setType(\$this->type);
        \$document->setIndex(\$this->index);

        return \$document;
    }
}
", "vendor/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php");
    }
}
