<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>The Xapian Project : Features</title>
<? include "styleandmeta.php"; ?>
</head>

<body>

<div id="Content">

<h1>Features</h1>

<p>Noteworthy features of Xapian include:</p>
<ul>

<li> Free Software/Open Source - licensed under the GPL.

<li> <a
HREF="http://svn.xapian.org/trunk/xapian-core/PLATFORMS?view=co">Highly
portable</a> - runs on Linux, Mac OS X, FreeBSD, NetBSD, OpenBSD, Solaris,
HP-UX, Tru64, IRIX, and probably other Unix platforms, as well as
Microsoft Windows.

<li> Written in C++.  Perl bindings are available in the module
  <a href="http://search.cpan.org/~olly/Search-Xapian/">Search::Xapian
  on CPAN</a>.  Java JNI bindings are included in the xapian-bindings module.
  We also support <a href="http://www.swig.org/">SWIG</a> which can generate
  bindings for many languages.  At present those for Python, PHP, TCL, C#,
  and Ruby are working.

<li> Ranked probablistic search - important words get more weight than
unimportant words, so the most relevant documents are more likely to come near
the top of the results list.

<li> Relevance feedback - given one or more documents, Xapian can suggest the
most relevant index terms to expand a query, suggest related documents,
categorise documents, etc.

<li> Phrase and proximity searching - users can search for words
  occuring in an exact phrase or within a specified number of words,
  either in a specified order, or in any order.

<li> Full range of structured boolean search operators ("stock NOT market",
  etc).  The results of the boolean search are ranked by the probablistic
  weights.  Boolean filters can also be applied to restrict a probabilistic
  search.

<li> Supports stemming of search terms (e.g. a search for "football" would
  match documents which mention "footballs" or "footballer").  This helps
  to find relevant documents which might otherwise be missed.  Stemmers
  are currently included for Danish, Dutch, English, Finnish, French,
  German, Italian, Norwegian, Portuguese, Russian, Spanish, and Swedish.

<li> Wildcard search is supported (e.g. "xap*").
  
<li> Supports database files &gt; 2GB - essential for
  <A HREF="docs/scalability.html">scaling to large document collections</A>.

<li> Platform independent data formats - you can build a database on one
  machine and search it on another.

<li> Allows simultaneous update and searching.  New documents become searchable
right away.

</ul>

<p>As well as the library, we supply a number of small example programs, and
a larger application - an indexing and CGI-based application called omega:</p>

<ul>

<li> The indexer supplied can index HTML, PHP, PDF, PostScript,
  OpenOffice/StarOffice, OpenDocument, Microsoft Word, Excel, Powerpoint,
  Word Perfect, RTF, Perl POD documentation, and plain text.
  Adding support for indexing other formats is easy where conversion filters
  are available.  This indexer works using the
  filing system, but we also provide a script to allow the htdig web
  crawler to be hooked in, allowing remote sites to be searched using Omega.

<li> You can also index data from any SQL or other RDBMS supported by the
<A HREF="http://dbi.perl.org/">Perl DBI module</A>.
That includes MySQL, PostgreSQL, SQLite, Oracle, DB2, MS SQL, LDAP, and ODBC.

<li> CGI search front-end supplied with highly customisable appearance.  This
can also be customised to output results in XML or CSV, which is useful if you
just want raw search results which you can process in your own page layout code
for dynamically generated pages, or for integrating search into an AJAX
front-end.

</ul>

</div>

<?php
include "cssnav.php";
?>

</body>
</html>
