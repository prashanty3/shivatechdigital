#!/bin/bash
set -e

DB_NAME="shivatechdigital"
DB_USER="root"
DB_PASS="shivatechdigital"

echo "🔍 Checking if database '$DB_NAME' exists..."

until mysql -u"$DB_USER" -p"$DB_PASS" -e "SELECT 1;" > /dev/null 2>&1; do
  echo "⏳ Waiting for MySQL to be ready..."
  sleep 2
done

if mysql -u"$DB_USER" -p"$DB_PASS" -e "USE $DB_NAME;" 2>/dev/null; then
  echo "✅ Database '$DB_NAME' already exists — skipping data import."
else
  echo "⚙️ Database '$DB_NAME' not found — creating and importing data..."
  mysql -u"$DB_USER" -p"$DB_PASS" -e "CREATE DATABASE IF NOT EXISTS \`$DB_NAME\`;"
  mysql -u"$DB_USER" -p"$DB_PASS" "$DB_NAME" < /docker-entrypoint-initdb.d/data.sql
  echo "✅ Data import complete."
fi
