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

/* vendor/symfony/http-foundation/Tests/schema/iana-registry.rng */
class __TwigTemplate_5af6486b9cce1d79fe25d8a629121309f10e80cbdad703024a8d9261bf3b0c9b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/schema/iana-registry.rng"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/schema/iana-registry.rng"));

        // line 1
        echo "<?xml version='1.0'?>
<grammar xmlns=\"http://relaxng.org/ns/structure/1.0\"
  datatypeLibrary=\"http://www.w3.org/2001/XMLSchema-datatypes\"
  ns=\"http://www.iana.org/assignments\">

  <define name=\"registryMeta\">
    <interleave>
      <attribute name=\"id\"><data type=\"ID\"/></attribute>
      <optional><element name=\"title\"><ref name=\"text_with_references\"/></element></optional>
      <optional><element name=\"created\"><ref name=\"genericDate\"/></element></optional>
      <optional><element name=\"updated\"><data type=\"date\"/></element></optional>
      <optional><element name=\"registration_rule\"><ref
            name=\"text_with_references\"/></element></optional>
      <optional><element name=\"expert\"><text/></element></optional>
      <optional><element name=\"description\"><ref name=\"text_with_references\"/></element></optional>
      <zeroOrMore><element name=\"note\"><ref name=\"text_with_references\"/></element></zeroOrMore>
      <ref name=\"references\"/>
      <optional><element name=\"hide\"><empty/></element></optional>
      <zeroOrMore><element name=\"category\"><text/></element></zeroOrMore>
      <zeroOrMore><ref name=\"range\"/></zeroOrMore>
      <optional><ref name=\"file\"/></optional>
    </interleave>
  </define>

  <define name=\"range\">
    <element name=\"range\">
       <interleave>
\t  <element name=\"value\"><text/></element>
\t  <optional><element name=\"hex\"><text/></element></optional>
\t  <element name=\"registration_rule\"><ref name=\"text_with_references\"/></element>
\t  <optional><element name=\"note\"><ref name=\"text_with_references\"/></element></optional>
\t  <optional><ref name=\"xref\"/></optional>
       </interleave>
    </element>
  </define>

  <define name=\"people\">
    <element name=\"people\">
      <zeroOrMore>
        <element name=\"person\">
          <attribute name=\"id\"><data type=\"ID\"/></attribute>
          <optional><element name=\"name\"><text/></element></optional>
          <optional><element name=\"org\"><text/></element></optional>
          <zeroOrMore><element name=\"uri\"><data type=\"anyURI\"/></element></zeroOrMore>
          <optional><element name=\"updated\"><ref name=\"genericDate\"/></element></optional>
        </element>
      </zeroOrMore>
    </element>
  </define>

  <define name=\"xref\">
    <element name=\"xref\">
      <optional>
        <attribute name=\"lastupdated\"><ref name=\"genericDate\"/></attribute>
      </optional>
      <choice>
        <group>
          <attribute name=\"type\"><value>uri</value></attribute>
          <attribute name=\"data\"><data type=\"anyURI\"/></attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>rfc</value></attribute>
          <attribute name=\"data\">
            <data type=\"string\">
              <param name=\"pattern\">(rfc|bcp|std)\\d+</param>
            </data>
          </attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>rfc-errata</value></attribute>
          <attribute name=\"data\"><data type=\"positiveInteger\"/></attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>draft</value></attribute>
          <attribute name=\"data\">
            <data type=\"string\">
              <param name=\"pattern\">(draft|RFC)(-[a-zA-Z0-9]+)+</param>
            </data>
          </attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>registry</value></attribute>
          <attribute name=\"data\"><data type=\"NCName\"/></attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>person</value></attribute>
          <attribute name=\"data\"><data type=\"NCName\"/></attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>text</value></attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>note</value></attribute>
          <attribute name=\"data\"><data type=\"positiveInteger\"/></attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>unicode</value></attribute>
          <attribute name=\"data\">
            <data type=\"string\">
              <param name=\"pattern\">ucd\\d+\\.\\d+\\.\\d+</param>
            </data>
          </attribute>
        </group>
      </choice>
      <text/>
    </element>
  </define>

  <define name=\"references\">
    <zeroOrMore>
      <ref name=\"xref\"/>
    </zeroOrMore>
  </define>

  <define name=\"text_with_references\">
    <interleave>
      <zeroOrMore>
        <text/>
        <optional><ref name=\"xref\"/></optional>
      </zeroOrMore>
    </interleave>
  </define>

  <define name=\"richText\">
    <zeroOrMore>
      <choice>
        <interleave>
          <ref name=\"text_with_references\"/>
          <optional><element name=\"br\"><empty/></element></optional>
        </interleave>
        <element name=\"paragraph\">
          <interleave>
            <ref name=\"text_with_references\"/>
            <optional><element name=\"br\"><empty/></element></optional>
          </interleave>
        </element>
        <element name=\"artwork\"><text/></element>
      </choice>
    </zeroOrMore>
  </define>

  <define name=\"genericRange\">
    <data type=\"string\">
      <param name=\"pattern\">(\\d+|0x[\\da-fA-F]+)(\\s*-\\s*(\\d+|0x[\\da-fA-F]+))?</param>
    </data>
  </define>

  <define name=\"genericDate\">
    <choice>
      <data type=\"date\"/>
      <data type=\"gYearMonth\"/>
    </choice>
  </define>

  <define name=\"hex32\">
    <data type=\"string\">
      <param name=\"pattern\">0x[0-9]{8}</param>
    </data>
  </define>

  <define name=\"binary\">
    <data type=\"string\">
      <param name=\"pattern\">[0-1]+</param>
    </data>
  </define>

  <define name=\"footnotes\">
    <zeroOrMore>
      <element name=\"footnote\">
        <attribute name=\"anchor\"><data type=\"positiveInteger\"/></attribute>
        <interleave>
          <zeroOrMore>
            <text/>
            <optional><ref name=\"xref\"/></optional>
          </zeroOrMore>
        </interleave>
      </element>
    </zeroOrMore>
  </define>

  <define name=\"file\">
    <element name=\"file\">
      <attribute name=\"type\">
        <choice>
          <value>legacy</value>
          <value>mib</value>
          <value>template</value>
          <value>json</value>
        </choice>
      </attribute>
      <optional>
        <attribute name=\"name\"/>
      </optional>
      <data type=\"anyURI\"/>
    </element>
  </define>

</grammar>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/schema/iana-registry.rng";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version='1.0'?>
<grammar xmlns=\"http://relaxng.org/ns/structure/1.0\"
  datatypeLibrary=\"http://www.w3.org/2001/XMLSchema-datatypes\"
  ns=\"http://www.iana.org/assignments\">

  <define name=\"registryMeta\">
    <interleave>
      <attribute name=\"id\"><data type=\"ID\"/></attribute>
      <optional><element name=\"title\"><ref name=\"text_with_references\"/></element></optional>
      <optional><element name=\"created\"><ref name=\"genericDate\"/></element></optional>
      <optional><element name=\"updated\"><data type=\"date\"/></element></optional>
      <optional><element name=\"registration_rule\"><ref
            name=\"text_with_references\"/></element></optional>
      <optional><element name=\"expert\"><text/></element></optional>
      <optional><element name=\"description\"><ref name=\"text_with_references\"/></element></optional>
      <zeroOrMore><element name=\"note\"><ref name=\"text_with_references\"/></element></zeroOrMore>
      <ref name=\"references\"/>
      <optional><element name=\"hide\"><empty/></element></optional>
      <zeroOrMore><element name=\"category\"><text/></element></zeroOrMore>
      <zeroOrMore><ref name=\"range\"/></zeroOrMore>
      <optional><ref name=\"file\"/></optional>
    </interleave>
  </define>

  <define name=\"range\">
    <element name=\"range\">
       <interleave>
\t  <element name=\"value\"><text/></element>
\t  <optional><element name=\"hex\"><text/></element></optional>
\t  <element name=\"registration_rule\"><ref name=\"text_with_references\"/></element>
\t  <optional><element name=\"note\"><ref name=\"text_with_references\"/></element></optional>
\t  <optional><ref name=\"xref\"/></optional>
       </interleave>
    </element>
  </define>

  <define name=\"people\">
    <element name=\"people\">
      <zeroOrMore>
        <element name=\"person\">
          <attribute name=\"id\"><data type=\"ID\"/></attribute>
          <optional><element name=\"name\"><text/></element></optional>
          <optional><element name=\"org\"><text/></element></optional>
          <zeroOrMore><element name=\"uri\"><data type=\"anyURI\"/></element></zeroOrMore>
          <optional><element name=\"updated\"><ref name=\"genericDate\"/></element></optional>
        </element>
      </zeroOrMore>
    </element>
  </define>

  <define name=\"xref\">
    <element name=\"xref\">
      <optional>
        <attribute name=\"lastupdated\"><ref name=\"genericDate\"/></attribute>
      </optional>
      <choice>
        <group>
          <attribute name=\"type\"><value>uri</value></attribute>
          <attribute name=\"data\"><data type=\"anyURI\"/></attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>rfc</value></attribute>
          <attribute name=\"data\">
            <data type=\"string\">
              <param name=\"pattern\">(rfc|bcp|std)\\d+</param>
            </data>
          </attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>rfc-errata</value></attribute>
          <attribute name=\"data\"><data type=\"positiveInteger\"/></attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>draft</value></attribute>
          <attribute name=\"data\">
            <data type=\"string\">
              <param name=\"pattern\">(draft|RFC)(-[a-zA-Z0-9]+)+</param>
            </data>
          </attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>registry</value></attribute>
          <attribute name=\"data\"><data type=\"NCName\"/></attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>person</value></attribute>
          <attribute name=\"data\"><data type=\"NCName\"/></attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>text</value></attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>note</value></attribute>
          <attribute name=\"data\"><data type=\"positiveInteger\"/></attribute>
        </group>
        <group>
          <attribute name=\"type\"><value>unicode</value></attribute>
          <attribute name=\"data\">
            <data type=\"string\">
              <param name=\"pattern\">ucd\\d+\\.\\d+\\.\\d+</param>
            </data>
          </attribute>
        </group>
      </choice>
      <text/>
    </element>
  </define>

  <define name=\"references\">
    <zeroOrMore>
      <ref name=\"xref\"/>
    </zeroOrMore>
  </define>

  <define name=\"text_with_references\">
    <interleave>
      <zeroOrMore>
        <text/>
        <optional><ref name=\"xref\"/></optional>
      </zeroOrMore>
    </interleave>
  </define>

  <define name=\"richText\">
    <zeroOrMore>
      <choice>
        <interleave>
          <ref name=\"text_with_references\"/>
          <optional><element name=\"br\"><empty/></element></optional>
        </interleave>
        <element name=\"paragraph\">
          <interleave>
            <ref name=\"text_with_references\"/>
            <optional><element name=\"br\"><empty/></element></optional>
          </interleave>
        </element>
        <element name=\"artwork\"><text/></element>
      </choice>
    </zeroOrMore>
  </define>

  <define name=\"genericRange\">
    <data type=\"string\">
      <param name=\"pattern\">(\\d+|0x[\\da-fA-F]+)(\\s*-\\s*(\\d+|0x[\\da-fA-F]+))?</param>
    </data>
  </define>

  <define name=\"genericDate\">
    <choice>
      <data type=\"date\"/>
      <data type=\"gYearMonth\"/>
    </choice>
  </define>

  <define name=\"hex32\">
    <data type=\"string\">
      <param name=\"pattern\">0x[0-9]{8}</param>
    </data>
  </define>

  <define name=\"binary\">
    <data type=\"string\">
      <param name=\"pattern\">[0-1]+</param>
    </data>
  </define>

  <define name=\"footnotes\">
    <zeroOrMore>
      <element name=\"footnote\">
        <attribute name=\"anchor\"><data type=\"positiveInteger\"/></attribute>
        <interleave>
          <zeroOrMore>
            <text/>
            <optional><ref name=\"xref\"/></optional>
          </zeroOrMore>
        </interleave>
      </element>
    </zeroOrMore>
  </define>

  <define name=\"file\">
    <element name=\"file\">
      <attribute name=\"type\">
        <choice>
          <value>legacy</value>
          <value>mib</value>
          <value>template</value>
          <value>json</value>
        </choice>
      </attribute>
      <optional>
        <attribute name=\"name\"/>
      </optional>
      <data type=\"anyURI\"/>
    </element>
  </define>

</grammar>
", "vendor/symfony/http-foundation/Tests/schema/iana-registry.rng", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/schema/iana-registry.rng");
    }
}
