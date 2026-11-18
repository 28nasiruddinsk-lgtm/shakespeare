#!/bin/bash
# Run by .cpanel.yml on "Deploy HEAD Commit". Copies the repo into every web folder on this account
# that already holds this site (has submit-form.php), so all domains pointing at a copy stay in sync.
# -rlt (not -a): never copy the repo folder's permissions onto a live folder (that once made one 0750 -> "Index of /").
# No --delete: files not in git (includes/mail-config.php, storage/*.csv) stay on the server.
SRC="$(pwd)"
LIVE_CONFIG="$HOME/shakespearepublishingshouse.com/includes/mail-config.php"

for D in "$HOME"/*/ "$HOME"/public_html/ "$HOME"/public_html/*/; do
  D="${D%/}"
  [ -f "$D/submit-form.php" ] || continue
  case "$D" in "$HOME/repositories"*|"$SRC") continue ;; esac

  /usr/bin/rsync -rlt --exclude=.git --exclude=.cpanel.yml --exclude=.gitignore --exclude=deploy.sh "$SRC/" "$D/"

  # The mailbox password is never in git: give a folder the live copy if it has none.
  if [ ! -f "$D/includes/mail-config.php" ]; then
    for C in "$D/shakespearepublishingshouse.com/includes/mail-config.php" "$LIVE_CONFIG"; do
      [ -f "$C" ] && /bin/cp "$C" "$D/includes/" && break
    done
  fi

  /bin/chmod 755 "$D"
  /bin/rm -f "$D/diag.php" "$D/smtp-test.php" "$D/robot.txt"
  echo "deployed to $D"
done
true
