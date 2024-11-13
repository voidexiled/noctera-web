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

/* library/defiler.html.twig */
class __TwigTemplate_db1d0d674bdeb11d8a845174ed01fb31 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=demonoutcast\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=deer\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Defilers</h2>  <img src=\"images/library/defiler.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>It is unknown whether the thing known as Defiler is a variant of the ordinary slime or if it is the elder form of the said creature. Although they share numerous characteristics, the Defiler is by far more powerful and dangerous. Since the Defiler is often found accompanied by some kind of demon, it is theorised that the greater slime is possibly not even native to our world. It is assumed that some life form brought it here from the demons' realm of existence. Still, just like the common slimes, it shares the love for humid places of decay and darkness and like its smaller variant it does not care about living or dead as long as it is organic when it comes to eating habits. When the slime is seen as a symbol of poison and decay, those characteristics cannot be overlooked in the Defiler. Its relation to poison and decay also becomes evident in its attributes. A choking stench surrounds the Defiler and it can shoot some parts of itself to infect its victims with poison and decay.</p>  <p>Defilers have 3650 hitpoints. They are immune to earth damage and cannot be paralyzed. Moreover, they are strong against energy and ice damage. On the other hand, they are weak against fire damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p>  <p>Defilers yield 3700 experience points. They carry demonic essence, globs of acid slime, globs of tar, gold coins, platinum coins, soul orbs and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/defiler.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/defiler.html.twig", "/var/www/html/system/templates/library/defiler.html.twig");
    }
}
