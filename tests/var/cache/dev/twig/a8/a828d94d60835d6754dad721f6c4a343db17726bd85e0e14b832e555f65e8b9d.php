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

/* vendor/symfony/mime/MessageConverter.php */
class __TwigTemplate_37b4c153dec4a70f47eb4fa04f51cf4a18a859abed2f400d9d592218ca2da41b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/MessageConverter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/MessageConverter.php"));

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

namespace Symfony\\Component\\Mime;

use Symfony\\Component\\Mime\\Exception\\RuntimeException;
use Symfony\\Component\\Mime\\Part\\DataPart;
use Symfony\\Component\\Mime\\Part\\Multipart\\AlternativePart;
use Symfony\\Component\\Mime\\Part\\Multipart\\MixedPart;
use Symfony\\Component\\Mime\\Part\\Multipart\\RelatedPart;
use Symfony\\Component\\Mime\\Part\\TextPart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class MessageConverter
{
    /**
     * @throws RuntimeException when unable to convert the message to an email
     */
    public static function toEmail(Message \$message): Email
    {
        if (\$message instanceof Email) {
            return \$message;
        }

        // try to convert to a \"simple\" Email instance
        \$body = \$message->getBody();
        if (\$body instanceof TextPart) {
            return self::createEmailFromTextPart(\$message, \$body);
        }

        if (\$body instanceof AlternativePart) {
            return self::createEmailFromAlternativePart(\$message, \$body);
        }

        if (\$body instanceof RelatedPart) {
            return self::createEmailFromRelatedPart(\$message, \$body);
        }

        if (\$body instanceof MixedPart) {
            \$parts = \$body->getParts();
            if (\$parts[0] instanceof RelatedPart) {
                \$email = self::createEmailFromRelatedPart(\$message, \$parts[0]);
            } elseif (\$parts[0] instanceof AlternativePart) {
                \$email = self::createEmailFromAlternativePart(\$message, \$parts[0]);
            } elseif (\$parts[0] instanceof TextPart) {
                \$email = self::createEmailFromTextPart(\$message, \$parts[0]);
            } else {
                throw new RuntimeException(sprintf('Unable to create an Email from an instance of \"%s\" as the body is too complex.', \\get_class(\$message)));
            }

            return self::attachParts(\$email, \\array_slice(\$parts, 1));
        }

        throw new RuntimeException(sprintf('Unable to create an Email from an instance of \"%s\" as the body is too complex.', \\get_class(\$message)));
    }

    private static function createEmailFromTextPart(Message \$message, TextPart \$part): Email
    {
        if ('text' === \$part->getMediaType() && 'plain' === \$part->getMediaSubtype()) {
            return (new Email(clone \$message->getHeaders()))->text(\$part->getBody(), \$part->getPreparedHeaders()->getHeaderParameter('Content-Type', 'charset') ?: 'utf-8');
        }
        if ('text' === \$part->getMediaType() && 'html' === \$part->getMediaSubtype()) {
            return (new Email(clone \$message->getHeaders()))->html(\$part->getBody(), \$part->getPreparedHeaders()->getHeaderParameter('Content-Type', 'charset') ?: 'utf-8');
        }

        throw new RuntimeException(sprintf('Unable to create an Email from an instance of \"%s\" as the body is too complex.', \\get_class(\$message)));
    }

    private static function createEmailFromAlternativePart(Message \$message, AlternativePart \$part): Email
    {
        \$parts = \$part->getParts();
        if (
            2 === \\count(\$parts) &&
            \$parts[0] instanceof TextPart && 'text' === \$parts[0]->getMediaType() && 'plain' === \$parts[0]->getMediaSubtype() &&
            \$parts[1] instanceof TextPart && 'text' === \$parts[1]->getMediaType() && 'html' === \$parts[1]->getMediaSubtype()
         ) {
            return (new Email(clone \$message->getHeaders()))
                ->text(\$parts[0]->getBody(), \$parts[0]->getPreparedHeaders()->getHeaderParameter('Content-Type', 'charset') ?: 'utf-8')
                ->html(\$parts[1]->getBody(), \$parts[1]->getPreparedHeaders()->getHeaderParameter('Content-Type', 'charset') ?: 'utf-8')
            ;
        }

        throw new RuntimeException(sprintf('Unable to create an Email from an instance of \"%s\" as the body is too complex.', \\get_class(\$message)));
    }

    private static function createEmailFromRelatedPart(Message \$message, RelatedPart \$part): Email
    {
        \$parts = \$part->getParts();
        if (\$parts[0] instanceof AlternativePart) {
            \$email = self::createEmailFromAlternativePart(\$message, \$parts[0]);
        } elseif (\$parts[0] instanceof TextPart) {
            \$email = self::createEmailFromTextPart(\$message, \$parts[0]);
        } else {
            throw new RuntimeException(sprintf('Unable to create an Email from an instance of \"%s\" as the body is too complex.', \\get_class(\$message)));
        }

        return self::attachParts(\$email, \\array_slice(\$parts, 1));
    }

    private static function attachParts(Email \$email, array \$parts): Email
    {
        foreach (\$parts as \$part) {
            if (!\$part instanceof DataPart) {
                throw new RuntimeException(sprintf('Unable to create an Email from an instance of \"%s\" as the body is too complex.', \\get_class(\$email)));
            }

            \$headers = \$part->getPreparedHeaders();
            \$method = 'inline' === \$headers->getHeaderBody('Content-Disposition') ? 'embed' : 'attach';
            \$name = \$headers->getHeaderParameter('Content-Disposition', 'filename');
            \$email->\$method(\$part->getBody(), \$name, \$part->getMediaType().'/'.\$part->getMediaSubtype());
        }

        return \$email;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/MessageConverter.php";
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

namespace Symfony\\Component\\Mime;

use Symfony\\Component\\Mime\\Exception\\RuntimeException;
use Symfony\\Component\\Mime\\Part\\DataPart;
use Symfony\\Component\\Mime\\Part\\Multipart\\AlternativePart;
use Symfony\\Component\\Mime\\Part\\Multipart\\MixedPart;
use Symfony\\Component\\Mime\\Part\\Multipart\\RelatedPart;
use Symfony\\Component\\Mime\\Part\\TextPart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class MessageConverter
{
    /**
     * @throws RuntimeException when unable to convert the message to an email
     */
    public static function toEmail(Message \$message): Email
    {
        if (\$message instanceof Email) {
            return \$message;
        }

        // try to convert to a \"simple\" Email instance
        \$body = \$message->getBody();
        if (\$body instanceof TextPart) {
            return self::createEmailFromTextPart(\$message, \$body);
        }

        if (\$body instanceof AlternativePart) {
            return self::createEmailFromAlternativePart(\$message, \$body);
        }

        if (\$body instanceof RelatedPart) {
            return self::createEmailFromRelatedPart(\$message, \$body);
        }

        if (\$body instanceof MixedPart) {
            \$parts = \$body->getParts();
            if (\$parts[0] instanceof RelatedPart) {
                \$email = self::createEmailFromRelatedPart(\$message, \$parts[0]);
            } elseif (\$parts[0] instanceof AlternativePart) {
                \$email = self::createEmailFromAlternativePart(\$message, \$parts[0]);
            } elseif (\$parts[0] instanceof TextPart) {
                \$email = self::createEmailFromTextPart(\$message, \$parts[0]);
            } else {
                throw new RuntimeException(sprintf('Unable to create an Email from an instance of \"%s\" as the body is too complex.', \\get_class(\$message)));
            }

            return self::attachParts(\$email, \\array_slice(\$parts, 1));
        }

        throw new RuntimeException(sprintf('Unable to create an Email from an instance of \"%s\" as the body is too complex.', \\get_class(\$message)));
    }

    private static function createEmailFromTextPart(Message \$message, TextPart \$part): Email
    {
        if ('text' === \$part->getMediaType() && 'plain' === \$part->getMediaSubtype()) {
            return (new Email(clone \$message->getHeaders()))->text(\$part->getBody(), \$part->getPreparedHeaders()->getHeaderParameter('Content-Type', 'charset') ?: 'utf-8');
        }
        if ('text' === \$part->getMediaType() && 'html' === \$part->getMediaSubtype()) {
            return (new Email(clone \$message->getHeaders()))->html(\$part->getBody(), \$part->getPreparedHeaders()->getHeaderParameter('Content-Type', 'charset') ?: 'utf-8');
        }

        throw new RuntimeException(sprintf('Unable to create an Email from an instance of \"%s\" as the body is too complex.', \\get_class(\$message)));
    }

    private static function createEmailFromAlternativePart(Message \$message, AlternativePart \$part): Email
    {
        \$parts = \$part->getParts();
        if (
            2 === \\count(\$parts) &&
            \$parts[0] instanceof TextPart && 'text' === \$parts[0]->getMediaType() && 'plain' === \$parts[0]->getMediaSubtype() &&
            \$parts[1] instanceof TextPart && 'text' === \$parts[1]->getMediaType() && 'html' === \$parts[1]->getMediaSubtype()
         ) {
            return (new Email(clone \$message->getHeaders()))
                ->text(\$parts[0]->getBody(), \$parts[0]->getPreparedHeaders()->getHeaderParameter('Content-Type', 'charset') ?: 'utf-8')
                ->html(\$parts[1]->getBody(), \$parts[1]->getPreparedHeaders()->getHeaderParameter('Content-Type', 'charset') ?: 'utf-8')
            ;
        }

        throw new RuntimeException(sprintf('Unable to create an Email from an instance of \"%s\" as the body is too complex.', \\get_class(\$message)));
    }

    private static function createEmailFromRelatedPart(Message \$message, RelatedPart \$part): Email
    {
        \$parts = \$part->getParts();
        if (\$parts[0] instanceof AlternativePart) {
            \$email = self::createEmailFromAlternativePart(\$message, \$parts[0]);
        } elseif (\$parts[0] instanceof TextPart) {
            \$email = self::createEmailFromTextPart(\$message, \$parts[0]);
        } else {
            throw new RuntimeException(sprintf('Unable to create an Email from an instance of \"%s\" as the body is too complex.', \\get_class(\$message)));
        }

        return self::attachParts(\$email, \\array_slice(\$parts, 1));
    }

    private static function attachParts(Email \$email, array \$parts): Email
    {
        foreach (\$parts as \$part) {
            if (!\$part instanceof DataPart) {
                throw new RuntimeException(sprintf('Unable to create an Email from an instance of \"%s\" as the body is too complex.', \\get_class(\$email)));
            }

            \$headers = \$part->getPreparedHeaders();
            \$method = 'inline' === \$headers->getHeaderBody('Content-Disposition') ? 'embed' : 'attach';
            \$name = \$headers->getHeaderParameter('Content-Disposition', 'filename');
            \$email->\$method(\$part->getBody(), \$name, \$part->getMediaType().'/'.\$part->getMediaSubtype());
        }

        return \$email;
    }
}
", "vendor/symfony/mime/MessageConverter.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/MessageConverter.php");
    }
}
