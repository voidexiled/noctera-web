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

/* library/salamander.html.twig */
class __TwigTemplate_d28b4458ffbc12f51636b89bad235135 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=sandcrawler\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=rustheapgolem\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Salamanders</h2>  <img src=\"images/library/salamander.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>The Salamander is a creature that is quite common in swamp areas. In this harsh environment only the most aggressive and capable individuals can survive, so that the relatively harmless Salamander has evolved into a creature that can scare off at least some attackers. However, a Salamander is still an easy prey and so it often relies on the protection granted by its colouring. The diet of the Salamanders are smaller insects that are often found in abundance in their habitat. Only this allows for the continued survival of the Salamander species while surrounded by more powerful predators. The Salamanders are considered very distant relatives of the dragons, an assumption that is based solely on the fact that they are lizards and have a penchant to collect hoards. The so-called 'hoards' of the Salamanders usually consist only of a few shiny things they have gathered in the swamp, typically junk discarded or lost by adventurers in the area. Still, sometimes they are hunted by foolhardy soldiers of fortune who dream about an easy way to acquire some exotic treasure. Due to their tasting odd, Salamanders are hunted by trolls and orcs for food when times are dire. Sometimes local witches breed Salamanders as familiars, or as ingredients for their cooking or even alchemical usage.</p>  <p>Salamanders have 70 hitpoints. They are strong against earth damage. These creatures can neither be summoned nor convinced.</p>  <p>Salamanders yield 25 experience points. They carry gold coins, insectoid eggs and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/salamander.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/salamander.html.twig", "/var/www/html/system/templates/library/salamander.html.twig");
    }
}
