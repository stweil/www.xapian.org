<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<? include "version.php"; ?>
<head>
<title>The Xapian Project : Downloads</title>
<? include "styleandmeta.php"; ?>
</head>

<body>

<div id="Content">

<h1>Downloads</h1>

<h2>Stable release</h2>

<? if (0) { ?>
<p>The <? echo $branch ?> branch features substantial improvements.
The <code>Xapian::Stem</code>, <code>Xapian::QueryParser</code>,
and <code>Xapian::TermGenerator</code> classes now all handle
Unicode text encoded as UTF-8, as do Omega and xapian-bindings.
The new <code>Xapian::TermGenerator</code>
class provides indexing functionality.  If you wish, you can
read a <a href="http://wiki.xapian.org/ReleaseOverview/">more
complete overview of the changes</a> in the 1.0 release.
</p>
<? } ?>

<p id="<? echo $branch ?>">The latest stable release is
<B><? echo $version ?></B>:</p>

<ul>
<li> <a HREF="http://oligarchy.co.uk/xapian/<? echo $version ?>/xapian-core-<? echo $version ?>.tar.gz">xapian-core</a>: the Xapian library itself
<a HREF="http://svn.xapian.org/*checkout*/tags/<? echo $version ?>/xapian-core/NEWS">[news]</a>
<li> <a HREF="http://oligarchy.co.uk/xapian/<? echo $version ?>/xapian-omega-<? echo $version ?>.tar.gz">omega</a>: Omega - an application built on Xapian, consisting of indexers and a CGI search frontend.
<a HREF="http://svn.xapian.org/*checkout*/tags/<? echo $version ?>/xapian-applications/omega/NEWS">[news]</a>
<li> <a HREF="http://oligarchy.co.uk/xapian/<? echo $version ?>/xapian-bindings-<? echo $version ?>.tar.gz">xapian-bindings</a>: SWIG and JNI bindings allowing Xapian to be used from various other programming languages
<a HREF="http://svn.xapian.org/*checkout*/tags/<? echo $version ?>/xapian-bindings/NEWS">[news]</a>
<li> <a HREF="http://oligarchy.co.uk/xapian/<? echo $version ?>/Search-Xapian-<? echo $version.$perl_minor ?>.tar.gz">Search::Xapian</a>: Perl bindings
(<a HREF="http://search.cpan.org/~olly/Search-Xapian-<? echo $version.$perl_minor ?>/">on CPAN</a>)
<a href="http://svn.xapian.org/*checkout*/tags/<?
if ($perl_minor === ".0") {
  echo "$version/search-xapian";
} else {
  echo "search-xapian-$version$perl_minor";
}
?>/Changes">[news]</a>
(<a HREF="http://search.cpan.org/~olly/Search-Xapian-<? echo $version.$perl_minor ?>/Changes">on CPAN</a>)
<? if (time() - strtotime($release_date) < 7*24*3600) {
// Show this warning for 7 days after the release
?>
<small>(CPAN mirrors may not update for a few days after a new release)</small>
<? } ?>
</ul>

<p>The wiki contains a <a href="http://wiki.xapian.org/ReleaseNotes">summary of bugs, patches, and workarounds</a>
relating to the latest release.
</p>

<?if ($version_d !== null) {?>
<h2>Development release</h2>

<p>The <a href="http://article.gmane.org/gmane.comp.search.xapian.general/7593"
>latest development version is <?echo $version_d;?></a>.</p>
<?}?>

<h1 id="deb">Debian and Ubuntu packages</h1>

<p>
Packages of xapian-core, xapian-omega, and xapian-bindings (Python, PHP, Ruby,
and Tcl) are available from the Debian and Ubuntu archives for all currently
supported releases except Ubuntu 6.06 (dapper).  The Perl bindings are also
available from the archives for everything except Debian etch and Ubuntu
dapper (the package name is libsearch-xapian-perl).
</p>

<p>
Backported Debian packages of newer versions are available from
<a href="http://backports.org/">backports.org</a>.
</p>

<p>
Backported Ubuntu packages of newer versions are available from a
<a href="https://launchpad.net/~xapian-backports/+archive/ppa">Personal
Package Archive (PPA)</a> on Launchpad maintained by Olly Betts.  Follow
the instructions on that link for how to make use of these.  Currently
all packages are backported to all Ubuntu releases which are still supported,
except that the Perl bindings aren't backported to Ubuntu 6.06 (dapper)
(because the packaging relies heavily on newer features of debhelper).
</p>

<h1 id="RPM">RPM packages</h1>

<!--
If you don't want to try building packages for all the supported bindings,
# you can disable particular bindings by passing these options to rpmbuild:
#
#       - -without csharp        Disable C# bindings
#       - -without php           Disable PHP bindings
#       - -without python        Disable Python bindings
#       - -without tcl8          Disable Tcl8 bindings


   ould you add the note at the top of the rpm spec in xapian-bindings
   (- -without csharp etc.) to the download page - preferably with an example:

   Building the bindings from source without mono:

   $ rpmbuild -ta - -without csharp xapian-bindings-*.tar.gz
   -->

<h2 id="fedora">Fedora</h2>

<p>Fedora 7 and newer have RPM packages for Xapian in their default
repositories, though these may lag behind the latest releases a bit.</p>

<h2 id="rhel">RedHat Enterprise Linux</h2>

<p>Tim Brody has built RPM packages for
<a href="/RPM/rhel4/">RedHat Enterprise Linux 4</a> and
<a href="/RPM/rhel5/">RedHat Enterprise Linux 5</a>
- there are binary packages for i386 and source RPMs.</p>

<p>If you have RHEL 5, copy <a href="/RPM/rhel5/xapian.repo">xapian.repo</a>
into <code>/etc/yum.repos.d/</code> and then you can install the packages
using yum:</p>
<blockquote><pre>
<span id="prompt">$</span> su
<i>enter your root password</i>
<span id="prompt">#</span> cd /etc/yum.repos.d
<span id="prompt">#</span> rm -f xapian.repo
<span id="prompt">#</span> wget http://www.xapian.org/RPM/rhel5/xapian.repo
<span id="prompt">#</span> yum install xapian-omega xapian-bindings-php xapian-bindings-python xapian-bindings-tcl8
</pre></blockquote>

<p>
For RHEL 4, use this <a href="/RPM/rhel4/xapian.repo">xapian.repo</a> instead
if you are using DAG's <code>yum</code>.  Otherwise
you can download the <a href="/RPM/rhel4/">individual packages</a> and install
them by hand.
</p>

<h2 id="srpm">Source RPMs</h2>

<p>
The source RPMs (the three files that end in ".src.rpm") are
not distribution specific - you can build binary RPMs from those
if binary packages aren't available for your architecture or
distribution like so:
</p>
<blockquote><pre>
<span id="prompt">$</span> rpmbuild --rebuild <i>PACKAGENAME</i>.src.rpm
</pre></blockquote>

<h2>Other RPM-based distributions</h2>

<p>These RPM-based distributions have their own RPM packages which might
be better tailored:
</p>

<ul>
<li><a href="http://www.altlinux.com/index.php?module=sisyphus&package=xapian-core">ALT Linux RPMs</a> of xapian-core only</li>
<li><a href="http://software.opensuse.org/download/server:/search/">SuSE RPMs</a> of xapian-core and omega
(and <a href="http://en.opensuse.org/Build_Service/User">instructions for use</a>)</li>
</ul>

<h1>Other Linux Distributions</h1>

<ul>
<li>Gentoo Portage has ebuilds for
<a HREF="http://gentoo-portage.com/dev-libs/xapian">xapian-core</a> and
<a HREF="http://gentoo-portage.com/dev-libs/xapian-bindings">xapian-bindings</a>
</li>
<li>FrugalWare Linux has packaged <a href="http://www.frugalware.org/packages/14387">xapian-core</a>.
</li>
<li>Zenwalk Linux has packaged <a href="http://zur.zenwalk.org/view/package/name/xapian-core">xapian-core</a>.</li>
<li>archlinux has packaged <a href="http://aur.archlinux.org/packages.php?ID=8701">xapian-core</a>, xapian-bindings (<a href="http://aur.archlinux.org/packages.php?ID=19033">Python</a> and <a href="http://aur.archlinux.org/packages.php?ID=14007">PHP</a>),
and <a href="http://aur.archlinux.org/packages.php?ID=21146">Perl Search::Xapian</a>.</li>
</ul>

<h1>FreeBSD Ports Collection</h1>

<p>The FreeBSD Ports Collection has
<a href="http://www.freshports.org/search.php?query=xapian">packages</a> for 
xapian-core, xapian-omega, xapian-bindings (Python and PHP), and Search::Xapian.</p>

<h1>NetBSD pkgsrc</h1>

<p>The NetBSD pkgsrc collection has 
<a href="http://pkgsrc.se/search.php?so=xapian">packages</a>
for xapian-core, xapian-omega, and Search::Xapian.</p>

<h1>OpenBSD</h1>

<p>OpenBSD Ports has <a href="http://openports.se/search.php?so=xapian">packages</a>
for xapian-core and xapian-omega.</p>

<h1>Mac OS X</h1>

<p>The <a href="http://www.finkproject.org/">Fink project</a> has <a
href="http://pdb.finkproject.org/pdb/browse.php?summary=xapian">packages</a>
for xapian-core, Omega, and the Python and Ruby bindings.</p>

<p>Alternatively, <a href="http://www.macports.org/">MacPorts</a> has <a
href="http://www.macports.org/ports.php?by=name&substr=xapian">packages</a>
for xapian-core.</p>

<h1>Cygwin</h1>

<p>
Packages for xapian-core, xapian-bindings, and Search::Xapian are available
from <a href="http://sourceware.org/cygwinports/">Cygwin Ports</a>.
Packages for Omega aren't there yet, but you can get
those from 
<a href="http://rurban.xarch.at/software/cygwin/contrib/xapian/">Reini Urban's site</a>.
</p>

<h1>Microsoft Windows</h1>

<p>There are two options for native Microsoft Windows support (not counting
Cygwin):</p>
	
<p>The standard source tarball can be built using
<a href="http://www.mingw.org/">MSYS+mingw</a>.</p>

<p>Alternatively, Charlie Hull (building on earlier work by Ulrik Petersen)
maintains a separate set of
<a href="http://www.flax.co.uk/xapian_windows.shtml">makefiles for MSVC
and pre-built binaries built with them</a>.  These include support for
Python, PHP, Ruby, C#, and the experimental SWIG-based Java bindings.</p>

</div>

<?php
include "cssnav.php";
?>

</body>
</html>
