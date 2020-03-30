<!-- HTML header for doxygen 1.8.8-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Mobile Devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
        <meta name="generator" content="Doxygen 1.8.11"/>
        <script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
        <title>NRE-Utility: NRE::Exception::IException Class Reference</title>
        <!--<link href="tabs.css" rel="stylesheet" type="text/css"/>-->
        <script type="text/javascript" src="dynsections.js"></script>
        <link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="search/searchdata.js"></script>
<script type="text/javascript" src="search/search.js"></script>
<script type="text/javascript">
  $(document).ready(function() { init_search(); });
</script>
        <link href="doxygen.css" rel="stylesheet" type="text/css" />
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <?php
            include '../../php/navigation.php';
            if (!isset($_COOKIE["theme"]) || $_COOKIE["theme"] == "dark") {
                echo '<link href="../../css/dark/bootstrap.css" rel="stylesheet">';
            } else {
                echo '<link href="../../css/light/bootstrap.css" rel="stylesheet">';
            }
        ?>
        <script src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="doxy-boot.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <header class="page-header">
                <a href="../../../index.php">
                    <img src="../../img/Logo.png" class="logo img-responsive"/>
                </a>
            </header>
            <?php addNavigationBarInl(false); ?>
            <div id="top" class="row"><!-- do not remove this div, it is closed by doxygen! -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
<!-- end header part -->
<!-- Generated by Doxygen 1.8.11 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "search",false,'Search');
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <img id="MSearchSelect" src="search/mag_sel.png"
               onmouseover="return searchBox.OnSearchSelectShow()"
               onmouseout="return searchBox.OnSearchSelectHide()"
               alt=""/>
          <input type="text" id="MSearchField" value="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.png" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<iframe src="javascript:void(0)" frameborder="0" 
        name="MSearchResults" id="MSearchResults">
</iframe>
</div>

<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="namespace_n_r_e.php">NRE</a></li><li class="navelem"><b>Exception</b></li><li class="navelem"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="class_n_r_e_1_1_exception_1_1_i_exception-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">NRE::Exception::IException Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>An interface for exception.  
 <a href="class_n_r_e_1_1_exception_1_1_i_exception.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="_n_r_e___i_exception_8hpp_source.php">NRE_IException.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for NRE::Exception::IException:</div>
<div class="dyncontent">
 <div class="center">
  <img src="class_n_r_e_1_1_exception_1_1_i_exception.png" usemap="#NRE::Exception::IException_map" alt=""/>
  <map id="NRE::Exception::IException_map" name="NRE::Exception::IException_map">
<area href="class_n_r_e_1_1_utility_1_1_stringable.php" alt="NRE::Utility::Stringable&lt; IException &gt;" shape="rect" coords="333,56,656,80"/>
<area href="class_n_r_e_1_1_utility_1_1_static_interface.php" title="Describe an object using CRTP to create static interface (static polymorphism) " alt="NRE::Utility::StaticInterface&lt; T &gt;" shape="rect" coords="333,0,656,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a7d7ccf53661a097afcb0836cd77996c8"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php#a7d7ccf53661a097afcb0836cd77996c8">IException</a> ()=delete</td></tr>
<tr class="separator:a7d7ccf53661a097afcb0836cd77996c8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9c5da16704c4cc9bca0a502c23b192d0"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php#a9c5da16704c4cc9bca0a502c23b192d0">IException</a> (<a class="el" href="_n_r_e___string_8hpp.php#a20410cefd428aefdf41f418a1e489d66">Utility::String</a> const &amp;log)  throw ()</td></tr>
<tr class="separator:a9c5da16704c4cc9bca0a502c23b192d0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af5a8faf1cbb5603e77eaffb848a85aef"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php#af5a8faf1cbb5603e77eaffb848a85aef">IException</a> (<a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a> const &amp;e)=default  throw ()</td></tr>
<tr class="separator:af5a8faf1cbb5603e77eaffb848a85aef"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aac96925790c38880d51bcbf38fde12d5"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php#aac96925790c38880d51bcbf38fde12d5">IException</a> (<a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a> &amp;&amp;e)=default  throw ()</td></tr>
<tr class="separator:aac96925790c38880d51bcbf38fde12d5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aed938ddc7fa6b6971a1b563c25ec1c8e"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php#aed938ddc7fa6b6971a1b563c25ec1c8e">~IException</a> ()=default  throw ()</td></tr>
<tr class="separator:aed938ddc7fa6b6971a1b563c25ec1c8e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a837a351b0d155dd31dc44f50bbe6b5ce"><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php#a837a351b0d155dd31dc44f50bbe6b5ce">operator=</a> (<a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a> const &amp;e)=default</td></tr>
<tr class="separator:a837a351b0d155dd31dc44f50bbe6b5ce"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac0d7b8b12ba151d2573b5cdb2e2c2b08"><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php#ac0d7b8b12ba151d2573b5cdb2e2c2b08">operator=</a> (<a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a> &amp;&amp;e)=default</td></tr>
<tr class="separator:ac0d7b8b12ba151d2573b5cdb2e2c2b08"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4457260a3da3363e38b1ed75ca64407e"><td class="memItemLeft" align="right" valign="top"><a class="el" href="_n_r_e___string_8hpp.php#a20410cefd428aefdf41f418a1e489d66">Utility::String</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php#a4457260a3da3363e38b1ed75ca64407e">toString</a> () const </td></tr>
<tr class="separator:a4457260a3da3363e38b1ed75ca64407e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_class_n_r_e_1_1_utility_1_1_stringable"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_class_n_r_e_1_1_utility_1_1_stringable')"><img src="closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="class_n_r_e_1_1_utility_1_1_stringable.php">NRE::Utility::Stringable&lt; IException &gt;</a></td></tr>
<tr class="memitem:a858907f8126e9c210854ddb659dd17ee inherit pub_methods_class_n_r_e_1_1_utility_1_1_stringable"><td class="memItemLeft" align="right" valign="top"><a class="el" href="_n_r_e___string_8hpp.php#a20410cefd428aefdf41f418a1e489d66">String</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_utility_1_1_stringable.php#a858907f8126e9c210854ddb659dd17ee">toString</a> () const</td></tr>
<tr class="separator:a858907f8126e9c210854ddb659dd17ee inherit pub_methods_class_n_r_e_1_1_utility_1_1_stringable"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>An interface for exception. </p>
<p><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php" title="An interface for exception. ">IException</a> </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a7d7ccf53661a097afcb0836cd77996c8"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">NRE::Exception::IException::IException </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">delete</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>No Default Constructor </p>

</div>
</div>
<a class="anchor" id="a9c5da16704c4cc9bca0a502c23b192d0"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">NRE::Exception::IException::IException </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="_n_r_e___string_8hpp.php#a20410cefd428aefdf41f418a1e489d66">Utility::String</a> const &amp;&#160;</td>
          <td class="paramname"><em>log</em></td><td>)</td>
          <td></td>
        </tr>
        <tr>
          <td align="right">throw </td><td>(</td><td colspan="2"></td>
        </tr>
        <tr>
          <td align="right"></td><td>)</td><td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Construct an <a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php" title="An interface for exception. ">IException</a> with a custom log </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">log</td><td>the <a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php" title="An interface for exception. ">IException</a>'s log </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="af5a8faf1cbb5603e77eaffb848a85aef"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">NRE::Exception::IException::IException </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a> const &amp;&#160;</td>
          <td class="paramname"><em>e</em></td><td>)</td>
          <td></td>
        </tr>
        <tr>
          <td align="right">throw </td><td>(</td><td colspan="2"></td>
        </tr>
        <tr>
          <td align="right"></td><td>)</td><td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">default</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Copy e into this </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">e</td><td>the <a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php" title="An interface for exception. ">IException</a> to copy the content </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="aac96925790c38880d51bcbf38fde12d5"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">NRE::Exception::IException::IException </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a> &amp;&amp;&#160;</td>
          <td class="paramname"><em>e</em></td><td>)</td>
          <td></td>
        </tr>
        <tr>
          <td align="right">throw </td><td>(</td><td colspan="2"></td>
        </tr>
        <tr>
          <td align="right"></td><td>)</td><td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">default</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Move e into this, leaving e empty </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">e</td><td>the <a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php" title="An interface for exception. ">IException</a> to move </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="aed938ddc7fa6b6971a1b563c25ec1c8e"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual NRE::Exception::IException::~IException </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
        <tr>
          <td align="right">throw </td><td>(</td><td colspan="2"></td>
        </tr>
        <tr>
          <td align="right"></td><td>)</td><td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span><span class="mlabel">default</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php" title="An interface for exception. ">IException</a> Deconstructor </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a837a351b0d155dd31dc44f50bbe6b5ce"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a>&amp; NRE::Exception::IException::operator= </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a> const &amp;&#160;</td>
          <td class="paramname"><em>e</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">default</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Copy assignment of e into this </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">e</td><td>the <a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php" title="An interface for exception. ">IException</a> to copy into this </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the reference of himself </dd></dl>

</div>
</div>
<a class="anchor" id="ac0d7b8b12ba151d2573b5cdb2e2c2b08"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a>&amp; NRE::Exception::IException::operator= </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php">IException</a> &amp;&amp;&#160;</td>
          <td class="paramname"><em>e</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">default</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Move assignment of e into this, leaving e empty </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">e</td><td>the <a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php" title="An interface for exception. ">IException</a> to move into this </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the reference of himself </dd></dl>

</div>
</div>
<a class="anchor" id="a4457260a3da3363e38b1ed75ca64407e"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="_n_r_e___string_8hpp.php#a20410cefd428aefdf41f418a1e489d66">Utility::String</a> NRE::Exception::IException::toString </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Convert an <a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php" title="An interface for exception. ">IException</a> into a string </p><dl class="section return"><dt>Returns</dt><dd>the converted <a class="el" href="class_n_r_e_1_1_exception_1_1_i_exception.php" title="An interface for exception. ">IException</a> </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li>/mnt/c/Users/abell/Documents/GitHub/NRE-Utility/src/Exception/<a class="el" href="_n_r_e___i_exception_8hpp_source.php">NRE_IException.hpp</a></li>
</ul>
</div><!-- contents -->
<!-- HTML footer for doxygen 1.8.8-->
<!-- start footer part -->
</div>
</div>
</div>
</div>
</body>
</html>
