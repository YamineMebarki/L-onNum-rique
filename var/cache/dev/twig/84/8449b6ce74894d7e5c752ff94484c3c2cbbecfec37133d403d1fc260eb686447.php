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

/* vendor/symfony/http-kernel/HttpCache/Esi.php */
class __TwigTemplate_e5959e342502b44fc5c35c866d7dafc8c0a9cb5a6de2d51feab603eb7cf2ffd0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/HttpCache/Esi.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/HttpCache/Esi.php"));

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

namespace Symfony\\Component\\HttpKernel\\HttpCache;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Esi implements the ESI capabilities to Request and Response instances.
 *
 * For more information, read the following W3C notes:
 *
 *  * ESI Language Specification 1.0 (http://www.w3.org/TR/esi-lang)
 *
 *  * Edge Architecture Specification (http://www.w3.org/TR/edge-arch)
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Esi extends AbstractSurrogate
{
    public function getName()
    {
        return 'esi';
    }

    /**
     * {@inheritdoc}
     */
    public function addSurrogateControl(Response \$response)
    {
        if (false !== strpos(\$response->getContent(), '<esi:include')) {
            \$response->headers->set('Surrogate-Control', 'content=\"ESI/1.0\"');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renderIncludeTag(\$uri, \$alt = null, \$ignoreErrors = true, \$comment = '')
    {
        \$html = sprintf('<esi:include src=\"%s\"%s%s />',
            \$uri,
            \$ignoreErrors ? ' onerror=\"continue\"' : '',
            \$alt ? sprintf(' alt=\"%s\"', \$alt) : ''
        );

        if (!empty(\$comment)) {
            return sprintf(\"<esi:comment text=\\\"%s\\\" />\\n%s\", \$comment, \$html);
        }

        return \$html;
    }

    /**
     * {@inheritdoc}
     */
    public function process(Request \$request, Response \$response)
    {
        \$type = \$response->headers->get('Content-Type');
        if (empty(\$type)) {
            \$type = 'text/html';
        }

        \$parts = explode(';', \$type);
        if (!\\in_array(\$parts[0], \$this->contentTypes)) {
            return \$response;
        }

        // we don't use a proper XML parser here as we can have ESI tags in a plain text response
        \$content = \$response->getContent();
        \$content = preg_replace('#<esi\\:remove>.*?</esi\\:remove>#s', '', \$content);
        \$content = preg_replace('#<esi\\:comment[^>]+>#s', '', \$content);

        \$chunks = preg_split('#<esi\\:include\\s+(.*?)\\s*(?:/|</esi\\:include)>#', \$content, -1, PREG_SPLIT_DELIM_CAPTURE);
        \$chunks[0] = str_replace(\$this->phpEscapeMap[0], \$this->phpEscapeMap[1], \$chunks[0]);

        \$i = 1;
        while (isset(\$chunks[\$i])) {
            \$options = [];
            preg_match_all('/(src|onerror|alt)=\"([^\"]*?)\"/', \$chunks[\$i], \$matches, PREG_SET_ORDER);
            foreach (\$matches as \$set) {
                \$options[\$set[1]] = \$set[2];
            }

            if (!isset(\$options['src'])) {
                throw new \\RuntimeException('Unable to process an ESI tag without a \"src\" attribute.');
            }

            \$chunks[\$i] = sprintf('<?php echo \$this->surrogate->handle(\$this, %s, %s, %s) ?>'.\"\\n\",
                var_export(\$options['src'], true),
                var_export(isset(\$options['alt']) ? \$options['alt'] : '', true),
                isset(\$options['onerror']) && 'continue' === \$options['onerror'] ? 'true' : 'false'
            );
            ++\$i;
            \$chunks[\$i] = str_replace(\$this->phpEscapeMap[0], \$this->phpEscapeMap[1], \$chunks[\$i]);
            ++\$i;
        }
        \$content = implode('', \$chunks);

        \$response->setContent(\$content);
        \$response->headers->set('X-Body-Eval', 'ESI');

        // remove ESI/1.0 from the Surrogate-Control header
        \$this->removeFromControl(\$response);

        return \$response;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/HttpCache/Esi.php";
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

namespace Symfony\\Component\\HttpKernel\\HttpCache;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Esi implements the ESI capabilities to Request and Response instances.
 *
 * For more information, read the following W3C notes:
 *
 *  * ESI Language Specification 1.0 (http://www.w3.org/TR/esi-lang)
 *
 *  * Edge Architecture Specification (http://www.w3.org/TR/edge-arch)
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Esi extends AbstractSurrogate
{
    public function getName()
    {
        return 'esi';
    }

    /**
     * {@inheritdoc}
     */
    public function addSurrogateControl(Response \$response)
    {
        if (false !== strpos(\$response->getContent(), '<esi:include')) {
            \$response->headers->set('Surrogate-Control', 'content=\"ESI/1.0\"');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renderIncludeTag(\$uri, \$alt = null, \$ignoreErrors = true, \$comment = '')
    {
        \$html = sprintf('<esi:include src=\"%s\"%s%s />',
            \$uri,
            \$ignoreErrors ? ' onerror=\"continue\"' : '',
            \$alt ? sprintf(' alt=\"%s\"', \$alt) : ''
        );

        if (!empty(\$comment)) {
            return sprintf(\"<esi:comment text=\\\"%s\\\" />\\n%s\", \$comment, \$html);
        }

        return \$html;
    }

    /**
     * {@inheritdoc}
     */
    public function process(Request \$request, Response \$response)
    {
        \$type = \$response->headers->get('Content-Type');
        if (empty(\$type)) {
            \$type = 'text/html';
        }

        \$parts = explode(';', \$type);
        if (!\\in_array(\$parts[0], \$this->contentTypes)) {
            return \$response;
        }

        // we don't use a proper XML parser here as we can have ESI tags in a plain text response
        \$content = \$response->getContent();
        \$content = preg_replace('#<esi\\:remove>.*?</esi\\:remove>#s', '', \$content);
        \$content = preg_replace('#<esi\\:comment[^>]+>#s', '', \$content);

        \$chunks = preg_split('#<esi\\:include\\s+(.*?)\\s*(?:/|</esi\\:include)>#', \$content, -1, PREG_SPLIT_DELIM_CAPTURE);
        \$chunks[0] = str_replace(\$this->phpEscapeMap[0], \$this->phpEscapeMap[1], \$chunks[0]);

        \$i = 1;
        while (isset(\$chunks[\$i])) {
            \$options = [];
            preg_match_all('/(src|onerror|alt)=\"([^\"]*?)\"/', \$chunks[\$i], \$matches, PREG_SET_ORDER);
            foreach (\$matches as \$set) {
                \$options[\$set[1]] = \$set[2];
            }

            if (!isset(\$options['src'])) {
                throw new \\RuntimeException('Unable to process an ESI tag without a \"src\" attribute.');
            }

            \$chunks[\$i] = sprintf('<?php echo \$this->surrogate->handle(\$this, %s, %s, %s) ?>'.\"\\n\",
                var_export(\$options['src'], true),
                var_export(isset(\$options['alt']) ? \$options['alt'] : '', true),
                isset(\$options['onerror']) && 'continue' === \$options['onerror'] ? 'true' : 'false'
            );
            ++\$i;
            \$chunks[\$i] = str_replace(\$this->phpEscapeMap[0], \$this->phpEscapeMap[1], \$chunks[\$i]);
            ++\$i;
        }
        \$content = implode('', \$chunks);

        \$response->setContent(\$content);
        \$response->headers->set('X-Body-Eval', 'ESI');

        // remove ESI/1.0 from the Surrogate-Control header
        \$this->removeFromControl(\$response);

        return \$response;
    }
}
", "vendor/symfony/http-kernel/HttpCache/Esi.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/HttpCache/Esi.php");
    }
}
