#!/bin/bash

# This script builds the website by checking it out from CVS.
# It will be run hourly, so should not involve any operations
# (such as building the documentation) which are going to be
# very costly.
#
# Everything in the CVS module "www.xapian.org" will be put onto the website,
# except for things in "www.xapian.org/.scripts", such as this script.

set -e

# FIXME : need to avoid having to update this...
tarball="xapian-core-0.5.4.tar.gz"

if ixion = "`hostname`"; then
 projectdir="/u1/olly/xapian-website-update"
 cvsdir=":pserver:anonymous@cvs.xapian.org:/cvsroot/xapian"
 cvsmodule="www.xapian.org"
 htmldir="/usr/data/www/xapian.org"
else
 projectdir="/home/groups/x/xa/xapian"
 cvsdir=":pserver:anonymous@cvs1:/cvsroot/xapian"
 cvsmodule="www.xapian.org"
 htmldir="${projectdir}/htdocs"
fi

tmpdir="${projectdir}/mkwebsite_$$"
excludedir="${tmpdir}/${cvsmodule}/.scripts"

# Where this script resides in CVS
scriptpath_cvs="${tmpdir}/${cvsmodule}/.scripts/update_website.sh"
# Where this script is running from
scriptpath_active="${projectdir}/update_website.sh"


######################
# BEGIN doing things


# Prepare temporary directory
rm -rf "$tmpdir"
mkdir -p "$tmpdir"
chmod go= "$tmpdir"
chmod g+rws "$tmpdir"

# Check website out of CVS
cd "$tmpdir"
umask 0002
cvs -Ql -d "$cvsdir" export -r HEAD "$cvsmodule"
if ! cmp "$scriptpath_cvs" "$scriptpath_active" >/dev/null 2>&1 ; then
  # copy new version of script ready to replace old version
  cp -a "$scriptpath_cvs" "${scriptpath_active}_new" >/dev/null 2>&1
  mv "${scriptpath_active}_new" "$scriptpath_active"
  exec "$scriptpath_active"
  exit 1
fi

mkdir "${cvsmodule}/docs"
tardir="`echo \"$tarball\"|sed 's/\.tar\.gz//'`"
cd "$projectdir"
if test "$tarball" -nt stamp-unpacked-tarball ; then
  rm -rf "$tardir"
  tar zxf "$tarball"
  chmod go= "$tardir"
  chmod g+rws "$tardir"
  touch stamp-unpacked-tarball
fi
cp -a "$tardir"/docs/*.html "$tardir"/docs/apidoc "$tmpdir/$cvsmodule/docs"
if test stamp-unpacked-tarball -nt stamp-run-ps2pdf ; then
  ps2pdf12 "$tardir"/docs/apidoc.ps apidoc.pdf
  touch stamp-run-ps2pdf
fi
cp -a apidoc.pdf "$tmpdir/$cvsmodule/docs"
if ixion = "`hostname`"; then
  if test stamp-unpacked-tarball -nt stamp-built-sourcedoc ; then
    cd "$tardir"
    # no compiler on sf web server, so configure fails!
    # FIXME is there any easy may around this?
    ./configure 
    cd docs
    make doxygen_source_docs
    cd "$tardir"
    touch stamp-built-sourcedoc
  fi
fi
cp -a "$tardir"/docs/sourcedoc "$tmpdir/$cvsmodule/docs"
cd "$tmpdir"

chmod -R g+rw "${tmpdir}"

# remove other stuff to be excluded.
rm -rf "${excludedir}"

# update website with new image: rsync is good. :)
# don't delete: we want to be able to upload files, and/or autogenerate
# files.
# FIXME: set it up to delete except for in certain directories which are
# generated, 
# rsync -a -r -C --delete --delete-after "${tmpdir}/${cvsmodule}/"* "${htmldir}/"
rsync -a -r -C "${tmpdir}/${cvsmodule}/"* "${htmldir}/"

# Clean up temporary directory.
rm -rf "${tmpdir}"

# put new script in place.
mv "${scriptpath_active}_new" "${scriptpath_active}" >/dev/null 2>&1 

# return successfully.
exit 0
