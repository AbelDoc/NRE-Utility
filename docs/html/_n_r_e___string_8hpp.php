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
        <title>NRE-Utility: /mnt/c/Users/abell/Documents/GitHub/NRE-Utility/src/Utility/String/NRE_String.hpp File Reference</title>
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
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
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
      <li><a href="files.php"><span>File&#160;List</span></a></li>
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
<li class="navelem"><a class="el" href="dir_68267d1309a1af8e8297ef4c3efbcdba.php">src</a></li><li class="navelem"><a class="el" href="dir_9761b53e3d9349800c0cb59b71c8cd3d.php">Utility</a></li><li class="navelem"><a class="el" href="dir_3e758474f82dd18a66ab1239e566c7da.php">String</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Classes</a> &#124;
<a href="#namespaces">Namespaces</a> &#124;
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">NRE_String.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>Declaration of <a class="el" href="namespace_utility.php" title="Utility&#39;s API. ">Utility</a>'s API's Container : String.  
<a href="#details">More...</a></p>
<div class="textblock"><code>#include &lt;stdexcept&gt;</code><br />
<code>#include &lt;utility&gt;</code><br />
<code>#include &lt;limits&gt;</code><br />
<code>#include &lt;cstring&gt;</code><br />
<code>#include &lt;string&gt;</code><br />
<code>#include &lt;cmath&gt;</code><br />
<code>#include &lt;iostream&gt;</code><br />
<code>#include &quot;NRE_String.tpp&quot;</code><br />
</div>
<p><a href="_n_r_e___string_8hpp_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_utility_1_1_stringable.php">NRE::Utility::Stringable&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Describe an stringable object.  <a href="class_n_r_e_1_1_utility_1_1_stringable.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">NRE::Utility::BasicString&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A basic template string, with dynamic size, guarantee to be in contiguous memory.  <a href="class_n_r_e_1_1_utility_1_1_basic_string.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classstd_1_1hash_3_01_n_r_e_1_1_utility_1_1_string_01_4.php">std::hash&lt; NRE::Utility::String &gt;</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:namespace_n_r_e"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespace_n_r_e.php">NRE</a></td></tr>
<tr class="memdesc:namespace_n_r_e"><td class="mdescLeft">&#160;</td><td class="mdescRight">The NearlyRealEngine's global namespace. <br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:namespace_utility"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespace_utility.php">Utility</a></td></tr>
<tr class="memdesc:namespace_utility"><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="namespace_utility.php" title="Utility&#39;s API. ">Utility</a>'s API. <br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:namespacestd"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacestd.php">std</a></td></tr>
<tr class="memdesc:namespacestd"><td class="mdescLeft">&#160;</td><td class="mdescRight">The stl standard namespace. <br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:a20410cefd428aefdf41f418a1e489d66"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#a20410cefd428aefdf41f418a1e489d66">NRE::Utility::String</a> = BasicString&lt; char &gt;</td></tr>
<tr class="separator:a20410cefd428aefdf41f418a1e489d66"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa6be5787a1191a18b3c8e92875af1bcf"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#aa6be5787a1191a18b3c8e92875af1bcf">NRE::Utility::WideString</a> = BasicString&lt; wchar_t &gt;</td></tr>
<tr class="separator:aa6be5787a1191a18b3c8e92875af1bcf"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ad8bd5e0393b765052e321f653e02ce0e"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:ad8bd5e0393b765052e321f653e02ce0e"><td class="memTemplItemLeft" align="right" valign="top">std::ostream &amp;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#ad8bd5e0393b765052e321f653e02ce0e">NRE::Utility::operator&lt;&lt;</a> (std::ostream &amp;stream, BasicString&lt; T &gt; const &amp;o)</td></tr>
<tr class="separator:ad8bd5e0393b765052e321f653e02ce0e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2de28fe31c0a4b2464d0f35d1b06427c"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a2de28fe31c0a4b2464d0f35d1b06427c"><td class="memTemplItemLeft" align="right" valign="top">std::istream &amp;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#a2de28fe31c0a4b2464d0f35d1b06427c">NRE::Utility::operator&gt;&gt;</a> (std::istream &amp;stream, BasicString&lt; T &gt; &amp;o)</td></tr>
<tr class="separator:a2de28fe31c0a4b2464d0f35d1b06427c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0a2123576c1cb87f5fbfb7e7cbcb2221"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a0a2123576c1cb87f5fbfb7e7cbcb2221"><td class="memTemplItemLeft" align="right" valign="top">BasicString&lt; T &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#a0a2123576c1cb87f5fbfb7e7cbcb2221">NRE::Utility::operator+</a> (BasicString&lt; T &gt; const &amp;lhs, BasicString&lt; T &gt; const &amp;rhs)</td></tr>
<tr class="separator:a0a2123576c1cb87f5fbfb7e7cbcb2221"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2bc2f5c5b4b552bb96618562b1592ee8"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a2bc2f5c5b4b552bb96618562b1592ee8"><td class="memTemplItemLeft" align="right" valign="top">BasicString&lt; T &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#a2bc2f5c5b4b552bb96618562b1592ee8">NRE::Utility::operator+</a> (const T *lhs, BasicString&lt; T &gt; const &amp;rhs)</td></tr>
<tr class="separator:a2bc2f5c5b4b552bb96618562b1592ee8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2906a06a9ba5bb88a13fa6faf40ffa4a"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a2906a06a9ba5bb88a13fa6faf40ffa4a"><td class="memTemplItemLeft" align="right" valign="top">BasicString&lt; T &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#a2906a06a9ba5bb88a13fa6faf40ffa4a">NRE::Utility::operator+</a> (T lhs, BasicString&lt; T &gt; const &amp;rhs)</td></tr>
<tr class="separator:a2906a06a9ba5bb88a13fa6faf40ffa4a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2874ef2ae5397348a3783dd5c75f4314"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a2874ef2ae5397348a3783dd5c75f4314"><td class="memTemplItemLeft" align="right" valign="top">BasicString&lt; T &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#a2874ef2ae5397348a3783dd5c75f4314">NRE::Utility::operator+</a> (BasicString&lt; T &gt; const &amp;lhs, const T *rhs)</td></tr>
<tr class="separator:a2874ef2ae5397348a3783dd5c75f4314"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aab9a9c088752b89badab121421ef879d"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:aab9a9c088752b89badab121421ef879d"><td class="memTemplItemLeft" align="right" valign="top">BasicString&lt; T &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#aab9a9c088752b89badab121421ef879d">NRE::Utility::operator+</a> (BasicString&lt; T &gt; const &amp;lhs, T rhs)</td></tr>
<tr class="separator:aab9a9c088752b89badab121421ef879d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aec0d4adbe6e5dde4d4a75af213161671"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:aec0d4adbe6e5dde4d4a75af213161671"><td class="memTemplItemLeft" align="right" valign="top">BasicString&lt; T &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#aec0d4adbe6e5dde4d4a75af213161671">NRE::Utility::operator+</a> (BasicString&lt; T &gt; &amp;&amp;lhs, BasicString&lt; T &gt; const &amp;rhs)</td></tr>
<tr class="separator:aec0d4adbe6e5dde4d4a75af213161671"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aeee753cb2dde0e121e494f2596711e9c"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:aeee753cb2dde0e121e494f2596711e9c"><td class="memTemplItemLeft" align="right" valign="top">BasicString&lt; T &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#aeee753cb2dde0e121e494f2596711e9c">NRE::Utility::operator+</a> (BasicString&lt; T &gt; const &amp;lhs, BasicString&lt; T &gt; &amp;&amp;rhs)</td></tr>
<tr class="separator:aeee753cb2dde0e121e494f2596711e9c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adf1d2c6a9f6a4ef42125e80fd540e169"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:adf1d2c6a9f6a4ef42125e80fd540e169"><td class="memTemplItemLeft" align="right" valign="top">BasicString&lt; T &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#adf1d2c6a9f6a4ef42125e80fd540e169">NRE::Utility::operator+</a> (BasicString&lt; T &gt; &amp;&amp;lhs, BasicString&lt; T &gt; &amp;&amp;rhs)</td></tr>
<tr class="separator:adf1d2c6a9f6a4ef42125e80fd540e169"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a38ce3db70d9c2ddca7f1a66d1de27e67"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a38ce3db70d9c2ddca7f1a66d1de27e67"><td class="memTemplItemLeft" align="right" valign="top">BasicString&lt; T &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#a38ce3db70d9c2ddca7f1a66d1de27e67">NRE::Utility::operator+</a> (const T *lhs, BasicString&lt; T &gt; &amp;&amp;rhs)</td></tr>
<tr class="separator:a38ce3db70d9c2ddca7f1a66d1de27e67"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a11f47122951e38307e07a18a91d364bf"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a11f47122951e38307e07a18a91d364bf"><td class="memTemplItemLeft" align="right" valign="top">BasicString&lt; T &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#a11f47122951e38307e07a18a91d364bf">NRE::Utility::operator+</a> (T lhs, BasicString&lt; T &gt; &amp;&amp;rhs)</td></tr>
<tr class="separator:a11f47122951e38307e07a18a91d364bf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aee00912d450d2b76b720821d6c0ae74b"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:aee00912d450d2b76b720821d6c0ae74b"><td class="memTemplItemLeft" align="right" valign="top">BasicString&lt; T &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#aee00912d450d2b76b720821d6c0ae74b">NRE::Utility::operator+</a> (BasicString&lt; T &gt; &amp;&amp;lhs, const T *rhs)</td></tr>
<tr class="separator:aee00912d450d2b76b720821d6c0ae74b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a94b91a69db40b3bf9c4596be9d753e7f"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a94b91a69db40b3bf9c4596be9d753e7f"><td class="memTemplItemLeft" align="right" valign="top">BasicString&lt; T &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="_n_r_e___string_8hpp.php#a94b91a69db40b3bf9c4596be9d753e7f">NRE::Utility::operator+</a> (BasicString&lt; T &gt; &amp;&amp;lhs, T rhs)</td></tr>
<tr class="separator:a94b91a69db40b3bf9c4596be9d753e7f"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Declaration of <a class="el" href="namespace_utility.php" title="Utility&#39;s API. ">Utility</a>'s API's Container : String. </p>
<dl class="section author"><dt>Author</dt><dd>Louis ABEL </dd></dl>
<dl class="section date"><dt>Date</dt><dd>16/05/2019 </dd></dl>
<dl class="section copyright"><dt>Copyright</dt><dd>CC-BY-NC-SA </dd></dl>
</div><h2 class="groupheader">Typedef Documentation</h2>
<a class="anchor" id="file_a20410cefd428aefdf41f418a1e489d66"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">using <a class="el" href="_n_r_e___string_8hpp.php#a20410cefd428aefdf41f418a1e489d66">NRE::Utility::String</a> = typedef BasicString&lt;char&gt;</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Basic string using simple caracter </p>

</div>
</div>
<a class="anchor" id="file_aa6be5787a1191a18b3c8e92875af1bcf"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">using <a class="el" href="_n_r_e___string_8hpp.php#aa6be5787a1191a18b3c8e92875af1bcf">NRE::Utility::WideString</a> = typedef BasicString&lt;wchar_t&gt;</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Basic string using wide caracter </p>

</div>
</div>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="file_a0a2123576c1cb87f5fbfb7e7cbcb2221"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">BasicString&lt;T&gt; NRE::Utility::operator+ </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; const &amp;&#160;</td>
          <td class="paramname"><em>lhs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; const &amp;&#160;</td>
          <td class="paramname"><em>rhs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Concatenate two strings into a new one </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">lhs</td><td>the left string part </td></tr>
    <tr><td class="paramname">rhs</td><td>the right string part </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the new string </dd></dl>

</div>
</div>
<a class="anchor" id="file_a2bc2f5c5b4b552bb96618562b1592ee8"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">BasicString&lt;T&gt; NRE::Utility::operator+ </td>
          <td>(</td>
          <td class="paramtype">const T *&#160;</td>
          <td class="paramname"><em>lhs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; const &amp;&#160;</td>
          <td class="paramname"><em>rhs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Concatenate two strings into a new one </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">lhs</td><td>the left string part </td></tr>
    <tr><td class="paramname">rhs</td><td>the right string part </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the new string </dd></dl>

</div>
</div>
<a class="anchor" id="file_a2906a06a9ba5bb88a13fa6faf40ffa4a"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">BasicString&lt;T&gt; NRE::Utility::operator+ </td>
          <td>(</td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>lhs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; const &amp;&#160;</td>
          <td class="paramname"><em>rhs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Concatenate a character with a string into a new string </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">lhs</td><td>the character </td></tr>
    <tr><td class="paramname">rhs</td><td>the string </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the new string </dd></dl>

</div>
</div>
<a class="anchor" id="file_a2874ef2ae5397348a3783dd5c75f4314"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">BasicString&lt;T&gt; NRE::Utility::operator+ </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; const &amp;&#160;</td>
          <td class="paramname"><em>lhs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const T *&#160;</td>
          <td class="paramname"><em>rhs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Concatenate two strings into a new one </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">lhs</td><td>the left string part </td></tr>
    <tr><td class="paramname">rhs</td><td>the right string part </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the new string </dd></dl>

</div>
</div>
<a class="anchor" id="file_aab9a9c088752b89badab121421ef879d"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">BasicString&lt;T&gt; NRE::Utility::operator+ </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; const &amp;&#160;</td>
          <td class="paramname"><em>lhs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>rhs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Concatenate a string with a character into a new string </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">lhs</td><td>the string </td></tr>
    <tr><td class="paramname">rhs</td><td>the character </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the new string </dd></dl>

</div>
</div>
<a class="anchor" id="file_aec0d4adbe6e5dde4d4a75af213161671"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">BasicString&lt;T&gt; NRE::Utility::operator+ </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; &amp;&amp;&#160;</td>
          <td class="paramname"><em>lhs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; const &amp;&#160;</td>
          <td class="paramname"><em>rhs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Concatenate two strings into a new one </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">lhs</td><td>the left string part </td></tr>
    <tr><td class="paramname">rhs</td><td>the right string part </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the new string </dd></dl>

</div>
</div>
<a class="anchor" id="file_aeee753cb2dde0e121e494f2596711e9c"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">BasicString&lt;T&gt; NRE::Utility::operator+ </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; const &amp;&#160;</td>
          <td class="paramname"><em>lhs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; &amp;&amp;&#160;</td>
          <td class="paramname"><em>rhs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Concatenate two strings into a new one </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">lhs</td><td>the left string part </td></tr>
    <tr><td class="paramname">rhs</td><td>the right string part </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the new string </dd></dl>

</div>
</div>
<a class="anchor" id="file_adf1d2c6a9f6a4ef42125e80fd540e169"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">BasicString&lt;T&gt; NRE::Utility::operator+ </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; &amp;&amp;&#160;</td>
          <td class="paramname"><em>lhs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; &amp;&amp;&#160;</td>
          <td class="paramname"><em>rhs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Concatenate two strings into a new one </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">lhs</td><td>the left string part </td></tr>
    <tr><td class="paramname">rhs</td><td>the right string part </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the new string </dd></dl>

</div>
</div>
<a class="anchor" id="file_a38ce3db70d9c2ddca7f1a66d1de27e67"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">BasicString&lt;T&gt; NRE::Utility::operator+ </td>
          <td>(</td>
          <td class="paramtype">const T *&#160;</td>
          <td class="paramname"><em>lhs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; &amp;&amp;&#160;</td>
          <td class="paramname"><em>rhs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Concatenate two strings into a new one </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">lhs</td><td>the left string part </td></tr>
    <tr><td class="paramname">rhs</td><td>the right string part </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the new string </dd></dl>

</div>
</div>
<a class="anchor" id="file_a11f47122951e38307e07a18a91d364bf"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">BasicString&lt;T&gt; NRE::Utility::operator+ </td>
          <td>(</td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>lhs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; &amp;&amp;&#160;</td>
          <td class="paramname"><em>rhs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Concatenate a character with a string into a new string </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">lhs</td><td>the character </td></tr>
    <tr><td class="paramname">rhs</td><td>the string </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the new string </dd></dl>

</div>
</div>
<a class="anchor" id="file_aee00912d450d2b76b720821d6c0ae74b"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">BasicString&lt;T&gt; NRE::Utility::operator+ </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; &amp;&amp;&#160;</td>
          <td class="paramname"><em>lhs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const T *&#160;</td>
          <td class="paramname"><em>rhs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Concatenate two strings into a new one </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">lhs</td><td>the left string part </td></tr>
    <tr><td class="paramname">rhs</td><td>the right string part </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the new string </dd></dl>

</div>
</div>
<a class="anchor" id="file_a94b91a69db40b3bf9c4596be9d753e7f"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">BasicString&lt;T&gt; NRE::Utility::operator+ </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; &amp;&amp;&#160;</td>
          <td class="paramname"><em>lhs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>rhs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Concatenate a string with a character into a new string </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">lhs</td><td>the string </td></tr>
    <tr><td class="paramname">rhs</td><td>the character </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the new string </dd></dl>

</div>
</div>
<a class="anchor" id="file_ad8bd5e0393b765052e321f653e02ce0e"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">std::ostream&amp; NRE::Utility::operator&lt;&lt; </td>
          <td>(</td>
          <td class="paramtype">std::ostream &amp;&#160;</td>
          <td class="paramname"><em>stream</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; const &amp;&#160;</td>
          <td class="paramname"><em>o</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Output stream operator for the object </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">stream</td><td>the stream to add the object's string representation </td></tr>
    <tr><td class="paramname">o</td><td>the object to add in the stream </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the modified stream </dd></dl>

</div>
</div>
<a class="anchor" id="file_a2de28fe31c0a4b2464d0f35d1b06427c"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">std::istream&amp; NRE::Utility::operator&gt;&gt; </td>
          <td>(</td>
          <td class="paramtype">std::istream &amp;&#160;</td>
          <td class="paramname"><em>stream</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php">BasicString</a>&lt; T &gt; &amp;&#160;</td>
          <td class="paramname"><em>o</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Input stream operator for the object </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">stream</td><td>the stream to take the object data </td></tr>
    <tr><td class="paramname">o</td><td>the object to fill from the stream </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the modified stream </dd></dl>

</div>
</div>
</div><!-- contents -->
<!-- HTML footer for doxygen 1.8.8-->
<!-- start footer part -->
</div>
</div>
</div>
</div>
</body>
</html>
