chmod 711 ~
chmod 755 ~/public_html
find ~/public_html -type d -exec chmod 755 {} \;
find ~/public_html -type f -exec chmod 644 {} \;
echo "✅ Permissions set for ~/public_html (dirs 755, files 644)."
