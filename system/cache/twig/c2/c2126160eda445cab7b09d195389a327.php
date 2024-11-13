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

/* library/bursterspectre.html.twig */
class __TwigTemplate_78891283d17316c20a1b567e9737dc38 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\"> <a style=\"float: right;\" href=\"?subtopic=creatures&race=butterflypurple\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a> <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=burninggladiator\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a> <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\"> <h2 style=\"float: right;\">Burster Spectres</h2> <img src=\"images/library/bursterspectre.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\"> <p>The Dire Spectres arrived as phantoms to this world. Born from dark fragments of lost souls, they are not bound to this plane, nor do they have a past. They long for a physical existence and their sole goal is to anchor themselves to our world. They are literally pure evil woven from bad spare parts of souls and feed on the life energy of any living creature. The most powerful dire spectres are the oldest. Those who clung to this plane for long enough, eventually gained adequate power to control and coordinate other spectres. Those are the most dangerous and resourceful and should be treated with the utmost care. Burster Spectres wield the most powerful magic among dire spectres. Their attacks are quick and devastating, often emanating in abrupt and hazardous bursts of raw energy.</p> <p>Burster Spectres have 6500 hitpoints. They are immune to physical damage and cannot be paralysed. Moreover, they are strong against ice damage. On the other hand, they are weak against fire damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p> <p>Burster Spectres yield 6000 experience points. They carry great spirit potions, platinum coins and sometimes other items with them.</p> </div></div>";
    }

    public function getTemplateName()
    {
        return "library/bursterspectre.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/bursterspectre.html.twig", "/var/www/html/system/templates/library/bursterspectre.html.twig");
    }
}
