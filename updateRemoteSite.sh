#!/bin/bash

REMOTE_HOME="/h/pandora/inf/Users/legendi"

function loginAndMoveCurrentToBackup() {
        echo "Waiting for connection..."
        ssh -t legendi@pandora.inf.elte.hu "\$HOME/bin/backupSite.sh"
        read -p "Continue..."
}

function checkoutAndArchiveAndUpload() {
        TMP_LOC="public_html"

        svn export --force https://mentorwiki.dyndns.org/prisvn/school-site/trunk/school-site/ $TMP_LOC

        rm -R $TMP_LOC/.settings
        rm $TMP_LOC/todo.md $TMP_LOC/.project $TMP_LOC/updateRemoteSite.sh

        tar -czvf site.zip --remove-files $TMP_LOC
        scp site.zip legendi@pandora.inf.elte.hu:site.zip # Place it under home
        read -p "Continue..."
}

function loginAndUnzip() {
ssh -t legendi@pandora.inf.elte.hu <<"EOF"
tar -C public -xvzf site.zip
EOF
read -p "Finish..."
rm site.zip
}

loginAndMoveCurrentToBackup
checkoutAndArchiveAndUpload
loginAndUnzip
