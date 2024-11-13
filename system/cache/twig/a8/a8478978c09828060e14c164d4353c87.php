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

/* library/acidblob.html.twig */
class __TwigTemplate_f9c79c4a7f0357696b9b1db88e4ba7c6 extends \Twig\Template
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
        // line 1
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">
\t<a style=\"float: right;\" href=\"?subtopic=creatures&race=cultacolyte\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>
\t<div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div>
</div>
<div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">
\t\t<h2 style=\"float: right;\">Acid Blobs</h2>
\t\t<img src=\"images/library/acidblob.gif\"/>
\t</div>
\t<div style=\"margin-bottom: 35px; clear: both;\">
\t\t<p>Highly destructive and corrosive, the Acid Blob has little in common with the ordinary slime. They are much better in finding and pursuing a target than their distant cousins. While the ordinary slime is driven by the primal urge to get food, the Acid Blob is out for destruction. It is indeed a frightening sight when a bunch of these creatures crawls towards a single target with the intention to completely destroy it.<br/>Some researchers speculate that Acid Blobs share their intelligence with blobs all over the world. As Acid Blobs reproduce themselves by splitting into two entities, this thesis might have an element of truth.<br/>Be it as it may, the Acid Blob is a constant threat particularly to the environment. Since living creatures are often smart and quick enough to avoid the attacks of the blobs, any kind of  plants,  constructions and the like are usually not that lucky and are annihilated by their attacks.<br/>In the past, some eccentric madmen used Acid Blobs as waste disposal, which was considered to be somewhat stylish. However, after the Acid Blobs had digested a certain amount of waste, they started reproducing themselves multiple times which started to become a real problem. After several unpleasant incidents, this way of waste disposal was stopped, however, the results of such folly can still be seen at various places.</p>  <p>Acid Blobs have 250 hitpoints. They are immune to death and earth damage. Moreover, they are strong against ice damage. On the other hand, they are weak against energy and fire damage. These creatures can neither be summoned nor convinced.</p>  <p>Acid Blobs yield 250 experience points. They carry globs of acid slime with them.</p>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "library/acidblob.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/acidblob.html.twig", "/var/www/html/system/templates/library/acidblob.html.twig");
    }
}
