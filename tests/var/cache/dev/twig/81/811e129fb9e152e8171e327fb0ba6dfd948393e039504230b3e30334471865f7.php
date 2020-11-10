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

/* vendor/zendframework/zend-code/src/Scanner/AnnotationScanner.php */
class __TwigTemplate_b0fa4d346ead377f7fe4a07a118807a4b98f79476188b598e56270dea04f4761 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Scanner/AnnotationScanner.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Scanner/AnnotationScanner.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Scanner;

use Zend\\Code\\Annotation\\AnnotationCollection;
use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\NameInformation;

use function array_pop;
use function current;
use function in_array;
use function is_string;
use function next;
use function preg_match;
use function reset;
use function strlen;
use function strpos;
use function substr;
use function substr_count;

class AnnotationScanner extends AnnotationCollection implements ScannerInterface
{
    /**
     * @var bool
     */
    protected \$isScanned = false;

    /**
     * @var string
     */
    protected \$docComment;

    /**
     * @var NameInformation
     */
    protected \$nameInformation;

    /**
     * @var AnnotationManager
     */
    protected \$annotationManager;

    /**
     * @var array
     */
    protected \$annotations = [];

    /**
     * @param  AnnotationManager \$annotationManager
     * @param  string \$docComment
     * @param  NameInformation \$nameInformation
     * @return AnnotationScanner
     */
    public function __construct(
        AnnotationManager \$annotationManager,
        \$docComment,
        NameInformation \$nameInformation = null
    ) {
        \$this->annotationManager = \$annotationManager;
        \$this->docComment        = \$docComment;
        \$this->nameInformation   = \$nameInformation;
        \$this->scan(\$this->tokenize());
    }

    /**
     * @param NameInformation \$nameInformation
     */
    public function setNameInformation(NameInformation \$nameInformation)
    {
        \$this->nameInformation = \$nameInformation;
    }

    /**
     * @param  array \$tokens
     */
    protected function scan(array \$tokens)
    {
        \$annotations     = [];
        \$annotationIndex = -1;
        \$contentEnd      = false;

        reset(\$tokens);

        SCANNER_TOP:
        \$token = current(\$tokens);

        switch (\$token[0]) {
            case 'ANNOTATION_CLASS':
                \$contentEnd = false;
                \$annotationIndex++;
                \$class                         = substr(\$token[1], 1);
                \$class                         = \$this->nameInformation->resolveName(\$class);
                \$annotations[\$annotationIndex] = [\$class, null];
                goto SCANNER_CONTINUE;
                // goto no break needed

            case 'ANNOTATION_CONTENT_START':
                \$annotations[\$annotationIndex][1] = '';
                // fall-through

            case 'ANNOTATION_CONTENT_END':
            case 'ANNOTATION_CONTENT':
            case 'ANNOTATION_WHITESPACE':
            case 'ANNOTATION_NEWLINE':
                if (! \$contentEnd
                    && isset(\$annotations[\$annotationIndex])
                    && is_string(\$annotations[\$annotationIndex][1])
                ) {
                    \$annotations[\$annotationIndex][1] .= \$token[1];
                }

                if (\$token[0] === 'ANNOTATION_CONTENT_END') {
                    \$contentEnd = true;
                }

                goto SCANNER_CONTINUE;
                // goto no break needed
        }

        SCANNER_CONTINUE:
        if (next(\$tokens) === false) {
            goto SCANNER_END;
        }
        goto SCANNER_TOP;

        SCANNER_END:

        foreach (\$annotations as \$annotation) {
            \$annotation[]     = '@' . \$annotation[0] . \$annotation[1];
            \$annotationObject = \$this->annotationManager->createAnnotation(\$annotation);
            if (\$annotationObject) {
                \$this->append(\$annotationObject);
            }
        }
    }

    /**
     * @return array
     */
    protected function tokenize()
    {
        static \$CONTEXT_DOCBLOCK = 0x01;
        static \$CONTEXT_ASTERISK = 0x02;
        static \$CONTEXT_CLASS = 0x04;
        static \$CONTEXT_CONTENT = 0x08;

        \$context     = 0x00;
        \$stream      = \$this->docComment;
        \$streamIndex = null;
        \$tokens      = [];
        \$tokenIndex  = null;
        \$currentChar = null;
        \$currentWord = null;
        \$currentLine = null;

        \$annotationParentCount = 0;

        \$MACRO_STREAM_ADVANCE_CHAR = function (\$positionsForward = 1) use (
            &\$stream,
            &\$streamIndex,
            &\$currentChar,
            &\$currentWord,
            &\$currentLine
        ) {
            \$positionsForward = \$positionsForward > 0 ? \$positionsForward : 1;
            \$streamIndex      = \$streamIndex === null ? 0 : \$streamIndex + \$positionsForward;
            if (! isset(\$stream[\$streamIndex])) {
                \$currentChar = false;

                return false;
            }
            \$currentChar = \$stream[\$streamIndex];
            \$matches     = [];
            \$currentLine = preg_match('#(.*?)(?:\\n|\\r\\n?)#', \$stream, \$matches, null, \$streamIndex) === 1
                ? \$matches[1]
                : substr(\$stream, \$streamIndex);
            if (\$currentChar === ' ') {
                \$currentWord = preg_match('#( +)#', \$currentLine, \$matches) === 1 ? \$matches[1] : \$currentLine;
            } else {
                \$currentWord = (\$matches = strpos(\$currentLine, ' ')) !== false
                    ? substr(\$currentLine, 0, \$matches)
                    : \$currentLine;
            }

            return \$currentChar;
        };
        \$MACRO_STREAM_ADVANCE_WORD = function () use (&\$currentWord, &\$MACRO_STREAM_ADVANCE_CHAR) {
            return \$MACRO_STREAM_ADVANCE_CHAR(strlen(\$currentWord));
        };
        \$MACRO_STREAM_ADVANCE_LINE = function () use (&\$currentLine, &\$MACRO_STREAM_ADVANCE_CHAR) {
            return \$MACRO_STREAM_ADVANCE_CHAR(strlen(\$currentLine));
        };
        \$MACRO_TOKEN_ADVANCE       = function () use (&\$tokenIndex, &\$tokens) {
            \$tokenIndex          = \$tokenIndex === null ? 0 : \$tokenIndex + 1;
            \$tokens[\$tokenIndex] = ['ANNOTATION_UNKNOWN', ''];
        };
        \$MACRO_TOKEN_SET_TYPE      = function (\$type) use (&\$tokenIndex, &\$tokens) {
            \$tokens[\$tokenIndex][0] = \$type;
        };
        \$MACRO_TOKEN_APPEND_CHAR   = function () use (&\$currentChar, &\$tokens, &\$tokenIndex) {
            \$tokens[\$tokenIndex][1] .= \$currentChar;
        };
        \$MACRO_TOKEN_APPEND_WORD   = function () use (&\$currentWord, &\$tokens, &\$tokenIndex) {
            \$tokens[\$tokenIndex][1] .= \$currentWord;
        };
        \$MACRO_TOKEN_APPEND_LINE   = function () use (&\$currentLine, &\$tokens, &\$tokenIndex) {
            \$tokens[\$tokenIndex][1] .= \$currentLine;
        };
        \$MACRO_HAS_CONTEXT         = function (\$which) use (&\$context) {
            return (\$context & \$which) === \$which;
        };

        \$MACRO_STREAM_ADVANCE_CHAR();
        \$MACRO_TOKEN_ADVANCE();

        TOKENIZER_TOP:

        if (\$context === 0x00 && \$currentChar === '/' && \$currentWord === '/**') {
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_COMMENTSTART');
            \$MACRO_TOKEN_APPEND_WORD();
            \$MACRO_TOKEN_ADVANCE();
            \$context |= \$CONTEXT_DOCBLOCK;
            \$context |= \$CONTEXT_ASTERISK;
            if (\$MACRO_STREAM_ADVANCE_WORD() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$MACRO_HAS_CONTEXT(\$CONTEXT_CLASS)) {
            if (in_array(\$currentChar, [' ', '(', \"\\n\", \"\\r\"])) {
                \$context &= ~\$CONTEXT_CLASS;
                \$MACRO_TOKEN_ADVANCE();
            } else {
                \$MACRO_TOKEN_APPEND_CHAR();
                if (\$MACRO_STREAM_ADVANCE_CHAR() === false) {
                    goto TOKENIZER_END;
                }
                goto TOKENIZER_TOP;
            }
        }

        // Since we don't know what line endings are used in the file, we check for all scenarios. If we find a
        // carriage return (\\r), we check the next character for a line feed (\\n). If so we consume it and act as
        // if the carriage return was a line feed.
        \$lineEnded = \$currentChar === \"\\n\";
        if (\$currentChar === \"\\r\") {
            \$lineEnded = true;

            \$nextChar = \$MACRO_STREAM_ADVANCE_CHAR();
            if (\$nextChar !== \"\\n\") {
                \$streamIndex--;
            }

            \$currentChar = \"\\n\";
        }

        if (\$lineEnded) {
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_NEWLINE');
            \$MACRO_TOKEN_APPEND_CHAR();
            \$MACRO_TOKEN_ADVANCE();
            \$context &= ~\$CONTEXT_ASTERISK;
            \$context &= ~\$CONTEXT_CLASS;
            if (\$MACRO_STREAM_ADVANCE_CHAR() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$currentChar === ' ') {
            \$MACRO_TOKEN_SET_TYPE(
                \$MACRO_HAS_CONTEXT(\$CONTEXT_ASTERISK)
                ? 'ANNOTATION_WHITESPACE'
                : 'ANNOTATION_WHITESPACE_INDENT'
            );
            \$MACRO_TOKEN_APPEND_WORD();
            \$MACRO_TOKEN_ADVANCE();
            if (\$MACRO_STREAM_ADVANCE_WORD() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$MACRO_HAS_CONTEXT(\$CONTEXT_CONTENT) && \$MACRO_HAS_CONTEXT(\$CONTEXT_ASTERISK)) {
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_CONTENT');
            \$annotationParentCount += substr_count(\$currentWord, '(');
            \$annotationParentCount -= substr_count(\$currentWord, ')');

            if (\$annotationParentCount === 0) {
                \$context &= ~\$CONTEXT_CONTENT;
                \$MACRO_TOKEN_SET_TYPE('ANNOTATION_CONTENT_END');
            }
            \$MACRO_TOKEN_APPEND_WORD();
            \$MACRO_TOKEN_ADVANCE();
            if (\$MACRO_STREAM_ADVANCE_WORD() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$currentChar === '(' && \$tokens[\$tokenIndex - 1][0] === 'ANNOTATION_CLASS') {
            \$context |= \$CONTEXT_CONTENT;
            \$annotationParentCount = 1;
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_CONTENT_START');
            \$MACRO_TOKEN_APPEND_CHAR();
            \$MACRO_TOKEN_ADVANCE();
            if (\$MACRO_STREAM_ADVANCE_CHAR() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$MACRO_HAS_CONTEXT(\$CONTEXT_DOCBLOCK) && \$currentWord === '*/') {
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_COMMENTEND');
            \$MACRO_TOKEN_APPEND_WORD();
            \$MACRO_TOKEN_ADVANCE();
            \$context &= ~\$CONTEXT_DOCBLOCK;
            if (\$MACRO_STREAM_ADVANCE_WORD() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$currentChar === '*') {
            if (\$MACRO_HAS_CONTEXT(\$CONTEXT_DOCBLOCK) && (\$MACRO_HAS_CONTEXT(\$CONTEXT_ASTERISK))) {
                \$MACRO_TOKEN_SET_TYPE('ANNOTATION_IGNORE');
            } else {
                \$MACRO_TOKEN_SET_TYPE('ANNOTATION_ASTERISK');
                \$context |= \$CONTEXT_ASTERISK;
            }
            \$MACRO_TOKEN_APPEND_CHAR();
            \$MACRO_TOKEN_ADVANCE();
            if (\$MACRO_STREAM_ADVANCE_CHAR() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$currentChar === '@') {
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_CLASS');
            \$context |= \$CONTEXT_CLASS;
            \$MACRO_TOKEN_APPEND_CHAR();
            if (\$MACRO_STREAM_ADVANCE_CHAR() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        TOKENIZER_CONTINUE:

        if (\$context && \$CONTEXT_CONTENT) {
            \$MACRO_TOKEN_APPEND_CHAR();
            if (\$MACRO_STREAM_ADVANCE_CHAR() === false) {
                goto TOKENIZER_END;
            }
        } else {
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_IGNORE');
            \$MACRO_TOKEN_APPEND_LINE();
            \$MACRO_TOKEN_ADVANCE();
            if (\$MACRO_STREAM_ADVANCE_LINE() === false) {
                goto TOKENIZER_END;
            }
        }
        goto TOKENIZER_TOP;

        TOKENIZER_END:

        array_pop(\$tokens);

        return \$tokens;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Scanner/AnnotationScanner.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Scanner;

use Zend\\Code\\Annotation\\AnnotationCollection;
use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\NameInformation;

use function array_pop;
use function current;
use function in_array;
use function is_string;
use function next;
use function preg_match;
use function reset;
use function strlen;
use function strpos;
use function substr;
use function substr_count;

class AnnotationScanner extends AnnotationCollection implements ScannerInterface
{
    /**
     * @var bool
     */
    protected \$isScanned = false;

    /**
     * @var string
     */
    protected \$docComment;

    /**
     * @var NameInformation
     */
    protected \$nameInformation;

    /**
     * @var AnnotationManager
     */
    protected \$annotationManager;

    /**
     * @var array
     */
    protected \$annotations = [];

    /**
     * @param  AnnotationManager \$annotationManager
     * @param  string \$docComment
     * @param  NameInformation \$nameInformation
     * @return AnnotationScanner
     */
    public function __construct(
        AnnotationManager \$annotationManager,
        \$docComment,
        NameInformation \$nameInformation = null
    ) {
        \$this->annotationManager = \$annotationManager;
        \$this->docComment        = \$docComment;
        \$this->nameInformation   = \$nameInformation;
        \$this->scan(\$this->tokenize());
    }

    /**
     * @param NameInformation \$nameInformation
     */
    public function setNameInformation(NameInformation \$nameInformation)
    {
        \$this->nameInformation = \$nameInformation;
    }

    /**
     * @param  array \$tokens
     */
    protected function scan(array \$tokens)
    {
        \$annotations     = [];
        \$annotationIndex = -1;
        \$contentEnd      = false;

        reset(\$tokens);

        SCANNER_TOP:
        \$token = current(\$tokens);

        switch (\$token[0]) {
            case 'ANNOTATION_CLASS':
                \$contentEnd = false;
                \$annotationIndex++;
                \$class                         = substr(\$token[1], 1);
                \$class                         = \$this->nameInformation->resolveName(\$class);
                \$annotations[\$annotationIndex] = [\$class, null];
                goto SCANNER_CONTINUE;
                // goto no break needed

            case 'ANNOTATION_CONTENT_START':
                \$annotations[\$annotationIndex][1] = '';
                // fall-through

            case 'ANNOTATION_CONTENT_END':
            case 'ANNOTATION_CONTENT':
            case 'ANNOTATION_WHITESPACE':
            case 'ANNOTATION_NEWLINE':
                if (! \$contentEnd
                    && isset(\$annotations[\$annotationIndex])
                    && is_string(\$annotations[\$annotationIndex][1])
                ) {
                    \$annotations[\$annotationIndex][1] .= \$token[1];
                }

                if (\$token[0] === 'ANNOTATION_CONTENT_END') {
                    \$contentEnd = true;
                }

                goto SCANNER_CONTINUE;
                // goto no break needed
        }

        SCANNER_CONTINUE:
        if (next(\$tokens) === false) {
            goto SCANNER_END;
        }
        goto SCANNER_TOP;

        SCANNER_END:

        foreach (\$annotations as \$annotation) {
            \$annotation[]     = '@' . \$annotation[0] . \$annotation[1];
            \$annotationObject = \$this->annotationManager->createAnnotation(\$annotation);
            if (\$annotationObject) {
                \$this->append(\$annotationObject);
            }
        }
    }

    /**
     * @return array
     */
    protected function tokenize()
    {
        static \$CONTEXT_DOCBLOCK = 0x01;
        static \$CONTEXT_ASTERISK = 0x02;
        static \$CONTEXT_CLASS = 0x04;
        static \$CONTEXT_CONTENT = 0x08;

        \$context     = 0x00;
        \$stream      = \$this->docComment;
        \$streamIndex = null;
        \$tokens      = [];
        \$tokenIndex  = null;
        \$currentChar = null;
        \$currentWord = null;
        \$currentLine = null;

        \$annotationParentCount = 0;

        \$MACRO_STREAM_ADVANCE_CHAR = function (\$positionsForward = 1) use (
            &\$stream,
            &\$streamIndex,
            &\$currentChar,
            &\$currentWord,
            &\$currentLine
        ) {
            \$positionsForward = \$positionsForward > 0 ? \$positionsForward : 1;
            \$streamIndex      = \$streamIndex === null ? 0 : \$streamIndex + \$positionsForward;
            if (! isset(\$stream[\$streamIndex])) {
                \$currentChar = false;

                return false;
            }
            \$currentChar = \$stream[\$streamIndex];
            \$matches     = [];
            \$currentLine = preg_match('#(.*?)(?:\\n|\\r\\n?)#', \$stream, \$matches, null, \$streamIndex) === 1
                ? \$matches[1]
                : substr(\$stream, \$streamIndex);
            if (\$currentChar === ' ') {
                \$currentWord = preg_match('#( +)#', \$currentLine, \$matches) === 1 ? \$matches[1] : \$currentLine;
            } else {
                \$currentWord = (\$matches = strpos(\$currentLine, ' ')) !== false
                    ? substr(\$currentLine, 0, \$matches)
                    : \$currentLine;
            }

            return \$currentChar;
        };
        \$MACRO_STREAM_ADVANCE_WORD = function () use (&\$currentWord, &\$MACRO_STREAM_ADVANCE_CHAR) {
            return \$MACRO_STREAM_ADVANCE_CHAR(strlen(\$currentWord));
        };
        \$MACRO_STREAM_ADVANCE_LINE = function () use (&\$currentLine, &\$MACRO_STREAM_ADVANCE_CHAR) {
            return \$MACRO_STREAM_ADVANCE_CHAR(strlen(\$currentLine));
        };
        \$MACRO_TOKEN_ADVANCE       = function () use (&\$tokenIndex, &\$tokens) {
            \$tokenIndex          = \$tokenIndex === null ? 0 : \$tokenIndex + 1;
            \$tokens[\$tokenIndex] = ['ANNOTATION_UNKNOWN', ''];
        };
        \$MACRO_TOKEN_SET_TYPE      = function (\$type) use (&\$tokenIndex, &\$tokens) {
            \$tokens[\$tokenIndex][0] = \$type;
        };
        \$MACRO_TOKEN_APPEND_CHAR   = function () use (&\$currentChar, &\$tokens, &\$tokenIndex) {
            \$tokens[\$tokenIndex][1] .= \$currentChar;
        };
        \$MACRO_TOKEN_APPEND_WORD   = function () use (&\$currentWord, &\$tokens, &\$tokenIndex) {
            \$tokens[\$tokenIndex][1] .= \$currentWord;
        };
        \$MACRO_TOKEN_APPEND_LINE   = function () use (&\$currentLine, &\$tokens, &\$tokenIndex) {
            \$tokens[\$tokenIndex][1] .= \$currentLine;
        };
        \$MACRO_HAS_CONTEXT         = function (\$which) use (&\$context) {
            return (\$context & \$which) === \$which;
        };

        \$MACRO_STREAM_ADVANCE_CHAR();
        \$MACRO_TOKEN_ADVANCE();

        TOKENIZER_TOP:

        if (\$context === 0x00 && \$currentChar === '/' && \$currentWord === '/**') {
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_COMMENTSTART');
            \$MACRO_TOKEN_APPEND_WORD();
            \$MACRO_TOKEN_ADVANCE();
            \$context |= \$CONTEXT_DOCBLOCK;
            \$context |= \$CONTEXT_ASTERISK;
            if (\$MACRO_STREAM_ADVANCE_WORD() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$MACRO_HAS_CONTEXT(\$CONTEXT_CLASS)) {
            if (in_array(\$currentChar, [' ', '(', \"\\n\", \"\\r\"])) {
                \$context &= ~\$CONTEXT_CLASS;
                \$MACRO_TOKEN_ADVANCE();
            } else {
                \$MACRO_TOKEN_APPEND_CHAR();
                if (\$MACRO_STREAM_ADVANCE_CHAR() === false) {
                    goto TOKENIZER_END;
                }
                goto TOKENIZER_TOP;
            }
        }

        // Since we don't know what line endings are used in the file, we check for all scenarios. If we find a
        // carriage return (\\r), we check the next character for a line feed (\\n). If so we consume it and act as
        // if the carriage return was a line feed.
        \$lineEnded = \$currentChar === \"\\n\";
        if (\$currentChar === \"\\r\") {
            \$lineEnded = true;

            \$nextChar = \$MACRO_STREAM_ADVANCE_CHAR();
            if (\$nextChar !== \"\\n\") {
                \$streamIndex--;
            }

            \$currentChar = \"\\n\";
        }

        if (\$lineEnded) {
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_NEWLINE');
            \$MACRO_TOKEN_APPEND_CHAR();
            \$MACRO_TOKEN_ADVANCE();
            \$context &= ~\$CONTEXT_ASTERISK;
            \$context &= ~\$CONTEXT_CLASS;
            if (\$MACRO_STREAM_ADVANCE_CHAR() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$currentChar === ' ') {
            \$MACRO_TOKEN_SET_TYPE(
                \$MACRO_HAS_CONTEXT(\$CONTEXT_ASTERISK)
                ? 'ANNOTATION_WHITESPACE'
                : 'ANNOTATION_WHITESPACE_INDENT'
            );
            \$MACRO_TOKEN_APPEND_WORD();
            \$MACRO_TOKEN_ADVANCE();
            if (\$MACRO_STREAM_ADVANCE_WORD() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$MACRO_HAS_CONTEXT(\$CONTEXT_CONTENT) && \$MACRO_HAS_CONTEXT(\$CONTEXT_ASTERISK)) {
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_CONTENT');
            \$annotationParentCount += substr_count(\$currentWord, '(');
            \$annotationParentCount -= substr_count(\$currentWord, ')');

            if (\$annotationParentCount === 0) {
                \$context &= ~\$CONTEXT_CONTENT;
                \$MACRO_TOKEN_SET_TYPE('ANNOTATION_CONTENT_END');
            }
            \$MACRO_TOKEN_APPEND_WORD();
            \$MACRO_TOKEN_ADVANCE();
            if (\$MACRO_STREAM_ADVANCE_WORD() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$currentChar === '(' && \$tokens[\$tokenIndex - 1][0] === 'ANNOTATION_CLASS') {
            \$context |= \$CONTEXT_CONTENT;
            \$annotationParentCount = 1;
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_CONTENT_START');
            \$MACRO_TOKEN_APPEND_CHAR();
            \$MACRO_TOKEN_ADVANCE();
            if (\$MACRO_STREAM_ADVANCE_CHAR() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$MACRO_HAS_CONTEXT(\$CONTEXT_DOCBLOCK) && \$currentWord === '*/') {
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_COMMENTEND');
            \$MACRO_TOKEN_APPEND_WORD();
            \$MACRO_TOKEN_ADVANCE();
            \$context &= ~\$CONTEXT_DOCBLOCK;
            if (\$MACRO_STREAM_ADVANCE_WORD() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$currentChar === '*') {
            if (\$MACRO_HAS_CONTEXT(\$CONTEXT_DOCBLOCK) && (\$MACRO_HAS_CONTEXT(\$CONTEXT_ASTERISK))) {
                \$MACRO_TOKEN_SET_TYPE('ANNOTATION_IGNORE');
            } else {
                \$MACRO_TOKEN_SET_TYPE('ANNOTATION_ASTERISK');
                \$context |= \$CONTEXT_ASTERISK;
            }
            \$MACRO_TOKEN_APPEND_CHAR();
            \$MACRO_TOKEN_ADVANCE();
            if (\$MACRO_STREAM_ADVANCE_CHAR() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        if (\$currentChar === '@') {
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_CLASS');
            \$context |= \$CONTEXT_CLASS;
            \$MACRO_TOKEN_APPEND_CHAR();
            if (\$MACRO_STREAM_ADVANCE_CHAR() === false) {
                goto TOKENIZER_END;
            }
            goto TOKENIZER_TOP;
        }

        TOKENIZER_CONTINUE:

        if (\$context && \$CONTEXT_CONTENT) {
            \$MACRO_TOKEN_APPEND_CHAR();
            if (\$MACRO_STREAM_ADVANCE_CHAR() === false) {
                goto TOKENIZER_END;
            }
        } else {
            \$MACRO_TOKEN_SET_TYPE('ANNOTATION_IGNORE');
            \$MACRO_TOKEN_APPEND_LINE();
            \$MACRO_TOKEN_ADVANCE();
            if (\$MACRO_STREAM_ADVANCE_LINE() === false) {
                goto TOKENIZER_END;
            }
        }
        goto TOKENIZER_TOP;

        TOKENIZER_END:

        array_pop(\$tokens);

        return \$tokens;
    }
}
", "vendor/zendframework/zend-code/src/Scanner/AnnotationScanner.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Scanner/AnnotationScanner.php");
    }
}
