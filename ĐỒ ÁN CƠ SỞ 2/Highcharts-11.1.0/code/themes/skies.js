/*
 Highcharts JS v11.1.0 (2023-06-05)

 (c) 2009-2021 Torstein Honsi

 License: www.highcharts.com/license
*/
'use strict';(function(a){"object"===typeof module&&module.exports?(a["default"]=a,module.exports=a):"function"===typeof define&&define.amd?define("highcharts/themes/skies",["highcharts"],function(b){a(b);a.Highcharts=b;return a}):a("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(a){function b(a,c,b,d){a.hasOwnProperty(c)||(a[c]=d.apply(null,b),"function"===typeof CustomEvent&&window.dispatchEvent(new CustomEvent("HighchartsModuleLoaded",{detail:{path:c,module:a[c]}})))}a=a?a._modules:
{};b(a,"Extensions/Themes/Skies.js",[a["Core/Defaults.js"]],function(a){const {setOptions:c}=a;var b;(function(a){a.options={colors:"#514F78 #42A07B #9B5E4A #72727F #1F949A #82914E #86777F #42A07B".split(" "),chart:{className:"skies",borderWidth:0,plotShadow:!0,plotBackgroundImage:"https://www.highcharts.com/samples/graphics/skies.jpg",plotBackgroundColor:{linearGradient:{x1:0,y1:0,x2:1,y2:1},stops:[[0,"rgba(255, 255, 255, 1)"],[1,"rgba(255, 255, 255, 0)"]]},plotBorderWidth:1},title:{style:{color:"#3E576F",
font:"16px Lucida Grande, Lucida Sans Unicode, Verdana, Arial, Helvetica, sans-serif"}},subtitle:{style:{color:"#6D869F",font:"12px Lucida Grande, Lucida Sans Unicode, Verdana, Arial, Helvetica, sans-serif"}},xAxis:{gridLineWidth:0,lineColor:"#C0D0E0",tickColor:"#C0D0E0",labels:{style:{color:"#666",fontWeight:"bold"}},title:{style:{color:"#666",font:"12px Lucida Grande, Lucida Sans Unicode, Verdana, Arial, Helvetica, sans-serif"}}},yAxis:{alternateGridColor:"rgba(255, 255, 255, .5)",lineColor:"#C0D0E0",
tickColor:"#C0D0E0",tickWidth:1,labels:{style:{color:"#666",fontWeight:"bold"}},title:{style:{color:"#666",font:"12px Lucida Grande, Lucida Sans Unicode, Verdana, Arial, Helvetica, sans-serif"}}},legend:{itemStyle:{font:"9pt Trebuchet MS, Verdana, sans-serif",color:"#3E576F"},itemHoverStyle:{color:"black"},itemHiddenStyle:{color:"silver"}}};a.apply=function(){c(a.options)}})(b||(b={}));return b});b(a,"masters/themes/skies.src.js",[a["Core/Globals.js"],a["Extensions/Themes/Skies.js"]],function(a,b){a.theme=
b.options;b.apply()})});
//# sourceMappingURL=skies.js.map