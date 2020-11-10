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

/* vendor/symfony/translation/Resources/schemas/xliff-core-1.2-strict.xsd */
class __TwigTemplate_dcb8c458e0722dba5146f34a6ad2892ae0a679ec325636a372d9822fdd49e493 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Resources/schemas/xliff-core-1.2-strict.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Resources/schemas/xliff-core-1.2-strict.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!--

May-19-2004:
- Changed the <choice> for ElemType_header, moving minOccurs=\"0\" maxOccurs=\"unbounded\" from its elements
to <choice> itself.
- Added <choice> for ElemType_trans-unit to allow \"any order\" for <context-group>, <count-group>, <prop-group>, <note>, and
<alt-trans>.

Oct-2005
- updated version info to 1.2
- equiv-trans attribute to <trans-unit> element
- merged-trans attribute for <group> element
- Add the <seg-source> element as optional in the <trans-unit> and <alt-trans> content models, at the same level as <source>
- Create a new value \"seg\" for the mtype attribute of the <mrk> element
- Add mid as an optional attribute for the <alt-trans> element

Nov-14-2005
- Changed name attribute for <context-group> from required to optional
- Added extension point at <xliff>

Jan-9-2006
- Added alttranstype type attribute to <alt-trans>, and values

Jan-10-2006
- Corrected error with overwritten purposeValueList
- Corrected name=\"AttrType_Version\",  attribute should have been \"name\"

-->
<xsd:schema xmlns:xlf=\"urn:oasis:names:tc:xliff:document:1.2\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" elementFormDefault=\"qualified\" targetNamespace=\"urn:oasis:names:tc:xliff:document:1.2\" xml:lang=\"en\">
  <!-- Import for xml:lang and xml:space -->
  <xsd:import namespace=\"http://www.w3.org/XML/1998/namespace\" schemaLocation=\"http://www.w3.org/2001/xml.xsd\"/>
  <!-- Attributes Lists -->
  <xsd:simpleType name=\"XTend\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:pattern value=\"x-[^\\s]+\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"context-typeValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'context-type'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"database\">
        <xsd:annotation>
          <xsd:documentation>Indicates a database content.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"element\">
        <xsd:annotation>
          <xsd:documentation>Indicates the content of an element within an XML document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"elementtitle\">
        <xsd:annotation>
          <xsd:documentation>Indicates the name of an element within an XML document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"linenumber\">
        <xsd:annotation>
          <xsd:documentation>Indicates the line number from the sourcefile (see context-type=\"sourcefile\") where the &lt;source&gt; is found.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"numparams\">
        <xsd:annotation>
          <xsd:documentation>Indicates a the number of parameters contained within the &lt;source&gt;.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"paramnotes\">
        <xsd:annotation>
          <xsd:documentation>Indicates notes pertaining to the parameters in the &lt;source&gt;.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"record\">
        <xsd:annotation>
          <xsd:documentation>Indicates the content of a record within a database.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"recordtitle\">
        <xsd:annotation>
          <xsd:documentation>Indicates the name of a record within a database.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"sourcefile\">
        <xsd:annotation>
          <xsd:documentation>Indicates the original source file in the case that multiple files are merged to form the original file from which the XLIFF file is created. This differs from the original &lt;file&gt; attribute in that this sourcefile is one of many that make up that file.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"count-typeValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'count-type'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"num-usages\">
        <xsd:annotation>
          <xsd:documentation>Indicates the count units are items that are used X times in a certain context; example: this is a reusable text unit which is used 42 times in other texts.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"repetition\">
        <xsd:annotation>
          <xsd:documentation>Indicates the count units are translation units existing already in the same document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"total\">
        <xsd:annotation>
          <xsd:documentation>Indicates a total count.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"InlineDelimitersValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'ctype' when used other elements than &lt;ph&gt; or &lt;x&gt;.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"bold\">
        <xsd:annotation>
          <xsd:documentation>Indicates a run of bolded text.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"italic\">
        <xsd:annotation>
          <xsd:documentation>Indicates a run of text in italics.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"underlined\">
        <xsd:annotation>
          <xsd:documentation>Indicates a run of underlined text.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"link\">
        <xsd:annotation>
          <xsd:documentation>Indicates a run of hyper-text.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"InlinePlaceholdersValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'ctype' when used with &lt;ph&gt; or &lt;x&gt;.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"image\">
        <xsd:annotation>
          <xsd:documentation>Indicates a inline image.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pb\">
        <xsd:annotation>
          <xsd:documentation>Indicates a page break.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"lb\">
        <xsd:annotation>
          <xsd:documentation>Indicates a line break.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"mime-typeValueList\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:pattern value=\"(text|multipart|message|application|image|audio|video|model)(/.+)*\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"datatypeValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'datatype'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"asp\">
        <xsd:annotation>
          <xsd:documentation>Indicates Active Server Page data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"c\">
        <xsd:annotation>
          <xsd:documentation>Indicates C source file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cdf\">
        <xsd:annotation>
          <xsd:documentation>Indicates Channel Definition Format (CDF) data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cfm\">
        <xsd:annotation>
          <xsd:documentation>Indicates ColdFusion data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cpp\">
        <xsd:annotation>
          <xsd:documentation>Indicates C++ source file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"csharp\">
        <xsd:annotation>
          <xsd:documentation>Indicates C-Sharp data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cstring\">
        <xsd:annotation>
          <xsd:documentation>Indicates strings from C, ASM, and driver files data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"csv\">
        <xsd:annotation>
          <xsd:documentation>Indicates comma-separated values data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"database\">
        <xsd:annotation>
          <xsd:documentation>Indicates database data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"documentfooter\">
        <xsd:annotation>
          <xsd:documentation>Indicates portions of document that follows data and contains metadata.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"documentheader\">
        <xsd:annotation>
          <xsd:documentation>Indicates portions of document that precedes data and contains metadata.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"filedialog\">
        <xsd:annotation>
          <xsd:documentation>Indicates data from standard UI file operations dialogs (e.g., Open, Save, Save As, Export, Import).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"form\">
        <xsd:annotation>
          <xsd:documentation>Indicates standard user input screen data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"html\">
        <xsd:annotation>
          <xsd:documentation>Indicates HyperText Markup Language (HTML) data - document instance.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"htmlbody\">
        <xsd:annotation>
          <xsd:documentation>Indicates content within an HTML document’s &lt;body&gt; element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"ini\">
        <xsd:annotation>
          <xsd:documentation>Indicates Windows INI file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"interleaf\">
        <xsd:annotation>
          <xsd:documentation>Indicates Interleaf data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"javaclass\">
        <xsd:annotation>
          <xsd:documentation>Indicates Java source file data (extension '.java').</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"javapropertyresourcebundle\">
        <xsd:annotation>
          <xsd:documentation>Indicates Java property resource bundle data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"javalistresourcebundle\">
        <xsd:annotation>
          <xsd:documentation>Indicates Java list resource bundle data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"javascript\">
        <xsd:annotation>
          <xsd:documentation>Indicates JavaScript source file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"jscript\">
        <xsd:annotation>
          <xsd:documentation>Indicates JScript source file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"layout\">
        <xsd:annotation>
          <xsd:documentation>Indicates information relating to formatting.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"lisp\">
        <xsd:annotation>
          <xsd:documentation>Indicates LISP source file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"margin\">
        <xsd:annotation>
          <xsd:documentation>Indicates information relating to margin formats.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"menufile\">
        <xsd:annotation>
          <xsd:documentation>Indicates a file containing menu.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"messagefile\">
        <xsd:annotation>
          <xsd:documentation>Indicates numerically identified string table.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"mif\">
        <xsd:annotation>
          <xsd:documentation>Indicates Maker Interchange Format (MIF) data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"mimetype\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the datatype attribute value is a MIME Type value and is defined in the mime-type attribute.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"mo\">
        <xsd:annotation>
          <xsd:documentation>Indicates GNU Machine Object data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"msglib\">
        <xsd:annotation>
          <xsd:documentation>Indicates Message Librarian strings created by Novell's Message Librarian Tool.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pagefooter\">
        <xsd:annotation>
          <xsd:documentation>Indicates information to be displayed at the bottom of each page of a document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pageheader\">
        <xsd:annotation>
          <xsd:documentation>Indicates information to be displayed at the top of each page of a document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"parameters\">
        <xsd:annotation>
          <xsd:documentation>Indicates a list of property values (e.g., settings within INI files or preferences dialog).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pascal\">
        <xsd:annotation>
          <xsd:documentation>Indicates Pascal source file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"php\">
        <xsd:annotation>
          <xsd:documentation>Indicates Hypertext Preprocessor data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"plaintext\">
        <xsd:annotation>
          <xsd:documentation>Indicates plain text file (no formatting other than, possibly, wrapping).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"po\">
        <xsd:annotation>
          <xsd:documentation>Indicates GNU Portable Object file.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"report\">
        <xsd:annotation>
          <xsd:documentation>Indicates dynamically generated user defined document. e.g. Oracle Report, Crystal Report, etc.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"resources\">
        <xsd:annotation>
          <xsd:documentation>Indicates Windows .NET binary resources.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"resx\">
        <xsd:annotation>
          <xsd:documentation>Indicates Windows .NET Resources.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rtf\">
        <xsd:annotation>
          <xsd:documentation>Indicates Rich Text Format (RTF) data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"sgml\">
        <xsd:annotation>
          <xsd:documentation>Indicates Standard Generalized Markup Language (SGML) data - document instance.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"sgmldtd\">
        <xsd:annotation>
          <xsd:documentation>Indicates Standard Generalized Markup Language (SGML) data - Document Type Definition (DTD).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"svg\">
        <xsd:annotation>
          <xsd:documentation>Indicates Scalable Vector Graphic (SVG) data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"vbscript\">
        <xsd:annotation>
          <xsd:documentation>Indicates VisualBasic Script source file.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"warning\">
        <xsd:annotation>
          <xsd:documentation>Indicates warning message.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"winres\">
        <xsd:annotation>
          <xsd:documentation>Indicates Windows (Win32) resources (i.e. resources extracted from an RC script, a message file, or a compiled file).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"xhtml\">
        <xsd:annotation>
          <xsd:documentation>Indicates Extensible HyperText Markup Language (XHTML) data - document instance.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"xml\">
        <xsd:annotation>
          <xsd:documentation>Indicates Extensible Markup Language (XML) data - document instance.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"xmldtd\">
        <xsd:annotation>
          <xsd:documentation>Indicates Extensible Markup Language (XML) data - Document Type Definition (DTD).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"xsl\">
        <xsd:annotation>
          <xsd:documentation>Indicates Extensible Stylesheet Language (XSL) data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"xul\">
        <xsd:annotation>
          <xsd:documentation>Indicates XUL elements.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"mtypeValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'mtype'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"abbrev\">
        <xsd:annotation>
          <xsd:documentation>Indicates the marked text is an abbreviation.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"abbreviated-form\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.8: A term resulting from the omission of any part of the full term while designating the same concept.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"abbreviation\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.8.1: An abbreviated form of a simple term resulting from the omission of some of its letters (e.g. 'adj.' for 'adjective').</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"acronym\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.8.4: An abbreviated form of a term made up of letters from the full form of a multiword term strung together into a sequence pronounced only syllabically (e.g. 'radar' for 'radio detecting and ranging').</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"appellation\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620: A proper-name term, such as the name of an agency or other proper entity.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"collocation\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.18.1: A recurrent word combination characterized by cohesion in that the components of the collocation must co-occur within an utterance or series of utterances, even though they do not necessarily have to maintain immediate proximity to one another.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"common-name\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.5: A synonym for an international scientific term that is used in general discourse in a given language.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"datetime\">
        <xsd:annotation>
          <xsd:documentation>Indicates the marked text is a date and/or time.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"equation\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.15: An expression used to represent a concept based on a statement that two mathematical expressions are, for instance, equal as identified by the equal sign (=), or assigned to one another by a similar sign.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"expanded-form\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.7: The complete representation of a term for which there is an abbreviated form.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"formula\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.14: Figures, symbols or the like used to express a concept briefly, such as a mathematical or chemical formula.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"head-term\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.1: The concept designation that has been chosen to head a terminological record.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"initialism\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.8.3: An abbreviated form of a term consisting of some of the initial letters of the words making up a multiword term or the term elements making up a compound term when these letters are pronounced individually (e.g. 'BSE' for 'bovine spongiform encephalopathy').</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"international-scientific-term\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.4: A term that is part of an international scientific nomenclature as adopted by an appropriate scientific body.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"internationalism\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.6: A term that has the same or nearly identical orthographic or phonemic form in many languages.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"logical-expression\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.16: An expression used to represent a concept based on mathematical or logical relations, such as statements of inequality, set relationships, Boolean operations, and the like.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"materials-management-unit\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.17: A unit to track object.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"name\">
        <xsd:annotation>
          <xsd:documentation>Indicates the marked text is a name.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"near-synonym\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.3: A term that represents the same or a very similar concept as another term in the same language, but for which interchangeability is limited to some contexts and inapplicable in others.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"part-number\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.17.2: A unique alphanumeric designation assigned to an object in a manufacturing system.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"phrase\">
        <xsd:annotation>
          <xsd:documentation>Indicates the marked text is a phrase.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"phraseological-unit\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.18: Any group of two or more words that form a unit, the meaning of which frequently cannot be deduced based on the combined sense of the words making up the phrase.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"protected\">
        <xsd:annotation>
          <xsd:documentation>Indicates the marked text should not be translated.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"romanized-form\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.12: A form of a term resulting from an operation whereby non-Latin writing systems are converted to the Latin alphabet.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"seg\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the marked text represents a segment.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"set-phrase\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.18.2: A fixed, lexicalized phrase.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"short-form\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.8.2: A variant of a multiword term that includes fewer words than the full form of the term (e.g. 'Group of Twenty-four' for 'Intergovernmental Group of Twenty-four on International Monetary Affairs').</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"sku\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.17.1: Stock keeping unit, an inventory item identified by a unique alphanumeric designation assigned to an object in an inventory control system.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"standard-text\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.19: A fixed chunk of recurring text.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"symbol\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.13: A designation of a concept by letters, numerals, pictograms or any combination thereof.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"synonym\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.2: Any term that represents the same or a very similar concept as the main entry term in a term entry.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"synonymous-phrase\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.18.3: Phraseological unit in a language that expresses the same semantic content as another phrase in that same language.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"term\">
        <xsd:annotation>
          <xsd:documentation>Indicates the marked text is a term.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"transcribed-form\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.11: A form of a term resulting from an operation whereby the characters of one writing system are represented by characters from another writing system, taking into account the pronunciation of the characters converted.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"transliterated-form\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.10: A form of a term resulting from an operation whereby the characters of an alphabetic writing system are represented by characters from another alphabetic writing system.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"truncated-term\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.8.5: An abbreviated form of a term resulting from the omission of one or more term elements or syllables (e.g. 'flu' for 'influenza').</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"variant\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.9: One of the alternate forms of a term.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"restypeValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'restype'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"auto3state\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC AUTO3STATE control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"autocheckbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC AUTOCHECKBOX control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"autoradiobutton\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC AUTORADIOBUTTON control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"bedit\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC BEDIT control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"bitmap\">
        <xsd:annotation>
          <xsd:documentation>Indicates a bitmap, for example a BITMAP resource in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"button\">
        <xsd:annotation>
          <xsd:documentation>Indicates a button object, for example a BUTTON control Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"caption\">
        <xsd:annotation>
          <xsd:documentation>Indicates a caption, such as the caption of a dialog box.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cell\">
        <xsd:annotation>
          <xsd:documentation>Indicates the cell in a table, for example the content of the &lt;td&gt; element in HTML.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"checkbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates check box object, for example a CHECKBOX control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"checkboxmenuitem\">
        <xsd:annotation>
          <xsd:documentation>Indicates a menu item with an associated checkbox.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"checkedlistbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a list box, but with a check-box for each item.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"colorchooser\">
        <xsd:annotation>
          <xsd:documentation>Indicates a color selection dialog.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"combobox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a combination of edit box and listbox object, for example a COMBOBOX control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"comboboxexitem\">
        <xsd:annotation>
          <xsd:documentation>Indicates an initialization entry of an extended combobox DLGINIT resource block. (code 0x1234).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"comboboxitem\">
        <xsd:annotation>
          <xsd:documentation>Indicates an initialization entry of a combobox DLGINIT resource block (code 0x0403).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"component\">
        <xsd:annotation>
          <xsd:documentation>Indicates a UI base class element that cannot be represented by any other element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"contextmenu\">
        <xsd:annotation>
          <xsd:documentation>Indicates a context menu.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"ctext\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC CTEXT control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cursor\">
        <xsd:annotation>
          <xsd:documentation>Indicates a cursor, for example a CURSOR resource in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"datetimepicker\">
        <xsd:annotation>
          <xsd:documentation>Indicates a date/time picker.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"defpushbutton\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC DEFPUSHBUTTON control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"dialog\">
        <xsd:annotation>
          <xsd:documentation>Indicates a dialog box.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"dlginit\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC DLGINIT resource block.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"edit\">
        <xsd:annotation>
          <xsd:documentation>Indicates an edit box object, for example an EDIT control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"file\">
        <xsd:annotation>
          <xsd:documentation>Indicates a filename.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"filechooser\">
        <xsd:annotation>
          <xsd:documentation>Indicates a file dialog.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"fn\">
        <xsd:annotation>
          <xsd:documentation>Indicates a footnote.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"font\">
        <xsd:annotation>
          <xsd:documentation>Indicates a font name.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"footer\">
        <xsd:annotation>
          <xsd:documentation>Indicates a footer.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"frame\">
        <xsd:annotation>
          <xsd:documentation>Indicates a frame object.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"grid\">
        <xsd:annotation>
          <xsd:documentation>Indicates a XUL grid element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"groupbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a groupbox object, for example a GROUPBOX control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"header\">
        <xsd:annotation>
          <xsd:documentation>Indicates a header item.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"heading\">
        <xsd:annotation>
          <xsd:documentation>Indicates a heading, such has the content of &lt;h1&gt;, &lt;h2&gt;, etc. in HTML.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"hedit\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC HEDIT control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"hscrollbar\">
        <xsd:annotation>
          <xsd:documentation>Indicates a horizontal scrollbar.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"icon\">
        <xsd:annotation>
          <xsd:documentation>Indicates an icon, for example an ICON resource in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"iedit\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC IEDIT control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"keywords\">
        <xsd:annotation>
          <xsd:documentation>Indicates keyword list, such as the content of the Keywords meta-data in HTML, or a K footnote in WinHelp RTF.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"label\">
        <xsd:annotation>
          <xsd:documentation>Indicates a label object.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"linklabel\">
        <xsd:annotation>
          <xsd:documentation>Indicates a label that is also a HTML link (not necessarily a URL).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"list\">
        <xsd:annotation>
          <xsd:documentation>Indicates a list (a group of list-items, for example an &lt;ol&gt; or &lt;ul&gt; element in HTML).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"listbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a listbox object, for example an LISTBOX control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"listitem\">
        <xsd:annotation>
          <xsd:documentation>Indicates an list item (an entry in a list).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"ltext\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC LTEXT control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"menu\">
        <xsd:annotation>
          <xsd:documentation>Indicates a menu (a group of menu-items).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"menubar\">
        <xsd:annotation>
          <xsd:documentation>Indicates a toolbar containing one or more tope level menus.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"menuitem\">
        <xsd:annotation>
          <xsd:documentation>Indicates a menu item (an entry in a menu).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"menuseparator\">
        <xsd:annotation>
          <xsd:documentation>Indicates a XUL menuseparator element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"message\">
        <xsd:annotation>
          <xsd:documentation>Indicates a message, for example an entry in a MESSAGETABLE resource in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"monthcalendar\">
        <xsd:annotation>
          <xsd:documentation>Indicates a calendar control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"numericupdown\">
        <xsd:annotation>
          <xsd:documentation>Indicates an edit box beside a spin control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"panel\">
        <xsd:annotation>
          <xsd:documentation>Indicates a catch all for rectangular areas.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"popupmenu\">
        <xsd:annotation>
          <xsd:documentation>Indicates a standalone menu not necessarily associated with a menubar.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pushbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a pushbox object, for example a PUSHBOX control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pushbutton\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC PUSHBUTTON control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"radio\">
        <xsd:annotation>
          <xsd:documentation>Indicates a radio button object.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"radiobuttonmenuitem\">
        <xsd:annotation>
          <xsd:documentation>Indicates a menuitem with associated radio button.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rcdata\">
        <xsd:annotation>
          <xsd:documentation>Indicates raw data resources for an application.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"row\">
        <xsd:annotation>
          <xsd:documentation>Indicates a row in a table.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rtext\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC RTEXT control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"scrollpane\">
        <xsd:annotation>
          <xsd:documentation>Indicates a user navigable container used to show a portion of a document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"separator\">
        <xsd:annotation>
          <xsd:documentation>Indicates a generic divider object (e.g. menu group separator).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"shortcut\">
        <xsd:annotation>
          <xsd:documentation>Windows accelerators, shortcuts in resource or property files.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"spinner\">
        <xsd:annotation>
          <xsd:documentation>Indicates a UI control to indicate process activity but not progress.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"splitter\">
        <xsd:annotation>
          <xsd:documentation>Indicates a splitter bar.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"state3\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC STATE3 control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"statusbar\">
        <xsd:annotation>
          <xsd:documentation>Indicates a window for providing feedback to the users, like 'read-only', etc.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"string\">
        <xsd:annotation>
          <xsd:documentation>Indicates a string, for example an entry in a STRINGTABLE resource in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"tabcontrol\">
        <xsd:annotation>
          <xsd:documentation>Indicates a layers of controls with a tab to select layers.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"table\">
        <xsd:annotation>
          <xsd:documentation>Indicates a display and edits regular two-dimensional tables of cells.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"textbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a XUL textbox element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"togglebutton\">
        <xsd:annotation>
          <xsd:documentation>Indicates a UI button that can be toggled to on or off state.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"toolbar\">
        <xsd:annotation>
          <xsd:documentation>Indicates an array of controls, usually buttons.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"tooltip\">
        <xsd:annotation>
          <xsd:documentation>Indicates a pop up tool tip text.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"trackbar\">
        <xsd:annotation>
          <xsd:documentation>Indicates a bar with a pointer indicating a position within a certain range.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"tree\">
        <xsd:annotation>
          <xsd:documentation>Indicates a control that displays a set of hierarchical data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"uri\">
        <xsd:annotation>
          <xsd:documentation>Indicates a URI (URN or URL).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"userbutton\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC USERBUTTON control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"usercontrol\">
        <xsd:annotation>
          <xsd:documentation>Indicates a user-defined control like CONTROL control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"var\">
        <xsd:annotation>
          <xsd:documentation>Indicates the text of a variable.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"versioninfo\">
        <xsd:annotation>
          <xsd:documentation>Indicates version information about a resource like VERSIONINFO in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"vscrollbar\">
        <xsd:annotation>
          <xsd:documentation>Indicates a vertical scrollbar.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"window\">
        <xsd:annotation>
          <xsd:documentation>Indicates a graphical window.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"size-unitValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'size-unit'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"byte\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in 8-bit bytes.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"char\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in Unicode characters.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"col\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in columns. Used for HTML text area.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cm\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in centimeters.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"dlgunit\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in dialog units, as defined in Windows resources.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"em\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in 'font-size' units (as defined in CSS).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"ex\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in 'x-height' units (as defined in CSS).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"glyph\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in glyphs. A glyph is considered to be one or more combined Unicode characters that represent a single displayable text character. Sometimes referred to as a 'grapheme cluster'</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"in\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in inches.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"mm\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in millimeters.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"percent\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in percentage.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pixel\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in pixels.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"point\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in point.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"row\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in rows. Used for HTML text area.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"stateValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'state'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"final\">
        <xsd:annotation>
          <xsd:documentation>Indicates the terminating state.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"needs-adaptation\">
        <xsd:annotation>
          <xsd:documentation>Indicates only non-textual information needs adaptation.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"needs-l10n\">
        <xsd:annotation>
          <xsd:documentation>Indicates both text and non-textual information needs adaptation.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"needs-review-adaptation\">
        <xsd:annotation>
          <xsd:documentation>Indicates only non-textual information needs review.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"needs-review-l10n\">
        <xsd:annotation>
          <xsd:documentation>Indicates both text and non-textual information needs review.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"needs-review-translation\">
        <xsd:annotation>
          <xsd:documentation>Indicates that only the text of the item needs to be reviewed.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"needs-translation\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item needs to be translated.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"new\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item is new. For example, translation units that were not in a previous version of the document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"signed-off\">
        <xsd:annotation>
          <xsd:documentation>Indicates that changes are reviewed and approved.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"translated\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item has been translated.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"state-qualifierValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'state-qualifier'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"exact-match\">
        <xsd:annotation>
          <xsd:documentation>Indicates an exact match. An exact match occurs when a source text of a segment is exactly the same as the source text of a segment that was translated previously.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"fuzzy-match\">
        <xsd:annotation>
          <xsd:documentation>Indicates a fuzzy match. A fuzzy match occurs when a source text of a segment is very similar to the source text of a segment that was translated previously (e.g. when the difference is casing, a few changed words, white-space discripancy, etc.).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"id-match\">
        <xsd:annotation>
          <xsd:documentation>Indicates a match based on matching IDs (in addition to matching text).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"leveraged-glossary\">
        <xsd:annotation>
          <xsd:documentation>Indicates a translation derived from a glossary.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"leveraged-inherited\">
        <xsd:annotation>
          <xsd:documentation>Indicates a translation derived from existing translation.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"leveraged-mt\">
        <xsd:annotation>
          <xsd:documentation>Indicates a translation derived from machine translation.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"leveraged-repository\">
        <xsd:annotation>
          <xsd:documentation>Indicates a translation derived from a translation repository.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"leveraged-tm\">
        <xsd:annotation>
          <xsd:documentation>Indicates a translation derived from a translation memory.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"mt-suggestion\">
        <xsd:annotation>
          <xsd:documentation>Indicates the translation is suggested by machine translation.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rejected-grammar\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item has been rejected because of incorrect grammar.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rejected-inaccurate\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item has been rejected because it is incorrect.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rejected-length\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item has been rejected because it is too long or too short.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rejected-spelling\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item has been rejected because of incorrect spelling.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"tm-suggestion\">
        <xsd:annotation>
          <xsd:documentation>Indicates the translation is suggested by translation memory.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"unitValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'unit'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"word\">
        <xsd:annotation>
          <xsd:documentation>Refers to words.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"page\">
        <xsd:annotation>
          <xsd:documentation>Refers to pages.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"trans-unit\">
        <xsd:annotation>
          <xsd:documentation>Refers to &lt;trans-unit&gt; elements.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"bin-unit\">
        <xsd:annotation>
          <xsd:documentation>Refers to &lt;bin-unit&gt; elements.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"glyph\">
        <xsd:annotation>
          <xsd:documentation>Refers to glyphs.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"item\">
        <xsd:annotation>
          <xsd:documentation>Refers to &lt;trans-unit&gt; and/or &lt;bin-unit&gt; elements.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"instance\">
        <xsd:annotation>
          <xsd:documentation>Refers to the occurrences of instances defined by the count-type value.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"character\">
        <xsd:annotation>
          <xsd:documentation>Refers to characters.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"line\">
        <xsd:annotation>
          <xsd:documentation>Refers to lines.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"sentence\">
        <xsd:annotation>
          <xsd:documentation>Refers to sentences.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"paragraph\">
        <xsd:annotation>
          <xsd:documentation>Refers to paragraphs.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"segment\">
        <xsd:annotation>
          <xsd:documentation>Refers to segments.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"placeable\">
        <xsd:annotation>
          <xsd:documentation>Refers to placeables (inline elements).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"priorityValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'priority'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:positiveInteger\">
      <xsd:enumeration value=\"1\">
        <xsd:annotation>
          <xsd:documentation>Highest priority.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"2\">
        <xsd:annotation>
          <xsd:documentation>High priority.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"3\">
        <xsd:annotation>
          <xsd:documentation>High priority, but not as important as 2.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"4\">
        <xsd:annotation>
          <xsd:documentation>High priority, but not as important as 3.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"5\">
        <xsd:annotation>
          <xsd:documentation>Medium priority, but more important than 6.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"6\">
        <xsd:annotation>
          <xsd:documentation>Medium priority, but less important than 5.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"7\">
        <xsd:annotation>
          <xsd:documentation>Low priority, but more important than 8.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"8\">
        <xsd:annotation>
          <xsd:documentation>Low priority, but more important than 9.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"9\">
        <xsd:annotation>
          <xsd:documentation>Low priority.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"10\">
        <xsd:annotation>
          <xsd:documentation>Lowest priority.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"reformatValueYesNo\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"yes\">
        <xsd:annotation>
          <xsd:documentation>This value indicates that all properties can be reformatted. This value must be used alone.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"no\">
        <xsd:annotation>
          <xsd:documentation>This value indicates that no properties should be reformatted. This value must be used alone.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"reformatValueList\">
    <xsd:list>
      <xsd:simpleType>
        <xsd:union memberTypes=\"xlf:XTend\">
          <xsd:simpleType>
            <xsd:restriction base=\"xsd:string\">
              <xsd:enumeration value=\"coord\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that all information in the coord attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"coord-x\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the x information in the coord attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"coord-y\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the y information in the coord attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"coord-cx\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the cx information in the coord attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"coord-cy\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the cy information in the coord attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"font\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that all the information in the font attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"font-name\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the name information in the font attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"font-size\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the size information in the font attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"font-weight\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the weight information in the font attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"css-style\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the information in the css-style attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"style\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the information in the style attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"ex-style\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the information in the exstyle attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
            </xsd:restriction>
          </xsd:simpleType>
        </xsd:union>
      </xsd:simpleType>
    </xsd:list>
  </xsd:simpleType>
  <xsd:simpleType name=\"purposeValueList\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"information\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the context is informational in nature, specifying for example, how a term should be translated. Thus, should be displayed to anyone editing the XLIFF document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"location\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the context-group is used to specify where the term was found in the translatable source. Thus, it is not displayed.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"match\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the context information should be used during translation memory lookups. Thus, it is not displayed.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"alttranstypeValueList\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"proposal\">
        <xsd:annotation>
          <xsd:documentation>Represents a translation proposal from a translation memory or other resource.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"previous-version\">
        <xsd:annotation>
          <xsd:documentation>Represents a previous version of the target element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rejected\">
        <xsd:annotation>
          <xsd:documentation>Represents a rejected version of the target element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"reference\">
        <xsd:annotation>
          <xsd:documentation>Represents a translation to be used for reference purposes only, for example from a related product or a different language.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"accepted\">
        <xsd:annotation>
          <xsd:documentation>Represents a proposed translation that was used for the translation of the trans-unit, possibly modified.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <!-- Other Types -->
  <xsd:complexType name=\"ElemType_ExternalReference\">
    <xsd:choice>
      <xsd:element ref=\"xlf:internal-file\"/>
      <xsd:element ref=\"xlf:external-file\"/>
    </xsd:choice>
  </xsd:complexType>
  <xsd:simpleType name=\"AttrType_purpose\">
    <xsd:list>
      <xsd:simpleType>
        <xsd:union memberTypes=\"xlf:purposeValueList xlf:XTend\"/>
      </xsd:simpleType>
    </xsd:list>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_datatype\">
    <xsd:union memberTypes=\"xlf:datatypeValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_restype\">
    <xsd:union memberTypes=\"xlf:restypeValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_alttranstype\">
    <xsd:union memberTypes=\"xlf:alttranstypeValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_context-type\">
    <xsd:union memberTypes=\"xlf:context-typeValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_state\">
    <xsd:union memberTypes=\"xlf:stateValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_state-qualifier\">
    <xsd:union memberTypes=\"xlf:state-qualifierValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_count-type\">
    <xsd:union memberTypes=\"xlf:restypeValueList xlf:count-typeValueList xlf:datatypeValueList xlf:stateValueList xlf:state-qualifierValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_InlineDelimiters\">
    <xsd:union memberTypes=\"xlf:InlineDelimitersValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_InlinePlaceholders\">
    <xsd:union memberTypes=\"xlf:InlinePlaceholdersValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_size-unit\">
    <xsd:union memberTypes=\"xlf:size-unitValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_mtype\">
    <xsd:union memberTypes=\"xlf:mtypeValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_unit\">
    <xsd:union memberTypes=\"xlf:unitValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_priority\">
    <xsd:union memberTypes=\"xlf:priorityValueList\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_reformat\">
    <xsd:union memberTypes=\"xlf:reformatValueYesNo xlf:reformatValueList\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_YesNo\">
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"yes\"/>
      <xsd:enumeration value=\"no\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_Position\">
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"open\"/>
      <xsd:enumeration value=\"close\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_assoc\">
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"preceding\"/>
      <xsd:enumeration value=\"following\"/>
      <xsd:enumeration value=\"both\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_annotates\">
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"source\"/>
      <xsd:enumeration value=\"target\"/>
      <xsd:enumeration value=\"general\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_Coordinates\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'coord'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:string\">
      <xsd:pattern value=\"(-?\\d+|#);(-?\\d+|#);(-?\\d+|#);(-?\\d+|#)\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_Version\">
    <xsd:annotation>
      <xsd:documentation>Version values: 1.0 and 1.1 are allowed for backward compatibility.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"1.2\"/>
      <xsd:enumeration value=\"1.1\"/>
      <xsd:enumeration value=\"1.0\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <!-- Groups -->
  <xsd:group name=\"ElemGroup_TextContent\">
    <xsd:choice>
      <xsd:element ref=\"xlf:g\"/>
      <xsd:element ref=\"xlf:bpt\"/>
      <xsd:element ref=\"xlf:ept\"/>
      <xsd:element ref=\"xlf:ph\"/>
      <xsd:element ref=\"xlf:it\"/>
      <xsd:element ref=\"xlf:mrk\"/>
      <xsd:element ref=\"xlf:x\"/>
      <xsd:element ref=\"xlf:bx\"/>
      <xsd:element ref=\"xlf:ex\"/>
    </xsd:choice>
  </xsd:group>
  <xsd:attributeGroup name=\"AttrGroup_TextContent\">
    <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\"/>
    <xsd:attribute name=\"xid\" type=\"xsd:string\" use=\"optional\"/>
    <xsd:attribute name=\"equiv-text\" type=\"xsd:string\" use=\"optional\"/>
    <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
  </xsd:attributeGroup>
  <!-- XLIFF Structure -->
  <xsd:element name=\"xliff\">
    <xsd:complexType>
      <xsd:sequence maxOccurs=\"unbounded\">
        <xsd:any maxOccurs=\"unbounded\" minOccurs=\"0\" namespace=\"##other\" processContents=\"strict\"/>
        <xsd:element ref=\"xlf:file\"/>
      </xsd:sequence>
      <xsd:attribute name=\"version\" type=\"xlf:AttrType_Version\" use=\"required\"/>
      <xsd:attribute ref=\"xml:lang\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"file\">
    <xsd:complexType>
      <xsd:sequence>
        <xsd:element minOccurs=\"0\" ref=\"xlf:header\"/>
        <xsd:element ref=\"xlf:body\"/>
      </xsd:sequence>
      <xsd:attribute name=\"original\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"source-language\" type=\"xsd:language\" use=\"required\"/>
      <xsd:attribute name=\"datatype\" type=\"xlf:AttrType_datatype\" use=\"required\"/>
      <xsd:attribute name=\"tool-id\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"date\" type=\"xsd:dateTime\" use=\"optional\"/>
      <xsd:attribute ref=\"xml:space\" use=\"optional\"/>
      <xsd:attribute name=\"category\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"target-language\" type=\"xsd:language\" use=\"optional\"/>
      <xsd:attribute name=\"product-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"product-version\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"build-num\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
    <xsd:unique name=\"U_group_id\">
      <xsd:selector xpath=\".//xlf:group\"/>
      <xsd:field xpath=\"@id\"/>
    </xsd:unique>
    <xsd:key name=\"K_unit_id\">
      <xsd:selector xpath=\".//xlf:trans-unit|.//xlf:bin-unit\"/>
      <xsd:field xpath=\"@id\"/>
    </xsd:key>
    <xsd:keyref name=\"KR_unit_id\" refer=\"xlf:K_unit_id\">
      <xsd:selector xpath=\".//bpt|.//ept|.//it|.//ph|.//g|.//x|.//bx|.//ex|.//sub\"/>
      <xsd:field xpath=\"@xid\"/>
    </xsd:keyref>
    <xsd:key name=\"K_tool-id\">
      <xsd:selector xpath=\"xlf:header/xlf:tool\"/>
      <xsd:field xpath=\"@tool-id\"/>
    </xsd:key>
    <xsd:keyref name=\"KR_file_tool-id\" refer=\"xlf:K_tool-id\">
      <xsd:selector xpath=\".\"/>
      <xsd:field xpath=\"@tool-id\"/>
    </xsd:keyref>
    <xsd:keyref name=\"KR_phase_tool-id\" refer=\"xlf:K_tool-id\">
      <xsd:selector xpath=\"xlf:header/xlf:phase-group/xlf:phase\"/>
      <xsd:field xpath=\"@tool-id\"/>
    </xsd:keyref>
    <xsd:keyref name=\"KR_alt-trans_tool-id\" refer=\"xlf:K_tool-id\">
      <xsd:selector xpath=\".//xlf:trans-unit/xlf:alt-trans\"/>
      <xsd:field xpath=\"@tool-id\"/>
    </xsd:keyref>
    <xsd:key name=\"K_count-group_name\">
      <xsd:selector xpath=\".//xlf:count-group\"/>
      <xsd:field xpath=\"@name\"/>
    </xsd:key>
    <xsd:unique name=\"U_context-group_name\">
      <xsd:selector xpath=\".//xlf:context-group\"/>
      <xsd:field xpath=\"@name\"/>
    </xsd:unique>
    <xsd:key name=\"K_phase-name\">
      <xsd:selector xpath=\"xlf:header/xlf:phase-group/xlf:phase\"/>
      <xsd:field xpath=\"@phase-name\"/>
    </xsd:key>
    <xsd:keyref name=\"KR_phase-name\" refer=\"xlf:K_phase-name\">
      <xsd:selector xpath=\".//xlf:count|.//xlf:trans-unit|.//xlf:target|.//bin-unit|.//bin-target\"/>
      <xsd:field xpath=\"@phase-name\"/>
    </xsd:keyref>
    <xsd:unique name=\"U_uid\">
      <xsd:selector xpath=\".//xlf:external-file\"/>
      <xsd:field xpath=\"@uid\"/>
    </xsd:unique>
  </xsd:element>
  <xsd:element name=\"header\">
    <xsd:complexType>
      <xsd:sequence>
        <xsd:element minOccurs=\"0\" name=\"skl\" type=\"xlf:ElemType_ExternalReference\"/>
        <xsd:element minOccurs=\"0\" ref=\"xlf:phase-group\"/>
        <xsd:choice maxOccurs=\"unbounded\" minOccurs=\"0\">
          <xsd:element name=\"glossary\" type=\"xlf:ElemType_ExternalReference\"/>
          <xsd:element name=\"reference\" type=\"xlf:ElemType_ExternalReference\"/>
          <xsd:element ref=\"xlf:count-group\"/>
          <xsd:element ref=\"xlf:note\"/>
          <xsd:element ref=\"xlf:tool\"/>
        </xsd:choice>
        <xsd:any maxOccurs=\"unbounded\" minOccurs=\"0\" namespace=\"##other\" processContents=\"strict\"/>
      </xsd:sequence>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"internal-file\">
    <xsd:complexType>
      <xsd:simpleContent>
        <xsd:extension base=\"xsd:string\">
          <xsd:attribute name=\"form\" type=\"xsd:string\"/>
          <xsd:attribute name=\"crc\" type=\"xsd:NMTOKEN\"/>
        </xsd:extension>
      </xsd:simpleContent>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"external-file\">
    <xsd:complexType>
      <xsd:attribute name=\"href\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:NMTOKEN\"/>
      <xsd:attribute name=\"uid\" type=\"xsd:NMTOKEN\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"note\">
    <xsd:complexType>
      <xsd:simpleContent>
        <xsd:extension base=\"xsd:string\">
          <xsd:attribute ref=\"xml:lang\" use=\"optional\"/>
          <xsd:attribute default=\"1\" name=\"priority\" type=\"xlf:AttrType_priority\" use=\"optional\"/>
          <xsd:attribute name=\"from\" type=\"xsd:string\" use=\"optional\"/>
          <xsd:attribute default=\"general\" name=\"annotates\" type=\"xlf:AttrType_annotates\" use=\"optional\"/>
        </xsd:extension>
      </xsd:simpleContent>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"phase-group\">
    <xsd:complexType>
      <xsd:sequence maxOccurs=\"unbounded\">
        <xsd:element ref=\"xlf:phase\"/>
      </xsd:sequence>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"phase\">
    <xsd:complexType>
      <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element ref=\"xlf:note\"/>
      </xsd:sequence>
      <xsd:attribute name=\"phase-name\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"process-name\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"company-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"tool-id\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"date\" type=\"xsd:dateTime\" use=\"optional\"/>
      <xsd:attribute name=\"job-id\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"contact-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"contact-email\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"contact-phone\" type=\"xsd:string\" use=\"optional\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"count-group\">
    <xsd:complexType>
      <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element ref=\"xlf:count\"/>
      </xsd:sequence>
      <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"count\">
    <xsd:complexType>
      <xsd:simpleContent>
        <xsd:extension base=\"xsd:string\">
          <xsd:attribute name=\"count-type\" type=\"xlf:AttrType_count-type\" use=\"optional\"/>
          <xsd:attribute name=\"phase-name\" type=\"xsd:string\" use=\"optional\"/>
          <xsd:attribute default=\"word\" name=\"unit\" type=\"xlf:AttrType_unit\" use=\"optional\"/>
        </xsd:extension>
      </xsd:simpleContent>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"context-group\">
    <xsd:complexType>
      <xsd:sequence maxOccurs=\"unbounded\">
        <xsd:element ref=\"xlf:context\"/>
      </xsd:sequence>
      <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"purpose\" type=\"xlf:AttrType_purpose\" use=\"optional\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"context\">
    <xsd:complexType>
      <xsd:simpleContent>
        <xsd:extension base=\"xsd:string\">
          <xsd:attribute name=\"context-type\" type=\"xlf:AttrType_context-type\" use=\"required\"/>
          <xsd:attribute default=\"no\" name=\"match-mandatory\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
          <xsd:attribute name=\"crc\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
        </xsd:extension>
      </xsd:simpleContent>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"tool\">
    <xsd:complexType mixed=\"true\">
      <xsd:sequence>
        <xsd:any namespace=\"##any\" processContents=\"strict\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      </xsd:sequence>
      <xsd:attribute name=\"tool-id\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"tool-name\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"tool-version\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"tool-company\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"body\">
    <xsd:complexType>
      <xsd:choice maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:group\"/>
        <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:trans-unit\"/>
        <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:bin-unit\"/>
      </xsd:choice>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"group\">
    <xsd:complexType>
      <xsd:sequence>
        <xsd:sequence>
          <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:context-group\"/>
          <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:count-group\"/>
          <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:note\"/>
          <xsd:any maxOccurs=\"unbounded\" minOccurs=\"0\" namespace=\"##other\" processContents=\"strict\"/>
        </xsd:sequence>
        <xsd:choice maxOccurs=\"unbounded\">
          <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:group\"/>
          <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:trans-unit\"/>
          <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:bin-unit\"/>
        </xsd:choice>
      </xsd:sequence>
      <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"datatype\" type=\"xlf:AttrType_datatype\" use=\"optional\"/>
      <xsd:attribute default=\"default\" ref=\"xml:space\" use=\"optional\"/>
      <xsd:attribute name=\"restype\" type=\"xlf:AttrType_restype\" use=\"optional\"/>
      <xsd:attribute name=\"resname\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"extradata\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"extype\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"help-id\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"menu\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"menu-option\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"menu-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"coord\" type=\"xlf:AttrType_Coordinates\" use=\"optional\"/>
      <xsd:attribute name=\"font\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"css-style\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"style\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"exstyle\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"translate\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"reformat\" type=\"xlf:AttrType_reformat\" use=\"optional\"/>
      <xsd:attribute default=\"pixel\" name=\"size-unit\" type=\"xlf:AttrType_size-unit\" use=\"optional\"/>
      <xsd:attribute name=\"maxwidth\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"minwidth\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"maxheight\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"minheight\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"maxbytes\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"minbytes\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"charclass\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute default=\"no\" name=\"merged-trans\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"trans-unit\">
    <xsd:complexType>
      <xsd:sequence>
        <xsd:element ref=\"xlf:source\"/>
        <xsd:element minOccurs=\"0\" ref=\"xlf:seg-source\"/>
        <xsd:element minOccurs=\"0\" ref=\"xlf:target\"/>
        <xsd:choice maxOccurs=\"unbounded\" minOccurs=\"0\">
          <xsd:element ref=\"xlf:context-group\"/>
          <xsd:element ref=\"xlf:count-group\"/>
          <xsd:element ref=\"xlf:note\"/>
          <xsd:element ref=\"xlf:alt-trans\"/>
        </xsd:choice>
        <xsd:any maxOccurs=\"unbounded\" minOccurs=\"0\" namespace=\"##other\" processContents=\"strict\"/>
      </xsd:sequence>
      <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"approved\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"translate\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"reformat\" type=\"xlf:AttrType_reformat\" use=\"optional\"/>
      <xsd:attribute default=\"default\" ref=\"xml:space\" use=\"optional\"/>
      <xsd:attribute name=\"datatype\" type=\"xlf:AttrType_datatype\" use=\"optional\"/>
      <xsd:attribute name=\"phase-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"restype\" type=\"xlf:AttrType_restype\" use=\"optional\"/>
      <xsd:attribute name=\"resname\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"extradata\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"extype\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"help-id\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"menu\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"menu-option\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"menu-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"coord\" type=\"xlf:AttrType_Coordinates\" use=\"optional\"/>
      <xsd:attribute name=\"font\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"css-style\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"style\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"exstyle\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute default=\"pixel\" name=\"size-unit\" type=\"xlf:AttrType_size-unit\" use=\"optional\"/>
      <xsd:attribute name=\"maxwidth\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"minwidth\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"maxheight\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"minheight\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"maxbytes\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"minbytes\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"charclass\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"merged-trans\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
    <xsd:unique name=\"U_tu_segsrc_mid\">
      <xsd:selector xpath=\"./xlf:seg-source/xlf:mrk\"/>
      <xsd:field xpath=\"@mid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_tu_segsrc_mid\" refer=\"xlf:U_tu_segsrc_mid\">
      <xsd:selector xpath=\"./xlf:target/xlf:mrk|./xlf:alt-trans\"/>
      <xsd:field xpath=\"@mid\"/>
    </xsd:keyref>
  </xsd:element>
  <xsd:element name=\"source\">
    <xsd:complexType mixed=\"true\">
      <xsd:group maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:ElemGroup_TextContent\"/>
      <xsd:attribute ref=\"xml:lang\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
    <xsd:unique name=\"U_source_bpt_rid\">
      <xsd:selector xpath=\".//xlf:bpt\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_source_ept_rid\" refer=\"xlf:U_source_bpt_rid\">
      <xsd:selector xpath=\".//xlf:ept\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:keyref>
    <xsd:unique name=\"U_source_bx_rid\">
      <xsd:selector xpath=\".//xlf:bx\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_source_ex_rid\" refer=\"xlf:U_source_bx_rid\">
      <xsd:selector xpath=\".//xlf:ex\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:keyref>
  </xsd:element>
  <xsd:element name=\"seg-source\">
    <xsd:complexType mixed=\"true\">
      <xsd:group maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:ElemGroup_TextContent\"/>
      <xsd:attribute ref=\"xml:lang\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
    <xsd:unique name=\"U_segsrc_bpt_rid\">
      <xsd:selector xpath=\".//xlf:bpt\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_segsrc_ept_rid\" refer=\"xlf:U_segsrc_bpt_rid\">
      <xsd:selector xpath=\".//xlf:ept\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:keyref>
    <xsd:unique name=\"U_segsrc_bx_rid\">
      <xsd:selector xpath=\".//xlf:bx\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_segsrc_ex_rid\" refer=\"xlf:U_segsrc_bx_rid\">
      <xsd:selector xpath=\".//xlf:ex\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:keyref>
  </xsd:element>
  <xsd:element name=\"target\">
    <xsd:complexType mixed=\"true\">
      <xsd:group maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:ElemGroup_TextContent\"/>
      <xsd:attribute name=\"state\" type=\"xlf:AttrType_state\" use=\"optional\"/>
      <xsd:attribute name=\"state-qualifier\" type=\"xlf:AttrType_state-qualifier\" use=\"optional\"/>
      <xsd:attribute name=\"phase-name\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute ref=\"xml:lang\" use=\"optional\"/>
      <xsd:attribute name=\"resname\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"coord\" type=\"xlf:AttrType_Coordinates\" use=\"optional\"/>
      <xsd:attribute name=\"font\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"css-style\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"style\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"exstyle\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"equiv-trans\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
    <xsd:unique name=\"U_target_bpt_rid\">
      <xsd:selector xpath=\".//xlf:bpt\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_target_ept_rid\" refer=\"xlf:U_target_bpt_rid\">
      <xsd:selector xpath=\".//xlf:ept\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:keyref>
    <xsd:unique name=\"U_target_bx_rid\">
      <xsd:selector xpath=\".//xlf:bx\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_target_ex_rid\" refer=\"xlf:U_target_bx_rid\">
      <xsd:selector xpath=\".//xlf:ex\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:keyref>
  </xsd:element>
  <xsd:element name=\"alt-trans\">
    <xsd:complexType>
      <xsd:sequence>
        <xsd:element minOccurs=\"0\" ref=\"xlf:source\"/>
        <xsd:element minOccurs=\"0\" ref=\"xlf:seg-source\"/>
        <xsd:element maxOccurs=\"1\" ref=\"xlf:target\"/>
        <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:context-group\"/>
        <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:note\"/>
        <xsd:any maxOccurs=\"unbounded\" minOccurs=\"0\" namespace=\"##other\" processContents=\"strict\"/>
      </xsd:sequence>
      <xsd:attribute name=\"match-quality\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"tool-id\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute ref=\"xml:lang\" use=\"optional\"/>
      <xsd:attribute name=\"origin\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"datatype\" type=\"xlf:AttrType_datatype\" use=\"optional\"/>
      <xsd:attribute default=\"default\" ref=\"xml:space\" use=\"optional\"/>
      <xsd:attribute name=\"restype\" type=\"xlf:AttrType_restype\" use=\"optional\"/>
      <xsd:attribute name=\"resname\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"extradata\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"extype\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"help-id\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"menu\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"menu-option\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"menu-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"mid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"coord\" type=\"xlf:AttrType_Coordinates\" use=\"optional\"/>
      <xsd:attribute name=\"font\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"css-style\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"style\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"exstyle\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"phase-name\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute default=\"proposal\" name=\"alttranstype\" type=\"xlf:AttrType_alttranstype\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
    <xsd:unique name=\"U_at_segsrc_mid\">
      <xsd:selector xpath=\"./xlf:seg-source/xlf:mrk\"/>
      <xsd:field xpath=\"@mid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_at_segsrc_mid\" refer=\"xlf:U_at_segsrc_mid\">
      <xsd:selector xpath=\"./xlf:target/xlf:mrk\"/>
      <xsd:field xpath=\"@mid\"/>
    </xsd:keyref>
  </xsd:element>
  <xsd:element name=\"bin-unit\">
    <xsd:complexType>
      <xsd:sequence>
        <xsd:element ref=\"xlf:bin-source\"/>
        <xsd:element minOccurs=\"0\" ref=\"xlf:bin-target\"/>
        <xsd:choice maxOccurs=\"unbounded\" minOccurs=\"0\">
          <xsd:element ref=\"xlf:context-group\"/>
          <xsd:element ref=\"xlf:count-group\"/>
          <xsd:element ref=\"xlf:note\"/>
          <xsd:element ref=\"xlf:trans-unit\"/>
        </xsd:choice>
        <xsd:any maxOccurs=\"unbounded\" minOccurs=\"0\" namespace=\"##other\" processContents=\"strict\"/>
      </xsd:sequence>
      <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"mime-type\" type=\"xlf:mime-typeValueList\" use=\"required\"/>
      <xsd:attribute name=\"approved\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"translate\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"reformat\" type=\"xlf:AttrType_reformat\" use=\"optional\"/>
      <xsd:attribute name=\"restype\" type=\"xlf:AttrType_restype\" use=\"optional\"/>
      <xsd:attribute name=\"resname\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"phase-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"bin-source\">
    <xsd:complexType>
      <xsd:choice>
        <xsd:element ref=\"xlf:internal-file\"/>
        <xsd:element ref=\"xlf:external-file\"/>
      </xsd:choice>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"bin-target\">
    <xsd:complexType>
      <xsd:choice>
        <xsd:element ref=\"xlf:internal-file\"/>
        <xsd:element ref=\"xlf:external-file\"/>
      </xsd:choice>
      <xsd:attribute name=\"mime-type\" type=\"xlf:mime-typeValueList\" use=\"optional\"/>
      <xsd:attribute name=\"state\" type=\"xlf:AttrType_state\" use=\"optional\"/>
      <xsd:attribute name=\"state-qualifier\" type=\"xlf:AttrType_state-qualifier\" use=\"optional\"/>
      <xsd:attribute name=\"phase-name\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"restype\" type=\"xlf:AttrType_restype\" use=\"optional\"/>
      <xsd:attribute name=\"resname\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
  <!-- Element for inline codes -->
  <xsd:element name=\"g\">
    <xsd:complexType mixed=\"true\">
      <xsd:group maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:ElemGroup_TextContent\"/>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlineDelimiters\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"clone\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"x\">
    <xsd:complexType>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlinePlaceholders\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"clone\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"bx\">
    <xsd:complexType>
      <xsd:attribute name=\"rid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlineDelimiters\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"clone\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"ex\">
    <xsd:complexType>
      <xsd:attribute name=\"rid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"ph\">
    <xsd:complexType mixed=\"true\">
      <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element ref=\"xlf:sub\"/>
      </xsd:sequence>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlinePlaceholders\" use=\"optional\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"assoc\" type=\"xlf:AttrType_assoc\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"bpt\">
    <xsd:complexType mixed=\"true\">
      <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element ref=\"xlf:sub\"/>
      </xsd:sequence>
      <xsd:attribute name=\"rid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlineDelimiters\" use=\"optional\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"ept\">
    <xsd:complexType mixed=\"true\">
      <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element ref=\"xlf:sub\"/>
      </xsd:sequence>
      <xsd:attribute name=\"rid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"it\">
    <xsd:complexType mixed=\"true\">
      <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element ref=\"xlf:sub\"/>
      </xsd:sequence>
      <xsd:attribute name=\"pos\" type=\"xlf:AttrType_Position\" use=\"required\"/>
      <xsd:attribute name=\"rid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlineDelimiters\" use=\"optional\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"sub\">
    <xsd:complexType mixed=\"true\">
      <xsd:group maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:ElemGroup_TextContent\"/>
      <xsd:attribute name=\"datatype\" type=\"xlf:AttrType_datatype\" use=\"optional\"/>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlineDelimiters\" use=\"optional\"/>
      <xsd:attribute name=\"xid\" type=\"xsd:string\" use=\"optional\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"mrk\">
    <xsd:complexType mixed=\"true\">
      <xsd:group maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:ElemGroup_TextContent\"/>
      <xsd:attribute name=\"mtype\" type=\"xlf:AttrType_mtype\" use=\"required\"/>
      <xsd:attribute name=\"mid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"comment\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Resources/schemas/xliff-core-1.2-strict.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!--

May-19-2004:
- Changed the <choice> for ElemType_header, moving minOccurs=\"0\" maxOccurs=\"unbounded\" from its elements
to <choice> itself.
- Added <choice> for ElemType_trans-unit to allow \"any order\" for <context-group>, <count-group>, <prop-group>, <note>, and
<alt-trans>.

Oct-2005
- updated version info to 1.2
- equiv-trans attribute to <trans-unit> element
- merged-trans attribute for <group> element
- Add the <seg-source> element as optional in the <trans-unit> and <alt-trans> content models, at the same level as <source>
- Create a new value \"seg\" for the mtype attribute of the <mrk> element
- Add mid as an optional attribute for the <alt-trans> element

Nov-14-2005
- Changed name attribute for <context-group> from required to optional
- Added extension point at <xliff>

Jan-9-2006
- Added alttranstype type attribute to <alt-trans>, and values

Jan-10-2006
- Corrected error with overwritten purposeValueList
- Corrected name=\"AttrType_Version\",  attribute should have been \"name\"

-->
<xsd:schema xmlns:xlf=\"urn:oasis:names:tc:xliff:document:1.2\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" elementFormDefault=\"qualified\" targetNamespace=\"urn:oasis:names:tc:xliff:document:1.2\" xml:lang=\"en\">
  <!-- Import for xml:lang and xml:space -->
  <xsd:import namespace=\"http://www.w3.org/XML/1998/namespace\" schemaLocation=\"http://www.w3.org/2001/xml.xsd\"/>
  <!-- Attributes Lists -->
  <xsd:simpleType name=\"XTend\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:pattern value=\"x-[^\\s]+\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"context-typeValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'context-type'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"database\">
        <xsd:annotation>
          <xsd:documentation>Indicates a database content.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"element\">
        <xsd:annotation>
          <xsd:documentation>Indicates the content of an element within an XML document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"elementtitle\">
        <xsd:annotation>
          <xsd:documentation>Indicates the name of an element within an XML document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"linenumber\">
        <xsd:annotation>
          <xsd:documentation>Indicates the line number from the sourcefile (see context-type=\"sourcefile\") where the &lt;source&gt; is found.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"numparams\">
        <xsd:annotation>
          <xsd:documentation>Indicates a the number of parameters contained within the &lt;source&gt;.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"paramnotes\">
        <xsd:annotation>
          <xsd:documentation>Indicates notes pertaining to the parameters in the &lt;source&gt;.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"record\">
        <xsd:annotation>
          <xsd:documentation>Indicates the content of a record within a database.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"recordtitle\">
        <xsd:annotation>
          <xsd:documentation>Indicates the name of a record within a database.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"sourcefile\">
        <xsd:annotation>
          <xsd:documentation>Indicates the original source file in the case that multiple files are merged to form the original file from which the XLIFF file is created. This differs from the original &lt;file&gt; attribute in that this sourcefile is one of many that make up that file.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"count-typeValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'count-type'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"num-usages\">
        <xsd:annotation>
          <xsd:documentation>Indicates the count units are items that are used X times in a certain context; example: this is a reusable text unit which is used 42 times in other texts.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"repetition\">
        <xsd:annotation>
          <xsd:documentation>Indicates the count units are translation units existing already in the same document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"total\">
        <xsd:annotation>
          <xsd:documentation>Indicates a total count.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"InlineDelimitersValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'ctype' when used other elements than &lt;ph&gt; or &lt;x&gt;.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"bold\">
        <xsd:annotation>
          <xsd:documentation>Indicates a run of bolded text.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"italic\">
        <xsd:annotation>
          <xsd:documentation>Indicates a run of text in italics.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"underlined\">
        <xsd:annotation>
          <xsd:documentation>Indicates a run of underlined text.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"link\">
        <xsd:annotation>
          <xsd:documentation>Indicates a run of hyper-text.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"InlinePlaceholdersValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'ctype' when used with &lt;ph&gt; or &lt;x&gt;.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"image\">
        <xsd:annotation>
          <xsd:documentation>Indicates a inline image.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pb\">
        <xsd:annotation>
          <xsd:documentation>Indicates a page break.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"lb\">
        <xsd:annotation>
          <xsd:documentation>Indicates a line break.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"mime-typeValueList\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:pattern value=\"(text|multipart|message|application|image|audio|video|model)(/.+)*\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"datatypeValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'datatype'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"asp\">
        <xsd:annotation>
          <xsd:documentation>Indicates Active Server Page data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"c\">
        <xsd:annotation>
          <xsd:documentation>Indicates C source file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cdf\">
        <xsd:annotation>
          <xsd:documentation>Indicates Channel Definition Format (CDF) data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cfm\">
        <xsd:annotation>
          <xsd:documentation>Indicates ColdFusion data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cpp\">
        <xsd:annotation>
          <xsd:documentation>Indicates C++ source file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"csharp\">
        <xsd:annotation>
          <xsd:documentation>Indicates C-Sharp data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cstring\">
        <xsd:annotation>
          <xsd:documentation>Indicates strings from C, ASM, and driver files data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"csv\">
        <xsd:annotation>
          <xsd:documentation>Indicates comma-separated values data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"database\">
        <xsd:annotation>
          <xsd:documentation>Indicates database data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"documentfooter\">
        <xsd:annotation>
          <xsd:documentation>Indicates portions of document that follows data and contains metadata.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"documentheader\">
        <xsd:annotation>
          <xsd:documentation>Indicates portions of document that precedes data and contains metadata.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"filedialog\">
        <xsd:annotation>
          <xsd:documentation>Indicates data from standard UI file operations dialogs (e.g., Open, Save, Save As, Export, Import).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"form\">
        <xsd:annotation>
          <xsd:documentation>Indicates standard user input screen data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"html\">
        <xsd:annotation>
          <xsd:documentation>Indicates HyperText Markup Language (HTML) data - document instance.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"htmlbody\">
        <xsd:annotation>
          <xsd:documentation>Indicates content within an HTML document’s &lt;body&gt; element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"ini\">
        <xsd:annotation>
          <xsd:documentation>Indicates Windows INI file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"interleaf\">
        <xsd:annotation>
          <xsd:documentation>Indicates Interleaf data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"javaclass\">
        <xsd:annotation>
          <xsd:documentation>Indicates Java source file data (extension '.java').</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"javapropertyresourcebundle\">
        <xsd:annotation>
          <xsd:documentation>Indicates Java property resource bundle data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"javalistresourcebundle\">
        <xsd:annotation>
          <xsd:documentation>Indicates Java list resource bundle data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"javascript\">
        <xsd:annotation>
          <xsd:documentation>Indicates JavaScript source file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"jscript\">
        <xsd:annotation>
          <xsd:documentation>Indicates JScript source file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"layout\">
        <xsd:annotation>
          <xsd:documentation>Indicates information relating to formatting.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"lisp\">
        <xsd:annotation>
          <xsd:documentation>Indicates LISP source file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"margin\">
        <xsd:annotation>
          <xsd:documentation>Indicates information relating to margin formats.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"menufile\">
        <xsd:annotation>
          <xsd:documentation>Indicates a file containing menu.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"messagefile\">
        <xsd:annotation>
          <xsd:documentation>Indicates numerically identified string table.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"mif\">
        <xsd:annotation>
          <xsd:documentation>Indicates Maker Interchange Format (MIF) data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"mimetype\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the datatype attribute value is a MIME Type value and is defined in the mime-type attribute.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"mo\">
        <xsd:annotation>
          <xsd:documentation>Indicates GNU Machine Object data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"msglib\">
        <xsd:annotation>
          <xsd:documentation>Indicates Message Librarian strings created by Novell's Message Librarian Tool.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pagefooter\">
        <xsd:annotation>
          <xsd:documentation>Indicates information to be displayed at the bottom of each page of a document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pageheader\">
        <xsd:annotation>
          <xsd:documentation>Indicates information to be displayed at the top of each page of a document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"parameters\">
        <xsd:annotation>
          <xsd:documentation>Indicates a list of property values (e.g., settings within INI files or preferences dialog).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pascal\">
        <xsd:annotation>
          <xsd:documentation>Indicates Pascal source file data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"php\">
        <xsd:annotation>
          <xsd:documentation>Indicates Hypertext Preprocessor data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"plaintext\">
        <xsd:annotation>
          <xsd:documentation>Indicates plain text file (no formatting other than, possibly, wrapping).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"po\">
        <xsd:annotation>
          <xsd:documentation>Indicates GNU Portable Object file.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"report\">
        <xsd:annotation>
          <xsd:documentation>Indicates dynamically generated user defined document. e.g. Oracle Report, Crystal Report, etc.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"resources\">
        <xsd:annotation>
          <xsd:documentation>Indicates Windows .NET binary resources.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"resx\">
        <xsd:annotation>
          <xsd:documentation>Indicates Windows .NET Resources.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rtf\">
        <xsd:annotation>
          <xsd:documentation>Indicates Rich Text Format (RTF) data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"sgml\">
        <xsd:annotation>
          <xsd:documentation>Indicates Standard Generalized Markup Language (SGML) data - document instance.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"sgmldtd\">
        <xsd:annotation>
          <xsd:documentation>Indicates Standard Generalized Markup Language (SGML) data - Document Type Definition (DTD).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"svg\">
        <xsd:annotation>
          <xsd:documentation>Indicates Scalable Vector Graphic (SVG) data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"vbscript\">
        <xsd:annotation>
          <xsd:documentation>Indicates VisualBasic Script source file.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"warning\">
        <xsd:annotation>
          <xsd:documentation>Indicates warning message.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"winres\">
        <xsd:annotation>
          <xsd:documentation>Indicates Windows (Win32) resources (i.e. resources extracted from an RC script, a message file, or a compiled file).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"xhtml\">
        <xsd:annotation>
          <xsd:documentation>Indicates Extensible HyperText Markup Language (XHTML) data - document instance.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"xml\">
        <xsd:annotation>
          <xsd:documentation>Indicates Extensible Markup Language (XML) data - document instance.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"xmldtd\">
        <xsd:annotation>
          <xsd:documentation>Indicates Extensible Markup Language (XML) data - Document Type Definition (DTD).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"xsl\">
        <xsd:annotation>
          <xsd:documentation>Indicates Extensible Stylesheet Language (XSL) data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"xul\">
        <xsd:annotation>
          <xsd:documentation>Indicates XUL elements.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"mtypeValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'mtype'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"abbrev\">
        <xsd:annotation>
          <xsd:documentation>Indicates the marked text is an abbreviation.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"abbreviated-form\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.8: A term resulting from the omission of any part of the full term while designating the same concept.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"abbreviation\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.8.1: An abbreviated form of a simple term resulting from the omission of some of its letters (e.g. 'adj.' for 'adjective').</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"acronym\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.8.4: An abbreviated form of a term made up of letters from the full form of a multiword term strung together into a sequence pronounced only syllabically (e.g. 'radar' for 'radio detecting and ranging').</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"appellation\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620: A proper-name term, such as the name of an agency or other proper entity.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"collocation\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.18.1: A recurrent word combination characterized by cohesion in that the components of the collocation must co-occur within an utterance or series of utterances, even though they do not necessarily have to maintain immediate proximity to one another.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"common-name\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.5: A synonym for an international scientific term that is used in general discourse in a given language.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"datetime\">
        <xsd:annotation>
          <xsd:documentation>Indicates the marked text is a date and/or time.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"equation\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.15: An expression used to represent a concept based on a statement that two mathematical expressions are, for instance, equal as identified by the equal sign (=), or assigned to one another by a similar sign.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"expanded-form\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.7: The complete representation of a term for which there is an abbreviated form.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"formula\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.14: Figures, symbols or the like used to express a concept briefly, such as a mathematical or chemical formula.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"head-term\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.1: The concept designation that has been chosen to head a terminological record.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"initialism\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.8.3: An abbreviated form of a term consisting of some of the initial letters of the words making up a multiword term or the term elements making up a compound term when these letters are pronounced individually (e.g. 'BSE' for 'bovine spongiform encephalopathy').</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"international-scientific-term\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.4: A term that is part of an international scientific nomenclature as adopted by an appropriate scientific body.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"internationalism\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.6: A term that has the same or nearly identical orthographic or phonemic form in many languages.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"logical-expression\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.16: An expression used to represent a concept based on mathematical or logical relations, such as statements of inequality, set relationships, Boolean operations, and the like.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"materials-management-unit\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.17: A unit to track object.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"name\">
        <xsd:annotation>
          <xsd:documentation>Indicates the marked text is a name.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"near-synonym\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.3: A term that represents the same or a very similar concept as another term in the same language, but for which interchangeability is limited to some contexts and inapplicable in others.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"part-number\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.17.2: A unique alphanumeric designation assigned to an object in a manufacturing system.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"phrase\">
        <xsd:annotation>
          <xsd:documentation>Indicates the marked text is a phrase.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"phraseological-unit\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.18: Any group of two or more words that form a unit, the meaning of which frequently cannot be deduced based on the combined sense of the words making up the phrase.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"protected\">
        <xsd:annotation>
          <xsd:documentation>Indicates the marked text should not be translated.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"romanized-form\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.12: A form of a term resulting from an operation whereby non-Latin writing systems are converted to the Latin alphabet.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"seg\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the marked text represents a segment.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"set-phrase\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.18.2: A fixed, lexicalized phrase.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"short-form\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.8.2: A variant of a multiword term that includes fewer words than the full form of the term (e.g. 'Group of Twenty-four' for 'Intergovernmental Group of Twenty-four on International Monetary Affairs').</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"sku\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.17.1: Stock keeping unit, an inventory item identified by a unique alphanumeric designation assigned to an object in an inventory control system.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"standard-text\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.19: A fixed chunk of recurring text.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"symbol\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.13: A designation of a concept by letters, numerals, pictograms or any combination thereof.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"synonym\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.2: Any term that represents the same or a very similar concept as the main entry term in a term entry.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"synonymous-phrase\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.18.3: Phraseological unit in a language that expresses the same semantic content as another phrase in that same language.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"term\">
        <xsd:annotation>
          <xsd:documentation>Indicates the marked text is a term.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"transcribed-form\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.11: A form of a term resulting from an operation whereby the characters of one writing system are represented by characters from another writing system, taking into account the pronunciation of the characters converted.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"transliterated-form\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.10: A form of a term resulting from an operation whereby the characters of an alphabetic writing system are represented by characters from another alphabetic writing system.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"truncated-term\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.8.5: An abbreviated form of a term resulting from the omission of one or more term elements or syllables (e.g. 'flu' for 'influenza').</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"variant\">
        <xsd:annotation>
          <xsd:documentation>ISO-12620 2.1.9: One of the alternate forms of a term.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"restypeValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'restype'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"auto3state\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC AUTO3STATE control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"autocheckbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC AUTOCHECKBOX control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"autoradiobutton\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC AUTORADIOBUTTON control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"bedit\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC BEDIT control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"bitmap\">
        <xsd:annotation>
          <xsd:documentation>Indicates a bitmap, for example a BITMAP resource in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"button\">
        <xsd:annotation>
          <xsd:documentation>Indicates a button object, for example a BUTTON control Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"caption\">
        <xsd:annotation>
          <xsd:documentation>Indicates a caption, such as the caption of a dialog box.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cell\">
        <xsd:annotation>
          <xsd:documentation>Indicates the cell in a table, for example the content of the &lt;td&gt; element in HTML.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"checkbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates check box object, for example a CHECKBOX control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"checkboxmenuitem\">
        <xsd:annotation>
          <xsd:documentation>Indicates a menu item with an associated checkbox.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"checkedlistbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a list box, but with a check-box for each item.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"colorchooser\">
        <xsd:annotation>
          <xsd:documentation>Indicates a color selection dialog.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"combobox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a combination of edit box and listbox object, for example a COMBOBOX control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"comboboxexitem\">
        <xsd:annotation>
          <xsd:documentation>Indicates an initialization entry of an extended combobox DLGINIT resource block. (code 0x1234).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"comboboxitem\">
        <xsd:annotation>
          <xsd:documentation>Indicates an initialization entry of a combobox DLGINIT resource block (code 0x0403).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"component\">
        <xsd:annotation>
          <xsd:documentation>Indicates a UI base class element that cannot be represented by any other element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"contextmenu\">
        <xsd:annotation>
          <xsd:documentation>Indicates a context menu.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"ctext\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC CTEXT control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cursor\">
        <xsd:annotation>
          <xsd:documentation>Indicates a cursor, for example a CURSOR resource in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"datetimepicker\">
        <xsd:annotation>
          <xsd:documentation>Indicates a date/time picker.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"defpushbutton\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC DEFPUSHBUTTON control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"dialog\">
        <xsd:annotation>
          <xsd:documentation>Indicates a dialog box.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"dlginit\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC DLGINIT resource block.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"edit\">
        <xsd:annotation>
          <xsd:documentation>Indicates an edit box object, for example an EDIT control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"file\">
        <xsd:annotation>
          <xsd:documentation>Indicates a filename.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"filechooser\">
        <xsd:annotation>
          <xsd:documentation>Indicates a file dialog.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"fn\">
        <xsd:annotation>
          <xsd:documentation>Indicates a footnote.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"font\">
        <xsd:annotation>
          <xsd:documentation>Indicates a font name.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"footer\">
        <xsd:annotation>
          <xsd:documentation>Indicates a footer.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"frame\">
        <xsd:annotation>
          <xsd:documentation>Indicates a frame object.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"grid\">
        <xsd:annotation>
          <xsd:documentation>Indicates a XUL grid element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"groupbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a groupbox object, for example a GROUPBOX control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"header\">
        <xsd:annotation>
          <xsd:documentation>Indicates a header item.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"heading\">
        <xsd:annotation>
          <xsd:documentation>Indicates a heading, such has the content of &lt;h1&gt;, &lt;h2&gt;, etc. in HTML.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"hedit\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC HEDIT control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"hscrollbar\">
        <xsd:annotation>
          <xsd:documentation>Indicates a horizontal scrollbar.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"icon\">
        <xsd:annotation>
          <xsd:documentation>Indicates an icon, for example an ICON resource in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"iedit\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC IEDIT control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"keywords\">
        <xsd:annotation>
          <xsd:documentation>Indicates keyword list, such as the content of the Keywords meta-data in HTML, or a K footnote in WinHelp RTF.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"label\">
        <xsd:annotation>
          <xsd:documentation>Indicates a label object.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"linklabel\">
        <xsd:annotation>
          <xsd:documentation>Indicates a label that is also a HTML link (not necessarily a URL).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"list\">
        <xsd:annotation>
          <xsd:documentation>Indicates a list (a group of list-items, for example an &lt;ol&gt; or &lt;ul&gt; element in HTML).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"listbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a listbox object, for example an LISTBOX control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"listitem\">
        <xsd:annotation>
          <xsd:documentation>Indicates an list item (an entry in a list).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"ltext\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC LTEXT control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"menu\">
        <xsd:annotation>
          <xsd:documentation>Indicates a menu (a group of menu-items).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"menubar\">
        <xsd:annotation>
          <xsd:documentation>Indicates a toolbar containing one or more tope level menus.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"menuitem\">
        <xsd:annotation>
          <xsd:documentation>Indicates a menu item (an entry in a menu).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"menuseparator\">
        <xsd:annotation>
          <xsd:documentation>Indicates a XUL menuseparator element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"message\">
        <xsd:annotation>
          <xsd:documentation>Indicates a message, for example an entry in a MESSAGETABLE resource in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"monthcalendar\">
        <xsd:annotation>
          <xsd:documentation>Indicates a calendar control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"numericupdown\">
        <xsd:annotation>
          <xsd:documentation>Indicates an edit box beside a spin control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"panel\">
        <xsd:annotation>
          <xsd:documentation>Indicates a catch all for rectangular areas.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"popupmenu\">
        <xsd:annotation>
          <xsd:documentation>Indicates a standalone menu not necessarily associated with a menubar.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pushbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a pushbox object, for example a PUSHBOX control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pushbutton\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC PUSHBUTTON control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"radio\">
        <xsd:annotation>
          <xsd:documentation>Indicates a radio button object.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"radiobuttonmenuitem\">
        <xsd:annotation>
          <xsd:documentation>Indicates a menuitem with associated radio button.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rcdata\">
        <xsd:annotation>
          <xsd:documentation>Indicates raw data resources for an application.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"row\">
        <xsd:annotation>
          <xsd:documentation>Indicates a row in a table.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rtext\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC RTEXT control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"scrollpane\">
        <xsd:annotation>
          <xsd:documentation>Indicates a user navigable container used to show a portion of a document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"separator\">
        <xsd:annotation>
          <xsd:documentation>Indicates a generic divider object (e.g. menu group separator).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"shortcut\">
        <xsd:annotation>
          <xsd:documentation>Windows accelerators, shortcuts in resource or property files.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"spinner\">
        <xsd:annotation>
          <xsd:documentation>Indicates a UI control to indicate process activity but not progress.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"splitter\">
        <xsd:annotation>
          <xsd:documentation>Indicates a splitter bar.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"state3\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC STATE3 control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"statusbar\">
        <xsd:annotation>
          <xsd:documentation>Indicates a window for providing feedback to the users, like 'read-only', etc.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"string\">
        <xsd:annotation>
          <xsd:documentation>Indicates a string, for example an entry in a STRINGTABLE resource in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"tabcontrol\">
        <xsd:annotation>
          <xsd:documentation>Indicates a layers of controls with a tab to select layers.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"table\">
        <xsd:annotation>
          <xsd:documentation>Indicates a display and edits regular two-dimensional tables of cells.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"textbox\">
        <xsd:annotation>
          <xsd:documentation>Indicates a XUL textbox element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"togglebutton\">
        <xsd:annotation>
          <xsd:documentation>Indicates a UI button that can be toggled to on or off state.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"toolbar\">
        <xsd:annotation>
          <xsd:documentation>Indicates an array of controls, usually buttons.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"tooltip\">
        <xsd:annotation>
          <xsd:documentation>Indicates a pop up tool tip text.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"trackbar\">
        <xsd:annotation>
          <xsd:documentation>Indicates a bar with a pointer indicating a position within a certain range.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"tree\">
        <xsd:annotation>
          <xsd:documentation>Indicates a control that displays a set of hierarchical data.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"uri\">
        <xsd:annotation>
          <xsd:documentation>Indicates a URI (URN or URL).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"userbutton\">
        <xsd:annotation>
          <xsd:documentation>Indicates a Windows RC USERBUTTON control.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"usercontrol\">
        <xsd:annotation>
          <xsd:documentation>Indicates a user-defined control like CONTROL control in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"var\">
        <xsd:annotation>
          <xsd:documentation>Indicates the text of a variable.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"versioninfo\">
        <xsd:annotation>
          <xsd:documentation>Indicates version information about a resource like VERSIONINFO in Windows.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"vscrollbar\">
        <xsd:annotation>
          <xsd:documentation>Indicates a vertical scrollbar.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"window\">
        <xsd:annotation>
          <xsd:documentation>Indicates a graphical window.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"size-unitValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'size-unit'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"byte\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in 8-bit bytes.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"char\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in Unicode characters.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"col\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in columns. Used for HTML text area.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"cm\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in centimeters.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"dlgunit\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in dialog units, as defined in Windows resources.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"em\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in 'font-size' units (as defined in CSS).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"ex\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in 'x-height' units (as defined in CSS).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"glyph\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in glyphs. A glyph is considered to be one or more combined Unicode characters that represent a single displayable text character. Sometimes referred to as a 'grapheme cluster'</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"in\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in inches.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"mm\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in millimeters.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"percent\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in percentage.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"pixel\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in pixels.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"point\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in point.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"row\">
        <xsd:annotation>
          <xsd:documentation>Indicates a size in rows. Used for HTML text area.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"stateValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'state'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"final\">
        <xsd:annotation>
          <xsd:documentation>Indicates the terminating state.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"needs-adaptation\">
        <xsd:annotation>
          <xsd:documentation>Indicates only non-textual information needs adaptation.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"needs-l10n\">
        <xsd:annotation>
          <xsd:documentation>Indicates both text and non-textual information needs adaptation.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"needs-review-adaptation\">
        <xsd:annotation>
          <xsd:documentation>Indicates only non-textual information needs review.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"needs-review-l10n\">
        <xsd:annotation>
          <xsd:documentation>Indicates both text and non-textual information needs review.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"needs-review-translation\">
        <xsd:annotation>
          <xsd:documentation>Indicates that only the text of the item needs to be reviewed.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"needs-translation\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item needs to be translated.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"new\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item is new. For example, translation units that were not in a previous version of the document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"signed-off\">
        <xsd:annotation>
          <xsd:documentation>Indicates that changes are reviewed and approved.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"translated\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item has been translated.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"state-qualifierValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'state-qualifier'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"exact-match\">
        <xsd:annotation>
          <xsd:documentation>Indicates an exact match. An exact match occurs when a source text of a segment is exactly the same as the source text of a segment that was translated previously.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"fuzzy-match\">
        <xsd:annotation>
          <xsd:documentation>Indicates a fuzzy match. A fuzzy match occurs when a source text of a segment is very similar to the source text of a segment that was translated previously (e.g. when the difference is casing, a few changed words, white-space discripancy, etc.).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"id-match\">
        <xsd:annotation>
          <xsd:documentation>Indicates a match based on matching IDs (in addition to matching text).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"leveraged-glossary\">
        <xsd:annotation>
          <xsd:documentation>Indicates a translation derived from a glossary.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"leveraged-inherited\">
        <xsd:annotation>
          <xsd:documentation>Indicates a translation derived from existing translation.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"leveraged-mt\">
        <xsd:annotation>
          <xsd:documentation>Indicates a translation derived from machine translation.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"leveraged-repository\">
        <xsd:annotation>
          <xsd:documentation>Indicates a translation derived from a translation repository.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"leveraged-tm\">
        <xsd:annotation>
          <xsd:documentation>Indicates a translation derived from a translation memory.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"mt-suggestion\">
        <xsd:annotation>
          <xsd:documentation>Indicates the translation is suggested by machine translation.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rejected-grammar\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item has been rejected because of incorrect grammar.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rejected-inaccurate\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item has been rejected because it is incorrect.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rejected-length\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item has been rejected because it is too long or too short.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rejected-spelling\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the item has been rejected because of incorrect spelling.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"tm-suggestion\">
        <xsd:annotation>
          <xsd:documentation>Indicates the translation is suggested by translation memory.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"unitValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'unit'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"word\">
        <xsd:annotation>
          <xsd:documentation>Refers to words.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"page\">
        <xsd:annotation>
          <xsd:documentation>Refers to pages.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"trans-unit\">
        <xsd:annotation>
          <xsd:documentation>Refers to &lt;trans-unit&gt; elements.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"bin-unit\">
        <xsd:annotation>
          <xsd:documentation>Refers to &lt;bin-unit&gt; elements.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"glyph\">
        <xsd:annotation>
          <xsd:documentation>Refers to glyphs.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"item\">
        <xsd:annotation>
          <xsd:documentation>Refers to &lt;trans-unit&gt; and/or &lt;bin-unit&gt; elements.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"instance\">
        <xsd:annotation>
          <xsd:documentation>Refers to the occurrences of instances defined by the count-type value.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"character\">
        <xsd:annotation>
          <xsd:documentation>Refers to characters.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"line\">
        <xsd:annotation>
          <xsd:documentation>Refers to lines.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"sentence\">
        <xsd:annotation>
          <xsd:documentation>Refers to sentences.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"paragraph\">
        <xsd:annotation>
          <xsd:documentation>Refers to paragraphs.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"segment\">
        <xsd:annotation>
          <xsd:documentation>Refers to segments.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"placeable\">
        <xsd:annotation>
          <xsd:documentation>Refers to placeables (inline elements).</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"priorityValueList\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'priority'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:positiveInteger\">
      <xsd:enumeration value=\"1\">
        <xsd:annotation>
          <xsd:documentation>Highest priority.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"2\">
        <xsd:annotation>
          <xsd:documentation>High priority.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"3\">
        <xsd:annotation>
          <xsd:documentation>High priority, but not as important as 2.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"4\">
        <xsd:annotation>
          <xsd:documentation>High priority, but not as important as 3.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"5\">
        <xsd:annotation>
          <xsd:documentation>Medium priority, but more important than 6.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"6\">
        <xsd:annotation>
          <xsd:documentation>Medium priority, but less important than 5.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"7\">
        <xsd:annotation>
          <xsd:documentation>Low priority, but more important than 8.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"8\">
        <xsd:annotation>
          <xsd:documentation>Low priority, but more important than 9.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"9\">
        <xsd:annotation>
          <xsd:documentation>Low priority.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"10\">
        <xsd:annotation>
          <xsd:documentation>Lowest priority.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"reformatValueYesNo\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"yes\">
        <xsd:annotation>
          <xsd:documentation>This value indicates that all properties can be reformatted. This value must be used alone.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"no\">
        <xsd:annotation>
          <xsd:documentation>This value indicates that no properties should be reformatted. This value must be used alone.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"reformatValueList\">
    <xsd:list>
      <xsd:simpleType>
        <xsd:union memberTypes=\"xlf:XTend\">
          <xsd:simpleType>
            <xsd:restriction base=\"xsd:string\">
              <xsd:enumeration value=\"coord\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that all information in the coord attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"coord-x\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the x information in the coord attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"coord-y\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the y information in the coord attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"coord-cx\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the cx information in the coord attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"coord-cy\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the cy information in the coord attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"font\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that all the information in the font attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"font-name\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the name information in the font attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"font-size\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the size information in the font attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"font-weight\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the weight information in the font attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"css-style\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the information in the css-style attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"style\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the information in the style attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
              <xsd:enumeration value=\"ex-style\">
                <xsd:annotation>
                  <xsd:documentation>This value indicates that the information in the exstyle attribute can be modified.</xsd:documentation>
                </xsd:annotation>
              </xsd:enumeration>
            </xsd:restriction>
          </xsd:simpleType>
        </xsd:union>
      </xsd:simpleType>
    </xsd:list>
  </xsd:simpleType>
  <xsd:simpleType name=\"purposeValueList\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"information\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the context is informational in nature, specifying for example, how a term should be translated. Thus, should be displayed to anyone editing the XLIFF document.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"location\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the context-group is used to specify where the term was found in the translatable source. Thus, it is not displayed.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"match\">
        <xsd:annotation>
          <xsd:documentation>Indicates that the context information should be used during translation memory lookups. Thus, it is not displayed.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"alttranstypeValueList\">
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"proposal\">
        <xsd:annotation>
          <xsd:documentation>Represents a translation proposal from a translation memory or other resource.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"previous-version\">
        <xsd:annotation>
          <xsd:documentation>Represents a previous version of the target element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"rejected\">
        <xsd:annotation>
          <xsd:documentation>Represents a rejected version of the target element.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"reference\">
        <xsd:annotation>
          <xsd:documentation>Represents a translation to be used for reference purposes only, for example from a related product or a different language.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
      <xsd:enumeration value=\"accepted\">
        <xsd:annotation>
          <xsd:documentation>Represents a proposed translation that was used for the translation of the trans-unit, possibly modified.</xsd:documentation>
        </xsd:annotation>
      </xsd:enumeration>
    </xsd:restriction>
  </xsd:simpleType>
  <!-- Other Types -->
  <xsd:complexType name=\"ElemType_ExternalReference\">
    <xsd:choice>
      <xsd:element ref=\"xlf:internal-file\"/>
      <xsd:element ref=\"xlf:external-file\"/>
    </xsd:choice>
  </xsd:complexType>
  <xsd:simpleType name=\"AttrType_purpose\">
    <xsd:list>
      <xsd:simpleType>
        <xsd:union memberTypes=\"xlf:purposeValueList xlf:XTend\"/>
      </xsd:simpleType>
    </xsd:list>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_datatype\">
    <xsd:union memberTypes=\"xlf:datatypeValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_restype\">
    <xsd:union memberTypes=\"xlf:restypeValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_alttranstype\">
    <xsd:union memberTypes=\"xlf:alttranstypeValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_context-type\">
    <xsd:union memberTypes=\"xlf:context-typeValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_state\">
    <xsd:union memberTypes=\"xlf:stateValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_state-qualifier\">
    <xsd:union memberTypes=\"xlf:state-qualifierValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_count-type\">
    <xsd:union memberTypes=\"xlf:restypeValueList xlf:count-typeValueList xlf:datatypeValueList xlf:stateValueList xlf:state-qualifierValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_InlineDelimiters\">
    <xsd:union memberTypes=\"xlf:InlineDelimitersValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_InlinePlaceholders\">
    <xsd:union memberTypes=\"xlf:InlinePlaceholdersValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_size-unit\">
    <xsd:union memberTypes=\"xlf:size-unitValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_mtype\">
    <xsd:union memberTypes=\"xlf:mtypeValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_unit\">
    <xsd:union memberTypes=\"xlf:unitValueList xlf:XTend\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_priority\">
    <xsd:union memberTypes=\"xlf:priorityValueList\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_reformat\">
    <xsd:union memberTypes=\"xlf:reformatValueYesNo xlf:reformatValueList\"/>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_YesNo\">
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"yes\"/>
      <xsd:enumeration value=\"no\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_Position\">
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"open\"/>
      <xsd:enumeration value=\"close\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_assoc\">
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"preceding\"/>
      <xsd:enumeration value=\"following\"/>
      <xsd:enumeration value=\"both\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_annotates\">
    <xsd:restriction base=\"xsd:NMTOKEN\">
      <xsd:enumeration value=\"source\"/>
      <xsd:enumeration value=\"target\"/>
      <xsd:enumeration value=\"general\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_Coordinates\">
    <xsd:annotation>
      <xsd:documentation>Values for the attribute 'coord'.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:string\">
      <xsd:pattern value=\"(-?\\d+|#);(-?\\d+|#);(-?\\d+|#);(-?\\d+|#)\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <xsd:simpleType name=\"AttrType_Version\">
    <xsd:annotation>
      <xsd:documentation>Version values: 1.0 and 1.1 are allowed for backward compatibility.</xsd:documentation>
    </xsd:annotation>
    <xsd:restriction base=\"xsd:string\">
      <xsd:enumeration value=\"1.2\"/>
      <xsd:enumeration value=\"1.1\"/>
      <xsd:enumeration value=\"1.0\"/>
    </xsd:restriction>
  </xsd:simpleType>
  <!-- Groups -->
  <xsd:group name=\"ElemGroup_TextContent\">
    <xsd:choice>
      <xsd:element ref=\"xlf:g\"/>
      <xsd:element ref=\"xlf:bpt\"/>
      <xsd:element ref=\"xlf:ept\"/>
      <xsd:element ref=\"xlf:ph\"/>
      <xsd:element ref=\"xlf:it\"/>
      <xsd:element ref=\"xlf:mrk\"/>
      <xsd:element ref=\"xlf:x\"/>
      <xsd:element ref=\"xlf:bx\"/>
      <xsd:element ref=\"xlf:ex\"/>
    </xsd:choice>
  </xsd:group>
  <xsd:attributeGroup name=\"AttrGroup_TextContent\">
    <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\"/>
    <xsd:attribute name=\"xid\" type=\"xsd:string\" use=\"optional\"/>
    <xsd:attribute name=\"equiv-text\" type=\"xsd:string\" use=\"optional\"/>
    <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
  </xsd:attributeGroup>
  <!-- XLIFF Structure -->
  <xsd:element name=\"xliff\">
    <xsd:complexType>
      <xsd:sequence maxOccurs=\"unbounded\">
        <xsd:any maxOccurs=\"unbounded\" minOccurs=\"0\" namespace=\"##other\" processContents=\"strict\"/>
        <xsd:element ref=\"xlf:file\"/>
      </xsd:sequence>
      <xsd:attribute name=\"version\" type=\"xlf:AttrType_Version\" use=\"required\"/>
      <xsd:attribute ref=\"xml:lang\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"file\">
    <xsd:complexType>
      <xsd:sequence>
        <xsd:element minOccurs=\"0\" ref=\"xlf:header\"/>
        <xsd:element ref=\"xlf:body\"/>
      </xsd:sequence>
      <xsd:attribute name=\"original\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"source-language\" type=\"xsd:language\" use=\"required\"/>
      <xsd:attribute name=\"datatype\" type=\"xlf:AttrType_datatype\" use=\"required\"/>
      <xsd:attribute name=\"tool-id\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"date\" type=\"xsd:dateTime\" use=\"optional\"/>
      <xsd:attribute ref=\"xml:space\" use=\"optional\"/>
      <xsd:attribute name=\"category\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"target-language\" type=\"xsd:language\" use=\"optional\"/>
      <xsd:attribute name=\"product-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"product-version\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"build-num\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
    <xsd:unique name=\"U_group_id\">
      <xsd:selector xpath=\".//xlf:group\"/>
      <xsd:field xpath=\"@id\"/>
    </xsd:unique>
    <xsd:key name=\"K_unit_id\">
      <xsd:selector xpath=\".//xlf:trans-unit|.//xlf:bin-unit\"/>
      <xsd:field xpath=\"@id\"/>
    </xsd:key>
    <xsd:keyref name=\"KR_unit_id\" refer=\"xlf:K_unit_id\">
      <xsd:selector xpath=\".//bpt|.//ept|.//it|.//ph|.//g|.//x|.//bx|.//ex|.//sub\"/>
      <xsd:field xpath=\"@xid\"/>
    </xsd:keyref>
    <xsd:key name=\"K_tool-id\">
      <xsd:selector xpath=\"xlf:header/xlf:tool\"/>
      <xsd:field xpath=\"@tool-id\"/>
    </xsd:key>
    <xsd:keyref name=\"KR_file_tool-id\" refer=\"xlf:K_tool-id\">
      <xsd:selector xpath=\".\"/>
      <xsd:field xpath=\"@tool-id\"/>
    </xsd:keyref>
    <xsd:keyref name=\"KR_phase_tool-id\" refer=\"xlf:K_tool-id\">
      <xsd:selector xpath=\"xlf:header/xlf:phase-group/xlf:phase\"/>
      <xsd:field xpath=\"@tool-id\"/>
    </xsd:keyref>
    <xsd:keyref name=\"KR_alt-trans_tool-id\" refer=\"xlf:K_tool-id\">
      <xsd:selector xpath=\".//xlf:trans-unit/xlf:alt-trans\"/>
      <xsd:field xpath=\"@tool-id\"/>
    </xsd:keyref>
    <xsd:key name=\"K_count-group_name\">
      <xsd:selector xpath=\".//xlf:count-group\"/>
      <xsd:field xpath=\"@name\"/>
    </xsd:key>
    <xsd:unique name=\"U_context-group_name\">
      <xsd:selector xpath=\".//xlf:context-group\"/>
      <xsd:field xpath=\"@name\"/>
    </xsd:unique>
    <xsd:key name=\"K_phase-name\">
      <xsd:selector xpath=\"xlf:header/xlf:phase-group/xlf:phase\"/>
      <xsd:field xpath=\"@phase-name\"/>
    </xsd:key>
    <xsd:keyref name=\"KR_phase-name\" refer=\"xlf:K_phase-name\">
      <xsd:selector xpath=\".//xlf:count|.//xlf:trans-unit|.//xlf:target|.//bin-unit|.//bin-target\"/>
      <xsd:field xpath=\"@phase-name\"/>
    </xsd:keyref>
    <xsd:unique name=\"U_uid\">
      <xsd:selector xpath=\".//xlf:external-file\"/>
      <xsd:field xpath=\"@uid\"/>
    </xsd:unique>
  </xsd:element>
  <xsd:element name=\"header\">
    <xsd:complexType>
      <xsd:sequence>
        <xsd:element minOccurs=\"0\" name=\"skl\" type=\"xlf:ElemType_ExternalReference\"/>
        <xsd:element minOccurs=\"0\" ref=\"xlf:phase-group\"/>
        <xsd:choice maxOccurs=\"unbounded\" minOccurs=\"0\">
          <xsd:element name=\"glossary\" type=\"xlf:ElemType_ExternalReference\"/>
          <xsd:element name=\"reference\" type=\"xlf:ElemType_ExternalReference\"/>
          <xsd:element ref=\"xlf:count-group\"/>
          <xsd:element ref=\"xlf:note\"/>
          <xsd:element ref=\"xlf:tool\"/>
        </xsd:choice>
        <xsd:any maxOccurs=\"unbounded\" minOccurs=\"0\" namespace=\"##other\" processContents=\"strict\"/>
      </xsd:sequence>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"internal-file\">
    <xsd:complexType>
      <xsd:simpleContent>
        <xsd:extension base=\"xsd:string\">
          <xsd:attribute name=\"form\" type=\"xsd:string\"/>
          <xsd:attribute name=\"crc\" type=\"xsd:NMTOKEN\"/>
        </xsd:extension>
      </xsd:simpleContent>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"external-file\">
    <xsd:complexType>
      <xsd:attribute name=\"href\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:NMTOKEN\"/>
      <xsd:attribute name=\"uid\" type=\"xsd:NMTOKEN\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"note\">
    <xsd:complexType>
      <xsd:simpleContent>
        <xsd:extension base=\"xsd:string\">
          <xsd:attribute ref=\"xml:lang\" use=\"optional\"/>
          <xsd:attribute default=\"1\" name=\"priority\" type=\"xlf:AttrType_priority\" use=\"optional\"/>
          <xsd:attribute name=\"from\" type=\"xsd:string\" use=\"optional\"/>
          <xsd:attribute default=\"general\" name=\"annotates\" type=\"xlf:AttrType_annotates\" use=\"optional\"/>
        </xsd:extension>
      </xsd:simpleContent>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"phase-group\">
    <xsd:complexType>
      <xsd:sequence maxOccurs=\"unbounded\">
        <xsd:element ref=\"xlf:phase\"/>
      </xsd:sequence>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"phase\">
    <xsd:complexType>
      <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element ref=\"xlf:note\"/>
      </xsd:sequence>
      <xsd:attribute name=\"phase-name\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"process-name\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"company-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"tool-id\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"date\" type=\"xsd:dateTime\" use=\"optional\"/>
      <xsd:attribute name=\"job-id\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"contact-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"contact-email\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"contact-phone\" type=\"xsd:string\" use=\"optional\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"count-group\">
    <xsd:complexType>
      <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element ref=\"xlf:count\"/>
      </xsd:sequence>
      <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"required\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"count\">
    <xsd:complexType>
      <xsd:simpleContent>
        <xsd:extension base=\"xsd:string\">
          <xsd:attribute name=\"count-type\" type=\"xlf:AttrType_count-type\" use=\"optional\"/>
          <xsd:attribute name=\"phase-name\" type=\"xsd:string\" use=\"optional\"/>
          <xsd:attribute default=\"word\" name=\"unit\" type=\"xlf:AttrType_unit\" use=\"optional\"/>
        </xsd:extension>
      </xsd:simpleContent>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"context-group\">
    <xsd:complexType>
      <xsd:sequence maxOccurs=\"unbounded\">
        <xsd:element ref=\"xlf:context\"/>
      </xsd:sequence>
      <xsd:attribute name=\"name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"purpose\" type=\"xlf:AttrType_purpose\" use=\"optional\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"context\">
    <xsd:complexType>
      <xsd:simpleContent>
        <xsd:extension base=\"xsd:string\">
          <xsd:attribute name=\"context-type\" type=\"xlf:AttrType_context-type\" use=\"required\"/>
          <xsd:attribute default=\"no\" name=\"match-mandatory\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
          <xsd:attribute name=\"crc\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
        </xsd:extension>
      </xsd:simpleContent>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"tool\">
    <xsd:complexType mixed=\"true\">
      <xsd:sequence>
        <xsd:any namespace=\"##any\" processContents=\"strict\" minOccurs=\"0\" maxOccurs=\"unbounded\"/>
      </xsd:sequence>
      <xsd:attribute name=\"tool-id\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"tool-name\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"tool-version\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"tool-company\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"body\">
    <xsd:complexType>
      <xsd:choice maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:group\"/>
        <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:trans-unit\"/>
        <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:bin-unit\"/>
      </xsd:choice>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"group\">
    <xsd:complexType>
      <xsd:sequence>
        <xsd:sequence>
          <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:context-group\"/>
          <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:count-group\"/>
          <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:note\"/>
          <xsd:any maxOccurs=\"unbounded\" minOccurs=\"0\" namespace=\"##other\" processContents=\"strict\"/>
        </xsd:sequence>
        <xsd:choice maxOccurs=\"unbounded\">
          <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:group\"/>
          <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:trans-unit\"/>
          <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:bin-unit\"/>
        </xsd:choice>
      </xsd:sequence>
      <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"datatype\" type=\"xlf:AttrType_datatype\" use=\"optional\"/>
      <xsd:attribute default=\"default\" ref=\"xml:space\" use=\"optional\"/>
      <xsd:attribute name=\"restype\" type=\"xlf:AttrType_restype\" use=\"optional\"/>
      <xsd:attribute name=\"resname\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"extradata\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"extype\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"help-id\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"menu\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"menu-option\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"menu-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"coord\" type=\"xlf:AttrType_Coordinates\" use=\"optional\"/>
      <xsd:attribute name=\"font\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"css-style\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"style\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"exstyle\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"translate\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"reformat\" type=\"xlf:AttrType_reformat\" use=\"optional\"/>
      <xsd:attribute default=\"pixel\" name=\"size-unit\" type=\"xlf:AttrType_size-unit\" use=\"optional\"/>
      <xsd:attribute name=\"maxwidth\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"minwidth\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"maxheight\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"minheight\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"maxbytes\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"minbytes\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"charclass\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute default=\"no\" name=\"merged-trans\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"trans-unit\">
    <xsd:complexType>
      <xsd:sequence>
        <xsd:element ref=\"xlf:source\"/>
        <xsd:element minOccurs=\"0\" ref=\"xlf:seg-source\"/>
        <xsd:element minOccurs=\"0\" ref=\"xlf:target\"/>
        <xsd:choice maxOccurs=\"unbounded\" minOccurs=\"0\">
          <xsd:element ref=\"xlf:context-group\"/>
          <xsd:element ref=\"xlf:count-group\"/>
          <xsd:element ref=\"xlf:note\"/>
          <xsd:element ref=\"xlf:alt-trans\"/>
        </xsd:choice>
        <xsd:any maxOccurs=\"unbounded\" minOccurs=\"0\" namespace=\"##other\" processContents=\"strict\"/>
      </xsd:sequence>
      <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"approved\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"translate\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"reformat\" type=\"xlf:AttrType_reformat\" use=\"optional\"/>
      <xsd:attribute default=\"default\" ref=\"xml:space\" use=\"optional\"/>
      <xsd:attribute name=\"datatype\" type=\"xlf:AttrType_datatype\" use=\"optional\"/>
      <xsd:attribute name=\"phase-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"restype\" type=\"xlf:AttrType_restype\" use=\"optional\"/>
      <xsd:attribute name=\"resname\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"extradata\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"extype\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"help-id\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"menu\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"menu-option\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"menu-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"coord\" type=\"xlf:AttrType_Coordinates\" use=\"optional\"/>
      <xsd:attribute name=\"font\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"css-style\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"style\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"exstyle\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute default=\"pixel\" name=\"size-unit\" type=\"xlf:AttrType_size-unit\" use=\"optional\"/>
      <xsd:attribute name=\"maxwidth\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"minwidth\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"maxheight\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"minheight\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"maxbytes\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"minbytes\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"charclass\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"merged-trans\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
    <xsd:unique name=\"U_tu_segsrc_mid\">
      <xsd:selector xpath=\"./xlf:seg-source/xlf:mrk\"/>
      <xsd:field xpath=\"@mid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_tu_segsrc_mid\" refer=\"xlf:U_tu_segsrc_mid\">
      <xsd:selector xpath=\"./xlf:target/xlf:mrk|./xlf:alt-trans\"/>
      <xsd:field xpath=\"@mid\"/>
    </xsd:keyref>
  </xsd:element>
  <xsd:element name=\"source\">
    <xsd:complexType mixed=\"true\">
      <xsd:group maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:ElemGroup_TextContent\"/>
      <xsd:attribute ref=\"xml:lang\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
    <xsd:unique name=\"U_source_bpt_rid\">
      <xsd:selector xpath=\".//xlf:bpt\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_source_ept_rid\" refer=\"xlf:U_source_bpt_rid\">
      <xsd:selector xpath=\".//xlf:ept\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:keyref>
    <xsd:unique name=\"U_source_bx_rid\">
      <xsd:selector xpath=\".//xlf:bx\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_source_ex_rid\" refer=\"xlf:U_source_bx_rid\">
      <xsd:selector xpath=\".//xlf:ex\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:keyref>
  </xsd:element>
  <xsd:element name=\"seg-source\">
    <xsd:complexType mixed=\"true\">
      <xsd:group maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:ElemGroup_TextContent\"/>
      <xsd:attribute ref=\"xml:lang\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
    <xsd:unique name=\"U_segsrc_bpt_rid\">
      <xsd:selector xpath=\".//xlf:bpt\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_segsrc_ept_rid\" refer=\"xlf:U_segsrc_bpt_rid\">
      <xsd:selector xpath=\".//xlf:ept\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:keyref>
    <xsd:unique name=\"U_segsrc_bx_rid\">
      <xsd:selector xpath=\".//xlf:bx\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_segsrc_ex_rid\" refer=\"xlf:U_segsrc_bx_rid\">
      <xsd:selector xpath=\".//xlf:ex\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:keyref>
  </xsd:element>
  <xsd:element name=\"target\">
    <xsd:complexType mixed=\"true\">
      <xsd:group maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:ElemGroup_TextContent\"/>
      <xsd:attribute name=\"state\" type=\"xlf:AttrType_state\" use=\"optional\"/>
      <xsd:attribute name=\"state-qualifier\" type=\"xlf:AttrType_state-qualifier\" use=\"optional\"/>
      <xsd:attribute name=\"phase-name\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute ref=\"xml:lang\" use=\"optional\"/>
      <xsd:attribute name=\"resname\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"coord\" type=\"xlf:AttrType_Coordinates\" use=\"optional\"/>
      <xsd:attribute name=\"font\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"css-style\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"style\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"exstyle\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"equiv-trans\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
    <xsd:unique name=\"U_target_bpt_rid\">
      <xsd:selector xpath=\".//xlf:bpt\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_target_ept_rid\" refer=\"xlf:U_target_bpt_rid\">
      <xsd:selector xpath=\".//xlf:ept\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:keyref>
    <xsd:unique name=\"U_target_bx_rid\">
      <xsd:selector xpath=\".//xlf:bx\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_target_ex_rid\" refer=\"xlf:U_target_bx_rid\">
      <xsd:selector xpath=\".//xlf:ex\"/>
      <xsd:field xpath=\"@rid\"/>
    </xsd:keyref>
  </xsd:element>
  <xsd:element name=\"alt-trans\">
    <xsd:complexType>
      <xsd:sequence>
        <xsd:element minOccurs=\"0\" ref=\"xlf:source\"/>
        <xsd:element minOccurs=\"0\" ref=\"xlf:seg-source\"/>
        <xsd:element maxOccurs=\"1\" ref=\"xlf:target\"/>
        <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:context-group\"/>
        <xsd:element maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:note\"/>
        <xsd:any maxOccurs=\"unbounded\" minOccurs=\"0\" namespace=\"##other\" processContents=\"strict\"/>
      </xsd:sequence>
      <xsd:attribute name=\"match-quality\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"tool-id\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute ref=\"xml:lang\" use=\"optional\"/>
      <xsd:attribute name=\"origin\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"datatype\" type=\"xlf:AttrType_datatype\" use=\"optional\"/>
      <xsd:attribute default=\"default\" ref=\"xml:space\" use=\"optional\"/>
      <xsd:attribute name=\"restype\" type=\"xlf:AttrType_restype\" use=\"optional\"/>
      <xsd:attribute name=\"resname\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"extradata\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"extype\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"help-id\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"menu\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"menu-option\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"menu-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"mid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"coord\" type=\"xlf:AttrType_Coordinates\" use=\"optional\"/>
      <xsd:attribute name=\"font\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"css-style\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"style\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"exstyle\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"phase-name\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute default=\"proposal\" name=\"alttranstype\" type=\"xlf:AttrType_alttranstype\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
    <xsd:unique name=\"U_at_segsrc_mid\">
      <xsd:selector xpath=\"./xlf:seg-source/xlf:mrk\"/>
      <xsd:field xpath=\"@mid\"/>
    </xsd:unique>
    <xsd:keyref name=\"KR_at_segsrc_mid\" refer=\"xlf:U_at_segsrc_mid\">
      <xsd:selector xpath=\"./xlf:target/xlf:mrk\"/>
      <xsd:field xpath=\"@mid\"/>
    </xsd:keyref>
  </xsd:element>
  <xsd:element name=\"bin-unit\">
    <xsd:complexType>
      <xsd:sequence>
        <xsd:element ref=\"xlf:bin-source\"/>
        <xsd:element minOccurs=\"0\" ref=\"xlf:bin-target\"/>
        <xsd:choice maxOccurs=\"unbounded\" minOccurs=\"0\">
          <xsd:element ref=\"xlf:context-group\"/>
          <xsd:element ref=\"xlf:count-group\"/>
          <xsd:element ref=\"xlf:note\"/>
          <xsd:element ref=\"xlf:trans-unit\"/>
        </xsd:choice>
        <xsd:any maxOccurs=\"unbounded\" minOccurs=\"0\" namespace=\"##other\" processContents=\"strict\"/>
      </xsd:sequence>
      <xsd:attribute name=\"id\" type=\"xsd:string\" use=\"required\"/>
      <xsd:attribute name=\"mime-type\" type=\"xlf:mime-typeValueList\" use=\"required\"/>
      <xsd:attribute name=\"approved\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"translate\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"reformat\" type=\"xlf:AttrType_reformat\" use=\"optional\"/>
      <xsd:attribute name=\"restype\" type=\"xlf:AttrType_restype\" use=\"optional\"/>
      <xsd:attribute name=\"resname\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"phase-name\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"bin-source\">
    <xsd:complexType>
      <xsd:choice>
        <xsd:element ref=\"xlf:internal-file\"/>
        <xsd:element ref=\"xlf:external-file\"/>
      </xsd:choice>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"bin-target\">
    <xsd:complexType>
      <xsd:choice>
        <xsd:element ref=\"xlf:internal-file\"/>
        <xsd:element ref=\"xlf:external-file\"/>
      </xsd:choice>
      <xsd:attribute name=\"mime-type\" type=\"xlf:mime-typeValueList\" use=\"optional\"/>
      <xsd:attribute name=\"state\" type=\"xlf:AttrType_state\" use=\"optional\"/>
      <xsd:attribute name=\"state-qualifier\" type=\"xlf:AttrType_state-qualifier\" use=\"optional\"/>
      <xsd:attribute name=\"phase-name\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"restype\" type=\"xlf:AttrType_restype\" use=\"optional\"/>
      <xsd:attribute name=\"resname\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
  <!-- Element for inline codes -->
  <xsd:element name=\"g\">
    <xsd:complexType mixed=\"true\">
      <xsd:group maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:ElemGroup_TextContent\"/>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlineDelimiters\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"clone\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"x\">
    <xsd:complexType>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlinePlaceholders\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"clone\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"bx\">
    <xsd:complexType>
      <xsd:attribute name=\"rid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlineDelimiters\" use=\"optional\"/>
      <xsd:attribute default=\"yes\" name=\"clone\" type=\"xlf:AttrType_YesNo\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"ex\">
    <xsd:complexType>
      <xsd:attribute name=\"rid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"ph\">
    <xsd:complexType mixed=\"true\">
      <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element ref=\"xlf:sub\"/>
      </xsd:sequence>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlinePlaceholders\" use=\"optional\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attribute name=\"assoc\" type=\"xlf:AttrType_assoc\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"bpt\">
    <xsd:complexType mixed=\"true\">
      <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element ref=\"xlf:sub\"/>
      </xsd:sequence>
      <xsd:attribute name=\"rid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlineDelimiters\" use=\"optional\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"ept\">
    <xsd:complexType mixed=\"true\">
      <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element ref=\"xlf:sub\"/>
      </xsd:sequence>
      <xsd:attribute name=\"rid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"it\">
    <xsd:complexType mixed=\"true\">
      <xsd:sequence maxOccurs=\"unbounded\" minOccurs=\"0\">
        <xsd:element ref=\"xlf:sub\"/>
      </xsd:sequence>
      <xsd:attribute name=\"pos\" type=\"xlf:AttrType_Position\" use=\"required\"/>
      <xsd:attribute name=\"rid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlineDelimiters\" use=\"optional\"/>
      <xsd:attribute name=\"crc\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:attributeGroup ref=\"xlf:AttrGroup_TextContent\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"sub\">
    <xsd:complexType mixed=\"true\">
      <xsd:group maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:ElemGroup_TextContent\"/>
      <xsd:attribute name=\"datatype\" type=\"xlf:AttrType_datatype\" use=\"optional\"/>
      <xsd:attribute name=\"ctype\" type=\"xlf:AttrType_InlineDelimiters\" use=\"optional\"/>
      <xsd:attribute name=\"xid\" type=\"xsd:string\" use=\"optional\"/>
    </xsd:complexType>
  </xsd:element>
  <xsd:element name=\"mrk\">
    <xsd:complexType mixed=\"true\">
      <xsd:group maxOccurs=\"unbounded\" minOccurs=\"0\" ref=\"xlf:ElemGroup_TextContent\"/>
      <xsd:attribute name=\"mtype\" type=\"xlf:AttrType_mtype\" use=\"required\"/>
      <xsd:attribute name=\"mid\" type=\"xsd:NMTOKEN\" use=\"optional\"/>
      <xsd:attribute name=\"comment\" type=\"xsd:string\" use=\"optional\"/>
      <xsd:anyAttribute namespace=\"##other\" processContents=\"strict\"/>
    </xsd:complexType>
  </xsd:element>
</xsd:schema>
", "vendor/symfony/translation/Resources/schemas/xliff-core-1.2-strict.xsd", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Resources/schemas/xliff-core-1.2-strict.xsd");
    }
}
