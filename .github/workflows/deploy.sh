#!/bin/sh
set -e

vendor/bin/phpunit
npm run build

git add .
(git commit -m "Build frontend assets for deployment to production") || true
(git push) || true

git push origin main

# git checkout production
# git merge master

# git push origin production

# git checkout master
