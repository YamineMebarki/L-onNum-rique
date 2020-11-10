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

/* vendor/symfony/twig-bridge/Mime/BodyRenderer.php */
class __TwigTemplate_c4a671c57d57974d28d507d8ffdbbf3d6a1dc12562e028bfdc310dd688ab8a78 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Mime/BodyRenderer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Mime/BodyRenderer.php"));

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

use League\\HTMLToMarkdown\\HtmlConverter;
use Symfony\\Component\\Mime\\BodyRendererInterface;
use Symfony\\Component\\Mime\\Message;
use Twig\\Environment;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class BodyRenderer implements BodyRendererInterface
{
    private \$twig;
    private \$context;
    private \$converter;

    public function __construct(Environment \$twig, array \$context = [])
    {
        \$this->twig = \$twig;
        \$this->context = \$context;
        if (class_exists(HtmlConverter::class)) {
            \$this->converter = new HtmlConverter([
                'hard_break' => true,
                'strip_tags' => true,
                'remove_nodes' => 'head style',
            ]);
        }
    }

    public function render(Message \$message): void
    {
        if (!\$message instanceof TemplatedEmail) {
            return;
        }

        \$vars = array_merge(\$this->context, \$message->getContext(), [
            'email' => new WrappedTemplatedEmail(\$this->twig, \$message),
        ]);

        if (\$template = \$message->getTextTemplate()) {
            \$message->text(\$this->twig->render(\$template, \$vars));
        }

        if (\$template = \$message->getHtmlTemplate()) {
            \$message->html(\$this->twig->render(\$template, \$vars));
        }

        // if text body is empty, compute one from the HTML body
        if (!\$message->getTextBody() && null !== \$html = \$message->getHtmlBody()) {
            \$message->text(\$this->convertHtmlToText(\\is_resource(\$html) ? stream_get_contents(\$html) : \$html));
        }
    }

    private function convertHtmlToText(string \$html): string
    {
        if (null !== \$this->converter) {
            return \$this->converter->convert(\$html);
        }

        return strip_tags(\$html);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Mime/BodyRenderer.php";
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

use League\\HTMLToMarkdown\\HtmlConverter;
use Symfony\\Component\\Mime\\BodyRendererInterface;
use Symfony\\Component\\Mime\\Message;
use Twig\\Environment;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class BodyRenderer implements BodyRendererInterface
{
    private \$twig;
    private \$context;
    private \$converter;

    public function __construct(Environment \$twig, array \$context = [])
    {
        \$this->twig = \$twig;
        \$this->context = \$context;
        if (class_exists(HtmlConverter::class)) {
            \$this->converter = new HtmlConverter([
                'hard_break' => true,
                'strip_tags' => true,
                'remove_nodes' => 'head style',
            ]);
        }
    }

    public function render(Message \$message): void
    {
        if (!\$message instanceof TemplatedEmail) {
            return;
        }

        \$vars = array_merge(\$this->context, \$message->getContext(), [
            'email' => new WrappedTemplatedEmail(\$this->twig, \$message),
        ]);

        if (\$template = \$message->getTextTemplate()) {
            \$message->text(\$this->twig->render(\$template, \$vars));
        }

        if (\$template = \$message->getHtmlTemplate()) {
            \$message->html(\$this->twig->render(\$template, \$vars));
        }

        // if text body is empty, compute one from the HTML body
        if (!\$message->getTextBody() && null !== \$html = \$message->getHtmlBody()) {
            \$message->text(\$this->convertHtmlToText(\\is_resource(\$html) ? stream_get_contents(\$html) : \$html));
        }
    }

    private function convertHtmlToText(string \$html): string
    {
        if (null !== \$this->converter) {
            return \$this->converter->convert(\$html);
        }

        return strip_tags(\$html);
    }
}
", "vendor/symfony/twig-bridge/Mime/BodyRenderer.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Mime/BodyRenderer.php");
    }
}
