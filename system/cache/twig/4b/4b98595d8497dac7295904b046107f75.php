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

/* library/hero.html.twig */
class __TwigTemplate_4c5a429be9016043342bf5054c97dc19 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=hideousfungus\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=hellspawn\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Heroes</h2>  <img src=\"images/library/hero.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>The Heroes that prowl the isle of Edron were among the first explorers. Once brave knights and loyal to the king, too close contact with evil monsters or greed for treasures - nobody knows for sure - turned their hearts. Now, they attack every intruder of their sphere using their incredible strength or their dangerous bows.</p>  <p>Heroes have 1400 hitpoints. They cannot be paralyzed. Moreover, they are strong against earth, energy, fire, holy, ice and physical damage. On the other hand, they are weak against death damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p>  <p>Heroes yield 1200 experience points. They carry arrows, bows, gold coins, grapes, red roses, scrolls, sniper arrows and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/hero.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/hero.html.twig", "/var/www/html/system/templates/library/hero.html.twig");
    }
}
